<?php

$sayt  = file_get_contents("https://lms.tuit.uz/auth/login");

$sayt2 = explode('<input type="hidden" name="_token" value="',$sayt);


$name = $sayt2[0];

echo "<pre>";
print_r($name);
echo "</pre>";



/*
$username="1BK16200"; 
$password="J911577769@k"; 
$url="https://lms.tuit.uz/auth/login"; 
$cookie="cookie.txt"; 

$postdata = "login=".$username."&password=".$password; 
$postdata .="&_token=jlKBlguNuR8R1lr40OR7xUIXlw2CprdkOGZfq1tT";
$postdata .="&g-recaptcha-response=03AGdBq25iTEBcRxInMK5LhBbUc0neIy6-oZaeMND5ILqz56ZOr25W97CVF--2YjcAcN6MG2RifNFgY6Q_LEafDMUpsbRjD5sxJFIT49MbRUT_Axfn79QwVIHXSSul5z7sEpKaBvQaVJIz1zfZtLBPDBGQNnJJBzIEflylVuDPTxlk6NRbReLjUL7_b8yy6hcpG1z_VviOdsRF4f4PhJxmQ6D7s5rUGalfAWKvKhMQfS3wVnyKC3S_RqiPBfPZgAkhB0yUXmR0pGhYZieaLpFU-XH_5jrNQo95pwiWZ9My9si7kYGolRqgAoczNytX7IW3oNl3CfIdILrwSWENd0BGM0gybhctvAcyzmTZ4VjvRXAPOfXpTSFaeFLjtxOY7cMHwOQZDEjX-TG8kha2PU6uR7yaK-aMZrOGQoqnuploU-Zbi6clKkhti5y5CzwBVr0rjGvTbT9nDz0D";

$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL, $url); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
curl_setopt ($ch, CURLOPT_REFERER, $url); 

curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1); 
$result = curl_exec ($ch); 

echo $result;  
curl_close($ch);
*/
?>