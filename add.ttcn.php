<?php
// Include config file
require_once "conect.php";
 
// Define variables and initialize with empty values
$ten = $ngaysinh = $sdt = $email = $dchi =  "";
$ten_err = $ngaysinh_err = $sdt_err = $email_err = $dchi_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_ten = trim($_POST["ten"]);
    if(empty($input_ten)){
        $ten_err = "Vui lòng nhập tên.";
    } else{
        $ten = $input_ten;
    }
    
    // Validate bd
    $input_ngaysinh = trim($_POST["ngaysinh"]);
    if(empty($input_ngaysinh)){
        $ngaysinh_err = "Vui lòng nhập ngay sinh.";     
    } else{
        $ngaysinh = $input_ngaysinh;
    }

    $input_sdt = trim($_POST["sdt"]);
    if(empty($input_sdt)){
        $sdt_err = "Vui lòng nhập sdt.";     
    } else{
        $sdt = $input_sdt;
    }
    

    // Validate bgroup
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Vui lòng nhập email.";     
    } else{
        $email = $input_email;
    }
    // Validate reg_date
    $input_dchi = trim($_POST["dchi"]);
    if(empty($input_sdt)){
        $dchi_err = "Vui lòng nhập địa chỉ.";     
    } else{
        $dchi = $input_dchi;
    }

   
    // Check input errors before inserting in database
    if(empty($ten_err) && empty($ngaysinh_err) && empty($sdt_err) && empty($email_err) && empty($dchi_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO thongtincanhan (ten, ngaysinh, sdt, email, dchi) VALUES (?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_ten, $param_ngaysinh, $param_sdt, $param_email, $param_dchi);
            
            // Set parameters
            $param_ten = $ten;
            $param_ngaysinh = $ngaysinh;
            $param_sdt = $sdt;
            $param_email = $email;
            $param_dchi = $dchi;
            
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
         
        // Close statement
        mysqli_stmt_close($stmt);
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
                            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                <label>Tên</label>
                                <input type="text" name="ten" class="form-control" value="<?php echo $ten; ?>">
                                <span class="help-block"><?php echo $ten_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($ngaysinh_err)) ? 'has-error' : ''; ?>">
                                <label>Ngày Sinh</label>
                                <input type="text" name="ngaysinh" class="form-control" value="<?php echo $ngaysinh; ?>">
                                <span class="help-block"><?php echo $ngaysinh_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($sdt_err)) ? 'has-error' : ''; ?>">
                                <label>SDT</label>
                                <input type="text" name="sdt" class="form-control" value="<?php echo $sdt; ?>">
                                <span class="help-block"><?php echo $sdt_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                                <span class="help-block"><?php echo $email_err;?></span>
                            </div>
                           
                            <div class="form-group <?php echo (!empty($dchi_err)) ? 'has-error' : ''; ?>">
                                <label>Địa Chỉ</label>
                                <input type="text" name="dchi" class="form-control" value="<?php echo $dchi; ?>">
                                <span class="help-block"><?php echo $dchi_err;?></span>
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