<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="student";


$data=mysqli_connect($host,$user,$password,$db);
/*function str_openssl_enc($str,$iv){
	$key="12345hell%$#^%#$%$$#^";
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_encrypt($str,$chiper,$key,$options,$iv);
  return $str;
}*/
/*function str_opensl_enc($int,$iv){
	$key="12345hell%$#^%#$%$$#^";
	$chiper="AES-128-CTR";
	$options=0;
	$int=openssl_encrypt($int,$chiper,$key,$options,$iv);
  return $int;
}
*/
if($data===false)
{
	die("connection error");
}

if(isset($_POST['Apply']))
{
	//$iv=openssl_random_pseudo_bytes(16);
$data_name=$_POST['name'];
$data_email=$_POST['email'];
$data_phone=$_POST['phone'];
$data_message=$_POST['message'];
//$data_name=str_openssl_enc($data_name,$iv);
//$data_email=str_openssl_enc($data_email,$iv);
//$data_message=str_openssl_enc($data_message,$iv);
//$data_phone=str_openssl_enc($data_phone,$iv);

$sql="INSERT INTO admission(name,email,phone,message)
      VALUES(' $data_name ','$data_email','$data_phone','$data_message')";


$result=mysqli_query($data,$sql);



if($result){
    $_SESSION['message']="Your Application sent successful";
    header("location:index.php");
}
else{
  echo "Apply Failed";
}
}




 ?>
