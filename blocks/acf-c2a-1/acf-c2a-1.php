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

<!-- CALL TO ACTION 1 -->
<div class="<?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
<div class="bg-white md:bg-[unset] relative ">
    <!-- mt-[90px] md:mt-[130px]  -->
        <div class="md:hidden">
            <svg width="100%" height="auto" viewBox="0 0 375 66" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <rect id="path-zb-qx6wzhs-1" x="0" y="0" width="375" height="66"></rect>
                    <linearGradient x1="50%" y1="2.86765%" x2="50%" y2="80.7354178%" id="linearGradient-zb-qx6wzhs-3">
                        <stop stop-color="#E7E7EE" stop-opacity="0.65" offset="41.6463%"></stop>
                        <stop stop-color="#D9D9D9" stop-opacity="0" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rectangle-3">
                        <mask id="mask-zb-qx6wzhs-2" fill="white">
                            <use xlink:href="#path-zb-qx6wzhs-1"></use>
                        </mask>
                        <g id="Rectangle"></g>
                        <g id="Group" mask="url(#mask-zb-qx6wzhs-2)" fill="url(#linearGradient-zb-qx6wzhs-3)" fill-rule="nonzero">
                            <path d="M167.866,48.6589305 C96.9535,71.1665305 26.4085,62.1881305 0,54.8854305 L0,328.032031 L375,328.032031 L375,9.71626073e-15 C288.885,9.71626073e-15 256.506,20.5244305 167.866,48.6589305 Z" id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    <div class="bg-[#efeff3] md:bg-transparent pt-6 md:pt-[unset]">
        <div class="overflow-hidden relative">
            <div class="container flex justify-between items-center relative overflow-hidden">
                <div class="h-full flex flex-col justify-center pb-5 z-[2] mx-auto">
                    <h3 class="text-[#101357] text-24 leading-32 md:text-40 md:leading-48 font-bold text-center md:text-start max-w-[340px] md:max-w-[450px] mx-auto md:mx-[unset]"><?php the_field('titel');?></h3>
                    <?php if (get_field('subtitel')): ?>   
                    <p class="text-22 leading-30 opacity-60 font-bold text-[#101357] my-[8px] text-center md:text-left"><?php the_field('subtitel');?></p>
                    <?php endif; ?>
                    <?php if (get_field('tekst')): ?>  
                    <p class="text-16 leading-22 my-2 text-center md:text-start text-[#121212] max-w-[450px] xl:max-w-[550px] mx-auto md:mx-[unset]"><?php the_field('tekst');?></p>
                    <?php endif; ?>
                    <?php if (get_field('button')): ?>  
                    <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full mt-2 bg-green px-3 flex hover-remove justify-center items-center button-green w-fit animation-hero mx-auto md:mr-auto md:ml-[unset]" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php endif; ?>
                </div>
                <div class="hidden md:block relative rounded-t-3xl overflow-hidden h-[546px] w-[546px]">
                    <img class="w-full h-full object-cover rounded-t-3xl min-h-[550px] pb-[1px] md:pb-0 inner-img" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 hidden md:block">
            <svg width="100%" height="auto" viewBox="0 0 1404 133" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rectangle-2" fill-rule="nonzero">
                        <g id="Group" transform="translate(0, 0)" fill="#FFFFFF" fill-opacity="0.4">
                            <path d="M1063.498,69.3269742 C1209.834,103.927774 1350.65,75.1252742 1402.766,56.3991742 L1408.786,136.341774 L8.75,241.768774 L0,125.573774 C0,125.573774 144.494,153.020774 229.956,132.095774 C358.376,100.651774 465.09,15.7641742 638.648,2.6946442 C812.2063,-10.3749258 880.579,26.0764742 1063.498,69.3269742 Z" id="Path"></path>
                        </g>
                        <g id="Group" transform="translate(0, 0)" fill="#EFEFF4">
                            <path d="M1064.719,98.346606 C1208.043,143.838006 1350.625,125.691006 1404,110.931006 L1404,191.100006 L0,191.100006 L0,74.575606 C0,74.575606 142.025,112.796006 228.817,98.346606 C359.236,76.634806 472.023,0 646.072,0 C820.1217,0 885.564,41.482706 1064.719,98.346606 Z" id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        </div>
</div>
</div>
<div class="section-stop-img"></div>
<?php endif; ?>