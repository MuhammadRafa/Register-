<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="handler.php" method="post">
        <input type="email" name="email" placeholder="Ketik email disini.." required>
        <input type="password" name="password" placeholder="Ketik password disini.." required><br>
        <button type="submit" name="aksi" value="login">LOGIN</button>
    </form><br>
    <a href="register.php">Register</a>
    <a href="index.php"><button>Back home</button></a>
</body>
</html>