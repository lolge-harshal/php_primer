<?php
$title = "Arrays and Printouts";
include 'includes/header.php'
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays</title>
</head>

<body> -->
<h1><?php echo $title ?></h1>
<?php
// a variable
$num = 3;
// an array
$numbers = array(1, 2, 3, 4, 5, 6, 2, 3, 11, 44, 577, 88, 999, 55, 34, 65875, 98);
// printing specified value of an array
// put the index value in the square brackets. Index value starts at 0.
echo $numbers[4];

//printing size of an array
/*Create a variabe then call the count() funtion in php and put the array in the count() funtion */
$size = count($numbers);
echo "<p>Array size is: $size</p>";

// printing all values of an array
for ($count = 0; $count < $size; $count++) {
    echo "<p>$numbers[$count]</p>";
}
?>

<?php require 'includes/footer.php' ?>