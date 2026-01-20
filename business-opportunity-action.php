<?php
require('inquiry-config.php');

$myfile = fopen("business_opportunity_log.txt", "a+") or die("Unable to open file!");
fwrite($myfile, json_encode($_SERVER));
fwrite($myfile, json_encode($_POST));

$domain         = WEBSITE_DOMAIN;
$contact_page   = CONTACT_PAGE;
$company_name   = COMPANY_NAME;
$subject_line   = 'New Business Opportunity Enquiry From SEVITSIL Website';
$from_email     = FROM_EMAIL;
$to_email       = TO_EMAIL;
$cc_email       = CC_EMAIL;
$thanks_page    = THANK_YOU_PAGE;

function send_request($data){
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://dcbindia.in/akismetcurl/akismet_check.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
  ));
  $response = json_decode(curl_exec($curl));
  curl_close($curl);
  return $response;
}

$name             = htmlspecialchars(stripslashes(trim($_POST['name'])));
$email            = htmlspecialchars(stripslashes(trim($_POST['email'])));
$phone            = htmlspecialchars(stripslashes(trim($_POST['number'])));
$company_name     = htmlspecialchars(stripslashes(trim($_POST['company_name'])));
$website          = htmlspecialchars(stripslashes(trim($_POST['website'])));
$country          = htmlspecialchars(stripslashes(trim($_POST['country'])));
$code          = htmlspecialchars(stripslashes(trim($_POST['code'])));
$product_interest = htmlspecialchars(stripslashes(trim($_POST['product_interest'])));
$interest         = htmlspecialchars(stripslashes(trim($_POST['interest'])));
$additional_info  = htmlspecialchars(stripslashes(trim($_POST['additional_info'])));

$websiteDomain = "sevitsil.com";
$allowed_origins = array(
  'https://' . $websiteDomain,
  'https://www.' . $websiteDomain,
  'http://' . $websiteDomain,
  'http://www.' . $websiteDomain
);

if (!in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
  header('location:' . $contact_page);
}

$curlArr = array_merge($_POST, $_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
$curlArr['save'] = false;
$response = send_request($curlArr);

if ($response->result) {
  $curlArr['save'] = true;
  $curlArr['bcoz'] = "API CONDITION FAIL";
  $curlArr['status'] = "FAIL";
  send_request($curlArr);
  header('location:' . $contact_page);

} else {

  try {
    if (
      isset($name) && trim($name) !== '' &&
      isset($email) && trim($email) !== '' && 
      isset($company_name) && trim($company_name) !== '' && 
      isset($phone) && trim($phone) !== '' &&
      isset($country) && trim($country) !== '' &&
      isset($product_interest) && trim($product_interest) !== '' &&
      isset($interest) && trim($interest) !== ''
    ) {

      if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
        $curlArr['save'] = true;
        $curlArr['bcoz'] = "INVALID EMAIL";
        $curlArr['status'] = "FAIL";
        send_request($curlArr);
        header('location:' . $contact_page);

      } else {

        preg_match_all('#\bhttps?://[^,\s()<>]+#', $additional_info, $msg_match);
        preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $additional_info, $msg_match_email);
        $junk_word = file_get_contents('https://dcbindia.in/junk-word.php?ver=1.2');
        preg_match_all($junk_word, $additional_info, $matches_words);

        if (count($msg_match[0]) > 0 || count($msg_match_email[0]) > 0 || count($matches_words[0]) > 0) {
          $curlArr['save'] = true;
          $curlArr['bcoz'] = "JUNK DETECT";
          $curlArr['status'] = "FAIL";
          send_request($curlArr);
          header('location:' . $contact_page);

        } else {

          require_once('phpmailer/class.phpmailer.php');

          $message_body = '
          <html><body>
          <div style="font-family:arial;font-size:13px;color:#000;border:10px solid #ccc;width:600px;padding:20px;margin:auto;">
          <table border="1" cellpadding="6" style="width:100%;border-collapse:collapse;border:1px solid #ccc;">
              <tr><td colspan="2" style="border-bottom:3px solid #ccc"><b>Business Opportunity Enquiry</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$name.'</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$email.'</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Phone:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$code.' - '.$phone.'</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Company:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$company_name.'</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Website:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$website.'</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Country:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$country.'</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Product Interest:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$product_interest.'</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Business Interest:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$interest.'</b></td></tr>
              <tr>
                <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Additional Info:</td>
                <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$additional_info.'</b></td>
            </tr>
          </table></div></body></html>';

          $mail = new PHPMailer(true);
          $mail->IsSMTP();
          try {
            $mail->Host = "mail.smtp2go.com";
            $mail->SMTPDebug = 0;
            $emailArr = DCB_INQUIRY_TEST_EMAILS_ARR;

            if (in_array($email, $emailArr)) {
                $mail->AddAddress(DCB_INQUIRY_EMAIL, $subject_line);
                $mail->SetFrom($from_email, "Sevitsil");
                $mail->addReplyTo($email, $subject_line);
              } else {
                $mail->AddAddress($to_email, 'Sevitsil');
                $mail->SetFrom($from_email, "Sevitsil");

                if (!empty($cc_email)) {
                  $mail->AddCC($cc_email, 'Kunj Shah');
                }

                $mail->AddCC('parth.patel@sevitsil.com', 'Parth Patel');
                $mail->AddBCC(DCB_INQUIRY_EMAIL, $subject_line);
                $mail->addReplyTo($email, $subject_line);
              }

            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Username = SMTP2GO_USERNAME;
            $mail->Password = SMTP2GO_PASSWORD;

            $mail->Subject = $subject_line;
            $mail->MsgHTML($message_body);
            $mail->Send();
            unset($mail);

            // Success log
            $curlArr['save'] = true;
            $curlArr['status'] = "SUCCESS";
            $curlArr['bcoz'] = "MAIL SEND SUCCESS";
            send_request($curlArr);

            header('location:' . $thanks_page);

          } catch (Exception $e) {
            $curlArr['save'] = true;
            $curlArr['bcoz'] = "MAIL ERROR";
            $curlArr['Exception'] = $e->getMessage();
            $curlArr['status'] = "FAIL";
            send_request($curlArr);
            echo $e->getMessage();
          }

        }
      }
    } else {
      $curlArr['save'] = true;
      $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";
      $curlArr['status'] = "FAIL";
      send_request($curlArr);

      echo "<script>alert('Please fill all required fields correctly');window.location.href='$contact_page';</script>";
    }

  } catch (Exception $e) {
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "PHP ERROR";
    $curlArr['Exception'] = $e->getMessage();
    $curlArr['status'] = "FAIL";
    send_request($curlArr);
  }
}
?>
