
        <?php

          $isLogged = FALSE;
          $viditelne = "hide";
          $log_viditelne = "";
            $user = "admin";
            $pass = "CZnepal";
          if (isset($_POST['url']) && $_POST['url'] == 'http://') {
            $form_user = filter_input(INPUT_POST, 'user');
            $form_pass = filter_input(INPUT_POST, 'pass');

            $mess = "";
            if ($user == $form_user && $pass == $form_pass) {
              $mess = "You are logged in.";
              $isLogged = TRUE; 
              $viditelne = "";
              $log_viditelne = "hide";

              } else {
              $mess = "User or password is wrong.";
              $isLogged = FALSE; 
              $viditelne = "hide";
              $log_viditelne = "";
            }
            }
        ?>
<!DOCTYPE html>
  <?php $name_page = "" ?>
  <?php $name_page_en = "" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php include_once("page_up_content.html") ?>
    <div id="admin" class="hlavni container"> 
      <div class="row container">
    <h1 class="page-header">Administrator</h1>
    <div class="<?php echo $viditelne?>">
    <h2><a href="admin_event_db.php">Add event </a> | <a href="admin_menu_db.php">Add meal</a></h2>
    </div>

    <?php if ($isLogged == FALSE) { 
    echo $mess ?>
          
          <?php } ?>
    <div class="<?php echo $log_viditelne?>">
          <div class="col-lg-12 col-md-12">
            <form action="admin.php" method="post">
            <div class="form-group">
              user: <input class="form-control" type="text" name="user" required>
            </div>
            <div class="form-group">
              password: <input class="form-control" type="password" name="pass" required>
            </div>
              <input class="btn btn-default" type="submit" value="Submit">
              <input type="hidden" name="url" value="http://">
            </form>
          </div>
        </div>

          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 ">
            <script type="text/javascript" >
              $(document).ready(function(){
                $('.slider_top').bxSlider({
                /*  slideWidth: 850,
                  slideMargin: 10,
                  ticker: true,
                  captions: true,
                  randomStart: true,
                  speed: 50000,
                  */
                  auto: true,
                  autoControl: true,
                  captions: true,
                });
              });
            </script>
            <ul class="slider_top">
                        <li><img title="Lumbini - Mayadevi Temple" src=<?php echo "{$files}files/foto/lumbini_orez.jpg"?>></li>
                        <li><img title="Swajambunath Stupa" src=<?php echo "{$files}files/foto/syambhu_orez.jpg"?>></li>
                        <li><img title="Mt. Everest" src=<?php echo "{$files}files/foto/everest_orez.jpg"?>></li>
                        <li><img title="Lumbini - Shanti Stupa" src=<?php echo "{$files}files/foto/lumbini_2_orez.jpg"?>></li>
                        <li><img title="Rhododendron" src=<?php echo "{$files}files/foto/rhododendron_orez.jpg"?>></li>
                        <li><img title="Pashupatinath" src=<?php echo "{$files}files/foto/pashupatinath_orez.jpg"?>></li>
                        <li><img title="Kathmandu Durbar square" src=<?php echo "{$files}files/foto/durbar_orez.jpg"?>></li>
                        <li><img title="Gosaikunda lakes" src=<?php echo "{$files}files/foto/gosaikunda_orez.jpg"?>></li>
                        <li><img title="Changu narayn" src=<?php echo "{$files}files/foto/changu_narayn_orez.jpg"?>></li>
                        <li><img title="Rhododendron" src=<?php echo "{$files}files/foto/rhododendron2_orez.jpg"?>></li>
            </ul>
  </div>

  </div>
  <?php include_once("paticka.html") ?>
  </div>
  </body>
  </html>
