
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
              <span class="active">Jídelní lístek </span>
              <a href="listek.php"> 1</a> |
              <a href="listek2.php"> 2</a> |
              <span class="active">3</span> |
              <a href="listek5.php"> 4</a> |
              <a href="listek6.php">Nápojový lístek</a>
            </h4>
            <?php 
            $datafile = "../files/data/alacart.json";
            $data = json_decode(file_get_contents($datafile));

            $features = $data->features;


            ?>
          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

