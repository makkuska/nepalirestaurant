
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
              <a href="listek2.php"> 2</a> |
              <a href="listek3.php"> 3</a> |
              <a href="listek4.php"> 4</a> |
              <a href="listek5.php"> 5</a> |
              <span class="active">6</span>
            </h4>
            <?php 
            $file = "../files/data/alacart.json";
            $jsondata = file_get_contents($file);
            $json = json_decode($jsondata,true);

            echo "<h3>Dessert</h3>";
            $dessertes = "<table class='table'>";
              foreach($json['Dessert'] as $dessert){
              $dessertes .= "<tr>";
              $dessertes .= "<td>" . $dessert['id'] . "</td> ";
              $dessertes .= "<td>" . $dessert['name'] . "</td>" ;
              $dessertes .= "<td>" . $dessert['price'] . " Kč </td>";
              $dessertes .= "</tr>";
              }
            $dessertes .= "</table>";
            echo $dessertes;

            echo "<h3>Nepali Special Drinks</h3>";
            $drinkes = "<table class='table'>";
              foreach($json['Nepali Special Drinks'] as $drink){
              $drinkes .= "<tr>";
              $drinkes .= "<td>" . $drink['id'] . "</td> ";
              $drinkes .= "<td>" . $drink['name'] . "</td>" ;
              $drinkes .= "<td>" . $drink['price'] . " Kč </td>";
              $drinkes .= "</tr>";
              }
            $drinkes .= "</table>";
            echo $drinkes;

            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

