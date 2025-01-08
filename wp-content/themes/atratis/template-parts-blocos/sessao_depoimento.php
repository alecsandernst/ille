<?php 
/////////////////////////////////////////////////////////
// Configurações Gerais do Bloco
// template: conf_gerais.php
// Variáveis diponíveis: $geraisCSS, $corFonte, $animacao

include "conf_gerais.php";

/////////////////////////////////////////////////////////

$posicao = get_sub_field('posicao_conteudo');
$animC = get_sub_field('escolha_animacao_conteudo');
$animI = get_sub_field('escolha_animacao_imagem');
$classe = get_sub_field('classe');
$link_do_cta = get_sub_field('link_do_cta');
$texto_do_cta = get_sub_field('texto_do_cta');
$logo_png_branco = get_field('logo_png_branca', 'option');
$link_cta = get_sub_field('link_cta');

$depoimento = get_sub_field('depoimento');

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');

$direction = $posicao == 0 ? 'row-reverse' : 'row';

// [ANIMAÇÃO CONTEÚDO]
if($animC == 0):
    $animacaoConteudo = "";
    elseif($animC == 1):
        $animacaoConteudo = "data-aos='fade-up' data-aos-duration='1000' data-aos-delay='300'";
        elseif($animC == 2):
            $animacaoConteudo = "data-aos='fade-down' data-aos-duration='1000' data-aos-delay='300'";
            elseif($animC == 3):
                $animacaoConteudo = "data-aos='fade-left' data-aos-duration='1000' data-aos-delay='300'";
                elseif($animC == 4):
                    $animacaoConteudo = "data-aos='fade-right' data-aos-duration='1000' data-aos-delay='300'";
                endif;

// [ANIMAÇÃO IMAGEM]
if($animI == 0):
    $animacaoImagem = "";
    elseif($animI == 1):
        $animacaoImagem = "data-aos='fade-up' data-aos-duration='1000' data-aos-delay='300'";
        elseif($animI == 2):
            $animacaoImagem = "data-aos='fade-down' data-aos-duration='1000' data-aos-delay='300'";
            elseif($animI == 3):
                $animacaoImagem = "data-aos='fade-left' data-aos-duration='1000' data-aos-delay='300'";
                elseif($animI == 4):
                    $animacaoImagem = "data-aos='fade-right' data-aos-duration='1000' data-aos-delay='300'";
                endif;

?>

<section class="sessaoDepoimentos <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 title" data-aos='fade-up' data-aos-duration='1500'>
                <h4><?php echo $subtitulo; ?></h4>
                <h2><?php echo $titulo; ?></h2>
                <a href="<?php echo get_home_url(); ?>">    
                    <img src="<?php echo $logo_png_branco['url']?>" alt="<?php echo $logo_png_branco['alt']?>">
                </a>
                <div class="custom-pag">
                    <div class="prev-btn" id="prev-btn" onclick="prevDepoimento()">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M7.32565 2.03537C7.55948 1.80885 7.68887 1.50547 7.68594 1.19056C7.68302 0.875657 7.54802 0.574423 7.31001 0.351743C7.07201 0.129063 6.75005 0.00275133 6.41347 1.48843e-05C6.0769 -0.00272156 5.75264 0.118336 5.51054 0.337113L0.375842 5.14123C0.135191 5.36645 0 5.67188 0 5.99035C0 6.30882 0.135191 6.61425 0.375842 6.83948L5.51054 11.6436C5.75264 11.8624 6.0769 11.9834 6.41347 11.9807C6.75005 11.978 7.07201 11.8516 7.31001 11.629C7.54802 11.4063 7.68302 11.1051 7.68594 10.7901C7.68887 10.4752 7.55948 10.1719 7.32565 9.94534L4.38219 7.19138H16.6875C17.0279 7.19138 17.3544 7.06485 17.5952 6.83961C17.8359 6.61437 17.9712 6.30889 17.9712 5.99035C17.9712 5.67182 17.8359 5.36633 17.5952 5.1411C17.3544 4.91586 17.0279 4.78933 16.6875 4.78933H4.38219L7.32565 2.03537Z" fill="white"/>
                    </svg>

                    </div>

                    <div class="next-btn" id="next-btn" onclick="nextDepoimento()">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M10.6744 2.03537C10.4405 1.80885 10.3111 1.50547 10.3141 1.19056C10.317 0.875657 10.452 0.574423 10.69 0.351743C10.928 0.129063 11.25 0.00275133 11.5865 1.48843e-05C11.9231 -0.00272156 12.2474 0.118336 12.4895 0.337113L17.6242 5.14123C17.8648 5.36645 18 5.67188 18 5.99035C18 6.30882 17.8648 6.61425 17.6242 6.83948L12.4895 11.6436C12.2474 11.8624 11.9231 11.9834 11.5865 11.9807C11.25 11.978 10.928 11.8516 10.69 11.629C10.452 11.4063 10.317 11.1051 10.3141 10.7901C10.3111 10.4752 10.4405 10.1719 10.6744 9.94534L13.6178 7.19138H1.31252C0.972067 7.19138 0.645561 7.06485 0.404825 6.83961C0.164089 6.61437 0.0288467 6.30889 0.0288467 5.99035C0.0288467 5.67182 0.164089 5.36633 0.404825 5.1411C0.645561 4.91586 0.972067 4.78933 1.31252 4.78933H13.6178L10.6744 2.03537Z" fill="#DAA520"/>
                    </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="grid-depoimentos">
                    <div class="owl-carousel owl-depoimentos owl-theme">
                        <?php foreach($depoimento as $item){ ?>
                            <div class="item-depoimento">
                                <p><?php echo $item['conteudo']?></p>
                                <div class="autor-info">
                                    <img src="<?php echo $item['foto']['url']; ?>" alt="<?php echo $item['foto']['alt']; ?>">
                                    <div class="autor-detalhes">
                                        <strong><?php echo $item['autor']?></strong>
                                        <small><?php echo $item['cargo']?></small>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>