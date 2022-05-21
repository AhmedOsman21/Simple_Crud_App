<?php
require_once "autoload.php";
use DB_Class\Record;


// Error Variables
$usernameErr = $fnameErr = $lnameErr = $emailErr = "";

// Form Variables
$username = $fname = $lname = $email = "";

// Username Regex Pattern
$userPattern = "/^\w{5,50}$/";

// Clean Inputs
function clearInput($data) {
    $data = trim(stripslashes(htmlspecialchars($data)));
    return $data;
}


// Instanciate Record Object
$record = new Record();


// Input validation
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if username is empty
    if (empty($_POST['username'])) {
        $usernameErr = "Username is required!";
    } else {
        // Check if username is not valid
        if (!preg_match($userPattern, $_POST['username'])) {
            $usernameErr = "Please only use letters (a-z), numbers and underscore _";
        } else {
            // Set user to check it.
            $record->setUser($_POST['username']);
            // Check if username already exists in database
            if ($record->userExists()) {
                $usernameErr = "Username Already Exists!";
            } else {
                // Valid Username
                $username = $_POST['username'];
            }
            // Reset username property after checking whether it's valid or not
            $record->setUser(null);
        }
    }

    // First Name Validation
    if (empty($_POST['fname'])) {
        $fnameErr = "First name is required!";
    }

    // Last Name Validation
    if (empty($_POST['lname'])) {
        $lnameErr = "Last name is required!";
    }

    // Email Validation
    if (empty($_POST['email'])) {
        $emailErr = "Email address is required!";
    }
}
