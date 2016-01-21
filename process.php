<?php
    include('config/base.php');
    $myemail = 'info@newportholdingsllc.com';
    //grab named inputs from html then post to #thanks
    if (isset($_POST['firstname'])) {

        $fname = strip_tags($_POST['firstname']);
        $lname = strip_tags($_POST['lastname']);
        $email = strip_tags($_POST['email']);
        $type = strip_tags($_POST['type']);

        $q = "INSERT INTO registeredUsers (firstname, lastname, email, type) VALUES (\"$fname\", \"$lname\", \"$email\", \"$type\")";
        $r = mysql_query($q);


        echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
        echo "<stong>First Name:</strong> ".$fname."<br>";
        echo "<stong>Last Name:</strong> ".$lname."<br>";
        echo "<stong>Email:</strong> ".$email."<br>";

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
?>
