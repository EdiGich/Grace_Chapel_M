<?php include 'includes/connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="images/GraceChapelLogo.jpg" rel="icon" type="image">

  <!--  Styles  -->
  <link rel="stylesheet" href="styles/index.css">
  <title>Grace Ministries</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab|Raleway|Kristi" rel="stylesheet">
  
</head>

<!-- Content -->

<body>
  <div class="wrapper container-fluid">
    <header>

      <!--Navbar -->
      <!-- <nav class="navbar">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img class="gbc-nav" src="images/GraceChapelLogo.jpg" alt="Grace Chapel Logo">
          </a>
        <!-- </div>
        <div class="navbar-right"> -->
          <!-- <div class="responsive-nav-buttons">
            <ul class="nav navbar-nav navbar-right">
           
              <li><a href="about.php" id="about">About us</a></li>
              
              <li><a href="kids.php" id="kids">Kids</a></li>
              <li><a href="grace_cha/index.php" id="login">Login</a></li>
              <li><a href="contact.php" id="contact">Contact</a></li>
            </ul>
          </div>
          <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <a href="about.php">About</a>
              <a href="kids.php" id="kids">Kids</a>
              <a href="grace_cha/login.php">Login</a>
              <a href="contact.php">Contact</a>
            </div>
          </div> -->
          <span class="hamburger" onclick="openNav()"><i class="fas fa-bars"></i></span>
        </div>
      </nav> -->

      <!-- Main Content -->
      <div class="headline-wrapper" style="background-image: url(images/backg.jpg)" ;>
        <div class="row">
          <div class="col-md-12 gbc">
            <h1 id="headline">Grace Ministries</h1>
            <hr class="styled">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 new-tagline">
            <h1><span>grow.</span><span>belong.</span><span>contribute.</span></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 new-button">
            <a href="about.php">
              <h1>ABOUT</h1>
            </a>
            <a href="./grace_cha/register.php">
              <h1>I'm new</h1>

              <a href="grace_cha/index.php">
              <h1>LOGIN</h1>
            </a>

            <a href="contact.php">
              <h1>CONTACT US</h1>
            </a>

            <a href="kids.php">
              <h1>KIDS</h1>
            </a>
          </div>
        </div>
      </div>
    </header>
  </div>
  <div class="wrapper container-fluid">
    <div class="row">
      <div class="service-times">
        <h3>Sunday Mornings: 10:30 am</h3>
        <hr id="service-hr"><strong>|</strong>
        <h3>Community Groups: Various Weeknights, 6 pm</h3>
      </div>
    </div>
    <h1>Click a sermon below to watch.</h1>
    <div class="row">
   
      <div class="current-series">
      
        <?php
        $query = "SELECT * FROM series";
        $select_series = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($select_series)) {
          $series_id = $row['series_id'];
          $series =  $row['title'];
          $series_img =  $row['series_img'];
        ?>
          <div class="current-series">
            <a id="sermon-link" href="series.php?series_id=<?php echo $series_id ?>">
              <img id="series-img" style='width:40vh;border-radius:20%;' src="images/<?php echo $series_img; ?>">
              <i class="far fa-arrow-alt-circle-down fa-6x"></i>
            </a>
          </div>

        <?php
        }

        ?>
      </div>

    </div>
  </div>
  <div class="col-md-12 ministries">
    <h1><strong>Ministries</strong></h1>
  </div>
  <div class="col-md-4 ministries kids">
    <a href="kids.php">
      <img src="images/kids.jpg" style="border-radius:50%; height:100px; width:100px;">
    </a>
    <h4>Kids</h4>
    <p>Grace Chapel Kids is a place where kids feel God’s love while having crazy fun.
      They learn about Jesus in age-appropriate spaces and a safe, secure environment.
      We desire to come alongside you and provide resources for your family to be
      healthy and equipped, and to empower every kid to be a life-long disciple
      of Christ.</p>
  </div>
  <div class="col-md-4 ministries adults">
    <a href="#">
      <img src="images/worship.jpg" style="border-radius:50%; height:100px; width:100px;">
    </a>
    <h4>Life Groups And Classes</h4>
    <p>
    <h4>THE GOSPEL CHANGES EVERYTHING</h4>
    We exist to see every person building Christ's church for the nations, and the glory of God.</p>
  </div>
  <div class="col-md-4 ministries teens">
    <a href="#">
      <img src="images/teens.jpg" style="border-radius:50%; height:100px; width:100px;">
    </a>
    <h4>Teens and Youths</h4>
    <p>We grow in the gospel best when we are growing together.</p>
  </div>
  <div class="row">
    <div class="col-md-12 statement-verse">
      <hr class="hr-verse">
      <h1 id="john812">When Jesus spoke again to the people, he said, “I am the light of the world. Whoever follows me will never walk in darkness, but will have the light of life.”</h1>
      <h1 id="john812-credit">-John 8:12</h1>
      <hr class="hr-verse">
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

  <!-- Scripts -->
  <script src="scripts/index.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>