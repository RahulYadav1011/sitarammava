﻿<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
mail("rahulyadavyadav306@gmail.com","QUERY MESSAGE",$message,"From: $name<$email>");
?>
