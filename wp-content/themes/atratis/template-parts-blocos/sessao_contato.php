<?php 
/////////////////////////////////////////////////////////
// Configurações Gerais do Bloco
// template: conf_gerais.php
// Variáveis diponíveis: $geraisCSS, $corFonte, $animacao

include "conf_gerais.php";

/////////////////////////////////////////////////////////

$titulo = get_sub_field('titulo', "option");
$descricao = get_sub_field('descricao', "option");
$link_telefone = get_sub_field('link_telefone');
$telefone = get_sub_field('telefone');
$shortcode_form = get_sub_field('shortcode', "option");
?>

<section class="secaoContato <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>"
  <?php echo $animacao; ?>>

  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-5">
        <div class="content">
          <h2>
            <?php echo $titulo; ?>
          </h2>
          <p>
            <?php echo $descricao; ?>
          </p>  
          <?php 
            $link_whatsapp = get_field('link_whatsapp', "option");
            $texto_whatsapp = get_field('texto_whatsapp', "option");
            $endereco = get_field('endereco', "option");
            $endereco_link = get_field('link_endereco', "option");
          ?>
          
          <a href="<?php echo $link_telefone; ?>" class="link-contato" target="_blank">
            <?php echo $telefone; ?>
          </a>

          
          <a href="<?php echo $link_whatsapp; ?>" class="whatsapp-button" target="_blank">
            <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M31.7216 5.49095C30.0345 3.79586 28.0252 2.45182 25.8107 1.53717C23.5963 0.622509 21.2211 0.155525 18.8234 0.163429C8.7772 0.163429 0.589336 8.31033 0.589336 18.3063C0.589336 21.5101 1.43572 24.6224 3.0181 27.3686L0.442139 36.7787L10.102 34.2523C12.7699 35.6986 15.7691 36.4675 18.8234 36.4675C28.8697 36.4675 37.0575 28.3206 37.0575 18.3246C37.0575 13.4731 35.1624 8.91448 31.7216 5.49095ZM18.8234 33.3918C16.1003 33.3918 13.4323 32.6595 11.0956 31.2864L10.5436 30.9569L4.80287 32.4581L6.33004 26.8926L5.96205 26.3251C4.44876 23.9214 3.64539 21.1427 3.64368 18.3063C3.64368 9.99463 10.4516 3.22081 18.805 3.22081C22.853 3.22081 26.6617 4.79526 29.5136 7.65126C30.926 9.04971 32.0453 10.7133 32.8065 12.5455C33.5677 14.3777 33.9557 16.3421 33.948 18.3246C33.9848 26.6363 27.1769 33.3918 18.8234 33.3918ZM27.1401 22.1143C26.6801 21.8946 24.4353 20.7961 24.0305 20.6314C23.6073 20.4849 23.313 20.4117 23.0002 20.8511C22.6874 21.3088 21.8226 22.334 21.565 22.6269C21.3074 22.9381 21.0314 22.9748 20.5714 22.7368C20.1114 22.5171 18.6394 22.0228 16.9099 20.4849C15.5483 19.2766 14.6467 17.7937 14.3707 17.336C14.1131 16.8783 14.3339 16.6403 14.5731 16.4023C14.7755 16.2009 15.0331 15.8714 15.2539 15.6151C15.4747 15.3588 15.5667 15.1574 15.7139 14.8645C15.8611 14.5532 15.7875 14.2969 15.6771 14.0772C15.5667 13.8575 14.6467 11.624 14.2787 10.7086C13.9107 9.82987 13.5243 9.93971 13.2483 9.9214H12.3651C12.0523 9.9214 11.574 10.0312 11.1508 10.4889C10.746 10.9466 9.56838 12.0451 9.56838 14.2786C9.56838 16.5122 11.206 18.6725 11.4268 18.9654C11.6475 19.2766 14.6467 23.8535 19.2098 25.8124C20.2954 26.2884 21.1418 26.5631 21.8042 26.7644C22.8898 27.1123 23.8833 27.0574 24.6745 26.9475C25.5577 26.8194 27.3793 25.8491 27.7473 24.7872C28.1337 23.7254 28.1337 22.8283 28.0049 22.6269C27.8761 22.4255 27.6001 22.334 27.1401 22.1143Z" fill="#DAA520"/>
            </svg>
            <div class="textoWhats"><span>Fale pelo WhatsApp:</span> <strong>(85) 9 9999-9999</strong></div>
          </a>

        </div>
      </div>
      <div class="col-lg-7">
        <div class="formulario">
          <?php echo do_shortcode($shortcode_form); ?>
        </div>
      </div>
    </div>
  </div>
</section>
