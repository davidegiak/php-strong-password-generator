<?php
$pescabile = [
    "1",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "10",
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "*",
    "#",
    "+",
    "-",
    "/",
    "|",
    "(",
    ")",
    "[",
    "]",
];
$pass = '';
// $input = $_GET["input"];

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
    <div class="myCont">
        <form action="form.php" method="get">
            <input type="number" value="number" name="input">
            <button type="submit" name="SubmitButton">invia</button>
        </form>
        <?php
        if (isset($_GET['SubmitButton'])) { //check if form was submitted
            $input = $_GET['input']; //get input text
            $message = "Success! You entered: " . $input;
            for ($i = 0; $i < $input; $i++) {
                // array_push($pass, "X");
                $random = rand(0, 29);
                $pass = $pass . $pescabile[$random];
            }
            echo "<h1>" . $pass . "</h1>";
        }
        ?>
    </div>
</body>

</html>