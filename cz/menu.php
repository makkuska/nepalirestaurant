        <?php
          //load data jidlo
          $datafile = '../files/data/jidlo.json';
          $data = json_decode(file_get_contents($datafile));
          $features = $data->features;

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
          Polední menu se podává formou bufetu <strong>pondělí až pátek mezi 11 a 15 hodinou</strong>.
          </p>
          <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12">
              <table class='table'>
                <tr>
                  <td></td>
                  <td><strong>Polední menu</strong></td>
                  <td>110 Kč</td>
                </tr>
                <tr>
                  <td></td>
                  <td class='oranzovy_text'>Menu formou bufetu</td>
                  <td></td>
                </tr>
              </table>
              <table class='table'>
                <tr>
                  <td></td>
                  <td><strong>Polední menu (krabička)</strong></td>
                  <td>90 Kč</td>
                </tr>
                <tr>
                  <td></td>
                  <td class='oranzovy_text'>Výběr z poledního menu s sebou</td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>

            <?php

        function cesky_den($den) {
            static $nazvy = array('neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota');
            return $nazvy[$den];
        }
        echo "<p>";
        echo "Dnes je " . cesky_den(date("w")) . ' ' . date('d.m.Y');
        echo "</p>";
        $this_week = '2016-W'.date('W');

            ?>

          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

            <?php

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
          </div>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

