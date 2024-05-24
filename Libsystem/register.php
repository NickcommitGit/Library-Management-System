<html>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="learn/library";
        $first_name=$_POST['t1'];	
        $mid_name=$_POST['t2'];	
        $last_name=$_POST['t3'];
        $fath_name=$_POST['t4'];
        $roll=$_POST['t5'];	
        $class=$_POST['t6'];
        $email=$_POST['t7'];
        $pass=$_POST['t8'];
        $add1=$_POST['t9'];
        $add2=$_POST['t10'];
        $city=$_POST['t11'];
        $state=$_POST['t12'];
        $zip=$_POST['t13'];
        $conn=mysqli_connect($servername,$username,$password,$db);
        if(!$conn){
            echo "not connected";
        }
        $q="INSERT INTO `register`(`first_name`, `mid_name`, `last_name`, `fath_name`, `roll`, `class`, `email`, `pass`, `add1`, `add2`, `city`, `state`, `zip`) 
        VALUES ('$first_name','$mid_name','$last_name','$fath_name','$roll','$class','$email','$pass','$add1','$add2','$city','$state','$zip')";
        $qu=mysqli_query($conn,$q);
        header("location:home.html");
        ?>
    </body>
</html>