<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman Register</h1>
    <form action="handler.php" method="post">
        <input type="text" name="username" placeholder="username" required><br>
        <input type="email" name="email" placeholder="email" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <button type="submit" name="aksi" value="register">Register</button>
    </form><br>
    <a href="login.php">Login disini</a>
    <a href="index.php"><button>Back home</button></a>
</body>
</html>