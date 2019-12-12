<form method="post">
    <input type="text" name="length" placeholder="enter the length of array"><br>
    <input type="submit" value="Make an array">

</form>
<table border="1">
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


    if (!test_input($len)) {
        echo "wrong input";
    } else {
        for ($i = 0; $i < $len; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $len; $j++) {
                $arr[$i][$j] = rand(1, 100);
                echo "<td>" . $arr[$i][$j]. "</td>";
            }
            echo "</tr>";
        }
    }

    foreach ($arr as $key => $value) {
        foreach ($arr[$key] as $key1 => $num) {
            if ($key == $key1) {
                $sum += $arr[$key][$key1];
            }
        }
    }
    echo "Sum of backslash of array is: $sum";
}
?>
</table>