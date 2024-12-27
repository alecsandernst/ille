<?php 
    $logo_svg = get_field('logo_svg', 'option');
    $logo_png = get_field('logo_png', 'option');
    $logo_png_branco = get_field('logo_png_branca', 'option');

    $background_footer = get_field('background_footer', 'option');
    $redes = get_field('redes_sociais', 'option');

    $descricao_footer = get_field('descricao_footer', 'option');
    
    $endereco = get_field('endereco', 'option');
    $link_endereco = get_field('link_endereco', 'option');
    $contatos_atendimento = get_field('contatos_atendimento', 'option');

    $lista_contatos = get_field('lista_contatos', 'option');

    $link_de_compra_dos_produtos = get_field('link_de_compra_dos_produtos', 'option');

?>


<!-- <a href="<?php echo $link_de_compra_dos_produtos; ?>" class="btn-whatsapp" target="_blank">
  <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 130 130" fill="none">
    <rect width="130" height="130" rx="65" fill="#25D366" />
    <g clip-path="url(#clip0_75_356)">
      <mask id="mask0_75_356" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="22" y="23" width="85"
        height="85">
        <path d="M107 23H22V108H107V23Z" fill="white" />
      </mask>
      <g mask="url(#mask0_75_356)">
        <path
          d="M44.3253 93.0995L47.4023 94.897C52.5913 97.9235 58.493 99.5121 64.5 99.5C71.2244 99.5 77.798 97.5061 83.3892 93.7701C88.9809 90.0341 93.3387 84.7239 95.912 78.5113C98.4852 72.2987 99.1585 65.4622 97.8468 58.8669C96.5347 52.2715 93.2967 46.2133 88.5416 41.4584C83.7865 36.7034 77.7282 33.4652 71.1331 32.1533C64.5378 30.8414 57.7015 31.5147 51.4888 34.0881C45.2761 36.6615 39.966 41.0193 36.2301 46.6106C32.4941 52.2019 30.5 58.7754 30.5 65.5C30.4877 71.5091 32.078 77.4125 35.107 82.602L36.9005 85.679L34.1253 95.883L44.3253 93.0995ZM22.0171 108L27.763 86.886C23.9767 80.3956 21.9875 73.014 22.0001 65.5C22.0001 42.0273 41.0273 23 64.5 23C87.973 23 107 42.0273 107 65.5C107 88.9725 87.973 108 64.5 108C56.9894 108.012 49.6108 106.024 43.1225 102.241L22.0171 108ZM49.1618 45.559C49.7313 45.5165 50.305 45.5165 50.8745 45.542C51.104 45.559 51.3335 45.5845 51.563 45.61C52.2388 45.6865 52.9825 46.0988 53.2333 46.6683C54.4998 49.5413 55.7323 52.4355 56.9223 55.3383C57.1858 55.9843 57.0285 56.813 56.527 57.6205C56.272 58.0327 55.8725 58.6107 55.4093 59.2015C54.929 59.8177 53.8963 60.9482 53.8963 60.9482C53.8963 60.9482 53.4755 61.4497 53.637 62.0745C53.6965 62.3125 53.892 62.6567 54.0705 62.9457L54.3213 63.3495C55.4093 65.1642 56.8713 67.0045 58.6563 68.7385C59.1663 69.2315 59.6635 69.737 60.199 70.209C62.188 71.964 64.4405 73.3965 66.8715 74.459L66.893 74.4675C67.254 74.6245 67.437 74.7095 67.964 74.935C68.2275 75.0455 68.4995 75.139 68.7755 75.2155C69.0609 75.288 69.3616 75.2746 69.6394 75.1761C69.9172 75.0777 70.1592 74.8992 70.3355 74.663C73.4125 70.9355 73.693 70.6935 73.7185 70.6935V70.702C73.9319 70.5025 74.186 70.3513 74.4629 70.2582C74.7403 70.1652 75.0342 70.1325 75.325 70.162C75.58 70.179 75.839 70.226 76.077 70.332C78.334 71.365 82.027 72.9755 82.027 72.9755L84.5005 74.085C84.917 74.2845 85.2955 74.7565 85.308 75.211C85.325 75.496 85.3505 75.955 85.253 76.7965C85.117 77.897 84.7855 79.219 84.454 79.9115C84.2267 80.3844 83.9252 80.8174 83.5615 81.195C83.1325 81.6455 82.6627 82.0553 82.159 82.419C81.8105 82.6825 81.6275 82.8015 81.6275 82.8015C81.0987 83.1371 80.5556 83.4489 80 83.7365C78.9057 84.3181 77.6969 84.6518 76.4595 84.714C75.6735 84.7565 74.887 84.816 74.0965 84.7735C74.0625 84.7735 71.6825 84.404 71.6825 84.404C65.6401 82.8145 60.052 79.8373 55.3625 75.7085C54.402 74.8625 53.5095 73.953 52.6 73.048C48.826 69.2865 45.9658 65.228 44.2275 61.3945C43.3423 59.5139 42.8644 57.4674 42.825 55.3893C42.8091 52.8084 43.654 50.2959 45.2263 48.2493C45.5365 47.8498 45.8298 47.4333 46.3355 46.953C46.871 46.443 47.2153 46.171 47.585 45.984C48.0767 45.7376 48.613 45.593 49.1618 45.559Z"
          fill="white" />
      </g>
    </g>
    <defs>
      <clipPath id="clip0_75_356">
        <rect width="85" height="85" fill="white" transform="translate(22 23)" />
      </clipPath>
    </defs>
  </svg>
