<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Libraries CSS Files -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link src="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/support.css" rel="stylesheet">
    <link href="css/media-queries.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <!-- Navbar------------------------------------------------------------------------------------->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="home.php"><img src="images/logoLarge.png" alt="logo" height="40"></a>

          <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
              if (isset($_SESSION['role']))
              {
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
                    if (isset($_SESSION['role']))
                    {
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
                  if (isset($_SESSION['role']))
                  {
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
                  }
                  else
                  {
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
  </body>
</html>
