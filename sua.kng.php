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
$query=mysqli_query($conn,"select * from `kinhnghiem` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa Kinh Nghiệm</h2>
<label>Công Việc: <input type="text" value="<?php echo $row['congviec']; ?>" name="congviec"></label><br/>
<label>Ghi chú: <input type="text" value="<?php echo $row['ghichu']; ?>" name="ghichu"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$congviec=$_POST['congviec'];
$ghichu=$_POST['ghichu'];

// Create connection
$conn = new mysqli("localhost", "root", "", "btlcv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `kinhnghiem` SET congviec='$congviec',ghichu='$ghichu' WHERE id='$id'";
 
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