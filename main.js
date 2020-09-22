$('document').ready(function(){
    var username_taken = false;
    var email_taken =false;
    $("#username").on('blur',function(){
        var username = $("#username").val();
        if(username == ''){
            username_taken = false;
            return;
        }
        $.ajax({
            url:'server.php',
            type:'post',
            data:{
                'username_check':1,
                'username':username,
            },
            success: function(response){
                if(response == 'taken'){
                    username_taken = false;
                }
            }
        })
    })
    $("#email")
})