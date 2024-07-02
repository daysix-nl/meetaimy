<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>

<!-- HEADER 3 -->
<section>
    <div class="h-[calc(100vh-192px)] min-h-[203px] max-h-[203px] md:min-h-[400px] md:max-h-[600px] relative">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-[calc(100vh-192px)] min-h-[203px] max-h-[203px] md:min-h-[400px] md:max-h-[600px] w-full object-cover">
        <div class="absolute bottom-0 left-0 right-0">
            
            <svg width="100%" height="auto" viewBox="0 0 1440 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="">
                <defs>
                    <rect id="path-_rasv-smb7-1" x="0" y="0" width="1440" height="166"></rect>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rectangle-2">
                        <mask id="mask-_rasv-smb7-2" fill="white">
                            <use xlink:href="#path-_rasv-smb7-1"></use>
                        </mask>
                        <g id="Rectangle"></g>
                        <g id="Group" mask="url(#mask-_rasv-smb7-2)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(-0, 0)" id="Path">
                                <path d="M347.98,129.5524 C200.981,176.2104 54.7438,157.5984 0,142.4604 L0,224.6844 L1440,224.6844 L1440,105.1724 C1440,105.1724 1294.33,144.3724 1205.32,129.5524 C1071.55,107.2844 955.874,28.6844004 777.362,28.6844004 C598.85,28.6844004 531.729,71.2307004 347.98,129.5524 Z"></path>
                                <path d="M360.288,148.1554 C218.926,209.8204 71.5468,206.4884 15.5273,197.1154 L24.0627,278.8954 L1456.28,129.4144 L1443.88,10.5479004 C1443.88,10.5479004 1303.07,64.6572004 1212.99,59.1584004 C1077.64,50.8956004 954.427,-15.2713996 776.879,3.2592404 C599.331,21.7899004 536.99,71.0740004 360.288,148.1554 Z" fill-opacity="0.3"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <p class="max-w-[343px] md:max-w-[660px] mx-auto text-center text-[#8789AB] font-bold text-14 leading-20 md:text-16 md:leading-22"><?php the_field('subtitel');?></p>
        <h1 class="text-40 leading-48 md:text-54 md:leading-62 xl:text-64 xl:leading-72 font-bold text-[#101357] text-center max-w-[343px] md:max-w-[unset] mx-auto pt-[16px]"><?php the_field('titel');?></h1>
    </div>
</section>
<?php endif; ?>