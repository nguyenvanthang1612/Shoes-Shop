function post(url, data, successCallback, failureCallback) {
    event.preventDefault();

    const token = $('meta[name="token"]').attr('content')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });

    $.ajax({
        data: {
            _token,
            ...data
        },
        url,
        type: 'POST'
    })
    .done(successCallback)
    .fail(failureCallback);
}
