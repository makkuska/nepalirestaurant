        <?php
          //load data jidlo
          $datafile = '../files/data/jidlo.json';
          $data = json_decode(file_get_contents($datafile));

          //process form
          if (isset($_POST['url']) && $_POST['url'] == 'http://') {
            $date = filter_input(INPUT_POST, 'date');
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

      $fh = fopen("files/data/jidlo.json", 'r+')
            or die("Nelze načíst data");
      fwrite($fh, json_encode($data,JSON_UNESCAPED_UNICODE));
      fclose($fh);

      //      file_put_contents($datafile, json_encode($data));
          }

          $features = $data->features;

          //TODO: if user comes from special addres than enable form (with htaccess?):
          $isLogged = TRUE;
          ?>

  <?php $name_page = "menu" ?>
  <?php $name_page_en = "menu" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php include_once("page_up_content.html") ?>

    <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
    <div class="hlavni container"> 
      <div class="row container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="page-header">Týdenní menu</h2>
          <p>
          Denní menu se podává pondělí až pátek mezi 11 a 15 hodinou. Jednotná cena 110 Kč. 

            <?php

        function cesky_den($den) {
            static $nazvy = array('neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota');
            return $nazvy[$den];
        }
        echo "<br />";
        echo "Dnes je " . cesky_den(date("w")) . ' ' . date('d.m.Y') . '<br />' ;
        $this_week = '2016-W'.date('W');

            //print posts

              foreach ($features as $f) {
              if ($f->properties->date == date("Y-m-d") && $f->properties->week == $this_week) {
                    $output = '<p>';
                    $output .= '<span class="oranzovy_text">';
                    $output .= '<strong>';
                    $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                    $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                    $output .= '</strong> <br />';
                    $output .= '1. ' . $f->properties->meal1 . ' <br />';
                    $output .= '2. ' . $f->properties->meal2 . ' <br />';
                    $output .= '3. ' . $f->properties->meal3 . ' <br />';
                    $output .= '4. ' . $f->properties->meal4 . ' <br />';
                    $output .= '5. ' . $f->properties->meal5 . ' <br />';
                    $output .= '6. ' . $f->properties->meal6 . ' <br />';
                    $output .= '7. ' . $f->properties->meal7 . ' <br />';
                    $output .= '8. ' . $f->properties->meal8 . '</span>';
                    $output .= '</p>';
                    echo $output;
                } else if ($f->properties->date != date("Y-m-d") && $f->properties->week == $this_week) {
                    $output = '<p>';
                    $output .= '<strong>';
                    $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                    $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                    $output .= '</strong> <br />';
                    $output .= '1. ' . $f->properties->meal1 . ' <br />';
                    $output .= '2. ' . $f->properties->meal2 . ' <br />';
                    $output .= '3. ' . $f->properties->meal3 . ' <br />';
                    $output .= '4. ' . $f->properties->meal4 . ' <br />';
                    $output .= '5. ' . $f->properties->meal5 . ' <br />';
                    $output .= '6. ' . $f->properties->meal6 . ' <br />';
                    $output .= '7. ' . $f->properties->meal7 . ' <br />';
                    $output .= '8. ' . $f->properties->meal8 . '';
                    $output .= '</p>';
                    echo $output;
              }
              }
                    

            ?>
          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

