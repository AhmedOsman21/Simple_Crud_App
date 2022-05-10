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
            <button class="btn btn-success new-rec-btn" data-toggle="modal" data-target="#new_rec_modal"> <img src="icons/new-rec.png" width="15" alt="" style="margin-right: 2px; margin-bottom: 3px">New Record</button>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="new_rec_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" placeholder="Username" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" placeholder="First Name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lnam" placeholder="Last Name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" placeholder="Email Address" class="form-control" />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
                    </div>
                </div>
            </div>
        </div>


















        <div class="data-table record_content">

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

        </div>
    </div>



    <script type="text/javascript" src="js/script.js"></script>
    <script type = "text/javascript" src = "js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.modal').modal('show');
        });
    </script>
</body>

</html>