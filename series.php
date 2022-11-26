<?php include 'includes/connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>Grace Ministries</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  Styles  -->
  <link rel="stylesheet" href="styles/about.processed.css">
  <link rel="stylesheet" href="styles/sermon.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab|Raleway|Kristi|Josefin+Slab" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<!-- Content -->

<body>
  <div class="wrapper container-fluid">
    <header>

      <!--Navbar -->
      <nav class="navbar">
        <div class="navbar-header">
         
        </div>
        <div class="navbar-right">
          <div class="responsive-nav-buttons">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php" id="home">Home</a></li>
              <li><a href="about.php" id="about">About</a></li>
             
              <li><a href="grace_cha/register.php" id="im-new">I'm New</a></li>
              <li><a href="contact.php" id="contact">Contact</a></li>
            </ul>
          </div>
          <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="grace_cha/register.php">I'm New</a>
              <a href="contact.php">Contact</a>
            </div>
          </div>
          <span class="hamburger" onclick="openNav()"><i class="fas fa-bars"></i></span>
        </div>
      </nav>

      <div class="headline-wrapper">
        <div class="row">
          <div class="col-md-12 headline-tagline">
            <h1 style="color:aqua; font-size:10vh;">Our daily bread</h1>
          </div>
        </div>
      </div>

      <div class="container-fluid content">
        <div class="col-md-12 message">
          <p>Sermons</p>
        </div>
<!---SERMON CARDS-->
<?php
if(isset($_GET['series_id'])){
  $series_id = $_GET['series_id'];
}

$query = "SELECT * FROM sermons WHERE series_id = $series_id";
$select_sermons = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($select_sermons)){
  $sermon_id = $row['sermon_id'];
  $topic = $row['topic'];
  $preacher = $row['preacher'];
  $desc = $row['description'];
 $video =  $row['video'];
 $series_id = $row['series_id'];

?>
<div class="sermon_card">
  <?php
  $query = "SELECT * FROM series WHERE series_id = $series_id";
  $select_series_pic = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($select_series_pic)){
  $series_img =  $row['series_img'];

  }
  ?>
 
    <img src="images/<?php echo $series_img; ?>" alt="">
     <div style="padding:20px;">
      <div class="sermon_preacher"><?php echo $preacher ?></div>
    <div class="sermon_topic"><?php echo $topic ?></div>
    <div class="sermon_desc"><?php  echo $desc ?></div>
    <a class="sermon_btn" href="video.php?sermon_id=<?php echo $sermon_id ?>">Play Sermon</a>
    </div>
</div>



<?php
}
?>



        <footer id="footer">
    <section class="info_section layout_padding-top">
      <div class="info_logo-box">
        <h3 style="color:Grey;">
          Grace Chapel Murang'a
        </h3>
      </div>
      <div class="container ">
        <div class="row">
          <!-- <div class="col-md-3"> -->
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><strong style="color:white;">Contact Us</strong></h3>
            <p style="color:white; font-size:2vh;">Grace Chapel, Township Murang'a-Kangema, Rd<br>Murang'a, Kenya
              <br />Code:- 75G5+VJ Murang'a<br><br>
              <strong>Phone:</strong> +254-125548855<br>
              <strong>Email:</strong><a href="mailto:info@gracechapel.co.ke">info@gracechap.com<br></a>
            </p>
          </div>
          <!-- </div> -->
          <div class="col-md-3">
            <h4><strong style="color:white;font-size:2vh"><u>Our Services</u></strong></h4>
            <div class="col-lg-3 col-md-6 footer-links">
              <ul style="color:grey;font-size:2vh">
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
              <h6 style="color:white;font-size:3vh"><strong>Join Our Newsletter</strong></h6>
              <p style="color:white; font-size:2vh;">For upcoming events and news.....</p>
              <div class="form_container">
                <form action="#" method="post">
                  <input type="email" class="form-control" placeholder="Enter your email">
                  <button type="submit" style="background-color:green;color:white;">
                    SUBSCRIBE
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
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>