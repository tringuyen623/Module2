<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="choosenumber">Choose number of Prime number</label>
        <input type="text" name="size"><br>
        <input type="submit">

    </form>
    <?php

    $size = $_POST['size'];
    $size = (int) $size;
    $N = 2;
    for ($i = 0; $i < $size;) {
        $count = 0;
        for ($j = 2; $j * $j <= $N; $j++) {
            if ($N % $j ==   0) {
                $count++;
            }
        }
        if ($count === 0) {
            echo "$N<br>";
            $i++;
        }
        $N++;
    }
    ?>
</body>

</html>