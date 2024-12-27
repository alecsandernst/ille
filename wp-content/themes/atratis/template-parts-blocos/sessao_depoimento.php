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
            <div class="title" data-aos='fade-up' data-aos-duration='1500'>
                <h4><?php echo $subtitulo; ?></h4>
                <h2><?php echo $titulo; ?></h2>
            </div>
        </div> 

        <div class="row">
            <div class="col-12">
                <div class="grid-depoimentos">
                    <div class="owl-carousel owl-depoimentos owl-theme">
                        <?php foreach($depoimento as $item){
                            ?>
                                <div class="item-depoimento">
                                    <svg width="54" height="39" viewBox="0 0 54 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.875 6.5L20.25 0H13.5C6.04125 0 0 9.0675 0 16.25V39H23.625V16.25H10.125C10.125 6.5 16.875 6.5 16.875 6.5ZM40.5 16.25C40.5 6.5 47.25 6.5 47.25 6.5L50.625 0H43.875C36.4162 0 30.375 9.0675 30.375 16.25V39H54V16.25H40.5Z" fill="#006297"/>
                                    </svg>
                                    <p><?php echo $item['conteudo']?></p>
                                    <strong><?php echo $item['autor']?></strong>
                                    <small><?php echo $item['cargo']?></small>
                                </div>
                            <?php
                        }?>
                    </div>
                </div>
                
            </div>
        </div>

        
    </div>

</section>