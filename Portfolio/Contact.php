<?php
$fnameErr = $lnameErr = $emailErr = $genderErr = $dateErr = $companyErr = "";
$reasonErr = $topicErr = "";

$fname = $lname = $email = $gender = $date = $company = "";
$reason = $topic = [];

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // First Name
    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
    } else {
        $fname = cleanInput($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
            $fnameErr = "Only letters allowed";
        }
    }

    // Last Name
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
    } else {
        $lname = cleanInput($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
            $lnameErr = "Only letters allowed";
        }
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Date
    if (empty($_POST["date"])) {
        $dateErr = "Date is required";
    } else {
        $date = cleanInput($_POST["date"]);
    }

    // Company
    if (empty($_POST["company"])) {
        $companyErr = "Company name is required";
    } else {
        $company = cleanInput($_POST["company"]);
    }

    // Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = cleanInput($_POST["gender"]);
    }

    // Reason for Contact
    if (empty($_POST["reason"])) {
        $reasonErr = "Select at least one reason";
    } else {
        $reason = $_POST["reason"];
    }

    // Topic
    if (empty($_POST["topic"])) {
        $topicErr = "Select at least one topic";
    } else {
        $topic = $_POST["topic"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<nav>
    <a href="Index.html">Home</a> |
    <a href="Education.html">Education</a> |
    <a href="Exprience.html">Experience</a> |
    <a href="Projects.html">Projects</a>
</nav>

<hr>

<form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<fieldset>
<legend>Contact Form</legend>

<table>

<tr>
<td>First Name:</td>
<td>
<input type="text" name="fname" value="<?= $fname ?>">
<span style="color:red">* <?= $fnameErr ?></span>
</td>
</tr>

<tr>
<td>Last Name:</td>
<td>
<input type="text" name="lname" value="<?= $lname ?>">
<span style="color:red">* <?= $lnameErr ?></span>
</td>
</tr>


<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gender" value="male" <?= ($gender=="male")?"checked":"" ?>> Male
<input type="radio" name="gender" value="female" <?= ($gender=="female")?"checked":"" ?>> Female
<span style="color:red">* <?= $genderErr ?></span>
</td>
</tr>

<tr>
<td>Email:</td>
<td>
<input type="text" name="email" value="<?= $email ?>">
<span style="color:red">* <?= $emailErr ?></span>
</td>
</tr>

<tr>
<td>Company Name:</td>
<td>
<input type="text" name="company" value="<?= $company ?>">
<span style="color:red">* <?= $companyErr ?></span>
</td>
</tr>


<tr>
<td>Reason for Contact:</td>
<td>
<input type="checkbox" name="reason[]" value="Web Development" <?= in_array("Web Development", $reason) ? "checked" : "" ?>> Web Development
<input type="checkbox" name="reason[]" value="Mobile Development" <?= in_array("Mobile Development", $reason) ? "checked" : "" ?>> Mobile Development
<input type="checkbox" name="reason[]" value="AI/ML Development" <?= in_array("AI/ML Development", $reason) ? "checked" : "" ?>> AI/ML Development
<span style="color:red">* <?= $reasonErr ?></span>
</td>
</tr>

<tr>
<td>Topic of Interest:</td>
<td>
<input type="checkbox" name="topic[]" value="Projects" <?= in_array("Projects", $topic) ? "checked" : "" ?>> Projects
<input type="checkbox" name="topic[]" value="Thesis" <?= in_array("Thesis", $topic) ? "checked" : "" ?>> Thesis
<input type="checkbox" name="topic[]" value="Jobs" <?= in_array("Jobs", $topic) ? "checked" : "" ?>> Jobs
<span style="color:red">* <?= $topicErr ?></span>
</td>
</tr>

<tr>
<td> Consultation Date:</td>
<td>
<input type="date" name="date" value="<?= $date ?>">
<span style="color:red">* <?= $dateErr ?></span>
</td>
</tr>


<tr>
<td></td>
<td>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>

</table>

</fieldset>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    !$fnameErr && !$lnameErr && !$emailErr && !$genderErr && !$dateErr && !$companyErr && !$reasonErr && !$topicErr): ?>

<h3>Submitted Information</h3>
First Name: <?= $fname ?><br>
Last Name: <?= $lname ?><br>
Email: <?= $email ?><br>
Date: <?= $date ?><br>
Company: <?= $company ?><br>
Gender: <?= $gender ?><br>
Reason: <?= implode(", ", $reason) ?><br>
Topic: <?= implode(", ", $topic) ?><br>

<?php endif; ?>

</body>
</html>