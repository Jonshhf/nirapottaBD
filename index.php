<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Nirapotta</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">



        <style>
            .navbar {
  background-color: #ffffff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 10px 0;
}

.navbar-container {
  display: flex;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.logo img {
  height: 60px;
  width: auto;
}

.brand-name {
  font-family: 'Arial', sans-serif;
  font-size: 24px;
  font-weight: bold;
  color: #333333;
  margin-left: 15px;
  letter-spacing: 1px;

}



/* Add a subtle animation to the logo */
@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1); }
}

.logo img:hover {
  animation: pulse 1s infinite;
}
    .download-section {
        padding: 20px;
        font-family: 'Arial', sans-serif;
    }

    .download-container {
        max-width: 600px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
    }

    .app-icon {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    margin-right: 20px;
    border: 2px solid #ccc; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}

    .app-info {
        flex: 1;
        min-width: 200px;
    }

    .app-name {
        font-size: 1.5em;
        margin: 0 0 10px 0;
    }

    .app-description {
        font-size: 0.9em;
        margin: 0 0 15px 0;
        color: #666;
    }

    .download-btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 0.9em;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .download-btn:hover {
        background-color: #45a049;
    }

    .download-btn i{
        margin-right: 5px;
        color: white;
        font-size: 15px;
    }
    p1{
        color: white;
        font-size: 15px;
    }
    .feature-list {
        display: flex;
        justify-content: space-around;
        width: 100%;
        margin-top: 20px;
    }

    .feature-item {
        text-align: center;
        margin: 0 10px;
    }

    .feature-icon {
        font-size: 1.5em;
        margin-bottom: 5px;
    }

    .feature-item p {
        font-size: 0.8em;
        margin: 0;
        color: #666;
    }

    @media (max-width: 480px) {
        .download-container {
            flex-direction: column;
            text-align: center;
        }

        .app-icon {
            margin: 0 0 15px 0;
        }

        .feature-list {
            flex-wrap: wrap;
        }

        .feature-item {
            flex-basis: 33.33%;
            margin-bottom: 15px;
        }
    }

    body {
    background-color: #ffffff; /* White background */
    font-family: 'Montserrat', sans-serif;
    color: #2c3e50; /* Deep Blue for text */
    background-image: url('pattern.svg'); /* Subtle background pattern */
    background-size: cover;
    background-attachment: fixed;
}

h1 {
    color: #e74c3c; /* Bold Red */
    font-size: 3rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 50px;
}

.rules-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.rule-item {
    background: rgba(255, 255, 255, 0.8); /* Transparent white background */
    border-radius: 15px;
    padding: 30px;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    transition: transform 0.5s, background 0.5s, box-shadow 0.5s;
    border: 2px solid transparent;
    background-clip: padding-box;
}

.rule-item:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 1); /* Full opacity on hover */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
    border-image: linear-gradient(45deg, #3498db, #e74c3c);
    border-image-slice: 1;
}

.rule-content {
    position: relative;
    z-index: 2;
}

.rule-number {
    font-size: 4rem;
    font-weight: 700;
    color: #3498db; /* Vibrant Blue */
    margin-bottom: 20px;
    opacity: 0.8;
    position: relative;
    z-index: 2;
}

.rule-title {
    font-size: 1.5rem;
    font-weight: 900;
    background: linear-gradient(45deg, #3498db, #e74c3c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 15px;
    position: relative;
    z-index: 2;
}

.rule-description {
    font-size: 1rem;
    color: #7f8c8d; /* Soft Gray */
    font-weight: 300;
    line-height: 1.6;
    position: relative;
    z-index: 2;
}

.rule-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(52, 152, 219, 0.2), rgba(231, 76, 60, 0));
    z-index: 1;
    opacity: 0.5;
    transition: opacity 0.5s;
}

.rule-item:hover::before {
    opacity: 0.8;
}

.rule-item::after {
    content: '';
    position: absolute;
    bottom: -20px;
    right: -20px;
    width: 50px;
    height: 50px;
    background: #3498db; /* Vibrant Blue */
    border-radius: 50%;
    z-index: 1;
    transition: all 0.5s;
}

.rule-item:hover::after {
    width: 80px;
    height: 80px;
    bottom: -30px;
    right: -30px;
}

.rule-icon {
    font-size: 2rem;
    color: #e74c3c; /* Bold Red */
    position: absolute;
    top: 20px;
    right: 20px;
    opacity: 0.7;
    transition: transform 0.5s, opacity 0.5s;
}

