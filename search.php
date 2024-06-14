<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="./style_menu.css">
    <title>Acceuil</title>
</head>
<body>

    <div class= "container-fluid">
        <div class="row p-fixed">
            <div id="sidebar" class="col-3">
                <div class="d-flex flex-column align-items-center">
                <div class="Titre">Contacts</div>
                        <?php 
                            $sql="SELECT * from `oapi` order by name asc";
                            $result= mysqli_query($conn,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $id=$row['id'];
                                    $name=$row['name'];
                                    
                                    echo
                                    '<tr>
                                        <a href="searchid.php?searchid='.$id.'" class="text-light"><td scope="row">'.$name.'</td></a><br/>             
                                    </tr>';
                                }
                            }
                        ?>
                    </div>
            </div>

            <div id="body" class="col-9">

            <div>
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand">OAPI | Phone Directory </a>
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
                        </button>
                        </form>
                    </div>
                </nav>
            </div>


            <div class="infos">

                <div class="infos-flex d-flex">
                    <img src="./download.png" class="img-infos" alt="Photo">

                        <div class="txt-infos">
                            <?php 
                                $query = $_GET['query'];
                                $query = htmlspecialchars($query);

                                $sql="SELECT * from `oapi` WHERE name = '$query' ";
                                $result= mysqli_query($conn,$sql);

                                if (mysqli_num_rows($result) > 0)
                                    {
                                        // OUTPUT DATA OF EACH ROW
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<p>Nom: <span>" . $row["name"]."</span></p><br>";
                                            echo  "<p>Prénom: <span>" . $row["prenom"]."</span></p><br>" ;
                                            echo  "<p>Matricule: <span>" .$row["matricule"]."</span></p><br>";
                                            echo "<p>Bureau: <span>" . $row["bureau"]."</span></p><br>";
                                            echo  "<p>Service: <span>" . $row["service"]."</span></p><br>" ;
                                            echo  "<p>Département: <span>" .$row["departement"]."</span></p><br>";
                                            echo "<p>Bâtiment: <span>" . $row["batiment"]."</span></p><br>";
                                            echo  "<p>Num Tel Fix: <span>" . $row["numTelFix"]."</span></p><br>" ;
                                            echo  "<p>Num Tel Portable:<span>" .$row["numTelPort"]."</span></p><br>";
                                        }
                                    } 
                                            else{ // if there is no matching rows do following
                                                echo "No results";
                                            }                                                        
                            ?>
                        </div>
                </div>
                <a href="menu.php" class="btnclose">Fermer</a>
                    <div class="text">
                        <p>
                            Welcome to the OAPI telephone directory. Below, you have the steps to follow to find the information about a contact. 
                        </p>
                        <p>
                            1. Enter me name of the targeted person, or select it from the list on your left;
                        </p>
                        <p>
                            2. The contact is displayed with the information.... All you have to do is contact him.
                        </p>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>