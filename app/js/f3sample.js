$(function() {
    $('button').on('click', function(){
        var html = "";
        
        $.ajax({
            type: "get",
            url: "http://localhost:8000/api/messages",
            dataType: "json",
            success: function (response) {
                for( var msg of response) {
                    html +='<p>'+msg.id+' '+msg.message+'</p>';
                }
                $('#msg-container').html(html);
            },
            error: function(jqXHR, status, error) {
                alert('error: '+jqXHR.responseText+status+error);
            }
        });
    });
});