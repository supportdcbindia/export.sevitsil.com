<?php
require('inquiry-config.php');

## auto create a logs file to view inquiry entries
// $myfile = fopen(INQUIRY_LOG_FILE, "a+") or die("Unable to open file!");
// fwrite($myfile, json_encode($_SERVER));
// fwrite($myfile, json_encode($_POST));

$myfile = fopen("inquiry_log_file.txt", "a+") or die("Unable to open file!");
fwrite($myfile, json_encode($_SERVER));
fwrite($myfile, json_encode($_POST));

// fwrite($myfile, "\n\n");

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$domain = WEBSITE_DOMAIN;
$contact_page = CONTACT_PAGE;
$company_name = COMPANY_NAME;
$subject_line = EMAIL_SUBJECT;
$from_email = FROM_EMAIL;
$to_email = TO_EMAIL;
$cc_email = CC_EMAIL;
$thanks_page = THANK_YOU_PAGE;

function send_request($data)
{
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

$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
$company_name = htmlspecialchars(stripslashes(trim($_POST['company_name'])));
$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
$message = htmlspecialchars(stripslashes(trim($_POST['message'])));
$phone = htmlspecialchars(stripslashes(trim($_POST['number'])));

$city_country_title = 'Country';
$city_country = htmlspecialchars(stripslashes(trim($_POST['country'])));
$country_code = htmlspecialchars(stripslashes(trim($_POST['code'])));
$city = htmlspecialchars(stripslashes(trim($_POST['city'])));
if (IS_DOMESTIC == true) {
  $city_country_title = 'City';
  $city_country = htmlspecialchars(stripslashes(trim($_POST['city'])));
  $country_code = '';
}

$requirement_priority = htmlspecialchars(stripslashes(trim($_POST['requirement_priority'])));
$productType = $_POST['productType'];
if (is_array($productType) && !empty($productType)) {
  $productType = implode(", ", $productType);
}

$customerType = $_POST['customerType'];
if (is_array($customerType) && !empty($customerType)) {
  $customerType = implode(", ", $customerType);
}

$websiteDomain = "sevitsil.com"; ## for example dudhat.in OR dudhat.com
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
  $curlArr = array_merge($_POST, $_SERVER);
  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
  $curlArr['save'] = true;
  $curlArr['bcoz'] = "API CONDITION FAIL";
  $curlArr['status'] = "FAIL";
  $response = send_request($curlArr);
  header('location:' . $contact_page);
} else {
  try {
    if (
      isset($name) && trim($name) !== '' && 
      isset($company_name) && trim($company_name) !== '' && 
      isset($email) && trim($email) !== '' && 
      isset($message) && trim($message) !== '' && 
      isset($phone) && trim($phone) !== '' && 
      isset($city_country) && trim($city_country) !== ''
    ) {
      if (
        $_SESSION["code"] == $_POST['captcha'] && 
        $_POST['captcha'] != "!UNKNOWN_TYPE!" && 
        $_POST['captcha'] != "" && $_SESSION["code"] != ""
      ) {
        if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
          //echo "ERROR junk email detact";
          $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
          $curlArr['save'] = true;
          $curlArr['bcoz'] = "JUNK DETACT";
          $curlArr['status'] = "FAIL";
          $response = send_request($curlArr);
          header('location:' . $contact_page);
        } else {
          preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $message, $msg_match);
          preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $msg_match_email);
          $junk_word = file_get_contents('https://dcbindia.in/junk-word.php?ver=1.2');
          preg_match_all($junk_word, $message, $matches_words);
          //print_r($msg_match_email[0]);
          //echo count($msg_match_email[0]);exit;
          if (count($msg_match[0]) > 0 || count($msg_match_email[0]) > 0 || count($matches_words[0]) > 0) {
            //echo "ERROR junk msg";
            $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
            $curlArr['save'] = true;
            $curlArr['bcoz'] = "JUNK DETACT";
            $curlArr['status'] = "FAIL";
            $response = send_request($curlArr);
            header('location:' . $contact_page);
          } else {
            require_once('phpmailer/class.phpmailer.php');
            $message_body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
            <html>
              <head>
                <meta http-equiv="content-type" content="text/html; charset=windows-1250">
                <meta name="generator" content="PSPad editor, www.pspad.com">
                <title></title>
                <style type="text/css">span.go{display:none} .go{display:none}</style>
              </head>
              <body>
                <div style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;background:#ffffff;border:10px solid #cccccc;width:600px;padding:20px;margin: 0px auto;">
                  <table border="1" cellpadding="5" style="width:500px;font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-collapse:collapse;border:1px solid #cccccc;border-color:#cccccc">
                    <tbody>
                      <tr>
                        <td colspan="2" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-bottom:3px solid #cccccc"><b>Enquiry Details</b></td>
                      </tr>
                      
                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $name . '</b></td>
                      </tr>

                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Company Name:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $company_name . '</b></td>
                      </tr>
                      
                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $email . '</b></td>
                      </tr>

                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">'.$city_country_title.':</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $city_country . '</b></td>
                      </tr>

                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">City:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $city . '</b></td>
                      </tr>

                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $country_code . ' - ' . $phone . '</b></td>
                      </tr>

                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Product Type:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $productType . '</b></td>
                      </tr>

                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Type Of Customer:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $customerType . '</b></td>
                      </tr>
                      
                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Message:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $message . '</b></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </body>
            </html>
            ';

            $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
            $mail->IsSMTP(); // telling the class to use SMTP
            try {
              $mail->Host = "mail.smtp2go.com"; // SMTP server
              $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
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
                $mail->AddCC('global@sevitsil.com', 'Sevitsil');
                $mail->AddBCC(DCB_INQUIRY_EMAIL, $subject_line);
                $mail->addReplyTo($email, $subject_line);
              }

              $mail->Port = 465;
              $mail->Subject = $subject_line;
              $mail->SMTPAuth = true;
              $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
              $mail->Username = SMTP2GO_USERNAME;
              $mail->Password = SMTP2GO_PASSWORD;
              $mail->MsgHTML($message_body);
              //$mail->AddAttachment('images/phpmailer.gif');      // attachment
              // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
              $mail->Send();


              unset($mail);


              #########################
              ## send email to the user
              #########################
              $message_body2 = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
              <html>
                <head>
                  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
                  <meta name="generator" content="PSPad editor, www.pspad.com">
                  <title></title>
                  <style type="text/css">span.go{display:none} .go{display:none}</style>
                </head>
                <body>
                  <p>Dear "<b>'.$name.'</b>",</p>

                  <p>Greetings From<br>
                  <b>SEVITSIL - Solutions in Silicone, INDIA.</b></p>

                  <p>
                  Thank you for your inquiry on our corporate website regarding <b>'.$productType.'</b>. We sincerely appreciate your keen interest in our products and look forward to meeting your requirements with novelty silicone products and excellent service.
                  </p>

                  <p>
                  An experienced manufacturer of premium silicone products catering to over 18 industries, we set the standard with our unparalleled precision, quality and expertise. We are delighted to share our company data for your reference.
                  </p>

                  <ul>
                    <li>Maintained 96% on-time delivery</li>
                    <li>40 million meters of silicone tubes were supplied last year</li>
                    <li>12000+ SKU products developed</li>
                    <li>Products exported to 35+ countries & representation in 6 countries</li>
                    <li>85+ application-based products developed</li>
                    <li>Serving 29+ industrial sectors, including a wide range of specialized applications</li>
                    <li>Expertise in manufacturing ultra-fine 0.1 MM ID tubings</li>
                    <li>Ultra-tight tolerance for critical applications</li>
                  </ul>

                  <p>
                  We would request you to please share your detailed requirement, which may include specific silicone products along with size and drawing, quantity, any technical specifications, application and any other relevant information that might help us offer you a perfect product.
                  </p>

                  <p>
                  We would be glad to connect on a 7-minute Google Meet session to understand your silicone solution needs in depth and help us proceed with quick actions. Please let us know at your earliest convenience.
                  </p>

                  <p>
                  Our sales team will get in touch with you shortly. For immediate assistance feel free to WhatsApp us at 
                  <a href="https://api.whatsapp.com/send?phone=919727738001&amp;text=Hello Team SEVITSIL, I was going through your website and wish to get connected for product discussion" target="_blank">
                    <span class="btn-text">+91 97277 38001</span>
                  </a>.
                  </p>

                  <p><b>Attached herewith are our industry-focused product catalogs. Looking forward to being a part of your growth.</b></p>

                  <p>
                  <a href="https://drive.google.com/file/d/1aQDnfwIhcSoeI7Dfk0zoMPhACXDc6h3B/view" target="_blank"><b>SEVITSIL Pharmaceutical Products Catalog</b></a><br>
                  <a href="https://drive.google.com/file/d/14KFiZ0wAX7hTysSle4Fl01uOCWhKXroh/view" target="_blank"><b>SEVITSIL Medical Products Catalog</b></a><br>
                  <a href="https://drive.google.com/file/d/11Hx24kLDxNCG34cHiJfZg4wBkeHFKNvv/view" target="_blank"><b>SEVITSIL Electrical Products Catalog</b></a><br>
                  <a href="https://drive.google.com/file/d/1i2Fnp_nc42GCB5_02rWzOxsSAcSNhWyI/view" target="_blank"><b>SEVITSIL Product Catalog</b></a>
                  </p>

                  <p>
                  For more details visit: 
                  <a href="https://sevitsil.com" target="_blank"><b>www.sevitsil.com</b></a>
                  </p>

                  <p>Thank You<br>
                  Sevitsil Export Team</p>

                  <p>
                    <img src="https://sevitsil.com/assets/imgs/50-years-2.webp" alt="50 Years of Excellence" style="max-width: 100%; height: auto;">
                  </p>
                </body>
              </html>
              ';

              $mail2 = new PHPMailer(true);
              $mail2->IsSMTP();
              $mail2->Host = "mail.smtp2go.com";
              $mail2->SMTPDebug = 0;

              $mail2->clearAddresses();
              $mail2->clearAllRecipients();
              $mail2->clearAttachments();

              $mail2->AddAddress($email, $name);
              $mail2->SetFrom($from_email, "Sevitsil");

              if (!empty($cc_email)) {
                $mail2->AddCC($cc_email, "Kunj Shah");
              }
              $mail2->AddCC('parth.patel@sevitsil.com', 'Parth Patel');
              $mail2->addReplyTo("no-reply@sevitsil.com", "Sevitsil");

              $mail2->Port = 465;
              $mail2->CharSet = 'UTF-8';
              $mail2->Encoding = 'base64';
              $mail2->SMTPAuth = true;
              $mail2->SMTPSecure = 'ssl';
              $mail2->Username = SMTP2GO_USERNAME;
              $mail2->Password = SMTP2GO_PASSWORD;

              $mail2->Subject = "Thank You! Explore SEVITSIL's Legacy in Silicone Manufacturing"; // note straight apostrophe
              $mail2->MsgHTML($message_body2);
              $mail2->AltBody = strip_tags($message_body2);
              // $mail2->AltBody = strip_tags($message_body2);
              // $mail2->ContentType = 'text/html; charset=UTF-8';
              $mail2->Send();

              $cookie_name = "inquierymodel";
              $cookie_value = "inquiryset";
              setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "MAIL SEND SUCCUSS";
              $curlArr['status'] = "SUCCESS";
              $response = send_request($curlArr);
              header('location:' . $thanks_page);
              //echo "Message Sent OK<p></p>\n";
            } catch (phpmailerException $e) {
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
              $curlArr['Exception'] = $e->errorMessage();
              $curlArr['status'] = "FAIL";
              $response = send_request($curlArr);
              echo $e->errorMessage(); //Pretty error messages from PHPMailer

            } catch (Exception $e) {
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
              $curlArr['Exception'] = $e->getMessage();
              $curlArr['status'] = "FAIL";
              $response = send_request($curlArr);
              echo $e->getMessage(); //Boring error messages from anything else!

            }
          }
        }
      } else {
        $curlArr = array_merge($_POST, $_SERVER);
        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
        $curlArr['save'] = true;
        $curlArr['bcoz'] = "CAPTCHA MISMATCH";
        $curlArr['status'] = "FAIL";
        $response = send_request($curlArr);
?>
        <script type="text/javascript">
          if (confirm("You have enter Wrong Captcha.....Please Enter Correct Captcha Code")) {
            window.location.href = "<?= $websiteDomain; ?>";
          } else {
            window.location.href = "<?= $websiteDomain; ?>";
          }
        </script>
      <?php
      }
    } else {
      $curlArr = array_merge($_POST, $_SERVER);
      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
      $curlArr['save'] = true;
      $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";
      $curlArr['status'] = "FAIL";
      $response = send_request($curlArr);

      ?>
      <script type="text/javascript">
        if (confirm("Please Enter All Details Correct..")) {
          window.location.href = "<?= $contact_page; ?>";
        } else {
          window.location.href = "<?= $contact_page; ?>";
        }
      </script>

<?php
    }
  } catch (Exception $e) {
    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "PHPMAILER NOT WORKING OR 500 INTERNAL ERROR";
    $curlArr['Exception'] = $e->getMessage();
    $curlArr['status'] = "FAIL";
    $response = send_request($curlArr);
    //echo $e->getMessage(); //Boring error messages from anything else!
  }
}
?>
