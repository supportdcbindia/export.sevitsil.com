<?php

// ================== ERROR + HEADERS ==================
error_reporting(0);
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
// header("Access-Control-Allow-Headers: Content-Type, Authorization");

// if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//     http_response_code(200);
//     exit();
// }

header("Content-Type: application/json");

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// echo "<pre>"; print_r($_POST);

// ================== LOG ==================
$myfile = fopen("logs.txt", "a+") or die("Unable to open file!");
fwrite($myfile, json_encode($_SERVER));
fwrite($myfile, json_encode($_POST));

// ================== API SPAM CHECK ==================
function send_request($data) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://dcbindia.in/akismetcurl/akismet_check.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
    ));
    $response = json_decode(curl_exec($curl));
    curl_close($curl);
    return $response;
}

// ================== INPUT (SECOND CODE FIELDS) ==================
$name     = htmlspecialchars(trim($_POST['name']));
$email    = htmlspecialchars(trim($_POST['email']));
$message  = htmlspecialchars(trim($_POST['requirements']));
$country     = htmlspecialchars(trim($_POST['country']));
$phone    = htmlspecialchars(trim($_POST['phone']));
$company     = htmlspecialchars(trim($_POST['company']));
$product_name     = htmlspecialchars(trim($_POST['product_name']));
$page_url     = htmlspecialchars(trim($_POST['page_url']));

$primaryEmail = "global@sevitsil.com";
$primaryDomain = "https://export.sevitsil.com";

$logData = [
    "time"     => date("Y-m-d H:i:s"),
    "ip"       => $_SERVER['REMOTE_ADDR'],
    "name"     => $name,
    "email"    => $email,
    "phone"    => $phone,
    "company_name"  => $company,
    "country"     => $country,
    "message"  => $message,
    "product_name"  => $product_name,
    "page_url"  => $page_url,
    "user_agent" => $_SERVER['HTTP_USER_AGENT']
];

$logFile = fopen("inquiry-log.txt", "a+");
fwrite($logFile, json_encode($logData) . PHP_EOL);
fclose($logFile);

// ================== API CHECK ==================
$curlArr = array_merge($_POST, $_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
$curlArr['save'] = false;

$response = send_request($curlArr);

if ($response->result) {
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "API FAIL";
    $curlArr['status'] = "FAIL";
    send_request($curlArr);

    echo json_encode(["success" => false]);
    exit;
}

// ================== REQUIRED VALIDATION ==================
if (
    empty($name) ||
    empty($email) ||
    empty($phone)
) {
    echo json_encode(["success" => false]);
    exit;
}

// ================== EMAIL VALIDATION ==================
if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
    echo json_encode(["success" => false]);
    exit;
}

// ================== JUNK CHECK ==================
preg_match_all('#\bhttps?://#', $message, $links);
preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $emails);

if (count($links[0]) > 0 || count($emails[0]) > 0) {
    echo json_encode(["success" => false]);
    exit;
}


$form_type = htmlspecialchars(trim($_POST['form_type']));

