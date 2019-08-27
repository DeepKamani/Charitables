<?php

//receive values user submitted from form
$id =$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=browne9_Charitables;charset=utf8mb4";
$dbusername = "browne9_weedsite";
$dbpassword = "g@5o4nFUJ7ha";


$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `Contact` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name',
	'$email', '$subject', '$message'); ");

$stmt->execute();

echo('{"success":
	"true"
  }');
