<form method="post">
    <input type="text" name="string" placeholder="enter the string"><br>
    <input type="text" name="char" placeholder="enter the character to count"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

   
    function test_input($data)
    {
        if (preg_match("/^[a-zA-Z0-9\s\W]*$/", $data) || $data != 0) {
            // $data = trim($data);
            return $data;
        } else {
            return false;
        }
    }
    $input_string = test_input($_POST['string'])??0;
    $character = test_input($_POST['char'])??0;
    $count = 0;
    if ((test_input($input_string) === false && $input_string !=0) || test_input($character) === false) {
        echo "wrong input";
    } else {
        $input_string = trim($input_string);
        $character = trim($character);
        for ($i = 0; $i < strlen($input_string); $i++){
            if ($character === $input_string[$i]){
                $count++;
            }
        }   
        echo $count;
    }
}
?>