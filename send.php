<?php
$product_image=$_POST['product_image'];
$to = strip_tags($_POST['email']);
$noofsleepers=$_POST["sleepers"];
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
                        <img src="https://plfoams.in/perfect-match/img/Mailer-banner.png" alt="dr-back-banner" width="700" height="auto" style="display: block;" />
                     </td>
                  </tr>
                  <tr>
                     <td align="left" style="padding: 10px; color: #153643; font-size: 25px; font-weight: bold; font-family: Arial, sans-serif;">
                        <h5 style="color: #3568a2;">
                           Dear, ' . strip_tags($_POST["name"]) . '
                        </h5>
                        <h5>
                           Thank you for using our perfect mattress tool and taking the time out to fill in your requirements.
                        </h5>
                        <h5>
                           Here are the mattresses that best match your requirements
                        </h5>
                     </td>
                  </tr>
                  <tr>
                     <td bgcolor="white" style="padding: 10px 20px 20px 20px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                           <tr>
                              <td align="center" width="100%">
                                 <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                       <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; padding: 5px;">
                                          <a href="https://www.facebook.com/" style="color: #ffffff;">
                                          <img src="https://plfoams.in/perfect-match/img/tuf puf.png" alt="facebook" width="200px" height="auto" style="display: block;" border="0" />
                                          </a>
                                       </td>
                                       <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                       <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; padding: 5px;">
                                          <a href="https://www.instagram.com/" style="color: #ffffff;">
                                          <img src="https://plfoams.in/perfect-match/img/tuf puf.png" alt="instagram" width="200px" height="auto" style="display: block;" border="0" />
                                          </a>
                                       </td>
                                       <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                       <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold; padding: 5px;">
                                          <a href="https://www.twitter.com/" style="color: #ffffff;">
                                          <img src="https://plfoams.in/perfect-match/img/tuf puf.png" alt="twitter" width="200px" height="auto" style="display: block;" border="0" />
                                          </a>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding: 5px; color: white; font-size: 25px; font-weight: bold; font-family: Arial, sans-serif;">
                        <a href="https://www.w3schools.com">
                            <img src="https://plfoams.in/perfect-match/img/order-now-btn.png" alt="please order button" width="300" height="auto" style="display: block;" />
                        </a>
                     </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding: 5px; color: black; font-size: 20px; font-weight: bold; font-family: Arial, sans-serif;">
                           If you have any queries please contact us.
                     </td>
                  </tr>
                  <tr>
                     <td bgcolor="white" style="padding: 10px 20px 20px 20px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                           <tr>
                              <td align="left" style="color: black; font-family: Arial, sans-serif; font-size: 16px;" width="75%">
                                 &reg; support@plfoams.in<br/>
                              </td>
                              <td align="right" width="25%">
                                 <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                       <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                          <a href="https://www.facebook.com/" style="color: #ffffff;">
                                          <img src="https://plfoams.in/perfect-match/img/facebook.png" alt="facebook" width="38" height="38" style="display: block;" border="0" />
                                          </a>
                                       </td>
                                       <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                       <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                          <a href="https://www.instagram.com/" style="color: #ffffff;">
                                          <img src="https://plfoams.in/perfect-match/img/insta.png" alt="instagram" width="38" height="38" style="display: block;" border="0" />
                                          </a>
                                       </td>
                                       <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                       <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                          <a href="https://www.twitter.com/" style="color: #ffffff;">
                                          <img src="https://plfoams.in/perfect-match/img/twitter.png" alt="twitter" width="38" height="38" style="display: block;" border="0" />
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
echo $message;
// mail($to, $subject, $message, $headers);
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