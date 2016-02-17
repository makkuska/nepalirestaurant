
        <?php
          //load data
          $datafile = '../files/data/akce.json';
          $data = json_decode(file_get_contents($datafile));

          //process form
          if (isset($_POST['url']) && $_POST['url'] == 'http://') {
            $date = filter_input(INPUT_POST, 'date');
            $subject = filter_input(INPUT_POST, 'subject');
            $message = filter_input(INPUT_POST, 'message');
            $subjectcz = filter_input(INPUT_POST, 'subjectcz');
            $messagecz = filter_input(INPUT_POST, 'messagecz');

            $newFeature = new stdClass();
            $newFeature->type = 'Feature';
            //attributes
            $prop = new stdClass();
            $prop->date = $date;
            $prop->subject = $subject;
            $prop->subjectcz = $subjectcz;
            $prop->message = $message;
            $prop->messagecz = $messagecz;
            $newFeature->properties = $prop;
            //position

            //add to features
            $data->features[] = $newFeature;

            //save to file
            $fh = fopen("../files/data/akce.json", 'r+')
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

        <h2><span class="active">Add event</span> | <a href="admin_menu.php">Add meal</a></h2>

          <?php if ($isLogged) { ?>
          <div class="col-lg-4 col-md-4">
            <form action="admin_event.php" method="post">
            <div class="form-group">
              date: <input class="form-control" type="date" name="date" required>
            </div>
            <div class="form-group">
              subject<input class="form-control" type="text" name="subject" required>
            </div>
            <div class="form-group">
              message: <textarea id="frm-text" class="form-control" name="message" placeholder="text" required></textarea>
            </div>
            <div class="form-group">
              subject (in CZECH)<input class="form-control" type="text" name="subjectcz" required>
            </div>
            <div class="form-group">
              message (in CZECH): <textarea id="frm-text" class="form-control" name="messagecz" placeholder="text" required></textarea>
            </div>
              <input class="btn btn-default" type="submit" value="Submit">
              <input type="hidden" name="url" value="http://">
            </form>
          </div>
          <?php } ?>

          <div class="col-lg-7 col-md-7 col-lg-offset-1 col-md-offset-1">

            <?php

              echo "Today is " . date("l") . ' ' . date('d.m.Y') . ', week ' . date('W') . '<br />' . '<br />';

              //print posts
              foreach ($features as $f) {
                if ($f->properties->date == date("Y-m-d")) {
                  $output = '<p class="oranzovy_text"><strong>';
                  $output .= $f->properties->subjectcz;
                  $output .= '</strong> (akce vložena ';
                  $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                  $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                  $output .= ') <br />';
                  $output .= $f->properties->messagecz;
                  $output .= '</p>';
                  $output .= $f->properties->subject;
                  $output .= '</strong> (event added ';
                  $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                  $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                  $output .= ') <br />';
                  $output .= $f->properties->message;
                  $output .= '</p>';
                  echo $output;
                } else if ($f->properties->date != date("Y-m-d")) {
                  $output = '<p><strong>';
                  $output .= $f->properties->subjectcz;
                  $output .= '</strong> (akce vložena ';
                  $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                  $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                  $output .= ') <br />';
                  $output .= $f->properties->messagecz;
                  $output .= '</p>';
                  $output .= $f->properties->subject;
                  $output .= '</strong> (event added ';
                  $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                  $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                  $output .= ') <br />';
                  $output .= $f->properties->message;
                  $output .= '</p>';
                  echo $output;
                }
              }

            ?>
          </div>

          <script type="text/javascript">
            var data = <?php echo json_encode($data, JSON_UNESCAPED_SLASHES); ?>;
            init(data);
          </script>

      </div>
    <?php include_once("paticka.html") ?>
    </div>
  </body>
  </html>

