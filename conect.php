<?php
$conn = mysqli_connect( 'localhost', 'root', '', 'btlcv');
if($conn === false){
    die("Lỗi kết nối" . mysqli_connect_error());
}
?>