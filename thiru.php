<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        .txt {
            width: 100%;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            padding: .375rem .75rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .lgnbtn {
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s background-color .15s border-color .15s ease-in-out;
        }

        .aaa {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            margin-top: .5rem;
            font-size: 1rem;
            line-height: 1.5;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: color .15s background-color .15s border-color .15s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form name="f1" method="post" action="logdata.php">
                    <div class="form-group">
                        <label for="uname">User Name</label>
                        <input name="uname" type="text" class="form-control txt" id="uname" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input name="pass" type="password" class="form-control txt" id="pass" required>
                    </div>
                    <div class="form-group">
                        <label for="etype">User Type</label>
                        <select name="etype" class="form-control txt" required>
                            <option>Select User Type</option>
                            <option>Admin</option>
                            <option>Seller</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="Submit" type="submit" class="btn btn-primary lgnbtn" value="Submit">
                    </div>
                    <div class="form-group text-center">
                        <a href="SRegister.php" class="aaa">New Registration</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
