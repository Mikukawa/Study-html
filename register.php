<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee69s_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO member_tb (username, password, confirm_password, email)
            VALUES ('$username', '$password', '$confirm_password', '$email')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>
                alert('Register Successfully');
                window.location='login.html';
              </script>";

    } else {

        echo "<script>
                alert('Register Failed');
                window.location='register.html';
              </script>";

    }
}

$conn->close();

?>