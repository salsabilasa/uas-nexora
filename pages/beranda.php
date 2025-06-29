<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Beranda</title>
</head>

<body>
    <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p><a href="../auth/logout.php">Logout</a></p>
</body>

</html>