<?= view('site/includes/top'); ?>

<body>
    <?= view('site/includes/header'); ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRTVRBS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section class="home acompanhamento">
        <div class="container-acompanhamento">
            <div class="acompanhamento-head desck">
                <h3 data_anime="bottom">ACOMPANHAMENTO DE OBRA</h3>
                <div class="acompanhamento-mes" data_anime="bottom">
                    <span class="selecione">SELECIONE O MÊS/ANO: </span>
                    <span class="acompanhamento-selected"></span>
                    <ul class="acompanhamento-menu">
                        <?PHP
                            $tmp = (array) $acompanhamento;
                            if(!empty($tmp)):
                            $count = count($acompanhamento);
                            for($x = 0; $x < $count; $x++):
                            foreach($acompanhamento[$x] as $banner):
                         ?>
                        <li class="periodos" data-acompanhamento='<?= $banner->mes; ?>-<?= $banner->ano; ?>'>
                            <?= $banner->mes; ?> DE <?= $banner->ano; ?>
                        </li>
                        <?PHP endforeach; endfor; endif; ?>
                    </ul>
                    <img class="seta" src="site/img/seta-nav-azul-direita.svg">
                </div>
            </div>
            <section id="areas" class="acompanhamento_banner">
                <div class="cortina desck"></div>

                <section class="slideshow" data_anime_opacity="on">
                    <article id="bigdesk1" class="owl-carousel owl-theme desck">

                    </article>
                    <div class="d-flex">
                        <div class="w-90">
                            <article id="thumbsdesk1" class="owl-carousel owl-theme desck">
                            </article>
                        </div>
                    </div>

                    <p class="clique desck">Clique na imagem para ampliar</p>
                </section>

            </section>


            <div class="acompanhamento-head mobile">
                <h3 data_anime="bottom">ACOMPANHAMENTO DE OBRA</h3>

                <div class="acompanhamento-mobiperiodos">
                    <?PHP 
                    $jan = 0;
                    $fev = 0;
                    $mar = 0;
                    $abr = 0;
                    $mai = 0;
                    $jun = 0;
                    $jul = 0;
                    $ago = 0;
                    $set = 0;
                    $out = 0;
                    $nov = 0;
                    $dez = 0;
                    $contador = 0;
                    $carrossel = 1;
                        $tmp = (array) $acompanhamento;
                        if(!empty($tmp)):
                        $count = count($acompanhamento);
                        $limit = 2;
                        if($count < 3):
                            $limit = $count - 1;
                        endif;
                        for($x = 0; $x <= $limit; $x++):
                        foreach($acompanhamento[$x] as $banner):

                 
                            $db = \Config\Database::connect();
                            $data = $db->query("SELECT * FROM acompanhamento WHERE mes = '$banner->mes' AND ano = $banner->ano AND deleted_at IS NULL")->getResult();
                            

                            if($banner->mes === "JANEIRO" && $jan === 0){
                                $jan = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "FEVEREIRO" && $fev === 0){
                                $fev = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "MARÇO" && $mar === 0){
                                $mar = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "ABRIL" && $abr === 0){
                                $abr = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "MAIO" && $mai === 0){
                                $mai = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "JUNHO" && $jun === 0){
                                $jun = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "JULHO" && $jul === 0){
                                $jul = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "AGOSTO" && $ago === 0){
                                $ago = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "SETEMBRO" && $set === 0){
                                $set = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "OUTUBRO" && $out === 0){
                                $out = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "NOVEMBRO" && $nov === 0){
                                $nov = 1;
                                $contador = 1;
                            }
                            if($banner->mes === "DEZEMBRO" && $dez === 0){
                                $dez = 1;
                                $contador = 1;
                            }
                            
                            
                        ?>
                    <?PHP if($contador === 1){ ?>
                    <div class="mobile-head">
                        <p><?= $banner->mes; ?> DE <?= $banner->ano; ?></p>
                        <p class="clique-mobile mobile">Clique na imagem para ampliar</p>
                    </div>
                    <article id="big<?= $carrossel ?>" class="owl-carousel owl-theme mobile">
                        <?PHP foreach($data as $item): ?>
                        <div class="item flex" data-fancybox="acompanhamento_areas_mobile_<?= $carrossel ?>"
                            data-caption="<?= $item->texto; ?>" href="<?= 'uploads/'.$item->mobile; ?>"
                            style="background-image: url(<?= 'uploads/'.$item->mobile; ?>);background-repeat: no-repeat; background-size: cover;">
                        </div>
                        <?PHP
                         endforeach;
                        ?>
                    </article>

                    <article id="thumbs<?= $carrossel ?>" class="owl-carousel owl-theme mobile">
                        <?PHP foreach($data as $item): ?>
                        <div class="item flex"
                            style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(<?= 'uploads/'.$item->mobile; ?>);background-repeat: no-repeat; background-size: cover;">
                        </div>
                        <?PHP
                         endforeach;
                         $contador = 0;
                         $carrossel++;
                        ?>
                    </article>

                    <?PHP } ?>

                    <?PHP endforeach; endfor; endif; ?>
                </div>

            </div>

            <?PHP
            $tmp = (array) $acompanhamento;
            if(!empty($tmp)):
            $count = count($acompanhamento);
            if($count > 2):
            ?>
            <div class="acompanhamento-head acompanhamento-galeria mobile">
                <h3 data_anime="bottom" class="text-center font-14">GALERIA DE OBRA.<br /> SELECIONE O MÊS/ANO.</h3>
                <div class="acompanhamento-mes-mobile" data_anime="bottom">
                    <span class="acompanhamento-selected-mobile"></span>
                    <ul class="acompanhamento-menu-mobile">
                        <?PHP
                            for($x = 2; $x < $count; $x++):
                                
                                foreach($acompanhamento[$x] as $banner): 
                                
                                    ?>
                                
                                <li class="periodos" data-acompanhamento='<?= $banner->mes; ?>-<?= $banner->ano; ?>'>
                                    <?= $banner->mes; ?> DE <?= $banner->ano; ?>
                                </li>
                        <?PHP endforeach; endfor; ?>
                    </ul>
                    <img class="seta" src="site/img/seta-nav-azul-direita.svg">
                </div>
            </div>
            <div class="acompanhamento-head mt-5 mobile">
                <section id="areas" class="acompanhamento_banner_mobile">
                    <div class="cortina"></div>
                    <div class="mobile-head">
                        <p class="date-selected"></p>
                        <p class="clique-mobile mobile">Clique na imagem para ampliar</p>
                    </div>
                    <article id="big5" class="owl-carousel owl-theme mobile">
                    </article>
                    <article id="thumbs5" class="owl-carousel owl-theme mobile">
                    </article>

                </section>
            </div>
            <?PHP endif; endif; ?>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?= view('site/includes/footer'); ?>
    <?= view('site/includes/scripts'); ?>

    </html>