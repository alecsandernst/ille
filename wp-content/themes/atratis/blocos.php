<?php // Chamadas dos blocos ?>

<?php 
    if(is_front_page()): // Se for chamado pela HOME ou INTERNA 
        $lugar = "option";    
    else: 
        $lugar = "";
     endif;
    ?>

<?php if( have_rows('blocos_home', $lugar) ): ?>
<?php while( have_rows('blocos_home', $lugar) ): the_row();  ?>
<?php 

        

    if(get_row_layout() == 'sessao_texto_imagem' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_texto_imagem');

    elseif(get_row_layout() == 'sessao_planos_banner' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_planos_banner');


    elseif(get_row_layout() == 'sessao_beneficios' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_beneficios');

    elseif(get_row_layout() == 'sessao_servicos' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_servicos');

    elseif(get_row_layout() == 'sessao_produtos' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_produtos');

    elseif(get_row_layout() == 'sessao_linha_tempo' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_linha_tempo');

    elseif(get_row_layout() == 'sessao_perguntas_frequentes' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_perguntas_frequentes');
    
    elseif(get_row_layout() == 'sessao_planos_lista' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_planos_lista');

    elseif(get_row_layout() == 'sessao_mini_banner' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_mini_banner');

    elseif(get_row_layout() == 'sessao_banner_texto' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_banner_texto');

    elseif(get_row_layout() == 'sessao_imagem' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_imagem');

    elseif(get_row_layout() == 'sessao_tabelas' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_tabelas');

        
    /* Usuados Topo */

    elseif(get_row_layout() == 'sessao_depoimento' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_depoimento');

    elseif(get_row_layout() == 'sessao_passos' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_passos');

    elseif(get_row_layout() == 'sessao_noticias' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_noticias');

    elseif(get_row_layout() == 'sessao_texto' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_texto');

    elseif(get_row_layout() == 'sessao_governanca' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_governanca');

    elseif(get_row_layout() == 'sessao_lista_vantagens' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_lista_vantagens');

    
        
    elseif(get_row_layout() == 'sessao_faca_parte' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_faca_parte');

    elseif(get_row_layout() == 'sessao_contato' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_contato');


    elseif(get_row_layout() == 'sessao_vantagens' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_vantagens');

    
    // Usadas Etick
    
    elseif(get_row_layout() == 'sessao_projetos' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_projetos');

    elseif(get_row_layout() == 'sessao_solucoes' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_solucoes');

    elseif(get_row_layout() == 'sessao_texto_botao' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_texto_botao');

    elseif(get_row_layout() == 'sessao_galeria_imagem' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_galeria_imagem');

        
    elseif(get_row_layout() == 'sessao_segmentos' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_segmentos');

    elseif(get_row_layout() == 'sessao_galeria_carrosel' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_galeria_carrosel');

    elseif(get_row_layout() == 'sessao_diferenciais' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_diferenciais');

    elseif(get_row_layout() == 'sessao_marcas' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_marcas');

    elseif(get_row_layout() == 'sessao_texto_imagem_full' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_texto_imagem_full');

    elseif(get_row_layout() == 'sessao_missao_visao' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_missao_visao');

        

    endif;
            
?>
<?php endwhile; ?>
<?php endif; // Fim Blocos de Layout ?>