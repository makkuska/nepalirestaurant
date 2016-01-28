
        <?php
          //load data jidlo
          $datafile = '../files/data/jidlo.json';
          $data = json_decode(file_get_contents($datafile));

          //process form
          if (isset($_POST['url']) && $_POST['url'] == 'http://') {
            $date = filter_input(INPUT_POST, 'date');
            $week = filter_input(INPUT_POST, 'week');
            $meal1 = filter_input(INPUT_POST, 'meal1');
            $meal2 = filter_input(INPUT_POST, 'meal2');
            $meal3 = filter_input(INPUT_POST, 'meal3');
            $meal4 = filter_input(INPUT_POST, 'meal4');
            $meal5 = filter_input(INPUT_POST, 'meal5');
            $meal6 = filter_input(INPUT_POST, 'meal6');
            $meal7 = filter_input(INPUT_POST, 'meal7');
            $meal8 = filter_input(INPUT_POST, 'meal8');

            $newFeature = new stdClass();
            $newFeature->type = 'Feature';
            //attributes
            $prop = new stdClass();
            $prop->date = $date;
            $prop->week = $week;
            $prop->meal1 = $meal1;
            $prop->meal2 = $meal2;
            $prop->meal3 = $meal3;
            $prop->meal4 = $meal4;
            $prop->meal5 = $meal5;
            $prop->meal6 = $meal6;
            $prop->meal7 = $meal7;
            $prop->meal8 = $meal8;
            $newFeature->properties = $prop;
            //position

            //add to features
            $data->features[] = $newFeature;

            //save to file
            $fh = fopen("../files/data/jidlo.json", 'r+')
                  or die("Nelze načíst data");
            fwrite($fh, json_encode($data,JSON_UNESCAPED_UNICODE));
            fclose($fh);
          }

          $features = $data->features;

          $isLogged = TRUE;
        ?>
<!DOCTYPE html>
  <?php $name_page = "" ?>
  <?php $name_page_en = "" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php include_once("page_up_content.html") ?>
    <div id="admin" class="hlavni container"> 
      <div class="row container">
    <h1>Administrator</h1>
    <h2><a href="admin_event.php">Add event</a> | <span class="active">Add meal</span></h2>

          <?php if ($isLogged) { ?>
          <div class="col-lg-4 col-md-4">
            <form action="admin_menu.php" method="post">
            <div class="form-group">
              <label for="date">date: </label> 
              <input id="date" class="form-control" type="date" name="date" required>
            </div>
            <div class="form-group">
              <label for="week">week: </label> 
              <input id="week" class="form-control" type="week" name="week" required>
            </div>
            <div class="form-group">
              <label for="meal1">1. </label> 
              <input id="meal1" class="form-control" name="meal1" type="text" required>
            </div>
            <div class="form-group">
              <label for="meal2">2. </label> 
              <input id="meal2" class="form-control" name="meal2" type="text" required>
            </div>
            <div class="form-group">
              <label for="meal3">3. </label> 
              <input id="meal3" class="form-control" name="meal3" type="text" required>
            </div>
            <div class="form-group">
              <label for="meal4">4. </label> 
              <input id="meal4" class="form-control" name="meal4" type="text" >
            </div>
            <div class="form-group">
              <label for="meal5">5. </label> 
              <input id="meal5" class="form-control" name="meal5" type="text" >
            </div>
            <div class="form-group">
              <label for="meal6">6. </label> 
              <input id="meal6" class="form-control" name="meal6" type="text" >
            </div>
            <div class="form-group">
              <label for="meal7">7. </label> 
              <input id="meal7" class="form-control" name="meal7" type="text" >
            </div>
            <div class="form-group">
              <label for="meal8">8. </label> 
              <input id="meal8" class="form-control" name="meal8" type="text" >
            </div>
            <div class="form-group">
              <input class="btn btn-default" type="submit" value="Submit">
              <input type="hidden" name="url" value="http://">
            </div>
            </form>
          </div>
          <div class="col-lg-7 col-md-7 col-lg-offset-1 col-md-offset-1">

            <?php

              function cesky_den($den) {
                static $nazvy = array('neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota');
                return $nazvy[$den];
              }
              echo "Today is " . date("l") . ' ' . date('d.m.Y') . ', week ' . date('W') . '<br />' . '<br />';

              $this_week = '2016-W'.date('W');
              $week = date('W');
              $week1 = $week+1;
              $next_week = date("Y") . "-W" . $week1;

              //print posts
              foreach ($features as $f) {
              if ($f->properties->date == date("Y-m-d") && ($f->properties->week == $this_week || $f->properties->week == $next_week)) {
                    $output = '<p class="oranzovy_text">';
                    $output .= '<strong>';
                    $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                    $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                    $output .= '</strong> <br />';
                    $output .= $f->properties->meal1 . ' <br />';
                    $output .= $f->properties->meal2 . ' <br />';
                    $output .= $f->properties->meal3 . ' <br />';
                    $output .= $f->properties->meal4 . ' <br />';
                    $output .= $f->properties->meal5 . ' <br />';
                    $output .= $f->properties->meal6 . ' <br />';
                    $output .= $f->properties->meal7 . ' <br />';
                    $output .= $f->properties->meal8 . '</p>';
                    echo $output;
                } else if ($f->properties->date != date("Y-m-d") && ($f->properties->week == $this_week || $f->properties->week == $next_week)) {
                    $output = '<p>';
                    $output .= '<strong>';
                    $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                    $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                    $output .= '</strong> <br />';
                    $output .= $f->properties->meal1 . ' <br />';
                    $output .= $f->properties->meal2 . ' <br />';
                    $output .= $f->properties->meal3 . ' <br />';
                    $output .= $f->properties->meal4 . ' <br />';
                    $output .= $f->properties->meal5 . ' <br />';
                    $output .= $f->properties->meal6 . ' <br />';
                    $output .= $f->properties->meal7 . ' <br />';
                    $output .= $f->properties->meal8 . '</p>';
                    echo $output;
                }
              }

            ?>
          </div>
        <?php } ?>

        <script type="text/javascript">
          var data = <?php echo json_encode($data, JSON_UNESCAPED_SLASHES); ?>;
          init(data);
        </script>

      </div>
    <?php include_once("paticka.html") ?>
    </div>
  </body>
  </html>
