<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <?php include_once("head.html") ?>

    <title>Historie 2011 | Soutěž dětské mapy Barbary Petchenik</title>
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
            <li class="active dropdown visible-lg visible-md visible-sm">
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
            <li class="active"><a class="visible-xs" href="hist_2011.php">2011</a></li>
            <li><a class="visible-xs" href="hist_2009.php">Do roku 2009</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>

      <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
      <div class="hlavni container"> 
        <div class="row container">
          <h2 class="page-header">Historie 2011</h2>
          <p><strong>Do mezinárodního kola byly vybrány následující práce:</strong></p>
          <ul>
            <li>Lucie Nováková (15 let, ZŠ Chabařovice) - Connected World</li> 
            <li>Viktorie Karla Wojnarová (6 let, Bystřice pod Hostýnem) - Globalized World deals With Natural Disasters</li>  
            <li>Josef Novotný (12 let, ZŠ Chabařovice) - Globe In Waste</li>  
            <li>Marcela Kozlíková (15 let, ZŠ Chabařovice) - Journey Around the World</li>
            <li>Viktorie Karla Wojnarová (8 roků, Bystřice pod Hostýnem) – Playful World Map</li>  
            <li>Barbora Mazánková (12 let, ZŠ Chabařovice) - We Are One World</li> 
          </ul>
        </div> <!-- /container -->
        <!-- vložená patička: @2014 Katedra geoinformatiky -->
        <?php include_once("paticka.html") ?>

    </div> <!-- /container -->
  </div> <!-- /container -->
  </div> <!-- /container -->

</body>
</html>
