<?php
    $conn = mysqli_connect('localhost', 'root', '', 'scores');
    if ($conn === FALSE) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sn = mysqli_real_escape_string($conn, $_REQUEST['sn']);
    $it = mysqli_real_escape_string($conn, $_REQUEST['IT']);
    $eng = mysqli_real_escape_string($conn, $_REQUEST['eng']);
    $hindi = mysqli_real_escape_string($conn, $_REQUEST['hindi']);
    $ai = mysqli_real_escape_string($conn, $_REQUEST['ai']);
    $ic = mysqli_real_escape_string($conn, $_REQUEST['IC']);
    $se = mysqli_real_escape_string($conn, $_REQUEST['SE']);
   
    $sql = "INSERT INTO scores (sn,it,eng,hindi,ai,ic,se) VALUES ('$sn', '$it', '$eng','$hindi','$ai','$ic','$se')";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    }else{
        echo"ERROR: Could not able to execute $sql.".mysqli_error($conn);
    }
?>