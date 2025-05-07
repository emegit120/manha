<div class="janela"></div>

<?PHP if(isset($mensagem)): ?>
<div id="dialog">
    <p><?= $mensagem; ?></p>
</div>
<?PHP endif; ?>


<!--menu desck que fica no topo da pagina!-->
<header class="top_desck fixo">
    <section>
        <div style="background-color: rgb(0, 59, 76);height: 30px;text-align: center; display:flex">
            <div class="container" style="
    display: flex;
    justify-content: center;
    align-items: center;
">
                <span class="frase1" style="color: #fff; text-transform: uppercase;letter-spacing: 3px;font-size: 14px;">Venha visitar nosso stand de Vendas - Rua Prof. Assis Gonçalves, 798, Água Verde</span>
                <span class="frase2" style="color: #fff; text-transform: uppercase;letter-spacing: 3px;font-size: 14px;display:none;">Segunda a sexta - 09h30 às 17h | Sábado, domingo e feriados 10h às 17h</span>
                
            </div>
        </div>
        <article class="top container">
           <nav>
                <div class="btn_menu_abre">
                    <button id='btn_menu_abre'>
                        <span class="hanburguer"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="#">
                        <img class="logo_verde" src="site/img/Logo_azul.svg">
                        <img class="logo_branco" src="site/img/Logo-Lemme-branco.svg">
                    </a>
                </div>
                <div class="contato">
                    <div class="tbn_contato">
                        <a data-src="#form">
                            <button id="btn_fixo_top">ENTRE EM CONTATO</button>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=554188163938&text=Ol%C3%A1!%20Acessei%20o%20site%20e%20me%20interessei%20pelo%20empreendimento%20Edif%C3%ADcio%20Lemme.%20Gostaria%20de%20falar%20com%20um%20atendente" target="_black">
                            <img src="site/img/whatsapp-para-lemme.svg">
                        </a>
                    </div>
                </div>
            </nav>
        </article>
    </section>
</header>

</section>
<section id="menu_lista">
    <article>
        <div class="menu" id="menu">
            <button class="btn_fecha" id="btn_fecha">
                <img src="site/img/fecha.png">
            </button>
            <ul>
                <li><a data-src="#conceito">Conceito</a></li>
                <li><a data-src="#projeto">O projeto</a></li>
                <li><a data-src="#areas">Apartamentos</a></li>
                <li><a data-src="#plantas">Plantas</a></li>
                <li><a data-src="#diferenciais">Diferenciais</a></li>
                <li><a data-src="#projetistas">Projetistas</a></li>
                <li><a data-src="#curadoria">Mobiliários</a></li>
                <li><a data-src="#bairro">Bairro</a></li>
                <li><a data-src="https://www.bidese.com.br/" target="_black">A Bidese</a></li>
                <li><a data-src="#form">Contato</a></li>
            </ul>
        </div>
    </article>
</section>
<!--menu mobile!-->
<article class="top_mobile">
<div style="background-color: rgb(0, 59, 76);height: 55px;text-align: center; display:flex">
            <div style="
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
">
                <span class="frase1-mobile" style="color: #fff; text-transform: uppercase;letter-spacing: 1px;font-size: 14px;">Venha visitar nosso stand de Vendas - Rua Prof. Assis Gonçalves, 798, Água Verde</span>
                <span class="frase2-mobile" style="color: #fff; text-transform: uppercase;letter-spacing: 1px;font-size: 14px;display:none;">Seg. à Sáb. - 09h às 18h <br/> Domingo - 10h às 17h</span>
                
            </div>
        </div>
    <header class="header_top">
        <nav>
            <div class="btn_menu_abre">
                <button id='btn_menu_abre_mobile'>
                    <span class="hanburguer"
                        style="color: rgb(0, 59, 76); border-top: 2px solid rgb(0, 59, 76);"></span>
                </button>
            </div>
            <div class="logo">
                <a href="#">
                    <img class="logo_verde_mobile" src="site/img/Logo_azul.svg">
                    <img class="logo_branco_mobile" src="site/img/Logo-Lemme-branco.svg">
                </a>
            </div>
            <div class="contato">
                <a href="https://api.whatsapp.com/send?phone=554188163938&text=Ol%C3%A1!%20Acessei%20o%20site%20e%20me%20interessei%20pelo%20empreendimento%20Edif%C3%ADcio%20Lemme.%20Gostaria%20de%20falar%20com%20um%20atendente" target="_black">
                    <img src="site/img/whatsapp-para-lemme.svg">
                </a>
            </div>
        </nav>
    </header>
    <div class="contato_mobile">
        <a data-src="#form">
            <button>
                <p>ENTRE EM CONTATO</p>
                <img src="site/img/seta-entre-em-contato.svg">
            </button>
        </a>
    </div>
</article>

<section class="menu_top_home">
    <article class="top container">
        <nav>
            <div class="btn_menu_abre">
                <button id='btn_menu_abre_top' class="flex">

                    <span class="hanburguer"></span>
                </button>
            </div>
            </button>

            <div class="logo">
                <a href="#">
                    <img class="logo_branco" src="site/img/Logo-Lemme-branco.svg">
                </a>
            </div>
            <div class="contato">
                <div>
                    <a href="">
                        <button class="">ENTRE EM CONTATO</button>
                    </a>
                    <img src="site/img/whatsapp.svg">
                </div>
            </div>
        </nav>
    </article>
</section>