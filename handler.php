<?php 
// Start the session
session_start();

// Database connection
$koneksi = new mysqli('localhost', 'root', '', 'didgyy');
if ($koneksi->connect_error) {
    die('Connection failed: ' . $koneksi->connect_error);
}

// Get the POST variables from the form
$email = $_POST['email'];
$password = $_POST['password'];
$aksi = $_POST['aksi'];

// Function to redirect with an optional message
function redirect($url, $message = null) {
    if ($message) {
        $_SESSION['message'] = $message;
    }
    header("Location: $url");
    exit();
}

// Handle login
if ($aksi === 'login') {
    // Prepared statement to prevent SQL injection
    $stmt = $koneksi->prepare("SELECT * FROM didgyy WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['data'] = $user;
            redirect('dashboard.php');
        } else {
            redirect('login.php', 'Invalid email or password');
        }
    } else {
        redirect('login.php', 'Invalid email or password');
    }
    $stmt->close();

// Handle registration
} elseif ($aksi === 'register') {
    $username = $_POST['username'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepared statement to prevent SQL injection
    $stmt = $koneksi->prepare("INSERT INTO didgyy (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $username, $email, $hashed_password);

// Handle logout
} elseif ($aksi === 'logout') {
    session_destroy();
    redirect('login.php', 'You have been logged out');
}

// Close the database connection
$koneksi->close();
?>
