<form method="post">
    <input type="text" name="index" placeholder="enter the index of array"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $arr = array();
    $index = $_POST['index'];
    $result = 0;
    function test_input($data)
    {
        if (preg_match("/^[-0-9]*$/", $data)) {
            return $data;
        } else {
            return false;
        }
    }

    if (test_input($index) === false) {
        echo "wrong input";
    } else {
        for ($i = 0; $i < 100; $i++) {
                $arr[$i] = rand(1, 100);
        }
    }
    function findindex(array $arr, int $index)
    {
        $len = count($arr);
        if ($index >= $len || $index < 0) {
            throw new Exception("index must be lower than 100 or higher than 0");
        } else {
            for ($i = 0; $i < $len; $i++) {
                if ($i === $index) {
                    $result = $arr[$i];
                }
            }
            return $result;
        }
        
    }
    try {
        $result = findindex($arr, $index);
        print_r($arr);
        echo "<br>";
        echo "The value of index $index is: $result";
    } catch (Exception $e) {
        echo "Message: " . $e->getMessage();
    }
}
?>