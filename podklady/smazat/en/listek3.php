
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
              <a href="listek.php"> 1</a> |
              <a href="listek2.php"> 2</a> |
              <span class="active">3</span> |
              <a href="listek4.php"> 4</a> |
              <a href="listek5.php"> 5</a> |
              <a href="listek6.php"> 6</a>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;

            echo "<h3>Prawn and Fish (150 g)</h3>";
            $fishes = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "fish") {
              $fishes .= "<tr>";
              $fishes .= "<td>" . $f->properties->id . "</td> ";
              $fishes .= "<td>" . $f->properties->name . "</td>" ;
              $fishes .= "<td>" . $f->properties->price . " Kč </td>";
              $fishes .= "</tr>";
              $fishes .= "<tr class='oranzovy_text'>";
              $fishes .= "<td></td>";
              $fishes .= "<td>" . $f->properties->description . "</td>";
              $fishes .= "<td></td>";
              $fishes .= "<td></td>";
              $fishes .= "</tr>";
            }}
            $fishes .= "</table>";
            echo $fishes;

            echo "<h3>Paneer and Vegetables Curry Dishes (150 g)</h3>";
            $vegees = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "vege") {
              $vegees .= "<tr>";
              $vegees .= "<td>" . $f->properties->id . "</td> ";
              $vegees .= "<td>" . $f->properties->name . "</td>" ;
              $vegees .= "<td>" . $f->properties->price . " Kč </td>";
              $vegees .= "</tr>";
              $vegees .= "<tr class='oranzovy_text'>";
              $vegees .= "<td></td>";
              $vegees .= "<td>" . $f->properties->description . "</td>";
              $vegees .= "<td></td>";
              $vegees .= "<td></td>";
              $vegees .= "</tr>";
              }}
            $vegees .= "</table>";
            echo $vegees;
            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

