<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipments</title>
    <?php include "filelink.php" ?>
</head>
<body>
<?php include "header.php" ?>
<main id="main" class="main">

    <div class="pagetitle">
  <h1>Staff member</h1>
  
   </div><!-- End Page Title -->

   <section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

      
       

                

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="addmember.php" >ADD Staff member <i class="fas fa-plus-circle"></i></a>
              
            </div>

            <div class="card-body">
              <h5 class="card-title">Staff member<span>| List</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Porfile</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Vineet kushwaha</td>
                    <td>vineet@gmail.com</td>
                    <td>8579474858</td>
                    <td>Tech team</td>
                    <td> <a href="staff-profile.php"><button type="button" class="btn btn-primary">View profile</button></a></td>
                  </tr>
                  <tr>
                    <td>rishabh kumar</td>
                    <td>rishabh@gmail.com</td>
                    <td>487543657</td>
                    <td>gym manager</td>
                    <td> <a href="staff-profile.php"><button type="button" class="btn btn-primary">View profile</button></a></td>
                  </tr>
                  <tr>
                    <td>mohit</td>
                    <td>moti@gmail.com</td>
                    <td>887574575</td>
                    <td>gym trainer</td>
                    <td> <a href="staff-profile.php"><button type="button" class="btn btn-primary">View profile</button></a></td>
                  </tr>
                  <tr>
                    <td>rohit parihar</td>
                    <td>rohit@gmail.com</td>
                    <td>7694687565</td>
                    <td>caretaker </td>
                    <td> <a href="staff-profile.php"><button type="button" class="btn btn-primary">View profile</button></a></td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->

        
      </div>
    </div><!-- End Left side columns -->

   
  </div>
  </section>
  <!-- Button trigger modal -->
</main><!-- End #main -->
<?php include "footer.php" ?>
</body>
</html>