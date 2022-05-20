<?php
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


// Input validation
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Username Validation
    if (empty($_POST['username'])) {
        $usernameErr = "Username is required!";
    } else {
        // Check if username is valid
        if (!preg_match($userPattern, $_POST['username'])) {
            $usernameErr = "Please only use letters (a-z), numbers and underscore _";
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
