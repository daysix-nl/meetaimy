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
$link2 = get_field('button2');
$link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
$link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
$link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>

<!-- HEADER 1 -->
<section class="overflow-hidden bg-white md:h-[calc(100vh_-_80px)] relative min-h-[520px] max-h-[750px]">
    <div class="md:w-[55vw] overflow-hidden relative  md:absolute top-0 right-0 -z-1 h-[270px] w-full md:h-full">
        <img class="object-cover md:w-[55vw] w-full h-full md:absolute top-0 pb-[17px] md:pb-0 right-0 -z-1 inner-hero" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        <div class="absolute md:hidden bottom-0 right-0 w-full">
            <?php include get_template_directory() . '/img/icons/background-hero-mobile.php'; ?>
        </div>
        <div class="absolute w-full bottom-0  right-0  hidden md:block">
            <?php include get_template_directory() . '/img/icons/overlay-hero.php'; ?>
        </div>
    </div>
    <!-- DESKTOP -->
    <div class="container grid-cols-5 h-full items-end md:items-center hidden md:grid relative">
        <div class="col-span-5 md:col-span-2 md:bg-white h-full flex relative z-[5]">
            <div class=" mt-auto md:my-auto w-full pr-3">
                <h1 class="md:text-54 md:leading-62 xl:text-64 xl:leading-72 font-bold text-[#101357] animation-hero"><?php the_field('titel');?></h1>
                <?php if (get_field('subtitel')): ?>   
                <p class="text-22 leading-30 opacity-60 font-bold text-[#101357] my-[8px] text-center md:text-left"><?php the_field('subtitel');?></p>
                <?php endif; ?>
                <?php if (get_field('tekst')): ?>   
                <p class="text-16 leading-22 mt-2 mb-4 animation-hero text-[#121212] font-normal"><?php the_field('tekst');?></p>
                <?php endif; ?>
                <div class="flex space-x-2">
                    <?php if (get_field('button')): ?>   
                    <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green button-green px-[32px] flex hover-remove justify-center items-center w-fit animation-hero" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php endif; ?>
                    <?php if (get_field('button2')): ?>   
                    <a id="#" class="text-14 leading-18 text-[#00A0A0] font-bold h-5 rounded-full  px-[32px] flex justify-center items-center w-fit" href="<?php echo $link2_url; ?>" target="<?php echo $link2_target; ?>"><?php echo $link2_text; ?> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="5.25" height="9.001" viewBox="0 0 5.25 9.001" class="ml-[8px]">
                            <path id="angle-right-solid_1_" data-name="angle-right-solid (1)" d="M68.955,67.9a.751.751,0,0,1,0,1.061l-3.749,3.749a.751.751,0,0,1-1.061-1.061l3.219-3.219-3.217-3.219a.751.751,0,0,1,1.061-1.061l3.749,3.749Z" transform="translate(-63.925 -63.925)" fill="#00a0a0"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- MOBILE -->
    <div class="container mt-2 relative z-10 md:hidden ">
        <div class="mt-auto md:my-auto w-full">
            <h1 class="text-40 leading-48 font-bold text-[#101357] text-center max-w-[350px] mx-auto"><?php the_field('titel');?></h1>
            <?php if (get_field('subtitel')): ?>   
            <p class="text-22 leading-30 opacity-60 font-bold text-[#101357] my-[8px] text-center md:text-left"><?php the_field('subtitel');?></p>
            <?php endif; ?>
            <?php if (get_field('tekst')): ?>   
            <p class="text-16 leading-22 mt-2 mb-3 text-center text-[#121212]"><?php the_field('tekst');?></p>
            <?php endif; ?>
            <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-fit mx-auto" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
        </div>
    </div>
</section>
<section class="section-hero"></section>
<?php endif; ?>