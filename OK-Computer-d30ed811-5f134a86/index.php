<?php

session_start();
if (isset($_GET['v'])) {
    session_unset();
    header('location: game.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
</head>
<body>
<form method="get">
    <input type="submit" name="v" value="start">
</form>
</body>
</html>