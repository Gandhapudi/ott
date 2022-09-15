<?php
if(isset($_POST['sub']))
{
$conn=mysqli_connect('localhost','root','','crunchyroll');
 $name=$_POST['email'];
 $pwd=$_POST['psw'];
 if($name!=''&&$pwd!='')
 {
   $query="SELECT `password`  FROM `miniproject` WHERE email='$name' and password='$pwd'";
   $rows=mysqli_query($conn,$query);
   $a=mysqli_num_rows($rows);
   if($a>0){
   echo "login succesful";
   header("Location:Login successfull.html");
   }
   else{
   header("Location:incorrectEmail,pass.html");
   }
 }
 else
 {
  header("Location:login_error.html");
 }
}
?>