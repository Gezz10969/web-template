<?php
session_start();
echo isset($_SESSION['login']);
if (isset($_SESSION['login'])) {
    header('LOCATION: ./admin.php');
    die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='content-type' content='text/html;charset=utf-8' />
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username === 'admin' && $password === '43z4km1') {
            $_SESSION['login'] = true;
            header('LOCATION: ./admin.php');
            die();
        } {
            echo "<div class='alert alert-danger'>username atau password salah.</div>";
        }
    }
    ?>
    <form action="" method="post">
        <h3 class="text-center" style="color: black; font-weight:bold">Login</h3>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" style="text-transform: lowercase;" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
</body>

</html>