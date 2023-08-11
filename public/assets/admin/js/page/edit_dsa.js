function edit_dsa(){
    var id = $("#id").val();
    var name = $("#name").val();
    var email = $("#email").val();
    var phone_no = $("#phone_no").val();
    var location = $("#location").val();
    var status = $("#status").val();
    console.log(id);
    console.log(status);
   
    
    let data = {"id":id,"status":status,"name":name,"email":email,"phone_no":phone_no,"location":location};
    let url= "dsa/edit-dsa";
    let method = "POST";
    callAPI(url,method,data).then((apiResponse) => {
        console.log(apiResponse);
        if(apiResponse.status == true) {
            successMessage(apiResponse.message);
            window.location.href = "/1credit/admin/admin/dsa-list";
        }else{
            errorMessage(apiResponse.message);
        }
        
    });
    
}