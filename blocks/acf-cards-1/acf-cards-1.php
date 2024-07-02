<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<!-- CARDS 1 -->
<div class="container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="swiper mySwiper-overons relative">
        <div class="swiper-wrapper">
            <?php
            if( have_rows('cards_repeater') ):
                while( have_rows('cards_repeater') ) : the_row(); ?>
                <div class="swiper-slide">
                    <div class="h-full">
                        <div class="py-[25px] px-3 boxshadow bg-white flex flex-col h-full">
                            <div class="rounded-full w-[130px] h-[130px] mx-auto bg-[#ebf8f8] flex items-center justify-center">
                                <img src="/wp-content/themes/meetaimy/img/icons-acf/<?php the_sub_field('icoon');?>.svg" alt="Icoon <?php the_sub_field('titel');?>" class="w-[90px] h-[90px]">
                            </div>
                            <p class="mt-1 text-16 leading-22 md:text-22 md:leading-30 font-bold text-[#101357] text-center"><?php the_sub_field('titel');?></p>
                            <p class="mt-1 text-16 leading-22  md:text-14 md:leading-18 font-normal text-[#121212] text-center"><?php the_sub_field('tekst');?></p>
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
</div>
<?php endif; ?>