<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>

    <!-- QUOTE -->
    <div class="container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="max-w-[888px] mx-auto flex flex-col md:flex-row items-start">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-[63px] md:w-[150px] aspect-square object-cover rounded-[8px] md:rounded-[16px] overflow-hidden mr-[25px] mb-[15px] md:mb-0">
            <div class="border-[#101357] border-t-[1px] md:border-t-0 md:border-l-[3px] md:pl-[25px] pt-[15px] md:pt-0">
                <p class="text-14 leading-20 md:text-16 md:leading-22 text-[#121212]"><?php the_field('quote');?></p>
                <h3 class="pt-1 text-14 leading-20 md:text-16 md:leading-22 text-[#121212] font-bold">- <?php the_field('naam');?></h3>
            </div>
        </div>
    </div>
<?php endif; ?>