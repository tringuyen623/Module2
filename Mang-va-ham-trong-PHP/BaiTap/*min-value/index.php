<form method="get">
    <input type="text" name="len" placeholder="enter the length of array">
    <input type="submit" value="Make an  array">
</form>

<form method="post">

    <?php
    $len = $_GET['len'];
    $arr = array();

    function test_input($data)
    {

        if (preg_match("/^[0-9 ,]*$/", $data)) {
            return $data;
        } else {
            return "Wrong input. Only numbers allowed";
        }
    }
    for ($i = 0; $i < $len; $i++) {
        echo  '<input type="text"' . 'name="' . "array$i" . '" placeholder="enter the value of array"><br>';
        $a = ($_POST["array$i"]);
        $a = test_input($a);
        $arr[$i] = explode(",", trim($a));
    }
    echo '<input type="submit"><br>';

        $min = $arr[0][0];
        foreach ($arr as $key => $value) {
            foreach ($arr[$key] as $key1 => $num) {
                if ($arr[$key][$key1] < $min) {
                    $min = $arr[$key][$key1];
                }
            }
        }
   
    echo "The minimum value in this array is: $min";
    ?>
</form>