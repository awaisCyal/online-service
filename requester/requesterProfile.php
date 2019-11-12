<?php
define( 'TITLE', 'Requester Profile' );
define( 'PAGE', 'RequesterProfile' );
include ( '../dbConnection.php' );
session_start();
if(isset($_SESSION[ 'is_login' ])){
   $rEmail  = $_SESSION[ 'rEmail' ];
   $sql     = "SELECT r_name FROM `requesterlogin_tb` 
                    WHERE r_email = '". $rEmail ."' ";
   $result  = $conn->query($sql);
   $row     = $result->fetch_assoc();
   $rName   = $row[ 'r_name' ];

   if(isset( $_POST[ 'nameupdate' ] )){
        $rName = $_POST[ 'rName' ];
        if(!empty($rName)){
            $sql = "UPDATE `requesterlogin_tb` SET r_name = '$rName' 
                        WHERE r_email = '". $rEmail ."' ";
            $result = $conn->query($sql);
            if(isset($result)){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
            } 
        }else{
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Filed </div>';
        }   
   }
}else{
    header("location: RequesterLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo TITLE ?>
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../include/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../include/css/all.min.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="../include/css/custom.css">
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">OSMS</a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5 " style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'RequesterProfile') { echo 'active'; } ?>"
                                href="RequesterProfile.php">
                                <i class="fas fa-user"></i>
                                Profile <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'SubmitRequest') { echo 'active'; } ?>"
                                href="SubmitRequest.php">
                                <i class="fab fa-accessible-icon"></i>
                                Submit Request
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'CheckStatus') { echo 'active'; } ?>"
                                href="CheckStatus.php">
                                <i class="fas fa-align-center"></i>
                                Service Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'Requesterchangepass') { echo 'active'; } ?>"
                                href="Requesterchangepass.php">
                                <i class="fas fa-key"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col-sm-6 mt-5">
                <form class="mx-5" method="POST">
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail; ?>"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="rName"
                            value="<?php echo $rName; ?>">
                    </div>
                    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
                    <?php if(isset($passmsg)) {echo $passmsg; } ?>
                </form>
            </div>
        </div>
    </div>
    <!-- Boostrap JavaScript -->
    <script src="../include/js/jquery.min.js"></script>
    <script src="../include/js/popper.min.js"></script>
    <script src="../include/js/bootstrap.min.js"></script>
    <script src="../include/js/all.min.js"></script>
</body>

</html>