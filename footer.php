
<footer class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xl-12 offset-xl-0">
            <div class="text-left mb-4 mt-4 bold"><strong>Newsletter</strong></div>
        </div>
    </div>
    <div class="row my-4">
        
        <div class="col-lg-9 col-xl-9 offset-xl-0">
            <div class="newsletter">
                <form class="form-inline">
                    <div class="newsletter__field col-lg-3 col-xl-3 offset-xl-0">
                        <label class="newsletter__label" for="newsname">Nome*</label>
                        <input class="newsletter__input" id="newsname" type="text" required="required" name="nome" placeholder="" pattern="([0-z]{1,30}\s?){1,10}">
                    </div>
                    <div class="newsletter__field col-lg-3">
                        <label class="newsletter__label" for="newsmail">Email*</label>
                        <input class="newsletter__input" id="newsmail" type="email" required="required" name="email" placeholder="">
                    </div>
                    <div class="newsletter__field col-lg-3">
                        <label class="newsletter__label" for="newsdocument">CPF </label>
                        <input class="newsletter__input newsletter__document" id="newsdocument" type="text" name="cpf" placeholder="" pattern="(^$)|(^\d{3}\.\d{3}\.\d{3}-\d{2})">
                    </div>
                    <div class="col-lg-3 mt-4 text-center">
                            <p><button class="newsletter__button">Enviar</button></p>

                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-3 col-xl-3 offset-xl-0">
            <ul class="footer__social">
                <a href="https://www.instagram.com/FoxtonBrasil" target="_blank" rel="noopener noreferrer">Instagram / </a>
                <a href="https://www.facebook.com/FoxtonBrasil" target="_blank" rel="noopener noreferrer">Facebook / </a>
                <a href="https://www.youtube.com/FoxtonBrasil" target="_blank" rel="noopener noreferrer">Youtube</a>
            </ul>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-9 col-xl-9 offset-xl-0">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-xl-3 offset-xl-0">
                    <h5 class="mb-3 mt-4">Institucional</h3>
                    <ul class="footer-links">
                        <li><a href="#">A Foxton</a></li>
                        <li><a href="#">Lojas</a></li>
                        <li><a href="#">Fábrica</a></li>
                        <li><a href="#">Seja um revendedor</a></li>
                        <li><a href="#">Grupo Soma</a></li>
                    </ul>
                </div>

                <div class="col-sm-3 col-md-3 item">
                    <h5 class='mb-4 mt-4'>Políticas</h5>
                    <ul class="footer-links">
                        <li><a href="#">Termos de Uso</a></li>
                        <li><a href="#">Trocas e Devoluções</a></li>
                        <li><a href="#">Formas de Parcelamento</a></li>
                        <li><a href="#">Privacidade e Segurança</a></li>
                    </ul>
                </div>

                <div class="col-sm-3 col-md-3 item">
                    <h5 class='mb-4 mt-4'>Central de Atendimento</h5>
                    <ul class="footer-links">
                        <li><a href="#">Chat - Dias úteis de 9h ás 18h</a></li>
                        <li><a href="#">Dúvidas Frequentes</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-xl-3">
                    <h5 class='mb-4 mt-4'>Minha Conta</h5>
                    <ul class="footer-links">
                        <li><a href="#">Meus Dados </a></li>
                        <li><a href="#">Meus Pedidos</a></li>
                        <li><a href="#">Meus Favoritos</a></li>
                    </ul>
                </div>      
            </div>
        </div>

        <div class="col-lg-2 col-xl-2">
                <h5 class='mb-3 mt-4'>Formas de Pagamento</h5>
                <ul class="footer-links">
                    <li><a href="#">Parcelamentos em 5x sem juros</a></li>
                    <li><a href="#">Parcela mínima R$ 40,00</a></li>
                    <li> <img class="" src="<?php echo get_template_directory_uri() ?>/assets/img/cartoes.png"></li>
                </ul>
        </div>


    </div>

    <div class="row pt-5">
        <div class="col-lg-9 col-xl-9 offset-xl-0">
            <div class="text-left">
                <p>Plantage Confecção Comércio de Roupas Ltda - Est. Dos Bandeirantes, 1700 - Galpão - Armazém 3 - Taquara - Rio de Janeiro / RJ - CEP: 22775-109 - CNPJ: 07.515.551/0002-18</p>
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 offset-xl-0">
            <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/Vector.png"></div> 
        </div>

</footer>
  

    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>