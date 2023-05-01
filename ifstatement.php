<?php
$title = "If-Else Statement";
include 'includes/header.php'
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statements</title>
</head>

<body> -->
<h1><?php echo $title ?></h1>
<?php
// An if statement that will carry out an action based on the value of the variable

$marks = 30;

if ($marks >= 30) {
    echo "<h3 style = 'color: green'>You have passed</h3>";
} else {
    echo "<h3 style = 'color: red'>You have failed</h3>";
}

// If-Else If-Else
$marks = "A";

if ($marks == "A") {
    echo "<h2 style = 'color: gold'>You are a superstar!</h2>";
    // echo "<h2 style = 'color: yellow'>You are a superstar!</h2>";
} elseif ($marks == "B") {
    echo "<h2 style = 'color: silver'>You did well..</h2>";
} else {
    echo "<h2 style = 'color: red'>You have failed!</h2>";
}

?>

<?php require 'includes/footer.php' ?>