<?php

session_start();


// if (!isset($_SESSION['role'])) {
//     header("Location: home.php");
//     exit(); 
// }

/* 
SQL Query 
SELECT firstname, lastname, companyname. streetname, city, province, postal 
    FROM Food INNER JOIN User ON campanyid = companyid 
    WHERE companyid = $id 

    // UNION ALL 
    SELECT companyname, catagory, item, quantity 
    FROM Food INNER JOIN User ON campanyid = companyid 
    WHERE companyid = $id 
    GROUP BY category 
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Offers | Charitables</title>
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
        <span id="smallBell">
            <a class="d-flex justify-content-end float-right nav-link navbar-right" href="#">
                <i class="fas fa-bell"></i>
            </a>
            </span>
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
                    <a class="nav-link" href="home.php#contact">Contact Us</a>
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
                <span id="bigBell">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
                </span>
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
        <section class="container" id="app">
            <!-- <div class="d-flex mr-2 mb-4 mt-4 ml-2 justify-content-center">
                <button type="button" class="list-group-item list-group-item-action">
                    <a href="form.php" class="aBlack">Form</a>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <a href="dashboard.php" class="aBlack">Dashboard</a>
                </button>
                <button type="button" class="list-group-item list-group-item-action active btn-outline-secondary" id="blueBtn-secondary">
                    <a href=" offer.php" class="aWhite">Offers</a>
                </button>
            </div> -->
            
            
            <div class="list-group-horizontal">
                <h3 class="text-left">Current</h3>
                <div class="container">
                    <div class="row">
                        <!-- the whole list -->
                        <div class="wrapper col-12 col-md-6 list-group-horizontal">
                            <!-- call to database (dynamically) -->
                            <div class="list-group-item list-group-item-action" :ref="1"></div>
                        </div>
        </div>

            </div> <!-- the end of list -->


            <div class="list-group-horizontal">
                <h3 class="text-left">Complete</h3>
                <div class="container">
                    <div class="row">
                        <!-- the whole list -->
                        <div class="wrapper col-12 col-md-6 list-group-horizontal">
                            <!-- call to database (dynamically) -->
                            <div class="list-group-item list-group-item-action" :ref="1"></div>
                        </div>
                    </div> <!--row-->
                </div> <!--container-->
            </div> <!-- list gorup -->



            <!-- </div> -->
        </section>
        <footer class="page-footer text-center pb-4">
            <div class="icons mt-4">
                <i class="fab fa-twitter pr-2"></i>
                <i class="fab fa-facebook-f pr-2"></i>
            </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script src="js/offer.js"></script> -->
    <script src="js/dashboard.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html> 