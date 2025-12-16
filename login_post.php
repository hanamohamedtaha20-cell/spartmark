<?php
session_start();
include('connect.php');

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']); 
    $password = trim($_POST['password']);

    if (empty($username)) {
        $user_error = '<p>Please enter a username</p>';
        header("Location: login.php?user_error=$user_error");
        exit();
    }

    if (empty($password)) {
        $user_error = '<p>Please enter a password</p>';
        $password_error = 1;
        header("Location: login.php?password_error=$password_error");
        exit();
    }

    $sql = "SELECT email,password FROM users WHERE email = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (strtolower($row['email']) === strtolower($username) && md5($password) === $row['password']) {

        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];

        header('location: Home.php');

    } else {

        $user_error = '<p>Wrong username or password</p>';
        include('login.php');
        exit();
    }


}
else {
    include('login.php');
    exit();
}
?>