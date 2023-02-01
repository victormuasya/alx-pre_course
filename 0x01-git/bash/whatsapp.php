<?php 
$auth_token = "YourAuthToken"; 
$post_url = "https://api.whatsapp.com/send?phone=ReceipientNumber&text=MessageText&source=&data="; 
$ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, $post_url); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$auth_token)); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$response = curl_exec($ch); 
curl_close($ch);  
echo $response;  
?>