<?php

require_once 'Swiftmailer/swift_required.php';
require_once(dirname(__FILE__).'/../../vendor/autoload.php');



class MailerHandler
{
    private $transport;

    public function __construct()
    {
        $this->transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername('jarnielcataluna@gmail.com')
            ->setPassword('jarniel123');
    }

    public function sendMail($data)
    {
        $mailer = Swift_Mailer::newInstance($this->transport);
//        $logger = new \Swift_Plugins_Loggers_EchoLogger();
//        $mailer->registerPlugin(new \Swift_Plugins_LoggerPlugin($logger));

        $body = '';
        $body .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
        $body .= '<html xmlns="http://www.w3.org/1999/xhtml">';
        $body .= '    <head>';
        $body .= '        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
        $body .= '        <meta name="format-detection" content="telephone=no">';
        $body .= '        <title>CW Home Depot</title>';
        $body .= '        <style type="text/css">';
        $body .= '            body {';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            .ReadMsgBody {';
        $body .= '                width: 100%;';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            .ExternalClass {';
        $body .= '                width: 100%;';
        $body .= '                background-color: #ffffff;';
        $body .= '            }';
        $body .= '            table {';
        $body .= '                border-collapse: collapse;';
        $body .= '            }';
        $body .= '            @media only screen and (max-width: 600px) {';
        $body .= '                .deviceWidth {';
        $body .= '                    width: 100% !important;';
        $body .= '                    height: auto !important;';
        $body .= '                    padding: 0;';
        $body .= '                }';
        $body .= '                .center {';
        $body .= '                    text-align: center!important;';
        $body .= '                }';
        $body .= '                body[yahoo] .deviceWidth {';
        $body .= '                    width: 100% !important;';
        $body .= '                    height: auto !important;';
        $body .= '                    padding: 0;';
        $body .= '                }';
        $body .= '                body[yahoo] .center {';
        $body .= '                    text-align: center!important;';
        $body .= '                }';
        $body .= '                body[yahoo] .min-width-auto {';
        $body .= '                    min-width: 320px !important;';
        $body .= '                }';
        $body .= '                body[yahoo] .mobile-padding {';
        $body .= '                    padding-left: 15px !important;';
        $body .= '                    padding-right: 15px !important;';
        $body .= '                }';
        $body .= '            }';
        $body .= '            a { color:#f15a29;  outline:none;}';
        $body .= '            body{ font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; color: #1b1b1b;}';
        $body .= '            p { font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height:18px; color: #1b1b1b; padding: 0px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none;}';
        $body .= '            * {-webkit-text-size-adjust: none}';
        $body .= '            strong {font-weight: bold;}';
        $body .= '            img { outline:none; border:none;}';
        $body .= '        </style>';
        $body .= '    </head>';
        $body .= '    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: Helvetica, Arial, sans-serif;">';
        $body .= '        <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">';
        $body .= '            <tr>';
        $body .= '                <td width="100%" valign="top"  bgcolor="#ffffff" style="min-width:600px;" class="min-width-auto">';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="deviceWidth">';
        $body .= '                        <tr>';
        $body .= '                            <td>';
        $body .= '                                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="deviceWidth">';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:0;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/banner.jpg" alt="" width="100%" style=="display:block;" class="deviceWidth"></td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="deviceWidth">';
        $body .= '                        <tr>';
        $body .= '                            <td class="mobile-padding" style="padding: 20px 30px 10px 30px;">';
        $body .= '                                <h1 style="font-family: Arial, Helvetica, sans-serif; color:#f15a29; font-size:34px; line-height: 36px; mso-table-lspace:0; mso-table-rspace:0; margin:5px 0 5px 0; mso-line-height-rule:exactly; text-align:center; font-weight:bold; ">You\'ve registered succesfully!</h1>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="deviceWidth">';
        $body .= '                        <tr>';
        $body .= '                            <td style="padding: 20px 20px 33px 33px;" class="mobile-padding">';
        $body .= '                                <table width="240" cellpadding="0" cellspacing="0" align="left" valign="center" style="border: 2px dashed #f15a29;" class="deviceWidth">';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:5px; text-align: center;">';
        $body .= '                                            <h2 style="font-family: Arial, Helvetica, sans-serif; color:#58595b; font-size:18px; line-height: 24px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 5px 0; mso-line-height-rule:exactly; text-align:center; font-weight:normal; text-align: center; text-transform: uppercase; ">Get 10% Discount </h2>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding: 0 0px 20px 0;" align="left">';
        $body .= '                                            <table width="190" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#de0013">';
        $body .= '                                                <tr>';
        $body .= '                                                    <td style="padding:10px 10px; background: #FFFFFF;" align="center">';
        $body .= '<img src="https://' . $_SERVER['HTTP_HOST'] . '/barcode-image.php?code='. $data['code'] . '" alt="'. $data['code'] . '" style="width:100%;">';
        $body .= '                                                    </td>';
        $body .= '                                                </tr>';
        $body .= '                                            </table>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                                <table width="280" cellpadding="0" cellspacing="0"  valign="center" align="right" class="deviceWidth">';
        $body .= '                                   <tr>';
        $body .= '                                       <td>';
        $body .= '                                            <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:14px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:8px 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">Present this coupon upon purchase at <br><span style="color:#ed5523;">any CW Home Depot branch.</span></p>';
        $body .= '                                            <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:14px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">Valid for a one-time transaction only from <br><span style="color:#ed5523;">October 21 - 23, 2016.</span></p>';
        $body .= '                                       </td>';
        $body .= '                                   </tr>';
        $body .= '                               </table>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="deviceWidth">';
        $body .= '                        <tr>';
        $body .= '                            <td class="mobile-padding" style="padding: 20px 30px;">';
        $body .= '                                <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">Hi [' . $data['name'] . '],</p>';
        $body .= '                                <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">Thank you for signing up!</p>';
        $body .= '                                <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">As promised, you will be getting discounts on any CW Home Depot item. Just present this e-mail confirmation with the attached coupon and you may claim yours on any day between Friday, October 21, 2016 to Sunday, October 23, 2016. </p>';
        $body .= '                                <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">Please be reminded that your discount code is valid for one-time use only. </p>';
        $body .= '                                <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">Happy shopping!  </p>';
        $body .= '                                <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">Looking forward to building and improving more homes. </p>';
        $body .= '                                <img src="https://' . $_SERVER['HTTP_HOST'] . '/images/logo.png" alt="">';
        $body .= '                                <p style="font-family: Arial, Helvetica, sans-serif; color:#414042; font-size:15px; line-height: 18px; mso-table-lspace:0; mso-table-rspace:0; margin:10px 0 15px 0; mso-line-height-rule:exactly; text-align:left; font-weight:normal;">CW Home Depot</p>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#f15a29" class="deviceWidth">';
        $body .= '                        <tr>';
        $body .= '                            <td class="mobile-padding" style="padding: 15px 20px 10px;" align="right">';
        $body .= '                                <table width="200" cellpadding="0" cellspacing="0" align="left" valign="center" class="deviceWidth">';
        $body .= '                                    <tr>';
        $body .= '                                        <td style="padding:5px 0 0;">';
        $body .= '                                            <p style="font-size:15px; color:#fff; line-height: 22px; mso-table-lspace:0; mso-table-rspace:0; margin:0 0 0px 0; mso-line-height-rule:exactly; text-align:left;"><a href="http://cwhomedepot.com/" target="_blank" style="text-decoration: none; color:#ffffff !important;">http://cwhomedepot.com/</a></p>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                                <table width="200" cellpadding="0" cellspacing="0" align="right" valign="center" class="deviceWidth">';
        $body .= '                                    <tr>';
        $body .= '                                         <td style="padding:0; text-align: right;">';
        $body .= '                                            <a href="#" style="display: inline-block; margin: 0px 3px;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/icon-fb.png" alt="" style="display: block;"></a>';
        $body .= '                                            <a href="#" style="display: inline-block; margin: 0px 3px;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/icon-twitter.png" alt="" style="display: block;"></a>';
        $body .= '                                            <a href="#" style="display: inline-block; margin: 0px 3px;"><img src="https://' . $_SERVER['HTTP_HOST'] . '/images/icon-linkedin.png" alt="" style="display: block;"></a>';
        $body .= '                                        </td>';
        $body .= '                                    </tr>';
        $body .= '                                </table>';
        $body .= '                            </td>';
        $body .= '                        </tr>';
        $body .= '                    </table>';
        $body .= '                </td>';
        $body .= '            </tr>';
        $body .= '        </table>';
        $body .= '    </body>';
        $body .= '</html>';


        $message = Swift_Message::newInstance('Enjoy 10% discount at CW Home Depot')
            ->setFrom(array('cwhomedepotph@gmail.com' => '12 Years Get 10% Discount'))
            ->setTo($data['email'])
            ->setBody($body, 'text/html');

        if (!$mailer->send($message, $errors)) {
            $result = "Error:" . $errors;
        } else {
            $result = 'sent';
        }


        return $result;
    }

}
