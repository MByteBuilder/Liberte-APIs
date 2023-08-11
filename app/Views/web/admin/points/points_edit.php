<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"><?php if(!empty($points_list)){ echo 'Points Edit';}else{?> Points Add<?php }?></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="team"><?php if(!empty($points_list)){ echo 'Edit';}else{?>Add<?php }?></a></li>
                                            <li class="breadcrumb-item active">Points List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <?php if(!empty($points_list[0])){?> 
                                            <input type="hidden" id="id" value="<?php echo $points_list[0]->id;?>">
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
                                                    <label for="example-text-input" class="form-label"> Name </label>
                                                    <input class="form-control" type="text" value="<?php if(!empty($points_list)){ echo $points_list[0]->module_name;}?>" id="module_name" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label"> Purpose </label>
                                                    <input class="form-control" type="search" value="<?php if(!empty($points_list)){ echo $points_list[0]->point_name;}?>" id="point_name" disabled>
                                                </div>
                                            </div>
                                            <?php if(!empty($points_list)){ ?>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label"> Points </label>
                                                    <input class="form-control" type="text" id="points" value="<?php if(!empty($points_list)){ echo $points_list[0]->required_point;}?>">
                                                </div>
                                            </div>
                                            <?php }?>
                                            
                                            
                                            <?php //if(empty($team_data)){ ?>
                                            <!-- <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-select" id="country">
                                                        <option>Select</option>
                                                        <?php //if(!empty($country)){ foreach($country as $country_list){?>
                                                        <option value="<?php //echo $country_list->id;?>"><?php //echo $country_list->name;?></option>
                                                        <?php// }}?>
                                                      
                                                    </select>
                                                </div>
                                            </div> -->
                                            <?php //}?>
                                           

                                            <div class="col-md-12">
                                                <div class="mt-4">
                                                <?php if(!empty($points_list)){ ?>
                                                    <button type="buttom" class="btn btn-primary w-md" onclick="edit();">Edit</button>
                                                <?php }?>
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
                     function edit(){
                        let points = $("#points").val();
                        let id = $("#id").val();
                      
                        let APIData = {'id':id,'points':points}
                        $.ajax({
                        url: "<?php echo BASEPATH ?>api/v1/point-edit",
                        type: "post",
                        data: APIData,
                        success: function(response) {
                            console.log(response);
                            alert(response.status);
                            if(response.status == true){
                               
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