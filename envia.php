<?php

if ( isset($_POST) && !empty)($_POST) ) ) {
	
	$id = $_POST['id'];
	$email = $_POST['email'];
	$session = $_POST['session'];
	
	$url = "https://api.georanker.com/v1/monitor/" . $id . ".json?email=" . $email .  "&session=" . $session;
	
	$data = ['id' => '$id', 'email' => '$email', 'session' => '$session'];
	$ch   = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	$result = curl_exec($ch);

	return $result;
	
	curl_close($ch);
	
	
	
}


?>
