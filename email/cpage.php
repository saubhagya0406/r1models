
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Confirmed, you’ve been registered on r1models!</title>
  <style>
    body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f2f2f2;
            margin: 0 auto !important;
            padding: 0 !important;
          }
    @media screen and (max-width: 599px) {
      .mobile-hidden {
          display: none !important;
      }
      .mobile-d-block {
          display: block !important;
      }
      /* Size */
      .mobile-w-full {
          width: 100% !important;
      }
      /* Margin */
      .mobile-m-h-auto {
          margin: 0 auto !important;
      }
      /* Padding */
      .mobile-p-0 {
          padding: 0 !important;
      }
      .mobile-p-t-0 {
          padding-top: 0 !important;
      }
    }
      .button {
        border-radius: 4px;
        background-color: #009688;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 18px;
        padding: 15px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: auto;
        display: block;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '»';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }
    </style>
    </head>
<body>
  <table cellpadding="0" cellspacing="0" style="border: 0; border-radius: 0; width: 100%;">
  <tbody>
    <tr>
      <td align="center" class="" style="padding: 0 20px;">
        <table cellpadding="0" cellspacing="0" style="background: #f2f2f2; border: 0; border-radius: 0;">
          <tbody>
            <tr>
              <td align="center" class="" style="width: 600px;">
                <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">
                  <tbody>
                    <tr>
                      <td style="padding: 20px 0; text-align: center;">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table cellpadding="0" cellspacing="0" style="background: #ffffff; border: 0; border-radius: 4px; width: 100%;">
                  <tbody>
                    <tr>
                      <td align="center" class="tw-card" style="padding: 20px 50px;">
                        <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">
                          <tbody>
                            <tr>
                              <td style="padding: 20px 0; text-align: left; color: #474747; font-family: sans-serif;">
                                <p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
                                  <span style="font-weight: bold;"><br><br>Congratulations!!!  Your email-id has been confirmed!</span>
                                </p>
                                <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
                                  Now you can proceed to complete your account
                                </p>
                                <p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
                                  WE RESPECT YOUR PRIVACY AND WE WILL NEVER SPAM YOU!
                                </p>
                                <p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;">
                                  Have questions? E-mail us at <a href="mailto:">e-mail</a>
                                </p>
                                <p style="margin: 20px 0; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0; margin: 45px 0 0;">
                                  Greetings, <br>
                                  <span style="font-weight: bold;">r1models</span>
                                </p>
                                <p style="align:center; mso-line-height-rule: exactly;">
                                  <?php 
                                        $a=$_GET['i'];
                                        $m=$_GET['m'];
                                        $w="http://www.r1models.com/php/confirm.php?i=$a&m=$m";
                                        echo $w;
                                  ?>
                                  <br><br><a target="_blank" href=<?=$w?>><button class="button"><span>Proceed </span></button></a>
                                </p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">
                  <tbody>
                    <tr>
                      <td class="" style="padding: 20px 0; text-align: center; color: #8f8f8f; font-family: sans-serif; font-size: 12px; mso-line-height-rule: exactly; line-height: 20px;;">
                        <p style="margin: 20px 0;; margin: 0;;">
                          <br>Made with ♡ &nbsp;&nbsp;&nbsp;&nbsp; <a href="r1models.com"><b>r1models</b></a>
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  <div style="text-align:right;">
    <img src="logo.png" alt="r1modelsLOGO" height="200px" width="200px"/>
  </div>
</body>
</html>
