  <!-- Header -->
  <header id="header" class="header">
      <div class="header-top bg-black-333 sm-text-center border-top-theme-color-3px p-0">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <div class="widget no-border m-0">
                          <ul class="styled-icons icon-dark icon-flat icon-sm sm-text-center mt-sm-15">
                              <li><a href="<?= face ?>"><i class="fa fa-facebook text-white"></i></a></li>
                              <li><a href="<?= twit ?>"><i class="fa fa-twitter text-white"></i></a></li>
                              <li><a href="<?= google ?>"><i class="fa fa-google-plus text-white"></i></a></li>
                              <li><a href="<?= insta ?>"><i class="fa fa-instagram text-white"></i></a></li>
                              <li><a href="<?= linkedin ?>"><i class="fa fa-linkedin text-white"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-6 pr-0">
                      <div class="widget no-border">
                          <ul class="list-inline pull-right flip sm-pull-none xs-text-center text-white mt-5">
                              <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-theme-colored"></i> <?= tel ?></a> </li>
                              <li class="m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-theme-colored"></i> <?= calisma_saati ?> </li>
                              <li class="m-0 pl-10 pr-10">
                                  <a href="#" class="text-white"><i class="fa fa-envelope-o text-theme-colored"></i><?= eposta ?></a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-2">
                  </div>
              </div>
          </div>
      </div>
      <div class="header-nav">
          <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
              <div class="container">
                  <nav id="menuzord-right" class="menuzord default">
                      <a class="menuzord-brand pull-left flip xs-pull-center mt-20" href="<?= URL ?>">
                          <img src="upload/<?= logo ?>" alt="">
                      </a>
                            <?php require_once "ust_menu.php";?>
                  </nav>
              </div>
          </div>
      </div>
  </header>