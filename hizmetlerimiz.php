<?php
$hizmetler = $baglan->query("SELECT * FROM hizmetler order by id asc", PDO::FETCH_ASSOC);
?>
<section id="services">
  <div class="container pt-50 pb-50">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <h2 class="text-uppercase mt-0"> <span class="text-theme-colored">HİZMETLERİMİZ</span></h2>
          <p>Sizlere en iyi ve en kaliteli hizmeti sunmak<br> birinci hedefimizdir!</p>
        </div>
      </div>
    </div>
    <div class="row multi-row-clearfix">
      <div class="col-md-12">
        <div class="owl-carousel-4col" data-dots="true">
          <?php
          if ($hizmetler->rowCount()) {
            foreach ($hizmetler as $row) {
          ?>
              <div class="item">
                <div class="campaign bg-silver-light maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="<?= URL ?>/upload/hizmetler/<?= $row["resim"] ?>" alt="" class="img-fullwidth">
                    <div class="campaign-overlay"></div>
                  </div>
                  <div class="campaign-details clearfix p-15">
                    <h4 class="font-weight-500 mt-0"><a href="#"><?= $row["ad"] ?></a></h4>
                    <p> <?= $row["kisa_aciklama"] ?></p>
                    <div class="campaign-bottom clearfix">
                      <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-left flip mt-10" href="#">Detay</a>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</section>