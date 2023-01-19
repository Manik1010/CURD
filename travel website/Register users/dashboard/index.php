<?php 
 $url = 'http://localhost/travel%20website/Register%20users/';
 include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT *
       FROM user_form
       WHERE id = '$user_id'";


$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>dashboard</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success  fixed-top" >
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto p-0 m-0 "
          href="#"
          ><img src="../../images/user-dashboad.jfif" height="100"> </a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
         
          <ul class="navbar-nav ms-auto my-3">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2 "
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill bg-warning"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?php echo $url;?>user_page.php">Home</a></li>
                <li><a class="dropdown-item" href="<?php echo $url;?>profile/index.php">Profile</a></li>
                <li>
                  <a class="dropdown-item" href="<?php echo $url;?>logout.php">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-success mt-5"
      tabindex="-1"
      id="sidebar"     >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark ">
          <ul class="navbar-nav">
            <li>
             
            </li>
            <li>
              <a href="<?php echo $url;?>dashboard/index.php" class="nav-link px-3 active mt-3">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span ><b>Dashboard</b></span>
              </a>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link "
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Articles</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>article/updatearticle.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">My article</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/post.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add article</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/Categories/addcategories.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add categories</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>article/Complain/index.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Complain</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>

            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts2"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Events</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts2">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>/dashboard/article/updatearticle.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">My events</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/article/post.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add event</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/article/addcategories.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add committee</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/article/complain.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Request</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts3"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span style="color: white;">&nbsp;<b>Jobs</b></span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts3">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/applied-job.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Applied Job</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/create-post.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">post job</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/create-resume.php?id=<?php echo $id;?>" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Add resume</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $url;?>dashboard/jobs/" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span style="color: white;">Request</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>
             
           
            
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid mt-5 bg-light pt-5">
        <div class="row ">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Special Packages</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php //echo $total_article;?>10</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>dashboard/article/updatearticle.php?id=<?php echo $id;?>" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Hot Events</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;"><?php// echo  $total_events;?>25</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>article/updatearticle.php?id=<?php echo $id;?>" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-secondary text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Applied Jobs</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;">100</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>jobs/applied-job.php" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
           <div class="col-md-3 mb-3">
            <div class="card bg-warning text-white  h-100">
              <div class="card-body text-center py-3 " style="font-size: 25px;font-weight: bold;">Requests</div>
              <div class="card-body text-center pb-5 "style="font-size: 25px;font-weight: bold;">2<?php //echo  $total_requests;?></div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <a href="<?php echo $url;?>article/updatearticle.php?id=<?php echo $id;?>" style="text-decoration: none;"><i class="bi bi-chevron-right" style="color: white;"></i></a>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Every Month Article
              </div>
              <div class="card-body" >
                <canvas id="chartjs_bar" width="400" height="400"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                All categories Articles
              </div>
              <div class="card-body">
                <canvas id="chartjs_pie" width="400" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
  <script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
      xValues = <?php  echo json_encode($month_name); ?>;

     
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: [
                               "#000",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e",
                                "#e69927",
                                "#f707bf",
                                "#b8a0ad",
                                "#a67a4b",
                                "#cfdb42"
                            ],
                            data:<?php  echo json_encode($month_article); ?>,
                        }]
                    },
                   
                     options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }

                    

                    
 
                
                });
    </script>

    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_pie").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels:<?php echo json_encode($category_names); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#000",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e",
                                "#e69927",
                                "#f707bf",
                                "#b8a0ad"
                            ],
                            data:<?php echo json_encode($num_of_categoriesarticle); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'top',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
    <script type="text/javascript">
      var ctx = document.getElementById("event_pie").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($commiteecategory_names); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#000",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e",
                                "#e69927",
                                "#f707bf",
                                "#b8a0ad"
                            ],
                            data:<?php echo json_encode($num_of_categoriesevents); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'top',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>
