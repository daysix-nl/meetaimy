<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>


<!-- SLIDER FUNCTIONALITEITEN -->
<div class="hidden md:block <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-2 gap-5 items-center">
        <div class="col-span-1 relative flex items-center">

            <div class="swiper-container overflow-hidden mb-4">
                <div class="swiper-wrapper">
                    <?php
                    if( have_rows('slider_functionaliteiten_repeater') ):
                        while( have_rows('slider_functionaliteiten_repeater') ) : the_row(); ?>
                            <?php
                            $image = get_sub_field('afbeelding');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            ?>
                            <div class="swiper-slide relative sm:px-5 flex items-center justify-center w-full h-auto">
                                <img class="h-auto max-h-[540px]" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                            </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
            <div class="pagination_container h-5 pt-4">
                <div class="swiper-pagination_simple"></div>
                <div class="swiper-pagination2"></div>
            </div>
        </div>
        <div class="col-span-1 max-w-[546px]">
            <p class="text-22 leading-30 font-bold text-[#8789AB]"><?php the_field('subtitel');?></p>
            <h3 class="text-[#101357] text-24 leading-32 md:text-40 md:leading-48 font-bold mb-3"><?php the_field('titel');?></h3>
                    <?php
                    if( have_rows('slider_functionaliteiten_repeater') ):
                        while( have_rows('slider_functionaliteiten_repeater') ) : the_row(); ?>
                            <?php
                            $image = get_sub_field('afbeelding');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            ?>
                            <?php
                            $link = get_sub_field('button');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>


                             <div class="flex flex-row items-center mb-4 last-of-type:mb-0 animation-fade-in usp-item">
                                <div class="block">
                                    <div class="rounded-full w-[80px] h-[80px] bg-[#ebf8f8] flex items-center justify-center">
                                        <img src="/wp-content/themes/meetaimy/img/icons-acf/<?php the_sub_field('icoon');?>.svg" alt="Icoon <?php the_sub_field('titel');?>" class="w-[60px] h-[60px]">
                                    </div>
                                </div>
                                <div class="grid gap-1 ml-2">
                                    <p class="text-[#101357] text-16 leading-22 font-bold"><?php the_sub_field('titel');?></p>
                                    <p class="text-[#121212] text-16 leading-22"><?php the_sub_field('tekst');?></p>
                                    <a id="#" class=" text-14 leading-18 text-[#00A0A0] underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                    <?php if (get_field('afbreking')): ?>   
                    <div class="flex flex-row items-center mb-4 last-of-type:mb-0 animation-fade-in">
                        <span class="block w-full max-w-[80px]"></span>
                        <div class="grid gap-1 ml-2">
                            <p class="text-[#8789AB] text-16 leading-22 font-bold"><?php the_field('afbreking');?></p>
                        </div>
                    </div>
                    <?php endif; ?>  
        </div>
    </div>
</div>

<!-- MOBILE -->
<div class="md:hidden container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="">
        <h3 class="text-[#121212] text-24 leading-32 md:text-40 md:leading-48 font-bold text-center"><?php the_field('titel');?></h3>
        <p class="text-16 leading-24 font-bold text-[#8789AB] text-center mb-3"><?php the_field('subtitel');?></p>
    </div>
    <div class="swiper-mobile relative overflow-hidden overflow-y-visible">
        <div class="swiper-wrapper">
      
        <!-- SLIDER -->
                    <?php
                    if( have_rows('slider_functionaliteiten_repeater') ):
                        while( have_rows('slider_functionaliteiten_repeater') ) : the_row(); ?>
                            <?php
                            $image = get_sub_field('afbeelding');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            ?>
                            <?php
                            $link = get_sub_field('button');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>

                            <div class="swiper-slide relative">
                                <h3 class="text-black text-16 leading-22 font-bold text-center"><?php the_sub_field('titel');?></h3>
                                <p class="text-black text-16 leading-22 text-center mt-1 mb-2"><?php the_sub_field('tekst');?></p>
                                <div class="relative flex justify-center">
                                    <!-- <div class="absolute top-0 left-5 rounded-full w-[130px] h-[130px] mx-auto bg-[#ebf8f8] flex items-center justify-center">
                                        <img src="/wp-content/themes/meetaimy/img/icons-acf/<?php the_sub_field('icoon');?>.svg" alt="Icoon <?php the_sub_field('titel');?>" class="w-[90px] h-[90px]">
                                    </div> -->
                                    <img class="h-full max-h-[440px] pb-5" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                                </div>
                            </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                  


     
        </div>
        
    </div>
    <div class="relative w-full">
        <div class="absolute flex justify-between w-full">
            <div class="swiper-button-prev w-[25px] after:content-[''] flex flex-col items-start h-fit"> 
                <?php include get_template_directory() . '/img/icons/arrow-swiper-left.php'; ?>
                <p class="pushHtml-prev mt-1 text-14 leading-18 font-bold text-[#AEAEAE] text-start"></p>
            </div>
            <div class="swiper-button-next after:content-[''] w-[25px] flex flex-col items-end h-fit"> <?php include get_template_directory() . '/img/icons/arrow-swiper-right.php'; ?>
                <p class="pushHtml-next mt-1 text-14 leading-18 font-bold text-[#AEAEAE] text-end"></p>
            </div>
        </div>
    </div>
   
</div>
<?php endif; ?>