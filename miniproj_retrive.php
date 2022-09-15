<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  border-color:white;

}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(odd){background-color: rgba(0, 0, 0, 0.349);}

th {
  background-color: black;
  color: white;
  padding:25px;
}
td{
  padding:15px;
     
}
</style>
</head>
<body>

<u><b><h2 style="color: firebrick; font-size: xx-large;text-align: center;">Detail's</h2></b></u>


</body>
</html>




<?php
     
     $servername="localhost";
     $username="root";
     $password="";
     $database="crunchyroll";

     $conn=mysqli_connect($servername,$username,$password,$database);

     if(!$conn)
     {
          echo "<h1>Your FeedBack Didn't get recorded Due to Some Internal Error Please Try After Some Time</h1>";
     }
     else
     {
          $show=mysqli_query($conn,"select * from writeus");

                    
          echo "
          <table border='1'>
               <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>FeedBack</th>
               </tr>";

          while($row = mysqli_fetch_array($show))
          {
          echo "<tr>";
          echo "<td>" . $row['Email'] . "</td>";
          echo "<td>" . $row['Name'] . "</td>";
          echo "<td>" . $row['Message'] . "</td>";
          echo "</tr>";
          }
          echo "</table>";

          mysqli_close($conn);
          
     }

?>