<?php
  

        $conn = mysqli_connect("localhost", "root", "", "sleave");

         if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $student_id=$_POST['rollno1'];
        $attendance_id=$_POST['name1'];
        $sql = "insert into attendance  values ('student_id','attendance_id')";

        mysqli_close($conn);
        ?>