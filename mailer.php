<?php 
$combine=$_POST['name'].''."\r\n".''.$_POST['email'].''."\r\n".''.$_POST['mobile'].''."\r\n".''.$_POST['message'];
mail("yourmail@yourwebsite.com",'from website',$combine);
?>