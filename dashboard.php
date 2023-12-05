<?php
session_start();
if (!isset($_SESSION['nama'])) {
    header("location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dasboard</title>
</head>
<body>
    <div class="container-logout">
    <form action="controller/logout.php" method="POST" class="login-username">
    <h1>Selamat Datang, <?php echo $_SESSION['nama']; ?>!</h1>
            <div class="input-group">
                <buttom type="submit" class="btn">logout</button>
    </form>
    </div>
</body>
</html>