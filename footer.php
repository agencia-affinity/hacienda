<?php include 'inc/data/social-network.php'; ?>
<footer class="s-footer" id="contato">
    <div class="container medium">
        <div class="left">
            <div class="main-top">
                <div class="logos">
                    <figure>
                        <img class="logo" src="assets/images/logo/logo-white.svg" alt="Logo Hacienda">
                    </figure>

                    <figure>
                        <img class="logo" src="assets/images/logo/logo-therras.webp" alt="Logo Therras">
                    </figure>
                </div>
                <div class="area-contacts">

                    <ul class="social-networks">
                        <?php foreach ($dados_socials as $dados_social): ?>
                            <li>
                                <a href="<?= $dados_social['link'] ?>?">
                                    <img src="<?= $dados_social['url_image'] ?>" alt="<?= $dados_social['label'] ?>"
                                         title="<?= $dados_social['label'] ?>">
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="contacts">
                        <a href="https://wa.me/556799981714588" class="whatsapp" target="_blank">
                            <img src="assets/images/icons/icon-whatsapp.svg" alt="Ícone do WhatsApp">
                            <span>67 98171-4588</span>
                        </a>

                        <div class="social-contact">
                            <div class="icons-social">
                                <img src="assets/images/icons/icon-instagram.svg" alt="Ícone do Instagram">
                                <img src="assets/images/icons/icon-facebook-1.svg" alt="Ícone do Facebook">
                            </div>
                            <span>@hacienda.ms</span>
                        </div>
                    </div>
                </div>

                <div class="area-legal">
                    <p class="legal">
                        O empreendimento imobiliário encontra-se registrado sob o R.I. XXXXXX na matrícula nº 22.121,
                        Livro 02, no registro de Imóveis da 1ª Circunscrição Imobiliária da Comarca de Aquidauana/MS,
                        nos termos do Termo de Verificação/Aprovação de Loteamento vinculado ao Processo nº 3531/2025
                        emitido em 14 de agosto de 2025 pela Prefeitura Municipal de Aquidauana/MS. As imagens e
                        perspectivas do empreendimento são meramente ilustrativas e possuem sugestão de decoração e/ou
                        de paisagismo, podendo ser alteradas sem prévio aviso. As áreas comuns e unidades serão
                        entregues conforme memorial descritivo. Loteadora responsável: HACIENDA EMPREENDIMENTOS SPE
                        LTDA, inscrita no CNPJ. sob número 56.875.563/0001-88.
                    </p>
                </div>
            </div>
        </div>

        <div class="right-area">
            <h5>Entre em contato!</h5>
            <p>Aproveite condições exclusivas diretamente com a urbanizadora!</p>

            <form action="" class="form-footer">
                <div class="form-group">
                    <input type="text" placeholder="Nome" required name="nome" id="nome">
                </div>

                <div class="form-group">
                    <input type="email" placeholder="E-mail" required name="email" id="email">
                </div>

                <div class="form-group">
                    <input type="tel" placeholder="Telefone" required name="telefone" id="telefone">
                </div>

                <div class="form-group">
                    <textarea name="mensagem" placeholder="Mensagem" id="mensagem" rows="10"></textarea>
                </div>

                <div class="form-button">
                    <button>Enviar</button>
                </div>
            </form>
        </div>
    </div>
</footer>

<?php include 'inc/components/copy.php'; ?>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/all.js"></script>
</body>
</html>
