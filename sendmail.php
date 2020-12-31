<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pagetitel = "send amil";


?>
    <style>
        .form-control {
            text-align: left;
        }
    </style>
    <br><br><br><br><br><br>
    <div class="container" style="max-width: 500px;background-color: #FFF;padding: 20px;border-radius: 10px;">
        <form action="" method="post">
            <div class="form-group">
                <h3>Send from</h3>
                <input type="text" name="sendfrom" class="form-control" value="azhagroup2022@gmail.com">
            </div>
            <div class="form-group">
                <h3>Send to</h3>
                <input type="text" name="sendto" class="form-control" value="g.ali.telecom@gmail.com">
            </div>
            <div class="form-group">
                <h3>Subject</h3>
                <input type="text" name="Subject" class="form-control" value="Welcome to AZHA Pharme ">
            </div>


            <input type="submit" name="send" value="Send" class="btn btn-lg btn-primary">
        </form>
    </div>


<?php include('include/footer.php');
if (isset($_REQUEST['send'])) {
    $developmentMode = true;
    $mailer = new PHPMailer($developmentMode);

    try {
        $mailer->SMTPDebug = 0;
        $mailer->isSMTP();

        if ($developmentMode) {
            $mailer->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ];
        }


        $mailer->Host = 'mail.iurdv.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'info@iurdv.com';
        $mailer->Password = 'Ism#123';
        $mailer->SMTPSecure = 'tls';
        $mailer->Port = 587;

        $mailer->setFrom('info@iurdv.com', 'Bek Lek');
        $mailer->addAddress($_REQUEST['sendto'], 'Ali AZHA group');

        $mailer->isHTML(true);
        $mailer->Subject = $_REQUEST['Subject'];
        $mailer->CharSet = 'UTF-8';
        $message = '<html>
      
<body>

     
<div style="margin:0;padding:0;background:#e8ecee;font-family:&quot;Helvetica Neue&quot;,Helvetica,arial,sans-serif;background-color:#f4f4f7;width:100%!important;min-height:600px!important">

  <table style="border-collapse:collapse;border:1px;border-color:#e8ecee;border-radius:0px 0px 16px 16px;width:100%;max-width:632px" align="center">
    <tbody>
	<tr><td style="border-collapse:collapse">

  <table style="border-collapse:collapse;border:1px;border-color:#e8ecee;border-radius:0px 0px 16px 16px;width:100%;max-width:632px" align="center">

  <tbody width="600">

    

    <tr>

      <td style="border-collapse:collapse;padding-right:35px;padding-top:15px;padding-bottom:15px" align="center">
	  </td>

    </tr> 

    <tr>

      <td cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;background-color:#ffca28;width:600px;height:8px;border-top-right-radius:8px;border-top-left-radius:8px;max-width:600px" align="center">

      </td>

    </tr>

    <tr>

      <td style="border-collapse:collapse;padding:34px 48px 0px 48px;background-color:#ffffff;border-bottom-left-radius:8px;border-bottom-right-radius:8px" width="600" align="center">

        <table style="border-collapse:collapse;border:1px;border-color:#e8ecee;border-radius:0px 0px 16px 16px;width:100%;max-width:632px">

		  <tbody>

            <tr>

              <td style="border-collapse:collapse">

<table style="border-collapse:collapse;border:1px;border-color:#e8ecee;border-radius:0px 0px 16px 16px;width:100%;max-width:632px" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">

  <tbody>
  <tr>
  <td style="text-align:center">
  
   <img src="http://www.web.beklek.com/img/shop.jpg" alt="Website Change Request" style="width:200px;" />
   </td>
   <tr>

    <tr>

      <td style="border-collapse:collapse;color:#3e4253;font-family:HelveticaNeue-Medium;font-size:24px;font-weight:500;line-height:28px;width:504px;text-align:right;height:28px;padding-bottom:24px">

        شكرا لتسجيلك بموقع  We2Up
			

      </td>

    </tr>

    <tr>

      <td style="border-collapse:collapse">

		<div style="border:1px solid #e1e1e7;width:504px;margin-bottom:25px"></div>

      </td>

    </tr>

    

    <tr>

      <td style="border-collapse:collapse">

          <table style="border-collapse:collapse;border:1px;border-color:#e8ecee;border-radius:0px 0px 16px 16px;width:100%;max-width:632px;background:#ffffff" width="100%" border="0"><tbody>

          <tr>

             <td style="border-collapse:collapse" width="5">

            </td>

            <td style="border-collapse:collapse" width="450">

              <table style="border-collapse:collapse;border:1px;border-color:#e8ecee;border-radius:0px 0px 16px 16px;width:100%;max-width:632px" border="0"><tbody>

                <tr>

                  <td style="border-collapse:collapse" width="40" valign="top" align="right">

                  </td>

                  <td style="border-collapse:collapse" width="8" valign="top"></td>

                  <td style="border-collapse:collapse;min-width:100%;padding-bottom:5px" width="400" valign="top">

                     <img src="https://ci5.googleusercontent.com/proxy/_knyQjw7BdibQf1MBJKChCYutkHShb-57OY-V8EZLlF1cJkh_4k_ZGY5Oz6kYPq7Lsgn=s0-d-e1-ft#https://spacergif.org/spacer.gif" style="outline:none;text-decoration:none;border:none" class="CToWUd" width="1" height="1">

                    <div style="color:rgba(0,0,0,0.8);line-height:14px">
                       </div>

                  </td>

                </tr>

              </tbody></table>

            </td>

            <td style="border-collapse:collapse" width="20"></td>

          </tr>

          <tr>
		  <td style="border-collapse:collapse;text-align:center"> 
		  <table>
		  <tr>
		 
		
		  </tr>
		  </table>
		
		  </td>
		  </tr> 


        </tbody></table>

      </td>

    </tr>

    

    <tr>

      <td colspan="4" style="border-collapse:collapse" align="center">      

        <table style="border-collapse:collapse;border:1px;border-color:#e8ecee;border-radius:0px 0px 16px 16px;width:100%;max-width:632px;width:300px" width="300" cellspacing="0" cellpadding="0" border="0" align="left">

          <tbody><tr>

       

                 

            <td style="border-collapse:collapse;padding-left:8px" align="left">

                



              

             <a style="text-decoration:none;color:#24c7ff;background-color:#ffca28;border-radius:22px;padding:10px 70px;color:#333333;font-family:HelveticaNeue;font-size:18px;font-weight:400;line-height:24px;text-align:center;display:block;max-width:60%;padding-top:13px;padding-bottom:13px;padding-left:20px;padding-right:20px" href="https://www.beklek.com/program">

           الموقع

        </a>

            </td>

          </tr>

        </tbody></table>

            </td>

</tr>

<tr><td style="border-collapse:collapse" width="100%" height="45"></td></tr>

      

      

    

  </tbody>

</table>

</td>

            </tr>

            
          </tbody>

         </table>

      </td>

    </tr>

    





    

      

    

    <tr>

      <td style="border-collapse:collapse;width:100%!important;height:50px!important"></td>

    </tr> 

    

  </tbody>

 </table>

      </td></tr>

    

    </tbody></table>

<img src="https://ci5.googleusercontent.com/proxy/jobDitnYhzlV2upckGgW8jcIY89ZiHMiiDkG61GpfXD8Ej3KsKrtOtNd3nqTZfFGzeB4coZsrO2X38VQcQirE0MiwqmNlFq2POQj0rHOsmBaaiwJ4TywOluIodrQR6AyvDAcQ7WCas6acTz71yl-Mw5QXJhI2wa0BpsM6LNCpUPDkWOGAA=s0-d-e1-ft#https://fatbird.edmodo.com/v1/open/xf96hwmmc506grmgxwc9z3nnw7Z1sAy47g4AnjA6c1fmmmxzy39n6v3248vtrwxdj7kz1gm1hnj9bw1" style="outline:none;text-decoration:none;border:none;height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important" class="CToWUd" width="1" height="1" border="0"><div class="yj6qo"></div><div class="adL">

</div></div>
        </body></html>';
        $mailer->Body = $message;

        $mailer->send();
        $mailer->ClearAllRecipients();
        echo "MAIL HAS BEEN SENT SUCCESSFULLY";

    } catch (Exception $e) {
        echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
    }
}