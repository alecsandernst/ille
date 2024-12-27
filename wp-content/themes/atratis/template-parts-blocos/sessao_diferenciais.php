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
$titulo_carrosel = get_sub_field('titulo_carrosel');
$descricao = get_sub_field('descricao');

$items_diferenciais = get_sub_field('items_diferenciais');

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

<section class="sessaoDiferenciais <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
       <div class="row">
            <div class="col-lg-7">
                <div class="title">
                    <h2 data-aos='fade-right' data-aos-duration='1000'><?php echo $titulo; ?></h2>
                    <p data-aos='fade-right' data-aos-duration='1000' data-aos-delay='300'><?php echo $descricao; ?></p>
                </div>
                <div class="content-diferenciais">
                    <div class="top-carrosel">
                        <div class="title-diferenciais">
                            <h3><?php echo $titulo_carrosel; ?></h3>
                        </div>
                        <div class="btns-diferenciais">
                            <div class="custom-pag">
                                <div class="prev-btn" id="prev-btn" onclick="prevDiferenciais()">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.16697 15.984C8.05986 15.9853 7.95366 15.9646 7.8552 15.9233C7.75674 15.882 7.66821 15.821 7.59528 15.7443L0.245009 8.55145C-0.0816697 8.23177 -0.0816697 7.73626 0.245009 7.41658L7.59528 0.23976C7.92196 -0.0799201 8.42831 -0.0799201 8.75499 0.23976C9.08167 0.559441 9.08167 1.05494 8.75499 1.37462L1.97641 7.99201L8.75499 14.6254C9.08167 14.9451 9.08167 15.4406 8.75499 15.7602C8.59165 15.9201 8.37931 16 8.1833 16L8.16697 15.984Z" fill="#9EA436"/>
                                    </svg>
                                </div>

                                <div class="next-btn" id="next-btn" onclick="nextDiferenciais()">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.833031 15.984C0.940143 15.9853 1.04634 15.9646 1.1448 15.9233C1.24326 15.882 1.33179 15.821 1.40472 15.7443L8.75499 8.55145C9.08167 8.23177 9.08167 7.73626 8.75499 7.41658L1.40472 0.23976C1.07804 -0.0799201 0.571688 -0.0799201 0.245009 0.23976C-0.0816698 0.559441 -0.0816698 1.05494 0.245009 1.37462L7.02359 7.99201L0.245009 14.6254C-0.0816698 14.9451 -0.0816698 15.4406 0.245009 15.7602C0.408349 15.9201 0.620689 16 0.816697 16L0.833031 15.984Z" fill="#9EA436"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-carrosel">
                        <div class="owl-diferenciais owl-carousel owl-theme">
                            <?php foreach($items_diferenciais as $item): ?>
                            <div class="item-diferencial">
                                <svg width="26" height="33" viewBox="0 0 26 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.2598 21.9449L18.2602 21.9456C19.4503 21.4358 20.77 20.5863 21.7913 19.1734C22.8157 17.7563 23.5148 15.8068 23.5148 13.143C23.5148 8.83547 22.1144 6.13666 20.0359 4.53312C17.9821 2.94858 15.352 2.5015 13.0134 2.5015C10.6749 2.5015 8.03781 2.94858 5.97676 4.53255C3.89078 6.13569 2.48221 8.83449 2.48221 13.143C2.48221 15.8102 3.18452 17.7614 4.21354 19.1794C5.23941 20.5931 6.56485 21.4424 7.75994 21.9519L7.76042 21.9521C8.62533 22.3199 9.25734 23.0501 9.51588 23.9256L9.60402 24.2241L9.91078 24.2768C10.4102 24.3626 10.9451 24.4244 11.5163 24.4629L12.0499 24.4988V23.964V16.4595V16.1066L11.7174 15.9884C10.9221 15.7057 10.1063 15.1568 9.25251 14.2955L9.25237 14.2954C8.86504 13.9049 8.8661 13.2705 9.25594 12.8795C9.64416 12.4902 10.2688 12.4911 10.6577 12.8829L18.2598 21.9449ZM18.2598 21.9449C17.4 22.3141 16.7685 23.0467 16.5128 23.9213L16.4255 24.22L16.1189 24.2736C15.6365 24.3578 15.1211 24.4197 14.57 24.4583L14.0351 24.4957V23.9595V16.449V16.0985L14.3646 15.979C15.3616 15.6173 16.1705 14.9101 16.7786 14.2958L16.779 14.2954C17.1663 13.9049 17.1652 13.2705 16.7754 12.8795C16.3875 12.492 15.7641 12.4922 15.3734 12.8832C14.5649 13.702 13.8167 14.2355 12.9829 14.2229C12.1548 14.2104 11.4274 13.6599 10.6577 12.883L18.2598 21.9449ZM6.9918 23.7937L6.99119 23.7934C5.77389 23.2754 4.15333 22.3287 2.83844 20.664C1.52954 19.0069 0.5 16.6093 0.5 13.1415C0.5 9.12524 1.6854 5.97844 3.80648 3.83671C5.92694 1.6956 9.04091 0.5 13.0149 0.5C17.0444 0.5 20.1486 1.66792 22.2461 3.79074C24.3444 5.9144 25.5 9.05916 25.5 13.1415C25.5 16.6044 24.4747 18.9997 23.1714 20.6557C21.8623 22.3193 20.249 23.2662 19.0376 23.7849L19.0369 23.7852C18.6249 23.9623 18.3704 24.3525 18.3704 24.801C18.3704 26.6574 18.3611 28.5871 17.6836 30.0614C17.3535 30.7797 16.8685 31.3774 16.1464 31.8013C15.4193 32.2282 14.4151 32.5 13.0149 32.5C11.6146 32.5 10.6105 32.2285 9.88346 31.8022C9.16147 31.3789 8.67674 30.7819 8.34692 30.0647C7.66985 28.5923 7.66089 26.6651 7.66089 24.81C7.66089 24.361 7.40575 23.9705 6.9918 23.7937ZM10.2646 26.3495L9.6612 26.2725L9.70243 26.8794C9.8035 28.3671 10.0493 29.347 10.6577 29.9098C11.2738 30.4796 12.1394 30.5 13.0149 30.5C13.4808 30.5 13.921 30.4912 14.308 30.4204C14.7054 30.3477 15.0799 30.2043 15.3941 29.9127C15.705 29.6241 15.9123 29.2316 16.0549 28.7411C16.1966 28.2536 16.2829 27.6397 16.332 26.8745L16.3709 26.2689L15.769 26.3466C14.9342 26.4545 14.022 26.509 13.0149 26.509C12.0074 26.509 11.0979 26.4559 10.2646 26.3495Z" fill="#9EA436" stroke="#9EA436"/>
                                </svg>

                                <h4><?php echo $item['texto'];?></h4>

                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content-img" data-aos='fade-left' data-aos-duration='1000'>
                    <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
                </div>
            </div>
       </div>
    </div>

</section>