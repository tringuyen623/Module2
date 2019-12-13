<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1>Registration Form</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        function test_input($data)
        {
            $data = strtolower($data);
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $message = '';
        $nameError = empty($name) ? "Name is required" : (!preg_match("/^[a-zA-Z]*$/", $name) ? "Only letters allowed" : "");
        $emailError = empty($email) ? "Email is required" : (!filter_var($email, FILTER_VALIDATE_EMAIL) ? "Invalid email format" : "");
        $phoneError = empty($phone) ? "Phone is required" : (!preg_match("/^[0-9 ]{10,10}$/", $phone) ? "Only ten numbers" : "");

        if (empty($nameError) && empty($emailError) && empty($phoneError)) {
            function loadRegistrations($filename){
                $current_data = file_get_contents($filename);
                $array_data = json_decode($current_data, true);
                return $array_data;
            }
            function saveDataJSON($filename, $name, $email, $phone)
            {
                loadRegistrations($filename);
                $contact = array(
                    "name" => $name,
                    "email" => $email,
                    "phone" => $phone
                );
                $array_data[] = $contact;
                $final_array = json_encode($array_data);
                if (file_put_contents($filename, $final_array)) {
                    return true;
                } else {
                    throw new Exception("Error");
                }
            }
            try {
                if (saveDataJSON('users.json', $name, $email, $phone)) {
                    $message = "Success";
                }
            } catch (Exception $e) {
                $message = $e->getMessage();
            }
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset style="width: 25%;">
        <legend>Details</legend>
        <table>
            <span class="error" style="color: red"><?php echo $message ?></span>
            <tr>
                <td>
                    <label>Name:</label>
                </td>
                <td>
                    <input type="text" name="name">
                    <span class="error" ><?php echo "$nameError"; ?></span>
                </td>

            </tr>
            <tr>
                <td>
                    <label>E-mail:</label>
                </td>
                <td>
                    <input type="text" name="email">
                    <span class="error" ><?php echo "$emailError"; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone:</label>
                </td>
                <td>
                    <input type="text" name="phone">
                    <span class="error" ><?php echo "$phoneError"; ?> </span>
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
    <h2>Registration List</h2>
    <table class="display" border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php
    $json_data = loadRegistrations('users.json');
    foreach ($json_data as $key => $value){
        echo "<tr>";
        foreach ($json_data[$key] as $key1 => $value1){
            echo "<td> $value1 </td>";
        }
        echo "</tr>";
    }
    ?>
    </table>

</body>

</html>