<footer class="footer">

    <section class="footer__top">
        <div class="container">
            <div class="footer__top__wrapper row">

                <div class="footer__top__wrapper__logo col-md-6">
                    <?php 
                        $img_logo = get_template_directory_uri() . '/public/images/withe_logo.png';
                        if(get_theme_mod('up_logo_footer') ) : 
                    ?>
                        <a href="<?php bloginfo(url); ?>" class="logo">
                            <img class="img-responsive" src="<?php echo $img_logo = get_theme_mod('up_logo_footer'); ?> " alt="<?php echo get_theme_mod('up_desc_logo_footer') ?>">
                        </a>
                    <?php endif; ?>
                </div>
                
                <div class="footer__top__wrapper__redeSocial col-md-6">
                    <ul>

                        
                        <?php if(get_theme_mod('up_facebook_footer') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_facebook_footer'); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        
                        <?php if(get_theme_mod('up_twitter_footer') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_twitter_footer'); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        
                        <?php if(get_theme_mod('up_linkedin_footer') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_linkedin_footer'); ?>">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_theme_mod('up_instagram_footer') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_instagram_footer'); ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="footer__menu">
        <div class="container">
            <div class="row">

                <div class="col-md-2 footer__menu__column__company">
                    <ul>
                    <?php if(get_theme_mod('up_title_empresa') ) : ?>
                        <h5 class="text-white"><?php echo get_theme_mod('up_title_empresa'); ?></h5>
                    <?php endif; ?>

                        <li>
                            <a href="#">Turnaround Consulting</a>
                        </li>
                        <li>
                            <a href="#">Testimonials</a>
                        </li>
                        <li>
                            <a href="#">CEO Message</a>
                        </li>
                        <li>
                            <a href="#">Partners</a>
                        </li>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 footer__menu__column__service">
                    <ul>
                    <?php if(get_theme_mod('up_title_servicos') ) : ?>
                        <h5 class="text-white"><?php echo get_theme_mod('up_title_servicos'); ?></h5>
                    <?php endif; ?>

                        <li>
                            <a href="#">Audit & Issurance</a>
                        </li>
                        <li>
                            <a href="#">Trade & Stacks</a>
                        </li>
                        <li>
                            <a href="#">Strategy Projection</a>
                        </li>
                        <li>
                            <a href="#">Finance Projection</a>
                        </li>
                        <li>
                            <a href="#">Bonds & Commodities</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-11 footer__menu__column__support">
                    <ul>
                    <?php if(get_theme_mod('up_title_suporte') ) : ?>
                        <h5 class="text-white"><?php echo get_theme_mod('up_title_suporte'); ?></h5>
                    <?php endif; ?>

                        <li>
                            <a href="#">FAQS</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Support Center</a>
                        </li>
                        <li>
                            <a href="#">Use of Terms</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 col-10 footer__menu__columnInfos">
                    <ul>
                    <?php if(get_theme_mod('up_title_local') ) : ?>
                        <h5 class="text-white"><?php echo get_theme_mod('up_title_local'); ?></h5>
                    <?php endif; ?>

                        
                        <li class="location">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                            <?php if( get_theme_mod('up_link_address_local') && get_theme_mod('up_text_address_local') ) : ?>
                                <a href="<?= get_theme_mod('up_link_address_local') ?>"> <?= get_theme_mod('up_text_address_local'); ?></a>
                            <?php endif; ?>
                        </li>

                        <?php if( get_theme_mod('up_link_phone_address') || get_theme_mod('up_phone_address') ) : ?>
                            <li class="phone">
                                <span>
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                                    <a href="<?= get_theme_mod('up_link_phone_address') ?>"> <?= get_theme_mod('up_phone_address'); ?> </a>
                            </li>
                        <?php endif; ?>
                        
                        <?php if( get_theme_mod('up_link_email_address') && get_theme_mod('up_email_address')) : ?>
                        <li class="email">
                            <span>
                                <i class="fas fa-envelope"></i>
                            </span>
                            <a href="<?= get_theme_mod('up_link_email_address'); ?>"><?= get_theme_mod('up_email_address'); ?> </a>
                        </li>
                        <?php endif; ?>

                        <?php if( get_theme_mod('up_link_website') && get_theme_mod('up_website')) : ?>
                            <li class="website">
                                <span>
                                    <i class="fas fa-globe-asia"></i>
                                </span>
                                <a href="<?= get_theme_mod('up_link_website'); ?>"><?= get_theme_mod('up_website'); ?></a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>

                <?php 
                    $img_logo = get_template_directory_uri() . '/public/images/footer-map.png';
                    if(get_theme_mod('up_image_map') ) : 
                ?>
                    
                    <div class="col-md-3 d-flex align-items-center footer__menu__column">
                        <img class="img-responsive" src="<?php echo $img_logo = get_theme_mod('up_image_map'); ?> " alt="<?php echo get_theme_mod('up_desc_image_mapa') ?>">
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section class="footer__copyright">
        <div class="container footer__copyright__wrapper">
            <div class="row justify-content-between">
                <?php if( get_theme_mod('up_copyright') ) : ?>
                    <div class="col-md-6 text-left footer__copyright__wrapper__columnLeft">
                        <?php echo get_theme_mod('up_copyright'); ?> <?php echo Date('Y'); ?>
                    </div>
                <?php endif; ?>
                
                <?php if( get_theme_mod('up_company_copyright') ) : ?>
                    <div class="col-md-6 text-right footer__copyright__wrapper__columnRight">
                        <a href="<?= get_theme_mod('up_link_company_copyright'); ?>"><?= get_theme_mod('up_company_copyright'); ?> </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

</footer>

<!-- <script src=" <?php// echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js "></script> -->

<script>
let menu = document.querySelector('.header__rowBottom');
let headerClassList = menu.classList;
console.log(headerClassList);


window.addEventListener('scroll', () => {
    if (window.scrollY >= 150) {
        if(!headerClassList.contains('scrollHide')) {
            headerClassList.add('scrollHide')
        }
    } else {
        headerClassList.remove('scrollHide');
    }
});

</script>

<?php wp_footer(); ?>

<style type="text/css">

    .header__rowTop {
        background: <?= get_theme_mod('up_cor_fundo_rowTop_header'); ?>;
    }
    .header__rowTop__columnLeft ul li a {
        color: <?= get_theme_mod('up_cor_icone_face_header'); ?>;
    }
    .header__rowTop__columnLeft ul li a:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_face_header'); ?>;
    }
    .header__rowTop__columnLeft ul li a {
        color: <?= get_theme_mod('up_cor_icone_twitter_header'); ?>;
    }
    .header__rowTop__columnLeft ul li a:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_twitter_header'); ?>;
    }
    .header__rowTop__columnLeft ul li a {
        color: <?= get_theme_mod('up_cor_icone_insta_header'); ?>;
    }
    .header__rowTop__columnLeft ul li a:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_insta_header'); ?>;
    }
    .header__rowTop__columnLeft ul li a {
        color: <?= get_theme_mod('up_cor_icone_linkedin_header'); ?>;
    }
    .header__rowTop__columnLeft ul li a:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_linkedin_header'); ?>;
    }
    .header__rowTop__columnRight a {
        color: <?= get_theme_mod('up_cor_link_contact_header'); ?>;
    }
    .header__rowTop__columnRight a:hover {
        color: <?= get_theme_mod('up_cor_hover_link_contact_header'); ?>;
    }
    /* Row Center */
    .header__rowCenter__office ul li i {
        color: <?= get_theme_mod('up_cor_icone_local_header'); ?> ;
    }
    .header__rowCenter__office ul li p {
        color: <?= get_theme_mod('up_cor_texto1_local_header'); ?> ;
    }
    .header__rowCenter__office ul li p:nth-child(2) {
        color: <?= get_theme_mod('up_cor_texto2_local_header'); ?> ;
    }
    .header__rowCenter__contact ul li i {
        color: <?= get_theme_mod('up_cor_icone_tel_header'); ?> ;
    }
    .header__rowCenter__contact ul li p {
        color: <?= get_theme_mod('up_cor_texto_tel_header'); ?> ;
    }
    /** Row Bottom */
        /* Menu Responsivo */
    .fa-bars:before {
        color: <?= get_theme_mod('up_cor_menu_responsive_header'); ?>;
    }
    .header__rowBottom .navbar .navbar-nav .menu-item a {
        color: <?= get_theme_mod('up_cor_item_menu_header'); ?>;
    }
    .header__rowBottom .navbar .navbar-nav .menu-item a:hover {
        color: <?= get_theme_mod('up_cor_hover_item_menu_header'); ?>;
    }
    .header__rowBottom .navbar .wrapper li a .fa-shopping-cart{
        color: <?= get_theme_mod('up_cor_icone_shop_header'); ?> !important;
    }
    .header__rowBottom .navbar .wrapper li a .fa-shopping-cart {
        color: <?= get_theme_mod('up_cor_hover_icone_shop_header'); ?>;
    }
    .header__rowBottom .navbar .wrapper li a .fa-search{
        color: <?= get_theme_mod('up_cor_icone_search_header'); ?>;
    }
    .header__rowBottom .navbar .wrapper li a .fa-search {
        color: <?= get_theme_mod('up_cor_hover_icone_search_header'); ?>;
    }
    /** Footer */
    .footer__top {
        background-color: <?= get_theme_mod('up_cor_principal_topo_footer'); ?>;
    }
    .footer__top__wrapper {
        border-bottom-color: solid 1px <?= get_theme_mod('up_cor_borda_about_footer'); ?> !important;
    }    
    .footer__top__wrapper__redeSocial .fa-facebook-f {
        color: <?= get_theme_mod('up_cor_icone_face_footer'); ?>;
    }
    .footer__top__wrapper__redeSocial .fa-facebook-f:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_face_footer'); ?>;
    }
    .footer__top__wrapper__redeSocial .fa-twitter {
        color: <?= get_theme_mod('up_cor_icone_twitter_footer'); ?>;
    }
    .footer__top__wrapper__redeSocial .fa-twitter:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_twitter_footer'); ?>;
    }
    .footer__top__wrapper__redeSocial .fa-linkedin {
        color: <?= get_theme_mod('up_cor_icone_linkedin_footer'); ?>;
    }
    .footer__top__wrapper__redeSocial .fa-linkedin:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_linkedin_footer'); ?>;
    }
    .footer__top__wrapper__redeSocial .fa-instagram {
        color: <?= get_theme_mod('up_cor_icone_insta_footer'); ?>;
    }
    .footer__top__wrapper__redeSocial .fa-instagram:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_insta_footer'); ?>;
    }
    /** Row Center */
    .footer__menu {
        background-color: <?= get_theme_mod('up_cor_principal_about_footer'); ?>;
    }
    /** About */
    .footer__menu__column__company h5 {
        color: <?= get_theme_mod('up_cor_titulo_empresa_footer'); ?> !important;
    }
    .footer__menu__column__company ul li a {
        color: <?= get_theme_mod('up_cor_link_empresa_footer');?>;
    }
    .footer__menu__column__company ul li a:before {
        border-left-color: <?= get_theme_mod('up_cor_simbolo_link_empresa_footer');?>;
    }
    /** Serviços */
    .footer__menu__column__service h5 {
        color: <?= get_theme_mod('up_cor_titulo_servico_footer'); ?> !important;
    }
    .footer__menu__column__service ul li a {
        color: <?= get_theme_mod('up_cor_link_servico_footer');?>;
    }
    .footer__menu__column__service ul li a:before {
        border-left-color: <?= get_theme_mod('up_cor_simbolo_link_servico_footer');?>;
    }
    /** Suporte */
    .footer__menu__column__support h5 {
        color: <?= get_theme_mod('up_cor_titulo_suporte_footer'); ?> !important;
    }
    .footer__menu__column__support ul li a {
        color: <?= get_theme_mod('up_cor_link_suporte_footer');?>;
    }
    .footer__menu__column__support ul li a:before {
        border-left-color: <?= get_theme_mod('up_cor_simbolo_link_suporte_footer');?>;
    }
    /** Localização */
    .footer__menu__columnInfos h5 {
        color: <?= get_theme_mod('up_cor_titulo_local_footer'); ?> !important;
    }
    .footer__menu__columnInfos ul li a {
        color: <?= get_theme_mod('up_cor_link_local_footer');?>;
    }
    .footer__menu__columnInfos ul .location span i {
        color: <?= get_theme_mod('up_cor_icone_local_footer');?> !important;
    }
    /** Copyright */
    .footer__copyright {
        background-color: <?= get_theme_mod('up_cor_fundo_copyright_footer');?>;
    }
    .footer__copyright__wrapper {
        border-top-color: <?= get_theme_mod('up_cor_borda_fundo_copyright_footer');?>;
    }
    .footer__copyright__wrapper__columnLeft {
        color: <?= get_theme_mod('up_cor_texto_copyright_footer');?>;
    }
    .footer__copyright__wrapper__columnRight a {
        color: <?= get_theme_mod('up_cor_empresa_copyright_footer');?>;
    }
    .footer__copyright__wrapper__columnRight a:hover {
        color: <?= get_theme_mod('up_cor_hover_empresa_copyright_footer');?>;
    }

</style>

</body>
</html>