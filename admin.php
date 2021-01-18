<!DOCTYPE html>
<html lang="en">
<head>
  <link href="assets/img/ba1.jpg" rel="icon">
  <link href="assets/img/ba1.jpg" rel="crown">
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Người Dùng</h2>
                        <a href="add.nd.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM users";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>email</th>";
                                        echo "<th>password</th>";
                                       
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='view.nd.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='sua.nd.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoa.nd.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
                    
                   
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>

</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Thông Tin Cá Nhân</h2>
                        <a href="add.ttcn.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM thongtincanhan";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>ten</th>";
                                        echo "<th>ngaysinh</th>";
                                        echo "<th>sdt</th>";   
                                        echo "<th>email</th>";
                                        echo "<th>dchi</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['ten'] . "</td>";
                                        echo "<td>" . $row['ngaysinh'] . "</td>";
                                        echo "<td>" . $row['sdt'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['dchi'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='view.ttcn.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='sua.ttcn.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoa.ttcn.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
                    
                   
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Học Vấn</h2>
                        <a href="add.hv.php" class="btn btn-success pull-right">Thêm</a>
                        
     </div>
                    <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql1 = "SELECT * FROM hocvan";
                    if($result = mysqli_query($conn, $sql1)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>tentruong</th>";
                                        echo "<th>tenkhoa</th>";
                                        echo "<th>tenlop</th>";   
                                        echo "<th>ngayvao</th>";
                                        echo "<th>ngayra</th>";
                                        echo "<th>ghichu</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['tentruong'] . "</td>";
                                        echo "<td>" . $row['tenkhoa'] . "</td>";
                                        echo "<td>" . $row['tenlop'] . "</td>";
                                        echo "<td>" . $row['ngayvao'] . "</td>";
                                        echo "<td>" . $row['ngayra'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='view.hv.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='sua.hv.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoa.hv.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql                                                         . " . mysqli_error($conn);
                    }
 
                   
                    ?>
                        
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Kĩ Năng</h2>
                        <a href="add.kn.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM kynang";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>kynang</th>";
                                        echo "<th>ghichu</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['kynang'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='view.kn.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='sua.kn.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoa.kn.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
                    
                   
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Kinh Nghiệm</h2>
                        <a href="add.kng.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM kinhnghiem";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>congviec</th>";
                                        echo "<th>ghichu</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['congviec'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='view.kng.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='sua.kng.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoa.kng.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
                    
                   
                </div>
            </div>        
        </div>
    </div>
    
    
</body>
</html>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Trường</h2>
                        <a href="add.truong.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM truong";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>tentruong</th>";
                                        echo "<th>dchi</th>";
                                        echo "<th>sdt</th>";   
                                        echo "<th>email</th>";
                                        echo "<th>web</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['tentruong'] . "</td>";
                                        echo "<td>" . $row['dchi'] . "</td>";
                                        echo "<td>" . $row['sdt'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['web'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='view.truong.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='sua.truong.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoa.truong.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
                    
                   
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Sở Thích</h2>
                        <a href="add.st.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "conect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM sothich";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>ten</th>";
                                        echo "<th>ghichu</th>";
                                        
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['ten'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                     
                                        echo "<td>";
                                            echo "<a href='view.st.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='sua.st.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoa.st.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
                    
                    <div class="page-header clearfix">
                        <a href="index.php" class="btn btn-success pull right">Quay lại trang chủ</a>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>