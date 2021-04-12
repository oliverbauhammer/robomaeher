<?php
/**
 * Displays the robomaeher features
 */
?>

<div class="features container__spacer--large">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">

            <?php 
            
            if( have_rows('features_content') ): 
                
                while( have_rows('features_content') ): 
                    
                    the_row(); 
                    $title = get_sub_field('features_content_title');
                    $description = get_sub_field('features_content_description');
                    $button = get_sub_field('features_content_button');
                    $url = get_sub_field('features_content_url');

            ?>

                <?php if($title) : ?>
                    <h3 class="mb-4"><?php echo $title; ?></h3>
                <?php endif; ?>

                <?php if($description) : ?>
                    <p class="mb-5"><?php echo $description ?></p>
                <?php endif; ?>

                <?php if( $button && $url ) : 
                ?>
                    <a 
                        class="btn btn-green-dark w-100"
                        href="<?php echo $url; ?>"
                    >
                        <?php echo $button; ?>
                    </a>
                <?php endif; ?>

            <?php

                endwhile;

            endif;

            ?>

            </div>
            <div class="col-12 col-md-8">

                <?php get_template_part('template-parts/components/features'); ?>

            </div>
        </div>
    </div>
</div>