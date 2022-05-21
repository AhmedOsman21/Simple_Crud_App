<?php
include_once "register.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>CRUD Application</title>
</head>

<body>



    <div class="container main-container">

        <div class="heading" style="margin-bottom: 2rem;">
            <h2>Crud Application</h2>
        </div>

        <div class="form-control">
            <h4>Add new record</h4>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <label for="username" class="form-label">Username <span class="required">*</span></label>
                <input type="text" name="username" id="username" class="text-inp">
                <span class="error"><?php echo $usernameErr; ?></span> 
                <label for="fname" class="form-label">First Name <span class="required">*</span></label>
                <input type="text" name="fname" id="fname" class="text-inp">
                <span class="error"><?php echo $fnameErr; ?> </span> 
                <label for="lname" class="form-label">Last Name <span class="required">*</span></label>
                <input type="text" name="lname" id="lname" class="text-inp">
                <span class="error"><?php echo $lnameErr; ?></span> 
                <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                <input type="text" name="email" id="email" class="text-inp">
                <span class="error"><?php echo $emailErr; ?> </span> 
                <div class="submit-form">
                    <input type="submit" value="Register" class="btn btn-success submit-btn" name="register">
                </div>
            </form>
        </div>

    </div>



    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>