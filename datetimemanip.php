<?php
$title = "Date and Time";
include 'includes/header.php'
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date and Time Manipulation</title>
</head>

<body> -->
<h1><?php echo $title ?></h1>
<?php
/*
    mday = day of the month
    mon = month
    year = year
     */
$datenow = getdate(); // we can't directly print the getdate() b'coz this is an array
// we have to individually print each subscript of this array
echo "Today's date: <br/>";
echo $datenow['mday'] . "<br/>";
echo $datenow['mon'] . "<br/>";
echo $datenow['year'] . "<br/>";

echo "Today's date: " . $datenow['mday'] . "/" . $datenow['mon'] . "/" . $datenow['year'] . "<br/>";

echo time();
?>
<?php require 'includes/footer.php' ?>