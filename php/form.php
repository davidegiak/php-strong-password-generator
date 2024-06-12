<?php
// $pescabile = "12345678910abcdefghijABCDEFGHIJ*#+-/|()[].";
// $pass = '';
// // $input = $_GET["input"];

// function generator($arg, $arg1) {
//     if (isset($_POST['SubmitButton'])) { //check if form was submitted
//         $input = $_POST['input']; //get input text
//         for ($i = 0; $i < $input; $i++) {
//             // array_push($pass, "X");
//             $random = rand(0, 30);
//             $arg = $arg . $arg1[$random];
//         }
//         echo "<h1>" . $arg . "</h1>";
//     }
// }

include_once __DIR__ . "/data.php";

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
        <form action="form.php" method="post">
            <input type="number" value="number" name="input">
            <button type="submit" name="SubmitButton">invia</button>
        </form>
        <?php
        // if (isset($_POST['SubmitButton'])) { //check if form was submitted
        //     $input = $_POST['input']; //get input text
        //     $message = "Success! You entered: " . $input;
        //     for ($i = 0; $i < $input; $i++) {
        //         // array_push($pass, "X");
        //         $random = rand(0, 30);
        //         $pass = $pass . $pescabile[$random];
        //     }
        // }
        echo generator($pass, $pescabile);
        ?>
    </div>
</body>

</html>