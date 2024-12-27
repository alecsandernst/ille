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
$backgroundSection = get_sub_field('backgroundsection');
$titulo = get_sub_field('titulo');
$conteudo = get_sub_field('conteudo');

$tabela = get_sub_field('tabela');
$titulo_tabela = get_sub_field('t_tabela');

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

<section class="sessaoTabela <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row align-items-center" style="flex-direction: <?php echo $direction; ?>" >
            
            <div class="col-lg-12">
                    
                <h2 style="<?php echo $corFonte;?>"><?php echo $titulo;?></h2>
                    <div class="container-table">

                        <table>
                            <thead>
                                <tr>
                                    <?php foreach($titulo_tabela as $titulo_tb){
                                        ?>
                                            <th><?php echo $titulo_tb['coluna_tb']; ?></th>
                                        <?php
                                    }?>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tabela as $item){
                                    ?>
                                             <tr>
                                                <td><?php echo $item['valor_total'];?></td>
                                                <td><?php echo $item['entrada'];?></td>
                                                <td><?php echo $item['n_parcelas'];?></td>
                                                <td><?php echo $item['valor_de_parcelas'];?></td>
                                                <td><?php echo $item['carencia'];?></td>
                                            </tr>
                                    <?php
                                }?>
                            </tbody>
                        </table>

                    </div>
                    
            </div>
        </div> 
    </div>

</section>