<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
if(empty($name) || empty($email) ||empty($message))
{
     echo "please fill all the details";
}
else
{
     
mail("rahulyadavyadav306@gmail.com","QUERY MESSAGE",$message,"From: $name <$email>");
echo "<script>alert('mail sended');
     window.history.log(-1);
</script>";
?>
