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
          <th scope="col">Name</th>
          <th scope="col">Matricule</th>
          <th scope="col">Office</th>
          <th scope="col">Service</th>
          <th scope="col">Department</th>
          <th scope="col">Building</th>
          <th scope="col">Office Number</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
          </tr>

          <?php 

            $sql="SELECT * from `oapi`";
            $result= mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                   $id=$row['id'];
                    $name=$row['name'];
                    $matricule=$row['matricule'];
                    $office=$row['office'];
                    $service=$row['service'];
                    $department=$row['department'];
                    $building=$row['building'];
                    $onum=$row['onum'];
                    $pnum=$row['pnum'];

                    echo '<tr>
                            <td>'.$name.'</td>
                            <td>'.$matricule.'</td>
                            <td>'.$office.'</td>
                            <td>'.$service.'</td>
                            <td>'.$department.'</td>
                            <td>'.$building.'</td>
                            <td>'.$onum.'</td>
                            <td>'.$pnum.'</td>
                            <td>
                            <a href="update.php?updateid= '.$id.'" class="text-light btn1">Update</a>
                            </td>
                            <td>
                            <a href="delete.php?deleteid= '.$id.'" class="text-light btn2">Delete</a>
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