<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <?php include_once("head.html") ?>
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-image-gallery.min.css">
    <title>Historie 2013 | Soutěž dětské mapy Barbary Petchenik</title>
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
            <li class="active"><a class="visible-xs" href="hist_2013.php">2013</a></li>
            <li><a class="visible-xs" href="hist_2011.php">2011</a></li>
            <li><a class="visible-xs" href="hist_2009.php">Do roku 2009</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>

      <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
      <div class="hlavni container"> 
        <div class="row container">
          <h2 class="page-header">Historie 2013</h2>
          <p>Téma tohoto roku: <strong>Moje místo v dnešním světě</strong></p>
          <p>Hodnocena byla srozumitelnost tématiky, kartografický obsah a kvalita provedení s celkovou estetickou hodnotou. Do soutěže se zapojilo celkem 157 účastníků z řad jednotlivců i prostřednictvím mateřských, základních a středních škol.</p>
          <p><strong>Celkem bylo hodnoceno v jednotlivých kategoriích:</strong></p> 
          <ul>
            <li>Kategorie A – 2 práce</li>
            <li>Kategorie B – 30 prací</li>
            <li>Kategorie C – 90 prací</li>
            <li>Kategorie D – 35 prací</li>
          </ul>
          <p><strong>Do mezinárodního kola byly vybrány následující práce:</strong></p>
            <ul>
              <li>Laura Pohorelcová (6 roků) – My Place on the Earth</li> 
              <li>Jan Poskočil (8 roků) – My Place in the Glare of the World</li>  
              <li>Julie Kroupová (9 roků) – My Own Continent ‐ Orgonia</li>  
              <li>Viktorie Karla Wojnarová (10 roků) – My Place in Today’s World – home, school, trips and fun</li>  
              <li>Kateřina Souralová (13 roků) – Laxys City</li>
              <li>Hana Lamačová (14 roků) – My Place in the Universe</li> 
            </ul>
            <p>Všechny soutěžní práce byly vystaveny v rámci 20. kartografické konference v Plzni září 2013.</p>
          <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
          <div id="blueimp-gallery" class="blueimp-gallery">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->
            <div class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body next"></div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                      <i class="glyphicon glyphicon-chevron-left"></i>
                      Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                      Next
                      <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>     
          <div class="fotky">
          <div class="links container">
            <h3 class="page-header">Kategorie A: do 6 let</h3>
            <div class="row">
              <div class="col-lg-4 col-lg-offset-2">
                <p>1-2.místo <br /><strong>Daniela Nováková</strong><br />Olšany u Prostějova (4 roky)</p>
                <a href="dist/foto/2013/1-2misto_katA_Daniela_Novakova_4roky.jpg" title="Daniela Nováková, 1.místo, kategorie A" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Daniela Nováková, 1.místo, kategorie A">
                </a>
              </div>
              <div class="col-lg-4">
                <p>1-2.místo <br /><strong>Marek Číhal</strong><br />Příkazy (3 roky)</p>
                <a href="dist/foto/2013/1-2misto_katA_Marek_Číhal.jpg" title="Marek Číhal, 1-2.místo, kategorie A" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Marek Číhal, 1-2.místo, kategorie A">
                </a>
              </div>
            </div>
          </div>
          <div class="links container row">
            <h3 class="page-header">Kategorie B: 6-8 roků</h3>
            <div class="row">
              <div class="col-lg-4">
                <p>1.místo <br /><strong>Jan Poskočil</strong><br />Tovéř (8 roků)</p>
                <a href="dist/foto/2013/1misto_katB_Jan_Poskočil.jpg" title="Jan Poskočil, 1. místo, kategorie B" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Jan Poskočil, 1. místo, kategorie B">
                </a>
              </div>
              <div class="col-lg-4">
                <p>2.místo <br /><strong>Patrik Drexler</strong><br />ZŠ a MŠ Dolní Domaslavice (8 roků)</p>
                <a href="dist/foto/2013/2misto_katB_Patrik_Drexler.jpg" title="Patrik Drexler, 2.místo, kategorie B" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Patrik Drexler, 2.místo, kategorie B">
                </a>
              </div>
              <div class="col-lg-4">
                <p>3.místo <br /><strong>Laura Pohorelcová</strong><br />ZŠ Staňkova, Pardubice (6 roků)</p>
                <a href="dist/foto/2013/3misto_katB_Laura_Pohorelcová.jpg" title="Laura Pohorelcová, 3.místo, kategorie B" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Laura Pohorelcová, 3.místo, kategorie B">
                </a>
              </div>
            </div>
          </div>
          <div class="links container">
            <h3 class="page-header">Kategorie C: 9-12 roků</h3>
            <div class="row">
              <div class="col-lg-4">
                <p>1.místo <br /><strong>Viktorie Karla Wojnarová</strong><br />Zahnašovice (10 roků)</p>
                <a href="dist/foto/2013/1misto_katC_Viktorie_Karla_Wojnarová.jpg" title="Viktorie Karla Wojnarová, 1. místo, kategorie C" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Viktorie Karla Wojnarová, 1. místo, kategorie C">
                </a>
              </div>
              <div class="col-lg-4">
                <p>2.místo <br /><strong>Julie Kroupová</strong><br />ZŠ T.G.Masaryka, Český Krumlov (9.roků)</p>
                <a href="dist/foto/2013/2misto_katC_Julie_Kroupová.jpg" title="Julie Kroupová, 2.místo, kategorie C" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Julie Kroupová, 2.místo, kategorie C">
                </a>
              </div>
              <div class="col-lg-4">
                <p>3.místo <br /><strong>Vanessa Marie Wojnarová</strong><br />Zahnašovice (12 roků)</p>
                <a href="dist/foto/2013/3misto_katC_Vanessa_Marie_Wojnarová.jpg" title="Vanessa Marie Wojnarová, 3.místo, kategorie C" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Vanessa Marie Wojnarová, 3.místo, kategorie C">
                </a>
              </div>
            </div>
          </div>
          <div class="links container">
            <h3 class="page-header">Kategorie D: 13-16 roků</h3>
            <div class="row">
              <div class="col-lg-4">
                <p>1.místo <br /><strong>Hana Lamačová</strong><br />ZŠ a Dětský domov Vídeňská, Brno<br /> (14 roků)</p>
                <a href="dist/foto/2013/1misto_katD_Hana_Lamačová.jpg" title="Hana Lamačová, 1.místo, kategorie D" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Hana Lamačová, 1.místo, kategorie D">
                </a>
              </div>
              <div class="col-lg-4">
                <p>2.místo <br /><strong>Kateřina Souralová</strong><br />Gymnázium P. Křížkovského, Brno<br /> (13 roků)</p>
                <a href="dist/foto/2013/2misto_katD_Kateřina_Souralová.jpg" title="Kateřina Souralová, 2.místo, kategorie D" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Kateřina Souralová, 2.místo, kategorie D">
                </a>
              </div>
              <div class="col-lg-4">
                <p>3.místo <br /><strong>Adriana Smékalová</strong><br />ZŠ a Dětský domov Vídeňská, Brno<br /> (15 roků)</p>
                <a href="dist/foto/2013/3misto_katD_Adriana_Smékalová.jpg" title="Adriana Smékalová, 3.místo, kategorie D" data-gallery>
                  <img src="dist/foto/1misto_katB_Jan_Poskočil_orez.jpg" alt="Adriana Smékalová, 3.místo, kategorie D">
                </a>
              </div>
            </div>
            </div>
          </div>
        </div> <!-- /container -->
        <!-- vložená patička: @2014 Katedra geoinformatiky -->
        <?php include_once("paticka.html") ?>
      </div> <!-- /container -->

  </div> <!-- /container -->
  </div> <!-- /container -->
  <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
  <script src="dist/js/bootstrap-image-gallery.min.js"></script>
</body>
</html>
