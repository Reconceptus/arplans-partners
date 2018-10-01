$(function () {
    'use strict';
    $(function () {
        document.cookie = "cart=" + cartId + "; path=/; expires=" + new Date(new Date().getTime() + 60 * 1000 * 60 * 24 * 10);
        askPage('/item', {cart: cartId});
        getCart();
    });

    $(document).on('click', '#send', function () {
        askPage('/item')
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
                askPage(url, params);
            }
        } else {
            delete params[paramName];
            askPage(url, params);
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
    askPage(url, params);
}

function resetFilter() {
    var url = $('#url').text();
    var params = JSON.parse($('#params').text());
    for (key in params) {
        if (key !== 'category' && key !== 'sort') {
            delete params[key];
        }
    }
    askPage(url, params);
}

function openItem(id) {
    askPage('/item/' + id);
}

/**
 * Запросить страницу с переданными параметрами
 * @param url
 * @param params
 */
function askPage(url, params = {}) {
    var rend = function (data) {
        if (data.status === 'success') {
            $(mainElement).html(data.html);
            $('#url').text(url);
            $('#params').text(JSON.stringify(params));
            if (data.count) {
                $('#numCart').text(data.count);
            }
            if (data.inCart) {
                $('#inCart').text(JSON.stringify(data.inCart));
            }
        }
    };
    sendRequest(url, params).then(data => rend(data));
}

function sendRequest(url, params = {}) {
    var promise = $.Deferred();
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
            promise.resolve(result)
        }
    });
    return promise;
}

function getCart() {
    function f(data) {
        $('#inCart').text(JSON.stringify(data));
        $('#numCart').text(data.length);
    }

    sendRequest('/cart/get-cart', {guid: cartId}).then(data => f(data));
}

function toCart(id) {
    function f(data) {
        if (data.status === 'success') {
            var cart = JSON.parse($('#inCart').text()),
                numCart = parseInt($('#numCart').text());
            cart[id] = data.count;
            $('#inCart').text(JSON.stringify(cart));
            $('#numCart').text(numCart + data.count);
        }
    }
    sendRequest('/cart/to-cart', {id: id, cart: cartId}).then(data => f(data));
}


$(document).on('mouseup', '.range', function () {
    addParams({'minarea': $('#input-with-keypress-0').val(), 'maxarea': $('#input-with-keypress-1').val()});
});