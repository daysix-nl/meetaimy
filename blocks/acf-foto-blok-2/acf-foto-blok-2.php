<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<?php
$image1 = get_field('afbeelding_1');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$image2 = get_field('afbeelding_2');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>

<?php
$image3 = get_field('afbeelding_3');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>

<?php
$image4 = get_field('afbeelding_4');
$image4_url = isset($image4['url']) ? esc_url($image4['url']) : '';
$image4_alt = isset($image4['alt']) ? esc_attr($image4['alt']) : '';
?>

<!-- FOTO BLOK 2 -->
<section class="hidden md:block <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
        <div class="grid gap-[25px]">
            <div class="flex space-x-[25px]">
                <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="h-[275px] md:h-[668px] w-full object-cover object-left rounded-[16px] overflow-hidden">
                <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="h-[668px] max-w-[318px] w-full object-cover rounded-[16px] hidden md:block">
            </div>
            <div class="flex space-x-[25px]">
                <img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>" class="h-[275px] md:h-[668px] w-full object-cover object-left rounded-[16px] overflow-hidden">
                <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-[668px] max-w-[546px] w-full object-cover rounded-[16px] hidden md:block">
            </div>
        </div>
    </div>
</section>

<section class="md:hidden  overflow-hidden <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
        <div class="swiper mySwiper-case visible overflow-visible">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-auto">
                    <img class="h-[292px] w-auto object-cover rounded-[6.994px]" src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>">
                </div>
                <div class="swiper-slide w-auto">
                    <img class="h-[292px] w-auto object-cover rounded-[6.994px]" src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>">
                </div>
                <div class="swiper-slide w-auto">
                    <img class="h-[292px] w-auto object-cover rounded-[6.994px]" src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>">
                </div>
                <div class="swiper-slide w-auto">
                    <img class="h-[292px] w-auto object-cover rounded-[6.994px]" src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>