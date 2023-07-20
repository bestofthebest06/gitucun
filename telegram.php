<?
$name = $_POST['ismi'];
$email = $_POST['email'];
$title = $_POST['title'];
$comment = $_POST['comment'];
$token = '6358126687:AAGmNiS93wTBou97cJMKTByy_kljzzl6a7s';
$chat_id = '-1001721731654';
$arr = array(
    'ismi :' => $name ,
    'emaile  :' => $email ,
    'kodi :' => $title 
);
foreach($arr as $key => $velue):
    $text .= $key . $velue ."%0A";
endforeach;
$telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&perse_emode=html&text={$text}","r");
if($telegram){
header('location: news.php');
}
else{   
    echo 'error';
}
?>


