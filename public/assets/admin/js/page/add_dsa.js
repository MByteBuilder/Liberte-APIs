function add_dsa(){
var name = $("#name").val();
var phone_no = $("#phone_no").val();
var email = $("#email").val();
var location = $("#location").val();
var status = $("#status").val();

var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
var pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;



    if(name.length == 0){
        document.getElementById('name_error').innerHTML = "Enter Your Name";
        return false;
    }else{
        document.getElementById('name_error').innerHTML = "";
    }
    if(email.length == 0){
        document.getElementById('email_error').innerHTML = "Please Enter Your Email";
        return false;
    }else{
        document.getElementById('email_error').innerHTML = "";
    }
    if(email.match(pattern)){
        hasError++;
        document.getElementById('email_error').innerHTML = "";
    }else{
        document.getElementById('email_error').innerHTML = "Please Enter a valid email";
        return false;
    }
    if(phone_no.length == 0){
        document.getElementById('phone_no_error').innerHTML = "Enter Your Phone Number";
        return false;
    }else{
        document.getElementById('phone_no_error').innerHTML = "";
    }
    if(isNaN(phone_no)){
    document.getElementById('phone_no_error').innerHTML = "Enter a valid phone no.";
        return false;
    }else{
        document.getElementById('phone_no_error').innerHTML = "";
    }
    if(phone_no.match(phoneNum)){
        document.getElementById('phone_no_error').innerHTML = "";
    }else{
        document.getElementById('phone_no_error').innerHTML = "Enter a correct phone no.";
        return false;
    }
    


    // if(hasError == 0){
        let method = "POST";
         let url = "dsa/add-dsa";
        let data = {"name":name,"status":status,"location":location,"email":email,"phone_no":phone_no};
        // $.ajax({
        //     url: url,
        //     data: data,
        //     type: 'POST',
        //     async:false,
        //     success: function(data){
        //         console.log(data.status);
        //         if(data.status == 'true'){
        //             swal.fire("DSA added successfully",{
        //                 icon: "success",
        //             });
        //         }if(data == 2){
        //             swal.fire("This email or Phone no already exist!",{
        //                 icon: "success",
        //             });
        //         }if(data.status == 'false'){
        //             swal.fire("Please try again",{
        //                 icon: "error",
        //             });
        //         }
            
        //     }
            
        // });


        callAPI(url,method,data).then((apiResponse) => {
            console.log(apiResponse);
            if(apiResponse.status == true) {
                successMessage(apiResponse.message);
                setTimeout(function () {
                    window.location = "dashboard";
                }, 1500);
            }else{
               
                errorMessage(apiResponse.message);
            }
        });
    // }
}
    