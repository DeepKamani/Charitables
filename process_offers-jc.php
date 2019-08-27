<?php

session_start();

/* match on the category between recipients and donors 
	- use pickedRole and pickedId to check if they are recipient/donor 
    to see which tables to pull
/* delete the specific record(s) of donors based on 
checkboxes
  - take them off dashboard 
*/



// currently logged in role 
$role = $_SESSION['role'];
// role of the person that was clicked
$donorRole = $_SESSION['pickedRole'];
// the id of the person that was clicked 
$donorId = $_SESSION["pickedId"];
// the currently logged in id 
$id = $_SESSION["id"];
//type of item
$type = $_SESSION['type'];
//category of item
$category = $_SESSION['category'];
//item being passed
$item = $_SESSION['item'];
//quantity of item
$quantity = $_SESSION['quantity'];


$dsn = "mysql:host=localhost;dbname=browne9_Charitables;charset=utf8mb4";
$dbusername = "browne9_weedsite";
$dbpassword = "g@5o4nFUJ7ha";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

echo ("before ");
// check if any checkboxes are checked
if (!empty($_POST["requests"])) {
    $matches = $_POST["requests"];
    var_dump($matches);
    echo ($matches[0]);
    // substr($matches, 0, 3))
    // echo(" Role:".$role);  
    // echo(" Matched Role:".$matchedRole);  
    // echo(" Matched ID:".$matchedId);  
    // echo(" ID:".$id);
    // echo(" Type:".$type);  

    $index = $type;






    // Offers Table coulmns: id,  matchedId, category, item, quantity, initiator

    // if one or more was checked, loop through checkboxes and insert row in Match
    if (count($matches > 0)) {
        echo ("  count > 0 ");
        // for the offers page 
        // if ($role == '2') { 
        foreach ($matches as $match) {
            // checks if the type is food or clothes
            //	echo(strpos($match, '/\s/')); 
            // var_dump($matches);  


            if ($matchedRole == '1') { // Donor initiated the matching
                // $stmt = $pdo->prepare("INSERT INTO `Offers` VALUES (NULL,'$matchedId', '$id', '$match', 'd') ");
                $stmt = $pdo->prepare("INSERT INTO `Offers`(`id`, `matchedId`, `category`, `item`, `quantity`, `type`, `initiator`) VALUES ('$id','$matchedId','$category','$item','$quantity','$type','$matchedRole')");

                // function that would select the categoryid and the quantity if food/clothes and delete from food/clothes 
                // have to get the categoryId and the quantity of the matched item
            } else { // recipient 
                $stmt = $pdo->prepare("INSERT INTO `Offers`(`id`, `matchedId`, `category`, `item`, `quantity`, `type`, `initiator`) VALUES ('$id','$matchedId','$category','$item','$quantity','$type','$matchedRole') ");
            }
            // function that would select the categoryid and the quantity if food/clothes and delete from food/clothes 
            $i = $stmt->execute();
            // check whether insert was unsuccessful (redirect to error page), otherwise continue
            if ($i == 1) {
                echo ("success 1");
            }


            // delete the specific record(s) of donor/recipient based on $match
            if ($matchedRole == '1' && $index = "f") { // Food

                $stmt = $pdo->prepare("DELETE FROM `Food` WHERE `item` = '$item' AND `id`='$id' ");
                $i = $stmt->execute();

                // check whether insert was unsuccessful (redirect to error page), otherwise continue
                if ($i == '1') {
                    echo (" success 2 ");
                }
            }
            if ($matchedRole == '1' && $index == "c") {
                $stmt = $pdo->prepare("
										DELETE FROM `Clothes`
										WHERE `item` = '$match' AND id='$matchedId'");
                $i = $stmt->execute();

                // check whether insert was unsuccessful (redirect to error page), otherwise continue
                if ($i == '1') {
                    echo ("success 3");
                }
            }
            if ($matchedRole == '2' && $index == "f") {
                $stmt = $pdo->prepare("
										DELETE FROM `FoodNeeds`
										WHERE `item` = '$match' AND id='$matchedId'");
                $i = $stmt->execute();

                // check whether insert was unsuccessful (redirect to error page), otherwise continue
                if ($i == '1') {
                    echo ("success 4");
                }
            }
            if ($matchedRole == '2' && $index == "c") {
                $stmt = $pdo->prepare("
										DELETE FROM `clothesNeeds`
										WHERE `item` = '$match' AND id='$matchedId'");
                $i = $stmt->execute();

                // check whether insert was unsuccessful (redirect to error page), otherwise continue
                if ($i == '1') {
                    echo ("success 5");
                }
            }
        } // end of loop 
    }
}

// 	}
// }
