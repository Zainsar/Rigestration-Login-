<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <title>Login foams</title>
</head>

<body>
    <div class="container-fluid" style="margin-top: 2px;">
        <h1>Login Form </h1>
        <form action="login.php" method="post" class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <br>
            <input type="Submit" value="Login" name="Submit" class="btn btn-primary">
        </form>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $Username = $_POST['username'];
        $Password = $_POST['password'];

        $query = "INSERT INTO `users` (`username`, `password`) VALUES ('$Username', '$Password')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed");
        }
    }
    ?>
</body>

</html>