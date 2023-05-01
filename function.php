<?php
$title = "Functions";
include 'includes/header.php'
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Function</title>
</head>

<body> -->
<h1><?php echo $title ?></h1>
<?php
/* Defining a function */
function mes()
{
    echo "You are a nice person!";
}

/* Calling a function */
mes();
echo "<hr/>";

/* Function with parameters */
function addFunction($num1, $num2)
{
    $sum = $num1 + $num2;
    $num2 += 1;
    echo "The sum of $num1 and $num2 is $sum <br/>";
}

/* Pass by refrence - use ampersand in parameter */
function changenum(&$num)
{
    $num += 10;
    // $num = $num + 10;
}

addFunction(10, 10);
$num = 400;
changenum($num);
echo $num . "<br/>";
addFunction(10, $num);
addFunction('10', "20");
echo "<hr/>";

/* Returning a value */
function returnProduct($num1, $num2)
{
    $prod = $num1 * $num2;
    return $prod;
}
/* even if the parameter name of two functions are same, it does'nt matter b'coz the parameter name/variable name
    is only alive inside the curly brackets of that function, and in php we call it as "Scope" */

// method 1 of calling returning function
$return_value = returnProduct(10, 10);
echo $return_value . "<br/>";
?>
<?php require 'includes/footer.php' ?>