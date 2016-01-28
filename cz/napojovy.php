
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
              Jídelní lístek 
              <a href="listek.php"> 1</a> |
              <a href="listek2.php"> 2</a> |
              <a href="listek3.php"> 3</a> |
              <a href="listek5.php"> 4</a> |
              <span class="active">Nápojový lístek</span>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;
            $file = "../files/data/alacart.json";

            echo "<h3>Pivo</h3>";
            $beer = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "beer") {
              $beer .= "<tr>";
              $beer .= "<td>" . $f->properties->id . "</td> ";
              $beer .= "<td>" . $f->properties->namecz . "</td>" ;
              $beer .= "<td>" . $f->properties->price . " Kč </td>";
              $beer .= "</tr>";
            }}
            $beer .= "</table>";
            echo $beer;

            echo "<h3>Nealkoholické nápoje</h3>";
            $nealko = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "nealko") {
              $nealko .= "<tr>";
              $nealko .= "<td>" . $f->properties->id . "</td> ";
              $nealko .= "<td>" . $f->properties->namecz . "</td>" ;
              $nealko .= "<td>" . $f->properties->price . " Kč </td>";
              $nealko .= "</tr>";
            }}
            $nealko .= "</table>";
            echo $nealko;

            echo "<h3>Energetické nápoje</h3>";
            $energy = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "energy") {
              $energy .= "<tr>";
              $energy .= "<td>" . $f->properties->id . "</td> ";
              $energy .= "<td>" . $f->properties->name . "</td>" ;
              $energy .= "<td>" . $f->properties->price . " Kč </td>";
              $energy .= "</tr>";
            }}
            $energy .= "</table>";
            echo $energy;

            echo "<h3>Teplé nápoje</h3>";
            $hot = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "hot") {
              $hot .= "<tr>";
              $hot .= "<td>" . $f->properties->id . "</td> ";
              $hot .= "<td>" . $f->properties->namecz . "</td>" ;
              $hot .= "<td>" . $f->properties->price . " Kč </td>";
              $hot .= "</tr>";
            }}
            $hot .= "</table>";
            echo $hot;

            echo "<h3>Whiskey & Bourbon</h3>";
            $whiskey = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "whiskey") {
              $whiskey .= "<tr>";
              $whiskey .= "<td>" . $f->properties->id . "</td> ";
              $whiskey .= "<td>" . $f->properties->name . "</td>" ;
              $whiskey .= "<td>" . $f->properties->price . " Kč </td>";
              $whiskey .= "</tr>";
            }}
            $whiskey .= "</table>";
            echo $whiskey;

            echo "<h3>Likéry</h3>";
            $likery = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "likery") {
              $likery .= "<tr>";
              $likery .= "<td>" . $f->properties->id . "</td> ";
              $likery .= "<td>" . $f->properties->name . "</td>" ;
              $likery .= "<td>" . $f->properties->price . " Kč </td>";
              $likery .= "</tr>";
            }}
            $likery .= "</table>";
            echo $likery;

            echo "<h3>Rum</h3>";
            $rum = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "rum") {
              $rum .= "<tr>";
              $rum .= "<td>" . $f->properties->id . "</td> ";
              $rum .= "<td>" . $f->properties->name . "</td>" ;
              $rum .= "<td>" . $f->properties->price . " Kč </td>";
              $rum .= "</tr>";
            }}
            $rum .= "</table>";
            echo $rum;

            echo "<h3>Gin</h3>";
            $gin = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "gin") {
              $gin .= "<tr>";
              $gin .= "<td>" . $f->properties->id . "</td> ";
              $gin .= "<td>" . $f->properties->name . "</td>" ;
              $gin .= "<td>" . $f->properties->price . " Kč </td>";
              $gin .= "</tr>";
            }}
            $gin .= "</table>";
            echo $gin;

            echo "<h3>Gin</h3>";
            $gin = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "gin") {
              $gin .= "<tr>";
              $gin .= "<td>" . $f->properties->id . "</td> ";
              $gin .= "<td>" . $f->properties->name . "</td>" ;
              $gin .= "<td>" . $f->properties->price . " Kč </td>";
              $gin .= "</tr>";
            }}
            $gin .= "</table>";
            echo $gin;

            echo "<h3>Tequilla</h3>";
            $tequilla = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "tequilla") {
              $tequilla .= "<tr>";
              $tequilla .= "<td>" . $f->properties->id . "</td> ";
              $tequilla .= "<td>" . $f->properties->name . "</td>" ;
              $tequilla .= "<td>" . $f->properties->price . " Kč </td>";
              $tequilla .= "</tr>";
            }}
            $tequilla .= "</table>";
            echo $tequilla;

            echo "<h3>Ostatní alko nápoje</h3>";
            $ostatni = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "ostatni") {
              $ostatni .= "<tr>";
              $ostatni .= "<td>" . $f->properties->id . "</td> ";
              $ostatni .= "<td>" . $f->properties->name . "</td>" ;
              $ostatni .= "<td>" . $f->properties->price . " Kč </td>";
              $ostatni .= "</tr>";
            }}
            $ostatni .= "</table>";
            echo $ostatni;

            echo "<h3>Šumivá vína</h3>";
            $sampus = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "sampus") {
              $sampus .= "<tr>";
              $sampus .= "<td>" . $f->properties->id . "</td> ";
              $sampus .= "<td>" . $f->properties->name . "</td>" ;
              $sampus .= "<td>" . $f->properties->price . " Kč </td>";
              $sampus .= "</tr>";
            }}
            $sampus .= "</table>";
            echo $sampus;

            echo "<h3>Víno</h3>";
            $vino = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "vino") {
              $vino .= "<tr>";
              $vino .= "<td>" . $f->properties->id . "</td> ";
              $vino .= "<td>" . $f->properties->name . "</td>" ;
              $vino .= "<td>" . $f->properties->price . " Kč </td>";
              $vino .= "</tr>";
            }}
            $vino .= "</table>";
            echo $vino;

            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

