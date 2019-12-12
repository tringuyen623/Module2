<form method="post">
    <input type="text" name="length" placeholder="enter the length of array"><br>
    <input type="text" name="column" placeholder="enter the column"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $arr = array();
    $len = $_POST['length'];
    $column = $_POST['column'];
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

   for ($i = 0; $i <$len; $i++){
    for ($j = 0; $j <= $column; $j++) {
        $sum += $arr[$i][$column];
    }
   }
    var_dump($arr);
    echo "Sum number of column of array is: $sum";
}
?>