<?php
$email= trim($_POST["email"]);
$phone= trim($_POST["phone"]);
$name= trim($_POST["name"]);
$dt= date('Y-m-d H:i:s');

if ($email==''|| $phone==''|| $name=='') {
echo 'запoлните все поля';
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo 'введите корректный алрес электронной почты';
}
else{
file_put_contents('apps.txt', "$dt $email $phone $name \n", FILE_APPEND);
 echo'1';
}


 ?>



 