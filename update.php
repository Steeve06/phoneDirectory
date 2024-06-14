<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql= "SELECT * from `oapi`";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$prenom=$row['prenom'];
$matricule=$row['matricule'];
$bureau=$row['bureau'];
$service=$row['service'];
$departement=$row['departement'];
$batiment=$row['batiment'];
$numTelFix=$row['numTelFix'];
$numTelPort=$row['numTelPort'];

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $prenom=$_POST['prenom'];
    $matricule=$_POST['matricule'];
    $bureau=$_POST['bureau'];
    $service=$_POST['service'];
    $departement=$_POST['departement'];
    $batiment=$_POST['batiment'];
    $numTelFix=$_POST['numTelFix'];
    $numTelPort=$_POST['numTelPort'];
    $sql = " UPDATE  `oapi` set id=$id, name='$name', prenom='$prenom',matricule='$matricule',service='$service',departement='$departement',batiment='$batiment',numTelFix=$numTelFix,numTelPort=$numTelPort where id=$id";
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
            <input type="text" class="form-control" placeholder="Enter employee's name!" name="name" autocomplete ="off">
        </div>    
        
        <div class="mb-3">
            <label>Given Name</label>
            <input type="text" class="form-control" placeholder="Enter employee's given name!" name="prenom" autocomplete ="off">
        </div> 

        <div class="mb-3">
            <label>Matricule </label>
            <input type="text" class="form-control" placeholder="Enter employee's Matricule!" name="matricule" autocomplete ="off">
        </div>

        <div class="mb-3">
            <label>Office </label>
            <input type="text" class="form-control" placeholder="Enter employee's Office!" name="bureau" autocomplete ="off">
        </div>

        <div class="mb-3">
            <label>Service </label>
            <input type="text" class="form-control" placeholder="Enter employee's mobile number!" name="service" autocomplete ="off">
        </div>

        <div class="mb-3">
            <label>Department </label>
            <input type="text" class="form-control" placeholder="Enter employee's Department!" name="departement" autocomplete ="off">
        </div>

        <div class="mb-3">
            <label>Building </label>
            <input type="text" class="form-control" placeholder="Enter employee's Building!" name="batiment" autocomplete ="off">
        </div>

        <div class="mb-3">
            <label>Office Number </label>
            <input type="integer" class="form-control" placeholder="Enter employee's Office Number!" name="numTelFix" autocomplete ="off">
        </div>

        <div class="mb-3">
            <label>Phone Number </label>
            <input type="integer" class="form-control" placeholder="Enter employee's Phone Number !" name="numTelPort" autocomplete ="off">
        </div>

        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>

    </form>
    </div>

</body>
</html>