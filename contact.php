<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
if(empty($name) || empty($email) ||empty($message))
{
     echo "please fill all the details";
}
else
{
     
mail("rahulyadavyadav306@gmail.com","QUERY MESSAGE",$message);
echo "<script>alert('mail sended');
     window.history.log(-1);
</script>";
?>
