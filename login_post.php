<?php
session_start();
include('conn/connections.php');

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']); 
    $password = trim($_POST['password']);

    if (empty($username)) {
        $user_error = '<p>Please enter a username</p>';
        $err_s = 1;
    }

    if (empty($password)) {
        $user_error = '<p>Please enter a password</p>';
        $err_s = 1;
    }

    if ($err_s == 1) {
        include('login.php');
        exit();
    }
    $sql = "SELECT id,username,password FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['username'] === $username && $row['password'] === $password) {

    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];

    header('location: Home.php');

} else {

    $user_error = '<p>Wrong username or password</p>';
    include('login.php');
    exit();
}

else {
    include('login.php');
    exit();
}
}
    
?>