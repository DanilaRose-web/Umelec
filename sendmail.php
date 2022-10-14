<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';


//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'PHPMailer/language/');
$mail->IsHTML(true);



// От кого письмо (почта, имя)
$mail->setFrom = ('danila.rose.web@gmail.com');
// Кому отправить
$mail->addAddress = ('danila.rose.web@gmail.com');
// Тема письма
$mail->Subject = ('danila.rose.web@gmail.com');


// Тело письма
$body = '<h1>Заголовок письма</h1>';

// Проверка инпутов (валидация)
if (trim(!empty($_POST['phone']))) {
    $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
}

$mail->Body = $body;

// Отправка
if (!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_enocode($response);

