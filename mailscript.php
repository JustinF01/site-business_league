<?php

$to='justin@designbiz.co.za';
$subject='New Member Subscription-Business League';

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['number'];
$ifa=$_POST['ifa'];
$referenceNumber= $_POST['ref'];

$message = <<<EMAIL

Name: $name
Email: $email
Tel: $tel
Referer IFA #: $ifa
Referer tel: $referenceNumber


EMAIL;
mail($to, $subject, $message, "From:".$email);

$thankYouContact = <<<HTML
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="website development services, web development, web design, graphic design, design portfolio, justin fester, design" />
    <meta name="description" content="The exclusive web and graphic design portfolio, Brought to you by Justin Fester and his team of designers." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Justin Fester|Designer|Developer</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Actor|Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css"> 
    
  </head>
    <body>
        
		<section class="thankYou" style="max-width: 1020px; margin: 0 auto; padding: 10%;">
            <h1>Thank you for your message.</h1>
            <p>I will contact you soon.</p>
            <a href="index.php">
                <button class="thankYouButton button" style="width: 100%; padding: 3%; border: none; border-radius: 10px; font-size: 1.125em; margin-top: 5%;">Back To Site</button>
            </a>
        </section>
    </body>
</html> 
HTML;

echo $thankYouContact;


?>