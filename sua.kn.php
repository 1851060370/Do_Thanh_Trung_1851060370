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
$query=mysqli_query($conn,"select * from `kynang` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa kỹ năng</h2>
<label>Kỹ Năng: <input type="text" value="<?php echo $row['kynang']; ?>" name="kynang"></label><br/>
<label>Ghi chú: <input type="text" value="<?php echo $row['ghichu']; ?>" name="ghichu"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$kynang=$_POST['kynang'];
$ghichu=$_POST['ghichu'];

// Create connection
$conn = new mysqli("localhost", "root", "", "btlcv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `kynang` SET kynang='$kynang',ghichu='$ghichu' WHERE id='$id'";
 
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