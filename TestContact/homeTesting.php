<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing | Charitables</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">






    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
    <link href="css/normalize.css" rel="stylesheet">


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link src="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media-queries.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand h1" href="home.php">Charitables</a>
        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            if (isset($_SESSION['role'])) {
                ?>
            <a class="d-flex justify-content-end float-right nav-link navbar-right" href="#">
                <i class="fas fa-bell"></i>
            </a>
            <?php

        }
        ?>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['role'])) {
                    ?>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <?php

            }
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="donate.php">Support Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <?php
                if (isset($_SESSION['role'])) {
                    ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Edit Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
                <?php

            } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signUp.php">Sign Up</a>
                </li>
                <?php

            }
            ?>
            </ul>
        </div>
    </nav>

    <main>
      <section id="intro" class="clearfix">
        <div class="container">

          <div class="intro-img">
            <img src="" alt="" class="img-fluid">
          </div>

          <div class="intro-info">
            <h2>We connect<br>businesses and organizations together to reduce waste<br>and give to the people in need.</h2>
            <div>
              <a href="#about" class=" btn-get-started scrollto">Join Us</a>
              <a href="#services" class="btn-services scrollto">Donate to our Cause</a>
            </div>
          </div>


        </div>
      </section><!--
        <section class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container background-image" id="app">
            <h1 class="text-center pt-4 pb-4">Nourish your Community</h1>
                <! <h5 class="text-center pb-4">Every Little Help Counts</h5> -->


            <!-- <div class="pb-4 ">
                Charitables aims to connect businesses and organizations together to reduce waste and give to the people in need.
            </div>
            <div class="pb-4">
                Be part of the change.
            </div>

          <div class="align-text-bottom text-center  pt-3">
            <div class="bottom-right">
                <div class="row pb-4">
                    <a class="col-6 col-md-5 col-sm-6 btn btn-primary m-auto mybuttonstyle " href="signUp.php" role="button" id="blueBtn">Join Us</a>

                </div>

                <div class="row">
                    <a class="col-6 col-md-5 col-sm-6 btn btn-primary btn-primary2 m-auto mybuttonstyle2" href="donate.php" role="button" id="pinkBtn">Donate to our Cause
                    </a>
                </div>
              </div>
            </div>
        </section> -->


        <section class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container p-4" id="app">
            <h1 class="text-center pt-4 pb-4">What does Charitables do?</h1>

          <div class="container col-10 col-sm-4 col-md-12 col-lg-10 col-xl-10  justify-content-center">
            <div class="row">
              <div id="myleft" class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
              <div class="text-center"><button id="circleButton1" class="circleButton btn btn-default btn-lg active" onclick="display()">Connect</button></div>
              <div class="col-12 col-sm-12" id="text1">Join our growing community. Connect with others in your neighbourhood and be in direct connection with them.</div>
              </div>

              <div id="myleft" class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
              <div class="text-center"><button id="circleButton2" class="btn btn-default btn-lg circleButton" onclick="display2()">Submit your request</button></div>
              <div class="col-12 col-sm-12" id="text2">Submit what you’re looking for, or what you can offer to another safely and easily.</div>
              </div>


               <div id="myleft" class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
              <div class="text-center"><button id="circleButton3" class="btn btn-default btn-lg circleButton" onclick="display3()">Enter our system</button></div>
              <div class="col-12 col-sm-12" id="text3">Your submission enters our system where it can be chosen by with someone with a matching request.</div>
              </div>
              <!-- https://stackoverflow.com/questions/19642308/creating-css3-circles-connected-by-lines -->
            </div>
          </div>




              <!-- <div class="line"></div> -->



        </section>

      <section class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container" id="app">
        <h1 class="text-center pt-4 pb-4">Why does this work?</h1>
        <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 centered">
                  <div class="box">
                    <h1>Smart</h1>
                    <figure><img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" width="30%"></figure>
                      <p>
                        We believe there’s a better way to manage excess than to throw them away.
                      </p>


                  </div>
            </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 centered">
                <div class="box">
                  <h1>Simplify</h1>
                  <figure><img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" width="30%"></figure>
                    <p>
                      We simplify your workload and directly connect you to organizations that match your requests. Register. Donate. Connect. It’s so simple.
                    </p>

                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 centered">

                <div class="box">
                  <h1>Local</h1>
                  <figure><img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" width="30%"></figure>
                    <p>
                      We organize who you match with based off your location.
                    </p>


                </div>
              </div>
          </div>
      </section>
      <br>
    </section>
    <div class="row p-4 align-items-center justify-content-center">
      <h1 >Connect with us</h1>
    </div>
            <div class="hero-content equalize">
                <div class="container-fluid h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-10 col-md-10">


                            <div class="line"></div>
                            <!-- <h2>Contact me</h2> -->
                          <div class="row">
                            <div class="col-5 col-sm-12 col-md-6 col-lg-5 pt-4">
                              <img src="images/contact.jpg" width="100%" alt="contact">
                            </div>
                            <div class="col-5 col-sm-12 col-md-5 col-lg-5">
                                <div class="contact-form text-center">

                                    <div class="col-12 col-sm-12 col-md-12 pt-4" id="thanks">

                                    </div>
                                    <form action="#" method="post" id="contact-page">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input name="name" type="text" class="form-control" id="contact-name" placeholder="Your Name">
                                                </div>
                                            </div>


                                            <div class="col-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input name="email" type="email" class="form-control" id="contact-email" placeholder="Your Email">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input name="subject" type="text" class="form-control" id="contact-subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" name="message" id="contact-message" cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-8 col-md-8 btn">
                                                <button type="submit" class="col-12 col-md-12 col-sm-12 btn sonar-btn btn-primary m-auto mybuttonstyle" id="submitId">Contact Me</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>


      <footer class="page-footer text-center pb-4">
            <div class="icons mt-4">
                <i class="fab fa-twitter pr-2"></i>
                <i class="fab fa-facebook-f pr-2"></i>
            </div>
      </footer>
    </main>
    <script type="text/javascript">
      function display() {
        var element = document.getElementById('text1');
        element.style.opacity = "1";
        element.style.filter  = 'alpha(opacity=100)';
        var element2 = document.getElementById('text2');
        element2.style.opacity = ".5";
        element2.style.filter  = 'alpha(opacity=50)';
        var element3 = document.getElementById('text3');
        element3.style.opacity = ".5";
        element3.style.filter  = 'alpha(opacity=50)';
      }

      function display2() {
        var element = document.getElementById('text2');
        element.style.opacity = "1";
        element.style.filter  = 'alpha(opacity=100)';
        var element2 = document.getElementById('text1');
        element2.style.opacity = ".5";
        element2.style.filter  = 'alpha(opacity=50)';
        var element3 = document.getElementById('text3');
        element3.style.opacity = ".5";
        element3.style.filter  = 'alpha(opacity=50)';
      }

      function display3() {
        var element = document.getElementById('text3');
        element.style.opacity = "1";
        element.style.filter  = 'alpha(opacity=100)';
        var element2 = document.getElementById('text2');
        element2.style.opacity = ".5";
        element2.style.filter  = 'alpha(opacity=50)';
        var element3 = document.getElementById('text1');
        element3.style.opacity = ".5";
        element3.style.filter  = 'alpha(opacity=50)';
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/contact.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script>

      $(document).ready(function(){
        $("circleButton1").click(function(){
          $("#text1").animate({opacity: '0.5'});
        });
        $("circleButton2").click(function(){
        $("#text2").animate({opacity: '0.5'});
        });
        $("circleButton3").click(function(){
        $("#text3").animate({opacity: '0.5'});
        });
      };
    </script> -->


</body>

</html>
