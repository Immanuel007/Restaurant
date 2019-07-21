<?php
//session_start();
if (isset($_SESSION['loggedin'])){
    header('location:Index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="CSS/Styles.css" rel="stylesheet" type="text/css">
    <script   src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    <title>Login</title>
    <script src="js/script.js"></script>
</head>
<body>
<div class="jumbotron"style="background-color: black;color: orangered;text-align: center">
    <h2>Login here with us</h2>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="login_handler.php" method="post">
                    <?php
                    if(isset($user_error)){
                        echo "User does not exist, <a href='Sign_up.php'>Signup</a> with us";
                    }
                    ?>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <span class="btn-danger">
                        <?php
                        if(isset($_GET['e_error'])){
                            echo "Email cannot be blank";
                        }
                        ?>
                    </span>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <span class="btn-danger">
                        <?php
                        if(isset($_GET['p_error'])){
                            echo "First name is required";
                        }
                        ?>
                    </span>
                        <input type="password" name="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" name="signin" class="btn btn-default">Sign in</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>