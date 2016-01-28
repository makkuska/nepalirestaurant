
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
              <span class="active">2</span> |
              <a href="listek3.php"> 3</a> |
              <a href="listek4.php"> 4</a> |
              <a href="listek5.php"> 5</a> |
              <a href="listek6.php"> 6</a>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;

            echo "<h3>Chicken Curry Dishes (200 g)</h3>";
            $chickens = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "chicken") {
              $chickens .= "<tr>";
              $chickens .= "<td>" . $f->properties->id . "</td> ";
              $chickens .= "<td>" . $f->properties->name . "</td>" ;
              $chickens .= "<td>" . $f->properties->price . " Kč </td>";
              $chickens .= "</tr>";
              $chickens .= "<tr class='oranzovy_text'>";
              $chickens .= "<td></td>";
              $chickens .= "<td>" . $f->properties->description . "</td>";
              $chickens .= "<td></td>";
              $chickens .= "<td></td>";
              $chickens .= "</tr>";
            }}
            $chickens .= "</table>";
            echo $chickens;

            echo "<h3>Lamb Curry Dishes (200 g)</h3>";
            $lambs = "<table class='table'>";

            foreach ($features as $f) {
            if ($f->properties->part == "lamb") {
              $lambs .= "<tr>";
              $lambs .= "<td>" . $f->properties->id . "</td> ";
              $lambs .= "<td>" . $f->properties->name . "</td>" ;
              $lambs .= "<td>" . $f->properties->price . " Kč </td>";
              $lambs .= "</tr>";
              $lambs .= "<tr class='oranzovy_text'>";
              $lambs .= "<td></td>";
              $lambs .= "<td>" . $f->properties->description . "</td>";
              $lambs .= "<td></td>";
              $lambs .= "<td></td>";
              $lambs .= "</tr>";
            }}
            $lambs .= "</table>";
            echo $lambs;
            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

