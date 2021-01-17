
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    
</head>

<body>
<div class="container">
    <div class="page-header clearfix" style="display:flex;align-items:center">
    

    </div>
    
    <div class='container'>
        <table class='table'>
            <thead>
   
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>phone</th>
                  
                    <th>command</th>
                    <th>view</th>
                </tr>
            </thead>
    <?php
    require 'connect.php';
    $sql="select * from contact";
    $result=mysqli_query($conn,$sql);
        $data_list=mysqli_fetch_all($result);
        foreach($data_list as $data){
            echo "<tr>";
            echo"<td>$data[0]</td>";
            echo"<td>$data[1]</td>";
            echo"<td>$data[2]</td>";    
            echo"<td>$data[3]</td>";
            echo"<td>$data[4]</td>";
       
   
 
  
            echo"<td><a href='view.php?id=".$data[0]."'><i class='fas fa-edit'></i></a></td>";
         
            echo"</tr>";
        }
        echo"</table>";
        echo"</div>";
    ?>
    <DIV CLASS="container shadow p-3 mb-5 bg-white rounded mt-3">
     <div class="col-md-12 d-flex flex-column justify-content-center">
<a href="close.php" class="btn btn-primary">LOGOUT</a></DIV>
</DIv>




 

</body>
</html>
