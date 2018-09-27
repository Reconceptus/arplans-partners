$(function () {
    'use strict';
    $(function () {
        sendRequest('/item', {'category': 1})
    });
    $(document).on('click', '#send', function () {
        sendRequest('/item', {'category': 1})
    });
});

function addParam(paramName, paramVal) {
    var url = $('#url').text();
    var params = JSON.parse($('#params').text());
    if (paramName) {
        if (paramVal) {
            params[paramName] = paramVal;
        } else {
            delete params[paramName]
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