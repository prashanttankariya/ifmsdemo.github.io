<?php


    //get the contact inputs
    if (isset($_POST['cnt_submit'])) {

        //get inputs
        $name       =       $_POST['name'];
        $email      =       $_POST['email'];
        $message    =       $_POST['message'];


        $to         = "leedonniee@gmail.com";
        $subject    = "Contact from IFMS web.";
        $headers    = "From:".$email . "\r\n";
        //echo $name.$email.$message;


        $sendmail = mail($to,$subject,$message,$headers);

        if($sendmail){
                
                // header('location:index.html');
        }
        else{

                echo "Mail error.";
        }
    }


?>