import $ from 'jquery';
import toastr from 'toastr';
window.jQuery = $;
window.$ = $;
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "2000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }


$(".friend").hide();
$("#friends").on("click", function(){
    let maincontent = $(".main-content");
    if(maincontent.attr('id') == 'half-width'){
        maincontent.removeClass('col-9').addClass('col-12');
        maincontent.attr('id','full-width');
    }else{
        maincontent.removeClass('col-12').addClass('col-9');
        maincontent.attr('id','half-width');
    }

    $(".friend").toggle();

    if($('.friend').is(':visible')){
        $('.friend').attr('id','show');
    }else{
        $('.friend').attr('id','hide');
    }
    /*
    var friend = $("#friend");
    var friendWidth = friend.width();
  
    if (friend.css("right") == "0px") {
      friend.animate({ right: -friendWidth });
    } else {
      friend.animate({ right: 0 });
    }
    */
    
});
$("#fullscreen").on("click", function(){
    alert()
    var elem = document.documentElement;
    elem.requestFullscreen();
});

  
var csrfToken = $('meta[name="token]').attr('content');

/* HELPERS FUNCTIONS */

// REDIRECT FUNCTION
function ajax_response(response){
    toastr[response.type](response.message);
    if(response.status == 1){
        setInterval(() => {
            window.location.reload();
        }, 2000);
    }else if(response.status == 2){
        setInterval(() => {
            window.location.assign(response.redirect);
        }, 2000);
    }
}

/* END HELPERS */

/* MAIN FUNCTIONS */

// LOGIN FUNCTION
function login(){
    $.ajax({
        type : 'POST',
        url  : '/auth/login',
        headers: {'X-CSRF-TOKEN': csrfToken},
        dataType: 'JSON',
        data: $("#loginForm").serialize(),
        success: function(response){
            ajax_response(response);
        }
    });
}
// REGISTER FUNCTION
function register(){ 
    $.ajax({
        type : 'POST',
        url  : '/auth/register',
        headers: {'X-CSRF-TOKEN': csrfToken},
        dataType: 'JSON',
        data: $("#registerForm").serialize(),
        success: function(response){
            ajax_response(response);
        }
    });
}

/* END MAIN FUNCTIONS */


/* EVENTS */

// LOGIN EVENT
$("#loginbutton").on("click", function(){
    login();
});
// REGISTER EVENT
$("#registerbutton").on("click", function(){
    register();
});

/* END EVENTS */