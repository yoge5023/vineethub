<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <?php include "filelink.php" ?>
</head>

<body>
<?php include "header.php" ?>
<main id="main" class="main">

    <div class="pagetitle">
  <h1>ADD GYM Member</h1>
   </div>
   <div class="container-fluid">

        <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">


</div>
</div>
</div>
<!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"><div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
        <li class="breadcrumb-item active">Membership Form</li>
    </ol>
</div>
</h4>

                        <div id="basic-example">
                            <!-- Seller Details -->
                            <h3>Member Details</h3>
                            <section>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input">First name</label>
                                                <input type="text" class="form-control" id="basicpill-firstname-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-lastname-input">Gender</label>
                                                <select class="form-select" aria-label="Default select example">
                                                   <option selected>Select gender</option>
                                                   <option value="1">Male</option>
                                                   <option value="2">Female</option>
                                                   <!-- <option value="3">Transgender</option> -->
                                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-phoneno-input">Phone</label>
                                                <input type="text" class="form-control" id="basicpill-phoneno-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-email-input">Emergency number</label>
                                                <input type="number" class="form-control" id="basicpill-email-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-address-input">Address</label>
                                                <textarea id="basicpill-address-input" class="form-control" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            
                            </section>

                            <!-- Company Document -->
                           
                            <section>
                              
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-pancard-input">Height</label>
                                                <input type="text" class="form-control" id="basicpill-pancard-input">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-vatno-input">Weight</label>
                                                <input type="text" class="form-control" id="basicpill-vatno-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-cstno-input">Category</label>
                                                <select class="form-select" aria-label="Default select example">
                                                   <option selected>Select Category</option>
                                                   <option value="1">Ectomorph </option>
                                                   <option value="2">Mesomorph </option>
                                                   <option value="3">Endomorph</option>
                                                  </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-servicetax-input">DOB</label>
                                                <input type="date" class="form-control" id="basicpill-servicetax-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-companyuin-input">Medical Problem</label>
                                                <textarea type="text" class="form-control" id="basicpill-companyuin-input" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                             
                            </section>

                            <!-- Bank Details -->
                            <h3>Payment Details</h3>
                            <section>
                                <div>
                                
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-namecard-input">Disabled</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">YES</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">NO</label>
                                                      </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label>Plan</label>
                                                    <select class="form-select">
                                                        <option selected>Select Plan</option>
                                                        <option value="AE">1 month</option>
                                                        <option value="VI">3 months</option>
                                                        <option value="MC">6 months</option>
                                                        <option value="DI">12 months</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-cardno-input">Email</label>
                                                    <input type="email" class="form-control" id="basicpill-cardno-input">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-card-verification-input">Payment Method</label>
                                                    <input type="text" class="form-control" id="basicpill-card-verification-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                <label>Timing</label>
                                                    <select class="form-select">
                                                        <option selected>Select time</option>
                                                        <option value="AE">7:00-8:00am</option>
                                                        <option value="VI">8:00-9:00am</option>
                                                        <option value="MC">10:00-11:00am</option>
                                                        <option value="DI">5:00-6:00pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-card-verification-input">Amount</label>
                                                    <input type="text" class="form-control" id="basicpill-card-verification-input">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </section>
                           <a href="addmemberlist.php"><button type="button" class="btn btn-primary">Submit</button></a>
                            <button type="button" class="btn btn-secondary">Reset</button>
                            
                        </div>

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
   
</main>
<?php include "footer.php" ?>
    
</body>
</html>