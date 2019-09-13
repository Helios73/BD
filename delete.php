<?php
$link = mysqli_connect('localhost','root','','quest');
	if(mysqli_connect_errno())
	{
		echo 'ERROR ('.mysqli_connect_errno().') : '. mysqli_connect_error()	;
		exit();
	}
if (!empty($_REQUEST['form_submit']) && $_REQUEST['form_submit'] == 'Y') {
  $result = mysqli_query("DELETE FROM `users` VALUES ('".$_REQUEST['name']."','".$_REQUEST['phone']."','".$_REQUEST['email']."') WHERE Phone = two");
  if ($result) {
      echo "Успех";
  } else {
      echo "Неудача";
  } 
}
?>
<html>
<head>
 <title>Запись в БД через форму на php</title>
</head>
<body>
 <form method="POST" action="">
  <input name="form_submit" type="hidden" value="Y"> 
  <input name="name" type="text">
  <input name="phone" type="text">
  <input name="email" type="text">
  <input type="submit" value="Отправить">
 </form>
</body>
</html>