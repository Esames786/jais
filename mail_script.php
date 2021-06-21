<?php

    function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LdPkcYUAAAAAPwaQSUnZA7DZbxZidqxbJXO0aRl',
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
            $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }
    // Call the function CheckCaptcha
    $result = CheckCaptcha($_POST['g-recaptcha-response']);

    if ($result['success']) {



        if (isset($_POST['submit'])) {

            require 'phpmailer/PHPMailerAutoload.php';

            $email = "info@jaisinternational.com";
            $password = "jaisinternational";

            $to_id = "info@jaisinternational.com";

            $subject = "Customer Query Jais international";

            $csname = "\n Customer Name :- " . $_POST['username'];

            $csname_l = "\n Last Name :- " . $_POST['username_l'];

            $csemail = "\n Customer Email :- " . $_POST['user_email'];

            $csphone = "\n Customer Phone :- " . $_POST['user_contact'];


            $csMessage = "\n Customer Message :- " . $_POST['user_message'];

            $br = '<br>';

            $message = $csname . $br . $csname_l . $br . $csemail . $br . $csphone .  $br . $csMessage;

            $mail = new PHPMailer;


            $mail->Host = 'mail.jaisinternational.com';

            $mail->Port = 465;

            $mail->SMTPSecure = 'ssl';

            $mail->SMTPAuth = true;

            $mail->Username = $email;

            $mail->Password = $password;

            $mail->setFrom($email, 'Jais International Client ');

            $mail->addReplyTo($email, $email);

            $mail->Subject = $subject;

            $mail->msgHTML($message);

            $mail->addAddress($to_id);



            if (!$mail->send()) {

                $error = "Mailer Error: " . $mail->ErrorInfo;

                echo "<script type='text/javascript'>alert('Not Sent')</script>";
                echo "<script>window.location.assign('http://www.jaisinternational.com/contacts.php')</script>";

            } else {


                echo "<script type='text/javascript'>alert('Sent Successfully')</script>";
                echo "<script>window.location.assign('http://www.jaisinternational.com/contacts.php')</script>";

            }
        }


        if (isset($_POST['submit1'])) {

            require 'phpmailer/PHPMailerAutoload.php';

            $email = "info@jaisinternational.com";
            $password = "jaisinternational";

            $to_id = "info@jaisinternational.com";

            $subject = "Customer Query Jais international";

            $f_name = "\n Full Name :- " . $_POST['f_name'];

            $em_il = "\n Email :- " . $_POST['email'];

            $f_contact = "\n Contact :- " . $_POST['f_contact'];

            $l_from = "\n Location From :- " . $_POST['location-from'];

            $l_to = "\n Location to :- " . $_POST['location-to'];

            $way = "\n Ticket Type :- " . $_POST['way'];

            $id = "http://www.jaisinternational.com/ticket.php";

            $dep_date = "\n Departure Date :- " . $_POST['dep_date'];


            $arr_date = "\n Arrival Date :- " . $_POST['arr_date'];

            $flight_name = "\n Flight Name :- " . $_POST['flight_name'];

            $adults = "\n Adults  :- " . $_POST['adults'];

            $child = "\n Child :- " . $_POST['childs'];

            $child_age = "\n Child Age :- " . $_POST['childs_age'];

            $infants = "\n Infants :- " . $_POST['infants'];

            $infants_age = "\n Infants Age :- " . $_POST['infants_age'];


            $br = '<br>';

            $message = $f_name . $br .$em_il. $br .$f_contact. $br . $l_from . $br . $l_to . $br . $way . $br . $dep_date .  $br . $arr_date.  $br . $flight_name.  $br . $adults.  $br . $child.  $br . $child_age.  $br . $infants.  $br . $infants_age;

            $mail = new PHPMailer;


            $mail->Host = 'mail.jaisinternational.com';

            $mail->Port = 465;

            $mail->SMTPSecure = 'ssl';

            $mail->SMTPAuth = true;

            $mail->Username = $email;

            $mail->Password = $password;

            $mail->setFrom($email, 'Jais International Client ');

            $mail->addReplyTo($email, $email);

            $mail->Subject = $subject;

            $mail->msgHTML($message);

            $mail->addAddress($to_id);



            if (!$mail->send()) {

                $error = "Mailer Error: " . $mail->ErrorInfo;

                echo "<script type='text/javascript'>alert('Not Sent')</script>";
                echo "<script>window.location.assign('$id')</script>";

            } else {


                echo "<script type='text/javascript'>alert('Sent Successfully Will Get Back to you soon..!')</script>";
                echo "<script>window.location.assign('$id')</script>";

            }
        }


        if (isset($_POST['submit2'])) {

            require 'phpmailer/PHPMailerAutoload.php';

            $email = "info@jaisinternational.com";
            $password = "jaisinternational";

            $to_id = "info@jaisinternational.com";

            $subject = "Customer Query Jais international";


            $f_name = "\n Full Name  :- " . $_POST['f_name'];

            $em_il = "\n Email  :- " . $_POST['email'];

            $f_contact = "\n Contact  :- " . $_POST['f_contact'];

            $descc = "\n Customize Plan Description  :- " . $_POST['descc'];

            $adults = "\n Adults  :- " . $_POST['adults'];

            $child = "\n Child :- " . $_POST['childs'];

            $child_age = "\n Child Age:- " . $_POST['childs_age'];

            $infants = "\n Infants :- " . $_POST['infants'];

            $infants_age = "\n Infants Age :- " . $_POST['infants_age'];

            $idd = $_POST['id'];

            $id = "http://www.jaisinternational.com/package_detail.php?id=".$idd;

            $br = '<br>';

            $message = $f_name.  $br .$em_il. $br .$f_contact. $br . $descc.  $br . $adults.  $br . $child.  $br . $child_age.  $br . $infants.  $br . $infants_age;

            $mail = new PHPMailer;


            $mail->Host = 'mail.jaisinternational.com';

            $mail->Port = 465;

            $mail->SMTPSecure = 'ssl';

            $mail->SMTPAuth = true;

            $mail->Username = $email;

            $mail->Password = $password;

            $mail->setFrom($email, 'Jais International Client ');

            $mail->addReplyTo($email, $email);

            $mail->Subject = $subject;

            $mail->msgHTML($message);

            $mail->addAddress($to_id);



            if (!$mail->send()) {

                $error = "Mailer Error: " . $mail->ErrorInfo;

                echo "<script type='text/javascript'>alert('Not Sent')</script>";
                echo "<script>window.location.assign('$id')</script>";

            } else {


                echo "<script type='text/javascript'>alert('Sent Successfully Will Get Back to you soon..!')</script>";
                echo "<script>window.location.assign('$id')</script>";

            }
        }


        if (isset($_POST['submit3'])) {

            require 'phpmailer/PHPMailerAutoload.php';

            $email = "info@jaisinternational.com";
            $password = "jaisinternational";

            $to_id = "info@jaisinternational.com";

            $subject = "Customer Query Jais international";


            $f_name = "\n Full Name  :- " . $_POST['f_name'];

            $em_il = "\n Email  :- " . $_POST['email'];

            $f_contact = "\n Contact  :- " . $_POST['f_contact'];

            $descc = "\n Customize Plan Description  :- " . $_POST['descc'];

            $adults = "\n Adults  :- " . $_POST['adults'];

            $child = "\n Child :- " . $_POST['childs'];

            $child_age = "\n Child Age:- " . $_POST['childs_age'];

            $infants = "\n Infants :- " . $_POST['infants'];

            $infants_age = "\n Infants Age :- " . $_POST['infants_age'];

            $idd = $_POST['id'];

            $id = "http://www.jaisinternational.com/schedule.php?id=".$idd;

            $br = '<br>';

            $message = $f_name.  $br .$em_il. $br .$f_contact. $br . $descc.  $br . $adults.  $br . $child.  $br . $child_age.  $br . $infants.  $br . $infants_age;

            $mail = new PHPMailer;


            $mail->Host = 'mail.jaisinternational.com';

            $mail->Port = 465;

            $mail->SMTPSecure = 'ssl';

            $mail->SMTPAuth = true;

            $mail->Username = $email;

            $mail->Password = $password;

            $mail->setFrom($email, 'Jais International Client ');

            $mail->addReplyTo($email, $email);

            $mail->Subject = $subject;

            $mail->msgHTML($message);

            $mail->addAddress($to_id);



            if (!$mail->send()) {

                $error = "Mailer Error: " . $mail->ErrorInfo;

                echo "<script type='text/javascript'>alert('Not Sent')</script>";
                echo "<script>window.location.assign('$id')</script>";

            } else {


                echo "<script type='text/javascript'>alert('Sent Successfully Will Get Back to you soon..!')</script>";
                echo "<script>window.location.assign('$id')</script>";

            }
        }


    } else {
        // If the CAPTCHA box wasn't checked
        echo '<script>alert("Please Pass the Robot Test");</script>';

        if (isset($_POST['submit'])) {
            echo "<script>window.location.assign('http://www.jaisinternational.com/contacts.php')</script>";
        }

        if (isset($_POST['submit1'])) {
            echo "<script>window.location.assign('http://jaisinternational.com/ticket.php')</script>";
        }

        if(isset($_POST['submit3'])){
            $idd = $_POST['id'];
            $id = "http://www.jaisinternational.com/schedule.php?id=".$idd;
            echo "<script>window.location.assign('$id')</script>";
        }

        if(isset($_POST['submit2'])){
            $idd = $_POST['id'];
            $id = "http://www.jaisinternational.com/package_detail.php?id=".$idd;
            echo "<script>window.location.assign('$id')</script>";
        }

    }




?>