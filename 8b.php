<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORT STUDENT RECORDS</title>
    <style>
     body{
        font-family:Arial,sans-serif;
        text-align:center;
        margin-top:20px;
     }
     table{
        margin:auto;
        border-collapse:collapse;
        width:80%;
     }
    th,td{padding:10px;border:1px-solid #ddd;}
    th{background-color: #f4f4f4;}
    </style>
    </head>
    <body>
        <h1>sorted students resources</h1>
        <table>
            <tr><th>ID</th><th>NAME</th><th>GRADE</th></tr>
            <?php
            $conn=new mysqli("localhost","root","","students/24");
            $students=$conn->query("Select * from studentss124")->fetch_all(MYSQLI_ASSOC);
            for($i=0;$i<count($students)-1;$i++){
                $min=$i;
                for($j=$i+1;$j<count($students);$j++){
                    if($students[$j]['name']<$students[$min]['name'])$min=$j;
                }
                $temp=$students[$min];
                $students[$min]=$students[$i];
                $students[$i]=$temp;
            }
            foreach($students as $student){
             echo
             "<tr><td>{$student ['id']}</td><td> {$student ['name']} </td><td>{$student ['grade']}</td></tr>";

            
            }
            $conn->close();
            ?>
        </table>
    </body>
</html>