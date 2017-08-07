<!DOCTYPE HTML>
<html>
    <head>
        <title>Please login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/css/bootstrap.css">
        <link rel="stylesheet" href="../style/css/main.css">
        <script src="../style/js/jquery.js"></script>
        <script src="../style/js/bootstrap.js"></script>
    </head>
    <body>
        <form id="login" action="login" method="post">
            <div class="form-group">
                <label for="exampleInputLogin">Login</label>
                <input form="login" type="text" class="form-control" id="exampleInputLogin" placeholder="Login" name="login">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input form="login" type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
            </div>
            <button form="login" type="submit" class="btn btn-default">Login</button>
        </form>
    </body>
</html>