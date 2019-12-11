<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $investment = $_POST['investment'];
        $rates = $_POST['rate'];
        $years = $_POST['years'];
        $result = $investment;
        $futurevalue;
        for ($i = 1; $i <= $years; $i++) {
            $result = $result + $result * ($rates / 100);
        }
        if (empty($_POST['investment']) || empty($_POST['rate']) || empty($_POST['years'])) {
            $futurevalue = "Error : Investment, rate, years required";
        } else {
            $futurevalue = $result;
        }
    }
    ?>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $investment; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo "$rates%"; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $futurevalue; ?></span><br>

    </div>
</body>

</html>