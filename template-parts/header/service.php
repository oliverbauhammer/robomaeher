<?php
/**
 * Displays the service navigation
 */
?>

<div class="header__service bg-secondary d-none d-md-block">
    <div class="container">
        <div class="row">

            <div class="col-4 d-none d-lg-block">
                <?php if ( has_nav_menu( 'service' ) ) : ?>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'service',
                            'menu_class'      => 'navigation__service list-unstyled d-flex menu-item-wrapper',
                            'container'       => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'fallback_cb'     => false,
                        )
                    );
                ?>
                <?php endif; ?>
            </div>

            <div class="col-12 col-lg-8 d-flex justify-content-between justify-content-lg-end">
                <ul class="navigation__contact list-unstyled d-flex menu-item-wrapper">
                    <li class="menu-item">
                        <a class="menu-link" href="tel.:+499001726658">
                            <span class="material-icons">local_phone</span>
                            <strong>09001 - 726658 (2,75/Min)</strong>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="mailto:post@robomaeher.de">
                            <span class="material-icons">mail</span>
                            <strong>post@robomaeher.de</strong>
                        </a>
                    </li>
                </ul>

                <ul class="navigation__socialmedia list-unstyled d-flex menu-item-wrapper">
                    <li class="menu-item">
                        <a class="menu-link" href="https://www.facebook.com/Haeussler.Rasenroboter.Dampfsauger" target="_blank">
                            <img src="https://robomaeher.de/wp-content/uploads/2021/03/facebook-1.png" width="18" height="18" title="robomaeher.de bei Facebook" alt="robomaeher.de bei Facebook">
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="https://www.youtube.com/channel/UCzQZ4Ssut53RZWaibSAuUdw" target="_blank">
                            <img src="https://robomaeher.de/wp-content/uploads/2021/03/youtube-1.png" width="18" height="18" title="robomaeher.de bei Youtube" alt="robomaeher.de bei Youtube">
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="https://www.instagram.com/haussler.michael/" target="_blank">
                            <img src="https://robomaeher.de/wp-content/uploads/2021/03/instagram-1.png" width="18" height="18" title="robomaeher.de bei Instagram" alt="robomaeher.de bei Instagram">
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="https://www.pinterest.de/haeussler/" target="_blank">
                            <img src="https://robomaeher.de/wp-content/uploads/2021/03/pinterest-1.png" width="18" height="18" title="robomaeher.de bei Pinterest" alt="robomaeher.de bei Pinterest">
                        </a>
                    </li>
                </ul>
            </div>  
        </div>
    </div>
</div>