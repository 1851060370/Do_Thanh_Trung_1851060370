<?php
// Include config file
require_once "conect.php";
 
// Define variables and initialize with empty values
$tentruong = $tenkhoa = $tenlop = $ngayvao = $ngayra = $ghichu =  "";
$tentruong_err = $tenkhoa_err = $tenlop_err = $ngayvao_err = $ngayra_err = $ghichu_err = "";
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
    $input_tenkhoa = trim($_POST["tenkhoa"]);
    if(empty($input_tenkhoa)){
        $tenkhoa_err = "Vui lòng nhập tên khoa.";     
    } else{
        $tenkhoa = $input_tenkhoa;
    }

    $input_tenlop = trim($_POST["tenlop"]);
    if(empty($input_tenlop)){
        $tenlop_err = "Vui lòng nhậptenlop.";     
    } else{
        $tenlop = $input_tenlop;
    }
    

    // Validate bgroup
    $input_ngayvao = trim($_POST["ngayvao"]);
    if(empty($input_ngayvao)){
        $ngayvao_err = "Vui lòng nhập ngày vào.";     
    } else{
        $ngayvao = $input_ngayvao;
    }
    // Validate reg_date
    $input_ngayra = trim($_POST["ngayra"]);
    if(empty($input_ngayra)){
        $ngayra_err = "Vui lòng nhậpngày ra.";     
    } else{
        $ngayra = $input_ngayra;
    }
    $input_ghichu = trim($_POST["ghichu"]);
    if(empty($input_ghichu)){
        $ghichu_err = "Vui lòng nhập ghi chú.";     
    } else{
        $ghichu = $input_ghichu;
    }
   
    // Check input errors before inserting in database
    if(empty($tentruong_err) && empty($tenkhoa_err) && empty($tenlop_err) && empty($ngayvao_err) && empty($ngayra_err)&& empty($ghichu_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO hocvan (tentruong,tenkhoa,tenlop, ngayvao, ngayra, ghichu) VALUES (?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_tentruong, $param_tenkhoa, $param_tenlop, $param_ngayvao, $param_ngayra, $param_ghichu);
            
            // Set parameters
            $param_tentruong = $tentruong;
            $param_tenkhoa = $tenkhoa;
            $param_tenlop = $tenlop;
            $param_ngayvao = $ngayvao;
            $param_ngayra = $ngayra;
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
                                <label>Tên Trường</label>
                                <input type="text" name="ten" class="form-control" value="<?php echo $tentruong; ?>">
                                <span class="help-block"><?php echo $tentruong_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($tenkhoa_err)) ? 'has-error' : ''; ?>">
                                <label>Tên Khoa</label>
                                <input type="text" name="tenkhoa" class="form-control" value="<?php echo $tenkhoa; ?>">
                                <span class="help-block"><?php echo $tenkhoa_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($tenlop_err)) ? 'has-error' : ''; ?>">
                                <label>Tên Lớp</label>
                                <input type="text" name="tenlop" class="form-control" value="<?php echo $tenlop; ?>">
                                <span class="help-block"><?php echo $tenlop_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($ngayvao_err)) ? 'has-error' : ''; ?>">
                                <label>Ngày vào</label>
                                <input type="text" name="ngayvao" class="form-control" value="<?php echo $ngayvao; ?>">
                                <span class="help-block"><?php echo $ngayvao_err;?></span>
                            </div>
                           
                            <div class="form-group <?php echo (!empty($ngayra_err)) ? 'has-error' : ''; ?>">
                                <label>Ngày Ra</label>
                                <input type="text" name="ngayra" class="form-control" value="<?php echo $ngayra; ?>">
                                <span class="help-block"><?php echo $ngayra_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($ghichu_err)) ? 'has-error' : ''; ?>">
                                <label>Ghi chú</label>
                                <input type="text" name="ghichu" class="form-control" value="<?php echo $ghichu; ?>">
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