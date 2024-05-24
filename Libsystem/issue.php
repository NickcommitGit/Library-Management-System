<html>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="learn/library";
        $student_name=$_POST['t1'];
        $roll=$_POST['t2'];
        $book_id=$_POST['t3'];
        $date=$_POST['t4'];
        $book_name=$_POST['t5'];
        $auth_name=$_POST['t6'];
        $class=$_POST['t7'];
        $school_name=$_POST['t8'];
        $address=$_POST['t9'];
        $conn=mysqli_connect($servername,$username,$password,$db);
        if(!$conn) {
            echo "not connected";
        }
        if($student_name==""|| $roll==""|| $book_id==""|| $date==""|| $book_name==""|| $auth_name==""|| $class==""|| $school_name==""|| $address==""){
            header("location:issue.html");
        }
        else {
            header("location:library.html");
        
        $q="INSERT INTO `issue`(`student_name`, `roll`, `book_id`, `date`, `book_name`, `auth_name`, `class`, `school_name`, `address`) 
        VALUES ('$student_name','$roll','$book_id','$date','$book_name','$auth_name','$class','$school_name','$address')";
        }
        $qu=mysqli_query($conn,$q);
        
        

        ?>
        
    </body>
</html>