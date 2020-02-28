<footer class="footer">

    <section class="footer__top">
        <div class="container">
            <div class="footer__top__wrapper row">

                <div class="footer__top__wrapper__logo col-md-6">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>'/public/images/footer-logo-white.png ' " alt="">
                    </a>
                </div>
                
                <div class="footer__top__wrapper__redeSocial col-md-6">
                    <ul>

                        
                        <?php if(get_theme_mod('up_facebook') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_facebook'); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        
                        <?php if(get_theme_mod('up_twitter') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_twitter'); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        
                        <?php if(get_theme_mod('up_instagram') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_instagram'); ?>">
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
                        <h5 class="text-white">Company</h5>
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
                        <h5 class="text-white">Services</h5>
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
                        <h5 class="text-white">Help Center</h5>
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
                        <h5 class="text-white">Get in touch</h5>
                        <li class="location">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                            <a href="#">360 Harvest St, North Subract, London. Ipsum.
                            United States Of America.</a>
                        </li>
                        <li class="phone">
                            <span>
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <a href="#">3695-548555 - 0254-6589569</a>
                        </li>
                        <li class="email">
                            <span>
                                <i class="fas fa-envelope"></i>
                            </span>
                            <a href="#">info@consultante.org</a>
                        </li>
                        <li class="website">
                            <span>
                                <i class="fas fa-globe-asia"></i>
                            </span>
                            <a href="#">www.consultante.org</a>
                        </li>
                        
                    </ul>
                </div>

                <div class="col-md-3 d-flex align-items-center footer__menu__column">
                    <img src="<?php echo get_template_directory_uri() ?>'/public/images/footer-map.png' " alt="">
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

</body>
</html>