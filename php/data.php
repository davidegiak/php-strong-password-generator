<?php
$pescabile = "12345678910abcdefghijABCDEFGHIJ*#+-/|()[].";
$pass = '';
// $input = $_GET["input"];

function generator($arg, $arg1) {
    if (isset($_POST['SubmitButton'])) { //check if form was submitted
        $input = $_POST['input']; //get input text
        for ($i = 0; $i < $input; $i++) {
            // array_push($pass, "X");
            $random = rand(0, 30);
            $arg = $arg . $arg1[$random];
        }
        echo "<h1>" . $arg . "</h1>";
    }
}

?>