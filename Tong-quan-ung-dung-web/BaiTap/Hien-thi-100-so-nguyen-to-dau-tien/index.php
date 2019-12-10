<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Prime number</title>
</head>

<body>
    <form method="post">
        <label>Display first 100 Prime number</label>
    </form>
    <?php
    $N = 2;
    for ($i = 2; $i <100; $i++) {
        $count = 0;
        for ($j = 2; $j * $j <= $N; $j++) {
            if ($N % $j ==   0) {
                $count++;
            }
        }
        if ($count === 0) {
            echo "$N<br>";
        }
        $N++;
    }
    ?>
</body>

</html>