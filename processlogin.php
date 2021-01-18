<?php
session_start();
include 'conect.php' ;
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from users where email = '$email' and password = '$password'";
$user=mysqli_query($conn,$sql);
if( mysqli_num_rows($user) > 0  )
{
    $_SESSION['user'] = $email ;
    header('Location: index.php');
}
else
{
    echo " dang nhap khong thanh cong";

}

?>