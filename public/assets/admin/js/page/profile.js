
"use strict";
  function edit(){
    var profileName = $("#profile_name").val();
    var profilePhoneNo = $("#phone_no").val();
    var profileAddress = $("#address").val();
    var profileImage =  $('#image')[0].files[0];
    var profileId = $("#profile_id").val();
   var formData = new FormData();
   formData.append("name",profileName);
   formData.append("phone_no",profilePhoneNo);
   formData.append("address",profileAddress);
   formData.append("image",profileImage);
   formData.append("id",profileId);
 
   
    $.ajax({
      url: APIBASEPATH+"subadmin/edit-profile",
      type: "POST",
      cache: false,
      data: formData,
      processData: false,
      contentType: false,
      dataType: "JSON",
      success: function(data) {
        alert("success");
         
      },
      error: function(data) {
          alert('Error at add data');
      }
    });
  }
