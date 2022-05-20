<?php


// Error Variables
$usernameErr = $fnameErr = $lnameErr = $emailErr = "";

// Form Variables
$username = $fname = $lname = $email = "";


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
