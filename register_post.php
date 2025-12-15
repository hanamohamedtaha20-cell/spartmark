<?php 

include('conn/connect.php');
echo $_POST['name'];
if(isset($_POST['signUp'])){
    $firstName=trim($_POST['first_name']);
    $lastName=trim($_POST['last_name']);
    $email=trim(strtolower($_POST['email']));
    $password=trim($_POST['password']);
    

     $checkEmail="SELECT * From users where email='$email'";
     $result=mysqli_query($conn, $checkEmail);
     $num_rows=mysqli_num_rows($result);
     if($num_rows != 0){
       $email_error= '<p>this email is already exist</p>';
       $err_s=1;
     }
     //email validation
     if(empty(($email))){
        $email_error= '<p>please entered a valid email</p>';
       $err_s=1;

     }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = "<p>Please enter a valid email</p>";
    $err_s = 1;
}
//username validation
if (empty($firstName)) {
    $user_error = "<p>Please enter your name</p>";
    $err_s = 1;
}
elseif (is_numeric($firstName)) {
    $user_error = "<p>Name cannot be numbers only</p>";
    $err_s = 1;
}
elseif (preg_match('/[0-9]/', $firstName)) {
    $user_error = "<p>Name must not contain numbers</p>";
    $err_s = 1;
}



if (empty($lastName)) {
    $user_error = "<p>Please enter your name</p>";
    $err_s = 1;
}
elseif (is_numeric($lastName)) {
    $user_error = "<p>Name cannot be numbers only</p>";
    $err_s = 1;
}
elseif (preg_match('/[0-9]/', $lastName)) {
    $user_error = "<p>Name must not contain numbers</p>";
    $err_s = 1;
}

// PASSWORD VALIDATION
if (empty($password)) {
    $password_error = "<p>Please enter password</p>";
    $err_s = 1;
}
elseif (strlen($password) > 10) {
    $password_error = "<p>Password must not be more than 10 characters</p>";
    $err_s = 1;
}
/////////////
if ($err_s == 1) {
    header("Location: register.php");
    exit();
} else {
    $password = md5($password);
    $sql = "INSERT INTO users(first_name,last_name,email,password)
            VALUES ('$firstName','$lastName','$email','$password')";
    mysqli_query($conn, $sql);
    if (!mysqli_query($conn, $sql)) {
    die("DB Error: " . mysqli_error($conn));
}

    header("Location: login.php");
    exit();
}



        
     
   

}


?>