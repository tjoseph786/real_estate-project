<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contractor</title>
</head>
<body>
    <style>
body{
    background-image: url("image/property_bc6.jpg");
    background-size: cover;
}
 td{
     padding: 10px;
 }

 h1{
    text-align: center;
    color: blue;
    padding :10px;
    
    font-family: 'Lobster', cursive;
}

    </style>
<h1>Agent,Owner and Property Details</h1><br>

</body>
</html>



<?php
include "connection.php";
error_reporting(0);

$query= "SELECT * FROM contractor";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
?>
<table>
    <tr>
<th>Aid</th>
<th>Pid</th>
<th>Ppid</th>

    </tr>
        
<?php
while($result= mysqli_fetch_assoc($data)){

    echo "<tr>
    <td>".$result['Aid']."</td>
    <td>".$result['Pid']."</td>
    <td>".$result['Ppid']."</td>
          
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }


?>
</table>
