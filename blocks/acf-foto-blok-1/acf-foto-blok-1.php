<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<?php
$image = get_field('afbeelding_1');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$image2 = get_field('afbeelding_2');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>

<!-- FOTO BLOK 1 -->

    <div class="container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="flex space-x-[25px]">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-[275px] md:h-[460px] w-full object-cover object-left rounded-[16px] overflow-hidden">
            <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="h-[460px] max-w-[318px] w-full object-cover rounded-[16px] hidden md:block">
        </div>
    </div>

<?php endif; ?>