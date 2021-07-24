<?php
$successmsg ="";
$Errormsg ="";

        if(isset($_SESSION)){
            if(isset($_SESSION['success'])){
                $successmsg = $_SESSION['success'];
            }
            else if(isset($_SESSION['error'])){
                $Errormsg = $_SESSION['error'];  
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
                                            <h5 class="text-white">Reset Password !</h5>
                                            <p>Reset Password Avenger Ply</p>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-end">
                                        <img src="<?php echo base_url() ?>/public/images/login.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="<?php echo base_url() ?>" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo base_url() ?>/public/images/logo-sm.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index.html" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo base_url() ?>/public/images/logo-sm.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="<?php echo base_url('UserController/Resetpassword') ?>" method="POST">
                                        <p class="text-center text-danger msg"><?php echo $Errormsg;?></p>
                                        <p class="text-center text-success"><?php echo $successmsg;?></p>
                                    <div class="mb-3">
                                            <label class="form-label">Old Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="current_password" id="current_password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light old_pass" type="button" id="password-addon"><i class="far fa-eye-slash op"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light new_pass" type="button" id="password-addon"><i class="far fa-eye-slash np"></i></button>
                                            </div>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="con_password" id="con_password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light con_pass" type="button" id="password-addon"><i class="far fa-eye-slash cp"></i></button>
                                            </div>
                                        </div>

                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-danger waves-effect waves-light Reset-password" type="submit">Reset</button>
                                        </div>
            
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>Want to login ? <a href="<?php echo base_url() ?>" class="fw-medium text-primary"> Login now </a> </p>
                               
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
    }

$(".Reset-password").click(function(){
    var current_pass = $("#current_password").val();
    var new_password = $("#new_password").val();
    var con_password = $("#con_password").val();

    if(current_pass ==""){
        $(".msg").html('Please Enter Your Old Password.!!');
        $("#current_password").focus();
        return false;
    }
    else if(new_password ==""){
        $(".msg").html('Please Enter Your New Password.!!');
        $("#new_password").focus();
        return false;
    }
    else if(new_password !== con_password){
        $(".msg").html('Confirm Password Donot Match.!!');
        $("#con_password").focus();
        return false;
    }
 });


 $('.old_pass').click(function() {
        if ($('#current_password').attr('type') == 'text') {
                $('#current_password').attr('type', 'password');
                $(".op").removeClass('far fa-eye');
                $(".op").addClass('far fa-eye-slash');
        } 
        else {
                $('#current_password').attr('type', 'text');
                $(".op").removeClass('far fa-eye-slash');
                $(".op").addClass('far fa-eye');
        }
    });

$('.new_pass').click(function() {
        if ($('#new_password').attr('type') == 'text') {
                $('#new_password').attr('type', 'password');
                $(".np").removeClass('far fa-eye');
                $(".np").addClass('far fa-eye-slash');
        } 
        else {
                $('#new_password').attr('type', 'text');
                $(".np").removeClass('far fa-eye-slash');
                $(".np").addClass('far fa-eye');
        }
    });

$('.con_pass').click(function() {
        if ($('#con_password').attr('type') == 'text') {
                $('#con_password').attr('type', 'password');
                $(".cp").removeClass('far fa-eye');
                $(".cp").addClass('far fa-eye-slash');
        } 
        else {
                $('#con_password').attr('type', 'text');
                $(".cp").removeClass('far fa-eye-slash');
                $(".cp").addClass('far fa-eye');
        }
    });

</script>

</html>