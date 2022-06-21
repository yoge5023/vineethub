<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Charts / ApexCharts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <?php include "filelink.php" ?>
  
</head>

<body>

 <?php include "header.php" ?>
  

  <main id="main" class="main">
  <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
<h4 class="mb-sm-0 font-size-18">Membership Form</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
        <li class="breadcrumb-item active">Membership Form</li>
    </ol>
</div>

</div>
</div>
</div>
<!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Registration</h4>

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
                                                   <option value="3">Transgender</option>
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
                            <h3>Company Document</h3>
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
                            <h3>Bank Details</h3>
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
                                        
                                    </form>
                                </div>
                            </section>

                            <!-- Confirm Details -->
                            <h3>Confirm Detail</h3>
                            <section>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                            </div>
                                            <div>
                                                <h5>Confirm Detail</h5>
                                                <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

     

    </div> <!-- container-fluid -->
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include "footer.php" ?>

</body>

</html>