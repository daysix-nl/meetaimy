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
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>

<!-- CALL TO ACTION 3 -->
<div class="<?php the_field('padding_top');?> <?php the_field('padding_bottom');?> overflow-hidden">
 <div class="bg-[#E7E7EE] py-[24px] md:py-[65px] relative">
        <div class="container z-[2] relative grid grid-cols-1 md:grid-cols-2 gap-[24px] items-center">
            <div class="col-span-1 max-w-[660px] flex flex-col order-last md:order-first">
                <h3 class="text-40 leading-48 font-bold text-[#101357] text-center md:text-left"><?php the_field('titel');?></h3>
                <?php if (get_field('subtitel')): ?>   
                <p class="text-22 leading-30 opacity-60 font-bold text-[#101357] my-[8px] text-center md:text-left"><?php the_field('subtitel');?></p>
                <?php endif; ?>
                <?php if (get_field('tekst')): ?>  
                <p class="text-16 leading-22 opacity-[0.7] font-normal text-[#101357] text-center md:text-left"><?php the_field('tekst');?></p>
                <?php endif; ?>
                <?php if (get_field('button')): ?>  
                <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-3 flex hover-remove justify-center items-center button-green w-fit animation-hero md:min-w-[220px] mt-[16px] md:mt-[24px] mx-auto md:mx-[unset]" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php endif; ?>
            </div>
            <div class="col-span-1">
                <img class="object-cover w-full h-[372px] rounded-2xl" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
            </div>

        </div>
        <div class="absolute bottom-0 left-0 right-[-228px] md:right-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 152" fill="none">
                <path opacity="0.3" d="M1092.02 70.9814C1239.02 103.814 1385.26 90.7171 1440 80.0643V152H0V53.8248C0 53.8248 145.666 81.4099 234.684 70.9814C368.447 55.311 484.126 0 662.638 0C841.15 0 908.271 29.94 1092.02 70.9814Z" fill="url(#paint0_linear_425_831)"/>
                <defs>
                <linearGradient id="paint0_linear_425_831" x1="139.5" y1="309.501" x2="2137" y2="-456.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E7E7EE"/>
                <stop offset="1" stop-color="#8789AB" stop-opacity="0.06"/>
                </linearGradient>
                </defs>
            </svg>
        </div>
 </div>
</div>
<?php endif; ?>