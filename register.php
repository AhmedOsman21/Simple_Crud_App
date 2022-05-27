<?php
require_once "autoload.php";
use DB_Class\Record;

// Instanciate Record Object
$record = new Record();

// To let input validation know that this is registering operation.
$proc = null;

// Validate inputs
require_once "input_validation.php";

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
    }
}

// Cancel submitting
if (isset($_POST['cancel'])) {
    header("Location:../crud_app");
    die();
}