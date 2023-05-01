<?php
$title = "String Manipulation";
include 'includes/header.php'
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>

<body> -->
<h1><?php echo $title ?></h1>
<?php
// 1] String concatenation
echo "<h2 style = 'color: blue'>String Concatenation</h2>";
$phrase1 = "Student who came late";
$phrase2 = "in class, stand with Rock.";
// . is used to concatenate strings
echo $phrase1 . " " . $phrase2;
// " "this is used to give spaces between two strings
// you can put any other string in " ";
echo "<br/>";
echo $phrase1 . ", named Paul, " . $phrase2;
echo "<hr/>";

// 2] String transformation (upper/lower case)
echo "<h2 style = 'color: Green'>String upper/lower case<h2>";
$name = "someone";
echo "<p>Uppercase first letter: </p>" . ucfirst($name) . "<br/>";
echo "<p>Uppercase first letter of each word: </p>" . ucwords($phrase1) . "<br/>";
echo "<p>Uppercase word: </p>" . strtoupper($name) . "<br/>";
echo "<p>Lowercase word: </p>" . strtolower("THIS IS ALL LOWER CASE") . "<br/>";
// everything same for lower case 
echo "<hr/>";

// 3] Repeat String
echo "<h2 style = 'color: gold'>String Repeat</h2>";
echo "Repeat String: <br/>" . str_repeat("Hello <br/>", 10) . "<br/>";
echo "Repeat Uppercase String: <br/>" . strtoupper(str_repeat("Hello <br/>", 10)) . "<br/>";
// str_repeat(string $input, int $multiplier);
echo "<hr/>";

// 4] Position
echo "<h2 style = 'color: brown'>Position</h2>";
echo "Get position: " . strpos($name, "m") . "<br/>";
// it'// get string position
echo "<hr/>";

// 5] Substring
echo "<h2 style = 'color: red'>Substring</h2>";
echo $name;
echo "<br/>";
echo "Get a substring: " . substr($name, 2, 4) . "<br/>";
// from character 2 print 3 characters
echo "<hr/>";

// 6] Find character
echo "<h2 style = 'color: pink'>Find Character</h2>";
echo "Find charachter m: " . strchr($name, "m") . "<br/>";
// it will find the character
echo "<hr/>";

// 7] Length
echo "<h2 style = 'color: yellow'>Length</h2>";
echo $name;
echo "<br/>";
echo "Length of string: " . strlen($name) . "<br/>";
// it'll find the length of string
echo "<hr/>";

// 8] Trim
echo "<h2 style = 'color: purple'>Trim, ltrim, rtrim</h2>";
echo "Without trim: " . "A" . "B C D" . "E" . "<br/>";
echo "Trim spaces on both sides: " . "A" . trim("B C D") . "E" . "<br/>";
echo "Trim spaces to left: " . "A" . ltrim("B C D") . "E" . "<br/>";
echo "Trim spaces to right: " . "A" . rtrim("B C D") . "E" . "<br/>";
echo "<hr/>";

// 9] Replace string
echo "<h2 style = 'color: orange'>Replace String</h2>";
echo $phrase2;
echo "<br/>";
echo "Replace string: " . str_replace("stand", "sit", $phrase2) . "<br/>";
echo "<hr/>";
?>
<?php require 'includes/footer.php' ?>