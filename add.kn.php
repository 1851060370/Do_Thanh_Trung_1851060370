<?php
// Include config file
require_once "conect.php";
 
// Define variables and initialize with empty values
$kynang = $ghichu =   "";
$kynang_err = $ghichu_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_kynang = trim($_POST["ten"]);
    if(empty($input_kynang)){
        $kynang_err = "Vui lòng nhập tên.";
    } else{
        $kynang = $input_kynang;
    }
    
    // Validate bd
    $input_ghichu = trim($_POST["ngaysinh"]);
    if(empty($input_ghichu)){
        $ghichu_err = "Vui lòng nhập ngay sinh.";     
    } else{
        $ghichu = $input_ghichu;
    }
    // Check input errors before inserting in database
    if(empty($kynang_err) && empty($ghichu_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO kynang (kynang, ghichu) VALUES (?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_kynang, $param_ghichu);
            
            // Set parameters
            $param_kynang = $kynang;
            $param_ghichu = $ghichu;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: admin.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            //mysqli_stmt_close($stmt);
        }
         
      
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Thêm</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css
">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js
"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js
"></script>
        <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2>Thêm thông tin</h2>
                        </div>
                        <p>Vui lòng điền đầy đủ thông tin.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($kynang_err)) ? 'has-error' : ''; ?>">
                                <label>Kỹ Năng</label>
                                <input type="text" name="ten" class="form-control" value="<?php echo $kynang; ?>">
                                <span class="help-block"><?php echo $kynang_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($ghichu_err)) ? 'has-error' : ''; ?>">
                                <label>Ghi Chú</label>
                                <input type="text" name="ngaysinh" class="form-control" value="<?php echo $ghichu; ?>">
                                <span class="help-block"><?php echo $ghichu_err;?></span>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Thêm">
                            <a href="admin.php" class="btn btn-default">Đóng</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>