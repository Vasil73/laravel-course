import './bootstrap';

$.ajax = function (param) {

};
setInterval(function() {
    $.ajax({
        url: "{{ route('logs.index') }}",
        type: 'GET',
        success: function(data) {
            $('#logs-container').html(data);
        }
    });
}, 5000);
