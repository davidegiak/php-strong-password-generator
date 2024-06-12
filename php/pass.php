<?php
$numbers = "x";
$pass = '';
$input = $_GET["input"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    for ($i = 0; $i < $input; $i++) {
        // array_push($pass, "X");
        $pass = $pass . $numbers;
    }
    echo "<h1>" . $pass . "</h1>";
    ?>
</body>

</html>