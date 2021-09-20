<html>
<head>

<style>
    body{
        background: #d3d3d3;
    }
    table{
        margin-top:50px;
        border: 1px solid black;
        width:50%;
        
    }
    th,td{
        text-align:center;
        padding:10px;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    th {
  background-color: #696969;
  color: white;
}
    h2{
        text-align:center;
        font-family: 'Russo One', sans-serif;
        font-size:50px;
    }
    
    </style>
</head>
<body>
    <h2>Booked cars list </h2>
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "rental";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname) or die("wring");
$q="select * from order00";
$result = mysqli_query($conn,$q);
if($result){
echo"<table border = '1' align='center'>";
echo"<tr><th>car</th><th>name</th><th>address</th><th>date</th><th>date2</th>";
while($row = mysqli_fetch_assoc($result))
    {
        printf("<tr>");
        printf("<td>%s</td>",$row["carname"]);
        printf("<td>%s</td>",$row["fname"]);
        printf("<td>%s</td>",$row["address"]);
        printf("<td>%s</td>",$row["date"]);
        printf("<td>%s</td>",$row["date2"]);
        printf("</tr>");
    
        
    }
    echo"</table>";
}
?>

</body>
</html>
