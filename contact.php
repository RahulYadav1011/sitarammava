<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
mail("rahulyadavyadav306@gmail.com","QUERY MESSAGE",$message,"From: $name <$email>");
echoi"<script>alert('mail sended');
     window.history.log(-1);
</script>";
?>
