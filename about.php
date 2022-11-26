<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Grace Chapel Murang'a</title>
  <!-- bootstrap core css -->
  <!-- <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" /> -->
  <!-- progress barstle -->
  <!-- <link rel="stylesheet" href="css/css-circular-prog-bar.css"> -->
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <link href="styles/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <!-- <link href="styles/responsive.css" rel="stylesheet" /> -->
  <!-- <link rel="stylesheet" href="css/css-circular-prog-bar.css"> -->
  <!--  Styles  -->
  <link rel="stylesheet" href="styles/about.processed.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab|Raleway|Kristi|Josefin+Slab"
    rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <style>
    .l_cards {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .leadership_card {
      padding: 20px;
      font-size: 14px;
      max-width: 200px;
    }

    .leadership_card img {
      max-width: 100%;

    }

    @media only screen and (max-width: 768px) {
      .l_cards {
        flex-direction: column;
      }
    }
  </style>
</head>

<!-- Content -->

<body>
  <div class="wrapper container-fluid" >
    <header>

      <!--Navbar -->
      <nav class="navbar">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            <img class="gbc-nav" src="images/GraceChapelLogo.jpg" alt="Avon Grace Bible Church Logo">
          </a>
        </div>
        <div class="navbar-right">
          <div class="responsive-nav-buttons">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php" id="home">Home</a></li>
              
              <li><a href="grace_cha/index.php" id="login">Login</a></li>
              <li><a href="kids.php" id="kids">Kids Page</a></li>
              <li><a href="contact.php" id="contact">Contact</a></li>
            </ul>
          </div>
          <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <a href="index.php">Home</a>
              <a href="grace_cha/login.php">Login</a>
              <a href="kids.php">Kids</a>
              <a href="contact.php">Contact</a>
            </div>
          </div>
          <span class="hamburger" onclick="openNav()"><i class="fas fa-bars"></i></span>
        </div>
      </nav>

      <div class="headline-wrapper">
        <div class="row">
          <div class="col-md-12 headline-tagline">
            <h1>Who We Are</h1>
          </div>
        </div>
      </div>
      <div class="container-fluid content">
        <div class="col-md-12 message">
          <p>Grace Bible Church exists to:</p>
        </div>
        <div class="row">
          <div class="col-md-4 tagline-body">
            <h1 class="tagline-script">grow</h1>
            <p>in our relationship with Christ</p>
          </div>
          <div class="col-md-4 tagline-body">
            <h1 class="tagline-script">belong</h1>
            <p>with other followers of Christ</p>
          </div>
          <div class="col-md-4 tagline-body">
            <h1 class="tagline-script">contribute</h1>
            <p>to the cause of Christ</p>
          </div>
        </div>
        <div class="row">

          <div class="col-md-12 leadership">
            <h1 id="leadership-header">Leadership</h1>
            <div class="l_cards">
              <!---lcards-->

              <div class="leadership_card">
                <!--leadership card--->
                <img src="images/macarthur-john.jpg" alt="">
                <div>Senior Pastor</div>
              </div>
              <!--leadership card--->

              <div class="leadership_card">
                <!--leadership card--->
                <img src="images/zhavekich-mark.jpg" alt="">
                <div>Adminstration Pastor</div>
              </div>
              <!--leadership card--->

              <div class="leadership_card">
                <!--leadership card--->
                <img src="images/duncan-austin.jpg" alt="">
                <div>Staff Pastor</div>
              </div>
              <!--leadership card--->

            </div>
            <!---lcards-->

          </div>
        </div>

        <footer id="footer">
    <section class="info_section layout_padding-top">
      <div class="info_logo-box">
        <h3>
          Grace Chapel Murang'a
        </h3>
      </div>
      <div class="container ">
        <div class="row">
          <!-- <div class="col-md-3"> -->
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><strong>Contact Us</strong></h3>
            <p>Grace Chapel, Township Murang'a-Kangema, Rd<br>Murang'a, Kenya
              <br />Code:- 75G5+VJ Murang'a<br><br>
              <strong>Phone:</strong> +254-125548855<br>
              <a href="mailto:info@gracechapel.co.ke"><strong>Email:</strong>info@gracechap.com<br></a>
            </p>
          </div>
          <!-- </div> -->
          <div class="col-md-3">
            <h4><strong>Our Services</strong></h4>
            <div class="col-lg-3 col-md-6 footer-links">
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Deliverance</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Prayer Requests</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Seminars</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Novenas</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Guidance</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">

            <div class="subscribe_container">
              <h6><strong>Join Our Newsletter</strong></h6>
              <p>For upcoming events and news.....</p>
              <div class="form_container">
                <form action="#" method="post">
                  <input type="email" class="form-control" placeholder="Enter your email">
                  <button type="submit">
                    Subscribe
                  </button>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container">
        <div class="social_container">

          <div class="social-box">
            <a href="#">
              <img src="images/fb.png" alt="">
            </a>

            <a href="#">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="#">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="#">
              <img src="images/instagram.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        &copy;Copyright <b>2022</b> All Rights Reserved
      </p>
    </section>
    <!-- footer section -->
  </footer>
      </div>
</body>

<script src="scripts/about.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
  integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- <script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="scripts/bootstrap.js"></script> -->
</html>