<?php
$fname = $lname = $email = $number = $password = "";
$message = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["number"]) || empty($_POST["password"])) {
        $message = "All fields are required";
    } else {
        $fname = cleanInput($_POST["fname"]);
        $lname = cleanInput($_POST["lname"]);
        $email = cleanInput($_POST["email"]);
        $number = cleanInput($_POST["number"]);
        $password = cleanInput($_POST["password"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email format";
        } else {
            $message = "Signup Successful!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>

<center>
    <h2>Sign Up</h2>

    <fieldset style="width:300px; background-color:white;">
        

        <form method="post">

            <input type="text" name="fname" placeholder="Enter First Name" value="<?php echo $fname; ?>"><br><br>

            <input type="text" name="lname" placeholder="Enter Last Name" value="<?php echo $lname; ?>"><br><br>

            <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>"><br><br>

            <input type="text" name="number" placeholder="Enter Contact Number" value="<?php echo $number; ?>"><br><br>

            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" value="Sign Up">

        </form>
    </fieldset>

    <br>

 
</center>

</body>
</html>