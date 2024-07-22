<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$user_profile = [
    'name' => $_SESSION['username'],
    'email' => $_SESSION['username'] . '@example.com',
    'joined' => 'January 1, 2020'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Bedahub</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="header">
        <img src="images/logo.png" alt="Bedahub Logo">
        <a href="logout.php">LOGOUT</a>
    </div>
    
    <div class="profile">
        <h2>Profile</h2>
        <p><strong>Name:</strong> <?php echo $user_profile['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $user_profile['email']; ?></p>
        <p><strong>Joined:</strong> <?php echo $user_profile['joined']; ?></p>
    </div>

    <div class="nav-bar">
        <a href="index.html"><i class="fas fa-home"></i> HOME</a>
        <a href="favorite.html"><i class="fas fa-heart"></i> FAVORITE</a>
        <a href="add_circle.html"><i class="fas fa-plus-circle"></i> ADD CIRCLE</a>
        <a href="store.html"><i class="fas fa-store"></i> STORE</a>
        <a href="profile.php"><i class="fas fa-user"></i> PROFILE</a>
    </div>
</body>
</html>