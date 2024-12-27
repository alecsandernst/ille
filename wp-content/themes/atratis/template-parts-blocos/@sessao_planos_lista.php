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
$link_do_cta = get_sub_field('link_botao_cta');
$texto_do_cta = get_sub_field('texto_botao_cta');


$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$linha_um = get_sub_field('linha_um');

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

<section class="sessaoPlanosLista <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="title">
                    <h5><?php echo $subtitulo;?></h5>
                    <h2><?php echo $titulo;?></h2>
                </div>
            </div>
        </div> 

      <div class="row">
        <div class="col-lg-12">

            <div class="container-columns">

                <?php foreach($linha_um as $item){
                    ?>
                    <a href="<?php echo $item['link'];?>" target="_blank" class="colunm-one-planos">
                        <div class="img">
                            <div class="price">
                                <h5><?php echo $item['titulo_plano'];?></h5>
                                <h4><?php echo $item['preco'];?></h4>
                                <p><?php echo $item['descricao'];?></p>
                            </div>

                            <img src="<?php echo $item['image']['url'];?>" alt="<?php echo $item['image']['alt'];?>">
                        </div>

                        <div class="lista">
                            <ul>
                            <?php foreach($item['lista'] as $lista){
                                ?>
                                    <li>
                                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.9004 0L6.21929 9.76649L3.07946 6.59898L0 9.70557L3.13983 12.8731L6.23939 16L9.31887 12.8934L19 3.12692L15.9004 0Z" fill="#007A3B"/>
                                        </svg>
                                        <?php echo $lista['item']?>
                                    </li>
                                <?php
                            }?>
                            </ul>

                            <span class="btn-padrao">
                                Fale com um especialista
                            </span>
                            
                        </div>
                    
                    </a>
                    <?php
                }?>
                
            </div>

        </div>
      </div>

      
    </div>

</section>