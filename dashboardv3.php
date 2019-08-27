<?php

session_start();

$id = $_SESSION['id'];

$dsn = "mysql:host=localhost;dbname=browne9_Charitables;charset=utf8mb4";
$dbusername = "browne9_weedsite";
$dbpassword = "g@5o4nFUJ7ha";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT `organization_name`, `fname`,`lname` FROM `Users`");
$stmt->execute();

$stmt1 = $pdo->prepare("SELECT `user`.`id`, `organization_name`, `fname`,`lname`, `address`, `city`, `state`, `categoryID` 
FROM `Users` AS user INNER JOIN `Food` AS food ON `user`.`id` = `food`.`id` INNER JOIN `FoodImages` AS foodImg ON `food`.`category` = `foodImg`.`id`
UNION
SELECT `user`.`id`, `organization_name`, `fname`,`lname`, `address`, `city`, `state`, `categoryID` 
FROM `Users` AS user INNER JOIN `Clothes` AS clothes ON `user`.`id` = `clothes`.`id` INNER JOIN `ClothesImages` AS clothesImg ON `clothes`.`category` = `clothesImg`.`id` 
ORDER BY `organization_name`");
$stmt1->execute();

$stmt2 = $pdo->prepare("SELECT `user`.`id`, `organization_name`, `fname`,`lname`, `address`, `city`, `state`, `categoryID` 
FROM `Users` AS user INNER JOIN `FoodNeeds` AS food ON `user`.`id` = `food`.`id` INNER JOIN `FoodImages` AS foodImg ON `food`.`category` = `foodImg`.`id`
UNION
SELECT `user`.`id`, `organization_name`, `fname`,`lname`, `address`, `city`, `state`, `categoryID` 
FROM `Users` AS user INNER JOIN `ClothesNeeds` AS clothes ON `user`.`id` = `clothes`.`id` INNER JOIN `ClothesImages` AS clothesImg ON `clothes`.`category` = `clothesImg`.`id` 
ORDER BY `organization_name`");
$stmt2->execute();

// $name = $stmt2 -> fetch();

// $name = $name['fname'];
// var_dump($name);
// $stmt3 = $pdo->prepare("SELECT * FROM `Clothes`");
// $stmt3->execute();

// $stmt4 = $pdo->prepare("SELECT * FROM `ClothesNeeds`");
// $stmt4->execute();
// var_dump($id);
// if (!isset($_SESSION['role'])) {
//     header("Location: home.php");
//     exit(); 
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Charitables</title>
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
            <!-- mobile blue bell -->
            <a class="d-flex justify-content-end float-right nav-link navbar-right" href="#">
                <i class="fas fa-bell"></i>
            </a>

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
                <!-- grey desktop bell -->
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
        <section class="container" id="app">
            <div class="d-flex mr-2 mb-4 mt-4 ml-2 justify-content-center">
                <button type="button" class="list-group-item list-group-item-action">
                    <a href="form.php" class="aBlack">Form</a>
                </button>
                <button type="button" class="list-group-item list-group-item-action btn-outline-secondary active" id="blueBtn-secondary">
                    <a href="dashboard.php" class="aWhite">Dashboard</a>
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    <a href="offer.php" class="aBlack">Offers</a>
                </button>
            </div>
            <ul class="nav nav-tabs-pink nav-inline nav-justified">
                <li class="nav-item">
                    <a class="<?php echo ($_SESSION['role'] == '2' ? "active" : ""); ?> nav-link aBlack" data-toggle="tab" href="#donor">Donor</a>
                </li>
                <li class="nav-item">
                    <a class="<?php echo ($_SESSION['role'] == '1' ? "active" : ""); ?> nav-link aBlack" data-toggle="tab" href="#recipient">Recipient</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="donor" class="container tab-pane active center"><br>
                    <div class="list-group-horizontal">
                        <?php
                        $done = false;
                        $organizationName = null;
                        $row = $stmt1->fetch(); 
                        while($row > 0 && $row != $done)
                        {
                            if ($row["organization_name"] != $organizationName) {
                                ?>
                        <!-- call to database (dynamically) -->
                        <div class="list-group-item list-group-item-action">
                            <!-- id should be the company id in the Food table -->
                            <a href="details.php?id=<?php echo ($row['id']); ?>">
                                <h3 class="text-left aBlack"><?php echo ($row['organization_name']); ?></h3>
                                <h4 class="text-left aBlack"><?php echo ($row['fname']); ?> <?php echo ($row['lname']); ?></h4>
                                <p class="text-left aBlack"><?php echo ($row['address']); ?> <?php echo ($row['city']); ?> <?php echo ($row['state']); ?></p>
                                <?php
                                $organizationName = $row['organization_name'];
                            }
                            while ($organizationName == $organizationName)
                            {
                                ?>

                                <div id="content1" class="float-left text-left content" :class=" { hideContent: isHidden, showContent: isShown } ">
                                <ul class="aBlack">
                                    <li><?php echo ($row['categoryID']); ?></li>

                                </ul>
                            </div>
                            <?php
                                if($row = $stmt1->fetch())
                                {
                                $organizationName = $row['organization_name'];

                            ?>
                              
                               
                        <?php
                                }
                                else{
                                    $done = true;
                                }
                            }
                        }
                        ?>
                        <div class="float-right justify-content-center">
                        <i class="fas fa-angle-right fa-3x d-flex justify-content-end"></i>
                    </div>
                </a>
                <div id="view-more">
                    <button @click="hideShow" class="btn btn-primary mybuttonstyle col-5 col-sm-3 col-md-3" data-toggle="collapse">{{text}}</button>
                </div>
            </div>
               <?php     ?>

                    </div>
                </div>




                <div id="recipient" class="container tab-pane fade center"><br>
                    <div class="list-group-horizontal">
                        <?php
                        $done = false;
                        $firstTime = true;
                        $organizationName = null;
                        while ($row = $stmt2->fetch()) {
                            if ($row["organization_name"] != $organizationName) {
                                if ($organizationName != null) { ?>
                        <div class="float-right justify-content-center">
                            <i class="fas fa-angle-right fa-3x d-flex justify-content-end"></i>
                        </div>
                        <div id="view-more">
                            <button @click="hideShow" class="btn btn-primary mybuttonstyle col-5 col-sm-3 col-md-3" data-toggle="collapse">{{text}}</button>
                        </div>
                        <?php

                    }
                    ?>


                        <!-- call to database (dynamically) -->
                        <div class="list-group-item list-group-item-action">
                            <a href="details.php?id=<?php echo ($row['id']); ?>">
                                <h3 class="text-left aBlack"><?php echo ($row['organization_name']); ?></h3>
                                <h4 class="text-left aBlack"><?php echo ($row['fname']); ?> <?php echo ($row['lname']); ?></h4>
                                <p class="text-left aBlack"><?php echo ($row['address']); ?> <?php echo ($row['city']); ?> <?php echo ($row['state']); ?></p>
                                <?php
                                $organizationName = $row['organization_name'];
                            }

                            ?>
                                <div id="content1" class="float-left text-left content" :class=" { hideContent: isHidden, showContent: isShown } ">
                                    <ul class="aBlack">
                                        <li><?php echo ($row['categoryID']); ?></li>
                                    </ul>

                                </div>
                            </a>

                        </div>
                        <?php

                    }
                    if ($organizationName != null) {
                        ?>
                        <div class="float-right justify-content-center">
                            <i class="fas fa-angle-right fa-3x d-flex justify-content-end"></i>
                        </div>
                        <div id="view-more">
                            <button @click="hideShow" class="btn btn-primary mybuttonstyle col-5 col-sm-3 col-md-3" data-toggle="collapse">{{text}}</button>
                        </div>
                        <?php 
                    }
                    ?>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html> 