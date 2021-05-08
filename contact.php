<?php
if (trim($_POST['valTrFal'])!='valTrFal_true') {
	echo 'fasle';
}
else {
		$txtname = trim($_POST['txtname']);
		$txtNameValue = trim($_POST['name_class_value']);
		$txtphone = trim($_POST['txtphone']);
		$fromMail = 'info@rent.home-and-law.ru';
		$fromName = 'Rent';
		$emailTo = 'rent.h-a-l@yandex.ru';
		$subject = 'Форма обратной связи';
		$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
		$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
		$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";
		$body = "Заявка с сайта Rent.H-a-L.ru\n\nИмя: $txtname\nТелефон: $txtphone";
		$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
		echo 'ok';
}
?>
