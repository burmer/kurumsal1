  <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
      <div class="container pt-70 pb-40">
          <div class="row border-bottom-black">
              <div class="col-sm-6 col-md-3">
                  <div class="widget dark">
                      <img class="mt-10 mb-20" alt="" src="upload/<?= logo ?>">
                      <p><?= adres ?></p>
                      <ul class="list-inline mt-5">
                          <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?= tel ?></a> </li>
                          <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?= eposta ?></a> </li>
                          <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#"><?= SITE_AD ?></a> </li>
                      </ul>
                      <ul class="social-icons icon-dark icon-theme-colored icon-circled icon-sm mt-15">
                          <li><a href="<?= face ?>"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="<?= twit ?>"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="<?= google ?>"><i class="fa fa-google"></i></a></li>
                          <li><a href="<?= linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="<?= insta ?>"><i class="fa fa-instagram"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3">
                  <div class="widget dark">
                      <h5 class="widget-title line-bottom">Bizden Haberler</h5>
                      <div class="latest-posts">
                          <?php
                            $bilgiler = hizmet_getir(3)->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($bilgiler as $bilgi) {
                            ?>
                              <article class="post media-post clearfix pb-0 mb-10">
                                  <a href="#" class="post-thumb"><img alt="" src="<?= URL ?>/upload/hizmetler/<?= $bilgi["resim"] ?>" style="width: 80px;height:55px"></a>
                                  <div class="post-right">
                                      <h5 class="post-title mt-0 mb-5"><a href="#"><?= $bilgi["ad"] ?></a></h5>
                                      <p class="post-date mb-0 font-12"><?= $bilgi["ad"] ?></p>
                                  </div>
                              </article>
                          <?php
                            }
                            ?>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3">
                  <div class="widget dark">
                      <h5 class="widget-title line-bottom">Hizmetler</h5>
                      <ul class="list angle-double-right list-border">
                          <?php
                            $hizmetler = hizmet_getir(5)->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($hizmetler as $hzmt) {
                                echo '<li><a href="#">' . $hzmt["ad"] . '</a></li>';
                            }
                            ?>

                      </ul>
                  </div>
              </div>

              <div class="col-sm-6 col-md-3">
                  <div class="widget dark">
                      <h5 class="widget-title line-bottom">Site Kısayolları</h5>
                      <ul class="list angle-double-right list-border">
                          <li><a href="#">Hakkımızda</a></li>
                          <li><a href="#">Anasayfa</a></li>
                          <li><a href="#">İletişim</a></li>
                      </ul>
                  </div>
              </div>

          </div>
      </div>

      <div class="footer-bottom bg-black-333">
          <div class="container pt-15 pb-10">
              <div class="row">
                  <div class="col-md-6">
                      <p class="font-11 text-black-777 m-0 sm-text-center">Copyright &copy;2020 <?= SITE_AD ?> All Rights Reserved</p>
                  </div>
                  <div class="col-md-6 text-right">
                      <div class="widget no-border m-0">
                          <ul class="list-inline sm-text-center mt-5 font-12">
                              <li>
                                  <a href="#">Anasayfa</a>
                              </li>
                              <li>|</li>
                              <li>
                                  <a href="#">Hakkımızda</a>
                              </li>
                              <li>|</li>
                              <li>
                                  <a href="#">İletişim</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->