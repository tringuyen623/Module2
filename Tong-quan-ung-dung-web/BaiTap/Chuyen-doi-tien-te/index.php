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
        <h1>Simple Calculator</h1>
        <fieldset style="width: 21%;">
            <legend>Exchange money</legend>
            <table>
                <tr>
                    <td>
                        <label>Enter amount of money: </label>
                    </td>
                    <td>
                        <input type="number" name="amount" min="0" pattern="/^[0-9]$/">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Currency</label>
                    </td>
                    <td>
                        <select name="currency">
                            <option value="usd">USD</option>
                            <option value="vnd">VND</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Exchange">
                    </td>
                </tr>
            </table>
            <p>Result:
                <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $amount = $_POST['amount'];
                    $currency = $_POST["currency"];
                    $usdtovndRate = 23172.50;
                    $vndtousdRate = 0.0000431641;
                    $result;
                    switch ($currency) {
                        case "usd":
                            $result = $amount * $usdtovndRate;
                            echo "$result VND";
                            break;
                        case "vnd":
                            $result = $amount * $vndtousdRate;
                            echo "$result USD";
                            break;
                    }
                }
                ?>
            </p>

        </fieldset>


    </form>
</body>

</html>