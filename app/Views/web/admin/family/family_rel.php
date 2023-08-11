<style>
    @media(max-width:1280px){
    .sm-table-admin-scroll{
            overflow-x: scroll;
        }
    }
</style>
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Family Relation Management</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                            <li class="breadcrumb-item active">DataTables</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        
                                        <h4 class="card-title">Default Datatable</h4>
                                        <p class="card-title-desc">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                        </p>
                                    </div> -->
                                    <div class="card-body">
                                        <div class="tbleSearch">
                                            <div class="entries">
                                                <!-- Shows -->
                                                <!-- <select class="form-select" id="" aria-label="Default select example">
                                                    <option selected>30 Entries</option>
                                                    <option value="1">10 Entries</option>
                                                    <option value="2">20 Entries</option>
                                                    <option value="3">30 Entries</option>
                                                  </select> -->
                                            </div>
                                            <div class="right">
                                                <!-- <div class="searchByDate">
                                                    Search by date : 
                                                    <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                    to
                                                    <input class="form-control" type="date" value="2019-09-19" id="example-date-input">
                                                </div>
                                                <div class="search">
                                                    <input class="form-control" type="text" placeholder="Search">
                                                    <i class="bx bx-search-alt"></i>
                                                </div>-->
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Please Enter Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row g-3">
                                                                <div class="col-md-12">
                                                                    <label for="inputState" class="form-label">How many days ?</label>
                                                                    <select id="inputState" class="form-select">
                                                                      <option selected>Choose...</option>
                                                                      <option>...</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-12">
                                                                    <p class="mb-2">In which page</p>
                                                                    <div class="form-check d-inline-block">
                                                                      <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                      <label class="form-check-label" for="gridCheck">
                                                                        Home
                                                                      </label>
                                                                    </div>
                                                                    <div class="form-check d-inline-block ml-2">
                                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                        <label class="form-check-label" for="gridCheck">
                                                                          Listing
                                                                        </label>
                                                                      </div>
                                                                  </div>

                                                                <div class="col-12">
                                                                  <label for="inputAddress" class="form-label">Which category</label>
                                                                  <select id="inputState" class="form-select">
                                                                    <option selected>Choose...</option>
                                                                    <option>...</option>
                                                                  </select>
                                                                </div>
                                                                <div class="col-12">
                                                                  <label for="inputAddress2" class="form-label">Total Reward required</label>
                                                                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                                </div>
                                                           
                                                                <div class="col-12">
                                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                              </form>
                                                        </div>

                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>id</th>
                                                <th>name</th>
                                                
                                                <th>status</th>
                                                <th>action</th>
                                                
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <?php
                                            if(!empty($family_data)){
                                            $x=1;
                                            foreach($family_data as $list){ 
                                            ?>
                                        <tr>
                                            <td>
                                                <?php echo $x++;?>
                                            </td>
                                            <td>
                                                <?php echo $list->id;?>
                                            </td> 
                                            <td>
                                                <?php echo $list->name;?>
                                            </td> 
                                            
                                            
                                            <!-- <td>
                                            <?php //echo substr($list->message,0,20)."...";?>
                                                <?php //echo $list->status;?>
                                            </td> -->
                                            
                                           
                                            <td>
                                            <?php if($list->status == 1){
                                                echo "<a href='javascript:void(0)' class= 'edit_btn btn btn-sm btn-success mt-2 mx-2'><i class='fas fa-check' type='button' ></i></a>";
                                            }else{
                                                echo "<a href='javascript:void(0)' class= 'edit_btn btn btn-sm btn-danger mt-2 mx-2'><i class='fa fa-window-close' type='button'></i></a>";
                                            }?>
                                            </td>
                                           
                                            <td>
                                            <a href="javascript:void(0)" class="delete_btn btn btn-sm btn-danger mt-2 mx-2" onclick='delete_btn(<?php echo $list->id;?>)'><i class="fa big-icon fa-trash" type="button"></i></a>

                                            <a href="<?php echo BASEPATH; ?>console/team/edit?id=<?php echo $list->id; ?>" class='edit_btn btn btn-sm btn-warning mt-2 mx-2'  ><i class="fa fa-list-alt" aria-hidden="true" type='button'></i></a>
                                            </td>
                                            
                                        </tr>
                                    <?php   
                                    }}else{
                                    ?>
                                    <tr>
                                        <td><?php echo "No Data Found.."; ?></td>
                                    </tr>
                                    <?php 
                                    } 
                                ?>

                                            
                                            </tbody>
                                        </table>
                                        <!-- <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="datatable-buttons_previous"><a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                        <li class="paginate_button page-item next" id="datatable-buttons_next"><a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
     
        $(document).ready(function () {
            $('#datatable').DataTable();
        });

        function delete_btn(id){
                //let id = $("#id").val();
                //alert(id);
            swal.fire({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover it!",
                icon: "warning",
                showCancelButton: true,
                cancelButtonColor: '#d33',
            })
            .then((willDelete) => {
                if (willDelete.value == true) {
                    // let url = "team-del";
                    // let method = "GET";
                    // let Data = {"id":id};
                    
                   
                    let APIData = {'id':id}
                    $.ajax({
                        url: "<?php echo BASEPATH ?>api/v1/team-del",
                        type: "get",
                        data: APIData,
                        success: function(response) {
                            if(response.message == "Delete Successfull"){
                                // window.location.replace("<?php //echo BASEPATH ?>console/dashboard");
                                window.location.reload();
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
            });
        }
</script>