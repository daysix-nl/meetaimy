<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- TEAM -->
    <div class="container z-[2] relative <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-[16px] md:gap-[25px]">
            <?php
            if( have_rows('team_repeater') ):
                while( have_rows('team_repeater') ) : the_row(); ?>
                <?php
                $image = get_sub_field('afbeelding');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>
                <div class="col-span-1">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="aspect-square md:aspect-[3/2] object-cover overflow-hidden rounded-[16px]">
                    <h3 class="pt-1 text-16 leading-22 md:text-22 md:leading-30 font-bold text-[#101357] text-center"><?php the_sub_field('naam');?></h3>
                    <p class="text-center text-14 leading-18 md:text-16 md:leading-22 text-[#8789AB] uppercase"><?php the_sub_field('functie');?></p>
                </div>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
<?php endif; ?>