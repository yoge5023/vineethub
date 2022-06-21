<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership payment</title>
    <?php include "filelink.php" ?>
</head>
<body>
<?php include "header.php" ?>
<main id="main" class="main">

    <div class="pagetitle">
     <h1>Membership Renewal</h1>
   </div>
         <div class="container bg-white py-4 ">
            
            <form action="" method="post">
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Name</label>
                    <input type="text" class="form-control" value="vineet" id="basicpill-firstname-input">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Gender</label>
                    <input type="text" class="form-control" value="Male" id="basicpill-firstname-input">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">Phone</label>
                    <input type="text" class="form-control" value="849829827" id="basicpill-phoneno-input">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="basicpill-email-input">Email</label>
                    <input type="text" class="form-control" value="vineet@gmail.com" id="basicpill-email-input">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">D.O.B</label>
                    <input type="text" class="form-control" value="3-aug-2003" id="basicpill-phoneno-input">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="basicpill-email-input">Address</label>
                    <input type="text" class="form-control" value="rz/15-a, bindapur new Delhi 110059" id="basicpill-email-input">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="basicpill-namecard-input">Disabled</label><br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1">
                      <label class="form-check-label" for="inlineCheckbox1">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" checked="">
                      <label class="form-check-label" for="inlineCheckbox2">NO</label>
                    </div>
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
                    <label>Plan</label>
                    <select class="form-select">
                      <option selected="">Select Plan</option>
                      <option value="AE">1 month</option>
                      <option value="VI">3 months</option>
                      <option value="MC">6 months</option>
                      <option value="DI">12 months</option>
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
            <div class="float-end ">
              <a href="invoices.php"><button type="button" name="submit" class="btn btn-primary ">PAY</button></a>
            </div>
            </form>
          </div>
       
</main>
<?php include "footer.php" ?>

    
</body>
</html>