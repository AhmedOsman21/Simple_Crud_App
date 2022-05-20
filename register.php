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