.rule-item:hover .rule-icon {
    transform: rotate(360deg);
    opacity: 1;
}
#styled-footer {
  background-color: #ffffff; /* White background */
  padding: 30px 0; /* Padding on top and bottom */
  border-top: 2px solid #e0e0e0; /* Subtle border at the top */
  text-align: center; /* Center all text */
}

#footer-content {
  max-width: 900px; /* Maximum width of the footer content */
  margin: 0 auto; /* Center the container */
}

.powered-by {
  display: flex; /* Flexbox for aligning text and logo */
  align-items: center; /* Vertically center items */
  justify-content: center; /* Horizontally center items */
  margin-bottom: 15px; /* Space below the powered by section */
}

.powered-by span {
  font-size: 18px; /* Font size for "Powered by" text */
  color: #333; /* Dark grey text color */
  margin-right: 8px; /* Space between text and logo */
}

.footer-logo {
  width: 80px; /* Set logo width */
  height: auto; /* Maintain aspect ratio */
}

.footer-description p {
  font-size: 13px; /* Font size for the paragraph */
  color: #555; /* Dark grey text color */
  margin: 20px 0; /* Margin around paragraph */
}

.developer-credit {
  margin-top: 15px; /* Space above developer credit */
}

.developer-link {
  text-decoration: none; /* Remove underline from link */
  font-size: 18px;
}

.developer-link:hover {
  text-decoration: underline; /* Underline on hover */
}

.social-icons {
  margin-left: 10px; /* Space between developer name and social icons */
}

.social-icon img {
  width: 20px; /* Width of social media icons */
  height: auto; /* Maintain aspect ratio */
  margin-left: 5px; /* Space between each icon */
  transition: transform 0.3s; /* Smooth transition on hover */
}

.social-icon img:hover {
  transform: scale(1.1); /* Slightly enlarge icon on hover */
}


</style>
    </head>
    <body> 
   
	
		<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator"> 
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>
<!-- End Preloader -->
<div id="Nav1">
<!-- Get Pro Button -->
<div class="bottom-nav fixed-bottom">
    <div class="row text-center">
        <div class="col">
            <a href="index.php">
                <span class="icon">🏡</span>
                <span>হোম</span>
            </a>
        </div>
        <div class="col">
            <a onclick="complain()" class="complain-btn">
                <span class="icon">
                    <img src="img/letter.png" alt="Complain Icon" style="width: 27px;">
                </span>
                <span>অভিযোগ করুন</span>
            </a>
        </div>
        <div class="col">
            <a onclick="Vollenter()" class="complain-btn">
                <span class="icon">
                    <img src="img/police.png" alt="Admin Support Icon" style="width: 27px; ">
                </span>
                <span>প্রশাসনিক সহায়তা</span>
            </a>
        </div>
    </div>
</div>
</div>

<!-- Header Area -->
<!-- End Header Area -->

<div id="content">
<nav class="navbar">
  <div class="navbar-container">
    <div class="logo">
      <img src="img/favicon.png" alt="Logo">
    </div>
    <div class="brand-name">NirapottaBD<br><span style="opacity:50%; font-size:20px;">𝕭𝖎𝖗𝖌𝖆𝖓𝖏,𝕯𝖎𝖓𝖆𝖏𝖕𝖚𝖗<span></div>
  </div>
