
  <?php $name_page = "jidelni" ?>
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
              <a href="jidelni.php"> 1</a> |
              <span class="active">2</span> |
              <a href="napojovy.php">Nápojový lístek</a>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;

            echo "<h3>Vegetariánská kari se sýrem Paneer (150 g)</h3>";
            $vegees = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "vege") {
              $vegees .= "<tr>";
              $vegees .= "<td>" . $f->properties->id . "</td> ";
              $vegees .= "<td>" . $f->properties->namecz . "</td>" ;
              $vegees .= "<td>" . $f->properties->price . " Kč </td>";
              $vegees .= "</tr>";
              $vegees .= "<tr class='oranzovy_text'>";
              $vegees .= "<td></td>";
              $vegees .= "<td>" . $f->properties->descriptioncz . "</td>";
              $vegees .= "<td></td>";
              $vegees .= "<td></td>";
              $vegees .= "</tr>";
              }}
            $vegees .= "</table>";
            echo $vegees;

            echo "<h3>Tropické nepálské rolky</h3>";
            $tropicales = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "tropical") {
              $tropicales .= "<tr>";
              $tropicales .= "<td>" . $f->properties->id . "</td> ";
              $tropicales .= "<td>" . $f->properties->namecz . "</td>" ;
              $tropicales .= "<td>" . $f->properties->price . " Kč </td>";
              $tropicales .= "</tr>";
              $tropicales .= "<tr class='oranzovy_text'>";
              $tropicales .= "<td></td>";
              $tropicales .= "<td>" . $f->properties->descriptioncz . "</td>";
              $tropicales .= "<td></td>";
              $tropicales .= "<td></td>";
              $tropicales .= "</tr>";
            }}
            $tropicales .= "</table>";
            echo $tropicales;

            echo "<h3>Speciální nepálské menu</h3>";
            $nepalis = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "nepali") {
              $nepalis .= "<tr>";
              $nepalis .= "<td>" . $f->properties->id . "</td> ";
              $nepalis .= "<td>" . $f->properties->namecz . "</td>" ;
              $nepalis .= "<td>" . $f->properties->price . " Kč </td>";
              $nepalis .= "</tr>";
              $nepalis .= "<tr class='oranzovy_text'>";
              $nepalis .= "<td></td>";
              $nepalis .= "<td>" . $f->properties->descriptioncz . "</td>";
              $nepalis .= "<td></td>";
              $nepalis .= "<td></td>";
              $nepalis .= "</tr>";
            }}
            $nepalis .= "</table>";
            echo $nepalis;

            echo "<h3>Přílohy</h3>";
            echo "<h4>Rýže</h4>";
            $ricees = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "rice") {
              $ricees .= "<tr>";
              $ricees .= "<td>" . $f->properties->id . "</td> ";
              $ricees .= "<td>" . $f->properties->namecz . "</td>" ;
              $ricees .= "<td>" . $f->properties->price . " Kč </td>";
              $ricees .= "</tr>";
            }}
            $ricees .= "</table>";
            echo $ricees;

            echo "<h4>Chleba Naan</h4>";
            $naanes = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "naan") {
              $naanes .= "<tr>";
              $naanes .= "<td>" . $f->properties->id . "</td> ";
              $naanes .= "<td>" . $f->properties->namecz . "</td>" ;
              $naanes .= "<td>" . $f->properties->price . " Kč </td>";
              $naanes .= "</tr>";
            }}
            $naanes .= "</table>";
            echo $naanes;

            echo "<h4>Saláty a čatný</h4>";
            $salades = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "salad") {
              $salades .= "<tr>";
              $salades .= "<td>" . $f->properties->id . "</td> ";
              $salades .= "<td>" . $f->properties->namecz . "</td>" ;
              $salades .= "<td>" . $f->properties->price . " Kč </td>";
              $salades .= "</tr>";
            }}
            $salades .= "</table>";
            echo $salades;

            echo "<h3>Dezerty</h3>";
            $dessertes = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "desserts") {
              $dessertes .= "<tr>";
              $dessertes .= "<td>" . $f->properties->id . "</td> ";
              $dessertes .= "<td>" . $f->properties->name . "</td>" ;
              $dessertes .= "<td>" . $f->properties->price . " Kč </td>";
              $dessertes .= "</tr>";
            }}
            $dessertes .= "</table>";
            echo $dessertes;

            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

