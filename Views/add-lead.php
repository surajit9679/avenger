<?php
        $msg_success ="";
        $msg_error ="";

        if(isset($_SESSION)){
            if(isset($_SESSION['success'])){
                $msg_success = $_SESSION['success'];
            }
            else if(isset($_SESSION['error'])){
                $msg_error = $_SESSION['error'];
            }
        }
?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Add Lead</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Add Lead</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <form class="col-xl-12 lead_form" action="<?php echo base_url("LeadController/addLead") ?>" method="POST">
                            <div class="card">
                                <div class="card-body">
                                <p class="text-center text-danger msg"><?php echo $msg_error; ?></p>
                                <p class="text-center text-success"><?php echo $msg_success; ?></p>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Lead Name</label>
                                                <input type="text" name="lead_name" class="form-control lead_name" id="formrow-firstname-input">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="formrow-email-input" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control email" id="formrow-email-input">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="formrow-email-input" class="form-label">Mobile Number</label>
                                                <input type="number" class="form-control mobile" name="mobile" id="formrow-email-input">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="formrow-inputZip" class="form-label">Address</label>
                                                <input type="text" name="address" class="form-control address" id="formrow-inputZip">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="formrow-inputCity" class="form-label">City</label>
                                                <input type="text" name="city" class="form-control city" id="formrow-inputCity">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="formrow-inputState" class="form-label">State</label>
                                                <select id="formrow-inputState" name="state" class="form-select state">
                                                    <option selected="" value="">Choose...</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="formrow-inputZip" class="form-label">Zip</label>
                                                <input type="text" name="zip" class="form-control zip" id="formrow-inputZip">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="project_name" class="form-label">Project Name</label>
                                                <input type="text" name="project_name" class="form-control project_name" id="project_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="tower_no" class="form-label">Tower No</label>
                                                <input type="text" name="tower_no" class="form-control tower_no" id="tower_no">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="flat_no" class="form-label">Flat No</label>
                                                <input type="text" name="flat_no" class="form-control flat_no" id="flat_no">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="owner_name" class="form-label">Owner name</label>
                                                <input type="text" name="owner_name" class="form-control owner_name" id="owner_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="inte_name" class="form-label">Interior name</label>
                                                <input type="text" name="inte_name" class="form-control inte_name" id="inte_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="carpent_name" class="form-label">Carpenter name</label>
                                                <input type="text" name="carpent_name" class="form-control carpent_name" id="carpent_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="other" class="form-label">Other</label>
                                                <input type="text" name="other" class="form-control other" id="other">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="statu" class="form-label">status</label>
                                                <input type="text" name="statu" class="form-control statu" id="statu">
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon align-self-center">
                                            <div class="button-items" style="    text-align: right;">
                                                <button type="button" class="btn btn-light waves-effect waves-light lead_reset">
                                                    <i class="fas fa-eraser font-size-14 align-middle me-2"></i> Reset
                                                </button>
                                                <button type="submit" class="btn btn-success waves-effect waves-light add-lead">
                                                    <i class="fas fa-save font-size-14 align-middle me-2"></i> Save
                                                </button>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </form>
                    </div>



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

<script>


function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      };

$(".add-lead").click(function(){
    var leadname = $(".lead_name").val();
    var email = $(".email").val();
    var mobile = $(".mobile").val();
    var address = $(".address").val();
    var city = $(".city").val();
    var state = $(".state").val();
    var zip = $(".zip").val();

    if(leadname ==""){
        $(".msg").html("Please Enter Lead Neme.")
        $(".lead_name").focus();
        return false;
    }
    else if(email ==""){
        $(".msg").html("Please Enter Email.")
        $(".email").focus();
        return false;
    }
    else if(IsEmail(email)==false){
            $(".msg").html("Please Enter Valid Email.")
            $(".email").focus();
            return false;
        }
    else if(mobile ==""){
        $(".msg").html("Please Enter Mobile No.")
        $(".mobile").focus();
        return false;
    }
    else if(mobile.length !==10){
        $(".msg").html("Mobile No Maximun 10 Digits.")
        $(".mobile").focus();
        return false;
    }
    else if(address ==""){
        $(".msg").html("Please Enter Address.")
        $(".address").focus();
        return false;
    }
    else if(city ==""){
        $(".msg").html("Please Enter City Name.")
        $(".city").focus();
        return false;
    }
    else if(state ==""){
        $(".msg").html("Please Enter State Name.")
        $(".state").focus();
        return false;
    }
    else if(zip ==""){
        $(".msg").html("Please Enter Zip Code.")
        $(".zip").focus();
        return false;
    }
});

$(".lead_reset").click(function(){
        $(".lead_form")['0'].reset();
})

</script>
