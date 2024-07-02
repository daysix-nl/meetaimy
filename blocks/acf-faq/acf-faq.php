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

    <!-- FAQ -->
    <div id="faq" class="<?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <?php if (get_field('titel')): ?>   
        <div class="container mb-[24px]">
            <h3 class="text-[#101357] text-22 leading-28 md:text-40 md:leading-48 font-bold"><?php the_field('titel');?></h3>
        </div>
        <?php endif; ?>
        <div class="container grid grid-cols-1 md:grid-cols-2 md:gap-[24px]">
            <div class="col-span-1">
                <?php
                if( have_rows('kolom_1_repeater') ):
                    while( have_rows('kolom_1_repeater') ) : the_row(); ?>
                    <div class="accordion-item prijzen border-[#8789ab] border-t-[1px]"> 
                        <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]"><?php the_sub_field('vraag');?></button>
                        <div class="panel p-0">
                            <div class="text-16 leading-22 pb-[24px] text-editor"><?php the_sub_field('antwoord');?></div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
            <div class="col-span-1">
                <?php
                if( have_rows('kolom_2_repeater') ):
                    while( have_rows('kolom_2_repeater') ) : the_row(); ?>
                    <div class="accordion-item prijzen border-[#8789ab] border-t-[1px]"> 
                        <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]"><?php the_sub_field('vraag');?></button>
                        <div class="panel p-0">
                            <div class="text-16 leading-22 pb-[24px] text-editor"><?php the_sub_field('antwoord');?></div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
        <?php if (get_field('button')): ?>   
        <div class="container mt-[24px] flex justify-end">
            <a class="text-16 leading-26 underline font-medium text-right text-[#8789AB] text-opacity-[0.5]" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
        </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
