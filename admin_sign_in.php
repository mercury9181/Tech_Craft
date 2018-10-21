<?php


require_once ("config.php");
session_start();

$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];

// $user_password=sha1($user_password);

$query="select admin_name,password from admin where admin_name ='$user_name' and password='$user_password'";

$send=mysqli_query($connection,$query);


$row=mysqli_fetch_array($send);


if ($user_name ==$row['admin_name'] and $user_password==$row['password']) {

$_SESSION['a_n']=$user_name;
$_SESSION['a_p']=$user_password;
header("Location:admin_page.php");

}

else {
 header("Location: admin.php?admin_value_sign_in=fail");


}

 ?>
