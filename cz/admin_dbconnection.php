
          <?php
          $servername = "wm97.wedos.net";
          $username = "w114019_nepali";
          $password = "aBe5CWX6";
          $dbname = "d114019_nepali";
  

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          } 
          ?>
