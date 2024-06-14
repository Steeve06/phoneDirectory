<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="./style_login.css">
    <title>Login</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="col-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="oapi">OAPI</div>
                    <div class="annuaire">| ANNUAIRE <br> | TELEPHONIQUE </div>
                </div>
            </div>

            <div id="body" class="col-9 d-flex flex-column align-items-center">
                <img src="./download.png" alt="LogoOAPI">

                <form action="login.php" method="post">

                    <?php if (isset($_GET['error'])){ ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php  } ?>

                    <div class="mb-3">
                        <label for="inputNom" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="inputNom" aria-describedby="nomHelp" name="name">
                        <div id="nomHelp" class="form-text">Enter User Name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="InputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword1" name="pass">
                        <div id="passwordHelpBlock" class="form-text">Your password should be between 8 and 20 letters that may include numbers and syboles for added security.Your password must be between 8 and 20 letters that may include numbers and syboles for more</div>
                    </div>

                    <button class="btn btn-primary" name ="submit">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                    <a href="admin_home.php" class="admin">
                        <i class="fa-solid fa-user-gear"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>