<?php
/**
 * Component: Swiper
 */
?>

<div class="swiper">

    <custom-swiper inline-template>

        <swiper :options="swiperOptions">

        <?php

        if( have_rows('swiper') ) :

            while( have_rows('swiper') ) :
                
                the_row();
                $image = get_sub_field('swiper_image');
                $title = get_sub_field('swiper_title');
                $color = get_sub_field('swiper_color');
                $link = get_sub_field('swiper_link');

                ?>

                <swiper-slide class="swiper__slide">      
                    <a 
                        class="swiper__link"    
                        href="<?php echo $link; ?>"
                    >
                        
                        <img 
                            data-src="<?php echo $image['url']; ?>" 
                            class="swiper-lazy swiper__image" 
                            alt="<?php echo $image['alt']; ?>" 
                            title="<?php echo $image['title']; ?>"
                        />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        
                        <?php if($title): ?>
                            <div class="container swiper__container">
                                <div class="row">
                                    <div class="col-12 col-md">
                                        <p class="swiper__title text-<?php echo $color; ?>">
                                            <?php echo $title; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                </swiper-slide>

                <?php

            endwhile;

        endif;

        ?>

        </swiper>

    </custom-swiper>

    <div class="container swiper__container swiper__container--navigation d-none d-lg-block">
        <div class="row">
            <div class="col">
                <div class="swiper-button-prev swiper__prev" slot="button-prev"></div>
                <div class="swiper-button-next swiper__next" slot="button-next"></div>
                <div class="swiper-pagination swiper__pagination" slot="pagination"></div>
            </div>
        </div>
    </div>
    
</div>