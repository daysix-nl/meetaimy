<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
<?php
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- SLIDER FUNCTIONALITEITEN -->
<div class="md:container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            if( have_rows('testimonials_repeater') ):
                while( have_rows('testimonials_repeater') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('afbeelding');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                    <div class="swiper-slide h-auto pb-5 pt-4 px-1">
                        <img class="w-8 h-8 object-cover rounded-xl mx-auto mb-[-40px]" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                        <div class="pt-4 px-2 card-cases flex flex-col h-full">
                            <p class="mt-2 text-16 leading-22  md:text-14 md:leading-18 font-normal text-[#121212] pb-2 md:pb-0"><?php the_sub_field('tekst');?></p>
                            <p class="mt-2 text-14 leading-18 font-bold text-[#101357]">- <?php the_sub_field('naam');?></p>
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
    <?php if (get_field('button')): ?>   
    <a id="#" class=" text-14 leading-18 font-bold text-[#00A0A0] mt-4 underline block text-center" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
    <?php endif; ?>
</div>
<?php endif; ?>