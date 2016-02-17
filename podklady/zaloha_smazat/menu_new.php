
  <?php $name_page = "menu" ?>
  <?php $name_page_en = "menu" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php 
    include_once("page_up_content.html");
    include_once("admin_select_menu.php"); 
  ?>

    <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
    <div class="hlavni container"> 
      <div class="row container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="page-header">Týdenní menu</h2>
          <p>
          Polední menu se podává formou bufetu <strong>pondělí až pátek mezi 11 a 15 hodinou</strong>.
          </p>
          <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12">
              <table id="tydenni_menu" class='table'>
                <tr>
                  <td></td>
                  <td><strong>Polední menu</strong></td>
                  <td>110 Kč</td>
                </tr>
                <tr>
                  <td></td>
                  <td class='oranzovy_text'>Menu formou bufetu</td>
                  <td></td>
                </tr>
              </table>
              <table id="tydenni_menu" class='table'>
                <tr>
                  <td></td>
                  <td><strong>Polední vegetariánské menu</strong></td>
                  <td>100 Kč</td>
                </tr>
                <tr>
                  <td></td>
                  <td class='oranzovy_text'>Menu formou bufetu</td>
                  <td></td>
                </tr>
              </table>
              <table id="tydenni_menu" class='table'>
                <tr>
                  <td></td>
                  <td><strong>Polední menu (krabička)</strong></td>
                  <td>90 Kč</td>
                </tr>
                <tr>
                  <td></td>
                  <td class='oranzovy_text'>Výběr z poledního menu s sebou</td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>

            <?php

        function cesky_den($den) {
            static $nazvy = array('neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota');
            return $nazvy[$den];
        }
        echo "<p>";
        echo "Dnes je " . cesky_den(date("w")) . ' ' . date('d.m.Y');
        echo "</p>";

            ?>

          <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">

          <?php 
            include_once("menu_conn_db.php"); 
          ?>

          </div>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

