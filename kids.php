<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.jpg" rel="icon" type="image">

  <!--  Styles  -->
  <title>Grace Ministries</title>

  <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="styles/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="styles/responsive.css" rel="stylesheet" />
    <title>Kids page</title>
    <style>
        body {
            margin: 0;
           
        }
      .container-wallpaper {
            position: relative;
            top: 70px;
            background-color: #a5d2eb;
            width:100%;
            min-height: fit-content;
            
        }
#wallpaper{
width: 100%;  
position: relative;
flex-direction: column;

}

        .container-wallpaper img {
            width:100%;
            max-height: 100%;
            filter: brightness(40%);

        }

        .wallpaper-title {
          align-content: center;
          padding-left: 200px;
          display: flex;
            position: absolute;
            top: 50%;
            z-index: 3;
            width: 50%;
            font-size: 2vw;
            color: white;
            font-style: italic;
        }

        .cont-blogs {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background-color: #f1f1f1;
        }

        .blog {
            width: 280px;
            margin: 20px;
        }

        .blog img {
            max-width: 100%;
        }

        .article {
            display: flex;
            align-items: center;
            margin: 40px;
        }

        .writings {
            font-size: 4vh;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-style: italic;
            margin: 20px;
        }

        .kids-leader {
            width: 80%;
            border: #292a2b 1px solid;
        }

        .kids-leader img {
            max-width: 100%;

        }

        @media screen and (max-width: 820px) {

            .cont-blogs,
            .article {
                flex-direction: column;
            }

.kids-leader {
 width: 100%;
            }
          }

        a,
        a:hover,
        a:focus {
            text-decoration: none;
        }

        a:hover,
        a:focus {
            color: initial;
        }

        .btn,
        .btn:focus {
            outline: none !important;
            box-shadow: none;
        }

        .top_container {
            position: relative;
        }



        .top_container::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            
            background-size: 100% 100%;
            background-position: right bottom;
            background-repeat: no-repeat;
            z-index: -1;
        }

        .sub_page .top_container::before {
            background-color: #062df1;
            background-image: none;
        }

        .top_container::after {
            content: "";
            position: absolute;
            width: 75px;
            height: 75px;
            bottom: 20%;
            left: 6%;
            background-color: #062df1;
        }


        .sub_page .top_container::after {
            display: none;
        }


        .custom_nav-container {
            z-index: 99999;
            padding: 15px 0;
        }

        .custom_nav-container .navbar-toggler {
            outline: none;
        }

        .custom_nav-container .navbar-toggler .navbar-toggler-icon {
            background-image: url(../images/menu.png);
            background-size: 40px;
        }
.wrapper{
  position: sticky;
  top: 0;
z-index: 10000;
background-color:#58aef9;
min-height: 100px;
}
.wrapper img{  
  padding-bottom: 0px;
  border-radius: 60%;
  width: 70px;
  }
 
nav{
  background:transparent;
  height: 5rem;
  font-size:3.5rem;
  
}
ul{
  display: flex;
  justify-content: center;
}

li{
  list-style: none;
  margin-left: 30px;
}
li a {
  text-decoration: none;
  color: rgb(255, 255, 255);
}
li a::after {
  content: '';
  width: 0;
  height: 5px;
  background-color: #050efd;
  margin: auto;
  display: block;
}
li a:hover::after{
  width: 100%;
  transition: width 0.3s linear;
  margin-top:7px;
}
li a:hover {
color: #050efd;
}

    
.transition{
  padding-top: 70px;
  width: 100%;
  justify-content: center;
  align-items: center;
 min-height: 40vh;
 background:#034884; 
}                                                                    
                                                /* body{
                                                justify-content: center;
                                                align-items: center;
                                                min-height: 100vh;
                                            } */
                                            .flip-boxes {
                                              justify-content: center;
                                              
                                            }
                                            .flip-box {
                                              display: flex;
                                              align-content: stretch;
                                              min-height: 40vh;
                                              flex-wrap: wrap;
                                              flex-grow: inherit;
                                              position: relative;
                                              border: 10px solid transparent;
                                              padding: top 20px;
                                              border-top: 0;  
                                              -webkit-perspective: 1000;
                                                      perspective: 1000;
                                            }
                                            .flip-box .back:hover {
                                                
                                                  transform: rotateY(0deg);
                                                  z-index: 10;
                                                }
                                                
                                                .flip-box .front:hover {
                                                  transform: rotateY(180deg);
                                                  z-index: -1;
                                                  
                                                }
                                                
                                                    
                                              
                                              .back, .front {
                                                position: relative;
                                                background-color: #034884;
                                                color: white;
                                                display: flex;
                                                flex-wrap: wrap;
                                                justify-content: center;
                                                align-content: center;
                                                flex: 0 0 100%;
                                                -webkit-transition: all 1s cubic-bezier(.5,1,.5,1);
                                                transition: all 1s cubic-bezier(.5,1.3,.5,1.3);
                                                transform-style: preserve-3d;
                                                background-size: cover;
                                                background-position: center;
                                                overflow: hidden;
                                              }
                                              
                                              .back {
                                                /* background-color: #cecece; */
                                                position: absolute;
                                                left: 0;
                                                top: 0;
                                                bottom: 0;
                                                width: 100%;
                                                z-index: -1;
                                                transform: rotateY(360deg);
                                              }
                                                .back::after {
                                                  /* content: ""; */
                                                  position: absolute;
                                                  bottom: 0;
                                                  left: 0;
                                                  width: 30px;
                                                  height: 30px;
                                                  border: 15px solid transparent;
                                                  border-bottom-color: white;
                                                  border-left-color: white;
                                                }
                                              
                                              
                                              .front {
                                                z-index: 10;
                                              }
                                             
                                                
                                                .front::after {
                                                  content: "";
                                                  position: absolute;
                                                  bottom: 0;
                                                  right: 0;
                                                  width: 30px;
                                                  height: 30px;
                                                  border: 15px solid #cecece;
                                                  border-bottom-color: white;
                                                  border-right-color: white;
                                                }
                                              
                                              .front .content {
                                                  font-size: 2rem;
                                                }

                                              .content {
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                -webkit-transform: translateZ(50px);
                                                        transform: translateZ(50px);
                                                text-shadow: 0px 0px 2px black;
                                                font-size: 3.5vh;
                                                z-index: 90;
                                              padding-left:19px;
                                              }
                                              .content2 {
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                font-style: italic;
                                                color:   ;
                                                font-size: 5.5vh;
                                                z-index: 90;
                                              padding-left:19px;
                                              }
                                            
                                            
                                            
                                    
    </style>
