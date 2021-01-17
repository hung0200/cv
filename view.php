<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'link.php';
    require 'connect.php';
    $id=$_GET['id'];
    $sql="SELECT * from contact where id='$id'";
    $result= mysqli_query($conn,$sql);
    $data_list = mysqli_fetch_all($result);
    foreach($data_list as $data){
        $name=$data[1];
        $email=$data[2];
        $phone=$data[3];
        $command=$data[4];
    }
    ?>
    <div class="container shadow p-3 mb-5 bg-white rounded mt-3">
        <dl class="row ">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9"><?php echo $id?></dd>
        </dl>
        <dl class="row">
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9"><?php echo $name?></dd>
        </dl>
        <dl class="row">
            <dt class="col-sm-3">email</dt>
            <dd class="col-sm-9"><?php echo  $email?></dd>
        </dl>
        <dl class="row">
            <dt class="col-sm-3">phone</dt>
            <dd class="col-sm-9"><?php echo $phone?></dd>
        </dl>
        <dl class="row">
            <dt class="col-sm-3">command</dt>
            <dd class="col-sm-9"><?php echo $command?></dd>
        </dl>
        <a href="admin.php" class="btn btn-primary ">BACK</a></div>
    </div>
    
</body>
</html>