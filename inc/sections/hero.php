<?php
$dados_contato = [
        ['label' => '67 98171-4588', 'icon' => 'assets/images/icons/icon-whats-normal.svg', 'alt' => 'Ícone do WhatsApp', 'link' => 'https://wa.me/+5567981714588'],
        ['label' => 'contato@therras.com', 'icon' => 'ph ph-envelope-simple', 'alt' => 'Ícone do WhatsApp', 'link' => 'mailto:contato@therras.com'],
];

?>

<section class="s-hero" id="home">
    <div class="container">
        <div class="left-area" data-aos="fade-right">
            <div class="info-contact">
                <div class="icon">
                    <img src="assets/images/icons/icon-dialog.svg" alt="Ícone de um chat">
                </div>
                <span>Fale conosco:</span>
            </div>

            <ul class="contacts">
                <?php foreach ($dados_contato as $key => $value) { ?>
                    <li>
                        <a target="_blank" rel="noreferrer no-follow" href="<?= $value['link'] ?>" class="contact-item">
                            <figure>
                                <?php if (strpos($value['icon'], 'ph ')) : ?>
                                    <i class="<?= $value['icon'] ?>" aria-hidden="true"></i>
                                <?php else : ?>
                                    <img src="<?= $value['icon'] ?>" alt="<?= $value['alt'] ?>">
                                <?php endif; ?>
                            </figure>
                            <span><?= $value['label'] ?></span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <div class="right-area" data-aos="fade-left">
            <h3>Receba agora:</h3>
            <span>Registre-se para receber a tabela de venda disponível e mais detalhes!</span>

            <form class="form-hero" action="">
                <div class="input-group">
                    <label for="nome" class="sr-only">Nome*</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome*" required>
                </div>

                <div class="input-group">
                    <label for="email" class="sr-only">E-mail*</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail*" required>
                </div>

                <div class="input-group">
                    <label for="telefone" class="sr-only">Telefone*</label>
                    <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone*"
                           required>
                </div>

                <div class="button-group">
                    <button>Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>