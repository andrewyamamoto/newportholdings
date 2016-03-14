<?php
    include('config/base.php');

    $myemail = 'info@newportholdingsllc.com';
    // $myemail = 'andrew.asada@gmail.com';
    //grab named inputs from html then post to #thanks
    if ( isset($_POST['firstname']) ) {

        $fname = strip_tags($_POST['firstname']);
        $lname = strip_tags($_POST['lastname']);
        $email = strip_tags($_POST['email']);
        $type = strip_tags($_POST['type']);

        $q = "INSERT INTO registeredUsers (firstname, lastname, email, type) VALUES (\"$fname\", \"$lname\", \"$email\", \"$type\")";
        $r = mysql_query($q);


        echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
        echo "<strong>First Name:</strong> ".$fname."<br>";
        echo "<strong>Last Name:</strong> ".$lname."<br>";
        echo "<strong>Email:</strong> ".$email."<br>";

        //generate email and send!
        $to = $myemail;
        $email_subject = "New $type";
        $email_body = "You have received a new registration request.\n".
        "Here are the details:\n\nFirst Name: $fname \nLast Name: $lname \n".
        "Email: $email\n ";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email";
        mail($to,$email_subject,$email_body,$headers);

    }
    if( isset($_POST['name']) ){

        $fullname = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $phone = strip_tags($_POST['phone']);
        $message = strip_tags($_POST['message']);
        $type = strip_tags($_POST['type']);

        $q = "INSERT INTO registeredUsersZh (email, type, fullname, message, phone) VALUES (\"$email\", \"$type\", \"$fullname\",\"$message\",\"$phone\")";
        $r = mysql_query($q);

        echo "<span class=\"alert alert-success\">Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
        echo "<strong>Name:</strong> ".$fullname."<br>";
        echo "<strong>Phone:</strong> ".$phone."<br>";
        echo "<strong>Email:</strong> ".$email."<br>";
        echo "<strong>Message:</strong> ".$message."<br>";

        //generate email and send!
        $to = $myemail;
        $email_subject = "New $type";
        $email_body = "You have received a new registration request.\n".
        "Here are the details:\n\nName: $fullname \nPhone: $phone \nMessage: $message \n".
        "Email: $email\n ";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email";
        mail($to,$email_subject,$email_body,$headers);
    }
?>
