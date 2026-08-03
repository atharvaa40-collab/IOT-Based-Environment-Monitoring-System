<?php
$con = mysqli_connect('localhost','iotwater_air','lWns2(G$qHQS','iotwater_air');
///////////////////////////////////////////////////////////////////////////////////
if(!empty($_REQUEST))
{
$temp = @$_REQUEST['temp'];
$hum = @$_REQUEST['hum'];
$mos = @$_REQUEST['mos'];
$mq6 = @$_REQUEST['mq6'];
$mq9 = @$_REQUEST['mq9'];
$mq135 = @$_REQUEST['mq135'];

$query = "INSERT INTO `sens` (`temp`, `hum`, `mos`, `mq6`, `mq9`, `mq135`)
 VALUES ('".$temp."', '".$hum."', '".$mos."', '".$mq6."', '".$mq9."', '".$mq135."')";
mysqli_query($con,$query);
/////////////////////////////////////////////////////////////////////////////	
if($temp >= 50)
{
$to      = 'seethalakshmiskottode@gmail.com';
$subject = 'TEMPERATURE ALERT';
$message = 'Temp='.$temp;
$message .= "Deg      High TEMPERATURE Alert."."\r\n";
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'svskits@gmail.com';
$subject = 'TEMPERATURE ALERT';
$message = 'Temp='.$temp;
$message .= "Deg      High TEMPERATURE Alert."."\r\n";
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

}
//////////////////////////////////////////////////////////////////////////////
if($hum >= 50)
{
$to      = 'seethalakshmiskottode@gmail.com';
$subject = 'HUMIDITY ALERT';
$message = 'Humidity='.$hum;
$message .= "%RH  High Humidity Alert."."\r\n";
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'svskits@gmail.com';
$subject = 'HUMIDITY ALERT';
$message = 'Humidity='.$hum;
$message .= "%RH  High Humidity Alert."."\r\n";
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
}
//////////////////////////////////////////////////////////////////////////////
if($mos >= 180)
{
$to      = 'seethalakshmiskottode@gmail.com';
$subject = 'MOISTURE SENSOR ALERT';
$message = 'High MOISTURE Sensors Alert';
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'svskits@gmail.com';
$subject = 'MOISTURE SENSOR ALERT';
$message = 'High MOISTURE Sensors Alert';
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
}
//////////////////////////////////////////////////////////////////////////////
if($mq6 >= 200)
{
$to      = 'seethalakshmiskottode@gmail.com';
$subject = 'MQ6 SENSOR ALERT';
$message = 'High MQ6 Sensors Alert';
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'svskits@gmail.com';
$subject = 'MQ6 SENSOR ALERT';
$message = 'High MQ6 Sensors Alert';
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

}
/////////////////////////////////////////////////////////////////////////////
if($mq9 >= 200)
{
$to      = 'seethalakshmiskottode@gmail.com';
$subject = 'MQ9 SENSOR ALERT';
$message = 'High MQ9 Sensors Alert';
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'svskits@gmail.com';
$subject = 'MQ9 SENSOR ALERT';
$message = 'High MQ9 Sensors Alert';
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
}
//////////////////////////////////////////////////////////////////////////////
if($mq135 >= 200)
{
$to      = 'seethalakshmiskottode@gmail.com';
$subject = 'MQ135 SENSOR ALERT';
$message = 'High MQ135 Sensors Alert';
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'svskits@gmail.com';
$subject = 'MQ135 SENSOR ALERT';
$message = 'High MQ135 Sensors Alert';
$message .= "https://iotwaterquality.com/iot_cloud_ems/index.php"."\r\n";
$headers = 'From: iotwater@iotwaterquality.com' . "\r\n" .
    'Reply-To: iotwater@iotwaterquality.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
}
//////////////////////////////////////////////////////////////////////////////
}
?>