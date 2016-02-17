<!DOCTYPE html>
  <?php $name_page = "" ?>
  <?php $name_page_en = "" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php 
    include_once("page_up_content.html");
    include_once("admin_select_menu.php"); 
  ?>

    <div id="admin" class="hlavni container"> 
      <div class="row container">
    <h1>Administrator</h1>
    <h2><a href="admin_event_db.php">Add event</a> | <span class="active">Add meal</span></h2>

            <?php

              function cesky_den($den) {
                static $nazvy = array('neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota');
                return $nazvy[$den];
              }
              echo "<p> Today is " . date("l") . ' ' . date('d.m.Y') . ', week ' . date('W') .  '</p>';

            ?>

          <div class="row">
            <div class="col-lg-5 col-md-5">
              <h3>English</h3>
              <form class="form-horizontal" action="admin_add_menu.php" method="post">
              <div class="form-group">
                <label class="hidden" for="id">id: </label> 
                <input id="id" class="form-control hidden" type="text" name="id">
              </div>
              <div class="form-group">
                <label for="date" class="col-lg-2 control-label">date: </label> 
                <div class="col-lg-10">
                  <input id="date" class="form-control" type="date"  min="2016-01-01" name="date" required>
                </div>
              </div>
              <div class="form-group">
                <label for="meal1" class="col-lg-2 control-label">1. </label> 
                <div class="col-lg-10">
                  <input id="meal1" class="form-control" name="meal1" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="meal2" class="col-lg-2 control-label">2. </label> 
                <div class="col-lg-10">
                  <input id="meal2" class="form-control" name="meal2" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="meal3" class="col-lg-2 control-label">3. </label> 
                <div class="col-lg-10">
                  <input id="meal3" class="form-control" name="meal3" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="meal4" class="col-lg-2 control-label">4. </label> 
                <div class="col-lg-10">
                  <input id="meal4" class="form-control" name="meal4" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label for="meal5" class="col-lg-2 control-label">5. </label> 
                <div class="col-lg-10">
                  <input id="meal5" class="form-control" name="meal5" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label for="meal6" class="col-lg-2 control-label">6. </label> 
                <div class="col-lg-10">
                  <input id="meal6" class="form-control" name="meal6" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label for="meal7" class="col-lg-2 control-label">7. </label> 
                <div class="col-lg-10">
                  <input id="meal7" class="form-control" name="meal7" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label for="meal8" class="col-lg-2 control-label">8. </label> 
                <div class="col-lg-10">
                  <input id="meal8" class="form-control" name="meal8" type="text" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                <input class="btn btn-info" type="submit" value="Add meal">
                  <input type="hidden" name="url" value="http://">
                </div>
              </div>
              </form>
            </div>

            <div class="col-lg-5 col-md-5">
              <h3>Czech</h3>
              <form class="form-horizontal" action="admin_add_menu_cz.php" method="post">
              <div class="form-group">
                <label class="hidden" for="id">id: </label> 
                <input id="id" class="form-control hidden" type="text" name="id">
              </div>
              <div class="form-group">
                <label for="date" class="col-lg-2 control-label">date: </label> 
                <div class="col-lg-10">
                  <input id="date" class="form-control" type="date"  min="2016-01-01" name="date" required>
                </div>
              </div>
              <div class="form-group">
                <label for="meal1" class="col-lg-2 control-label">1. </label> 
                <div class="col-lg-10">
                  <input id="meal1" class="form-control" name="meal1" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="meal2" class="col-lg-2 control-label">2. </label> 
                <div class="col-lg-10">
                  <input id="meal2" class="form-control" name="meal2" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="meal3" class="col-lg-2 control-label">3. </label> 
                <div class="col-lg-10">
                  <input id="meal3" class="form-control" name="meal3" type="text">
                </div>
              </div>
              <div class="form-group">
                <label for="meal4" class="col-lg-2 control-label">4. </label> 
                <div class="col-lg-10">
                  <input id="meal4" class="form-control" name="meal4" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label for="meal5" class="col-lg-2 control-label">5. </label> 
                <div class="col-lg-10">
                  <input id="meal5" class="form-control" name="meal5" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label for="meal6" class="col-lg-2 control-label">6. </label> 
                <div class="col-lg-10">
                  <input id="meal6" class="form-control" name="meal6" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label for="meal7" class="col-lg-2 control-label">7. </label> 
                <div class="col-lg-10">
                  <input id="meal7" class="form-control" name="meal7" type="text" >
                </div>
              </div>
              <div class="form-group">
                <label for="meal8" class="col-lg-2 control-label">8. </label> 
                <div class="col-lg-10">
                  <input id="meal8" class="form-control" name="meal8" type="text" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                <input class="btn btn-info" type="submit" value="Add meal">
                  <input type="hidden" name="url" value="http://">
                </div>
              </div>
              </form>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-5 col-md-5">
              <h4>This week</h4>
          
            <?php

          while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
            if (date("W", strtotime($row['date'])) == date('W')) {
            $output = "<form action='admin_update_menu.php' method='post'>";
            $output .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='date' class='col-lg-2 control-label'>date </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input id='date' class='form-control' type='date' min='2016-01-01' name='date' value='" . $row['date'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal1' class='col-lg-2 control-label'>1. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input id='meal1' class='form-control' type='text' name='meal1' value='" . $row['meal1'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label id='meal2' for='meal2' class='col-lg-2 control-label'>2. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input class='form-control' type='text' name='meal2' value='" . $row['meal2'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label id='meal3 'for='meal3' class='col-lg-2 control-label'>3. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input class='form-control' type='text' name='meal3' value='" . $row['meal3'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label  id='meal4'for='meal4' class='col-lg-2 control-label'>4. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input class='form-control' type='text' name='meal4' value='" . $row['meal4'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal5' class='col-lg-2 control-label'>5. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input  id='meal5'class='form-control' type='text' name='meal5' value='" . $row['meal5'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal6' class='col-lg-2 control-label'>6. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input  id='meal6'class='form-control' type='text' name='meal6' value='" . $row['meal6'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal7' class='col-lg-2 control-label'>7. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input id='meal7' class='form-control' type='text' name='meal7' value='" . $row['meal7'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal8' class='col-lg-2 control-label'>8. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input id='meal8' class='form-control' type='text' name='meal8' value='" . $row['meal8'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='col-lg-10 col-lg-offset-2'>";
              $output .= "<input class='btn btn-success' type='submit' value='Update'>";
            $output .= "</div>";
            $output .= "</form>";

            $output .= "<form action='admin_delete_menu.php' method='post'>";
            $output .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
              $output .= "<div class='col-lg-10 col-lg-offset-2'>";
                $output .= "<input id='delete_button' class='btn btn-warning' type='submit' value='Delete'>";
              $output .= "</div>";
            $output .= "</form>";
            $output .= "<span class='skryty'>blaaa</span>";
            echo $output;
            } 
          }

          ?>
            </div>
            <div class="col-lg-5 col-md-5">
              <h4>This week</h4>

        <?php
          while($row = mysql_fetch_array($result_cz)){   //Creates a loop to loop through results
            if (date("W", strtotime($row['date'])) == date('W')) {
            $output = "<form action='admin_update_menu_cz.php' method='post'>";
            $output .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='date' class='col-lg-2 control-label'>date </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input id='date' class='form-control' type='date' min='2016-01-01' name='date' value='" . $row['date'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal1' class='col-lg-2 control-label'>1. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input id='meal1' class='form-control' type='text' name='meal1' value='" . $row['meal1'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label id='meal2' for='meal2' class='col-lg-2 control-label'>2. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input class='form-control' type='text' name='meal2' value='" . $row['meal2'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label id='meal3 'for='meal3' class='col-lg-2 control-label'>3. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input class='form-control' type='text' name='meal3' value='" . $row['meal3'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label  id='meal4'for='meal4' class='col-lg-2 control-label'>4. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input class='form-control' type='text' name='meal4' value='" . $row['meal4'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal5' class='col-lg-2 control-label'>5. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input  id='meal5'class='form-control' type='text' name='meal5' value='" . $row['meal5'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal6' class='col-lg-2 control-label'>6. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input  id='meal6'class='form-control' type='text' name='meal6' value='" . $row['meal6'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal7' class='col-lg-2 control-label'>7. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input id='meal7' class='form-control' type='text' name='meal7' value='" . $row['meal7'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='meal8' class='col-lg-2 control-label'>8. </label>";
              $output .= "<div class='col-lg-10'>";
                $output .= "<input id='meal8' class='form-control' type='text' name='meal8' value='" . $row['meal8'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='col-lg-10 col-lg-offset-2'>";
              $output .= "<input class='btn btn-success' type='submit' value='Update'>";
            $output .= "</div>";
            $output .= "</form>";

            $output .= "<form action='admin_delete_menu_cz.php' method='post'>";
            $output .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
              $output .= "<div class='col-lg-10 col-lg-offset-2'>";
                $output .= "<input id='delete_button' class='btn btn-warning' type='submit' value='Delete'>";
              $output .= "</div>";
            $output .= "</form>";
            $output .= "<span class='skryty'>blaaa</span>";
            echo $output;
            } 
          }
          ?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-5">
              <h4>Next week</h4>
          
            <?php

          while($row = mysql_fetch_array($result_next)){   //Creates a loop to loop through results
            if (date("W", strtotime($row['date'])) == date("W", strtotime('+1 week'))) {
            $output_next = "<form action='admin_update_menu.php' method='post'>";
            $output_next .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='date' class='col-lg-2 control-label'>date </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='date' min='2016-01-01' name='date' value='" . $row['date'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal1' class='col-lg-2 control-label'>1. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal1' value='" . $row['meal1'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal2' class='col-lg-2 control-label'>2. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal2' value='" . $row['meal2'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal3' class='col-lg-2 control-label'>3. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal3' value='" . $row['meal3'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal4' class='col-lg-2 control-label'>4. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal4' value='" . $row['meal4'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal5' class='col-lg-2 control-label'>5. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal5' value='" . $row['meal5'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal6' class='col-lg-2 control-label'>6. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal6' value='" . $row['meal6'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal7' class='col-lg-2 control-label'>7. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input id='meal7' class='form-control' type='text' name='meal7' value='" . $row['meal7'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal8' class='col-lg-2 control-label'>8. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input id='meal8' class='form-control' type='text' name='meal8' value='" . $row['meal8'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='col-lg-10 col-lg-offset-2'>";
              $output_next .= "<input class='btn btn-success' type='submit' value='Update'>";
            $output_next .= "</div>";
            $output_next .= "</form>";

            $output_next .= "<form action='admin_delete_menu.php' method='post'>";
            $output_next .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
              $output_next .= "<div class='col-lg-10 col-lg-offset-2'>";
                $output_next .= "<input id='delete_button' class='btn btn-warning' type='submit' value='Delete'>";
              $output_next .= "</div>";
            $output_next .= "</form>";
            $output_next .= "<span class='skryty'>blaaa</span>";
            echo $output_next;
            } 
          }

            ?>

          </div>
            <div class="col-lg-5 col-md-5">
              <h4>Next week</h4>
            <?php

          while($row = mysql_fetch_array($result_cz_next)){   //Creates a loop to loop through results
            if (date("W", strtotime($row['date'])) == date("W", strtotime('+1 week'))) {
            $output_next = "<form action='admin_update_menu_cz.php' method='post'>";
            $output_next .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='date' class='col-lg-2 control-label'>date </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='date' min='2016-01-01' name='date' value='" . $row['date'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal1' class='col-lg-2 control-label'>1. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal1' value='" . $row['meal1'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal2' class='col-lg-2 control-label'>2. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal2' value='" . $row['meal2'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal3' class='col-lg-2 control-label'>3. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal3' value='" . $row['meal3'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal4' class='col-lg-2 control-label'>4. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal4' value='" . $row['meal4'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal5' class='col-lg-2 control-label'>5. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal5' value='" . $row['meal5'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal6' class='col-lg-2 control-label'>6. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input class='form-control' type='text' name='meal6' value='" . $row['meal6'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal7' class='col-lg-2 control-label'>7. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input id='meal7' class='form-control' type='text' name='meal7' value='" . $row['meal7'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='form-group'>";
              $output_next .= "<label for='meal8' class='col-lg-2 control-label'>8. </label>";
              $output_next .= "<div class='col-lg-10'>";
                $output_next .= "<input id='meal8' class='form-control' type='text' name='meal8' value='" . $row['meal8'] . "'>";
              $output_next .= "</div>";
            $output_next .= "</div>";
            $output_next .= "<div class='col-lg-10 col-lg-offset-2'>";
              $output_next .= "<input class='btn btn-success' type='submit' value='Update'>";
            $output_next .= "</div>";
            $output_next .= "</form>";

            $output_next .= "<form action='admin_delete_menu_cz.php' method='post'>";
            $output_next .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
              $output_next .= "<div class='col-lg-10 col-lg-offset-2'>";
                $output_next .= "<input id='delete_button' class='btn btn-warning' type='submit' value='Delete'>";
              $output_next .= "</div>";
            $output_next .= "</form>";
            $output_next .= "<span class='skryty'>blaaa</span>";
            echo $output_next;
            } 
          }


          mysql_close($dbhandle);
            ?>
            </div>
        </div>


      </div>
    <?php include_once("paticka.html") ?>
    </div>
  </body>
  </html>
