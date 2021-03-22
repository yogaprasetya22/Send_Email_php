<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $number = $_POST['number'];
  $dropdown = $_POST['dropdown'];
  $hobi = $_POST['hobi'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jagres3211@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'yogaprasetya30211'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('jagres3211@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('jagres3211@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br> Umur : $number <br> Minuman : $dropdown <br> hp : $hobi <br>Message : $message </h3>";

    $mail->send();
    $awa  = "<script>
    Swal.fire({
      title:'Success',
      text:'Okee keren lu ngab',
      icon:'success'
    });
  </script>";
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>