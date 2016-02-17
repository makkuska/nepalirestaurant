
<meta http-equiv="refresh" content="0;url=http://nepalirestaurant.cz/cz/admin_menu_db.php">
          <?php

          include_once("admin_dbconnection.php");

          $id = $_POST['id'];
          $date = $_POST['date'];
          $meal1 = $_POST['meal1'];
          $meal2 = $_POST['meal2'];
          $meal3 = $_POST['meal3'];
          $meal4 = $_POST['meal4'];
          $meal5 = $_POST['meal5'];
          $meal6 = $_POST['meal6'];
          $meal7 = $_POST['meal7'];
          $meal8 = $_POST['meal8'];

          $update = "UPDATE menu SET date='$date', meal1='$meal1', meal2='$meal2', meal3='$meal3', meal4='$meal4', meal5='$meal5', meal6='$meal6', meal7='$meal7', meal8='$meal8' WHERE id=$id";

          if ($conn->query($update) === TRUE) {
              echo "Record was updated successfully ";
          } else {
              echo "Error: " . $update . "<br>" . $conn->error;
          }

          $conn->close();

          ?>
