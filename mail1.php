<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Send email via Gmail SMTP server in PHP</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="robots" content="noindex, nofollow">
</head>
<body>
<?php
$mail->Host = 'smtp.gmail.com';
$mail->Port = 25;
$mail->SMTPSecure = 'tsl';
$mail->SMTPAuth = true;
$mail->Username = "sankar00064@gmail.com";
$mail->Password = "Sankar@Gm@il7";
$mail->addAddress("sankar00064@gmail.com");
$mail->Subject = "welcome to shreem it";
$mail->Body="<h1>hello world</h1>";
$mail->isHTML(TRUE);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}
?>
</body>
</html>