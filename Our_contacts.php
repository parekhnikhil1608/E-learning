<?php


$name = "nik";
$email = $_POST["Working-Email"];
$message = $_POST["message"];
$number = $_POST["Phone"];

$to = "nik665716@gmail.com";
$subject = "contactform";
$text = "hello";
$headers = "from: nikhilparekh1608@gmail.com";
if($email!=Null){
    mail($to,$subject,$text,$headers);
}
echo "hii";


?>
