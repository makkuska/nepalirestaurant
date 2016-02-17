
  <?php $name_page = "akce" ?>
  <?php $name_page_en = "events" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php 
    include_once("page_up_content.html");
    include_once("../cz/admin_select_event.php"); 
  ?>

    <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
    <div class="hlavni container"> 
      <div class="row container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="page-header">Events</h2>
          <p>
          </p>

          <div>
          <?php 
            include_once("event_conn_db.php"); 
          ?>
          </div>

        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

