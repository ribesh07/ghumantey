<?php
$showAlert = false;
$showError = false;
//$showEmpty = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email= $_POST["email"];
    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $showError = "Username Already Exists";
    }
   // else if($password == '' || $cpassword == '') {
     //   $showEmpty = "Password must not be empty ";}
    else{

         if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp(),'$email')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>SIGNUP</title>

</head>
<body>
   <div class="box bg-img">
    <div class="container">
<!-- <h1>Welcome to Ghumantey</h1> -->
        <div class="top">
            <span>WELCOME</span>
            <header>REGISTER</header>
        </div>

        <div class="input-field">
            <input type="text" maxlength="11" class="input" placeholder="Username" id="username" name="username" required>
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="text" class="input" placeholder="email" id="email" name="email" required>
            <i class='bx bx-user' ></i>
        </div>


        <div class="input-field">
            <input type="Password" maxlength="23" class="input" placeholder="Password" id="password" name="password" required>
 
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="Password" maxlength="23" class="input" placeholder="Confirm password" id="cpassword" name="cpassword" required>
            <i class='bx bx-lock-alt'></i>
        </div>
       
        <div class="input-field">
            <input type="submit" class="submit" value="signup" id="">
        </div>


            
     
</div>  
</body>
</html>