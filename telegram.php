<?php 


$api = "5738349759:AAHFv7wskoE3LN-Zoq_KVFZpJxmIc6sOmS0";#=====> Your IpTocken
$chatid = "1742518248";#=====> Your Chatb ID





function sendBot($url){
	$ci = curl_init();
	curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ci,CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ci, CURLOPT_URL, $url);
	return curl_exec($ci);
	curl_close($ci);
}



?>