<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <?php include_once("head.html") ?>

    <title>Kontakt a přihláška | Soutěž dětské mapy Barbary Petchenik</title>
  </head>

  <body>
    <div class="first container">
      <div class="container">
        <?php include_once("header.html") ?>

        <!-- Navigace -->
        <div class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="#">Cena Barbary Petchenik</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Úvod</a></li>
              <li><a href="pravidla.php">Pravidla soutěže</a></li>
              <li><a href="aktualni.php">Aktuální ročník</a></li>
              <!-- speciální vzhled navigace pro PC, noteboky -->
              <li class="dropdown visible-lg visible-md visible-sm">
              <a href="#" class="dropdown-toggled" data-toggle="dropdown">Historie <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="hist_2013.php">2013</a></li>
                <li><a href="hist_2011.php">2011</a></li>
                <li><a href="hist_2009.php">Do roku 2009</a></li>
              </ul>
              </li>
              <li class="active"><a class="visible-lg visible-md visible-sm" href="kontakt.php">Kontakt a přihláška</a></li>

              <!-- speciální vzhled navigace pro mobilní telefony -->
              <li class="active"><a class="visible-xs" href="kontakt.php">Kontakt a přihláška</a></li>
              <li class="visible-xs page-header odsazeni bily_text">Historie</li>
              <li><a class="visible-xs" href="hist_2013.php">2013</a></li>
              <li><a class="visible-xs" href="hist_2011.php">2011</a></li>
              <li><a class="visible-xs" href="hist_2009.php">Do roku 2009</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>

        <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
        <div class="hlavni container"> 
          <div class="row container">
            <h2 class="page-header">Kontakt a přihláška</h2>
            <p><strong>Výkresy zašlete nejpozději do 21. 12. 2014 na adresu:</strong></p>
            <div class="container">
              <address>Katedra geoinformatiky<br />
                Univerzita Palackého v Olomouci<br />
                17. listopadu 50<br />
                771 46 Olomouc
              </address>
            </div> <!-- /container -->
            <p><em>Obálku označte: Dětská mapa Barbary Petchenik</em></p>
            <p>V případě jakýchkoliv dotazů se, prosím, obraťte na <a
              href="mailto:alena.vondrakova@upol.cz">alena.vondrakova@upol.cz</a></p>
          </div> <!-- /container -->
          <!-- vložená patička: @2014 Katedra geoinformatiky -->
          <?php include_once("paticka.html") ?>
        </div> <!-- /container -->

      </div> <!-- /container -->
    </div> <!-- /container -->

</body>
</html>
