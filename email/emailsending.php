<?php
$to = "aleenaysheikh@gmail.com";
$subject = "Testing Email 2207G1";
$msg =  ' 
<html> 
<head> 
    <title>Welcome to 2207G1</title> 
</head> 
<body> 
    <h1>Thanks you for joining with us!</h1> 
    <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
        <tr> 
            <th>Name:</th><td>2207G1</td> 
        </tr> 
        <tr style="background-color: #e0e0e0;"> 
            <th>Email:</th><td>contact@2207G1.com</td> 
        </tr> 
        <tr> 
            <th>Website:</th><td><a href="http://www.2207G1.com">www.2207G1.com</a></td> 
        </tr> 
    </table> 
</body> 
</html>';
$sendingEmail = "aleenay.sheikh022@gmail.com";
$from = "From:$sendingEmail";
$headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n";
if(mail($to,$subject,$msg,$headers)){
    echo "Email send successfully ";
}
else{
    echo "Email sending fail";
}








// $to_email = "aleenaysheikh@gmail.com";
// $subject = " Email Testing";
// $body = "This is test email send by aleena";
// $from = "aleenay.sheikh022@gmail.com";
// $headers = "From:$from";

// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }