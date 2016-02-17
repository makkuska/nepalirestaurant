
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
          <p>
          Přehled o tom, co se u nás aktuálně děje. 
          </p>

          <?php
            //load data
            $datafile = '../files/data/akce.json';
            $data = json_decode(file_get_contents($datafile));
            $features = $data->features;
          ?>

          <div>
            <?php
            //print posts
            $date_2months = date("Y-m-d", strtotime("-2 months"));
            foreach ($features as $f) {
            if ($f->properties->date > $date_2months) {
                $output = '<p><strong>';
                $output .= $f->properties->subjectcz;
                $output .= '</strong> (akce vložena ';
                $output .= $f->properties->date[8] . $f->properties->date[9] . '.' . $f->properties->date[5] . $f->properties->date[6] . '.';
                $output .= $f->properties->date[0] . $f->properties->date[1] . $f->properties->date[2] . $f->properties->date[3] ;
                $output .= ') <br />';
                $output .= $f->properties->messagecz;
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

