<?php

if(!empty($_POST['formName']) and
	(!empty($_POST['formTel']) and
	(!empty($_POST['formMail']) and
	(!empty($_POST['formSubject']) and
	(!empty($_POST['formMessage']) {
		$sendname=trim(striptags($_POST['formName']));
		$sendtel=trim(striptags($_POST['formTel']));
		$sendmail=trim(striptags($_POST['formMail']));
		$sendsubject=trim(striptags($_POST['formSubject']));
		$sendmessage=trim(striptags($_POST['formMessage']));
		
		
		$mailTo = 'daryaneverova07@gmail.com';
		$bodyform = "Вам пришло сообщение от $sendname \n\n\
						Телефон: $sendtel \n\n
						Почта: $sendmail \n\n
						Текст письма: $sendmessage";
		
		
		mail($emailTo, $sendsubject, $bodyform, $sendmail);
		
}










?>