</nav> 

    <!-- Get Pro Button -->
    <ul class="pro-features">
        <a class="get-pro" href="#">বিস্তারিত</a>
        <li class="big-title">অভিযোগ গ্রহণ করার ৮ ঘন্টার মধ্যেই আইনত ব্যবস্থা গ্রহণ করা হবে। </li>
        <li class="title">শিক্ষাথীদের ও মেয়েদের নিরাপত্তা লঙ্ঘিত যেকোনো অপরাধ যেমন মারামারি, ইপ্টিজিং, রেগিং ,চুরি-ডাকাতি, হুমকি, দুর্নীতিসহ ছোট বড় সব ধরণের অপরাদের অভিযোগ গ্রহণ করে যথা সময়ের মধ্যেই পদক্ষেপ গ্রহণ করা হবে।</li>
     

    </ul>

    
    <marquee style="margin-top:8px;">আমাদের ওয়েবসাইট এবং এন্ড্রয়েড অ্যাপস তৈরির কার্যক্রম চলমান রয়েছে, অনুগ্রহপূর্বক অপেক্ষা করুন, খুব তাড়াতাড়ি নতুনত্ব দেখতে পাবেন, ধন্যবাদ . . . . . .</marquee>
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


    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-envelope"></i>
                        <div class="content">
                        <span class="counter"><?php echo $complaints_today; ?></span>
                            <p style="font-size: 17px;">প্রতিদিনের অভিযোগ</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-ui-user"></i>
                        <div class="content">
                        <span class="counter"><?php echo $total_complaints; ?></span>
                            <p style="font-size: 17px;">মোট অভিযোগ</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun-facts --> <hr>
    



    <p style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;অবস্থান : বীরগঞ্জ, দিনাজপুর
    </p>
 
    <!-- Download App Section -->
    <div class="container my-5">
        <div class="rules-grid">
            <div class="rule-item">
                <div class="rule-content">
                    <h2 class="rule-number">01</h2>
                    <h3 class="rule-title">দ্রুত আইনত পদক্ষেপ  গ্রহণ </h3>
                    <p class="rule-description">অভিযোগ গ্রহণ করার ৮ ঘন্টার মধ্যেই আইনত ব্যবস্থা গ্রহণ করা হবে।</p>
                </div>
            </div>
            <div class="rule-item">
                <div class="rule-content">
                    <h2 class="rule-number">02</h2>
                    <h3 class="rule-title">তথ্য যাচাই বাছাইকরণ </h3>
                    <p class="rule-description">অভিযোগ গ্রহণের পর তথ্য যাচাইকরণ প্রক্রিয়া চলমান থাকবে এবং আমাদের সেচ্ছাসেবক টিম  দ্রুত ঘটনাস্থলে গিয়ে তথ্য যাচাই করে ব্যবস্থা গ্রহণ করবেন। </p>
                </div>
            </div>
            <div class="rule-item">
                <div class="rule-content">
                    <h2 class="rule-number">03</h2>
                    <h3 class="rule-title">সব ধরণের অভিযোগ গ্রহণ </h3>
                    <p class="rule-description">শিক্ষাথীদের ও মেয়েদের  নিরাপত্তা লঙ্ঘিত যেকোনো অপরাধ যেমন মারামারি, ইপ্টিজিং, রেগিং ,চুরি-ডাকাতি, হুমকি, দুর্নীতিসহ ছোট বড় সব ধরণের অপরাদের অভিযোগ গ্রহণ করে যথা সময়ের মধ্যেই পদক্ষেপ গ্রহণ করা হবে। </p>
                </div>
            </div>
            
         
            
        </div>
    </div>


    <br>
    <div class="marquee-container">
        <div class="marquee">
           WE  WANT  TO  CREATE  CORRUPTION  FREE  BIRGANJ
        </div> 
    </div> <br> <br><br> 
    <section class="download-section">
    <div class="download-container">
        <img src="img/apps.png" alt="App Icon" class="app-icon">
        <div class="app-info">
            <h2 class="app-name">NirapottaBD Android App</h2>
            <p class="app-description">আপনার নিরাপত্তা, আমাদের দায়িত্ব</p>
            <a href="#" class="download-btn">
    <i class="fas fa-download"></i><p1> অ্যাপসটি ডাউনলোড করুন </p1>
            </a>
        </div>
        <div class="feature-list">
            <div class="feature-item">
                <div class="feature-icon">🔒</div>
                <p>নিরাপদ</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">🔄</div>
                <p>আপডেট</p>
            </div>
        </div>
    </div>
</section>
<!-- Footer --> 
<footer id="styled-footer">
  <div id="footer-content">
  <div class="footer-description">
      <p>
      "NirapottaBD" হলো সাধারণ & নিরপেক্ষ শিক্ষাথীদের উদ্যোগে তৈরী একটি ডিজিটাল নিরাপত্তা প্লার্টফর্ম। সকলের সার্বিক নিরাপত্তা নিশ্চিত করাই আমাদের মূল লক্ষ্য। <br> আপনার নিরাপত্তা আমাদের দায়িত্ব !
      </p>
    </div>
    <div class="powered-by">
      <span>Powered by</span>
      <img src="img/pizel-innovations.png" alt="Logo" class="footer-logo">
    </div>

    <div class="developer-credit">
  <p>
    Design & Developed by 
    <a href="https://www.facebook.com/profile.php?id=100055940783750" class="developer-link" target="_blank" rel="noopener noreferrer">
     <span style="color: #0ea5e9;">Pranto Roy</span>
    </a>
    <a href="https://www.facebook.com/profile.php?id=100055940783750" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-facebook" style="color: #0ea5e9; font-size: 18px;"></i>
    </a>
  </p>
</div>

  </div>
</footer>




<br><br><br>
<!-- End Footer -->
</div>

		
   <script>
     $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    </script>
		<!--/ End Fun-facts -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>