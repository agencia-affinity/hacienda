<?php
/**
 * Componente reutilizável para títulos de seção.
 *
 * @var string $title
 * @var string $bg
 */
?>
<div class="title-section <?= ($bg === 'white') ? 'bg-white' : 'bg-dark' ?>">
    <figure class="icon">
        <img src="assets/images/illustras/icon-leaf.svg" alt="Imagem de um vetor de folha">
    </figure>

    <span>
        <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>
    </span>
</div>
