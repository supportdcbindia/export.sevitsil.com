<?php
require('inquiry-config.php');

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$logFile = fopen("career_apply_log.txt", "a+") or die("Unable to open file!");
fwrite($logFile, json_encode($_SERVER));
fwrite($logFile, json_encode($_POST));

$domain         = WEBSITE_DOMAIN;
$contact_page   = CONTACT_PAGE;
$company_name   = COMPANY_NAME;
// $subject_line   = 'New Career Application Received - SEVITSIL';
$from_email     = FROM_EMAIL;
$to_email       = TO_EMAIL;
$cc_email       = CC_EMAIL;
$thanks_page    = THANK_YOU_PAGE;

$name         = htmlspecialchars(stripslashes(trim($_POST['name'])));
$email        = htmlspecialchars(stripslashes(trim($_POST['email'])));
$phone        = htmlspecialchars(stripslashes(trim($_POST['number'])));
$message      = htmlspecialchars(stripslashes(trim($_POST['cover_letter'])));

$websiteDomain = "sevitsil.com";
$allowed_origins = array(
    'https://' . $websiteDomain,
    'https://www.' . $websiteDomain,
    'http://' . $websiteDomain,
    'http://www.' . $websiteDomain
);

// ORIGIN SECURITY CHECK
if (!in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header('location:' . $contact_page);
    exit;
}

// REQUIRED FIELD VALIDATION
if (
    isset($name) && trim($name) !== '' &&
    isset($email) && trim($email) !== '' &&
    isset($phone) && trim($phone) !== '' &&
    isset($message) && trim($message) !== ''
) {

    // EMAIL VALIDATION
    if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
        echo "<script>alert('Invalid Email Address');window.location.href='$contact_page';</script>";
        exit;
    }

    //--------------------------------
    //  FILE UPLOAD VALIDATION
    //--------------------------------
    if (!empty($_FILES['userFile']['name'])) {
        $allowedExts = array("pdf", "doc", "docx");
        $temp = explode(".", $_FILES["userFile"]["name"]);
        $extension = strtolower(end($temp));

        if ($_FILES["userFile"]["size"] < 8000000 && in_array($extension, $allowedExts)) {

            $upload_dir = "attachment/";
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $target_Path = $upload_dir . time() . "_" . basename($_FILES['userFile']['name']);
            move_uploaded_file($_FILES['userFile']['tmp_name'], $target_Path);
        } else {
            echo "<script>alert('Invalid File! Upload only PDF/DOC/DOCX up to 8MB');window.location.href='$contact_page';</script>";
            exit;
        }
    }

    //--------------------------------
    // SEND EMAIL WITH PHPMailer
    //--------------------------------
    require_once('phpmailer/class.phpmailer.php');

    $message_body = '
  <html><body>
  <div style="font-family:arial;font-size:13px;color:#000;border:10px solid #ccc;width:600px;padding:20px;margin:auto;">
  <table border="1" cellpadding="6" style="width:100%;border-collapse:collapse;border:1px solid #ccc;">
      <tr><td colspan="2" style="border-bottom:3px solid #ccc"><b>Career Application Details</b></td></tr>
      <tr><td align="right"><b>Name:</b></td><td>' . $name . '</td></tr>
      <tr><td align="right"><b>Email:</b></td><td>' . $email . '</td></tr>
      <tr><td align="right"><b>Phone:</b></td><td>' . $phone . '</td></tr>
      <tr><td align="right"><b>Cover Letter:</b></td><td>' . $message . '</td></tr>
      <tr><td colspan="2" align="center">I agree to the storage and handling of my data by this website.</td></tr>
  </table></div></body></html>
  ';

    $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
    $mail->IsSMTP(); // telling the class to use SMTP
    try {
        $mail->Host = "mail.smtp2go.com"; // SMTP server
        $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        $emailArr = DCB_INQUIRY_TEST_EMAILS_ARR;
        if (in_array($email, $emailArr)) {
            $mail->AddAddress(DCB_INQUIRY_EMAIL, 'New Career Application Received - SEVITSIL');
            $mail->SetFrom($from_email, "Sevitsil");
            $mail->addReplyTo($email, 'New Career Application Received - SEVITSIL');
        } else {
            $mail->AddAddress($to_email, 'Sevitsil');
            $mail->SetFrom($from_email, "Sevitsil");

            if (!empty($cc_email)) {
                $mail->AddCC($cc_email, 'Kunj Shah');
            }

            $mail->AddCC('parth.patel@sevitsil.com', 'Parth Patel');
            $mail->AddBCC(DCB_INQUIRY_EMAIL, 'New Career Application Received - SEVITSIL');
            $mail->addReplyTo($email, 'New Career Application Received - SEVITSIL');
        }

        $mail->Port = 465;
        $mail->Subject = 'New Career Application Received - SEVITSIL';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
        $mail->Username = SMTP2GO_USERNAME;
        $mail->Password = SMTP2GO_PASSWORD;
        $mail->MsgHTML($message_body);
        //$mail->AddAttachment('images/phpmailer.gif');      // attachment
        // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
        if (!empty($target_Path)) {
            $mail->AddAttachment($target_Path);
        }

        $mail->Send();
        unset($mail);

        //-----------------------------------
        // SUCCESS REDIRECT
        //-----------------------------------
        header('location:' . $thanks_page);
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
} else {
    echo "<script>alert('Required fields missing');window.location.href='$contact_page';</script>";
    exit;
}
