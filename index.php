<!DOCTYPE html>
<html lang="en">
<!--
    Take-home code exercise:
    Create a bare-bones PHP MYSQL CRUD web app for managing users.
    Your finished product can be either a public GitHub repo or a zip/rar/tar.bz2.
    You can either self-host it, or send us everything needed to run your app--we want to see your code, either way!
    (Our local testing environment is Fedora 26, MySQL 5.7, PHP 7.1, Apache 2.4 mod_php)

    Requirements
    * Create a table for storing users.
    * Users should have a first_name and last_name.
    * Include your table-creation script / database schema
    * Create a means to perform the following actions on users:
    * Create a new user
    * Change a user's name
    * Delete an existing user
    * Bonus points if the page is dynamically updated!
-->
<head>
    <meta charset="UTF-8">
    <title>PHP MySQL CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CRUD</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="create-link active"><a><span class="glyphicon glyphicon-user"></span> Create User</a></li>
                    <li class="update-link"><a><span class="glyphicon glyphicon-pencil"></span> Update</a></li>
                    <li class="delete-link"><a><span class="glyphicon glyphicon-remove""></span> Delete</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row user-forms">
            <div id="create-form" class="col-sm-4">
                <form id="create-form-validate">
                     <h2>Create User</h2>
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control create" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control create" name="lname" required>
                    </div>
                    <button id="create-submit-btn" type="button" class="btn btn-primary">Submit</button>
                </form>
                <span id="show-create-results"></span>
            </div>

            <div id="update-form" class="col-sm-4">
                <form id="update-form-validate">
                    <h2>Update User</h2>
                    <div class="form-group">
                        <label for="fname">Current First Name:</label>
                        <input type="text" class="form-control update" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Current Last Name:</label>
                        <input type="text" class="form-control update" name="lname" required>
                    </div>
                    <div class="form-group">
                        <label for="update_fname">New First Name:</label>
                        <input type="text" class="form-control update" name="update_fname" required>
                    </div>
                    <div class="form-group">
                        <label for="update_lname">New Last Name:</label>
                        <input type="text" class="form-control update" name="update_lname" required>
                    </div>
                    <button id="update-submit-btn" type="button" class="btn btn-primary">Submit</button>
                </form>
                <span id="show-update-results"></span>
            </div>

            <div id="delete-form" class="col-sm-4">
                <form id="delete-form-validate">
                    <h2>Delete User</h2>
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control delete" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control delete" name="lname" required>
                    </div>
                    <button id="delete-submit-btn" type="button" class="btn btn-primary">Submit</button>
                </form>
                <span id="show-delete-results"></span>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Reg Date</th>
            </tr>
            </thead>
            <tbody id="show-read-results">
            </tr>
            </tbody>
        </table>
    </div>

</body>
</html>