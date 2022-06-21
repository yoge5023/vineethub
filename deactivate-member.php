<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deactivate member</title>
    <?php include "filelink.php" ?>
</head>
<body>
<?php include "header.php" ?>
<main id="main" class="main">

    <div class="pagetitle">
  <h1>Deactivate members</h1>
  
   </div><!-- End Page Title -->

   <section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

      
       

                

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

           

            <div class="card-body">
              <h5 class="card-title"></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Age</th>
                    
                    <th scope="col">Last Date</th>
                    <th scope="col">Active ID</th>
                  </tr>
                </thead>
                <tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                       
                                    <tr class="odd">
                                            <td class="sorting_1 dtr-control">anish</td>
                                            <td>anish@gmail.com</td>
                                            <td>8474887833</td>
                                            <td>61</td>
                                            <td>04-06-2022</td>                                            
                                            <td><button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" >
                                            Active
                                                            </button></td>
                                        </tr><tr class="even">
                                            <td class="sorting_1 dtr-control">ayushi</td>
                                            <td>ayushi@gmail.com</td>
                                            <td>7483748465</td>
                                            <td>39</td>
                                            <td>07-05-2022</td>
                                            
                                            <td><button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" >
                                            Active
                                                            </button></td>
                                        </tr>
                                       <tr class="even">
                                            <td class="sorting_1 dtr-control">kalin bhaiya</td>
                                            <td>kalin@gmail.com</td>
                                            <td>859474374</td>
                                            <td>36</td>
                                            <td>02-08-2022</td>                                            
                                            <td><button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" >
                                            Active
                                                            </button></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1 dtr-control">rishabha</td>
                                            <td>rishabhboy@gmail.com</td>
                                            <td>8810526439</td>
                                            <td>23</td>
                                            <td>05-09-2022</td>                                           
                                            <td><button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light" >
                                            Active
                                                            </button></td>
                                        </tr><tr class="even">
                                            <td class="sorting_1 dtr-control">rohit</td>
                                            <td>rohitprihar@gmail.com</td>
                                            <td>947729993</td>
                                            <td>19</td>
                                            <td>04-06-2022</td>                                        
                                            <td><a href="addmemberlist.php"><button type="button" class="btn btn-success   btn-sm btn-rounded waves-effect waves-light" >
                                            Active
                                                            </button></a></td>
                                        </tr></tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->

        
      </div>
    </div><!-- End Left side columns -->

   
  </div>
  </section>
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> GYM Member </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                               <div class="container">
                                   <div class="row" style="align-items: center;">
                                   <div class="col-md-2"><i style="font-size:35px;" class="fas fa-user"></i></div>
                                   <div class="col-md-10" style="text-transform: uppercase;"><h5>anish choti bachi</h5></div>
                                   </div>
                               </div>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap">
                                      <tbody><tr>
                                          <td>Emergency number</td>
                                          <td>9823459238</td>
                                      </tr> 
                                      <tr>
                                          <td>Gender</td>
                                          <td>male</td>
                                      </tr>
                                      <tr>
                                          <td>Category</td>
                                          <td>Ectomorph</td>
                                      </tr>
                                      <tr>
                                          <td>Disablet</td>
                                          <td>No</td>
                                      </tr>
                                      <tr>
                                          <td>Date of join</td>
                                          <td>26-may-2022</td>
                                      </tr>
                                      <tr>
                                          <td>GYM status</td>
                                          <td><button type="button" class="btn btn-success">Active</button></td>
                                      </tr>
                                    </tbody></table>
                                </div>
                            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="member-profile.php"><button type="button" class="btn btn-primary">View profile</button></a>
      </div>
    </div>
  </div>
</div>


</main><!-- End #main -->
<?php include "footer.php" ?>
</body>
</html>