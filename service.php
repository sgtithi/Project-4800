<?php
session_start(); 


$isLoggedIn = false;


if (isset($_SESSION['id'])) {
    
    $isLoggedIn = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Custom CSS -->
  <style>


    body {
      font-family: 'Arial', sans-serif;
      
      position: relative;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      animation: changeBackground 35s linear infinite;
    }

    @keyframes changeBackground {
      0% {
        background-image: url('img/1.png');
      }
      33% {
        background-image: url('img/2.png');
      }
      66% {
        background-image: url('img/3.png');
      }
      100% {
        background-image: url('img/4.png');
      }
    }
    .dashboard {
      padding: 40px;
    }

    .dashboard h2 {
      margin-bottom: 30px;
      font-family: 'Montserrat', sans-serif;
      text-align: center;
      font-size: 3rem;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: #9c723b;
      border-bottom: 2px solid #007bff;
      padding-bottom: 10px;
    }

    .feature-item {
      text-align: center;
      padding: 40px;
      background-color: #141414;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .feature-item i {
      font-size: 4rem;
      margin-bottom: 20px;
      color: #e7d77e;
    }

    .feature-item h4 {
      font-size: 1.8rem;
      margin-bottom: 15px;
      color: #e9e4e4;
    }

    .feature-item p {
      font-size: 1.2rem;
      color: #666;
    }

    .feature-item .btn-primary {
      background: linear-gradient(135deg, #d8d065, #d47070);
      border: none;
      color: #fff;
      font-size: 1.1rem;
      border-radius: 30px;
      padding: 10px 25px;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .feature-item .btn-primary:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .feature-item .btn-primary:focus {
      outline: none;
    }

    .feature-item:hover {
      transform: translateY(-5px);
    }

    .more-features h2 {
      margin-bottom: 30px;
      color: #444;
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
    }

    .navbar {
     
      padding: 1rem;
    }

    .navbar .navbar-brand {
    color: #d46b25;
    font-size: 1.5rem;
    font-weight: bold;
    transition: color 0.3s; 
  }

  @keyframes rubberBand {
  0% { transform: scaleX(1); }
  30% { transform: scaleX(1.25); }
  40% { transform: scaleX(0.75); }
  50% { transform: scaleX(1.15); }
  65% { transform: scaleX(0.95); }
  75% { transform: scaleX(1.05); }
  100% { transform: scaleX(1); }
}


.navbar-brand {
  transition: transform 0.5s;
}

.navbar-brand:hover {
  animation: rubberBand 0.5s;
}
    .navbar-nav .nav-link {
      color: rgb(255, 255, 255);
      font-size: 1.2rem;
      margin-right: 20px;
      transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover {
      color: rgb(238, 234, 234);
      transform: scale(1.1);
    }

    footer {
    
      color: #fff;
      text-align: center;
      padding: 10px 0;
      font-size: 0.9rem;
      margin-top: 30px;
    }
    .btn-outline-success {
      background-color: #007bff; 
      color: #fff; 
    }
    .btn-outline-success {
      background-color: #007bff; 
      color: #fff; 
    }

    
    .btn-outline-success:hover {
      background-color: #163de7; 
      color: #fff; 
    }

  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <a class="navbar-brand fun-animation" href="landingpage.php">
        <i class="fa fa-male"></i> precisionHealth.com
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="landingpage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul> 
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="button" onclick="redirectToIndex()">Login</button>
        </form> 
      </div>
    </div>
  </nav>

 
<div class="container dashboard">
    <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 mb-4">
    <div class="feature-item">
        <i class="fas fa-weight"></i>
        <h4>Personalized Health</h4>
        <p>Get personalized health advice based on your BMI data and health condition.</p>
        <?php if ($isLoggedIn) { ?>
            <a href="precisionHealth.php" class="btn btn-primary btn-block">GET ADVICE</a>
        <?php } else { ?>
            <button class="btn btn-primary btn-block" disabled>Login to Get Advice</button>
        <?php } ?>
    </div>
</div>

           <!-- Feature: Health Analysis -->
<div class="col-lg-4 col-md-6 mb-4">
    <div class="feature-item">
        <i class="fas fa-tasks"></i>
        <h4>Health Analysis</h4>
        <p>Set your health goals and track your progress towards achieving them with personalized insights.</p>
        <?php if ($isLoggedIn) { ?>
            <a href="comingSoon.php" class="btn btn-primary btn-block" style="margin-top: 5px;">SET GOALS</a>
        <?php } else { ?>
            <button class="btn btn-primary btn-block" style="margin-top: 5px;" disabled>Login to Set Goals</button>
        <?php } ?>
    </div>
</div>

    <div class="more-features">
        <div class="row">
            <!-- Feature Idea 1: Doctor's Blog -->
            <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fas fa-user-md"></i>
            <h4>Doctor's Blog</h4>
            <p>Read informative blog posts and health advice from experienced doctors.</p>
            <a href="comingSoon.php" class="btn btn-primary btn-block" style="margin-top: 35px;">READ MORE</a>
          </div>
        </div>

            <!-- Feature Idea 2: Sleep Quality Monitor -->
            <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fas fa-bed"></i>
            <h4>Sleep Quality Monitor</h4>
            <p>Monitor your sleep patterns to improve your overall well-being.</p>
            <a href="comingSoon.php" class="btn btn-primary btn-block">MONITOR SLEEP</a>
          </div>
        </div>

            <!-- Feature Idea 3: Health E-Commerce -->
            <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fas fa-shopping-cart"></i>
            <h4>Health E-Commerce</h4>
            <p>Shop for health products and supplements from trusted brands.</p>
            <a href="comingSoon.php" class="btn btn-primary btn-block">SHOP NOW</a>
          </div>
        </div>
            
        </div>
    </div>
</div>

<?php if ($isLoggedIn) { ?>
    <div class="container">
        <h1 style="color: white; font-weight: bold"; > Welcome <?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username']; }?></h1>
        <a href="logout.php">Logout</a>
    </div>
<?php } ?>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2023 PrecisionHealth.Com. All rights reserved.</p>
      <p>Leading University, Sylhet, Bangladesh</p>
    </div>
  </footer>

  <script>
    // Function to preload images
    function preloadImages() {
      const images = ['img/1.png', 'img/2.png', 'img/3.png', 'img/4.png'];
      images.forEach((image) => {
        const img = new Image();
        img.src = image;
      });
    }

    window.onload = preloadImages;
  </script>

    <script>
        function redirectToIndex() {
            window.location.href = "index.php";
        }
    </script>

 
  
 

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
