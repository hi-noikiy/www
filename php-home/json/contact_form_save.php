<?
	$msg = date("Y-m-d H:i:s") . " 접수" . "\n\n";
	$msg .= "회사명: " . $_POST["company"] . "\n";
	$msg .= "지역: " . $_POST["local"] . "\n";
	$msg .= "연락처: " . $_POST["contact"] . "\n";
	$msg .= "내용: " . $_POST["content"] . "\n";
	
	$to = "contact@datafirst.co.kr";
	$subject = "[DataFirst] 문의";
	$headers = "From: contact@datafirst.co.kr";
	
	if (mail($to, $subject, $msg, $headers))
		echo '{"mail":1}';
	else
		echo '{"mail":0}';
?>