</head>

<body>
  
<div class="wrapper container-fluid">
  
     <!--Navbar -->
<nav>
  
  <ul>
    <img src="images/GraceChapelLogo.jpg" alt="Grace Chapel Logo">
              <li class="active"><a href="index.php" id="home">Home</a></li>
              <li><a href="about.php" id="about">About</a></li>
              <li><a href="grace_cha/register.php" class="btn-get-started sub ">Register</a></li>
              <li><a href="contact.php" id="contact">Contact</a></li>
 </ul>
      </nav>
    </div>
    <div class="container-wallpaper">
      <div id="wallpaper">
        <img src="images/children.jpg" alt="">
        <div class="wallpaper-title">Children are a gift from the Lord; they are a reward from Him</div>
      </div>
    </div>
                      
                                           

                                                                <div class="transition">
                                                                  <div class="row flip-boxes">
                                                                    <div class="col-md-3 col-sm-4 col-8 flip-box">
                                                                      <div class="front" style="background-image:url(images/biblestudy.jpeg)">
                                                                        <div class="content2 text-center">
                                                                          Bible Studies and trivias.<br>
                                                                          <span class="click-for-more">
                                                                          </span>
                                                                        </div>
                                                                      </div>
                                                                      <div class="back">
                                                                        <div class="content">
                                                                          Bible studies have been designed to help <br>the kids in understanding the Bible.
                                                                          <br>Trivias help them in gauging their understanding of the Bible.
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-6 flip-box">
                                                                      <div class="front" style="background-image:url(images/sports.jpg);">
                                                                        <div class="content2" >
                                                                          Sports and retreats
                                                                        </div>
                                                                      </div>
                                                                      <div class="back">
                                                                        <div class="content">
                                                                          The kids compete for prizes and also socialize with their peers.
                                                                         
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-4 col-6 flip-box">
                                                                      <div class="front" style="background-image: url(images/society.jpeg);">
                                                                        <div class="content2">
                                                                          Service to the community
                                                                        </div>
                                                                      </div>
                                                                      <div class="back">
                                                                        <div class="content">
                                                                          The kids are educated on the importance of<br> giving back to the society.<br>
                                                                          This helps strengthen their sociatal ties.
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                

    <!-- </div> -->
    <div class="cont-blogs">
        <div class="blog">
            <a href="#"><img src="images/faith.jpg" style="height:200px;" alt=""></a>

        </div>
        <div class="blog">
            <a href="#"><img src="images/children.jpg" style="height:200px;" alt=""></a>

        </div>
        <div class="blog">
          <a href="#"><img src="images/kids.jpg" style="height:200px;" alt=""></a>

      </div>
      <div class="blog">
        <a href="#"><img src="images/teens.jpg" style="height:200px;" alt=""></a>

    </div>
    <div class="blog">
      <a href="#"><img src="images/youthsSunSet.jpg" style="height:200px;" alt=""></a>

  </div>
        <div class="blog">
            <a href="#"><img src="images/family.jpeg" style="height:200px;" alt=""></a>

        </div>


    </div>
    <div class="article">
        <div class="writings">
            <div style="font-size:5vw;text-decoration:underline;text-align:center;">VISION & MISSION</div>
            Discover the wide variety of ministries for children, from infants through sixth grade.

            The Children’s Ministry of Grace Community Church exists to glorify God through evangelizing children
            , encouraging parents, and edifying servants so that the gospel may be spread among our children,
            families may be supported, and the church may be strengthened.
        </div>
        <div class="kids-leader">
            <div><span style="font-size:20px;">Kids Patron and Educator</span><span
                    style="color:black;font-family: Georgia, 'Times New Roman', Times, serif;"> Pst Duncan Austin</span>
            </div>
            <img src="images/duncan-austin.jpg" alt="Image of the kid's patron">

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
</body>

</html>