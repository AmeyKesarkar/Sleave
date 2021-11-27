<?php

	$con=mysqli_connect("localhost","root","","sleave");
    #$sql="select count(*) as attendance_id from attendance where student_id='SY-3'";
    #$result=mysqli_query($con,$sql);
    #$data=mysqli_fetch_assoc($result);
    #echo $data['attendance_id'];
    isset($_POST["department"]) ? $department = $_POST["department"] : $department = ""; 
        
    $Numbers = $data['attendance_id'];
    $bar_graph = "";

    $getData = "select * from student";

    $bar_graph='<canvas id="graph" data-settings=
    \'{
        type: 'line',
        data: {
            labels: ['January', 'Febuary', 'March', 'April', 'July', 'Augest', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Atendance of individual students',
                data: [20, 21, 22, 23, 21, 28, 29, 18, 12, 20],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    }\'></canvas>';

    

   
        

?>