<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>

<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <form action="result.php" method="POST">
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product" required><br>

                <label>List Price:</label>
                <input type="number" name="price"><br>

                <label>Discount Percent:</label>
                <input type="number" name="discount" placeholder="%" required>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>
        </form>
    </div>
</body>

</html>