<?php
include('server.php');

if(isset($_POST['sub'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM member_tb
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        session_start();
        $_SESSION['user_id'] = $username;

        echo "<script>";
        echo "alert('Login Successfully');";
        echo "window.location='main.php';";
        echo "</script>";

    } else {

        $check = "SELECT * FROM member_tb WHERE username='$username'";
        $check_result = mysqli_query($conn, $check);

        if (mysqli_num_rows($check_result) == 0) {

            echo "<script>";
            echo "alert('ไม่พบ Username กรุณาสมัครสมาชิก');";
            echo "window.location='register.html';";
            echo "</script>";

        } else {

            echo "<script>";
            echo "alert('Password ไม่ถูกต้อง');";
            echo "window.location='login.html';";
            echo "</script>";

        }
    }
}
?>