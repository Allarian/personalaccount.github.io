<?
if (array_key_exists('feedback_text', $_POST)) {
   $to = 'allarian6595@yandex.ru';
   $subject = 'Отправлена заявка из личного кабинета ';
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = $_POST["client_category"]." ФИО: ".$_POST["client_name"]."\nУдобное для связи время: ".$_POST['communicat_time'].". Способ связи: ".$_POST['communicat_data']."\nРегион проживания: ".$_POST['residence'].", населённый пункт: ".$_POST['locality']."\nУлица ".$_POST['street'].", дом ".$_POST['building'].", квартира ".$_POST['apartment']."\nУслуга: ".$_POST['service'].". Номер лицевого счёта: ".$_POST['acc_number']."\nТема обращения: ".$_POST['topic']."\nТекст обращения: ".$_POST['feedback_text'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['client_name'];
   exit();
}
?>