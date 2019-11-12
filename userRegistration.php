<?php
require_once ('dbConnection.php');

// User signup request
if( isset($_POST['rSignup']) ){
    
    // check form fields 
    if( !empty($_POST['rName']) && !empty($_POST['rEmail']) && !empty($_POST['rPassword']) ){
        
        // assigning form values into variable
        $rname      = $_POST['rName'];
        $remail     = $_POST['rEmail'];
        $rpassword  = $_POST['rPassword'];

        // select user already exist or not
        $sql = "SELECT r_email FROM `requesterlogin_tb` 
                        WHERE r_email = '". $_POST['rEmail'] ."'";
        $result = $conn->query($sql);
        
        // select user already exist or not         
        if( $result->num_rows == 1 ){
            $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Account Already Exist </div>';
        }

        // insert values into DB
        else{
            $sql = "INSERT INTO `requesterlogin_tb` ( r_name, r_email, r_password ) 
                            VALUES ( '$rname', '$remail', '$rpassword' )";
            $result = $conn->query($sql);

            // account successfully registered message
            if( isset($result) ){
                $regmsg = '<div class="alert alert-success mt-2" role="alert"> Registration Successfully </div>';
            }
            // account successfully registered message
            else{
                $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Not Registered </div>';
            }
        }
    }
    
    // empty fields warning message 
    else{
        $regmsg = '<div class="alert alert-danger mt-2" role="alert"> All fields are required  </div>';
    }
}
?>

<div class="container pt-5" id="registration">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="pl-2 font-weight-bold">Name</label><input
                        type="text" class="form-control" placeholder="Name" name="rName">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input
                        type="email" class="form-control" placeholder="Email" name="rEmail">
                    <!--Add text-white below if want text color white-->
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">New
                        Password</label><input type="password" class="form-control" placeholder="Password"
                        name="rPassword">
                </div>
                <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold"
                    name="rSignup">Sign Up</button>
                <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
                    Policy and Cookie Policy.</em>
                <?php if(isset($regmsg)){ echo $regmsg; } ?>
            </form>
        </div>
    </div>
</div>