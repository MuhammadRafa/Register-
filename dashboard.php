<?php
    session_start();
    if (!$_SESSION['data']) {
        header('Location: login.php');
        exit();
    }
    $data = $_SESSION['data'];
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Halaman Dashboard</h1><br>
    <h2>
        Nama kamu: <?php echo $username ?>
    </h2>
    <h3>
        Email kamu: <?php echo $email ?>
    </h3>
    <h3>
        Password kamu: <?php echo $password ?>
    </h3>
    <form action="handler.php" method="post">
        <button name="aksi" value="logout">Logout!</button>
    </form>
</body>
</html>