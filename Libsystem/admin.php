


<html>
<body>
 <?php
   $servername="localhost";
   $username="root";
   $password="";
   $db="learn/library";
   
   $u=$_POST['t1'];
   $p=$_POST['t2'];
   $conn=mysqli_connect($servername,$username,$password,$db);
$q="SELECT * FROM `admin` WHERE user_name='$u'";
$qu=mysqli_query($conn,$q);
$rs=mysqli_fetch_assoc($qu);
$dp=$rs['pass'];
if($u==""&& $p==""){
    header("location:admin.html");
}
elseif($p==$dp)
    {
        header("location:adminpanel.php");
    }
    else{
        echo"invalid user";
    }
?>
</body>
</html>