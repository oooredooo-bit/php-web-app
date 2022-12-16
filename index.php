<?php
session_start();

if (isset($_SESSION['logged-user'])) {
    header("Location: ./pages/home.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login - Web Development</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    </head>
    <body>
        <div class="container col-sm-4">
            <h1 class="text-center">Login</h1>
            <form class="form form-horizontal" method="POST" action="./login.php">
                <div class="form-group">
                    <label>Username: </label>
                    <input required type="text" id="txtUser" name="txtUser" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" id="txtPass" name="txtPass" class="form-control">
                </div><br>
                <div class="form-group">
                    <button id="btnLogin" class="btn btn-primary form-control">Login</button>
                    <button id="btnReset" class="btn btn-secondary form-control">Reset</button>
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </body>
</html>