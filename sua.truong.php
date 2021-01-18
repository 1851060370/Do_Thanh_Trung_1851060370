<!DOCTYPE html>
<html>
<head>
<title>Sửa</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
include 'conect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `truong` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa Trường </h2>
<label>Tên Trường: <input type="text" value="<?php echo $row['tentruong']; ?>" name="tentruong"></label><br/>
<label>Địa Chỉ: <input type="text" value="<?php echo $row['dchi']; ?>" name="dchi"></label><br/>
<label>Số Điện Thoại : <input type="text" value="<?php echo $row['sdt']; ?>" name="sdt"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br/>
<label>Website: <input type="text" value="<?php echo $row['web']; ?>" name="web"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$tentruong=$_POST['tentruong'];
$dchi=$_POST['dchi'];
$sdt=$_POST['sdt'];
$email=$_POST['email'];
$web=$_POST['web'];

 
// Create connection
$conn = new mysqli("localhost", "root", "", "btlcv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `truong` SET tentruong='$tentruong', dchi='$dchi', sdt = '$sdt', email='$email', web='$web' WHERE id='$id'";
 
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
header("location: admin.php");
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>
</form>
</body>
</html>