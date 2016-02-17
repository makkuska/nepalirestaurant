
  <?php $name_page = "menu" ?>
  <?php $name_page_en = "menu" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php 
    include_once("page_up_content.html");
    include_once("../cz/admin_select_menu.php"); 
  ?>

    <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
    <div class="hlavni container"> 
      <div class="row container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="page-header">Lunch menu</h2>
          <p>
          Lunch menu is served as a buffet <strong>Monday to Friday between 11am and 3pm</strong>.
          </p>
          <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12">
              <table id="tydenni_menu" class='table'>
                <tr>
                  <td></td>
                  <td><strong>Lunch menu</strong></td>
                  <td>110 Kč</td>
                </tr>
                <tr>
                  <td></td>
                  <td class='oranzovy_text'>All you can eat</td>
                  <td></td>
                </tr>
              </table>
              <table id="tydenni_menu" class='table'>
                <tr>
                  <td></td>
                  <td><strong>Lunch vegetarian menu</strong></td>
                  <td>100 Kč</td>
                </tr>
                <tr>
                  <td></td>
                  <td class='oranzovy_text'>All you can eat</td>
                  <td></td>
                </tr>
              </table>
              <table id="tydenni_menu" class='table'>
                <tr>
                  <td></td>
                  <td><strong>Lunch menu (take away)</strong></td>
                  <td>90 Kč</td>
                </tr>
                <tr>
                  <td></td>
                  <td class='oranzovy_text'>Lunch selection in the box</td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>

            <?php

        echo "<p>";
        echo "Today is " . date("l") . ' ' . date('d.m.Y');
        echo "</p>";

            ?>

          <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">

          <?php 
            include_once("../cz/menu_conn_db.php"); 
          ?>

          </div>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

