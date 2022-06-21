<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoices</title>
    <?php include "filelink.php" ?>

</head>
<body>
    <?php include "header.php" ?>
    <main id="main" class="main">

    <div class="pagetitle">
  <h1>INVOICES</h1>
</div>
<div class="container">
<div class="container-fluid">



<!-- end page title -->
<div class="row" id="printData">
    <div class="col-lg-12">
        <div class="card py-4">
            <div class="card-body">
                <div class="invoice-title">
                    <h4 class="float-end font-size-16">invoices ID # 12345</h4>
                    <div class="mb-4">
                    <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="">
          <span class="d-none d-lg-block"><span style="color: #f99927;">QUADS</span> GYM</span>
         </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <address>
                            <strong>Billed To:</strong>
                            <strong>vineet kumar</strong><br>
                          <strong> Phone number : 84382639</strong><br>
                            <strong>Email ID : vineet@gmail.com</strong><br>
                            
                        </address>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-6 mt-3">
                        <address>
                            <strong>Payment Method:</strong><br>
                           Cash<br>
                           
                        </address>
                    </div>
                    <div class="col-sm-6 mt-3 text-sm-end">
                        <address>
                            <strong>Payment Date:</strong><br>
                             16-October-2022<br><br>
                        </address>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Renewal Date</th>
                            <th>expaier Date</th>
                            <th>Plan</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15-October-2022</td>
                            <td>15-Septmber-2022</td>
                            <td>1 Month</td>
                            <td>₹800</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><h3>Total</h3></td>
                            <td><h4>₹800</h4></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-print-none">
                    <div class="float-end">
                        <a onclick="dataprint('printData')" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                        <a href="addmemberlist.php" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

</div>
</div>
</main>
    <?php include "footer.php" ?>

    <script>
         dataprint=(divName)=> {
           
             var printContents = document.getElementById(divName).innerHTML;
             var originalContents = document.body.innerHTML;
             document.body.innerHTML = printContents;
             window.print();
             document.body.innerHTML = originalContents;
    }
    </script>
</body>
</html>