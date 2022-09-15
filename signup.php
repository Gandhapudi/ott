<?php
$servername="localhost";
$database="crunchyroll";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['sub']))
{
$email=$_POST['email'];
$password=$_POST['psw'];

$sql="INSERT INTO miniproject(`email`, `password`) VALUES ('$email','$password')";
if (mysqli_query($conn,$sql))
{
// echo "registered successfully"; 
header("Location:register successfully.html");
}
else
{
echo "false";
}
mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Created Successfully</title>
</head>
<body>

</body>
</html>