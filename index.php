<?php
require_once "autoload.php";

use DB_Class\Record;

$record = new Record;
$data = $record->readAll();

// Number of table columns
$cols_num = 5;

// Rendering table content
function render_table($content, $columns_number) {
    if ($content) {
        foreach ($content as $key => $val) {
            $name = $val['first_name'] . " " . $val['last_name'];
            echo "
            <tr>
                <td>{$val['id']}</td>
                <td>{$val['username']}</td>
                <td>{$name}</td>
                <td>{$val['email']}</td>
                <td class='opt-field'>
                    <a class='btn btn-info' href='update.php?id={$val['id']}&request=update'>Update</a> 
                    <a class='btn btn-danger' href='delete.php?id={$val['id']}&request=delete'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "
        <tr>
            <td colspan='$columns_number'>No Records</td>
        </tr>";
    }
}
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
        <div class="heading">
            <h1>Crud Application</h1>
        </div>

        <div class="new-rec-container">
            <a href="add_record"><button class="btn btn-success new-rec-btn"> <img src="icons/new-rec.png" width="15" alt="" class="new-rec-btn-icon">New Record</button></a>
        </div>


        <div class="data-table record_content">

            <table class="table table-secondary table-striped">
                <thead>
                    <tr class="table-dark">
                        <th style="width: 10%">ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="width: 20%">Options</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Render table content -->
                    <?= render_table(content: $data, columns_number: $cols_num) ?>
                </tbody>
            </table>

        </div>
    </div>



    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>