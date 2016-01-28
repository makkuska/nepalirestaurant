
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
              <span class="active">5</span> |
              <a href="listek6.php"> 6</a>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;

            echo "<h3>Side Dish</h3>";
            echo "<h4>Rice</h4>";
            $ricees = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "rice") {
              $ricees .= "<tr>";
              $ricees .= "<td>" . $f->properties->id . "</td> ";
              $ricees .= "<td>" . $f->properties->name . "</td>" ;
              $ricees .= "<td>" . $f->properties->price . " Kč </td>";
              $ricees .= "</tr>";
            }}
            $ricees .= "</table>";
            echo $ricees;

            echo "<h4>Naan</h4>";
            $naanes = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "naan") {
              $naanes .= "<tr>";
              $naanes .= "<td>" . $f->properties->id . "</td> ";
              $naanes .= "<td>" . $f->properties->name . "</td>" ;
              $naanes .= "<td>" . $f->properties->price . " Kč </td>";
              $naanes .= "</tr>";
            }}
            $naanes .= "</table>";
            echo $naanes;

            echo "<h4>Salad and Chutney</h4>";
            $salades = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "salad") {
              $salades .= "<tr>";
              $salades .= "<td>" . $f->properties->id . "</td> ";
              $salades .= "<td>" . $f->properties->name . "</td>" ;
              $salades .= "<td>" . $f->properties->price . " Kč </td>";
              $salades .= "</tr>";
            }}
            $salades .= "</table>";
            echo $salades;

            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

