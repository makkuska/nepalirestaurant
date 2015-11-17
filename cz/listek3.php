
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
              <span class="active">3</span> |
              <a href="listek4.php"> 4</a> |
              <a href="listek5.php"> 5</a> |
              <a href="listek6.php"> 6</a>
            </h4>
            <?php 
            $file = "../files/data/alacart.json";
            $jsondata = file_get_contents($file);
            $json = json_decode($jsondata,true);

            echo "<h3>Prawn and Fish (150 g)</h3>";
            $fishes = "<table class='table'>";
              foreach($json['Prawn and Fish (150 g)'] as $fish){
              $fishes .= "<tr>";
              $fishes .= "<td>" . $fish['id'] . "</td> ";
              $fishes .= "<td>" . $fish['name'] . "</td>" ;
              $fishes .= "<td>" . $fish['price'] . " Kč </td>";
              $fishes .= "</tr>";
              $fishes .= "<tr class='oranzovy_text'>";
              $fishes .= "<td></td>";
              $fishes .= "<td>" . $fish['description'] . "</td>";
              $fishes .= "<td></td>";
              $fishes .= "<td></td>";
              $fishes .= "</tr>";
              }
            $fishes .= "</table>";
            echo $fishes;

            echo "<h3>Paneer and Vegetables Curry Dishes (150 g)</h3>";
            $vegees = "<table class='table'>";
              foreach($json['Paneer and Vegetables Curry Dishes (150 g)'] as $vegee){
              $vegees .= "<tr>";
              $vegees .= "<td>" . $vegee['id'] . "</td> ";
              $vegees .= "<td>" . $vegee['name'] . "</td>" ;
              $vegees .= "<td>" . $vegee['price'] . " Kč </td>";
              $vegees .= "</tr>";
              $vegees .= "<tr class='oranzovy_text'>";
              $vegees .= "<td></td>";
              $vegees .= "<td>" . $vegee['description'] . "</td>";
              $vegees .= "<td></td>";
              $vegees .= "<td></td>";
              $vegees .= "</tr>";
              }
            $vegees .= "</table>";
            echo $vegees;
            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

