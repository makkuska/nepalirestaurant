<meta http-equiv="refresh" content="1;url=http://nepalirestaurant.cz/cz/admin_menu_db.php">
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

          $insert = "INSERT INTO menu_cz (date, meal1, meal2, meal3, meal4, meal5, meal6, meal7, meal8) VALUES ('$date', '$meal1', '$meal2', '$meal3', '$meal4', '$meal5', '$meal6', '$meal7', '$meal8')";

          if ($conn->query($insert) === TRUE) {
              echo "New record created successfully ";
          } else {
              echo "Error: " . $insert . "<br>" . $conn->error;
          }

          ?>
