<?php
$title = "For Loop";
include 'includes/header.php'
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - For Loop</title>
</head>

<body> -->
<h1><?php echo $title ?></h1>
<?php
// For Loop statements
for ($count = 0; $count < 10; $count++) {
    echo "<p>Hello World..</p>"; // <p> this tag comes with its own padding
}

for ($count = 0; $count < 10; $count++) {
    echo "<p>The count is: $count</p>";
}

?>

<?php require 'includes/footer.php' ?>