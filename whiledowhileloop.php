<?php
$title = "While and Do-While Loop";
include 'includes/header.php'
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do While Loops</title>
</head>

<body> -->
<h1><?php echo $title ?></h1>
<?php
$grade = 0;
// Pre-condition loop
while ($grade < 10) {
    // this is an infinite loop
    echo "<p>I am less than 10..</p>";
    // adding increment operator will break infinite loop and set a limit for loop
    $grade++;
    /*
        so now, first it will check the grade, it's zero then it'll come down it'll print
        and then it'll come down it'll increment the value of zero to one and again go up
        and check the condition and it'll print(This thing will happen until the condition until the 
        value gets fullfilled)
        */
}
echo "<p>Exit Loop..</p>";
?>

<h1>Do-While Loop</h1>
<?php
$grade = 5;
// Post-condition loop
do {
    echo "<p>I am do-while loop..</p>";
    $grade++;
} while ($grade < 10);
echo "<p>Exit Loop..</p>";
/*
    This will print only once beacuse in the upper section of code the value has already incremented to 11
    and here the condition is "<10", if you again change the value of variable then as many times you want.
    And it'll will print only once b'coz do-while loop first does the executionof code in the "do" section
    and then checks the condition, if it is true then the loop will continue if false the loop will end..
     */
?>

<?php require 'includes/footer.php' ?>