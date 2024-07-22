<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Dummy login authentication
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'user' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: profile.php');
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bedahub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>