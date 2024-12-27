<?php get_header(); ?>

    <div class="container">
            <div class="row">

            <div class="col-12">
                <div class="breadcrumb-personalizada">
                    <?php get_breadcrumb(); ?>
                </div>
            </div>
            
        </div>

    </div>
    <div class="title-internas">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Soluções</h1>
                    </div>
                 </div>
            </div>
            
            </div>

            <?php 
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                            $posicao = $wp_query->current_post % 2 === 0 ? 0 : 1;
                            $direction = $posicao == 0 ? 'row' : 'row-reverse';
                            $animacao = $posicao == 0 ? "data-aos='fade-right' data-aos-duration='1000'" :  "data-aos='fade-left' data-aos-duration='1000'"
                        ?>

                            <div class="content-grid">    
                                <div class="container">
                            
                                
                                    <div class="row align-items-center row-full" style="flex-direction: <?php echo $direction;?>">

                                        <div class="<?php echo $posicao == 1 ? 'img-fluid-left' : 'img-fluid-right'?>"  >
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" >
                                        </div>

                                        <div class="col-lg-6 <?php echo $posicao == 1 ? 'padding-personalizado-left' : 'padding-personalizado-rigth'?>" <?php echo  $animacao;?> >
                                                
                                                <h2><?php the_title()?></h2>
                                                <?php the_content();?>

                                                
                                                <a href="<?php echo the_permalink(); ?>" class="btn-padrao">Saiba mais</a>
                                                    
                                                
                                        </div>
                                    
                                        
                                    </div> 
                                            
                                            
                                </div>   
                            </div>    

                <?php
                            
                        }
                    } else {
                        echo 'Nenhum post encontrado.';
                    }
                
                ?>
            
            <div class="container">
                <div class="row">
                        <div class="content-paginacao">
                            <?php if (function_exists('pagination_function')) pagination_function(); ?>
                        </div>
                </div>
            </div>
            
        

<?php get_footer(); ?>

<!-- 
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

-->