<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NirapottaBD | Home</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="//cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />

    <style>
    .preview-image {
      max-width: 300px;
      max-height: 300px;
      margin-top: 10px;
    }
  </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
        <img width="50px" src="images/pnglogo.png">
          <!--<a class="navbar-brand brand-logo" href="index.html">
            <img src="images/logo.svg" alt="logo" class="logo-dark" />
          </a>-->
        
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            
           
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="images/icon.png" alt="Profile image"> <span class="font-weight-normal"> Pranto Roy </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="images/icon.png" width="100px" alt="Profile image">
                  <p class="mb-1 mt-3">Pranto Roy</p>
                  <p class="font-weight-light text-muted mb-0">nirapottabd.com</p>
        </div>
                <a class="dropdown-item" href="index.html"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="images/icon.png" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Pranto Roy </p>
                  <p class="designation">Administrator</p>
                </div>
               
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Home.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title"  >complaints</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" onclick="getcomplaint()" style="cursor:pointer;" >All complaints</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.html" style="cursor:pointer;" >Log Out</a></li>

                 <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Sub Category</a></li> -->
                </ul>
              </div>
            </li>
           
            
          
              <div class="collapse" id="auth">
                
              </div>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row purchace-popup">

            <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Count total complaints
$sql_total = "SELECT COUNT(*) as total FROM complaints";
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_complaints = $row_total['total'];

// Count complaints submitted today
$sql_today = "SELECT COUNT(*) as today FROM complaints WHERE DATE(created_at) = CURDATE()";
$result_today = $conn->query($sql_today);
$row_today = $result_today->fetch_assoc();
$complaints_today = $row_today['today'];

$conn->close();
?>

              
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Total Complaints</h4>
                    <div class="aligner-wrapper">
                      <canvas id="sessionsDoughnutChart" height="210"></canvas>
                      <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold"><?php echo $total_complaints; ?></h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Complaints</small>
                      </div>
                    </div>
                   
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daily Complaints</h4>
                    <div class="aligner-wrapper">
                      <canvas id="sessionsDoughnutChart" height="210"></canvas>
                      <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold"><?php echo $complaints_today; ?></h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Daily Complaints</small>
                      </div>
                    </div>
                   
                    </div>
                  </div>
                </div>
              </div>
              
           
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="//cdn.datatables.net/2.0.2/js/dataTables.min.js" ></script>
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
   
    <!-- End custom js for this page -->
  </body>
</html>