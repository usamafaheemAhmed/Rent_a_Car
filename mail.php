<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';
//if (isset($_GET['data'])) {

$mail = new PHPMailer(true);


try {
    $data =  $_GET['data'];
    $vehicle =  $_GET['vehicle'];
    $avg =  $_GET['avg'];
    $data2 = json_decode($data);
//        $data =  $_GET['data']['field01'];
    $data2 = get_object_vars($data2);
    $email = $data2['email'];
    $mileage = $data2['mileage'];
    $vin = $data2['vin'];
    $zip = $data2['zip'];

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.ionos.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username = 'info@empireleasingsystems.com';                         // SMTP username
    $mail->Password = '...Ayomide123..';                               // SMTP password
//        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above


//Recipients
    $mail->isHTML(true);
    $mail->setFrom('info@empireleasingsystems.com', "Empire Leasing Systems");
    $mail->addAddress('ElseMaillist1@gmail.com', 'Empire Leasing');     // Add a recipient

    $mail->Subject = 'Your Quote From Empire Leasing System';
    $mail->AddEmbeddedImage('appoinment.PNG','appoinment','appoinment.PNG', 'base64', 'image/png');
    $mail->AddEmbeddedImage('calender.PNG','calender','calender.PNG', 'base64', 'image/png');
    $mail->AddEmbeddedImage('call.png','call','call.png', 'base64', 'image/png');
    $mail->AddEmbeddedImage('earning.PNG','earning','earning.PNG', 'base64', 'image/png');
    $mail->AddEmbeddedImage('fb.png','fb','fb.png', 'base64', 'image/png');
    $mail->AddEmbeddedImage('help.png','help','help.png', 'base64', 'image/png');
    $mail->AddEmbeddedImage('ig.png','ig','ig.png', 'base64', 'image/png');
    $mail->AddEmbeddedImage('logo.png','logo','logo.png', 'base64', 'image/png');
    $mail->AddEmbeddedImage('retrieve_rate.PNG','retrieve_rate','retrieve_rate.PNG', 'base64', 'image/png');



    $mail->Body = '<!DOCTYPE html>
<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <title></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="color-scheme" content="light dark">
<meta name="supported-color-schemes" content="light dark">
    <!--[if mso]>
		<xml>
			<o:OfficeDocumentSettings>
				<o:PixelsPerInch>96</o:PixelsPerInch>
				<o:AllowPNG/>
			</o:OfficeDocumentSettings>
		</xml>
		<![endif]-->



    <style>
      * {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        padding: 0;
      }

      a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: inherit !important;
      }

      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
      }

      p {
        line-height: inherit
      }

      .desktop_hide,
      .desktop_hide table {
        mso-hide: all;
        display: none;
        max-height: 0px;
        overflow: hidden;
      }

      @media (max-width:660px) {

        .desktop_hide table.icons-inner,
        .row-2 .column-1 .block-2.image_block img,
        .row-2 .column-2 .block-2.image_block img {
          display: inline-block !important;
        }

        .icons-inner {
          text-align: center;
        }

        .icons-inner td {
          margin: 0 auto;
        }

        .row-content {
          width: 100% !important;
        }
        .pad_sides{
         width: 5% !important  ;
        }
        .pad_price{
          padding-right: 0px !important;
          padding-left: 0px !important;
        }
        .pad-tele div{
          line-height: 147% !important;
          padding-top: 20px;
            }
        .pad-gaq{
          line-height: 149% !important;
        }
        .pad-qa{
          line-height: 105% !important;
          padding-top: 0!important;
          padding-bottom: 5px !important ;
          
        }


        .mobile_hide {
          display: none;
        }

        .stack .column {
          width: 100%;
          display: block;
        }

        .mobile_hide {
          min-height: 0;
          max-height: 0;
          max-width: 0;
          overflow: hidden;
          font-size: 0px;
        }

        .desktop_hide,
        .desktop_hide table {
          display: table !important;
          max-height: none !important;
        }

        .reverse {
          display: table;
          width: 100%;
        }

        .reverse .column.first {
          display: table-footer-group !important;
        }

        .reverse .column.last {
          display: table-header-group !important;
        }

        .row-12 td.column.first>table,
        .row-12 td.column.last>table,
        .row-4 td.column.first>table,
        .row-5 td.column.first>table,
        .row-5 td.column.last>table,
        .row-6 td.column.first>table,
        .row-7 td.column.first>table,
        .row-7 td.column.last>table,
        .row-8 td.column.first>table {
          padding-left: 25px;
          padding-right: 25px;
        }

        .row-12 td.column.first .border,
        .row-12 td.column.last .border,
        .row-4 td.column.first .border,
        .row-4 td.column.last .border,
        .row-5 td.column.first .border,
        .row-5 td.column.last .border,
        .row-6 td.column.first .border,
        .row-6 td.column.last .border,
        .row-7 td.column.first .border,
        .row-7 td.column.last .border,
        .row-8 td.column.first .border,
        .row-8 td.column.last .border {
          border-top: 0;
          border-right: 0px;
          border-bottom: 0;
          border-left: 0;
        }

        .row-4 td.column.last>table,
        .row-6 td.column.last>table,
        .row-8 td.column.last>table {
          padding-left: 0;
          padding-right: 0;
        }

        .row-2 .column-1 .block-2.image_block .alignment,
        .row-2 .column-2 .block-2.image_block .alignment {
          text-align: center !important;
        }

        .row-2 .column-1,
        .row-2 .column-2 {
          padding: 20px 25px !important;
        }

        .row-3 .column-1 {
          padding: 60px 25px 40px !important;
        }

        .row-4 .column-1,
        .row-5 .column-1,
        .row-6 .column-1,
        .row-7 .column-1,
        .row-8 .column-1 {
          padding: 0 25px !important;
        }

        .row-4 .column-2 {
          padding: 40px 25px !important;
        }
      }
    </style>

    <style type="text/css" media="screen">
    /* Linked Styles */
    body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background-color: #ffffff !important; -webkit-text-size-adjust:none }
    /*a { color:#66c7ff; text-decoration:none }*/
    p { padding:0 !important; margin:0 !important } 
    img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
    .mcnPreviewText { display: none !important; }

        
    /* Mobile styles */
    @media (max-width: 480px) { .time-to-act { font-size: 26px !important; }}
    @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
      .mobile-shell { width: 100% !important; min-width: 100% !important; }
      .bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }
      
      .text-nav,
      .text-header,
      .m-center { text-align: center !important; }
      
      .center { margin: 0 auto !important; }
      .container { padding: 10px 10px 10px 10px !important }
      
      .td { width: 100% !important; min-width: 100% !important; }

      .mbr img { border-radius: 8px !important; }
      .brl  { border-radius: 10px !important; }
      .brr  { border-radius: 10px !important; }

      .text-nav { line-height: 28px !important; }
      .p30 { padding: 15px !important; }

      .m-br-15 { height: 15px !important; }
      .p30-15 { padding: 30px 15px !important; }
      .p40 { padding: 20px !important; }

      .m-td,
      .m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

      .m-block { display: block !important; }

      .fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

      .column,
      .column-dir, 
      .column-top,
      .column-empty,
      .column-empty2,
      .column-dir-top { float: left !important; width: 100% !important; display: block !important; }
      .column-empty { padding-bottom: 10px !important; }
      .column-empty2 { padding-bottom: 20px !important; }
      .content-spacing { width: 15px !important; }
    }
  </style>
  </head>
  <body style="background-color: #FFFFFF !important; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">





    <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; background-size: auto; background-image: none; background-position: top left; background-repeat: no-repeat;" width="100%">
      <tbody>
        <tr>
          <td>
            <!-- top sapce -->
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
              <tbody>
                <tr>
                  <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; border-radius: 0; color: #000000; width: 640px;" width="640">
                      <tbody>
                        <tr>
                          <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                            <div class="spacer_block" style="height:20px;line-height:20px;font-size:1px;"></div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- top bar -->
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
              <tbody>
                <tr>
                  <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #455563; border-radius: 0; color: #000000; width: 640px;" width="640">
                      <tbody>
                        <tr>
                          <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                            <div class="spacer_block" style="height:20px;line-height:20px;font-size:1px;"></div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- header -->
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
              <tbody>
                <tr>
                  <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 640px; background-color: #FFFFFF !important; background-image:url(\'https://i.imgur.com/U6k6ko8.png\');  background-size: cover; background-position: center;" width="640">
                      <tbody>
                        <tr>
                          <!-- logo -->
                          <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="41.666666666666664%">
                            <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                              <tr>
                                <td class="pad" style="width:100%;padding-right:0px;padding-left:25px;padding-top:25px;padding-bottom:25px;">
                                  <div align="center" class="alignment" style="line-height:10px">
                                    <a href="https://www.empireleasingsystems.com/" target="_blank">
                                      <img src="cid:logo" style="display: block; height: auto; border: 0; width: 250px; max-width: 100%;" width="250px" /></a>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <!-- Retrieve quote button -->
                          <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 43px; padding-right: 8px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="58.333333333333336%">
                            <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                              <tr>
                                <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:16px;padding-bottom:0px;">                                  
                                  <div align="center" class="alignment" style="line-height:10px;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:19.2px;">
                                      <a href="https://www.empireleasingsystems.com/getaquote" style="text-decoration:none;display:inline-block;color:#fff;background-color:#0003ff;border-radius:48px;width:auto;font-weight:bold;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank">
                                          <span style=" padding-top: 8px; padding-bottom: 8px;padding-left:25px;padding-right:25px;font-size:16px;display:inline-block;letter-spacing:1px;">
                                            <span dir="ltr" style="word-break: break-word; line-height: 32px;">RETRIEVE QUOTE</span>
                                          </span>
                                        </a>
                                    </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
             <!-- RETRIEVE YOUR QUOTE Heading -->
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; " width="100%">
              <tbody>
                <tr>
                  <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 640px;background-repeat: no-repeat; background-image:url(\'https://static.wixstatic.com/media/e79b12_b8bba8daebb24ce4a6b4cdb63e7a918b~mv2.jpg/v1/fill/w_723,h_535,al_c,q_85,enc_auto/e79b12_b8bba8daebb24ce4a6b4cdb63e7a918b~mv2.jpg\');  background-size: cover; background-position: center;" width="640">
                      <tbody>
                        <tr>
                          <!-- logo -->
                          <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px; background-color: #000000bd; padding-top: 35px;   padding-bottom: 35px; backdrop-filter: blur(5px);" width="41.666666666666664%">
                            <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                              <!-- RETRIEVE YOUR QUOTE -->
                              <tr>
                                <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:25px;padding-bottom:13px;">
                                  <div align="center" class="alignment" style="line-height:10px">
                                    <h2 style="margin: 0; color: #fff; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 30px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                    <span class="">RETRIEVE YOUR QUOTE</span>
                                    <span class="">WHEN YOU\'RE READY</span>
                                  </h2>
                                  <hr style="height: 3px; border: none; background: #FD5521; width: 16%;text-align:center;">
                                  </div>

                                </td>
                              </tr>
                              <!-- Get paid in 2 days -->
                              <tr>
                                <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:25px;">
                                  <div align="center" class="alignment" style="line-height:10px">
                                    <h2 style="margin: 0; color: #fff; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 30px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                    <span class="">Get paid in 2 days</span>                                   
                                  </h2>
                                  </div>
                                </td>
                              </tr>
                              <!-- SET APPOINTMENT -->
                              <tr>
                                <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:25px;">
                                  <div align="center" class="alignment" style="line-height:10px;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:19.2px;">
                                    <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                      <tr>
                                        <td class="pad_sides" style="text-align:center;width:25%;">
                                          
                                        </td>
                                        <td class="pad" style="text-align:center;width:10%;">
                                          <img width= "46px"  src="cid:calender" >
                                        </td>                                       
                                        <td class="pad-setapp" style="text-align:center;width:40%;">
                                          <a href="https://calendly.com/empireleasingsystems/30min?month=2022-10" style="text-decoration:none;display:inline-block;color:#fff;background-color:#0003ff;border-radius:48px;width:auto;font-weight:bold;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank">
                                          <span style=" padding-top: 8px; padding-bottom: 8px;padding-left:25px;padding-right:25px;font-size:16px;display:inline-block;letter-spacing:1px;">
                                            <span dir="ltr" style="word-break: break-word; line-height: 32px;">SET APPOINTMENT</span>
                                          </span>
                                        </a>
                                        </td>
                                        <td class="pad_sides" style="text-align:center;width:25%;">
                                          
                                        </td>
                                      </tr>
                                    </table>
                                      
                                    </div>
                                </td>
                              </tr>
                            </table>
                          </td>                          
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>

             <!-- OFFER DETAILS -->        
         
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
              <tbody>
                <tr>
                  <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; width: 640px; background-color: #FFFFFF !important; background-image:url(\'https://i.imgur.com/U6k6ko8.png\');  background-size: cover; background-position: center; " width="640">
                      <tbody>
                        <tr>
                          <!-- logo -->
                          <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 0px; padding-right: 0px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="41.666666666666664%">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; width: 640px;" width="640">
                              <tbody>
                                <tr>
                                  <!-- OFFER DETAILS -->
                                  <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 0px; padding-right: 0px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px; padding-top: 35px;   padding-bottom: 35px; " width="41.666666666666664%">
                                    <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                      <!-- OFFER DETAILS -->
                                      <tr>
                                        <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:25px;padding-bottom:13px;">
                                          <div align="center" class="alignment" style="line-height:10px">
                                            <h2 style="margin: 0;  direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 30px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                            <span style="color: #0003FF !important;"  class="dark-text">OFFER DETAILS</span>                                                   
                                          </h2>
                                          <hr style="height: 3px; border: none; background: #FD5521; width: 16%;text-align:center;">
                                          </div>

                                        </td>
                                      </tr>
                                      <!-- price and model of vehicle -->
                                      <tr>
                                        <td class="pad_price" style="width:100%;padding-right:90px;padding-left:90px;padding-top:0px;padding-bottom:25px;">
                                          <div align="center" class="alignment" style="line-height:10px;padding-top:25px; padding-bottom: 30px; border: 1.5px #FD5521 solid; background-color: #D3DCE0;border-radius:30px;">
                                            <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                              <tr>
                                                <td class="pad" style="text-align:center;width:100%;">
                                                  <h2 style="margin: 0; color: #FD5521; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 30px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                    <!-- price of vehicle -->
                                                  <span class="">$ '.$avg.'</span>
                                                </h2>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="pad" style="text-align:center;width:100%; padding-top: 15px;">
                                                  <h2 style="margin: 0; color: #1B1B1B !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 20px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                    <!-- model of vehicle -->
                                                    <span class="">'.$vehicle.'</span>
                                                  </h2>
                                                </td>
                                                <td class="pad" style="text-align:center;width:100%; padding-top: 15px;">
                                                  <h2 style="margin: 0; color: #1B1B1B !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 20px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                    <!-- model of vehicle -->
                                                    <span class="">Zip: '.$zip.'</span>
                                                  </h2>
                                                </td>
                                                <td class="pad" style="text-align:center;width:100%; padding-top: 15px;">
                                                  <h2 style="margin: 0; color: #1B1B1B !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 20px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                    <!-- model of vehicle -->
                                                    <span class="">'.$mileage.' Miles</span>
                                                  </h2>
                                                </td>
                                              </tr>
                                            </table> 
                                          </div>
                                        </td>
                                      </tr>                        
                                    </table>
                                  </td>                          
                                </tr>
                              </tbody>
                            </table>                           
                          </td>  
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>

             <!-- HOW IT WORKS -->
              <!-- HOW IT WORKS heading -->

            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
              <tbody>
                <tr>
                  <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 640px; background-color: #FFFFFF !important; background-image:url(\'https://i.imgur.com/U6k6ko8.png\');  background-size: cover; background-position: center;" width="640">
                      <tbody>
                        <tr>
                          <!-- logo -->
                          <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 0px; padding-right: 0px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="41.666666666666664%">

                            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0;  width: 640px; border-top: 4px solid #081D2F;" width="640">
                              <tbody>
                                <tr>
                                  <!-- HOW IT WORKS -->
                                  <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px; padding-top: 20px;   padding-bottom: 0px; " width="41.666666666666664%">
                                    <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                      <tbody>
                                        <!--HOW IT WORKS -->
                                        <tr>
                                          <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:25px;padding-bottom:13px;">
                                            <div align="center" class="alignment" style="line-height:10px">
                                              <h2 style="margin: 0; color: #0003FF !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 30px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                              <span style="color: #0003FF !important;" >HOW IT WORKS</span>                                     
                                            </h2>
                                            <hr style="height: 3px; border: none; background: #FD5521 !important; width: 16%;text-align:center;">
                                            </div>

                                          </td>
                                        </tr> 
                                      </tbody>                                                       
                                    </table>
                                  </td>                          
                                </tr>
                              </tbody>
                            </table>   
                          </td>  
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>


            <!-- three sections -->

            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
              <tbody>
                <tr>
                  <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 640px; background-color: #FFFFFF !important; background-image:url(\'https://i.imgur.com/U6k6ko8.png\');  background-size: cover; background-position: center;" width="640">
                      <tbody>
                        <tr>
                          <!-- logo -->
                          <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: px; padding-right: px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="41.666666666666664%">
                             <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 640px;" width="640">
                              <tbody>
                                <tr>
                                  <td width="5%"></td>
                                  <!-- RETRIEVE YOUR RATE -->
                                 
                                  <td class="column column-1" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;padding-left: 0px;padding-right: 0px;vertical-align: middle;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px; padding-top: 0; padding-bottom: 25px; " width="30%">
                                     <div align="center" class="alignment" style="line-height:10px;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:19.2px;">
                                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; " width="100%">
                                        <tbody>
                                          <tr>
                                            <td>
                                              <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 100%;background-repeat: no-repeat; background-image:url(\'https://i.imgur.com/P1j7u2g.png\');  background-size: contain; background-position: center;" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;padding-left: 11px;padding-right: 28px;vertical-align: middle;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;padding-top: 36px;padding-bottom: 36px;" width="41.666666666666664%">
                                                      <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                        <!-- RETRIEVE rate icon -->
                                                        <tbody><tr>
                                                          <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:13px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <img width="70px" src="cid:retrieve_rate">
                                                            </div>
                                                          </td>
                                                        </tr>
                                                        <!-- RETRIEVE YOUR RATE -->
                                                        <tr>
                                                          <td class="pad" style="width:100%;/* padding-right: 11px; */padding-left:0px;padding-top:0px;padding-bottom:25px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <h2 style="margin: 0; color: #0003FF !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 12px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                              <span style="word-break: break-word;">RETRIEVE YOUR RATE</span>                                   
                                                            </h2>
                                                            </div>
                                                          </td>
                                                        </tr>
                                                        <!-- It takes less than 2 minutes -->
                                                        <tr>
                                                          <td class="pad" style="width:100%; padding-right: 5px; padding-left: 5px; padding-top:0px;padding-bottom:46px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <h2 style="margin: 0; color: #0003FF !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 10px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                              <span style="word-break: break-word;">It takes less than 2 minutes</span>                             
                                                            </h2>
                                                            </div>
                                                          </td>
                                                        </tr>                                                
                                                      </tbody></table>
                                                    </td>                          
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>



                                    </div>
                                  </td>
                                  <!-- SCHEDULE APPOINTMENT -->
                                 
                                  <td class="column column-1" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;padding-left: 0px;padding-right: 0px;vertical-align: middle;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px; padding-top: 0; padding-bottom: 25px; " width="30%">
                                     <div align="center" class="alignment" style="line-height:10px;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:19.2px;">
                                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; " width="100%">
                                        <tbody>
                                          <tr>
                                            <td>
                                              <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 100%;background-repeat: no-repeat; background-image:url(\'https://i.imgur.com/P1j7u2g.png\');  background-size: contain; background-position: center;" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;padding-left: 11px;padding-right: 28px;vertical-align: middle;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;padding-top: 36px;padding-bottom: 36px;" width="41.666666666666664%">
                                                      <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                        <!-- SCHEDULE APPOINTMENT icon -->
                                                        <tbody><tr>
                                                          <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:13px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <img width="70px" src="cid:appoinment">
                                                            </div>
                                                          </td>
                                                        </tr>
                                                        <!-- SCHEDULE APPOINTMENT-->
                                                        <tr>
                                                          <td class="pad" style="width:100%;/* padding-right: 11px; */padding-left:0px;padding-top:0px;padding-bottom:25px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <h2 style="margin: 0; color: #0003FF !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 12px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                              <span style="word-break: break-word;">SCHEDULE APPOINTMENT</span>
                                                            </h2>
                                                            </div>
                                                          </td>
                                                        </tr>
                                                        <!-- It takes less than 2 minutes -->
                                                        <tr>
                                                          <td class="pad" style="width:100%; padding-right: 5px; padding-left: 5px; padding-top:0px;padding-bottom:46px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <h2 style="margin: 0; color: #0003FF !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 10px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                              <span style="word-break: break-word;">Set up an appointment to pick up your vehicle.</span>                             
                                                            </h2>
                                                            </div>
                                                          </td>
                                                        </tr>                                                
                                                      </tbody></table>
                                                    </td>                          
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>



                                    </div>
                                  </td>
                                  
                                  <!-- RETRIEVE YOUR RATE -->
                                 
                                  <td class="column column-1" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;padding-left: 0px;padding-right: 0px;vertical-align: middle;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px; padding-top: 0; padding-bottom: 25px; " width="30%">
                                     <div align="center" class="alignment" style="line-height:10px;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:19.2px;">
                                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; " width="100%">
                                        <tbody>
                                          <tr>
                                            <td>
                                              <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 100%;background-repeat: no-repeat; background-image:url(\'https://i.imgur.com/P1j7u2g.png\');  background-size: contain; background-position: center;" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td class="column column-1" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;font-weight: 400;text-align: left;padding-left: 11px;padding-right: 28px;vertical-align: middle;border-top: 0px;border-right: 0px;border-bottom: 0px;border-left: 0px;padding-top: 36px;padding-bottom: 36px;" width="41.666666666666664%">
                                                      <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                        <!-- START EARNING! icon -->
                                                        <tbody><tr>
                                                          <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:13px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <img width="70px" src="cid:earning">
                                                            </div>
                                                          </td>
                                                        </tr>
                                                        <!-- START EARNING! -->
                                                        <tr>
                                                          <td class="pad" style="width:100%;/* padding-right: 11px; */padding-left:0px;padding-top:0px;padding-bottom:25px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <h2 style="margin: 0; color: #0003FF !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 12px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                              <span style="word-break: break-word;">START EARNING!</span>                                   
                                                            </h2>
                                                            </div>
                                                          </td>
                                                        </tr>
                                                        <!-- It takes less than 2 minutes -->
                                                        <tr>
                                                          <td class="pad" style="width:100%; padding-right: 5px; padding-left: 5px; padding-top:0px;padding-bottom:46px;">
                                                            <div align="center" class="alignment" style="line-height:10px">
                                                              <h2 style="margin: 0; color: #0003FF !important; direction: ltr; font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif; font-size: 10px; font-weight: bold; letter-spacing: 2px; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;">
                                                              <span style="word-break: break-word;">We will inspect your car and pay you on the spot</span>                             
                                                            </h2>
                                                            </div>
                                                          </td>
                                                        </tr>                                                
                                                      </tbody></table>
                                                    </td>                          
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>



                                    </div>
                                  </td>
                                  <td width="5%"></td>        
                                </tr>
                              </tbody>
                            </table>                           
                          </td>                            
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>

            
          

            <!-- Questions about your quote? -->
           
              <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;padding-bottom: 0;" width="100%">
                <tbody>
                  <tr>
                    <td>
                      <table style="vertical-align: middle; padding-top: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto; background-color: #0003ff; border-radius: 0; color: #000000; width: 640px;" align="center"  border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation"  width="640">
                        <tbody>
                          <!-- QUESTIONS ABOUT YOUR QUOTE? -->
                          <tr>
                            <!-- space -->
                            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left;  vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="8%">                              
                            </td>
                           
                            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 0px; padding-right: 0px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="90%">
                              <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                <tr>
                                   <!-- help girl image -->
                                  <td  class="pad" style="width:15%;padding-right:0px;padding-left:0px;padding-top:0;padding-bottom:0;">                            
                                      <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:bold;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                          <tr>                                          
                                            <!-- help girl image -->
                                            <td class="pad" style="width:10%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0;">                            
                                                <img width="70px" src="cid:help">
                                            </td>                                          
                                          </tr>
                                        </table>
                                    </div>                                  
                                  </td>
                                   <!-- QUESTIONS ABOUT YOUR QUOTE? text -->
                                  <td class="pad" style="width:90%;padding-right:0px;padding-left:0px;padding-top:3px;padding-bottom:0px;">                            
                                      <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:bold;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px; margin: auto;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                          <tr>
                                            <!-- QUESTIONS ABOUT YOUR QUOTE? -->
                                            <td colspan="3"class="pad-qa" style="width:100%;padding-right:0px;padding-left:0px;padding-top:25px;padding-bottom:0px;">
                                                <div align="center" class="alignment" style="line-height:10px;color:#fff;;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:bold;letter-spacing:0px;line-height:118%;text-align:center;mso-line-height-alt:19.2px;">
                                                  <p style="margin: 0;">QUESTIONS ABOUT YOUR QUOTE?</p>
                                                <p></p>
                                              </div>                                  
                                            </td>                                            
                                          </tr>                                            
                                          <tr>
                                            <!-- Got a question? -->
                                            <td colspan="3"class="pad-gaq" style="width:100%;padding-right:0px;padding-left:0px;padding-top:10px;padding-bottom:0px;">
                                                <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:20px;font-weight:bold;letter-spacing:0px;line-height:00%;text-align:center;mso-line-height-alt:19.2px;">
                                                  <p style="margin: 0;">Got a question?</p>
                                                <p></p>
                                              </div>                                  
                                            </td>                                            
                                          </tr>


                                          
                                          <tr>
                                            
                                            <td colspan="3"class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">
                                                <div align="center" class="alignment" style="line-height:10px;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px;">
                                                  <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                    <tbody><tr>
                                                      <td class="pad" style="text-align:center;width:2%;">
                                                        
                                                      </td>
                                                      <td class="pad" style="text-align:right;width:16%;padding-bottom: 16px;">
                                                        <img width="30px" src="cid:call" style="border-radius: 30px;
">
                                                        <!-- <img width="30px" src="https://i.imgur.com/kMIWAst.png"> -->
                                                      </td>
                                                      <td class="pad-tele" style="text-align:center;width:66%;">
                                                        <div align="center" class="alignment" style="line-height:0px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:19px;font-weight:bold;letter-spacing:0px;line-height:00%;text-align:center;mso-line-height-alt:19.2px;">
                                                            <p style="margin: 0;">Give us a call at <a style="color:#fff; text-decoration: none;"  href="tel:+1(888)565-5761">(888) 565-5761</a></p>
                                                          <p></p>
                                                        </div>   
                                                      </td>
                                                      <td class="pad" style="text-align:center;width:15%;">
                                                        
                                                      </td>
                                                    </tr>
                                                  </tbody></table>
                                                    
                                                  </div>                             
                                            </td>                                            
                                          </tr>                                        
                                        </table>
                                    </div>                                  
                                  </td>
                                </tr>
                              </table>
                            </td>
                             <!-- space -->
                            <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="5%">
                              <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                <tr>
                                  <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">
                                    <div align="center" class="alignment" style="line-height:10px">
                                     
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table> 


              <!-- Footer -->
           
              <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;padding-bottom: 0px;" width="100%">
                <tbody>
                  <tr>
                    <td>
                      <table style="vertical-align: middle; padding-top: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto; background-color: #282626; border-radius: 0; color: #000000; width: 640px;" align="center"  border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation"  width="640">
                        <tbody>
                          <tr>
                            <!-- space -->
                            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left;  vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="8%">                              
                            </td>
                           
                            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 0px; padding-right: 0px; padding-bottom: 30px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="90%">
                              <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                <tr> 
                                  <td class="pad" style="width:90%;padding-right:0px;padding-left:0px;padding-top:3px;padding-bottom:0px;">                            
                                      <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:bold;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px; margin: auto;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                          <tr>
                                            <!-- QUESTIONS ABOUT YOUR QUOTE? -->
                                            <td colspan="3"class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:25px;padding-bottom:0px;">
                                                <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:bold;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px;">
                                                  <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                    <tr>
                                                      <!--space -->
                                                      <td class="pad" style="width:45%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">                            
                                                          <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:bold;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:19.2px;">
                                                          
                                                        </div>                                  
                                                      </td>                                          
                                                      <!-- fb -->
                                                      <td class="pad" style="width:5%;padding-right:0px;padding-left:0px;padding-top:0;padding-bottom:00px;">                            
                                                          <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:bold;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px;">
                                                         <a href="#"> <img width="40px" src="cid:fb"></a>
                                                        </div>                                  
                                                      </td>
                                                      <!-- ig -->
                                                      <td class="pad" style="width:5%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">
                                                          <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:bold;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px;">
                                                         <a href="#">  <img width="40px" src="cid:ig"></a>
                                                        </div>                                  
                                                      </td>                                            
                                                      <!--space -->
                                                      <td class="pad" style="width:45%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">
                                                      </td> 
                                                    </tr>
                                                  </table>
                                              </div>
                                              <hr style="height: 2px; border: none; background: #FD5521; width: 40%;text-align:center;">                                  
                                            </td>                                            
                                          </tr>   
                                          <!-- footer menu -->                                         
                                          <tr>                                            
                                            <td colspan="3"class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:10px;padding-bottom:30px;">
                                                <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:24px;font-weight:400;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px; margin: auto;">
                                                  <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                    
                                                    <tr>
                                                      <td class="pad" style="width:25%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">                            
                                                          <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:12px;font-weight:400;letter-spacing:0px;line-height:00%;text-align:center;mso-line-height-alt:19.2px;">
                                                           <a style="text-decoration:none; color: #fff;" href="https://www.empireleasingsystems.com/about-us"> <p style="margin: 0;">About Us</p> </a>
                                                        </div>                                  
                                                      </td>
                                                      <td class="pad" style="width:2%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">                            
                                                          <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:12px;font-weight:400;letter-spacing:0px;line-height:00%;text-align:center;mso-line-height-alt:19.2px;">
                                                           <p style="margin: 0;">|</p>
                                                        </div>                                  
                                                      </td>
                                                     
                                                      <td class="pad" style="width:25%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px; border-left: 2px solid red;">                            
                                                          <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:12px;font-weight:400;letter-spacing:0px;line-height:00%;text-align:center;mso-line-height-alt:19.2px;">
                                                            <a style="text-decoration:none; color: #fff;" href="https://www.empireleasingsystems.com/solutions"><p style="margin: 0;">Solutions</p> </a>
                                                        </div>                                 
                                                      </td>

                                                      <td class="pad" style="width:2%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">                            
                                                          <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:12px;font-weight:400;letter-spacing:0px;line-height:00%;text-align:center;mso-line-height-alt:19.2px;">
                                                           <p style="margin: 0;">|</p> 
                                                        </div>                                  
                                                      </td>
                                                      
                                                      <td class="pad" style="width:25%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">                            
                                                          <div align="center" class="alignment" style="line-height:10px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:12px;font-weight:400;letter-spacing:0px;line-height:00%;text-align:center;mso-line-height-alt:19.2px;">
                                                           <a href="https://www.empireleasingsystems.com/contact" style="text-decoration:none; color: #fff;"> <p style="margin: 0;">Contact Us</p> </a>
                                                        </div>                                  
                                                      </td>
                                                    </tr>
                                                  </table>
                                              </div>                               
                                            </td>                                            
                                          </tr> 
                                          <!-- address                                          -->
                                          <tr>                                            
                                            <td colspan="3"class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;">
                                                <div align="center" class="alignment" style="line-height:10px;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;letter-spacing:0px;line-height:0%;text-align:center;mso-line-height-alt:19.2px;">
                                                  <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                    <tbody>
                                                      <tr>
                                                        <td class="pad" style="text-align:center;width:10%;">
                                                          
                                                        </td>                                                      
                                                        <td class="pad" style="text-align:center;width:80%;">
                                                          <div align="center" class="alignment" style="line-height:0px;color:#fff;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:11px;font-weight:400;letter-spacing:0px;line-height:180%;text-align:center;mso-line-height-alt:19.2px;">
                                                              <p style="margin: 0;">300 E. Lombard Street,<br> Suite 840, Baltimore, MD 21202 <br> &copy; 2022 By Empire Leasing Systems</p>
                                                            
                                                          </div>   
                                                        </td>
                                                        <td class="pad" style="text-align:center;width:10%;">                                                          
                                                        </td>
                                                      </tr>  
                                                    </tbody>                                                
                                                  </table>
                                                </div>                             
                                            </td>                                            
                                          </tr>                                        
                                        </table>
                                    </div>                                  
                                  </td>
                                </tr>
                              </table>
                            </td>
                             <!-- space -->
                            <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="5%">                              
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table> 

              <!-- bottom -->
              <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;padding-bottom: 0;" width="100%">
                <tbody>
                  <tr>
                    <td>
                      <table style="vertical-align: middle; padding-top: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto; border-radius: 0; color: #000000; width: 640px;" align="center"  border="0" cellpadding="0" cellspacing="0" class="row-content" role="presentation"  width="640">
                        <tbody>
                          <tr>
                            <!-- space -->
                            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left;  vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="5%">                              
                            </td>
                           <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left;  vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="90%"> 
                               <div align="center" class="alignment" style="line-height:0px;color:#000;direction:ltr;font-family: \'Open Sans\', Helvetica Neue, Helvetica, sans-serif;font-size:11px;font-weight:400;letter-spacing:0px;line-height:180%;text-align:center;mso-line-height-alt:19.2px;">
                                    <p style="margin: 0;">You have received this email as a registered user of <a style="color:#000;" href="https://www.empireleasingsystems.com/">empireleasingsystems.com</a> can <a style="color:#000;" href="#">unsubscribe</a> from these emails here.</p>
                                  
                                </div>                             
                            </td>                           
                             <!-- space -->
                            <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="5%">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table> 
          </td>
        </tr>
      </tbody>
    </table>
    <!-- End -->
  </body>
</html>';



    $mail->send();
    $arr[] = array("message"=>"Message has been sent");
    echo json_encode($arr);
} catch (Exception $e) {
    $arr[] = array("message"=>"Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    echo json_encode($arr);
}

