<?php
$galeria = [
        ['foto' => 'assets/images/photos/img-01.webp', 'descricao' => 'Foto 1'],
        ['foto' => 'assets/images/photos/img-02.webp', 'descricao' => 'Foto 1'],
        ['foto' => 'assets/images/photos/img-03.webp', 'descricao' => 'Foto 1'],
        ['foto' => 'assets/images/photos/img-04.webp', 'descricao' => 'Foto 1'],
        ['foto' => 'assets/images/photos/img-05.webp', 'descricao' => 'Foto 1'],
        ['foto' => 'assets/images/photos/img-06.webp', 'descricao' => 'Foto 1'],
        ['foto' => 'assets/images/photos/img-07.webp', 'descricao' => 'Foto 1'],
]

?>

<section class="s-lazer" id="lazer" data-offset="180">
    <div class="container">
        <div class="top-area">
            <p>Um lugar que une lazer, natureza e sofisticação, o cenário ideal para quem sempre sonhou em ter uma casa
                no campo sem abrir mão do conforto e da estrutura de um grande empreendimento.
            </p>

            <h2>Lazer <span>completo</span></h2>
        </div>

        <div class="area-slider">
            <div class="slide-lazer">
                <div class="swiper-wrapper">
                    <?php foreach ($galeria as $foto): ?>
                        <div class="swiper-slide">
                            <img data-fancybox src="<?= $foto['foto'] ?>"
                                 alt="<?= $foto['descricao'] ?>">

                            <div class="zoom">
                                <i class="ph ph-magnifying-glass-plus"></i>
                                <span>ampliar</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="thumb-lazer">
                <div class="swiper-wrapper">
                    <?php foreach ($galeria as $foto): ?>
                        <div class="swiper-slide">
                            <img src="<?= $foto['foto'] ?>" alt="<?= $foto['descricao'] ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
</section>