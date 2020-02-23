<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="refresh" content="0; URL=/contact"/>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/home.css') }}">
      <title>aboutme</title>
    </head>
    <body class="bbody">
      @include('header')
          <div class="home-text">
            <div class="mailform">
              <?php
                  // session_start();
                  use PHPMailer\PHPMailer\PHPMailer;
                  require_once "PHPMailer/src/PHPMailer.php";
                  require_once "PHPMailer/src/SMTP.php";
                  require_once "PHPMailer/src/Exception.php";

                  $subject = "お問い合わせ";
                  $body = '[お名前]'."\n".$_POST['name']."\n"
                          .'[メールアドレス]'."\n".$_POST['email']."\n"
                          .'[住所]'."\n".$_POST['address']."\n"
                          .'[電話番号]'."\n".$_POST['phone']."\n"
                          .'[件名]'."\n".$_POST['subject']."\n"
                          .'[本文]'."\n".$_POST['main']."\n";
                  $fromname = "メーラーに表示したい名前";
                  $fromaddress = "送り元のアドレス";
                  $smtp_user = "SMTPサーバーのユーザー名";
                  $smtp_password = "SMTPサーバーのパスワード";
                  $to = "送り先";

                  $mail = new PHPMailer();
                  $mail->IsSMTP();
                  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                  $mail->SMTPAuth = true;
                  $mail->CharSet = 'utf-8';
                  $mail->SMTPSecure = 'ssl';
                  $mail->Host = "SMTPサーバー";
                  $mail->Port = 465;
                  $mail->IsHTML(false);
                  $mail->Username = $smtp_user;
                  $mail->Password = $smtp_password; 
                  $mail->SetFrom($smtp_user);
                  $mail->From     = $fromaddress;
                  $mail->Subject = $subject;
                  $mail->Body = $body;
                  $mail->AddAddress($to);

                  if( !$mail -> Send() ){
                      $message  = "Message was not sent<br/ >";
                      $message .= "Mailer Error: " . $mailer->ErrorInfo;
                  } else {
                      $message  = "Message has been sent";
                  }

                  echo $message;

                  ?>
              <br>
              <input type="button" class="btn btn-success" value="自動的に戻らない場合は押してください。" onClick="location.href='/contact'">
            </div>
          </div>
          @include('footer')

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>