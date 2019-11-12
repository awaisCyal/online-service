<?php
if(isset($_POST['submit'])){
    
    if( !empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $name       = $_POST['name'];
        $subject    = $_POST['subject'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];
        
        $mailTo = "cyal1807@gmail.com";
        $text   = "You have received an email from " . $name . " \n\n " .$message;
        $header = "From " . $email;
        mail($mailTo, $subject, $text, $header);

        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';
    }else{
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    }  
}
?>
<div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">
        <!--Start Contact Us Row-->
        <div class="col-md-8">
            <!--Start Contact Us 1st Column-->
            <form action="" method="post">
                <input type="text" class="form-control" name="name" placeholder="Name"><br>
                <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                <textarea class="form-control" name="message" placeholder="How can we help you?"
                    style="height:150px;"></textarea><br>
                <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
                <?php if(isset($msg)) {echo $msg; } ?>
            </form>
        </div> <!-- End Contact Us 1st Column-->

        <div class="col-md-4 text-center">
            <!-- Start Contact Us 2nd Column-->
            <strong>Headquarter:</strong> <br>
            OSMS Pvt Ltd, <br>
            Sec IV, DHA <br>
            DHA - 12345678 <br>
            Phone: +00000000 <br>
            <a href="#" target="_blank">www.osms.com</a> <br>

            <br><br>
            <strong>Lahore Branch:</strong> <br>
            OSMS Pvt Ltd, <br>
            Model Town, Lahore <br>
            Lahore- 12345678 <br>
            Phone: +00000000 <br>
            <a href="#" target="_blank">www.osms.com</a> <br>
        </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
</div> <!-- End Contact Us Container-->