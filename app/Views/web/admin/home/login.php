<div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-12 col-lg-12 col-md-12" style="background:#1F2641">
                        <!-- <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul> -->
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="<?php echo ADMINASSETSPATH; ?>images/logo.png" alt="" height="38">
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Welcome Back !</h5>
                                            <p class="text-muted mt-2">Sign in to continue to LBT.</p>
                                        </div>
                                        <form class="mt-4 pt-2">
                                            <div class="mb-3">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label">Password</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password" id="password" autocomplete="off">
                                                    <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="button" id="btn_login" onclick="login();">Log In</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>

        <script>
            function login(){
                let email = $("#username").val();
                let password = $("#password").val();
                let hasErr = 0;
                if(email.length == 0){
                    $('#username').css({'border' : '2px solid red'});
                    $('#username').focus();
                    hasErr++;
                }else{
                    $('#username').css({'border' : ''});
                }

                if(password.length == 0){
                    $('#password').css({'border' : '2px solid red'});
                    $('#password').focus();
                    hasErr++;
                }else{
                    $('#password').css({'border' : ''});
                }
                if(hasErr == 0){
                    let APIData = {'username':email,'password':password}
                    $.ajax({
                        url: "<?php echo BASEPATH ?>console/login-action",
                        type: "post",
                        data: APIData,
                        success: function(response) {
                            if(response == 1){
                                window.location.replace("<?php echo BASEPATH ?>console/dashboard");
                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Sorry...',
                                    text: 'Invalid user login credential!'
                                })
                            }
                            
                        }
                    });
                }
            }
        </script>