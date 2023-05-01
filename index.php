<?php
$title = "Index";
include 'includes/header.php'
?>

<!--Basic HTML (for commenting = [command+k+c]) -->
<h1>Hello HTML - PHP Primer <span class="badge text-bg-primary">New</span></h1>
<h2>Hello HTML - PHP Primer <span class="badge text-bg-primary">New</span></h2>
<h3>Hello HTML - PHP Primer <span class="badge text-bg-primary">New</span></h3>
<h4>Hello HTML - PHP Primer <span class="badge text-bg-primary">New</span></h4>
<h5>Hello HTML - PHP Primer <span class="badge text-bg-primary">New</span></h5>
<h6>Hello HTML - PHP Primer <span class="badge text-bg-primary">New</span></h6>

<?php
// Printing HTML using echo
echo "Hello PHP!";
echo "<br/>"; // <br/> this tag creates a space between two lines
echo "Second Line";

// declare variable
$name = "Someone";
$age = 20;
$gender = "Can't say";
echo "<br/>";
// echo(print) variable
echo $name;
echo "<h1> My name is: $name </h1>"; // <h1></h1> this tags are used to give headlines 
echo "<h1> My age is: $age </h1>";
echo "<h1> My gender is: $gender </h1>"; // using double quotes
echo '<h1> My gender is: ' . $gender . ' </h1>'; // using single quotes
?>

<button type="button" class="btn btn-dark">CLICK ME!</button>
<button type="button" class="btn btn-primary">CLICK ME!</button>
<button type="button" class="btn btn-success">CLICK ME!</button>
<br></br>
<div class="alert alert-info" role="alert">
    A simple info alert—check it out!
</div>

<?php require 'includes/footer.php' ?>