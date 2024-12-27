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


$link_do_cta = get_sub_field('link_botao');
$texto_do_cta = get_sub_field('texto_botao');


$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$descricao = get_sub_field('descricao');


$image = get_sub_field('imagem');
$listaBeneficios = get_sub_field('lista_beneficios');

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

<section class="sessaoBeneficios <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row align-items-center" style="margin-bottom: 43px;">
            <div class="col-lg-6" data-aos='fade-right' data-aos-duration='1000'>
                <div class="title">
                    
                    <h2><?php echo $titulo; ?></h2>
                
                </div>
            </div>
            <div class="col-lg-6" data-aos='fade-left' data-aos-duration='1000'>
                <div class="description">
                    <p><?php echo $descricao; ?></p>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-lg-12">
                
                    <ul class="grid-beneficios">
                        <?php foreach($listaBeneficios as $item){
                            ?>
                                <li class="item-beneficio">
                                    <div class="icon">
                                        <?php echo $item['svg'];?>
                                    </div>
                                    <div class="content">
                                        <h3><?php echo $item['titulo'];?></h3>
                                        <p><?php echo $item['conteudo'];?></p>
                                    </div>
                                    
                                </li>
                            <?php
                        }?>
                    </ul>
                
            </div>
        </div>
    </div>

</section>

<!-- 

<div class="col-lg-7 grid-img-content">
                <div class="title">
                    <h4><?php echo $subtitulo; ?></h4>
                    <h2><?php echo $titulo; ?></h2>
                    <p><?php echo $descricao; ?></p>
                    <a class="btn-padrao" href="<?php echo $link_do_cta; ?>"><?php echo $texto_do_cta; ?></a>
                </div>
                <div class="img-content">
                    <img src="<?php echo $image['url'];?>" alt="">
                </div>
            </div>


            <div class="col-lg-5">
                <ul class="grid-beneficios">
                <?php foreach($listaBeneficios as $item){
                        ?>
                            <li class="item-beneficio">
                                <div class="icon">
                                    <?php echo $item['svg'];?>
                                </div>
                                <div class="content">
                                    
                                    <p><?php echo $item['conteudo'];?></p>
                                </div>
                                
                            </li>
                        <?php
                    }?>
                    <a href="#" class="active-item">
                        <p>Tenha as melhores soluções financeiras.</p>

                        <div class="btn">
                            Solicitar contato
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10.5" cy="10.5" r="10" stroke="white"/>
                                <mask id="path-2-inside-1_6144_1268" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4803 18.5195C14.8984 18.5195 18.48 14.9378 18.48 10.5197C18.48 6.10157 14.8984 2.51996 10.4803 2.51996C6.40081 2.51996 3.03454 5.57352 2.54243 9.51968H9.66582L7.37305 7.22691L8.78726 5.8127L12.7871 9.81257L13.4942 10.5197L12.7871 11.2268L8.78726 15.2267L7.37305 13.8124L9.66582 11.5197H2.54242C3.0345 15.4659 6.40079 18.5195 10.4803 18.5195Z"/>
                                </mask>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4803 18.5195C14.8984 18.5195 18.48 14.9378 18.48 10.5197C18.48 6.10157 14.8984 2.51996 10.4803 2.51996C6.40081 2.51996 3.03454 5.57352 2.54243 9.51968H9.66582L7.37305 7.22691L8.78726 5.8127L12.7871 9.81257L13.4942 10.5197L12.7871 11.2268L8.78726 15.2267L7.37305 13.8124L9.66582 11.5197H2.54242C3.0345 15.4659 6.40079 18.5195 10.4803 18.5195Z" fill="white"/>
                                <path d="M2.54243 9.51968L1.55011 9.39593L1.40998 10.5197H2.54243V9.51968ZM9.66582 9.51968V10.5197H12.08L10.3729 8.81257L9.66582 9.51968ZM7.37305 7.22691L6.66594 6.5198L5.95883 7.22691L6.66594 7.93402L7.37305 7.22691ZM8.78726 5.8127L9.49437 5.10559L8.78726 4.39848L8.08015 5.10559L8.78726 5.8127ZM12.7871 9.81257L12.08 10.5197L12.7871 9.81257ZM13.4942 10.5197L14.2013 11.2268L14.9085 10.5197L14.2013 9.81257L13.4942 10.5197ZM12.7871 11.2268L12.08 10.5197L12.7871 11.2268ZM8.78726 15.2267L8.08015 15.9338L8.78726 16.6409L9.49437 15.9338L8.78726 15.2267ZM7.37305 13.8124L6.66594 13.1053L5.95883 13.8124L6.66594 14.5196L7.37305 13.8124ZM9.66582 11.5197L10.3729 12.2268L12.08 10.5197H9.66582V11.5197ZM2.54242 11.5197V10.5197H1.40998L1.5501 11.6434L2.54242 11.5197ZM17.48 10.5197C17.48 14.3856 14.3461 17.5195 10.4803 17.5195V19.5195C15.4507 19.5195 19.48 15.4901 19.48 10.5197H17.48ZM10.4803 3.51996C14.3461 3.51996 17.48 6.65385 17.48 10.5197H19.48C19.48 5.54928 15.4507 1.51996 10.4803 1.51996V3.51996ZM3.53474 9.64342C3.96521 6.19158 6.91151 3.51996 10.4803 3.51996V1.51996C5.8901 1.51996 2.10387 4.95546 1.55011 9.39593L3.53474 9.64342ZM9.66582 8.51968H2.54243V10.5197H9.66582V8.51968ZM6.66594 7.93402L8.95871 10.2268L10.3729 8.81257L8.08015 6.5198L6.66594 7.93402ZM8.08015 5.10559L6.66594 6.5198L8.08015 7.93402L9.49437 6.5198L8.08015 5.10559ZM13.4942 9.10546L9.49437 5.10559L8.08015 6.5198L12.08 10.5197L13.4942 9.10546ZM14.2013 9.81257L13.4942 9.10546L12.08 10.5197L12.7871 11.2268L14.2013 9.81257ZM13.4942 11.9339L14.2013 11.2268L12.7871 9.81257L12.08 10.5197L13.4942 11.9339ZM9.49437 15.9338L13.4942 11.9339L12.08 10.5197L8.08015 14.5196L9.49437 15.9338ZM6.66594 14.5196L8.08015 15.9338L9.49437 14.5196L8.08015 13.1053L6.66594 14.5196ZM8.95871 10.8126L6.66594 13.1053L8.08015 14.5196L10.3729 12.2268L8.95871 10.8126ZM2.54242 12.5197H9.66582V10.5197H2.54242V12.5197ZM10.4803 17.5195C6.91149 17.5195 3.96518 14.8478 3.53473 11.3959L1.5501 11.6434C2.10383 16.0839 5.89008 19.5195 10.4803 19.5195V17.5195Z" fill="white" mask="url(#path-2-inside-1_6144_1268)"/>
                            </svg>

                        </div>
                        
                    </a>
                </ul>
            </div>
-->