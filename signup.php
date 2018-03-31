<?php

$user=$_POST['username'];
$first=$_POST['first_name'];
$last=$_POST['last_name'];
$prof=$_POST['profile'];
$pass=$_POST['password'];
$role=$_POST['role'];
$image=$_POST['image'];

include 'connection.php';

$sql="insert into users values ('','$user','$first','$last','$prof','$pass','$role','')";

$res=mysql_query($sql);

if($res)
{
echo "Account is created.<br> And your username is: $user";
}
else
{
echo "Technical error.";
}

?>