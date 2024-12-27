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


$image = get_sub_field('imagem');

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$lista_de_passos = get_sub_field('lista_de_passos');


$direction = $posicao == 0 ? 'row' : 'row-reverse';

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

<section class="sessaoPassos <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row align-items-center" style="flex-direction: <?php echo $direction; ?>">
            <div class="col-lg-5 title"  data-aos='fade-right' data-aos-duration='1000'>
                <h4><?php echo $subtitulo;?></h4>
                <h2><?php echo $titulo;?></h2>

                <ul class="lista-etapas">
                    <?php foreach($lista_de_passos as $itens_passos){
                        ?>
                            <li>
                                <div class="icon">
                                    <?php echo $itens_passos['svg'];?>

                                </div>
                                <div class="etapa">
                                    <h4><?php echo $itens_passos['titulo'];?></h4>
                                    <p><?php echo $itens_passos['descricao'];?></p>
                                </div>
                            </li>
                        <?php
                    }?>
                    

                   
                </ul>

                <a class="btn-padrao" href="<?php echo $link_do_cta;?>"><?php echo $texto_do_cta;?></a>
            </div>
            <div class="col-lg-7" >
                <div class="bg-azul" style="background: #006297">
                    <img src="<?php echo $image['url']; ?>" alt="">
                </div>
            </div> 
        </div> 
    </div>

         
    

</section>