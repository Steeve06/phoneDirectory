<?php 
session_start();
// connect page to db
include 'connect.php';
if (isset($_POST['name']) && isset($_POST['pass']))
   {

      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }

      $name = validate($_POST['name']);
      $pass = validate($_POST['pass']);

        // displays errors each time one field is empty
      if (empty($name)) 
      {
         header("Location: index.php?error= User Name is required");
         exit();
      }
      elseif (empty($pass)) 
      {
         header("Location: index.php?error= Password is required");
         exit();
      }

     // displays message that shows input was correctly enterred
      else
      {
        $sql = "select * from users where name = '$name' and password = '$pass'";
         $result = mysqli_query($conn,$sql);

         if(mysqli_num_rows($result)==1)
         {
               $row = mysqli_fetch_assoc($result);

            if ($row['name'] === $name && $row['password'] === $pass) 
            {
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['id'] = $row['id'];
                  header("Location: menu.php");
                  exit();
            }
            // signal the user there was an error entering the information
            else {
                        header("Location: index.php?error=Incorrect user name or password!");
                        exit();
                  }        
         }
          // signal the user there was an error entering the information
         else 
         {
            header("Location: index.php?error=Incorrect user name or password!");
            exit();
         }   
      }
} 
 // redirects to index
else
         {
            header("Location: index.php");
            exit();
         }    