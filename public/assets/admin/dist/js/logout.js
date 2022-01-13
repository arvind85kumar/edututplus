$(document).ready(function(e){
    $(".modal").show();
    function logout(){
        $.ajax({
            type:"post",
            url:"/logout",
            data:{logout:true,"_token": $('#csrf-token').attr("content")},
            cache:false,
            success:function(data){
                console.log('Logout successful');
                if(data.status == "success"){
                    window.location.assign("/");
                    
                    $(".show-msg").html(`<div class="bg-success">You have logout successfully</div>`);
                }else{
                    alert('Issue in logout');
                }
                
            },error:function (data){
                alert('Fail to logout ..');
            }
        })
     }
    
     $("#logout").click(function(e){
        logout();
     });
});