<?php

$errors = array();

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $gender = $_POST["gender"] ?? "";
    $position = $_POST["position"] ?? "";
    $qualification = $_POST["qualification"];
    $address = $_POST["address"];


    if($id == "")
    {
        $errors[] = "Applicant ID is required.";
    }

    if($name == "")
    {
        $errors[] = "Name is required.";
    }

    if($email == "")
    {
        $errors[] = "Email is required.";
    }

    if($phone == "")
    {
        $errors[] = "Phone number is required.";
    }

    if($password == "")
    {
        $errors[] = "Password is required.";
    }

    if($gender == "")
    {
        $errors[] = "Please select gender.";
    }

    if($position == "")
    {
        $errors[] = "Please select job position.";
    }

    if($qualification == "")
    {
        $errors[] = "Qualification is required.";
    }

    if($address == "")
    {
        $errors[] = "Address is required.";
    }


    if($phone != "" && !preg_match("/^[0-9]{11}$/", $phone))
    {
        $errors[] = "Phone number must contain 11 digits.";
    }

    if($password != "" && strlen($password) < 6)
    {
        $errors[] = "Password must contain at least 6 characters.";
    }


    if(isset($_FILES["cv"]))
    {
        $cvName = $_FILES["cv"]["name"];
        $cvTmp = $_FILES["cv"]["tmp_name"];
        $cvSize = $_FILES["cv"]["size"];
        $cvError = $_FILES["cv"]["error"];

        $extension = strtolower(
            pathinfo($cvName, PATHINFO_EXTENSION)
        );

        if($cvError != 0)
        {
            $errors[] = "Please upload a CV.";
        }

        if($extension != "pdf" &&
           $extension != "doc" &&
           $extension != "docx")
        {
            $errors[] = "Only PDF, DOC and DOCX files are allowed.";
        }

        
    }
    else
    {
        $errors[] = "Please upload a CV.";
    }

    if(count($errors) == 0)
    {
        $folder = "uploads/";

        if(!is_dir($folder))
        {
            mkdir($folder);
        }

        move_uploaded_file(
            $cvTmp,
            $folder . basename($cvName)
        );

        header(
            "Location: result.php?" .
            "id=" . urlencode($id) .
            "&name=" . urlencode($name) .
            "&email=" . urlencode($email) .
            "&phone=" . urlencode($phone) .
            "&gender=" . urlencode($gender) .
            "&position=" . urlencode($position) .
            "&qualification=" . urlencode($qualification) .
            "&address=" . urlencode($address) .
            "&cv=" . urlencode($cvName)
        );

        exit;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Application Failed</title>
</head>

<body>

<h1>Application Failed!</h1>

<?php

foreach($errors as $error){
    ?> <p><?= $error ?></p> <?php
    }
?>
<a href="index.php">Go Back</a>

</body>
</html>