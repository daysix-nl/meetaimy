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

<!-- CALL TO ACTION 2 -->
<div class="<?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
<div class="bg-[#E7E7EE] relative overflow-hidden">
    <div class="container py-6 z-[2] relative">
        <div class="max-w-[303px] md:max-w-[1074px] mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <h2 class="text-22 leading-28 md:text-40 md:leading-48 text-[#101357] font-bold text-center md:text-left max-w-[774px] pb-3 md:pb-0"><?php the_field('titel');?></h2>
                <?php if (get_field('button')): ?>   
                <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-3 flex hover-remove justify-center items-center button-green w-fit animation-hero md:min-w-[220px]" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- SWOOSH -->
    <div class="absolute left-0 right-0 bottom-0 z-[1]">
        <svg width="100%" height="auto" viewBox="0 0 373 114" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="md:hidden">
            <defs>
                <rect id="path-4e887e0yh9-1" x="0" y="0" width="373" height="114"></rect>
                <linearGradient x1="9.68752319%" y1="51.7179696%" x2="148.46846%" y2="46.1003341%" id="linearGradient-4e887e0yh9-3">
                    <stop stop-color="#E7E7EE" offset="0%"></stop>
                    <stop stop-color="#8789AB" stop-opacity="0.06" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Rectangle-2">
                    <mask id="mask-4e887e0yh9-2" fill="white">
                        <use xlink:href="#path-4e887e0yh9-1"></use>
                    </mask>
                    <g id="Rectangle"></g>
                    <g id="Group" mask="url(#mask-4e887e0yh9-2)" fill="url(#linearGradient-4e887e0yh9-3)" fill-rule="nonzero" opacity="0.3">
                        <g transform="translate(-151, 0)" id="Path">
                            <path d="M817.498,53.236 C927.543,77.8609 1037.018,68.0379 1078,60.0482 L1078,114 L0,114 L0,40.3686 C0,40.3686 109.0473,61.0575 175.6873,53.236 C275.824,41.4832 362.422,0 496.058,0 C629.695,0 679.942,22.455 817.498,53.236 Z"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
        <svg width="100%" height="auto" viewBox="0 0 1440 152" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden md:block">
            <path opacity="0.3" d="M1092.02 70.9814C1239.02 103.814 1385.26 90.7171 1440 80.0643V152H0V53.8248C0 53.8248 145.666 81.4099 234.684 70.9814C368.447 55.311 484.126 0 662.638 0C841.15 0 908.271 29.94 1092.02 70.9814Z" fill="url(#paint0_linear_349_1164)"/>
            <defs>
            <linearGradient id="paint0_linear_349_1164" x1="139.5" y1="309.501" x2="2137" y2="-456.5" gradientUnits="userSpaceOnUse">
            <stop stop-color="#E7E7EE"/>
            <stop offset="1" stop-color="#8789AB" stop-opacity="0.06"/>
            </linearGradient>
            </defs>
        </svg>
    </div>
</div>
</div>

<?php endif; ?>