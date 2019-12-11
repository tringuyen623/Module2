<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
       
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
       
        $nameError = empty($name) ? "Name is required" : (!preg_match("/^[a-zA-Z ]*$/",$name) ? "Only letters and white space allowed" : "");
        $emailError = empty($email) ? "Email is required" : (!filter_var($email, FILTER_VALIDATE_EMAIL) ? "Invalid email format" : "");
        $phoneError = empty($phone) ? "Phone is required" : (!preg_match("/[0-9 ]{10}/",$phone) ? "Only ten numbers" : "");

        function saveDataJSON($filename, $name, $email, $phone){
            $contact = [$name, $email, $phone];
            $saveJSON = json_encode($contact);
            $saved = file_put_contents($filename, $saveJSON);
            $read = file_get_contents($filename, )
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset style="width: 25%;">
            <legend>Details</legend>
            <table>
            <span class="error" style="color: red">* required field</span>
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" name="name">
                        <span class="error" style="color: red">* <?php echo $nameError; ?></span>
                    </td>

                </tr>
                <tr>
                    <td>
                        <label>E-mail:</label>
                    </td>
                    <td>
                        <input type="text" name="email">
                        <span class="error" style="color: red">* <?php echo $emailError; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Phone:</label>
                    </td>
                    <td>
                        <input type="text" name="phone">
                        <span class="error" style="color: red">* <?php echo $phoneError; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Register"></td>
                    <td>
                       
                    </td>
                </tr>

            </table>
        </fieldset>


    </form>

</body>

</html>