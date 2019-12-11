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
        $product = $_POST['product'] ?? 0;
        $price = $_POST['price'] ?? 0;
        $discount = $_POST['discount'] ?? 0;
        $discountAmount = $price * $discount / 100;
        $discountPrice = $price - $discountAmount;
    }
    ?>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <p class="error"><?php echo $error ?></p>
        <label>Product Description:</label>
        <span><?php echo $product; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$$price"; ?></span><br>

        <label>Discount Percent:</label>
        <span><?php echo "$discount%"; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$$discountAmount"; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$$discountPrice"; ?></span><br>

    </div>
</body>

</html>