<ul class="menuzord-menu">
    <li><a href="#">Anasayfa</a></li>
    <li><a href="#">Hakkımızda</a></li>
    <li><a href="#">Hizmetler</a>
        <ul class="dropdown">
            <?php
            $bilgiler = hizmet_getir(10)->fetchAll(PDO::FETCH_ASSOC);
            foreach ($bilgiler as $bilgi) {
                echo '<li><a href="#">' . $bilgi["ad"] . '</a></li>';
            }
            ?>
        </ul>
    </li>
    <li><a href="#">İletişim</a></li>
</ul>