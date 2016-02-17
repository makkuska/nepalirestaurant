<meta http-equiv="refresh" content="0;url=http://nepalirestaurant.cz/cz/admin_event_db.php">
          <?php

          include_once("admin_dbconnection.php");

          $id = $_POST['id'];
          $date = $_POST['date'];
          $subject_en = $_POST['subject_en'];
          $subject_cz = $_POST['subject_cz'];
          $message_en = $_POST['message_en'];
          $message_cz = $_POST['message_cz'];

          $insert = "INSERT INTO events (date, subject_cz, subject_en, message_cz, message_en) VALUES ('$date', '$subject_cz', '$subject_en', '$message_cz', '$message_en')";

          if ($conn->query($insert) === TRUE) {
              echo "New record created successfully ";
          } else {
              echo "Error: " . $insert . "<br>" . $conn->error;
          }

          ?>
