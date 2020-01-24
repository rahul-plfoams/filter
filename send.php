<?php
$product_image=$_POST['product_image'];
$to = strip_tags($_POST['email']);
$subject = 'Dr Back Mattress';

$headers = "From: support@plfoams.in\r\n";
$headers .= "Reply-To: support@plfoams.in\r\n";
// $headers .= "CC: asadwassan@plfoams.in\r\n";
// $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
// $headers .= "CC: asadwassan@plfoams.in\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demystifying Email Design</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" style="padding: 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                            <img src="https://plfoams.in/find-your-perfect-mattress/img/banner.png" alt="dr-back-banner" width="600" height="auto" style="display: block;" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody style="border: 1px solid black; display: block; padding: 5%; background-color: aliceblue; margin: 1%;">
                                <tr><td><strong>Name:</strong> </td><td>' . strip_tags($_POST["name"]) . '</td></tr>
                                <tr><td><strong>Phone:</strong> </td><td>' . strip_tags($_POST["phone"]) . '</td></tr>
                                <tr><td><strong>Email:</strong> </td><td>' . strip_tags($_POST["email"]) . '</td></tr>
                                <tr><td><strong>Address:</strong> </td><td>' . strip_tags($_POST["address"]) . '</td></tr>
                              </tbody>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody style="border: 1px solid black; display: block; padding: 5%; background-color: aliceblue; margin: 1%;">
                                <tr><td><strong>What size mattress is needed ?:</strong> </td><td>' . strip_tags($_POST["size"]) . '</td></tr>
                                <tr><td><strong>How many Sleepers ?:</strong> </td><td>' . strip_tags($_POST["sleepers"]) . '</td></tr>
                                <tr><td><strong>What type of mattress feel do you prefer?:</strong> </td><td>' . strip_tags($_POST["feel"]) . '</td></tr>
                                <tr><td><strong>What is your budget ?:</strong> </td><td>' . strip_tags($_POST["budget"]) . '</td></tr>
                              </tbody>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody style="border: 1px solid black; display: block; padding: 5%; background-color: aliceblue; margin: 1%;">
                                <tr><td><strong>Your current mattress details</strong></td></tr>
                                <tr><td><strong>Brand Name: </strong> </td><td>' . strip_tags($_POST["brand-name"]) . '</td></tr>
                                <tr><td><strong>Model Name: </strong> </td><td>' . strip_tags($_POST["model-name"]) . '</td></tr>
                                <tr><td><strong>Year of use: </strong> </td><td>' . strip_tags($_POST["year-of-use"]) . '</td></tr>
                                <tr><td><strong>Feel:</strong> </td><td>' . strip_tags($_POST["customerFeel"]) . '</td></tr>
                                <tr><td><strong>Feel:</strong> </td><td>' . strip_tags($_POST["customerRelief"]) . '</td></tr>
                              </tbody>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody style="border: 1px solid black; display: block; padding: 5%; background-color: aliceblue; margin: 1%;">
                                <tr><td><strong>What is your primary sleeping position ?:</strong> </td><td></td></tr><br>
                                <tr><td><strong>Sleeper 1: </strong> </td><td>' . strip_tags($_POST["position1"]) . '</td></tr>
                                <tr><td><strong>Sleeper 2: </strong> </td><td>' . strip_tags($_POST["position2"]) . '</td></tr>
                                <tr><td><strong>Sleeper 3: </strong> </td><td>' . strip_tags($_POST["position3"]) . '</td></tr>
                                <tr><td><strong>Sleeper 4: </strong> </td><td>' . strip_tags($_POST["position4"]) . '</td></tr>
                              </tbody>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody style="border: 1px solid black; display: block; padding: 5%; background-color: aliceblue; margin: 1%;">
                                <tr><td><strong>Do you ever wake up with bad back pain ?:</strong> </td><td></td></tr><br>
                                <tr><td><strong>Sleeper 1: </strong> </td><td>' . strip_tags($_POST["backpain1"]) . '</td></tr>
                                <tr><td><strong>Sleeper 2: </strong> </td><td>' . strip_tags($_POST["backpain2"]) . '</td></tr>
                                <tr><td><strong>Sleeper 3: </strong> </td><td>' . strip_tags($_POST["backpain3"]) . '</td></tr>
                                <tr><td><strong>Sleeper 4: </strong> </td><td>' . strip_tags($_POST["backpain4"]) . '</td></tr>
                              </tbody>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody style="border: 1px solid black; display: block; padding-left: 20%; background-color: aliceblue; margin: 1%;">
                                <tr>
                                  <td style="color: #153643; font-family: Arial, sans-serif; font-size: 25px; text-align: center; padding: 5% 0% 5% 0%;">
                                      <b>Your Perfect Mattress is !</b>
                                  </td>
                                </tr>
                                  ';
                                foreach($product_image as $image){
                                    $message.="<tr><td style='text-align: center; padding-bottom: 5%;'><img style='padding:5px' src='".$image."' /></td></tr>";
                                }
                              $message.='                              
                              </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#131c47" style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                        &reg; Dr Back Mattress 2019<br/>
                                    </td>
                                    <td align="right" width="25%">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="https://www.facebook.com/" style="color: #ffffff;">
                                                        <img src="https://cdn0.iconfinder.com/data/icons/yooicons_set01_socialbookmarks/512/social_facebook_box_white.png" alt="facebook" width="38" height="38" style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="https://www.twitter.com/" style="color: #ffffff;">
                                                        <img src="https://www.freeiconspng.com/uploads/twitter-icon-140q8bh-17.jpg" alt="twitter" width="38" height="38" style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
mail($to, $subject, $message, $headers);
?>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
  <style>
    @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
    @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
    html{
      zoom: 70%;
    }
    .site-header {
      margin: 0 auto;
      padding: 40px 0 0 !important;
      max-width: 820px;

    }
    @media only screen and (min-width: 40em){
    .site-footer {
      padding: 30px 0 25px !important;
    }
    .site-footer__fineprint {
        font-size: 1rem !important;
    }
    }
  </style>
  <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
  <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
  <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
  <header class="site-header" id="header">
   
    <img src="https://plfoams.in/exhibition/dr-back-logo.png">
    <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
  </header>

  <div class="main-content">
    <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
    <p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a lot to us, just like you do! <br> Kindly check your mail for your perfect mattress</p>
  </div>

  <footer class="site-footer" id="footer">
    <p class="site-footer__fineprint" id="fineprint">Copyright ©2019 | Dr Back Mattress | All Rights Reserved</p>
  </footer>
</body>
</html>