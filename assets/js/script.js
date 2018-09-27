$(function () {
    'use strict';
    $(function () {
        sendRequest('/item', {'category': 1})
    });

    $(document).on('click', '#send', function () {
        sendRequest('/item', {'category': 1})
    });
    $(document).on('click', '.reset-filter', function () {
        resetFilter();
    });

    $(document).on('click', '.filter-checkbox', function () {
        var name = $(this).prop('name');
        if ($(this).prop('checked')) {
            addParam(name, 'on')
        } else {
            addParam(name, '')
        }
    });
});

function addParam(paramName, paramVal) {
    var url = $('#url').text();
    var params = JSON.parse($('#params').text());
    if (paramName) {
        if (paramVal) {
            if (params[paramName] !== paramVal) {
                params[paramName] = paramVal;
                sendRequest(url, params);
            }
        } else {
            delete params[paramName];
            sendRequest(url, params);
        }
    }
}

function addParams(arr) {
    var url = $('#url').text();
    var params = JSON.parse($('#params').text());
    for (key in arr) {
        if (arr[key]) {
            if (params[key] !== arr[key]) {
                params[key] = arr[key];
            }
        } else {
            delete params[key];
        }
    }
    sendRequest(url, params);
}

function resetFilter() {
    var url = $('#url').text();
    var params = JSON.parse($('#params').text());
    for (key in params) {
        if (key !== 'category' && key !== 'sort') {
            delete params[key];
        }
    }
    sendRequest(url, params);
}

function sendRequest(url, params = {}) {
    $.ajax({
        url: "http://" + server + url,
        data: params,
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Accept', '*/*');
            xhr.setRequestHeader('Cache-Control', 'no-cache');
            xhr.setRequestHeader('Authorization', "Bearer asd");
        },
        headers: {'Authorization': 'Bearer asd'},
        success: function (result) {
            $(mainElement).html(result);
            $('#url').text(url);
            $('#params').text(JSON.stringify(params));
        }
    });
}

$(document).on('mouseup', '.range', function () {
    addParams({'minarea': $('#input-with-keypress-0').val(), 'maxarea': $('#input-with-keypress-1').val()});
});