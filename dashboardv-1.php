<?php

session_start();

$id = $_SESSION['id'];

$dsn = "mysql:host=localhost;dbname=browne9_Charitables;charset=utf8mb4";
$dbusername = "browne9_weedsite";
$dbpassword = "g@5o4nFUJ7ha";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT `id`,`organization_name`, `fname`,`lname` FROM `Users`");
$stmt->execute();




?>
            <div class="tab-content">
                <div id="donor" class="container tab-pane active center"><br>
                    <div class="list-group-horizontal">
                        <?php

                        while ($row = $stmt->fetch())
                        {
                            $name = $row['id'];
                            
                            // $stmt2 = $pdo->prepare("SELECT `user`.`id`,`organization_name`, `fname`,`lname`,`food`.`id`, `food`.`category`, `food`.`item`, `food`.`quantity` 
                            // FROM `Users` AS user 
                            // INNER JOIN `FoodNeeds` AS food 
                            // ON `user`.`id` = `food`.`id` ");
                            // $stmt2->execute();
                            $stmt2 = $pdo->prepare("SELECT `user`.`id`, `organization_name`, `fname`,`lname`, `address`, `city`, `state`, `categoryID` 
                            FROM `Users` AS user INNER JOIN `FoodNeeds` AS food ON `user`.`id` = `food`.`id` INNER JOIN `FoodImages` AS foodImg ON `food`.`category` = `foodImg`.`id`
                            UNION
                            SELECT `user`.`id`, `organization_name`, `fname`,`lname`, `address`, `city`, `state`, `categoryID` 
                            FROM `Users` AS user INNER JOIN `ClothesNeeds` AS clothes ON `user`.`id` = `clothes`.`id` INNER JOIN `ClothesImages` AS clothesImg ON `clothes`.`category` = `clothesImg`.`id` 
                            WHERE `user`.`id`= $name");
                            $stmt2->execute();
                        // $row2 = $stmt2->fetch();
                        // var_dump($row2['item']);

                        ?>
                        <!-- call to database (dynamically) -->
                        <div class="list-group-item list-group-item-action">
                            <!-- id should be the company id in the Food table -->
                          
                            <a href="details.php?id=11">
                                <h3 class="text-left aBlack"><?php echo($row['organization_name']); ?></h3>
                                <h4 class="text-left aBlack"><?php echo($row['fname']); ?> <?php echo($row['lname']); ?></h4>
                                <?php

                                while ($row2 = $stmt2->fetch())
                                {
                                    ?>
                                <div id="content1" class="float-left text-left content" :class=" { hideContent: isHidden, showContent: isShown } ">
                                <ul><li>Items: <?php echo($row2['categoryID']); ?></ul>
                                </div>
                              
                                <div class="float-right justify-content-center">
                                    <i class="fas fa-angle-right fa-3x d-flex justify-content-end"></i>
                                </div>
                                <?php
                             }
                            ?>
                            </a>
                         
                            <div id="view-more">
                                <button @click="hideShow" class="btn btn-primary mybuttonstyle col-5 col-sm-3 col-md-3" data-toggle="collapse">{{text}}</button>
                            </div>
                        
                        <?php

                        }

                        ?>
                        </div>
                        </div>
                    </div>
                

               

                <div id="recipient" class="container tab-pane fade center"><br>
              
            gtyjghxfg
                </div>
              
            </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/dashboard.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html> 