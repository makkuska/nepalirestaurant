<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <?php include_once("head.html") ?>

    <title>Pravidla soutěže | Soutěž dětské mapy Barbary Petchenik</title>
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
              <li class="active"><a href="pravidla.php">Pravidla soutěže</a></li>
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
              <li><a class="visible-lg visible-md visible-sm" href="kontakt.php">Kontakt a přihláška</a></li>

              <!-- speciální vzhled navigace pro mobilní telefony -->
              <li><a class="visible-xs" href="kontakt.php">Kontakt a přihláška</a></li>
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
            <h2 class="page-header">Pravidla soutěže</h2>
            <ol>
              <li>Maximální velikost obrázku: <strong>A3 (420 x 297 mm)</strong>, povrch plochý, při koláži výška max. 5 mm.</li> 
              <li>Při tvorbě je možné použít <strong>jakékoliv nerozbitné a trvanlivé materiály (papír, textil, apod.).</strong></li>
              <li>Umělecké výtvory <strong>nesmí být pohyblivé ani rozkládací</strong> (obrazy budou skenovány). </li>
              <li>Při tvorbě hranic kontinentů, států, apod. <strong>není dovoleno používat šablony</strong>. </li>
              <li>Práce mohou být vyhotoveny <strong>tradičními metodami</strong> (pastelky, vodové a temperové barvy, pastely,
              voskovky, apod.) nebo s použitím <strong>počítačové grafiky</strong>.</li> 
              <li><strong>Na každém obrázku musí být zezadu umístěn ŠTÍTEK</strong> s následujícími údaji: 
              <ul>
                <li>jméno autora </li>
                <li>věk autora </li>
                <li>adresa (domů nebo adresa školy) </li>
                <li>stát </li>
                <li>název obrázku v českém jazyce a v anglickém jazyce (pokud nebude uveden, překlad zajistíme) </li>
              </ul>
            </ol>
            <div class="container">
              <p><em>Autoři prací poskytují všechna práva k publikování a uveřejnění svých děl v rámci 
                materiálů ICA, a to bezplatně po neomezenou dobu.</em></p>
              <p><strong>Výkresy zašlete na adresu:</strong></p>
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

          </div> <!-- /container -->
          <!-- vložená patička: @2014 Katedra geoinformatiky -->
          <?php include_once("paticka.html") ?>
        </div> <!-- /container -->

      </div> <!-- /container -->
    </div> <!-- /container -->

</body>
</html>
