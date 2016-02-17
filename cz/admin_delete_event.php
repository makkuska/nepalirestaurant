<meta http-equiv="refresh" content="0;url=http://nepalirestaurant.cz/cz/admin_event_db.php">
          <?php
  
          include_once("admin_dbconnection.php");

          $id = $_POST['id'];

          $delete = "DELETE FROM events WHERE id=$id";

          if ($conn->query($delete) === TRUE) {
              echo "Record was deleted successfully";
          } else {
              echo "Error: " . $delete . "<br>" . $conn->error;
          }

          $conn->close();

          ?>
