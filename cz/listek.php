
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
              <span class="active">1</span> |
              <a href="listek2.php"> 2</a> |
              <a href="listek3.php"> 3</a> |
              <a href="listek4.php"> 4</a> |
              <a href="listek5.php"> 5</a> |
              <a href="listek6.php"> 6</a>
            </h4>
            <?php 
            $file = "../files/data/alacart.json";
            $jsondata = file_get_contents($file);
            $json = json_decode($jsondata,true);

            echo $json["Starters"][1][price];

            echo "<h3>Starters</h3>";
            $starters = "<table class='table'>";
              foreach($json['Starters'] as $starter){
              $starters .= "<tr>";
              $starters .= "<td>" . $starter['id'] . "</td> ";
              $starters .= "<td>" . $starter['name'] . ", " . $starter['size'] . "</td>" ;
              $starters .= "<td>" . $starter['price'] . " Kč </td>";
              $starters .= "</tr>";
              $starters .= "<tr class='oranzovy_text'>";
              $starters .= "<td></td>";
              $starters .= "<td>" . $starter['description'] . "</td>";
              $starters .= "<td></td>";
              $starters .= "<td></td>";
              $starters .= "</tr>";
              }
            $starters .= "</table>";
            echo $starters;

            echo "<h3>Soups</h3>";
            $soups = "<table class='table'>";
              foreach($json['Soups'] as $soup){
              $soups .= "<tr>";
              $soups .= "<td>" . $soup['id'] . "</td> ";
              $soups .= "<td>" . $soup['name'] . "</td>" ;
              $soups .= "<td>" . $soup['price'] . " Kč </td>";
              $soups .= "</tr>";
              }
            $soups .= "</table>";
            echo $soups;

            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

