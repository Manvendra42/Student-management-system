<?php
session_start();


$host="localhost";
$user="root";
$password="";
$db="student";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM admission";

$result=mysqli_query($data,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<?php


include 'admin_css.php';
   ?>
</head>
<body>

	<?php
include 'admin_side.php';
   ?>
	<div class="content">

		<h1>Apply for Admission</h1>


<table border="1px">
  <tr>
    <th style="padding:20px;font-size:15px;">Name</th>
    <th style="padding:20px;font-size:15px;">E-Mail</th>
    <th style="padding:20px;font-size:15px;">Phone</th>
    <th style="padding:20px;font-size:15px;">Message</th>
  </tr>

  <?php

while($info=$result->fetch_assoc())
{

   ?>
  <tr>

    <td style="padding:20px;">
    <?php  echo "{$info['name']}"; ?>
  </td>
    <td style="padding:20px;">
<?php  echo "{$info['email']}"; ?>
    </td>
    <td style="padding:20px;">
<?php  echo "{$info['phone']}"; ?>
    </td>
    <td style="padding:20px;">
<?php  echo "{$info['message']}"; ?>
    </td>
  </tr>

  <?php
}
   ?>
</table>
	</div>

</body>
</html>
