

<!DOCTYPE style="color:red"> html="color:mediumblue">>
<html style="color:mediumblue">>
<head style="color:mediumblue">>
<title style="color:mediumblue">>Count number of rows</title style="color:mediumblue">>
</head style="color:mediumblue">>
<body style="color:mediumblue">>
<?php
$conn=mysqli_connect("color:brown">"127.0.0.1:3306","color:brown">"root","color:brown">"","color:brown">"admin");"color:red">
"color:green">// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="select count('user_id') from login_user";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";
mysqli_close($conn);
?>

</body style="color:mediumblue">> </html style="color:mediumblue">>
