<html>
     <head>
          <title>
               get data
          </title>
          
     <body>
<?php
$Name=$_REQUEST['name'];
$Email=$_REQUEST['email'];
$Message=$_REQUEST['message'];
if(empty($Name) || empty($Email) ||empty($Message))
{
     echo "please fill all the details";
}
else
{
     
mail("rahulyadavyadav306@gmail.com","QUERY MESSAGE",$message,"From: $name <$email>");
echo "<script>alert('mail sended');
     
</script>";
?>
     </body>
</html>
