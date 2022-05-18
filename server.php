<?php 

// Starting the session, necessary for using session variables.
session_start();

// Declaring and hosting the variables
$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";


// DB CONNECTION
$dbserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "registration";

$con = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);
if (!$con) {
    die("connection failed: " . mysqli_connect_error());
}

echo "connection successful";
echo "<br>";


// REGISTRATION VALIDATION
if (isset($_POST['reg_user'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);


    if (empty($name)) {
        array_push($errors, "Fullname is required");
    }
    else {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            array_push($errors, "Only letters and white spaces are allowed");
        }
    }
    
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    else {
        if (empty($cpassword)) {
            array_push($errors, "Confirmation of password is required");
        }
        else {
            if ($password != $cpassword) {
                array_push($errors, "Password not matched");
            }
            if (!strlen($password) > 6 && strlen($password) < 21) {
                array_push($errors, "Password must be greater than 6 and less than 21!");
            }
            if (!preg_match('`[A-Z]`', $password)) {
                array_push($errors, "Password must contain atleast one uppercase!");
            }
            if (!preg_match('`[a-z]`', $password)) {
                array_push($errors, "Password must contain atleast one lowercase!");
            }
            if (!preg_match('`[0-9]`', $password)) {
                array_push($errors, "Password must contain atleast one number!");
            }
        }
        
    }
    
     
    
    



}



?>