<?php
$title = "Switch Statement";
include 'includes/header.php'
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statements</title>
</head>

<body> -->
<h1><?php echo $title ?></h1>
<?php
$grade = "A";

switch ($grade) {
    case "A":
        echo "<h2 style = 'color: gold'>You are a superstar!</h2>";
        break;
    case "B":
        echo "<h2 style = 'color: silver'>You did well..</h2>";
        break;
    default:
        echo "<h2 style = 'color: red'>You have failed</h2>";
        break;
}
?>
<?php require 'includes/footer.php' ?>