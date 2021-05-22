function post(url, data, successCallback, failureCallback) {

    const token = $('meta[name="token"]').attr('content')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });

    $.ajax({
        data: {
            _token: token,
            ...data
        },
        url,
        type: 'POST'
    })
    .done(successCallback)
    .fail(failureCallback)
}

function destroy (url, successCallback, failureCallback) {
    const token = $('meta[name="token"]').attr('content')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });

    $.ajax({
        data: {
            _token: token,
            _method: 'DELETE',
            ...data
        },
        url,
        type: 'POST'
    })
    .done(successCallback)
    .fail(failureCallback);
}