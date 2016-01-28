
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
              <span class="active">1</span> |
              <a href="listek2.php"> 2</a> |
              <a href="listek3.php"> 3</a> |
              <a href="listek4.php"> 4</a> |
              <a href="listek5.php"> 5</a> |
              <a href="listek6.php"> 6</a>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;

            echo "<h3>Starters</h3>";
            $starters = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "starters") {
              $starters .= "<tr>";
              $starters .= "<td>" . $f->properties->id . "</td> ";
              $starters .= "<td>" .  $f->properties->name . ", " . $f->properties->size . "</td>" ;
              $starters .= "<td>" . $f->properties->price . " Kč </td>";
              $starters .= "</tr>";
              $starters .= "<tr class='oranzovy_text'>";
              $starters .= "<td></td>";
              $starters .= "<td>" . $f->properties->description . "</td>";
              $starters .= "<td></td>";
              $starters .= "<td></td>";
              $starters .= "</tr>";
            }}
            $starters .= "</table>";
            echo $starters;

            echo "<h3>Soups</h3>";
            $soups = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "soups") {
              $soups .= "<tr>";
                $soups .= "<td>" . $f->properties->id . "</td> ";
                $soups .= "<td>" . $f->properties->name . "</td>" ;
                $soups .= "<td>" . $f->properties->price . " Kč </td>";
              $soups .= "</tr>";
            }}
            $soups .= "</table>";
            echo $soups;

            echo "<h3>Tandoori Specials (200 g)</h3>";
            $tandoori = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "tandoori") {
              $tandoori .= "<tr>";
              $tandoori .= "<td>" . $f->properties->id . "</td> ";
              $tandoori .= "<td>" . $f->properties->name . "</td>" ;
              $tandoori .= "<td>" . $f->properties->price . " Kč </td>";
              $tandoori .= "</tr>";
              $tandoori .= "<tr class='oranzovy_text'>";
              $tandoori .= "<td></td>";
              $tandoori .= "<td>" . $f->properties->description . "</td>";
              $tandoori .= "<td></td>";
              $tandoori .= "<td></td>";
              $tandoori .= "</tr>";
            }}
            $tandoori .= "</table>";
            echo $tandoori;

            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

