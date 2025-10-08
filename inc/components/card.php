<?php
/**
 * Componente reutilizável para cards.
 *
 * @var string $title
 * @var string $text
 * @var string $image
 * @var string $alt_image
 */
?>

<div class="card">
    <div class="icon">
        <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($alt_image) ?>">
    </div>
    <h3><?= htmlspecialchars($title) ?></h3>
    <p><?= htmlspecialchars($text) ?></p>
</div>
