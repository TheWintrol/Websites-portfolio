
function createLike(data) {
    $.ajax({
    url: routeUrl + '/' + data,
    method: 'POST',
    data: {
        _token: token,
        some_data: data
    },
    success: function(response) {
        console.log(response);
    },
    error: function(error) {
        console.log(error);
    }
});
}