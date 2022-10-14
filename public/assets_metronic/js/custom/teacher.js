
$(document).ready(function(){
    getLIDList();
});

function getLIDList(){
    var CID = $('#CID').val();
    $.ajax({
        url: "{{ route('getLIDList') }}",
        type: 'POST',
        data: {
            _token: "{{ csrf_token() }}",
            cid: CID
        },
        success: function(response) {
            var html = '';
            for(var i=0; i < response.length; i++){
                html += "<option value='"+ response[i]['id'] +"'>"+ response[i]['name'] + "</option>"
            }
            $('#LID').html(html);
        }
    });
}
