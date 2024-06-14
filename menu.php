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
    <title>Home Page</title>
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

                            <form action="search.php" method="GET" class="d-flex" role="search">

                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                            <button class="btn btn-outline-success" type="submit" alue="Search">
                                <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
                            </button>

                            </form>                          
                        </div>
                    </nav>
                </div>


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