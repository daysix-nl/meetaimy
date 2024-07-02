<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<?php
$image1 = get_field('logo_1', 'option');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$image2 = get_field('logo_2', 'option');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>
<?php
$image3 = get_field('logo_3', 'option');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>
<?php
$image4 = get_field('logo_4', 'option');
$image4_url = isset($image4['url']) ? esc_url($image4['url']) : '';
$image4_alt = isset($image4['alt']) ? esc_attr($image4['alt']) : '';
?>
<?php
$image5 = get_field('logo_5', 'option');
$image5_url = isset($image5['url']) ? esc_url($image5['url']) : '';
$image5_alt = isset($image5['alt']) ? esc_attr($image5['alt']) : '';
?>
<?php
$image6 = get_field('logo_6', 'option');
$image6_url = isset($image6['url']) ? esc_url($image6['url']) : '';
$image6_alt = isset($image6['alt']) ? esc_attr($image6['alt']) : '';
?>


<!-- KLANTEN LOGO'S -->
<div class="container grid grid-cols-6 gap-5 <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">

            <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image5_url; ?>" alt="<?php echo $image5_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image6_url; ?>" alt="<?php echo $image6_alt; ?>">
            </div>

</div>
<?php endif; ?>