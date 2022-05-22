<?php

require_once "autoload.php";

use DB_Class\Record;

// Record instance
$record = new Record;

if (isset($_GET['id'])) {
    if ($_GET['request'] == "delete") {
        $record->setId($_GET['id']);
        // Delete the record of this id.
        $record->delete();
    }
}