
function btn_login(){
    var email = $("#email").val();
    var password = $("#password").val();
  
    let url = "login-action";
    let data = {"email":email, "password":password};
    $.ajax({
        url: url,
        data: data,
        type: 'POST',
        async:false,
        success: function(data){
            if(data==1){
                console.log(data);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: "Welcome",
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(function () {
                    window.location = "dashboard";
                }, 1500);
            }else{
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: "You Have Entered Wrong Credentials :)",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    });
}
