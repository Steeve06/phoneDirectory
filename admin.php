<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type="text/css" href="admin.css">
    <title>Admin Page</title>
</head>
<body>

    <div class="container">

      <a href="add.php" class="text-light btn_add">Add Users</a>

      <div class="div_tab">
        <table class="table">
          <tr>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Matricule</th>
          <th scope="col">Bureau</th>
          <th scope="col">Service</th>
          <th scope="col">Département</th>
          <th scope="col">Bâtiment</th>
          <th scope="col">Num Tel Fix</th>
          <th scope="col">Num Tel Portable</th>
          <th scope="col">Photo</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
          </tr>

          <?php 

            $sql="SELECT * from `oapi`";
            $result= mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $name=$row['name'];
                    $prenom=$row['prenom'];
                    $matricule=$row['matricule'];
                    $bureau=$row['bureau'];
                    $service=$row['service'];
                    $departement=$row['departement'];
                    $batiment=$row['batiment'];
                    $numTelFix=$row['numTelFix'];
                    $numTelPort=$row['numTelPort'];
                    $image=$row['image'];

                    echo '<tr>
                            <td>'.$name.'</td>
                            <td>'.$prenom.'</td>
                            <td>'.$matricule.'</td>
                            <td>'.$bureau.'</td>
                            <td>'.$service.'</td>
                            <td>'.$departement.'</td>
                            <td>'.$batiment.'</td>
                            <td>'.$numTelFix.'</td>
                            <td>'.$numTelPort.'</td>
                            <td>'.$image.'</td>
                            <td>
                            <a href="update.php?updateid=" class="text-light btn1">Update</a>
                            </td>
                            <td>
                            <a href="delete.php?deleteid=" class="text-light btn2">Delete</a>
                            </td>
                        </tr>';
              }
            }
          ?>
        </table>
      </div>
    </div>

  </div>  
</body>
</html>