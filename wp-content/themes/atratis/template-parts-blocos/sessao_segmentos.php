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
$link_do_cta = get_sub_field('link_cta');
$texto_do_cta = get_sub_field('texto_cta');


$image = get_sub_field('imagem');
$backgroundSection = get_sub_field('backgroundsection');
$titulo = get_sub_field('titulo');
$descricao = get_sub_field('descricao');


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


                $args = array(
                    'post_type' => 'segmentos',
                    'posts_per_page' => 6,
                    'order' => 'ASC',
                );
            
                $query = new WP_Query($args);

?>

<section class="sessaoSegmentos <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row" >
            <div class="col-lg-6">
                <div class="title">
                    <h2><?php echo $titulo;?></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="description">
                    <p><?php echo $descricao;?></p>
                </div>
            </div>
        </div> 


        <div class="row" data-aos='fade-up' data-aos-duration='1000' >
            <div class="owl-segmentos owl-carousel owl-theme">
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); 
                    $background_secoes = get_field('background_secoes');
                    $imagem_secao = get_field('imagem_secao');
                    
                ?>
                <div class="content" style="background: #fff; border-radius: 20px; margin-top: 61px">
                    <div class="col-lg-7">
                        <div class="content-tex">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            <a href="<?php echo get_permalink();?>" class="btn-padrao">Saiba mais</a>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 p-0">
                        <div class="content-img" style="background: 
                            url('<?php echo $background_secoes['url'];?>'); 
                            background-size: cover; 
                            background-position: left top; 
                            background-repeat: no-repeat;
                        ">
                            <img src="<?php echo $imagem_secao['url']; ?>" alt="">
                        </div>
                    </div>   
                </div>
                    <?php endwhile; ?>
                <?php endif;?>
            </div>

           

        </div>

    </div>

</section>