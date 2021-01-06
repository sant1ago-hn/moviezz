<?php
require_once 'configs/PHPMailer/src/PHPMailer.php';
require_once 'configs/PHPMailer/src/SMTP.php';
require_once 'configs/PHPMailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';
class PaymentController extends Controller {
  public function index() {
    if(isset($_POST['submit'])){
      $fullname = $_POST['fullname'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $note = $_POST['note'];
      $method = $_POST['method'];
      if(empty($fullname) || empty($address) || empty($mobile) || empty($email)){
        $this->error = 'Fullname hoặc address hoặc email hoặc mobile';
      } 
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $this->error = 'Email không đúng định dạng';
      }
      if(empty($this->error)){
          $order_model = new Order();
          $order_model->fullname = $fullname;
          $order_model->mobile = $mobile;
          $order_model->address = $address;
          $order_model->email = $email;
          $order_model->note = $note;
        $order_model->payment_status = 0;
        $price_total = 0;
        foreach($_SESSION['cart'] AS $product_id => $cart){
          $price_total += $cart['price'] * $cart['quantity'];
        }
        $order_model->price_total = $price_total;
        $order_id = $order_model->insert();
        $order_detail_model = new OrderDetail();

        foreach($_SESSION['cart'] AS $product_id => $cart){
          $order_detail_model->order_id = $order_id;
          $order_detail_model->product_id = $product_id;
          $order_detail_model->quantity = $cart['quantity'];
          $is_insert = $order_detail_model->insert();
          var_dump($is_insert);
          
        }


        }
      }
      $this->content = $this->render('views/payments/index.php');
      require_once 'views/layouts/main.php';
    }
    public function sendMail(){
      

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
    
}
