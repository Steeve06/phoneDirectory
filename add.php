<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $prenom=$_POST['prenom'];
    $matricule=$_POST['matricule'];
    $bureau=$_POST['bureau'];
    $service=$_POST['service'];
    $departement=$_POST['departement'];
    $batiment=$_POST['batiment'];
    $numTelFix=$_POST['numTelFix'];
    $numTelPort=$_POST['numTelPort'];

    //Image
    $image=$_FILES['image']['name'];
    $destination = 'images/'. $image;
    $imagePath = pathinfo($destination, PATHINFO_EXTENSION);

    $sql = "INSERT INTO `oapi`(`name`,`prenom`, `matricule`, `bureau`, `service`, `departement`, `batiment`, `numTelFix`, `numTelPort`, `image`) VALUES ('$name','$prenom','$matricule','$bureau','$service','$departement','$batiment','$numTelFix','$numTelPort', '$image')";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "Data inserted succesfully!";
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

    <title>Add Users Page</title>
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

            <div class="mb-3">
                <label>Photo</label>
                <input type="file" class="form-control" name="image" autocomplete ="off">
            </div>

            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>

        </form>
    </div>

</body>
</html>