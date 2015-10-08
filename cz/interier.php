<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
  <?php include_once("head.html") ?>
  </head>
  <body>
  <?php $name_page = "interier" ?>
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
            <h2 class="page-header">Interier</h2>
            <p>
            Těšíme se na vaši návštěvu a věříme, že se vám u nás bude líbit.
            Zde budou fotky interiéru

          <script type="text/javascript" >
            $(document).ready(function(){
            $('.foto').bxSlider({
              buildPager: function(slideIndex){
                switch(slideIndex){
                  case 0:
                    return '<img src="../files/foto/lumbini_orez.jpg">';
                  case 1:
                    return '<img src="../files/foto/syambhu_orez.jpg">';
                  case 2:
                    return '<img  src="../files/foto/lumbini_orez.jpg">';
                  case 3:
                    return '<img  src="../files/foto/syambhu_orez.jpg">';
                  case 4:
                    return '<img src="../files/foto/lumbini_orez.jpg">';
                  case 5:
                    return '<img src="../files/foto/syambhu_orez.jpg">';
                }
              },
              controls: true,
              autoControls: true,
              captions: true,
            });
            });
          </script>
          <ul class="foto">
            <li><img title="swajambu" src="../files//foto/lumbini_orez.jpg" /></li>
            <li><img title="swajambu" src="../files/foto/syambhu_orez.jpg" /></li>
            <li><img src="../files/foto/lumbini_orez.jpg" /></li>
            <li><img src="../files/foto/lumbini_orez.jpg" /></li>
            <li><img src="../files/foto/syambhu_orez.jpg" /></li>
            <li><img src="../files/foto/syambhu_orez.jpg" /></li>
          </ul>      

            </p>
            </div>

          <?php include_once("sideinfo.html") ?>
          </div> <!-- /container -->

          <?php include_once("paticka.html") ?>
        </div> <!-- /container -->

      </div> <!-- /container -->
      </div> <!-- /container -->

</body>
</html>
