<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql= "SELECT * from `oapi` where id=$id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$matricule=$row['matricule'];
$office=$row['office'];
$service=$row['service'];
$department=$row['department'];
$building=$row['building'];
$onum=$row['onum'];
$pnum=$row['pnum'];

if(isset($_POST['update'])){
   
    $name=$_POST['name'];
    $matricule=$_POST['matricule'];
    $office=$_POST['office'];
    $service=$_POST['service'];
    $department=$_POST['department'];
    $building=$_POST['building'];
    $onum=$_POST['onum'];
    $pnum=$_POST['pnum'];
    $sql = " UPDATE  `oapi` set id=$id, name='$name', matricule='$matricule',service='$service',department='$department',building='$building',onum=$onum,pnum=$pnum where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "updated succesfully!";
        header('location:admin.php');
    }
    else {
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>USERS</title>
  </head>
<body>
    <div class="container my-5">
        <form action="" method="post">
           
             <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter employee's name!" name="name" autocomplete ="off" value="<?php echo $name;?>">
            </div>     

            <div class="mb-3">
                <label>Matricule </label>
                <input type="text" class="form-control" placeholder="Enter employee's Matricule!" name="matricule" autocomplete ="off" value="<?php echo $matricule;?>">
            </div>

            <div class="mb-3">
                <label>Office </label>
                <input type="text" class="form-control" placeholder="Enter employee's Office!" name="office" autocomplete ="off" value="<?php echo $office;?>">
            </div>

            <div class="mb-3">
                <label>Service </label>
                <input type="text" class="form-control" placeholder="Enter employee's mobile number!" name="service" autocomplete ="off" value="<?php echo $service;?>">
            </div>

            <div class="mb-3">
                <label>Department </label>
                <input type="text" class="form-control" placeholder="Enter employee's Department!" name="department" autocomplete ="off" value="<?php echo $department;?>">
            </div>

             <div class="mb-3">
                <label>Building </label>
                <input type="text" class="form-control" placeholder="Enter employee's Building!" name="building" autocomplete ="off" value="<?php echo $building;?>">
            </div>

              <div class="mb-3">
                <label>Office Number </label>
                <input type="text" class="form-control" placeholder="Enter employee's Office Number!" name="onum" autocomplete ="off" value="<?php echo $onum;?>">
            </div>

             <div class="mb-3">
                <label>Phone Number </label>
                <input type="text" class="form-control" placeholder="Enter employee's Phone Number !" name="pnum" autocomplete ="off" value="<?php echo $pnum;?>">
            </div>

            <button type="submit" class="btn btn-primary" name = "update">Update</button>

        </form>
    </div>
   
  </body>
</html>