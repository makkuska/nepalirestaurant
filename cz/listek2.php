
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
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
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
            $file = "../files/data/alacart.json";
            $jsondata = file_get_contents($file);
            $json = json_decode($jsondata,true);

            echo "<h3>Tandoori Specials (200 g)</h3>";
            $tandoori = "<table class='table'>";
              foreach($json['Tandoori Specials'] as $specials){
              $tandoori .= "<tr>";
              $tandoori .= "<td>" . $specials['id'] . "</td> ";
              $tandoori .= "<td>" . $specials['name'] . "</td>" ;
              $tandoori .= "<td>" . $specials['price'] . " Kč </td>";
              $tandoori .= "</tr>";
              $tandoori .= "<tr class='oranzovy_text'>";
              $tandoori .= "<td></td>";
              $tandoori .= "<td>" . $specials['description'] . "</td>";
              $tandoori .= "<td></td>";
              $tandoori .= "<td></td>";
              $tandoori .= "</tr>";
              }
            $tandoori .= "</table>";
            echo $tandoori;

            echo "<h3>Lamb Curry Dishes (200 g)</h3>";
            $lambs = "<table class='table'>";
              foreach($json['Lamb Curry Dishes (200 g)'] as $lamb){
              $lambs .= "<tr>";
              $lambs .= "<td>" . $lamb['id'] . "</td> ";
              $lambs .= "<td>" . $lamb['name'] . "</td>" ;
              $lambs .= "<td>" . $lamb['price'] . " Kč </td>";
              $lambs .= "</tr>";
              $lambs .= "<tr class='oranzovy_text'>";
              $lambs .= "<td></td>";
              $lambs .= "<td>" . $lamb['description'] . "</td>";
              $lambs .= "<td></td>";
              $lambs .= "<td></td>";
              $lambs .= "</tr>";
              }
            $lambs .= "</table>";
            echo $lambs;
            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

