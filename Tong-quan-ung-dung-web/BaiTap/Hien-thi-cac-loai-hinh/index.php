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
        <select name="menu">
            <option value="choose">Choose the picture</option>
            <option value="rec">The rectangle</option>
            <option value="sqrtri">The square triangle</option>
            <option value="isostri">The isosceles triangle</option>
        </select>
        <input type="submit"><br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $pic = $_POST['menu'];
            switch ($pic) {
                case "choose":
                    echo "Please choose a option!";
                    break;
                case "rec":
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 15; $j++) {
                            echo '*';
                        }
                        echo "<br>";
                    }
                    break;
                case "sqrtri":
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < $i; $j++) {
                            echo '*';
                        }
                        echo "<br>";
                    }

                    for ($i = 5; $i > 0; $i--) {
                        for ($j = 1; $j < $i; $j++) {
                            echo '*';
                        }
                        echo "<br>";
                    }

                    for ($i = 5; $i > 0; $i--) {
                        for ($j = 0; $j < 5; $j++) {
                            if ($j >= $i) {
                                echo '*';
                            } else {
                                echo '&nbsp', '&nbsp';
                            }
                        }
                        echo '<br>';
                    }

                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 5; $j++) {
                            if ($j > $i) {
                                echo '*';
                            } else {
                                echo '&nbsp', '&nbsp';
                            }
                        }
                        echo '<br>';
                    }
                    break;
                case "isostri":
                    for ($i = 0; $i < 15; $i++) {
                        for ($j = 15; $j > 0; $j--) {
                            if ($j > $i) {
                                echo '&nbsp';
                            } else {
                                echo '*';
                            }
                        }
                        echo "<br>";
                    }
                    break;
            }
        }
        ?>
    </form>
</body>

</html>