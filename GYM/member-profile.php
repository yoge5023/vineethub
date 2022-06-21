<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile member</title>
    <?php include "filelink.php" ?>
  </head>
  <body>
    <?php include "header.php" ?>
    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Member Profile</h1>
        <div class="page-content">
          <div class="container-fluid">
            <div class="container">
              <div class="row mb-3" style="align-items: center">
                <div class="col-md-2 text-center">
                  <i style="font-size: 35px" class="fas fa-user"></i>
                </div>
                <div class="col-md-10" style="text-transform: uppercase">
                  <h5>anish </h5>
                </div>
              </div>
              <nav>
                <div
                  class="nav nav-tabs"
                  id="nav-tab"
                  role="tablist"
                  style="justify-content: space-around"
                >
                  <button
                    class="nav-link active"
                    id="nav-home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-home"
                    type="button"
                    role="tab"
                    aria-controls="nav-home"
                    aria-selected="true"
                  >
                    Details
                  </button>
                  <button
                    class="nav-link"
                    id="nav-profile-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-profile"
                    type="button"
                    role="tab"
                    aria-controls="nav-profile"
                    aria-selected="false"
                  >
                    Performance
                  </button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="nav-home"
                  role="tabpanel"
                  aria-labelledby="nav-home-tab"
                >
                
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><b>Name</b></td>
                        <td>anish</td>
                      </tr>
                      <tr>
                        <td><b>Gender</b></td>
                        <td>Male</td>
                      </tr>
                      <tr>
                        <td><b>Phone</b></td>
                        <td>894872764</td>
                      </tr>
                      <tr>
                        <td><b>Emergency Number</b></td>
                        <td>904375932</td>
                      </tr>
                      <tr>
                        <td><b>Email</b></td>
                        <td>anish@gmailcom</td>
                      </tr>
                      <tr>
                        <td><b>Address</b></td>
                        <td>rz/15-a, bindapur new Delhi 110059</td>
                      </tr>
                      <tr>
                        <td><b>Height</b></td>
                        <td>1.5m (150cm)</td>
                      </tr>
                      <tr>
                        <td><b>Weight</b></td>
                        <td>55kg</td>
                      </tr>
                      <tr>
                        <td><b>Category</b></td>
                        <td>Ectomorph</td>
                      </tr>
                      <tr>
                        <td><b>Disablet</b></td>
                        <td>No</td>
                      </tr>
                      <tr>
                        <td><b>D.O.B</b></td>
                        <td>23-sep-2002</td>
                      </tr>
                      <tr>
                        <td><b>Timing</b></td>
                        <td>6:00-7:00pm</td>
                      </tr>
                    </tbody>
                    <div class="float-end">
                <div class="p-3">
                <button type="button" class="btn btn-outline-secondary">Edit <i class="fas fa-user-edit"></i></button>
                </div>
                </div>
                  </table>
                  
                </div>
                <div
                  class="tab-pane fade"
                  id="nav-profile"
                  role="tabpanel"
                  aria-labelledby="nav-profile-tab">
                  <section class="section">
      <div class="row">
        <div class="col-md-12">
        <table class="table mt-4">
                    <tbody>
                      <tr>
                        <td><b>BMI</b></td>
                        <td>22 kg/m2</td>
                        <td>
                          <a href="#bmi">
                            <button type="button" class="btn btn-info">
                              View Chart
                            </button></a
                          >
                        </td>
                      </tr>
                      <tr>
                        <td><b>Calorise</b></td>
                        <td>
                          2,734 100%<br />
                          Calories/day
                        </td>
                        <td>
                          <a href="#calorise">
                            <button type="button" class="btn btn-info">
                              View Chart
                            </button></a
                          >
                        </td>
                      </tr>
                      <tr>
                        <td><b>Body Fat</b></td>
                        <td>15.7%</td>
                        <td>
                          <a href="#body-fat">
                            <button type="button" class="btn btn-info">
                              View Chart
                            </button></a
                          >
                        </td>
                      </tr>
                      <tr>
                        <td><b>BMR</b></td>
                        <td>1,585 Calories/day</td>
                        <td>
                          <a href="#bmr">
                            <button type="button" class="btn btn-info">
                              View Chart
                            </button></a
                          >
                        </td>
                      </tr>
                      <tr>
                        <td><b>Ideal Weight</b></td>
                        <td>63.7 kgs</td>
                        <td>
                          <a href="#ideal-weight">
                            <button type="button" class="btn btn-info">
                              View Chart
                            </button></a
                          >
                        </td>
                      </tr>
                      <tr>
                        <td><b>TDEE</b></td>
                        <td></td>
                        <td>
                          <a href="#tdee">
                            <button type="button" class="btn btn-info">
                              View Chart
                            </button></a
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
        </div>

      <div class="col-lg-6">
                        <div class="bg-white">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>BMI</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>15-aug-2022</td>
                                <td>22 kg/m2</td>
                              </tr>
                              <tr>
                                <td>30-aug-2022</td>
                                <td>22 kg/m2</td>
                              </tr>
                              <tr>
                                <td>15-sep-2022</td>
                                <td>21 kg/m2</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Current BMI</h5>

              <!-- Area Chart -->
              <div id="areaChart"></div>

             <div class="text-center">
             <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="300px"
                              height="163px"
                              viewBox="0 0 300 163"
                            >
                              <g
                                transform="translate(18,18)"
                                style="
                                  font-family: arial, helvetica, sans-serif;
                                  font-size: 12px;
                                "
                              >
                                <defs>
                                  <marker
                                    id="arrowhead"
                                    markerWidth="10"
                                    markerHeight="7"
                                    refX="0"
                                    refY="3.5"
                                    orient="auto"
                                  >
                                    <polygon
                                      points="0 0, 10 3.5, 0 7"
                                    ></polygon>
                                  </marker>
                                  <path
                                    id="curvetxt1"
                                    d="M-4 140 A140 140, 0, 0, 1, 284 140"
                                    style="fill: none"
                                  ></path>
                                  <path
                                    id="curvetxt2"
                                    d="M33 43.6 A140 140, 0, 0, 1, 280 140"
                                    style="fill: #none"
                                  ></path>
                                  <path
                                    id="curvetxt3"
                                    d="M95 3 A140 140, 0, 0, 1, 284 140"
                                    style="fill: #none"
                                  ></path>
                                  <path
                                    id="curvetxt4"
                                    d="M235.4 33 A140 140, 0, 0, 1, 284 140"
                                    style="fill: #none"
                                  ></path>
                                </defs>
                                <path
                                  d="M0 140 A140 140, 0, 0, 1, 280 140 L140 140 Z"
                                  fill="#bc2020"
                                ></path>
                                <path
                                  d="M6.9 96.7 A140 140, 0, 0, 1, 280 140 L140 140 Z"
                                  fill="#d38888"
                                ></path>
                                <path
                                  d="M12.1 83.1 A140 140, 0, 0, 1, 280 140 L140 140 Z"
                                  fill="#ffe400"
                                ></path>
                                <path
                                  d="M22.6 63.8 A140 140, 0, 0, 1, 96.7 6.9 L140 140 Z"
                                  fill="#008137"
                                ></path>
                                <path
                                  d="M96.7 6.9 A140 140, 0, 0, 1, 280 140 L140 140 Z"
                                  fill="#ffe400"
                                ></path>
                                <path
                                  d="M169.1 3.1 A140 140, 0, 0, 1, 280 140 L140 140 Z"
                                  fill="#d38888"
                                ></path>
                                <path
                                  d="M233.7 36 A140 140, 0, 0, 1, 280 140 L140 140 Z"
                                  fill="#bc2020"
                                ></path>
                                <path
                                  d="M273.1 96.7 A140 140, 0, 0, 1, 280 140 L140 140 Z"
                                  fill="#8a0101"
                                ></path>
                                <path
                                  d="M45 140 A90 90, 0, 0, 1, 230 140 Z"
                                  fill="#fff"
                                ></path>
                                <circle
                                  cx="140"
                                  cy="140"
                                  r="5"
                                  fill="#666"
                                ></circle>
                                <g
                                  style="
                                    paint-order: stroke;
                                    stroke: #fff;
                                    stroke-width: 2px;
                                  "
                                >
                                  <text
                                    x="25"
                                    y="111"
                                    transform="rotate(-72, 25, 111)"
                                  >
                                    16
                                  </text>
                                  <text
                                    x="30"
                                    y="96"
                                    transform="rotate(-66, 30, 96)"
                                  >
                                    17
                                  </text>
                                  <text
                                    x="35"
                                    y="83"
                                    transform="rotate(-57, 35, 83)"
                                  >
                                    18.5
                                  </text>
                                  <text
                                    x="97"
                                    y="29"
                                    transform="rotate(-18, 97, 29)"
                                  >
                                    25
                                  </text>
                                  <text
                                    x="157"
                                    y="20"
                                    transform="rotate(12, 157, 20)"
                                  >
                                    30
                                  </text>
                                  <text
                                    x="214"
                                    y="45"
                                    transform="rotate(42, 214, 45)"
                                  >
                                    35
                                  </text>
                                  <text
                                    x="252"
                                    y="95"
                                    transform="rotate(72, 252, 95)"
                                  >
                                    40
                                  </text>
                                </g>
                                <g style="font-size: 14px">
                                  <text>
                                    <textPath xlink:href="#curvetxt1">
                                      Underweight
                                    </textPath>
                                  </text>
                                  <text>
                                    <textPath xlink:href="#curvetxt2">
                                      Normal
                                    </textPath>
                                  </text>
                                  <text>
                                    <textPath xlink:href="#curvetxt3">
                                      Overweight
                                    </textPath>
                                  </text>
                                  <text>
                                    <textPath xlink:href="#curvetxt4">
                                      Obesity
                                    </textPath>
                                  </text>
                                </g>
                                <line
                                  x1="140"
                                  y1="140"
                                  x2="65"
                                  y2="140"
                                  stroke="#666"
                                  stroke-width="2"
                                  marker-end="url(#arrowhead)"
                                >
                                  <animateTransform
                                    attributeName="transform"
                                    attributeType="XML"
                                    type="rotate"
                                    from="0 140 140"
                                    to="42.6 140 140"
                                    dur="1s"
                                    fill="freeze"
                                    repeatCount="1"
                                  ></animateTransform>
                                </line>
                                <text
                                  x="67"
                                  y="120"
                                  style="
                                    font-size: 30px;
                                    font-weight: bold;
                                    color: #000;
                                  "
                                >
                                  BMI = 20.1
                                </text>
                              </g>
                            </svg>
             </div>
              <!-- End Area Chart -->

            </div>
          </div>
        </div>

        <div class="col-md-6">
                        <div class="bg-white">
                        <h5 class="card-title">Calorise</h5>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Calorise Day</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>15-aug-2022</td>
                                <td>2,322</td>
                                <td><i class="fas fa-arrow-down"></i></td>
                              </tr>
                              <tr>
                                <td>30-aug-2022</td>
                                <td>2,000</td>
                                <td><i class="fas fa-arrow-down"></i></td>
                              </tr>
                              <tr>
                                <td>15-sep-2022</td>
                                <td>1,900</td>
                                <td><i class="fas fa-arrow-down"></i></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Calorise Chart</h5>

              <!-- Donut Chart -->
              
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart"), {
                    series: [50, 50, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'donut',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Carbohydrates', 'Proteins', 'Fats', 'Vitamins', 'Fibre'],
                  }).render();
                });
              </script>
              <div id="donutChart"></div>

              <!-- End Donut Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
                        <div class="bg-white">
                            <h5 class="card-title">Body Fat</h5>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Body Fat</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>15-aug-2022</td>
                                <td>23%</td>
                              </tr>
                              <tr>
                                <td>30-aug-2022</td>
                                <td>22%</td>
                              </tr>
                              <tr>
                                <td>15-sep-2022</td>
                                <td>20%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
         </div>

       

         <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Body Fat Chart</h5>

              <!-- Radial Bar Chart -->
              <div id="radialBarChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#radialBarChart"), {
                    series: [20],
                    chart: {
                      height: 350,
                      type: 'radialBar',
                      toolbar: {
                        show: true
                      }
                    },
                    plotOptions: {
                      radialBar: {
                        dataLabels: {
                          name: {
                            fontSize: '22px',
                          },
                          value: {
                            fontSize: '16px',
                          },
                          total: {
                            show: true,
                            label: 'Total Body fat',
                            formatter: function(w) {
                              // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                              return 25
                            }
                          }
                        }
                      }
                    },
                    labels: ['Apples'],
                  }).render();
                });
              </script>
              <!-- End Radial Bar Chart -->

            </div>
          </div>
        </div>

        

        

        

        

        <div class="col-lg-6">
        <div class="bg-white">
        <h5 class="card-title">BMR</h5>

                          <table class="table">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>BMR</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>15-aug-2022</td>
                                <td>2,457</td>
                              </tr>
                              <tr>
                                <td>30-aug-2022</td>
                                <td>2,364</td>
                              </tr>
                              <tr>
                                <td>15-sep-2022</td>
                                <td>2,223</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
         </div>

       
         <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">BMR Chart</h5>

            

            </div>
          </div>
        </div>

        <div class="col-lg-6">
        <div class="bg-white">
        <h5 class="card-title">Ideal Weight</h5>

        <table class="table">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Ideal Weight</th>
                                <th>Current Weight</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>15-aug-2022</td>
                                <td>51.4 - 72.3 kgs</td>
                                <td>62</td>
                              </tr>
                              <tr>
                                <td>30-aug-2022</td>
                                <td>51.4 - 72.3 kgs</td>
                                <td>62.5</td>
                              </tr>
                              <tr>
                                <td>15-sep-2022</td>
                                <td>51.4 - 72.3 kgs</td>
                                <td>63</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
         </div>

       
         <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ideal Weight Chart</h5>

            

            </div>
          </div>
        </div>


        <div class="col-lg-6">
        <div class="bg-white">
        <h5 class="card-title">TDEE Weight</h5>

        <table class="table">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>BMI</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>15-aug-2022</td>
                                <td>2,484 91%</td>
                              </tr>
                              <tr>
                                <td>30-aug-2022</td>
                                <td>2,484 91%</td>
                              </tr>
                              <tr>
                                <td>15-sep-2022</td>
                                <td>2,484 91%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
         </div>

       
         <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">TDEE Chart</h5>

            

            </div>
          </div>
        </div>


      </div>
    </section>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include "footer.php" ?>
  </body>
</html>
