$(document).ready(function(){

    (function($) {
        "use strict";

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

    function verify(){
        var token = $("input[name=_token]").val();
        var phone = $("input[name=mobile]").val();
        var password = $("input[name=password]").val();
        $.ajax({
            type:"post",
            url:"/login-check",
            data:$("#login").serialize(),
            cache:false,
            success:function(data){
                console.log('Login successful'+data.slug);
                if(data.status == "success"){
                    var dashUrl = data.slug;
                    window.location.assign(dashUrl);
                    $(".modal").fadeIn();
                }else{
                    alert('Please check your login credentials');
                }
                
            },error:function (data){
                alert('Fail to login ..');
            }
        })
     }
    
    

    // validate contactForm form
    $(function() {
        $('#login').validate({
            rules: {
                mobile: {
                    required: true,
                    minlength: 10,
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                mobile: {
                    required: "Please enter your mobile number",
                    minlength: "Mobile number can not less than 10 digits"
                },
                  password: {
                    required: "Please enter your password.",
                    minlength: "Please enter password minimum 5 characters"
                }
            },
            submitHandler: function(form) {
                verify();
            }
        })
    })
        
 })(jQuery)
})