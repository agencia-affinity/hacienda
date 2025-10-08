<?php
$links_header = [
        ['title' => 'O Residencial', 'path' => '#residencial'],
        ['title' => 'Sobre nós', 'path' => '#bio'],
        ['title' => 'Lazer', 'path' => '#lazer'],
        ['title' => 'Plantas', 'path' => '#plantas'],
        ['title' => 'Contato', 'path' => '#contato'],
];
?>

<ul class="menu links-header" role="menubar">
    <?php foreach ($links_header as $link) : ?>
        <li role="none" class="menu-item">
            <a
                    class="link <?= isset($link['external']) && $link['external'] ? 'btn-external' : ''; ?>"
                    href="<?= htmlspecialchars($link['path']) ?>"
                    role="menuitem"
                    <?php if (strpos($link['path'], 'http') === 0 || strpos($link['path'], 'https') === 0) : ?>
                        target="_blank" rel="noopener noreferrer"
                    <?php endif; ?>
            >
                <?= htmlspecialchars($link['title']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
