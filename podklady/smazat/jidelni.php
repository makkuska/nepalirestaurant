
  <?php $name_page = "listek" ?>
  <?php $name_page_en = "alacart" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php include_once("page_up_content.html") ?>

    <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
    <div class="hlavni container"> 
      <div class="row container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="page-header">Jídelní a nápojový lístek</h2>
          <p>
            <h4>
              <span class="active">Jídelní lístek </span>
              <span class="active">1</span> |
              <a href="jidelni2.php"> 2</a> |
              <a href="napojovy.php">Nápojový lístek</a>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;

            echo "<h3>Předkrmy</h3>";
            $starters = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "starters") {
              $starters .= "<tr>";
              $starters .= "<td>" . $f->properties->id . "</td> ";
              $starters .= "<td>" .  $f->properties->namecz . ", " . $f->properties->size . "</td>" ;
              $starters .= "<td>" . $f->properties->price . " Kč </td>";
              $starters .= "</tr>";
              $starters .= "<tr class='oranzovy_text'>";
              $starters .= "<td></td>";
              $starters .= "<td>" . $f->properties->descriptioncz . "</td>";
              $starters .= "<td></td>";
              $starters .= "<td></td>";
              $starters .= "</tr>";
            }}
            $starters .= "</table>";
            echo $starters;

            $soups = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "soups") {
              $soups .= "<tr>";
                $soups .= "<td>" . $f->properties->id . "</td> ";
                $soups .= "<td>" . $f->properties->namecz . "</td>" ;
                $soups .= "<td>" . $f->properties->price . " Kč </td>";
              $soups .= "</tr>";
            }}
            $soups .= "</table>";

            echo "<h3>Speciality z pece Tandoori (200 g)</h3>";
            $tandoori = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "tandoori") {
              $tandoori .= "<tr>";
              $tandoori .= "<td>" . $f->properties->id . "</td> ";
              $tandoori .= "<td>" . $f->properties->namecz . "</td>" ;
              $tandoori .= "<td>" . $f->properties->price . " Kč </td>";
              $tandoori .= "</tr>";
              $tandoori .= "<tr class='oranzovy_text'>";
              $tandoori .= "<td></td>";
              $tandoori .= "<td>" . $f->properties->descriptioncz . "</td>";

              $tandoori .= "<td></td>";

              $tandoori .= "<td></td>";
              $tandoori .= "</tr>";
            }}
            $tandoori .= "</table>";
            echo $tandoori;

            echo "<h3>Kuřecí kari (200 g)</h3>";
            $chickens = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "chicken") {
              $chickens .= "<tr>";
              $chickens .= "<td>" . $f->properties->id . "</td> ";
              $chickens .= "<td>" . $f->properties->namecz . "</td>" ;
              $chickens .= "<td>" . $f->properties->price . " Kč </td>";
              $chickens .= "</tr>";
              $chickens .= "<tr class='oranzovy_text'>";
              $chickens .= "<td></td>";
              $chickens .= "<td>" . $f->properties->descriptioncz . "</td>";
              $chickens .= "<td></td>";
              $chickens .= "<td></td>";
              $chickens .= "</tr>";
            }}
            $chickens .= "</table>";
            echo $chickens;

            echo "<h3>Jehněčí kari (200 g)</h3>";
            $lambs = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "lamb") {
              $lambs .= "<tr>";
              $lambs .= "<td>" . $f->properties->id . "</td> ";
              $lambs .= "<td>" . $f->properties->namecz . "</td>" ;
              $lambs .= "<td>" . $f->properties->price . " Kč </td>";
              $lambs .= "</tr>";
              $lambs .= "<tr class='oranzovy_text'>";
              $lambs .= "<td></td>";
              $lambs .= "<td>" . $f->properties->descriptioncz . "</td>";
              $lambs .= "<td></td>";
              $lambs .= "<td></td>";
              $lambs .= "</tr>";
            }}
            $lambs .= "</table>";
            echo $lambs;

            echo "<h3>Krevety a ryby (150 g)</h3>";
            $fishes = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "fish") {
              $fishes .= "<tr>";
              $fishes .= "<td>" . $f->properties->id . "</td> ";
              $fishes .= "<td>" . $f->properties->namecz . "</td>" ;
              $fishes .= "<td>" . $f->properties->price . " Kč </td>";
              $fishes .= "</tr>";
              $fishes .= "<tr class='oranzovy_text'>";
              $fishes .= "<td></td>";
              $fishes .= "<td>" . $f->properties->descriptioncz . "</td>";
              $fishes .= "<td></td>";
              $fishes .= "<td></td>";
              $fishes .= "</tr>";
            }}
            $fishes .= "</table>";
            echo $fishes;

            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

