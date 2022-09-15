<?php

     $servername="localhost";
     $username="root";
     $password="";
     $database="crunchyroll";

     $conn=mysqli_connect($servername,$username,$password,$database);

     if(!$conn)
     {
          echo "Data Base Not connected";
     }
     else
     {
          $email=$_GET['email'];
          $name=$_GET['name'];
          $msg=$_GET['msg'];
          


          $query="INSERT INTO `writeus` (`S.No`, `Email`, `Name`, `Message`) VALUES (NULL, '$email', '$name', '$msg');";
          $insert_q=mysqli_query($conn,$query);
          if(!$insert_q)
          {
               echo "not inserted";
          }
          else{
               echo "";
          }
     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          body{
               background-color: black;
               text-align: center;
          }
          button{
               background-color: rgb(0, 0, 0);
               border-radius: 30px;
               border-color: rgb(234, 0, 255);
               
          }
          b{
               text-align: center;
               color: rgb(255, 255, 255);
          }
          button:hover{
               background-color: rgba(90, 28, 160, 0.644);
          }
     </style>
</head>
<body>
<h1 style="color: rgb(129, 44, 199);font-size: 80px;">Thanks For Writing For Us</h1>
<form action="home.html">

     <button><b style="font-size: 20px;"><h2> Click Here To continue..</h2></b></button>
</form>

     
</body>
</html>