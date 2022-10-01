    <?php
    // Файлы phpmailer
    // require 'class.phpmailer.php';
    // require 'class.smtp.php';


    use PHPMailer\PHPMailer\PHPMailer;

    include_once 'PHPMailer/src/PHPMailer.php';
    include_once 'PHPMailer/src/SMTP.php';


    function sendMyMailSMTP($to, $subject, $body)
    { // подсчет количества меню в корзине

        $mail = new PHPMailer();                              // Passing `true` enables exceptions

        //Server settings
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        // $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.center-zdorovya26.ru';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'mail@center-zdorovya26.ru';                 // SMTP username
        $mail->Password = '2Z6u7L7i ';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                          // TCP port to connect to

        //Recipients
        $mail->setFrom('mail@center-zdorovya26.ru', 'Сenter-zdorovya26.ru');
        $mail->addAddress($to, 'Center-zdorovya26.ru');     // Add a recipient

        //Content

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        if (!$mail->send()) {
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            //echo 'Message sent!';
            return true;
        }



        return false;
    }


    $name = trim(htmlspecialchars($_POST['name']));
    $phone = trim(htmlspecialchars($_POST['phone']));
    if ($phone == '' || $name == '') {
        echo "Заполнены не все поля";
    } else {

        $to = 'center.zdorovya@mail.ru';
        $subject = 'Новая заявка';
        $body = $name . ' | ' . $phone;

        echo "Ваша заявка отправлена";
        $send = sendMyMailSMTP($to, $subject, $body);
    }










    die;


    ?>