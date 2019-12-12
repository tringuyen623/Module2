<form method="post">
    <input type="text" name="length" placeholder="enter the length of array"><br>
    <input type="submit" value="Make an array">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $arr = array();
    $len = $_POST['length'];
    $sum = 0;
    function test_input($data)
    {
        if (preg_match("/^[0-9]*$/", $data)) {
            return $data;
        } else {
            return false;
        }
    }


    if (test_input($len) === false) {
        echo "wrong input";
    } else {
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len; $j++) {
                $arr[$i][$j] = rand(1, 100);
            }
        }
    }

    foreach ($arr as $key => $value) {
        foreach ($arr[$key] as $key1 => $num) {
            if ($key == $key1) {
                $sum += $arr[$key][$key1];
            }
        }
    }
    var_dump($arr);
    echo "Sum of backslash of array is: $sum";
}
?>