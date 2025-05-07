<?= view('site/includes/top'); ?>

<body>
    <?= view('site/includes/header'); ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRTVRBS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section class="home desck">
        <article class="owl-carousel owl-theme">
            <?PHP if($banners_home) foreach($banners_home as $banner): ?>
            <div class="item flex"
                style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(<?= 'uploads/'.$banner->imagem; ?>);background-repeat: no-repeat; background-size: cover;" />
            <div class="titulo">
                <h2><?= $banner->texto; ?></h2>
            </div>
            </div>
            <?PHP endforeach; ?>
        </article>
    </section>

    <section class="home mobile">
        <article class="owl-carousel owl-theme">
            <?PHP if($banners_home) foreach($banners_home as $banner): ?>
            <div class="item flex"
                style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(<?= 'uploads/'.$banner->mobile; ?>);background-repeat: no-repeat; background-size: cover;" />
            <div class="titulo">
                <h2><?= $banner->texto; ?></h2>
            </div>
            </div>
            <?PHP endforeach; ?>
        </article>
    </section>

    <div class="fundo_cinza">
        <section class=" container">
            <article id="conceito" class="tudo_menos">
                <h3 data_anime="bottom">o edifício</h3>
                <h2 data_anime="bottom">tudo, menos <br />o comum.</h2>
                <div class="texto">
                    <hr data_anime="bottom">
                    <div data_anime="bottom">
                        <p>Sofisticado, elegante, singular. Lemme nasce do movimento e do navegar, das ondas e do mar,
                            das dunas, da inspiração dos traços soltos de desenhos livres. Contemporâneo, atemporal,
                            aconchegante. Tanto o nome como o design.</p>
                        <p class="p1">E você sente cada detalhe dessa inspiração quando olha para o Lemme. As curvas
                            marcantes, a sutileza dos movimentos, tudo aqui foi planejado para você viver sua vida
                            intensamente. </p>
                    </div>

                </div>
            </article>

            <section class="">
                <article class="tudo_menos_imgs">
                    <div class="lateral" data_anime="bottom">
                        <img src="site/img/Vista-lateral-Lemme.jpg" />
                        <p data_anime="bottom" s>vista<br /> lateral</p>
                    </div>
                    <div class="jardim" data_anime="bottom">
                        <p data_anime="bottom">vista<br /> jardim</p>
                        <img src="site/img/Vista-jardim-Lemme.jpg" />
                    </div>
                </article>
            </section>


        </section>
    </div>




    <section class="video fundo_cinza">
        <div>
            <video id="video_inicial" loop muted muted="false" poster="site/img/Play.jpg" style="cursor: pointer;"
                controls>
                <source src="site/video/filme1.mp4" type="video/mp4" />
            </video>
        </div>
        <!--<div>
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/hfJ4Km46A-0?autoplay=1" title="YouTube video player"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>!-->
    </section>


    <section id="projeto" class="galeria_inicial">
        <div class="desck">
            <div class="container">
                <nav data_anime_opacity="on">
                    <ul>
                        <?PHP if($galeria_inicial_categorias) foreach($galeria_inicial_categorias as $categoria): ?>
                        <li data-galeria='<?= $categoria->name; ?>'><?= $categoria->texto; ?></li>
                        <?PHP endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="mobile">
            <div class="container">
                <nav data_anime_opacity="on">
                    <ul>
                        <?PHP if($galeria_inicial_categorias) foreach($galeria_inicial_categorias as $categoria): ?>
                        <li data-galeria='<?= $categoria->name; ?>'><?= $categoria->texto; ?></li>
                        <?PHP endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="cortina"></div>
        <div data_anime="bottom">
            <section class="slideshow desck" data_anime_opacity="on">
                <article class="owl-carousel owl-theme">
                    <?PHP foreach($galeria_inicial_banners as $banner): ?>
                    <div class="item flex" style="background-image: url(<?= 'uploads/'. $banner->imagem; ?>);"
                        href="<?= 'uploads/'. $banner->imagem; ?>" data-fancybox="galeria_inicial_desktop"></div>
                    <?PHP endforeach; ?>
                </article>
            </section>

            <section class="slideshow mobile" data_anime_opacity="on">
                <article class="owl-carousel owl-theme">
                    <?PHP foreach($galeria_inicial_banners as $banner): ?>
                    <div class="item flex" style="background-image: url(<?= 'uploads/'. $banner->mobile; ?>);"
                        href="<?= 'uploads/'. $banner->mobile; ?>" data-fancybox="galeria_inicial_mobile"></div>
                    <?PHP endforeach; ?>
                </article>
            </section>



            <article class="info_predio">
                <div class="container">

                    <div class="link">
                        <p data-fancybox="galeria_inicial_desktop" class="desck"
                            href="<?= 'uploads/'.$galeria_inicial_banners[0]->imagem; ?>" data-caption=""
                            id="abrir_galeria_inicial">Clique na imagem para ampliar</p>
                        <p data-fancybox="galeria_inicial_mobile" class="mobile"
                            href="<?= 'uploads/'.$galeria_inicial_banners[0]->mobile; ?>" data-caption=""
                            id="abrir_galeria_inicial">Clique na imagem para ampliar</p>
                    </div>

                    <div class="descricao">
                        <div>
                            <p class="titulo_slider_2"><strong>Apartamentos</strong></p>
                            <p class="uper"><strong>134m² a 189m²</strong></p>
                        </div>
                        <div>
                            <p class="titulo_slider_2"><strong>Penthouses de</strong> </p>
                            <p class="uper"><strong>229m² a 312m²</strong></p>
                        </div>
                        <div>
                            <p class="titulo_slider_2"><strong>Garden duplex de</strong></p>
                            <p class="uper"><strong>335m² a 426m²</strong></p>
                        </div>
                        <div class="garagens">
                            <p class="titulo_slider_2"><strong>Garagens</strong></p>
                            <p class="uper"><strong>02 a 03 vagas</strong></p>
                        </div>
                        <div>
                            <p class="elevador titulo_slider_2"><strong>Elevadores</strong></p>
                            <p class="uper"><strong>Privativos</strong></p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>


    <section id="areas" class="area_comuns">
        <div class="container">
            <div class="conteudo">
                <h2 class="desck" data_anime="bottom">APARTAMENTOS FEITOS PARA <br>VIVER TUDO NO SEU TEMPO.</h2>
                <h2 class="mobile" data_anime="bottom">APARTAMENTOS FEITOS PARA <br>VIVER TUDO NO SEU TEMPO.</h2>
                <div class="flex">
                    <hr data_anime="bottom">
                    <div class="texto" data_anime="bottom">
                        <p>E como o tempo não volta, a melhor escolha que você pode fazer é vivê-lo intensamente em um
                            lugar só seu. Um lugar aconchegante e moderno.</p>
                        <p>Um refúgio com tudo que você precisa. Tudo, menos o comum.</p>
                    </div>
                </div>
                <div class="desck">
                    <nav data_anime_opacity="on">
                        <ul>
                            <?PHP if($galeria_areas_categorias) foreach($galeria_areas_categorias as $categoria): ?>
                            <li data-galeria='<?= $categoria->name; ?>'><?= $categoria->texto; ?></li>
                            <?PHP endforeach; ?>
                        </ul>
                    </nav>
                </div>
                <div class="mobile">
                    <nav data_anime_opacity="on">
                        <ul>
                            <?PHP if($galeria_areas_categorias) foreach($galeria_areas_categorias as $categoria): ?>
                            <li data-galeria='<?= $categoria->name; ?>'><?= $categoria->texto; ?></li>
                            <?PHP endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="cortina"></div>
        <section class="slideshow" data_anime_opacity="on">
            <section class="owl-carousel owl-theme desck" data_anime="bottom">
                <?PHP if($galeria_areas_banners) foreach($galeria_areas_banners as $banner): ?>
                <div class="item" style="background-image: url(<?= 'uploads/'. $banner->imagem; ?>);"
                    href="<?= 'uploads/'. $banner->imagem; ?>" data-fancybox="galeria_areas"
                    data-caption="<?= $banner->legenda; ?>"></div>
                <?PHP endforeach; ?>
            </section>

            <section class="owl-carousel owl-theme mobile" data_anime="bottom">
                <?PHP if($galeria_areas_banners) foreach($galeria_areas_banners as $banner): ?>
                <div class="item" style="background-image: url(<?= 'uploads/'. $banner->mobile; ?>);"
                    href="<?= 'uploads/'. $banner->mobile; ?>" data-fancybox="galeria_areas"
                    data-caption="<?= $banner->legenda; ?>"></div>
                <?PHP endforeach; ?>
            </section>

            <div class="container link_areas">
                <p data-fancybox="galeria_areas" href="<?= 'uploads/'.$galeria_areas_banners[0]->imagem; ?>"
                    data-caption="" id="abrir_galeria_areas">Clique na imagem para ampliar</p>

            </div>
        </section>
    </section>


    <section class="plantas">
        <div class="container">
            <h2 data_anime="bottom">PLANTAS <br>DO LEMME</h2>
            <div class="texto">
                <hr id="plantas" data_anime="bottom">
                <div class="texto" data_anime="bottom">
                    <p>Sutil nas curvas, eficiente nos espaços e revolucionário na visão. O Lemme foi projetado para ser
                        único para você. Afinal, nenhuma família é igual, então nossas plantas também não podem ser.</p>
                </div>
            </div>
            <section class="slideshow">
                <div class="desck">
                    <nav data_anime_opacity="on">
                        <ul class="principal">
                            <?PHP if($galeria_plantas_categorias) foreach($galeria_plantas_categorias as $categoria): ?>
                            <?PHP if(!isset($categoria->filhos)): ?>
                            <li data-galeria='<?= $categoria->name; ?>'><?= $categoria->texto; ?></li>
                            <?PHP else: ?>
                            <li class="submenu"><?= $categoria->name; ?>
                                <ul>
                                    <?PHP foreach($categoria->filhos as $filho): ?>
                                    <li data-galeria='<?= $filho->name; ?>'><?= $filho->texto; ?></li>
                                    <?PHP endforeach; ?>
                                </ul>
                                <img class="seta" src="site/img/seta-nav-azul-direita.svg">
                            </li>
                            <?PHP endif; ?>
                            <?PHP endforeach; ?>
                        </ul>
                    </nav>
                </div>
                <div class="mobile">
                    <nav data_anime_opacity="on">
                        <ul class="principal">
                            <?PHP if($galeria_plantas_categorias) foreach($galeria_plantas_categorias as $categoria): ?>
                            <?PHP if(!isset($categoria->filhos)): ?>
                            <li data-galeria='<?= $categoria->name; ?>'><?= $categoria->texto; ?></li>
                            <?PHP else: ?>
                            <li class="submenu" data-categoriaID='<?= $categoria->name; ?>'><?= $categoria->name; ?>
                                <ul>
                                    <?PHP foreach($categoria->filhos as $filho): ?>
                                    <li data-galeria='<?= $filho->name; ?>'><?= $filho->texto; ?></li>
                                    <?PHP endforeach; ?>
                                </ul>
                                <img class="seta " src="site/img/seta-nav-azul-direita.svg">
                            </li>
                            <?PHP endif; ?>
                            <?PHP endforeach; ?>
                        </ul>
                    </nav>
                    <div class="submenu_mobile" id="submenu_mobile">
                        <ul>

                        </ul>
                    </div>
                </div>

                <div class="cortina"></div>
                <section class="owl-carousel owl-theme desck" data_anime_opacity="on" data_anime="bottom">
                    <?PHP if($galeria_plantas_banners) foreach($galeria_plantas_banners as $banner): ?>
                    <article class="item">
                        <img src="uploads/<?= $banner->imagem; ?>" href="uploads/<?= $banner->imagem; ?>"
                            data-fancybox="<?= $banner->categoria; ?>" data-caption="<?= $banner->legenda; ?>">
                    </article>
                    <?PHP endforeach; ?>
                </section>

                <section class="owl-carousel owl-theme mobile" data_anime_opacity="on" data_anime="bottom">
                    <?PHP if($galeria_plantas_banners) foreach($galeria_plantas_banners as $banner): ?>
                    <article class="item">
                        <img src="uploads/<?= $banner->mobile; ?>" href="uploads/<?= $banner->mobile; ?>"
                            data-fancybox="<?= $banner->categoria; ?>" data-caption="<?= $banner->legenda; ?>">
                    </article>
                    <?PHP endforeach; ?>
                </section>
                <div class="container link">
                    <p id="abrir_galeria_plantas">Clique na imagem para ampliar</p>
                </div>

        </div>
    </section>


    <section id="diferenciais" class="diferenciais">
        <div class="container">

            <h2 data_anime="bottom">Diferenciais <br />lemme</h2>
            <img class="barra" src="site/img/hr.png" data_anime_opacity="on">
            <section class="desck">
                <section class="caixas owl-carousel owl-theme" data_anime_opacity="on" data_anime="bottom">
                    <?PHP foreach($diferenciais as $diferencial): ?>
                    <article class="item">
                        <img src="uploads/<?= $diferencial->imagem; ?>">
                        <p><?= $diferencial->diferencial; ?></p>
                    </article>
                    <?PHP endforeach; ?>
                </section>
            </section>

            <section class="mobile">
                <section class="caixas owl-carousel owl-theme" data_anime_opacity="on" data_anime="bottom">
                    <?PHP foreach($diferenciais as $diferencial): ?>
                    <article class="item">
                        <img src="uploads/<?= $diferencial->imagem; ?>">
                        <p><?= $diferencial->diferencial; ?></p>
                    </article>
                    <?PHP endforeach; ?>
                </section>
            </section>

        </div>
    </section>



    <section class="faixa_branca"></section>

    <section id="projetistas" class="projetistas clearfix">
        <div class="container">
            <h2 data_anime="bottom">Projetistas que são<br /> tudo, Menos comuns</h2>
            <div class="flex">
                <hr data_anime="bottom">
                <div class="texto" class="texto">
                    <p class="paragrafo" data_anime="bottom">A ideia do Lemme nasceu de mentes tão inquietas quanto o
                        mar.</p>
                </div>
            </div>

            <nav data_anime_opacity="on" data_anime="bottom">
                <div class="btn_nav" data_anime="bottom">
                    <button data_anime="bottom" class="desck" id="left"><img
                            src="site/img/seta_esquerda_verde.png"></button>
                    <button data_anime="bottom" class="desck" id="right"><img
                            src="site/img/seta_direita_verde.png"></button>
                </div>
                <div class="desck">
                    <ul>
                        <?PHP if($galeria_projetistas_categorias) foreach($galeria_projetistas_categorias as $categoria): ?>
                        <li data-galeria='<?= $categoria->name; ?>'><?= $categoria->texto; ?></li>
                        <?PHP endforeach; ?>
                    </ul>
                </div>

                <div class="mobile">
                    <ul>
                        <?PHP if($galeria_projetistas_categorias) foreach($galeria_projetistas_categorias as $categoria): ?>
                        <li data-galeria='<?= $categoria->name; ?>'><?= $categoria->texto; ?></li>
                        <?PHP endforeach; ?>
                    </ul>
                </div>
            </nav>



            <div class="cortina"></div>
            <section class="desck">
                <section class="slideshow" data_anime_opacity="on" data_anime="bottom">
                    <section class="slides owl-carousel owl-theme">

                        <?PHP if($galeria_projetistas_banners) foreach($galeria_projetistas_banners as $banner): ?>
                        <article class="clearfix item">
                            <div class="img">
                                <img src="uploads/<?= $banner->imagem; ?>" alt="<?= $banner->legenda; ?>">
                            </div>
                            <div class="texto">
                                <h3><?= $banner->nome; ?></h3>
                                <h4><?= $banner->cargo; ?></h4>
                                <p><?= $banner->descricao; ?></p>
                            </div>
                        </article>
                        <?PHP endforeach; ?>

                    </section>
                </section>
            </section>

            <section class="mobile">
                <section class="slideshow" data_anime_opacity="on" data_anime="bottom">
                    <section class="slides owl-carousel owl-theme">

                        <?PHP if($galeria_projetistas_banners) foreach($galeria_projetistas_banners as $banner): ?>
                        <article class="clearfix item">
                            <div class="img">
                                <img src="uploads/<?= $banner->mobile; ?>" alt="<?= $banner->legenda; ?>">
                            </div>
                            <div class="texto">
                                <h3><?= $banner->nome; ?></h3>
                                <h4><?= $banner->cargo; ?></h4>
                                <p><?= $banner->descricao; ?></p>
                            </div>
                        </article>
                        <?PHP endforeach; ?>
                    </section>
                </section>
            </section>
    </section>


    <section class="video_projetistas " data_anime_opacity="on">
        <div>¨
            <!--
				<video id="video_projetistas" autoplay loop muted poster="site/img/iframe.png" controls>
					<source  src="site/video/filme1.mp4" type="video/mp4" />
				</video>!-->
            <iframe allow="autoplay" playsinline id="ytplayer" type="text/html" width="100%"
                src="https://www.youtube.com/embed/fiSnsIQBW-I?autoplay=1&cc_load_policy=1&disablekb=1&enablejsapi=1&loop=1&color=white"
                frameborder="0" allowfullscreen></iframe>
            <div>

    </section>


    <section id="curadoria" class="curadoria">

        <section class="fundo_azul">
            <div class="container">
                <article class="titulo">
                    <h2 data_anime="bottom">Curadoria <br />De mobiliários</h2>
                    <hr data_anime="bottom" />
                </article>
            </div>
        </section>

        <section class="slideshow" data_anime_opacity="on" data_anime="bottom">
            <section class="desck">
                <section class="slides owl-carousel owl-theme">
                    <?PHP foreach($galeria_curadoria_banners as $banner): ?>
                    <article class="item">
                        <img src="uploads/<?= $banner->imagem; ?>">
                        <h3><?= $banner->titulo; ?></h3>
                        <h4>Designer: <?= $banner->designer; ?></h4>
                    </article>
                    <?PHP endforeach; ?>
                </section>
            </section>

            <section class="mobile">
                <section class="slides owl-carousel owl-theme">
                    <?PHP foreach($galeria_curadoria_banners as $banner): ?>
                    <article class="item">
                        <img src="uploads/<?= $banner->mobile; ?>">
                        <h3><?= $banner->titulo; ?></h3>
                        <h4>Designer: <?= $banner->designer; ?></h4>
                    </article>
                    <?PHP endforeach; ?>
                    </article>
                </section>
            </section>
        </section>

    </section>


    <section id="bairro" class="bairro">
        <div class="container">
            <article class="bairro clearfix">
                <h2 data_anime="bottom" class="desck">Um bairro onde<br /> o comum é o<br /> excepcional</h2>
                <h2 data_anime="bottom" class="mobile">Um bairro <br />onde o comum é o<br /> excepcional</h2>
                <div class="flex">
                    <hr data_anime="bottom">
                    <div class="texto" data_anime="bottom">
                        <p>Tudo que você precisa em um bairro você encontra no Água Verde. Cortado pelas principais
                            avenidas de Curitiba, a região fica a poucos instantes de mercados, hospitais, praças,
                            shoppings, escolas e qualquer tipo de estabelecimento que você precisar. Principalmente se
                            você gostar de sair para comer.<br />
                            O bairro é conhecido por seus ótimos bares e restaurantes de chefes aclamados como Henrique
                            Fogaça e Beto Madalosso.
                            Sem contar na sagrada feirinha noturna de toda quinta na Av. República Argentina.</p>
                    </div>
                </div>
            </article>
        </div>

        <section class="slideshow" data_anime_opacity="on">
            <section class="owl-carousel owl-theme desck" data_anime="bottom">
                <?PHP foreach($galeria_bairro_banners as $banner): ?>
                <article class="item">
                    <img src="uploads/<?= $banner->imagem; ?>" data-fancybox="bairro"
                        data-caption="<?= $banner->legenda; ?>" />
                </article>
                <?PHP endforeach; ?>
            </section>

            <section class="owl-carousel owl-theme mobile" data_anime="bottom">
                <?PHP foreach($galeria_bairro_banners as $banner): ?>
                <article class="item">
                    <img src="uploads/<?= $banner->mobile; ?>" data-fancybox="bairro"
                        data-caption="<?= $banner->legenda; ?>" />
                </article>
                <?PHP endforeach; ?>
            </section>

            <div class="link">
                <p data-fancybox="bairro" href="uploads/<?= $galeria_bairro_banners[0]->imagem; ?>">Clique na imagem
                    para ampliar</p>
            </div>
            <div class="ver_local">
                <a data-fancybox data-type="iframe"
                    href="https://www.google.com/maps/place/R.+Prof.+Assis+Gon%C3%A7alves,+778+-+%C3%81gua+Verde,+Curitiba+-+PR,+80620-250/@-25.4595685,-49.2845318,17z/data=!4m5!3m4!1s0x94dce4820476501f:0x1d7b68baf7f1374b!8m2!3d-25.4596072!4d-49.2837271">
                    <button type="button">VER LOCALIZAÇÃO</button>
                </a>
            </div>
        </section>



    </section>



    <section class="certificacoes">
        <div class="container">
            <h2 class="desck" data_anime="bottom">Certificações</h2>
            <h2 class="mobile" data_anime="bottom">Certifica<br>ções</h2>
            <hr data_anime="bottom">
            <div class="desck">
                <div class="flex ">
                    <?PHP foreach($certificados as $certificado): ?>
                    <div class="img_1 animeit logo" data-id="<?= $certificado->certificadoID; ?>" data_anime="bottom">
                        <img src="uploads/<?= $certificado->logo; ?>" alt="<?= $certificado->legenda; ?>">
                    </div>
                    <?PHP endforeach; ?>
                </div>

                <?PHP foreach($certificados as $certificado): ?>
                <div class="texto invisivel" id="<?= $certificado->certificadoID; ?>">
                    <p><?= $certificado->legenda; ?></p>
                </div>
                <?PHP endforeach; ?>
            </div>

            <div class="mobile">
                <div class="">
                    <?PHP foreach($certificados as $certificado): ?>
                    <div class="img_1 animeit logo" data-id="<?= $certificado->certificadoID; ?>" data_anime="bottom">
                        <img src="uploads/<?= $certificado->logo; ?>" alt="<?= $certificado->legenda; ?>">
                        <p><?= $certificado->legenda; ?></p>
                    </div>
                    <?PHP endforeach; ?>
                </div>
            </div>
        </div>
    </section>




    <section class="andamento clearfix" dataMenu="on">
        <div class="container">
            <h2 data_anime="bottom">andamento<br />de obra</h2>
            <hr data_anime="bottom">

            <div class="barras flex" data_anime="bottom">
                <div class="coluna_1">
                    <?PHP foreach($configs as $key => $config): ?>
                    <?PHP if($key % 2 == 0): ?>
                    <p><?= $config->name; ?> - <?= $config->value; ?>%</p>
                    <div class="barra">
                        <div style="width: <?= $config->value; ?>%;">
                            <div data_load="on" class="load"></div>
                        </div>
                    </div>
                    <?PHP endif; ?>
                    <?PHP endforeach; ?>
                </div>
                <div class="coluna_2">
                    <?PHP foreach($configs as $key => $config): ?>
                    <?PHP if($key % 2 != 0): ?>
                    <p><?= $config->name; ?> - <?= $config->value; ?>%</p>
                    <div class="barra">
                        <div style="width: <?= $config->value; ?>%;">
                            <div data_load="on" class="load"></div>
                        </div>
                    </div>
                    <?PHP endif; ?>
                    <?PHP endforeach; ?>
                </div>
            </div>
            </article>
    </section>

    <section class="vida" id="form">
        <div class="container">

            <h2 data_anime="bottom">Se a vida é feita de escolhas, viver </br> aqui é a melhor que você pode fazer.</h2>
            <hr data_anime="bottom">
            <div class="flex">
                <div class="contato" data_anime="bottom">
                    <div>
                        <p><b>Stand de vendas</b></p>
                        <p><b>Rua Prof. Assis Gonçalves, 778</b></p>
                        <p><b>Água Verde</b></p>
                    </div>
                    <div class="fone">
                        <p><b>Telefone</b></p>
                        <p><b>(41) 98816-3938</b></p>
                    </div>
                </div>
                <div class="forms" class="contato" data_anime="bottom">
                    <p class="preferir"><b>Se preferir, entramos em contato com você:</b></p>
                    <form method="POST" action="Home/save_lead">
                        <fieldset>
                            <div class="flex">
                                <div class="input_box">
                                    <input type="text" name="nome" id="nome" class="input_user" maxlength="25" required>
                                    <label for="nome" class="label_input">Digite seu nome:</label>
                                </div>
                                <div class="input_box">
                                    <input type="tel" name="telefone" id="telefone" class="input_user input_cel"
                                        required>
                                    <label for="telefone" class="label_input">Digite seu celular:</label>
                                </div>
                            </div>
                            <div class="input_box email">
                                <input type="email" name="email" id="email" class="input_user ultimo" required>
                                <label for="email" class="label_input">Digite seu Email</label>
                            </div>
                            <div>
                                <textarea name="mensagem" id="text_area" maxlength="150"
                                    placeholder="Escreva sua…"></textarea>
                            </div>
                            <!-- 
								<div class="termos flex">
									<input type = "checkbox" id = "subscribeNews" name = "subscribe" value = "newsletter">
									<p>Lorem ipsum dolor sit amet,<strong><a href="">Termos de uso</a></strong> e <strong><a href=""> Política de Privacidade</a></strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								!-->
                            <button type="submit">ENVIAR</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?= view('site/includes/footer'); ?>
    <?= view('site/includes/scripts'); ?>

    </html>