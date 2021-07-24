<?php
$msg ="";
        if(isset($_SESSION)){
            if(isset($_SESSION['error'])){
                $msg = $_SESSION['error'];
            }
        }
?>


<body>

    <div class="contianer-fluid" style="    height: 100vh;
    background: #fffbfb;">
<div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-danger ">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="text-white p-4">
                                            <h5 class="text-white">Welcome Back !</h5>
                                            <p>Sign in to continue to Avenger Ply</p>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-end">
                                        <img src="<?php echo base_url()  ?>/public/images/login.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="<?php echo base_url() ?>" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo base_url()  ?>/public/images/logo-sm.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="<?php echo base_url() ?>" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo base_url()  ?>/public/images/logo-sm.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                     <p class="text-center text-danger msg"><?php echo $msg; ?></p>

                                    <form class="form-horizontal" action="<?php echo base_url('UserController/Login') ?>" method="POST">
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username'];} ?>" name="username" id="username" placeholder="Enter username">
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>" id="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i id="eye" class="far fa-eye-slash"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" name="remember" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>
                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-danger waves-effect waves-light Login-user" type="submit">Log In</button>
                                        </div>
            
                                        

                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="fas fa-lock me-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>
    </div>

</body>
<script>

function adserboxopen() {
        $(".ad-ser-box").slideToggle();
        $(".ad-ser-col").toggleClass("active");
    };



$('#password-addon').click(function() {
        if ($('#password').attr('type') == 'text') {
                $('#password').attr('type', 'password');
                $("#eye").removeClass('far fa-eye');
                $("#eye").addClass('far fa-eye-slash');
        } 
        else {
                $('#password').attr('type', 'text');
                $("#eye").removeClass('far fa-eye-slash');
                $("#eye").addClass('far fa-eye');
        }
    });


$(".Login-user").click(function(){
    var username = $("#username").val();
    var password = $("#password").val();

    if(username ==""){
        $(".msg").html("Please Enter Your Username.!!");
        $("#username").focus();
        return false;
    }
    else if(password ==""){
        $(".msg").html("Please Enter Your Password.!!");
        $("#password").focus();
        return false;
    }
})

</script>

</html>