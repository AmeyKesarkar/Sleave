<?php
if(isset($_POST['submit']))
{		
    $studen_id = $_POST['student_id'];
    $attendance_id = $_POST['attendance_id'];

    $insert = mysqli_query($db,"INSERT INTO attendance (`student_id`, `attendance_id`) VALUES ('$student_id','$attendance_id')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>