<?php 

include("server.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <?php include("errors.php"); ?>

        <div class="input-group">
            <label>Enter Fullname</label>
            <input type="text" name="name">
        </div>
        <div class="input-group">
            <label>Enter Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Enter Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label>Enter Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="cpassword">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>

        <p>Already have an account? <a href="./login.php">Login here!</a></p>

    </form>
    
</body>
</html>