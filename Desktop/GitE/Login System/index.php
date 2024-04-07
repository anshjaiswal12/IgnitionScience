<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Check credentials based on role
    if ($role === 'student' && $username === 'Student' && $password === 'student123') {
        $_SESSION['user'] = 'student';
        header("Location: student.php");
        exit();
    } elseif ($role === 'admin' && $username === 'Admin' && $password === 'admin123') {
        $_SESSION['user'] = 'admin';
        header("Location: admin.php");
        exit();
    } else {
        $error_message = "Failed to login. Wrong username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error_message)): ?>
            <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="role">Select Role:</label>
            <select id="role" name="role" required>
                <option value="student">Student</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
