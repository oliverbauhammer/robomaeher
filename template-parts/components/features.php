<?php
/**
 * Component: Features
 */
?>

<features inline-template>
    <div class="container__features">

        <div class="features__stage">
        <?php 

        if( have_rows('features_content') ): 
            
            while( have_rows('features_content') ): 

                the_row();
                $image = get_sub_field('features_content_image');

                if($image): 

        ?>


            <transition
                v-on:before-enter="beforeEnter"
                v-on:enter="enter"
                v-on:before-leave="beforeLeave"
                v-on:leave="leave"
                v-bind:css="false"
            >
                <img 
                    class="features__background"
                    src="<?php echo $image['url']; ?>" 
                    alt="<?php echo $image['alt']; ?>" 
                    title="<?php echo $image['title']; ?>" 
                    v-if="0 === activeFeature && !showContent" 
                />
            </transition>

        <?php

                endif;

            endwhile;

        endif;

        ?>

            <?php

            if( have_rows('features') ) :

                $index = 0;

                while( have_rows('features') ) :
                    
                    the_row();
                    $title = get_sub_field('feature_title');
                    $description = get_sub_field('feature_description');
                    $image = get_sub_field('feature__image');
                    $video = get_sub_field('feature_video');
                    $positionLeft = get_sub_field('feature_left');
                    $positionTop = get_sub_field('feature_top');
                    $positionClose = get_sub_field('feature_close');

                    $index++;
            ?>

                <a 
                    class="features__open"
                    href="#"
                    style="top: <?php echo $positionTop; ?>px; left: <?php echo $positionLeft; ?>px;"
                    v-on:click.prevent="showFeature(<?php echo $index; ?>)"   
                    v-if="0 === activeFeature && !showContent"  
                >
                    <span class="material-icons">
                    add
                    </span>
                </a>

                <transition
                    v-on:before-enter="beforeEnter"
                    v-on:enter="enter"
                    v-on:before-leave="beforeLeave"
                    v-on:leave="leave"
                    v-bind:css="false"
                >
                    <div 
                        class="features__item"
                        v-if="<?php echo $index; ?> === activeFeature && showContent"     
                    >

                        <img
                            src="<?php echo $image['url']; ?>" 
                            class="features__image" 
                            alt="<?php echo $image['alt']; ?>" 
                            title="<?php echo $image['title']; ?>" 
                        />

                        <div class="features__content" style="top: <?php echo $positionClose; ?>px;">

                            <p class="features__title"><?php echo $title; ?></p>
                            <p class="features__description"><?php echo $description; ?></p>

                            <a 
                                class="features__close"
                                v-on:click.prevent="showFeature(0)"
                            >
                                <span class="material-icons">
                                    add
                                </span>
                            </a>

                        </div>

                    </div>
                </transition>

            <?php 

                endwhile;

            endif; 

            ?>

        </div>

    </div>
</features>