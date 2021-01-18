<?php
// Include config file
require_once "conect.php";
 
// Define variables and initialize with empty values
$tentruong = $dchi = $sdt = $email = $web =  "";
$tentruong_err = $dchi_err = $sdt_err = $email_err = $web_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_tentruong = trim($_POST["ten"]);
    if(empty($input_tentruong)){
        $tentruong_err = "Vui lòng nhập tên.";
    } else{
        $tentruong = $input_tentruong;
    }
    
    // Validate bd
    $input_dchi = trim($_POST["ngaysinh"]);
    if(empty($input_dchi)){
        $dchi_err = "Vui lòng nhập ngay sinh.";     
    } else{
        $dchi = $input_dchi;
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
    $input_web = trim($_POST["dchi"]);
    if(empty($input_web)){
        $web_err = "Vui lòng nhập địa chỉ.";     
    } else{
        $web = $input_web;
    }

   
    // Check input errors before inserting in database
    if(empty($tentruong_err) && empty($dchi_err) && empty($sdt_err) && empty($email_err) && empty($web_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO truong (tentruong, dchi, sdt, email,web) VALUES (?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_tentruong, $param_dchi, $param_sdt, $param_email, $param_web);
            
            // Set parameters
            $param_tentruong = $tentruong;
            $param_dchi = $dchi;
            $param_sdt = $sdt;
            $param_email = $email;
            $param_web = $web;
            
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
                            <div class="form-group <?php echo (!empty($tentruong_err)) ? 'has-error' : ''; ?>">
                                <label>Tên</label>
                                <input type="text" name="ten" class="form-control" value="<?php echo $tentruong; ?>">
                                <span class="help-block"><?php echo $tentruong_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($dchi_err)) ? 'has-error' : ''; ?>">
                                <label>Địa chỉ</label>
                                <input type="text" name="ngaysinh" class="form-control" value="<?php echo $dchi; ?>">
                                <span class="help-block"><?php echo $dchi_err;?></span>
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
                           
                            <div class="form-group <?php echo (!empty($web_err)) ? 'has-error' : ''; ?>">
                                <label>website</label>
                                <input type="text" name="dchi" class="form-control" value="<?php echo $web; ?>">
                                <span class="help-block"><?php echo $web_err;?></span>
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