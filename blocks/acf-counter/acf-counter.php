<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<!-- COUNTER -->
<div class="container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
                <div class="swiper mySwiper-klantencase relative">
                    <div class="swiper-wrapper">
                        <?php
                        if( have_rows('counter_repeater') ):
                            while( have_rows('counter_repeater') ) : the_row(); ?>
                            <div class="swiper-slide">
                                <div class="h-full">
                                    <div class="py-[25px] px-3 boxshadow bg-white flex flex-col h-full">
                                        <p class="mt-1 text-56 leading-68 md:text-80 md:leading-98 font-bold text-[#101357] text-center counter" data-count="<?php the_sub_field('nummer');?>" data-duration="<?php the_sub_field('snelheid');?>" data-type="<?php the_sub_field('achtervoegsel');?>"><?php the_sub_field('nummer');?></p>
                                        <p class="mt-1 text-[#8789AB] font-bold text-14 leading-20 md:text-16 md:leading-22 text-center"><?php the_sub_field('titel');?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
        </div>
<?php endif; ?>