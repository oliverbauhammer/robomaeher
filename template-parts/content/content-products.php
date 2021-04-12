<?php
/**
 * Displays the product overview
 */
?>

<div class="cards container__spacer--large">
    <div class="container">
        <div class="row flex-md-row-reverse">

            <div class="col-12 col-lg-9">

                <div class="container">
                    <div class="row">

                    <?php
            
                    if( have_rows('products') ) :

                        while( have_rows('products') ) :
                            
                            the_row();
                            $title = get_sub_field('product_title');
                            $description = get_sub_field('product_description');
                            $link = get_sub_field('product_link');
                            $image = get_sub_field('product_image');

                    ?>

                        <div class="col-12 col-md-3 cards__card cards__card--product-card">
                            
                            <a 
                                class="cards__link"
                                href="<?php echo $link; ?>"
                            >

                                <p class="cards__title"><?php echo $title; ?></p>
                                <p class="cards__description"><?php echo $description; ?></p>

                                <img 
                                    class="cards__image" 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>" 
                                    title="<?php echo $image['title']; ?>" 
                                />

                                <p class="cards__button">
                                    <span class="material-icons">
                                        navigate_next
                                    </span>
                                    mehr Infos
                                </p>

                            </a>

                        </div>

                    <?php

                        endwhile;

                    endif;

                    ?>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">

                <?php
                
                if( have_rows('links') ) :

                    while( have_rows('links') ) :
                        
                        the_row();
                        $title = get_sub_field('link_title');
                        $description = get_sub_field('link_description');
                        $link = get_sub_field('link_link');

                ?>

                    <div class="cards__card cards__card--link-card">

                        <a 
                            class="cards__link"
                            href="<?php echo $link; ?>"
                        >

                            <div class="cards__content">
                                <p class="cards__title"><?php echo $title; ?></p>
                                <p class="cards__description"><?php echo $description; ?></p>
                            </div>
                            
                            <p class="cards__button">
                                <span class="material-icons">
                                    navigate_next
                                </span>
                            </p>

                        </a>

                    </div>

                <?php

                    endwhile;

                endif;

                ?>

            </div>
            
        </div>
    </div>
</div>