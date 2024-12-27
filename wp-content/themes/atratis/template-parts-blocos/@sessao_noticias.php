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
$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('descricao');

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
    'post_type' => 'post',
    'posts_per_page' => 2, 
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'blog',
            'include_children' => true,
        ),
    ),
);

$query = new WP_Query($args);
?>

<section class="sessaoNoticias <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="title" <?php echo $animacaoConteudo;?>>
                    <h2><?php echo $titulo;?></h2>
                    <p><?php echo $subtitulo;?></p>
                    <a href="<?php echo $link_do_cta;?>"><?php echo $texto_do_cta;?></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="owl-carousel owl-blog owl-theme">
                    <?php if ($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post(); ?>
                            <a href="<?php echo the_permalink()?>" class="content-card">
                                <div class="img">
                                    <img src="<?php the_post_thumbnail_url()?>" alt="">
                                </div>

                                <div class="content-title">
                                    <h3><?php echo the_title();?></h3>
                                    <?php
                                            $_the_excerpt = get_the_excerpt();
                                            $the_excerpt = substr( $_the_excerpt, 0, 200 );
                                        ?>
                                        
                                    
                                    <p><?php echo esc_html($the_excerpt); ?></p>
                                    <small>Saiba Mais</small>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>
            </div>
        </div> 
    </div>

</section>

<?php wp_reset_postdata(); ?>
