<?php

// Error Variables
$usernameErr = $fnameErr = $lnameErr = $emailErr = "";

// Form Variables
$username = $fname = $lname = $email = "";


// Username Regex Pattern
$userPattern = "/^\w{5,50}$/";

// String Regex Pattern
$stringPattern = "/^[a-zA-Z ]*$/";

// Clean Inputs
function cleanInput($data, $type="") {
    // Clean Input Data
    $data = trim(stripslashes(htmlspecialchars($data)));

    // Format Names
    if ($type == "name") {
        $data = ucwords($data);
    }
    return $data;
}

// Input validation
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if username is empty
    if (empty($_POST['username'])) {
        $usernameErr = "Username is required!";

    // Check if username is not valid
    } elseif (!preg_match($userPattern, $_POST['username'])) {
            $usernameErr = "Please only use letters (a-z), numbers and underscore (_)";

    } else {
        // Set user to check it.
        $record->setUser($_POST['username']);
        // Check if username already exists in database
        if ($record->userExists($proc)) {
            $usernameErr = "Username Already Exists!";
        } else {
            // Valid Username
            $username = cleanInput($_POST['username']);
        }
        // Reset username property after checking whether it's valid or not
        $record->setUser("");
        }
        
        // Check if first name is empty
    if (empty($_POST['fname'])) {
        $fnameErr = "First name is required!";
    
        // Check if first name is not valid
    } elseif (!preg_match($stringPattern, $_POST['fname'])) {
            $fnameErr = "Only alphabets and white spaces are allowed";

    // Valid First Name
    } else {
        $fname = cleanInput($_POST['fname'], "name");
    }
    

    // Check if last name is empty
    if (empty($_POST['lname'])) {
        $lnameErr = "Last name is required!";

    // Check if last name is not valid
    } elseif (!preg_match($stringPattern, $_POST['lname'])) {
        $lnameErr = "Only alphabets and white spaces are allowed";

    // Valid Last Name
    } else {
        $lname = cleanInput($_POST['lname'], "name");
    }

    // Email Validation
    if (empty($_POST['email'])) {
        $emailErr = "Email address is required!";
        
        // Check if email is not valid
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please, type a valid email!";
        
    } else {
        // Set email to check it.
        $record->setEmail($_POST['email']);
        
        // Check if email already exists
        if ($record->emailExists($proc)) {
            $emailErr = "This e-mail is linked with another username";
        } else {
            // Valid Email
            $email = cleanInput($_POST['email']);
        }
        $record->setEmail("");
    }
}
