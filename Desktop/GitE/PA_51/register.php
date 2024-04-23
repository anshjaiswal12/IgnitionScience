<?php
$conn=mysqli_connect("localhost","root", "", "social");
if (mysqli_connect_error()){
    echo "Failed to connect:".mysql_connect_error();
}

$fname= "";
$lname= "";
$em="";
$em2="";
$password="";
$password2="";
$date="";
$error_array="";

if (isset($_POST['register_button'])){

    // The follwing lines of codes will help my code to get rid of the unnecessary bvalues such as spaces and tags
    // Here goes the code for first name
    $fname=strip_tags($_POST['reg_fname']);
    $fname=str_replace(' ', '',$fname);
    $fname=ucfirst(strtolower($fname));

    // Here goes code for last name
    $lname=strip_tags($_POST['reg_lname']);
    $lname=str_replace('', '',$lname);
    $lname=ucfirst(strtolower($lname));

    // here goes code for email
    $em=strip_tags($_POST['reg_email']);
    $em=str_replace('', '',$em);
    $em=ucfirst(strtolower($em));

    // Here goes code for email verification
    $em2=strip_tags($_POST['reg_email2']);
    $em2=str_replace('', '',$em2);
    $em2=ucfirst(strtolower($em2));

    // Password
    $password= strip_tags($_POST['reg_password']);
    $password2= strip_tags($_POST['reg_password2']);

    // To store current date
    $date=date("Y-m-d");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Xpress0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1> Register in Xpress0</h1>
    <form action="register.php" method="POST">
        <input type="text" name="reg_fname" placeholder="First Name" required>
       
        <br>
        <input type="text" name="reg_lname" placeholder="Last Name" required>
        <br>
        <input type="email" name="reg_email" placeholder="Email" required>
        <br>
        <input type="email" name="reg_email2" placeholder="Comfirm email" required>
        <br>
        <input type="password" name="reg_password" placeholder="Password" required>
        <br>
        <input type="password" name="reg_password2" placeholder="Comfirm Password" required>
        <br>
        <input type="submit" name="register_button" value="Sign up">
    </form>
</body>
</html>