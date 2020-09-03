<?php

 $clientemail = 'ivanov-vlad@mail.ru'; // адрес почты на которую придёт письмо
 $subject = 'Сладкие подарки'; //имя от кого

 if(isset($_POST['vidForma'])){
  $message .= "<br>Заявка с формы: " . $_POST['vidForma'];
 }
  if(isset($_POST['vid1'])){
  $message .= "<br>Выбрал: " .$_POST['vid1'];
 }
  if(isset($_POST['vid2'])){
  $message .= "<br>Выбрал: " .$_POST['vid2'];
 }
  if(isset($_POST['vid3'])){
  $message .= "<br>Выбрал: " .$_POST['vid3'];
 }
  if(isset($_POST['vid4'])){
  $message .= "<br>Выбрал: " .$_POST['vid4'];
 }

 if(isset($_POST['name'])){
  $message .= "<br>Имя: " . $_POST['name'];
 }

 if(isset($_POST['email'])){
  $message .= "<br>email: " . $_POST['email'];
 }

 if(isset($_POST['phone'])){
  $message .= "<br>Телефон: " . $_POST['phone']."<br>";
 }

$i = 1;
foreach ($_POST as $key => $val)
{
  if(isset($_POST['gifts'.$i])){
    $message .= "Позиция: ".$_POST['gifts'.$i]."<br>";
  }
  if(isset($_POST['gifts'.$i.'Sum'])){
    $message .= "Количество: ".$_POST['gifts'.$i.'Sum']."<br>";
  }
  if(isset($_POST['gifts'.$i.'Itog'])){
    $message .= "На сумму: ".$_POST['gifts'.$i.'Itog']."<br>";
  }

  if(isset($_POST['pr'.$i])){
    $message .= "Позиция: ".$_POST['pr'.$i]."<br>";
  }
  if(isset($_POST['pr'.$i.'Sum'])){
    $message .= "Количество: ".$_POST['pr'.$i.'Sum']."<br>";
  }
  if(isset($_POST['pr'.$i.'Itog'])){
    $message .= "На сумму: ".$_POST['pr'.$i.'Itog']."<br>";
  }
  $i++;
  // $message .= "key=".$key."; value=".$val."<br>";
}
 if(isset($_POST['obshItog'])){
  $message .= "<br>Общая сумма: " . $_POST['obshItog'];
 }
 
 $headers = "Content-type: text/html; charset=UTF-8\r\n";
 //$headers .= "To: <$email>" . "\r\n";
 $headers .= "Новое сообщение с лендинга Сладкие подарк" . "\r\n";

 $mail=mail($clientemail, $subject, $message, $headers);

 // if ($mail) {
 //    header("Location: thank.html"); 
 //   }else {
 //    echo "nosend";
 //   }
?>