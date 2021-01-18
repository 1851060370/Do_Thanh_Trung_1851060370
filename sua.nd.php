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
$query=mysqli_query($conn,"select * from `users` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa Người Dùng</h2>
<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br/>
<label>Password</label>: <input type="text" value="<?php echo $row['password']; ?>" name="password"></label:><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$email=$_POST['email'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli("localhost", "root", "", "btlcv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `users` SET email='$email',password='$password' WHERE id='$id'";
 
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