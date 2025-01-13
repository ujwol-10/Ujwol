<?php
// PHP block to define your name and hobby
$name = "Ujwol";
$hobby = "reading";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>
    <script>
        // JavaScript to show an alert with the PHP-defined name when the page loads
        window.onload = function() {
            alert("Hello, my name is <?php echo $name; ?>!");
        };
    </script>
</head>
<body>
    <h1>Welcome to My Introduction</h1>
    <p>Hi, my name is <strong><?php echo $name; ?></strong>.</p>
    <p>One of my favorite hobbies is <strong><?php echo $hobby; ?></strong>.</p>
</body>
</html>
