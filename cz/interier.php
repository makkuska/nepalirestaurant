
  <?php $name_page = "interier" ?>
  <?php $name_page_en = "interior" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php include_once("page_up_content.html") ?>

    <!-- HLAVNÍ TĚLO STRÁNKY, ZDE EDITOVAT VEŠKERÝ TEXT -->
    <div class="hlavni container"> 
      <div class="row container">
          <h2 class="page-header">Interiér</h2>
          <p>
          Zde budou fotky interiéru.

        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
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
            <li><img title="swajambu" src="../files/foto/lumbini_orez.jpg" /></li>
            <li><img title="swajambu" src="../files/foto/lumbini_orez.jpg" /></li>
            <li><img title="swajambu" src="../files/foto/syambhu_orez.jpg" /></li>
            <li><img title="swajambu" src="../files/foto/syambhu_orez.jpg" /></li>
          </ul>      
          </p>
        </div> <!-- main collumn content -->

  <?php include_once("page_down_content.html") ?>