// ================== EMAIL BODY ==================
if ($form_type == "catalogue") {

    $subject = "Catalogue Request From Export SEVITSIL Website";

    $message_body = '
    <html>
    <body>
    <div style="font-family:arial;font-size:12px;border:10px solid #ccc;width:600px;padding:20px;margin:auto;">
    <table border="1" cellpadding="5" style="width:100%;border-collapse:collapse;">
    <tr><td colspan="2"><b>Catalogue Request Details</b></td></tr>

    <tr><td>Name:</td><td><b>' . $name . '</b></td></tr>
    <tr><td>Company Name:</td><td><b>' . $company . '</b></td></tr>
    <tr><td>Email:</td><td><b>' . $email . '</b></td></tr>
    <tr><td>Mobile:</td><td><b>' . $phone . '</b></td></tr>
    <tr><td>Country:</td><td><b>' . $country . '</b></td></tr>';

    if (!empty($product_name) && !empty($page_url)) {
        $message_body .= '
        <tr>
            <td>Product Name:</td>
            <td><b>' . $product_name . '</b></td>
        </tr>
        <tr>
            <td>Page URL:</td>
            <td><b>' . $page_url . '</b></td>
        </tr>';
    }

    $message_body .= '

    </table>
    </div>
    </body>
    </html>';
} else {

    $subject = "Lead From Export SEVITSIL Website";

    $message_body = '
    <html>
    <body>
    <div style="font-family:arial;font-size:12px;border:10px solid #ccc;width:600px;padding:20px;margin:auto;">
    <table border="1" cellpadding="5" style="width:100%;border-collapse:collapse;">
    <tr><td colspan="2"><b>Enquiry Details</b></td></tr>

    <tr><td>Name:</td><td><b>' . $name . '</b></td></tr>
    <tr><td>Company Name:</td><td><b>' . $company . '</b></td></tr>
    <tr><td>Email:</td><td><b>' . $email . '</b></td></tr>
    <tr><td>Mobile:</td><td><b>' . $phone . '</b></td></tr>
    <tr><td>Country:</td><td><b>' . $country . '</b></td></tr>
    <tr><td>Message:</td><td><b>' . $message . '</b></td></tr>';

    if (!empty($product_name) && !empty($page_url)) {
        $message_body .= '
        <tr>
            <td>Product Name:</td>
            <td><b>' . $product_name . '</b></td>
        </tr>
        <tr>
            <td>Page URL:</td>
            <td><b>' . $page_url . '</b></td>
        </tr>';
    }

    $message_body .= '

    </table>
    </div>
    </body>
    </html>';
}

// ================== SMTP2GO ==================
$apiKey = "api-94011E99D06349459D4244FFCF786FDA";

$emailArr = array("dcbindia@dcbindia.in", "dcb@dcbindia.in");

$toEmails = [];
$bccEmails = [];

if (in_array($email, $emailArr)) {
    $toEmails[] = "dcbrainsinquiry@gmail.com";
} else {
    $toEmails[] = $primaryEmail;
    $toEmails[] = "kunj.shah@sevitsil.com";
    $toEmails[] = "parth.patel@sevitsil.com";
    $bccEmails[] = "dcbrainsinquiry@gmail.com";
}

$data = [
    "api_key"   => $apiKey,
    "to"        => $toEmails,
    "sender"    => $primaryEmail,
    "subject"   => $subject,
    "html_body" => $message_body,
    "text_body" => strip_tags($message_body),
    "reply_to"  => $email
];

if (!empty($bccEmails)) {
    $data["bcc"] = $bccEmails;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.smtp2go.com/v3/email/send");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$result = json_decode($response, true);

// ================== RESPONSE ==================
if (isset($result['data']['succeeded']) && $result['data']['succeeded'] > 0) {

    // ================== AUTO REPLY TO CLIENT ==================
    $auto_subject = "Thank You for Your Inquiry";

    $auto_message = '
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
    <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=windows-1250">
        <meta name="generator" content="PSPad editor, www.pspad.com">
        <title></title>
        <style type="text/css">span.go{display:none} .go{display:none}</style>
    </head>
    <body>
        <p>Dear "<b>' . $name . '</b>",</p>

        <p>Greetings From<br>
        <b>SEVITSIL - Solutions in Silicone, INDIA.</b></p>

        <p>
        Thank you for your inquiry on our corporate website regarding <b>' . $product_name . '</b>. We sincerely appreciate your keen interest in our products and look forward to meeting your requirements with novelty silicone products and excellent service.
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
        <a href="'.$primaryDomain.'" target="_blank"><b>www.sevitsil.com</b></a>
        </p>

        <p>Thank You<br>
        Sevitsil Export Team</p>

        <p>
        <img src='.$primaryDomain.'/50-years-2.webp" alt="50 Years of Excellence" style="max-width: 100%; height: auto;">
        </p>
    </body>
    </html>
    ';

    $autoData = [
        "api_key"   => $apiKey,
        "to"        => [$email],
        "sender"    => $primaryEmail,
        "subject"   => $auto_subject,
        "html_body" => $auto_message,
        "text_body" => strip_tags($auto_message)
    ];

    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, "https://api.smtp2go.com/v3/email/send");
    curl_setopt($ch2, CURLOPT_POST, true);
    curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($autoData));
    curl_setopt($ch2, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch2);

    // ================== FINAL RESPONSE ==================
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
