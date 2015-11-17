
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
              <a href="listek.php"> 1</a>|
              <a href="listek2.php"> 2</a> |
              <a href="listek3.php"> 3</a> |
              <span class="active">4</span> |
              <a href="listek5.php"> 5</a> |
              <a href="listek6.php"> 6</a>
            </h4>

            <?php 
            $file = "../files/data/alacart.json";
            $jsondata = file_get_contents($file);
            $json = json_decode($jsondata,true);

            echo "<h3>Tropical Nepali Khaja</h3>";
            $tropicales = "<table class='table'>";
              foreach($json['Tropical Nepali Khaja'] as $tropical){
              $tropicales .= "<tr>";
              $tropicales .= "<td>" . $tropical['id'] . "</td> ";
              $tropicales .= "<td>" . $tropical['name'] . "</td>" ;
              $tropicales .= "<td>" . $tropical['price'] . " Kč </td>";
              $tropicales .= "</tr>";
              $tropicales .= "<tr class='oranzovy_text'>";
              $tropicales .= "<td></td>";
              $tropicales .= "<td>" . $tropical['description'] . "</td>";
              $tropicales .= "<td></td>";
              $tropicales .= "<td></td>";
              $tropicales .= "</tr>";
              }
            $tropicales .= "</table>";
            echo $tropicales;

            echo "<h3>Nepali Special Dishes Dal Bhat</h3>";
            $nepalis = "<table class='table'>";
              foreach($json['Nepali Special Dishes Dal Bhat'] as $nepali){
              $nepalis .= "<tr>";
              $nepalis .= "<td>" . $nepali['id'] . "</td> ";
              $nepalis .= "<td>" . $nepali['name'] . "</td>" ;
              $nepalis .= "<td>" . $nepali['price'] . " Kč </td>";
              $nepalis .= "</tr>";
              $nepalis .= "<tr class='oranzovy_text'>";
              $nepalis .= "<td></td>";
              $nepalis .= "<td>" . $nepali['description'] . "</td>";
              $nepalis .= "<td></td>";
              $nepalis .= "<td></td>";
              $nepalis .= "</tr>";
              }
            $nepalis .= "</table>";
            echo $nepalis;
            ?>

          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

