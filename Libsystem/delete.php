<html>
<body>
<?php
$roll=$_REQUEST["t1"];
 $servername="localhost";
  $username="root";
  $password="";
  $db="learn/library";
  $conn=mysqli_connect($servername,$username,$password,$db);
  if(!$conn)
  {
   echo"not connected";
  }
  $q="DELETE FROM `issue` WHERE roll=$roll";
$qu= mysqli_query($conn,$q);
header("location:adminpanel.php");
?>
</body>
</html>