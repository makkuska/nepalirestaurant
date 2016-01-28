
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
              <a href="listek3.php"> 3</a> |
              <a href="listek4.php"> 4</a> |
              <a href="listek5.php"> 5</a> |
              <span class="active">6</span>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;
            $file = "../files/data/alacart.json";

            echo "<h3>Dessert</h3>";
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

            echo "<h3>Nepali Special Drinks</h3>";
            $drinkes = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "drink") {
              $drinkes .= "<tr>";
              $drinkes .= "<td>" . $f->properties->id . "</td> ";
              $drinkes .= "<td>" . $f->properties->name . "</td>" ;
              $drinkes .= "<td>" . $f->properties->price . " Kč </td>";
              $drinkes .= "</tr>";
            }}
            $drinkes .= "</table>";
            echo $drinkes;

            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

