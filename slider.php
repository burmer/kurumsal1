    <?php
    $slider = $baglan->query("SELECT * FROM slayt", PDO::FETCH_ASSOC);
    ?>
    <section id="home">
        <div class="container-fluid p-0">
            <div class="rev_slider_wrapper">
                <div class="rev_slider rev_slider_default" data-version="5.0">
                    <ul>
                        <?php
                        if ($slider->rowCount()) {
                            foreach ($slider as $row) {
                        ?>
                                <li data-index="rs-1" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="<?= URL ?>/upload/slayt/<?= $row["resim"] ?>" data-rotate="0" data-saveperformance="off" data-title="<?= $row["baslik"] ?>" data-description="">
                                    <img src="<?= URL ?>/upload/slayt/<?= $row["resim"] ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>