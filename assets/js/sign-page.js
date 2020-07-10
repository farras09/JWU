$(document).ready(function (){

    $('#in-pass').bind("enterKey",function(e){
        doLogin();
     });
    $('#in-user').bind("enterKey2",function(e){
       doLogin();
    });
    $('#in-pass').keyup(function(e){
        if(e.keyCode == 13)
        {
            $(this).trigger("enterKey");
        }
    });
    $('#in-user').keyup(function(e){
        if(e.keyCode == 13)
        {
            $(this).trigger("enterKey2");
        }
    });

});

function registerToogle(){
    $('#register-title').addClass('active');
    $('.back-btn').addClass('active');
    $('#login-title').removeClass('active');
    $('.login-page').css('height', "auto");
    $('#form-register').addClass('active');
    $('#form-register').addClass('mb-3');
    // $('#form-register').css('margin-top', "0");
    // var heightLogin = $('#form-login').height();
    $('#form-login').removeClass('active');
    $('#form-login').removeClass('mb-3');
    // $('#form-login').css('margin-top', -(heightLogin));
    $('.bottom-action').removeClass('active');
}
function backToLogin(){
    $('#register-title').removeClass('active');
    $('.back-btn').removeClass('active');
    $('#login-title').addClass('active');
    $('.login-page').css('height', "100vh");
    // var heightRegister = $('#form-register').height();
    $('#form-register').removeClass('active');
    $('#form-register').removeClass('mb-3');
    // $('#form-register').css('margin-top', -(heightRegister));
    $('#form-login').addClass('active');
    $('#form-login').addClass('mb-3');
    // $('#form-login').css('margin-top', "0");
    $('.bottom-action').addClass('active');
}
function doLogin(){
    var username = document.getElementById("in-user").value;
    var password = document.getElementById("in-pass").value;
    if(username != "" && password != ""){
        $(".for-loading").addClass("start");
        setTimeout(function(){ 
            $("#form-login").submit();
        }, 1000);
    }else{
        
    }
}