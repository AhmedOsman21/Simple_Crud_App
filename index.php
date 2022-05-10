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
        <h1>Crud Application</h1>


        <table class="table table-secondary table-striped">
            <tr class="table-dark">
                <th style="width: 10%">ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th style="width: 20%">Options</th>
            </tr>


            <tr>
                <td>1</td>
                <td>adamkr213</td>
                <td>Adam Darwen</td>
                <td>adamdarwen213@gmail.com</td>
                <td class="opt-field"><button class="btn btn-info">Update</button> <button class="btn btn-danger">Delete</button></td>
            </tr>

            <tr>
                <td>2</td>
                <td>johntayson1</td>
                <td>Jason Tayson</td>
                <td>johnreko42@gmail.com</td>
                <td class="opt-field"><button class="btn btn-info">Update</button> <button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>carlosawen</td>
                <td>Carl Sandeel</td>
                <td>carlsawen@gmail.com</td>
                <td class="opt-field"><button class="btn btn-info">Update</button> <button class="btn btn-danger">Delete</button></td>
            </tr>

            <tr>
                <td>4</td>
                <td>ladderclimber23</td>
                <td>Jacklen Daher</td>
                <td>jacklendaher@gmail.com</td>
                <td class="opt-field"><button class="btn btn-info">Update</button> <button class="btn btn-danger">Delete</button></td>
            </tr>

            <tr>

                <td>5</td>
                <td>savytech103</td>
                <td>Tareq Fathy</td>
                <td>tf2olhamed@gmail.com</td>
                <td class="opt-field"><button class="btn btn-info">Update</button> <button class="btn btn-danger">Delete</button></td>
            </tr>

            <tr>

                <td>6</td>
                <td>johnsmith123</td>
                <td>John Smith</td>
                <td>joesmthl22@outlook.com</td>
                <td class="opt-field"><button class="btn btn-info">Update</button> <button class="btn btn-danger">Delete</button></td>
            </tr>

            <tr>
                <td>7</td>
                <td>sandrawh1t3</td>
                <td>Sandra White</td>
                <td>sansansun@gmail.com</td>
                <td class="opt-field"><button class="btn btn-info">Update</button> <button class="btn btn-danger">Delete</button></td>
            </tr>
        </table>

        <a href="new_record"><button class="btn btn-success new-rec"> <img src="icons/new-rec.png" width="15" alt="" style="margin-right: 2px; margin-bottom: 3px">New Record</button></a>
    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    
</body>
</html>