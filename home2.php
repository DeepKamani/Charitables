<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing | Charitables</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media-queries.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link src="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="donate.php">Support Us</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
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
                    <a class="nav-link" id="bell1" href="#">
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
        <section class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-6 container" id="app">
            <header>
                <h1 class="text-center pt-4 pb-4">Nourish your Community</h1>
                <!-- <h5 class="text-center pb-4">Every Little Help Counts</h5> -->
            </header>
            <div class="pb-4">
                Charitables aims to connect businesses and organizations together to reduce waste and give to the people in need.
            </div>
            <div class="pb-4">
                Be part of the change.
            </div>

            <div class="text-center pt-3">

                <div class="row pb-4">
                    <a class="col-9 col-md-8 col-sm-8 btn btn-primary m-auto mybuttonstyle" href="signUp.php" role="button" id="blueBtn">Join Us
                    </a>

                </div>

                <!-- <div class="row">
                    <a class="col-9 col-md-8 col-sm-8 btn btn-primary btn-primary2 m-auto mybuttonstyle2" href="donate.php" role="button" id="pinkBtn">Donate to our Cause
                    </a>
                </div> -->
            </div>
        </section>

        <section class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-6 container" id="app">
            <h1 class="text-center pt-4 pb-4">What does Charitables do?</h1>

            <!-- <div class="buttonMain">wrew</div> -->

            <ul>
                <li class="buttonMain">1</li>
                <li class="buttonMain">2</li>
                <li class="buttonMain">3</li>
                </ul>



            <!-- https://stackoverflow.com/questions/19642308/creating-css3-circles-connected-by-lines -->



        </section>

        <section class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-6 container" id="app">
            <h1 class="text-center pt-4 pb-4">Why does this work?</h1>


        </section>

    <section id="contact">
        <section class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-6 container" id="app">
            <h1 class="text-center pt-4 pb-4">Connect with Us</h1>

  <div class="hero-area d-flex align-items-center">

      <!-- Hero Thumbnail -->
      <div class="hero-thumbnail equalize bg-img" style="background-image: url(images/contact.jpg);"></div>

        </section>
          <div class="hero-content equalize">
              <div class="container-fluid h-100">
                  <div class="row h-100 align-items-center justify-content-center">
                      <div class="col-12 col-md-8">
                          <div class="line"></div>
                          <!-- <h2>Contact me</h2> -->

                          <div class="col-12">
                              <div class="contact-form text-center">


                                  <form action="#" method="post">
                                      <div class="row">
                                          <div class="col-12 col-md-6">
                                              <div class="form-group">
                                                  <input type="text" class="form-control" id="contact-name" placeholder="Your Name">
                                              </div>
                                          </div>


                                          <div class="col-12 col-md-6">
                                              <div class="form-group">
                                                  <input type="email" class="form-control" id="contact-email" placeholder="Your Email">
                                              </div>
                                          </div>

                                          <div class="col-12 col-md-12">
                                              <div class="form-group">
                                                  <input type="text" class="form-control" id="contact-email" placeholder="Subject">
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                              </div>
                                          </div>
                                          <div class="col-12 btn">
                                              <button type="submit" class="col-7 col-md-6 col-sm-6 btn sonar-btn btn-primary m-auto mybuttonstyle" id="blueBtn">Contact Me</button>
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
    </section>

        <footer class="page-footer text-center pb-4">
            <div class="icons mt-4">
                <i class="fab fa-twitter pr-2"></i>
                <i class="fab fa-facebook-f pr-2"></i>
            </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/dashboard.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
