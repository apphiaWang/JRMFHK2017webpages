<?php
require_once ("connect_db.php");
$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$affiliation = $_POST['affiliation'];
$position = $_POST['position'];
$email = $_POST['email'];
$resint = $_POST['resint'];
$mbsp = $_POST['mbsp'];
$paytype = $_POST['paytype'];

$link = connect_db();
$query = "INSERT INTO schooltbl (title, firstname, lastname, gender, affiliation, position, email, mbsp, resint, paytype) VALUES ('$title','$firstname','$lastname','$gender','$affiliation','$position','$email','$mbsp','$resint','$paytype');";
$result= mysql_query($query, $link);
mysql_close($link);

header( 'Location: http://www.ie.cuhk.edu.hk/summer-school-2014/success.html' ) ;
?> 