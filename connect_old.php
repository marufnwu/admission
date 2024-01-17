<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['guardianName']) && isset($_POST['guardianEmail'])) {
        $con = mysqli_connect("localhost","mysunshineworld_mysunshineworld","_ykyianOEUN{","mysunshineworld_form_db");

        $gurdianName = $_POST['guardianName'];
        $gurdianEmail = $_POST['guardianEmail'];
        $mobileNumber = $_POST['mobileNumber'];
        $childAge = $_POST['childAge'];
        $message = $_POST['message'];
        $sql = "INSERT INTO `contactform_database` (`id`, `gurdianName`, `gurdianEmail`, `mobileNumber`, `childAge`, `message`) VALUES ('0', '$gurdianName', '$gurdianEmail', '$mobileNumber', '$childAge', '$message');";
        $rs = mysqli_query($con, $sql);
        // if($rs)
        //     {
        //     	echo "Contact Records Inserted";
        //     }
        $info = "<html>
                    <body>
                        <table  border='1' cellspacing='3' width='100%'>
                            <tr>
                                <td>Gurdian Name:</td>
                                <td>$gurdianName</td>
                            </tr>
                            <tr>
                                <td>Gurdian Email:</td>
                                <td>$gurdianEmail</td>
                            </tr>
                            <tr>
                                <td>Mobile Number:</td>
                                <td>$mobileNumber</td>
                            </tr>
                            <tr>
                                <td>Child Age:</td>
                                <td>$childAge</td>
                            </tr>
                            <tr>
                                <td>Message:</td>
                                <td>$message</td>
                            </tr>
                        </table>
                    </body>
                </html>";

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "info@mysunshineworld.org"; 
        $mail->Password = 'czwurkytewuuymsz'; 
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPDebug = 0;

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('info@mysunshineworld.org');
        $mail->addAddress('info@mysunshineworld.org'); 
        /*$mail->WordWrap = 50;*/
        $mail->AddCC('pushkar.sapra@creativematka.com');
        $mail->AddCC('info@mysunshineworld.org'); 
        //enter you email address
        $mail->Subject = ("New Admission Lead from $gurdianName");
        $mail->Body = $info;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
    
    
    if (isset($_POST['guardianNameSec']) && isset($_POST['guardianEmailSec'])) {
        $con_new = mysqli_connect("localhost","mysunshineworld_mysunshineworld","_ykyianOEUN{","mysunshineworld_form_db");
        $gurdianNameSec = $_POST['guardianNameSec'];
        $gurdianEmailSec = $_POST['guardianEmailSec'];
        $mobileNumberSec = $_POST['mobileNumberSec'];
        $childAgeSec = $_POST['childAgeSec'];
        $messageSec = $_POST['messageSec'];
        $sql_new = "INSERT INTO `contactform_database` (`id`, `gurdianName`, `gurdianEmail`, `mobileNumber`, `childAge`, `message`) VALUES ('0', '$gurdianNameSec', '$gurdianEmailSec', '$mobileNumberSec', '$childAgeSec', '$messageSec');";
        $rs_new = mysqli_query($con_new, $sql_new);
        // if($rs_new)
        //     {
        //     	echo "Contact Records Inserted";
        //     }
        $infoSec = "<html>
                    <body>
                        <table  border='1' cellspacing='3' width='100%'>
                            <tr>
                                <td>Gurdian Name:</td>
                                <td>$gurdianNameSec</td>
                            </tr>
                            <tr>
                                <td>Gurdian Email:</td>
                                <td>$gurdianEmailSec</td>
                            </tr>
                            <tr>
                                <td>Child Name:</td>
                                <td>$mobileNumberSec</td>
                            </tr>
                            <tr>
                                <td>Child Age:</td>
                                <td>$childAgeSec</td>
                            </tr>
                            <tr>
                                <td>Message:</td>
                                <td>$messageSec</td>
                            </tr>
                        </table>
                    </body>
                </html>";

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail_new = new PHPMailer();

        //SMTP Settings
        // $mail_new->SMTPDebug = 1;
        $mail_new->isSMTP();
        $mail_new->Host = "smtp.gmail.com";
        $mail_new->SMTPAuth = true;
        $mail_new->Username = "info@mysunshineworld.org"; 
        $mail_new->Password = 'czwurkytewuuymsz'; 
        $mail_new->Port = 465;
        $mail_new->SMTPSecure = "ssl";

        //Email Settings
        $mail_new->isHTML(true);
        $mail_new->setFrom('info@mysunshineworld.org');
       $mail_new->addAddress('info@mysunshineworld.org');
         /*$mail->WordWrap = 50;*/
        $mail_new->AddCC('pushkar.sapra@creativematka.com');
        $mail_new->AddCC('info@mysunshineworld.org');
        //enter you email address
        $mail_new->Subject = ("New Admission Lead from $gurdianNameSec");
        $mail_new->Body = $infoSec;

        if ($mail_new->send()) {
            $status_new = "success";
            $response_new = "Email is sent!";
        } else {
            $status_new = "failed";
            $response_new = "Something is wrong: <br><br>" . $mail_new->ErrorInfo;
        }

        exit(json_encode(array("status" => $status_new, "response" => $response_new)));
    }

