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

                <div class="col-md-2 footer__menu__column">
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

                <div class="col-md-2 footer__menu__column">
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

                <div class="col-md-2 col-11 footer__menu__column">
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

                <div class="col-md-3 d-flex align-items-center footer__menu__column">
                    <img src="<?php echo get_template_directory_uri(); ?> /public/images/footer-map.png " alt="Mapa Footer">
                </div>


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
                
                <div class="col-md-6 text-right footer__copyright__wrapper__columnRight"><a href="upsites.com.br">UPSITES</a></div>
            </div>
        </div>
    </section>

</footer>

<!-- Scripts -->
    <!-- <script src="./theme.min.js"></script> -->
<!-- end Scripts -->
<script src=" <?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js "></script>

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

<?php get_footer(); ?>

</body>
</html>