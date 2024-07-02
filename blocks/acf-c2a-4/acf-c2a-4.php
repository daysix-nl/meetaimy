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

<!-- CALL TO ACTION 4 -->
<div class="relative overflow-hidden <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="absolute bottom-0 right-0 left-0 w-full h-auto -z-0 hidden md:block">
        <?php include get_template_directory() . '/img/icons/background-svg.php'; ?>
    </div>
    <div class="absolute bottom-0 right-0 left-0 w-full h-auto -z-0 md:hidden">
        <?php include get_template_directory() . '/img/icons/footer-overlay.php'; ?>
    </div>
    <div class="container grid grid-cols-5 gap-5 relative">
        <div class="col-span-5 md:col-span-3 h-full flex flex-col justify-center md:pb-5 md:pr-5">
            <h3 class="text-[#101357] text-24 leading-32 md:text-40 md:leading-48 font-bold md:pr-10 text-center md:text-start"><?php the_field('titel');?></h3>
            <?php if (get_field('subtitel')): ?>   
            <p class="text-22 leading-30 opacity-60 font-bold text-[#101357] my-[8px] text-center md:text-left"><?php the_field('subtitel');?></p>
            <?php endif; ?>
            <?php if (get_field('tekst')): ?>   
            <p class="text-16 leading-22 my-2 text-center md:text-start text-[#121212]"><?php the_field('tekst');?></p>
             <?php endif; ?>
             <?php if (get_field('button')): ?>  
            <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full mt-2 bg-green px-3 flex hover-remove justify-center items-center button-green w-fit animation-hero mx-auto md:mr-auto md:ml-[unset]" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
            <?php endif; ?>
        </div>
        <div class="col-span-5 md:col-span-2  md:pl-5">
            <img class="w-full h-auto px-5 md:px-0" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        </div>
    </div>
</div>

<?php endif; ?>