<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"><?php if(!empty($profile_list)){ echo 'Profile Edit';}else{?>Profile Edit<?php }?></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="team"><?php if(!empty($profile_list)){ echo 'Edit';}else{?>Add<?php }?></a></li>
                                            <li class="breadcrumb-item active">Profile List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <?php if(!empty($profile_list[0])){?> 
                                            <input type="hidden" id="id" value="<?php echo $profile_list[0]->admin_id;?>">
                                            <?php }?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        <h4 class="card-title">Textual inputs</h4>
                                        <p class="card-title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, est accusamus consectetur quo accusantium id.</p>
                                    </div> -->
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Name</label>
                                                    <input class="form-control" type="text" value="<?php if(!empty($profile_list[0])){ echo $profile_list[0]->admin_name;}?>" id="name">
                                                    <span id='name_error'  class=' pull-left' style='color:red'></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Phone</label>
                                                    <input class="form-control" type="search" value="<?php if(!empty($profile_list[0])){ echo $profile_list[0]->phone_no;}?>" id="phone">
                                                    <span id='phone_error'  class=' pull-left' style='color:red'></span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Email</label>
                                                    <input class="form-control" type="email" id="email" value="<?php if(!empty($profile_list[0])){ echo $profile_list[0]->admin_email;}?>">
                                                    <span id='email_error'  class=' pull-left' style='color:red'></span>
                                                </div>
                                            </div>
                                            
                                            
                                            <!-- <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="example-month-input" class="form-label">Month</label>
                                                    <input class="form-control" type="month" value="2019-08" id="example-month-input">
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="example-week-input" class="form-label">Week</label>
                                                    <input class="form-control" type="week" value="2019-W33" id="example-week-input">
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="example-time-input" class="form-label">Time</label>
                                                    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-password-input" class="form-label">Password</label>
                                                    <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                                </div>
                                            </div> -->
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-select" id="country">
                                                        <option>Select</option>
                                                        <?php if(!empty($country)){ foreach($country as $country_list){?>
                                                        <option value="<?php echo $country_list->id;?>" <?php if($country_list->id == $profile_list[0]->country){ echo "selected";}?>><?php  echo $country_list->name;?></option>
                                                        <?php }}?>
                                                        <!-- <option>Small select</option> -->
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            
                                            <!-- <div class="col-md-4 my-auto">
                                                <p class="label">Example Label</p>
                                                <div class="form-check d-inline-block form-switch form-switch-md mb-3" dir="ltr">
                                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                                    <label class="form-check-label" for="customSwitchsizemd">Yes</label>
                                                </div>
                                                <div class="form-check d-inline-block form-switch form-switch-md mb-3 ml-2" dir="ltr">
                                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd" checked>
                                                    <label class="form-check-label" for="customSwitchsizemd">No</label>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-4 my-auto">
                                                <p class="label">Example Label</p>
                                                <div class="form-check d-inline-block mb-3">
                                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                    <label class="form-check-label" for="formRadios1">
                                                        Male 
                                                    </label>
                                                </div>

                                                <div class="form-check d-inline-block mb-3 ml-2">
                                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1">
                                                    <label class="form-check-label" for="formRadios1">
                                                        Female
                                                    </label>
                                                </div>
                                            </div> -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                <img src="<?php echo $profile_list[0]->image;?>" style="width:80px;">
                                                    <label for="formFile" class="form-label"> Image </label>
                                                    <input type="hidden" name="old_img" id="old_img" value="<?php echo $profile_list[0]->image;?>">
                                                    <input class="form-control" type="file" name="new_img" id="new_img" value="">
                                                    <span id='img_error'  class=' pull-left' style='color:red'></span>
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-12">
                                                <div class="form-check mb-3 mt-4">
                                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                                    <label class="form-check-label" for="formCheck1">
                                                        I accept all term & conditon
                                                    </label>
                                                </div>
                                            </div> -->

                                            <div class="col-md-12">
                                                <div class="mt-4">
                                                
                                                    <button type="buttom" class="btn btn-primary w-md" onclick="submit();">Submit</button>
                                               
                                                </div>
                                            </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    function submit(){
                    let id = $("#id").val();
                    let name = $("#name").val();
                    let email = $("#email").val();
                    let phone = $("#phone").val();
                    let country = $("#country").val();
                    var img = $("#new_img").val();
                    var fileToUpload = $('#new_img')[0].files[0];

                    var old_img = $("#old_img").val();

                   
                    if(name.replace(/\s/g, '') == "") {
                        document.getElementById('name_error').innerHTML = "Please Enter Name";
                        return false;
                    }
                    if(name.length == 0){
                        document.getElementById('name_error').innerHTML = "Please Enter Name";
                        return false;
                    }else{
                        document.getElementById('name_error').innerHTML = "";
                    }
                    if(phone.length == 0){
                        document.getElementById('phone_error').innerHTML = "Please Enter Phone No";
                        return false;
                    }else{
                        document.getElementById('phone_error').innerHTML = "";
                    }
                    if(email.length == 0){
                    document.getElementById('email_error').innerHTML = "Please Enter Email";
                    return false;
                    }else{
                        document.getElementById('email_error').innerHTML = "";
                    }
                    // if(img.length == 0){
                    //     document.getElementById('img_error').innerHTML = "Please Select Image";
                    //     return false;
                    // }else{
                    //     document.getElementById('img_error').innerHTML = "";
                    // }
                    let APIData = {'id':id,'name':name,'email':email,'phone_no':phone,'country_code':country,'logo':fileToUpload, 'old_image':old_img}
                    // alert(name);
                    // alert(email);
                    // alert(phone);
                    // alert(country);
                    $.ajax({
                        url: "<?php echo BASEPATH ?>api/v1/edit-profile",
                        type: "get",
                        data: APIData,
                        success: function(response) {
                            if(response.message == "Data Successfully Added"){
                                //window.location.replace("<?php //echo BASEPATH ?>console/dashboard");
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data Successfully Updated...',
                                    text: 'Thank you'
                                })
                                setTimeout(function () {
                               // window.location.reload();
                            }, 2000);

                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Sorry...',
                                    text: 'Invalid Data!'
                                })
                            }
                            
                        }
                    });
                    }
                </script>
                <script>
                     function edit(){
                        let name = $("#name").val();
                        let id = $("#id").val();
                        //alert(id);
                        let phone = $("#phone").val();
                        let APIData = {'id':id,'name':name,'phone_no':phone}
                        $.ajax({
                        url: "<?php echo BASEPATH ?>api/v1/team-edit",
                        type: "post",
                        data: APIData,
                        success: function(response) {
                            if(response.message == "Team updated"){
                               
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data Successfully Updated...',
                                    text: 'Thank you'
                                })
                                setTimeout(function () {
                                window.location.reload();
                            }, 2000);

                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Sorry...',
                                    text: 'Invalid Data!'
                                })
                            }
                            
                        }
                    });
                     }
                </script>