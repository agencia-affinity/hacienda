<?php
$dados_localizacao = [
        ['info' => 'MS 450 Rota Serra Charme Paxixi', 'tempo' => ''],
        ['info' => 'Campo Grande', 'tempo' => '130 km'],
        ['info' => 'Próximo à UEMS', 'tempo' => '4 min'],
        ['info' => 'Aquidauana', 'tempo' => '10 min'],
        ['info' => 'Terroir Pantanal', 'tempo' => '8 min'],
        ['info' => 'Bonito', 'tempo' => '130 km'],
];

?>

<section class="s-localizacao" id="localizacao">
    <div class="container medium">
        <div class="top-infos">
            <h2>Localização <span>privilegiada</span></h2>
            <p>Infraestrutura completa para proporcionar uma experiência sofisticada e exclusiva ao alcance de tudo o
                que você precisa.
            </p>
        </div>

        <div class="bottom-infos">
            <div class="info">
                <figure>
                    <img src="assets/images/icons/icon-pin.svg" alt="Ícone de um ponteiro de GPS">
                </figure>
                <span><strong>MS 450</strong>, Aquidauana - MS</span>
            </div>

            <div class="infos-address">
                <ul class="custom-list">
                    <?php foreach ($dados_localizacao as $index => $item) : ?>
                        <li>
                            <?php if ($index === 0) : ?>
                                <span><?= $item['info']; ?></span>
                            <?php else : ?>
                                <span><?= $item['info']; ?></span>
                                <span class="dots"></span>
                                <span><?= $item['tempo']; ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<iframe class="mapa" data-aos="fade-up"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4710.708634732627!2d-55.6039484!3d-20.4889311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x947df7e96bdfab91%3A0x147b1e0221cd5fd7!2sMS-450%2C%20Mato%20Grosso%20do%20Sul!5e1!3m2!1spt-BR!2sbr!4v1759931008866!5m2!1spt-BR!2sbr"
        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>