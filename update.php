<?php
require_once "autoload.php";

use DB_Class\Record;

$record = new Record;

// To let input validation know that this is updating operation.
$proc = "update";

if (isset($_GET['id']) && isset($_GET['request'])) {
    $id = $_GET['id'];
    // Set the id to the given one
    $record->setId($id);
}
// Validate inputs
require_once "input_validation.php";


// Submit button is clicked
if (isset($_POST['update'])) {
    // No Errors
    if (!$usernameErr && !$fnameErr && !$lnameErr && !$emailErr) {
        $record->setUser($username);
        $record->setFirstName($fname);
        $record->setLastName($lname);
        $record->setEmail($email);
        // Update user
        $record->update();
    }
}

// Cancel submitting
if (isset($_POST['cancel'])) {
    header("Location:../crud_app");
    die();
}

// Getting the record
$user = $record->read()[0];
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
            <h4>Update record</h4>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <label for="username" class="form-label">Username <span class="required">*</span></label>
                <input type="text" name="username" id="username" class="text-inp" value="<?php echo $user['username'] ?>">
                <span class="error"><?php echo $usernameErr; ?></span>
                <label for="fname" class="form-label">First Name <span class="required">*</span></label>
                <input type="text" name="fname" id="fname" class="text-inp" value="<?php echo $user['first_name'] ?>">
                <span class="error"><?php echo $fnameErr; ?> </span>
                <label for="lname" class="form-label">Last Name <span class="required">*</span></label>
                <input type="text" name="lname" id="lname" class="text-inp" value="<?php echo $user['last_name'] ?>">
                <span class="error"><?php echo $lnameErr; ?></span>
                <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                <input type="text" name="email" id="email" class="text-inp" value="<?php echo $user['email'] ?>">
                <span class="error"><?php echo $emailErr; ?> </span>
                <div class="submit-form">
                    <!-- Cancel button -->
                    <input type="submit" value="Cancel" class="btn btn-danger submit-btn" name="cancel">
                    <!-- Submit button -->
                    <input type="submit" value="Update" class="btn btn-success submit-btn" name="update">
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