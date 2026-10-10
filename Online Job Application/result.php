<?php

$id = $_GET["id"] ?? "";
$name = $_GET["name"] ?? "";
$cv = $_GET["cv"] ?? "";

$email = $_REQUEST["email"] ?? "";
$phone = $_REQUEST["phone"] ?? "";
$gender = $_REQUEST["gender"] ?? "";
$position = $_REQUEST["position"] ?? "";
$qualification = $_REQUEST["qualification"] ?? "";
$address = $_REQUEST["address"] ?? "";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Application Result</title>
</head>

<body>

<h1>APPLICATION SUCCESSFUL</h1>

<p><b>Applicant ID:</b> <?= $id ?></p>
<p><b>Name:</b> <?= $name ?></p>
<p><b>Email:</b> <?= $email ?></p>
<p><b>Phone:</b> <?= $phone ?></p>
<p><b>Gender:</b> <?= $gender ?></p>
<p><b>Job Position:</b> <?= $position ?></p>
<p><b>Qualification:</b> <?= $qualification ?></p>
<p><b>Address:</b> <?= $address ?></p>
<p><b>Uploaded CV:</b> <?= $cv ?></p>
<p>Application submitted successfully.</p>

<a href="index.php">Apply Again</a>

</body>
</html>