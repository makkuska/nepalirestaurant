
  <?php $name_page = "akce" ?>
  <?php $name_page_en = "events" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php include_once("page_up_content.html") ?>

    <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
    <div class="hlavni container"> 
      <div class="row container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="page-header">Akce</h2>
          Přehled o tom, co se u nás aktuálně děje. 

        <?php
          //load data
          $datafile = '../files/data/akce.json';
          $data = json_decode(file_get_contents($datafile));

          //process form
          if (isset($_POST['url']) && $_POST['url'] == 'http://') {
            $date = filter_input(INPUT_POST, 'date');
            $subject = filter_input(INPUT_POST, 'subject');
            $message = filter_input(INPUT_POST, 'message');

            $newFeature = new stdClass();
            $newFeature->type = 'Feature';
            //attributes
            $prop = new stdClass();
            $prop->date = $date;
            $prop->subject = $subject;
            $prop->message = $message;
            $newFeature->properties = $prop;
            //position

            //add to features
            $data->features[] = $newFeature;
            //save to file
            file_put_contents($datafile, json_encode($data));
          }

          $features = $data->features;
          //TODO: if user comes from special addres than enable form (with htaccess?):
          $isLogged = TRUE;
        ?>
          <div>
            <?php
            //print posts
            $date_2months = date("Y-m-d", strtotime("-2 months"));
            foreach ($features as $f) {
            if ($f->properties->date > $date_2months) {
                $output = '<p><strong>';
                $output .= $f->properties->subject;
                $output .= '</strong> (akce vložena ';
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

        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

