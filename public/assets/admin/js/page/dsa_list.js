function delete_btn(id){
    console.log(id);
    swal.fire({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover it!",
        icon: "warning",
        showCancelButton: true,
        cancelButtonColor: '#d33',
    })
      .then((willDelete) => {
        // console.log(willDelete.value);
        if (willDelete.value == true) {
          let url = "dsa/delete-dsa";
          let method = "GET";
          let data = {"id":id};
          callAPI(url,method,data).then((apiResponse) => {
            console.log(apiResponse);
            if(apiResponse.status == false) {
              
                errorMessage(apiResponse.message);
            }else{
               
                successMessage(apiResponse.message);
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        });
        }else {
          swal.fire("Data is safe!");
        }
      });
}