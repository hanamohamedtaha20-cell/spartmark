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
    $err_s = 1;
}

$lastName=trim($_POST['lName']);
$email=trim(strtolower($_POST['email']));
$password=trim($_POST['password']);


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