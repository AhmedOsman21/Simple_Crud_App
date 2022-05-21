<?php
require_once "autoload.php";
use DB_Class\Record;


// Error Variables
$usernameErr = $fnameErr = $lnameErr = $emailErr = "";

// Form Variables
$username = $fname = $lname = $email = "";

// Confirmation Message Variable
$confirm_msg = "";

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
            $usernameErr = "Please only use letters (a-z), numbers and underscore (_)";
        } else {
            // Set user to check it.
            $record->setUser($_POST['username']);
            // Check if username already exists in database
            if ($record->userExists()) {
                $usernameErr = "Username Already Exists!";
            } else {
                // Valid Username
                $username = cleanInput($_POST['username']);
            }
            // Reset username property after checking whether it's valid or not
            $record->setUser("");
        }
    }

    // Check if first name is empty
    if (empty($_POST['fname'])) {
        $fnameErr = "First name is required!";
    } else {
        // Check if first name is not valid
        if (!preg_match($stringPattern, $_POST['fname'])) {
            $fnameErr = "Only alphabets and white spaces are allowed";
        } else {
            // Valide First Name
            $fname = cleanInput($_POST['fname'], "name");
        }
    }

    // Check if last name is empty
    if (empty($_POST['lname'])) {
        $lnameErr = "Last name is required!";
    } else {
        // Check if last name is not valid
        if (!preg_match($stringPattern, $_POST['lname'])) {
            $lnameErr = "Only alphabets and white spaces are allowed";
        } else {
            // Valide Last Name
            $lname = cleanInput($_POST['lname'], "name");
        }
    }

    // Email Validation
    if (empty($_POST['email'])) {
        $emailErr = "Email address is required!";
    } else {
        // Check if email is not valid
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Please, type a valid email!";
        } else {
            // Valide Email
            $email = cleanInput($_POST['email']);
        }
    }
}

// User Clicked Register Button
if (isset($_POST['register'])) {
    // No Errors
    if (!$usernameErr && !$fnameErr && !$lnameErr && !$emailErr) {
        // Setting Data To Be Inserted In Database
        $record->setUser($username); 
        $record->setFirstName($fname);
        $record->setLastName($lname);
        $record->setEmail($email);
        $record->insertRecord();
        if ($record->result) {
            $confirm_msg = $record->result;
        }
    }
}