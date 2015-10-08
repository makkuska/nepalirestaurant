<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
  <?php include_once("head.html") ?>

  </head>
  <body>
  <?php $name_page = "akce" ?>
    <!--[if lt IE 9]>
      <script src="files/js/html5shiv.js"></script>
      <script src="files/js/respond.min.js"></script>
    <![endif]-->

    <div class="first container">
      <div class="container">
        <!-- div jumbotron -->
        <?php include_once("slider.html") ?>

        <!-- div navigator -->
        <?php include_once("header.html") ?>

        <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
        <div class="hlavni container"> 
          <div class="row container">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <h2 class="page-header">Akce</h2>
            <p>
            Těšíme se na vaši návštěvu a věříme, že se vám u nás bude líbit.
            </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
             <h4 class="page-header">Kontakt</h4>
             Nepali restaurant<br />
             Dolní náměstí, Olomouc

             <h4 class="page-header">Rezervace</h4>
              <strong>Telefon</strong><br />
             +420 585 999 999<br />
              <strong>Mail</strong><br />
              rezervation@nepalirestaurant.cz<br />

              <h4 class="page-header">Akce</h4>
              Neděle - Otevřeno ...<a href="cz/akce.php">více</a><br />
              Neděle - otevřeno!!! ...<a href="cz/akce.php">více</a><br />
                Obědy až do 15 hod. Lu ...<a href="cz/akce.php">více</a><br />
                Nové - New!!! ...<a href="cz/akce.php">více</a><br />

              <h4 class="page-header">Akceptujeme platební karty:</h4>
            visa master american maestro
            <h4 class="page-header">Akceptujeme tyto stravenky:</h4>
            cheque  ticket  gastro
            </div>
          </div> <!-- /container -->

          <?php include_once("paticka.html") ?>
        </div> <!-- /container -->

      </div> <!-- /container -->
    </div> <!-- /container -->

</body>
</html>
