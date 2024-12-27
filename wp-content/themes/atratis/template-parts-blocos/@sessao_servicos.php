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

$link_do_cta = get_sub_field('link_btn');
$texto_do_cta = get_sub_field('texto_btn');
$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');


$image = get_sub_field('imagem');
$backgroundSection = get_sub_field('backgroundsection');

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

<?php
     $args = array(
        'post_type' => 'solucoes',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);
?>

<section class="sessaoServicos <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="title" data-aos='fade-left' data-aos-duration='1000'>
                    

                    <h4><?php echo $subtitulo;?></h4>
                    <h2><?php echo $titulo;?></h2>
                    
                </div>

            </div>
        </div>
        <div class="row align-items-center" >
            
            <div class="col-lg-12">
                    <div class="owl-carousel owl-servicos owl-theme">
                        <?php if ($query->have_posts()): ?>
                            <?php while ($query->have_posts()): $query->the_post(); ?>
                                        <a href="<?php echo the_permalink()?>" class="content-card">
                                            <div class="img">
                                                <img src="<?php the_post_thumbnail_url()?>" alt="">
                                            </div>

                                            <div class="content-title">
                                                <h3><?php echo the_title();?></h3>
                                                <?php
                                                // Obter o conteúdo do post
                                                $content = get_the_content();

                                                // Limitar o número de palavras
                                                $excerpt = wp_trim_words($content, 20, '...'); 
                                                ?>
                                                
                                                <p><?php echo esc_html($excerpt); ?></p>
                                                <small>Saiba Mais</small>
                                            </div>
                                            
                                        </a>
                            <?php endwhile; ?>
                        <?php endif;?>
                    </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-12">
                <a href="<?php echo $link_do_cta;?>" class="btn-padrao center-btn"><?php echo $texto_do_cta;?></a>
            </div>
        </div>
    </div>

</section>