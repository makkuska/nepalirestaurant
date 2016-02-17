
  <?php $name_page = "akce" ?>
  <?php $name_page_en = "events" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php 
    include_once("page_up_content.html");
    include_once("admin_select_event.php"); 
  ?>

    <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
    <div class="hlavni container"> 
      <div class="row container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="page-header">Akce</h2>
          <p>
          Přehled o tom, co se u nás aktuálně děje. 
          </p>

          <div>

            <?php
            //print posts
            $date_2months = date("Y-m-d", strtotime("-2 months"));
            ?>

          <?php 
            include_once("akce_conn_db.php"); 
          ?>
          </div>

        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