</a>

<a class="localizacao-anntecipada" id="btn-localizacao" target="_blank" href="http://edenfunerais.com.br/mapamemorial/">
    <svg width="28" aria-hidden="true" class="e-font-icon-svg e-fas-map-marked" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg>
    LOCALIZAÇÃO ANTECIPADA
</a> -->


<footer style="background-image: url('<?php echo $background_footer['url']; ?>')">
    <div class="container">

        <div class="row" style="padding-top: 30px">
            <div class="col-lg-3">
                <div class="column-um">
                    <img src="<?php echo $logo_png_branco['url'];?>" alt="<?php echo $logo_png_branco['alt'];?>">
                    <p><?php echo $descricao_footer;?></p>

                        <!-- <h4>Nossas Redes</h4>
                        <div class="links-footer">
                            <?php foreach($redes as $item){
                                ?>
                                    
                                        <a href="<?php echo $item['link_icone']?>" target="_blank">
                                            <?php echo $item['svg']?>
                                        </a>
                                    
                                <?php
                            }?>
                        </div> -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="column-dois">
                    <h3>Menu</h3>
                    <?php
                        wp_nav_menu([
                            'menu'            => 'Menu Fotter',
                            'theme_location'  => 'menu_footer',
                            'container'       => 'div',
                            'container_id'    => '',
                            'container_class' => '',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav mr-auto',
                            
                        ]);
                    ?>
                </div>
            </div>
            <div class="col-lg-3">
            <div class="column-tres">
                <div class="endereco">
                    <h3>Endereco</h3>
                    <a href="<?php echo $link_endereco;?>" target="_blank" ><?php echo $endereco;?></a>

                    <div class="links-contatos">
                        <?php foreach($contatos_atendimento as $item_one){
                            ?>
                                <a href="<?php echo $item_one['link'];?>">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.3769 2.61904C14.5475 1.78574 13.5597 1.12502 12.4711 0.675373C11.3825 0.225731 10.2148 -0.00383684 9.03618 4.85055e-05C4.09749 4.85055e-05 0.0723619 4.00504 0.0723619 8.91902C0.0723619 10.494 0.488442 12.024 1.26633 13.374L0 18L4.74874 16.758C6.0603 17.469 7.53467 17.847 9.03618 17.847C13.9749 17.847 18 13.842 18 8.92803C18 6.54303 17.0683 4.30204 15.3769 2.61904ZM9.03618 16.335C7.69749 16.335 6.38593 15.975 5.23719 15.3L4.96583 15.138L2.14372 15.876L2.89447 13.14L2.71357 12.861C1.96964 11.6794 1.57471 10.3134 1.57387 8.91902C1.57387 4.83304 4.9206 1.50304 9.02713 1.50304C11.0171 1.50304 12.8894 2.27704 14.2915 3.68104C14.9858 4.36851 15.536 5.18632 15.9102 6.08703C16.2844 6.98773 16.4752 7.9534 16.4714 8.92803C16.4894 13.014 13.1427 16.335 9.03618 16.335ZM13.1246 10.791C12.8985 10.683 11.795 10.143 11.596 10.062C11.3879 9.99002 11.2432 9.95402 11.0894 10.17C10.9357 10.395 10.5106 10.899 10.3839 11.043C10.2573 11.196 10.1216 11.214 9.89548 11.097C9.66935 10.989 8.94573 10.746 8.09548 9.99002C7.42613 9.39602 6.98291 8.66703 6.84724 8.44203C6.7206 8.21703 6.82914 8.10003 6.94673 7.98303C7.04623 7.88403 7.17286 7.72203 7.28141 7.59603C7.38995 7.47003 7.43518 7.37103 7.50754 7.22703C7.5799 7.07403 7.54372 6.94803 7.48945 6.84003C7.43517 6.73203 6.98291 5.63403 6.80201 5.18403C6.6211 4.75204 6.43116 4.80604 6.29548 4.79704H5.86131C5.70754 4.79704 5.47236 4.85104 5.26432 5.07604C5.06533 5.30103 4.48643 5.84103 4.48643 6.93903C4.48643 8.03703 5.29146 9.09902 5.4 9.24302C5.50854 9.39602 6.98291 11.646 9.22613 12.609C9.7598 12.843 10.1759 12.978 10.5015 13.077C11.0352 13.248 11.5236 13.221 11.9126 13.167C12.3467 13.104 13.2422 12.627 13.4231 12.105C13.6131 11.583 13.6131 11.142 13.5497 11.043C13.4864 10.944 13.3508 10.899 13.1246 10.791Z" fill="white"/>
                                    </svg>
                                    <?php echo $item_one['contato'];?>
                                </a>
                            <?php
                        }?>
                    </div>
                </div>

                
                
            </div>
            </div>
            <div class="col-lg-3">
                <div class="column-quatro">
                    <div class="endereco">
                        <h3>Contato</h3>
                        
                        <div class="links-contatos">
                            <?php foreach($lista_contatos as $item_two){
                                ?>
                                    <a href="<?php echo $item_two['link'];?>">
                                        <?php echo $item_two['svg']?>
                                        <?php echo $item_two['contato'];?>
                                    </a>
                                <?php
                            }?>
                        </div>

                        <div class="links-footer">
                            <?php foreach($redes as $item){
                                ?>
                                    
                                        <a href="<?php echo $item['link_icone']?>" target="_blank">
                                            <?php echo $item['svg']?>
                                        </a>
                                    
                                <?php
                            }?>
                        </div> 
                    </div>

                    
                </div>
            </div>
        </div>

                      
        
    </div>
    <div class="final">
        <div class="container">
            <div class="row">
                <div class="col-12 content-final" style="
                    
                ">
                        <div class="lgpd">
                            <div class="lgpd-title">
                                <p style="color: #fff">Atratis - CNPJ: 11.647.486/0001-70</p>  
                                <?php
                                    wp_nav_menu([
                                        'menu'            => 'Menu LGPD',
                                        'theme_location'  => 'menu_lgpd',
                                        'container'       => 'div',
                                        'container_id'    => '',
                                        'container_class' => '',
                                        'menu_id'         => false,
                                        'menu_class'      => 'navbar-nav mr-auto',
                                        
                                    ]);
                                ?>
                            </div>
                            
                        </div>
                        <div class="assinatura">
                            <h2>
                                <a href="http://www.atratis.com.br" target="_blank" class="ir"
                                title="Site criado pela agência Atratis Digital de Fortaleza - Ceará. Inbound Marketing, Criação de Sites, Mídias Sociais e mais.">Site
                                criado por Atratis, uma agência de comunicação digital de Fortaleza - Ceará</a>
                            </h2>
                        </div>
                    </div>
            </div>  
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!-- <script src="<?php bloginfo("template_url"); ?>/build/js/scripts.min.js"></script> -->

<?php wp_footer(); ?>
</body>
</html>