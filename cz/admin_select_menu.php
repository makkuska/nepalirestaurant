
          <?php
  
          include_once("admin_dbconnection.php"); 

          $dbhandle = mysql_connect($servername, $username, $password) 
            or die("Connection failed: " . $dbhandle ->connect_error);
          
          $selected = mysql_select_db("d114019_nepali",$dbhandle) 
            or die ("Not connected to db");

          $select = "SELECT * FROM menu";
          $result = mysql_query($select);
          $result_next = mysql_query($select);
          ?>
