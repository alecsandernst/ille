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

$linha_do_tempo = get_sub_field('linha_do_tempo');

$titulo = get_sub_field('titulo');

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

<section class="sessaoLinhaTempo <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    <div class="container">
        <div class="row align-items-center" style="">
            <div class="col-6">
                <div class="title">
                    <h2 <?php echo $animacaoConteudo; ?>><?php echo $titulo; ?></h2>
                </div>
            </div>

            <div class="col-6">
                <div class="custom-pag">
                    <div class="prev-btn" id="prev-btn" onclick="prevTimeLine()">
                        

                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.16697 15.984C8.05986 15.9853 7.95366 15.9646 7.8552 15.9233C7.75674 15.882 7.66821 15.821 7.59528 15.7443L0.245009 8.55145C-0.0816697 8.23177 -0.0816697 7.73626 0.245009 7.41658L7.59528 0.23976C7.92196 -0.0799201 8.42831 -0.0799201 8.75499 0.23976C9.08167 0.559441 9.08167 1.05494 8.75499 1.37462L1.97641 7.99201L8.75499 14.6254C9.08167 14.9451 9.08167 15.4406 8.75499 15.7602C8.59165 15.9201 8.37931 16 8.1833 16L8.16697 15.984Z" fill="#007A3B"/>
                        </svg>
                    </div>

                    <div class="next-btn" id="next-btn" onclick="nextTimeLine()">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.833031 15.984C0.940143 15.9853 1.04634 15.9646 1.1448 15.9233C1.24326 15.882 1.33179 15.821 1.40472 15.7443L8.75499 8.55145C9.08167 8.23177 9.08167 7.73626 8.75499 7.41658L1.40472 0.23976C1.07804 -0.0799201 0.571688 -0.0799201 0.245009 0.23976C-0.0816698 0.559441 -0.0816698 1.05494 0.245009 1.37462L7.02359 7.99201L0.245009 14.6254C-0.0816698 14.9451 -0.0816698 15.4406 0.245009 15.7602C0.408349 15.9201 0.620689 16 0.816697 16L0.833031 15.984Z" fill="#007A3B"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="owl-carousel owl-linha-tempo owl-theme">
                <?php foreach($linha_do_tempo as $itens){
                    ?>
                        <div class="box-marca">
                            <div class="ano">
                                <div class="separador"></div>
                                <strong><?php echo $itens['ano'];?></strong>
                            </div>
                            <div class="content-titulo">
                                <h3><?php echo $itens['titulo'];?></h3>
                                <p><?php echo $itens['descricao'];?></p>
                            </div>
                        </div>
                    <?php
                }?>
                </div>
            </div>
        </div> 
    </div>

</section>