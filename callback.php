<?php
error_reporting();
include('config.php');
// Ensure this page only processes POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jsonData = json_encode($_REQUEST, true);
    //echo $jsonData;
$amount=$_REQUEST['amount'];
    $banktxnid=$_REQUEST['Transactionid'];
    $txnstatus=$_REQUEST['status']; 
    $txnid=$_REQUEST['txnid'];  
$sql=" update  tblcontactdata set amount=:amount,banktransactionid=:banktransactionid,txnstatus=:txnstatus where txnid=:txnid";
$query = $dbh->prepare($sql);
$query->bindParam(':amount',$amount,PDO::PARAM_STR);
$query->bindParam(':banktransactionid',$banktxnid,PDO::PARAM_STR);
$query->bindParam(':txnstatus',$txnstatus,PDO::PARAM_STR);
$query->bindParam(':txnid',$txnid,PDO::PARAM_STR);
$query->execute();
echo $msgg="<head>
    <meta http-equiv=Content-Type content=text/html; charset=UTF-8 />
    <title>Payment Innvoice</title>
    <meta name=viewport content=width=device-width, initial-scale=1.0 />
    <link href=https://fonts.googleapis.com/css?family=Roboto:400,700 rel=stylesheet />
    <link href=https://convocation.cutmap.ac.in/register/innvoice.css rel=stylesheet />
    <style type=text/css>
        /* CLIENT-SPECIFIC STYLES ------------------- */

        #outlook a {
            padding: 0; 
        }

        .ReadMsgBody {
            width: 100%; /* Force Hotmail to display emails at full width */
        }

        .ExternalClass {
            width: 100%; /* Force Hotmail to display emails at full width */
        }

            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                line-height: 100%; /* Force Hotmail to display normal line spacing */
            }

        body, table, td, a { /* Prevent WebKit and Windows mobile changing default text sizes */
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table, td { /* Remove spacing between tables in Outlook 2007 and up */
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img { /* Allow smoother rendering of resized image in Internet Explorer */
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES --------------------------- */

        body {
            height: 100% !important;
            margin: 0;
            padding: 0;
            width: 100% !important;
            font-family: Arial, Roboto, sans-serif;
        }
        a {
    color: #fff !important;
    font-size: 14px;
    text-decoration: none;
}

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        .footer-link {
            color: #ffff;
        }

        .sup {
            vertical-align: super;
            font-size: 9px;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        sup {
            line-height: normal;
            vertical-align: 3px;
            font-size: 7px;
        }

        .wrapper {
            width: 530px !important;
            max-width: 530px !important;
        }

        .header-links {
            padding-top: 13px;
            padding-bottom: 13px;
            background-color: #009adb;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 9px;
            text-align: center;
        }

        .plan_table tr.col td.col1 {
            padding: 10px 0px;
            background: #0067ac;
            color: #fff;
            font-weight: bold;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            border-right: 2px solid #fff;
            padding-left: 10px;
        }

        .plan_table tr.col td.col2 {
            padding: 10px 0px;
            background: #0067ac;
            color: #fff;
            font-weight: bold;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            border-right: 2px solid #fff;
            padding-left: 10px;
        }

        .plan_table tr.col td.col3 {
            padding: 10px 0px;
            background: #0067ac;
            color: #fff;
            font-weight: bold;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .plan_table tr td.win1 {
            font-weight: bold !important;
            color: #29a7dc !important;
            padding: 8px 0px;
            min-height: 30px;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            border-right: 2px solid #fff;
            padding-left: 10px;
        }

        .plan_table tr td.win2 {
            font-weight: bold !important;
            color: #29a7dc !important;
            padding: 8px 0px;
            min-height: 30px;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            border-right: 2px solid #fff;
            padding-left: 10px;
        }

        .plan_table tr td.win3 {
            font-weight: bold !important;
            color: #25a18e !important;
            padding: 8px 0px;
            min-height: 30px;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
            padding-left: 10px;
        }

        .plan_table tr.row {
            background: #fff;
        }

            .plan_table tr.row td.row1 {
                color: #000000;
                font-size: 12px;
                padding: 8px 0px;
                min-height: 30px;
                font-weight: normal;
                font-family: Arial, Helvetica, sans-serif;
                border-right: 2px solid #fff;
                padding-left: 10px;
            }

            .plan_table tr.row td.row2 {
                color: #000000;
                padding: 8px 0px;
                min-height: 30px;
                font-size: 12px;
                font-weight: normal;
                font-family: Arial, Helvetica, sans-serif;
                border-right: 2px solid #fff;
                padding-left: 10px;
            }

            .plan_table tr.row td.row3 {
                color: #000000;
                padding: 8px 0px;
                min-height: 30px;
                font-size: 12px;
                font-weight: normal;
                font-family: Arial, Helvetica, sans-serif;
                padding-left: 10px;
            }

        .plan_table tr.row-alt {
            background: #f5f5f5;
        }

            .plan_table tr.row-alt td.row1 {
                padding: 8px 0px;
                min-height: 30px;
                color: #404040;
                font-size: 12px;
                font-weight: normal;
                font-family: Arial, Helvetica, sans-serif;
                border-right: 2px solid #fff;
                padding-left: 10px;
            }

            .plan_table tr.row-alt td.row2 {
                padding: 8px 0px;
                min-height: 30px;
                color: #404040;
                font-size: 12px;
                font-weight: normal;
                font-family: Arial, Helvetica, sans-serif;
                border-right: 2px solid #fff;
                padding-left: 10px;
            }

            .plan_table tr.row-alt td.row3 {
                padding: 8px 0px;
                min-height: 30px;
                color: #404040;
                font-size: 12px;
                font-weight: normal;
                font-family: Arial, Helvetica, sans-serif;
                padding-left: 10px;
            }

        .opening-statements {
            padding: 34px 0px 55px 25px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 13px;
            color: #404040;
        }

        .pin-drop {
            padding-top: 17px;
            padding-left: 27px;
            padding-bottom: 15px;
        }

        .headline-message {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #0c304f;
            text-align: left;
            padding-left: 25px;
        }

        .plan-head {
            background: #0868b2;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 10px;
            padding-left: 12px;
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .plan-win {
            color: #009cda;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 12px;
            padding-left: 12px;
            padding-top: 4px;
            padding-bottom: 4px;
            border-bottom: 1px solid #f0f1f3;
        }

        .plan-td {
            color: #404040;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: normal;
            font-size: 12px;
            padding-left: 12px;
            padding-top: 4px;
            padding-bottom: 4px;
            border-bottom: 1px solid #f0f1f3;
        }

        .footnote-text {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 7px;
            color: #404040;
            line-height: 9px;
        }

        .isi-head {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: bold;
            color: #0c304f;
        }

        .isi-text {
            margin: 0px 0px 10px 0px;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            color: #404040;
            line-height: 13px
        }

        .bottom-links {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            font-weight: bold;
            line-height: 14px;
            color: #fff !important;
            text-decoration: underline !important;
        }

        .bottom-pipe {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            font-weight: bold;
            color: #fff;
            padding-left: 2px;
            padding-right: 2px;
        }

        .bottom-pipehidemob {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            font-weight: bold;
            color: #fff;
            padding-left: 2px;
            padding-right: 2px;
        }

        .footer-text {
            margin: 0px 0px 15px 0px;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            color: #fff;
            line-height: 14px;
        }

        .d-bd {
            display: block !important;
        }

        .d-sd {
            display: none !important;
        }

        .footermobilink {
            display: none !important;
        }

        .footerlink {
            display: block !important;
        }

        .ferringlogo {
            padding-left: 20px !important;
        }
        .euflexxafootdes{
            	display: block !important;
            }
            .euflexxafootmob{
            	display: none !important;
            }
        /* MEDIA QUERIES */
        @media (min-width:320px) and (max-width:480px) {
            .main-table > td {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .footer {
                width: 600px !important;
                text-align: center !important;
                padding-left: 50px !important;
                padding-right: 50px !important;
            }

            .ferringlogo {
                padding-left: 0px !important;
            }

            .footer td {
                width: 100% !important;
                text-align: center !important;
                display: block;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

                .footer td p {
                    width: 100% !important;
                    text-align: center !important;
                }

            .wrapper {
                width: 100% !important;
                max-width: 560px !important;
            }

            .footermobilink {
                display: block !important;
            }

            .footerlink {
                display: none !important;
            }

            .d-bd {
                display: none !important;
            }

            .d-sd {
                display: block !important;
            }

            .backgroundimage {
                display: none !important;
            }

            .footerlogo {
                width: 100%;
                text-align: center;
            }

            .header-links {
                font-size: 6px !important;
            }

            .message-headline td.pin-drop {
                display: block !important;
                text-align: center !important;
                width: 100%;
                padding-left: 0 !important;
                padding-top: 20px !important;
                padding-bottom: 20px !important;
            }


            .message-headline td.headline-message {
                display: block !important;
                text-align: center !important;
                width: 100%;
                padding-left: 0 !important;
                padding-bottom: 20px !important;
            }

            .message-headline td.backgroundimage {
                display: block !important;
                text-align: center !important;
                width: 150px !important;
                padding-left: 0 !important;
                padding-bottom: 20px !important;
            }

            .footer td.footerlogo {
                display: block !important;
                text-align: center !important;
                width: 100%;
                padding-left: 0 !important;
                padding-top: 20px !important;
                padding-bottom: 20px !important;
            }

            .footer td.footerjobcode {
                display: block !important;
                text-align: center !important;
                width: 100%;
                padding-left: 0 !important;
                padding-top: 20px !important;
                padding-bottom: 20px !important;
            }
            .logo {
                text-align: center !important;
                width: 100% !important;
            }

            .bottom-pipehidemob {
                display: none !important;
            }
            .euflexxafoot{
           margin-left:30px !important;
           width:50% !important;
            margin-right: 30px !important;
            }
            
            .euflexxafootmob{
            	display: block !important;
            }
            
        }

        
    </style>
</head>
 
 <body style=background: #fff; width:100%; margin:0px; padding:0px;font-family:Arial, Helvetica, sans-serif; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;>

    

    <!-- CONTAINER TABLE -->
    <table width=100% border=0 cellspacing=0 cellpadding=0>
        <tbody>
            <tr>
                <td align=center style=padding-left: 35px; padding-right: 35px;>
                    <table width=530 border=0 cellspacing=0 cellpadding=0 class=wrapper>
                        <tbody>
                            <tr>
                                <td class=logo align=center style=padding-top: 25px; padding-bottom: 22px;>
                                    <!-- Logo -->
                                    <img src=https://i.postimg.cc/SRTdt0xs/cutmlogo-removebg-preview.png width=100 />
                                </td>
                            </tr>
                            <tr>
                                <td align=left valign=top style=padding-bottom: 30px>
                                    <!-- Header Links -->
                                    <table width=100% border=0 cellspacing=0 cellpadding=0>
                                        <tbody>
                                            <tr>
                                                <td align=center valign=middle width=262 class=header-links style=padding-top: 13px; padding-bottom: 13px; background-color: #009adb; color: #fff; font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-size: 11px; text-align: center; border-right: 4px solid #fff;>
                                                    <a href=# class=url-reset style=color: #fff; text-decoration: none;>Privacy Information</a>
                                                </td>
                                                <td align=center valign=middle width=262 class=header-links style=padding-top: 13px; padding-bottom: 13px; background-color: #009adb; color: #fff; font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-size: 11px; text-align: center; >
                                                    <a href=# class=url-reset style=color: #fff; text-decoration: none;>Terms and Conditions</a>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align=left valign=top style=border-bottom: 1px solid #ed3193;border-top: 1px solid #ed3193;  font-family: Arial, Helvetica, sans-serif;padding: 35px 0px 35px 0px; font-weight: bold; font-size: 12px; color: #404040; class=opening-statements>
                                    <!-- Opening Statements -->
                                    <p style=margin:0;padding:0; class=open>   Dear $name,</p>
                                    <p style=margin:0;padding:0;padding-top:10px;  class=open-sat>  Thank you for banking with us..!!!!!!!</p>
                                </td>
                            </tr>
                            <tr>
                                <td align=left style=padding-top: 25px; padding-bottom: 15px;>
                                    <!-- Headline Message -->
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>


                                    <!-- Plan Table start -->
                                    <!--[if (mso)|(IE)]><table width=570 style=width:100%; max-width:570px; cellpadding=0 cellspacing=0 border=0 class=dr_name><tr><td><![endif]-->
                                    
                                        
                                        
                                        <tr>
                                            <td align=left style=padding:0px;margin:0px;>
                                                <!-- This Includes -->
                                                <p style=color: #0067ac; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; margin: 0px;padding:0px;padding-bottom:10px>Find your Payment Details:</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=center style=margin:0px;padding:0px;padding-bottom: 10px; class=mobplan>
                                                <!-- Plan Table -->
                                                <table class=plan_table width=100% cellspacing=0 cellpadding=0 border=0>
                                                   

                                                    <tr class=col>
                                                        <td class=col1 width=33%>Channel</td>
                                                        <td class=col2 width=33%>Value</td>

                                                    </tr>
                                                    <tr class=row-alt>
                                                        <td class=win1 row1>Transaction Status</td>
                                                        <td class=win2 row2>$txnstatus</td>

                                                    </tr>
                                                    <tr class=row>
                                                        <td class=row1>Amount</td>
                                                        <td class=row2>$amount</td>

                                                    </tr>
                                                    <tr class=row>
                                                        <td class=row1>Transaction Reference No</td>
                                                        <td class=row2>$banktxnid</td>

                                                    </tr>
                                                    
                                                </table>
                                    <!--[if mso]></td></tr></table><![endif]-->
                                    <!-- Plan Table End -->
                                </td>
                            </tr>
                            <tr>
                                <td class=left valign=top>
                                    <!-- Footnotes -->
                                    
                                </td>
                            </tr>
                            
                            
                            <tr>
                            </tr>

                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>
    <table cellspacing=0 cellpadding=0 width=570 align=center >
        <tr>
            <td style=padding: 0;margin: 0 >

                <table class=footer width=570 cellpadding=0 cellspacing=0 border=0 style=font-family: Arial, Helvetica, sans-serif;width:100%;max-width:590px;border:none;padding:0px;margin:0px;background:#009adb align=center>
                    <tr>
                        <td>
                            <table class=footer cellspacing=0 width=570 cellpadding=0 border=0 style=padding:0px;margin:0px;background: #009adb>
                                <tr>
                                    <td align=center class=left style=line-height: 25px;width:190px;vertical-align: top;padding-left:15px;padding-right:15px;margin:0px;>

                                        <p style=width: 190px; font-family: Arial, Helvetica, sans-serif; font-weight: normal; color: #000000; line-height: 20px; margin-top: 20px; font-size: 9pt; padding-left: 10px; class=ferringlogo>
                                            <img src=https://insta-money.co.in/img/logo.png width=50>
                                        </p>
                                    </td>
                                    
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr >
                        <td colspan=2 style=padding:0px;padding-left:24px;padding-right:35px;margin:0px; align=center>
                            <p style=font-family: Arial, Helvetica, sans-serif;font-weight: normal;font-size: 9pt; color: #fff;margin-top:25px;margin-bottom: 5px;line-height: 20px; class=ferringlogo>Powered by Insta-Money QR Payments</p>
                            <p style=font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-size: 10pt; color: #fff; margin: 0px; margin-bottom: 5px; line-height: 20px; class=euflexxafootdes ferringlogo>Incubated by Gramtarang Inclusive development services</p>
                             
                        </td>
                    </tr>
                    

                </table>
            </td>
        </tr>
    </table>
</body>";
    
} else {
    // Handle non-POST requests or direct access to the page
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method not allowed']);
}
?>