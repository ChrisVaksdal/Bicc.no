
<html>
<body>

Hei <?php echo $_POST["name"]; ?> !<br>
Takk for at du har tatt kontakt med oss i bicc.no. <br>
En kopi av din henvendelse er sendt til: <?php echo $_POST["email"]; ?><br>



<!-- sende mail med kopi av hendvendelse til kunden-->
<?php


//navn 
$navn = $_POST["name"]; 

//emne 
$emne = $_POST["Subject"]; 

// the message 
$msg = ("Takk for at du har tatt kontakt med oss i bicc.no. Vedlagt kopi av din hendvendelse:         \n\n\n") . $_POST["message"];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70,"\n");

$kundemail = $_POST["email"]; 

$headers = array(
    'From' => 'kontakt@bicc.no',
    'Reply-To' => $_POST["email"],
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($kundemail, $emne, $msg,$headers);
?> 

<!-- sende mail til vår adresse med ting fra skjema-->

<?php
//navn 
$navn = $_POST["name"]; 

//emne 
$emne = $_POST["Subject"]; 

// the message 
$msg =$_POST["message"];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70,"\n");

$kundemail = $_POST["email"]; 

$headers = array(
    'From' => $_POST["email"],
    'Reply-To' => 'kontakt@bicc.no',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($kundemail, $emne, $msg,$headers);
?> 
</body>
</html> 