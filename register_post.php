<?php 

$conn = mysqli_connect(
    hostname: "localhost",
    username: "root",
    password: "",
    database: "sparkmart"
);
$firstName=trim($_POST['fName']);

if (empty($firstName)) {
    $user_error = "<p>Please enter your name</p>";
    header("Location: register.php?user_error=$user_error");
    exit();
}
elseif (is_numeric($firstName)) {
    $user_error = "<p>Name cannot be numbers only</p>";
    header("Location: register.php?user_error=$user_error");
    exit();
}
elseif (preg_match('/[0-9]/', $firstName)) {
    $user_error = "<p>Name must not contain numbers</p>";
    header("Location: register.php?user_error=$user_error");
    exit();
}

$lastName=trim($_POST['lName']);


if (empty($lastName)) {
    $last_name_error = "<p>Please enter your name</p>";
    header("Location: register.php?last_name_error=$last_name_error");
    exit();
}
elseif (is_numeric($lastName)) {
    $last_name_error = "<p>Name cannot be numbers only</p>";
    header("Location: register.php?last_name_error=$last_name_error");
    exit();
}
elseif (preg_match('/[0-9]/', $lastName)) {
    $last_name_error = "<p>Name must not contain numbers</p>";
    header("Location: register.php?last_name_error=$last_name_error");
    exit();
}

$email=trim(strtolower($_POST['email']));

if (empty($email)) {
    $email_error = "<p>Please enter your email</p>";
    header("Location: register.php?email_error=$email_error");
    exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = "<p>Please enter a valid email</p>";
    header("Location: register.php?email_error=$email_error");
    exit();
}


$password=trim($_POST['password']);

if (empty($password)) {
    $password_error = "<p>Please enter your password</p>";
    header("Location: register.php?password_error=$password_error");
    exit();
}
elseif (strlen($password) > 10) {
    $password_error = "<p>Password must be less than 10 characters</p>";
    header("Location: register.php?password_error=$password_error");
    exit();


$checkEmail="SELECT * From users where email='$email'";
$result=mysqli_query($conn, $checkEmail);
$num_rows=mysqli_num_rows($result);

// Error email already exists
if($num_rows != 0){
    $email_error= '<p>this email is already exist</p>';
    header("Location: register.php?email_error=$email_error");
    exit();
}



$password = md5($password);
$sql = "INSERT INTO users(first_name,last_name,email,password)
        VALUES ('$firstName','$lastName','$email','$password')";
mysqli_query($conn, $sql);

header("Location: login.php");
exit();



        
     
   



?>