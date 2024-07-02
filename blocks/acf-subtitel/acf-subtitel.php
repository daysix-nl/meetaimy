<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<!-- SUBTITEL -->
<div class="container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <h2 class="text-22 leading-28 md:text-40 md:leading-48 font-bold text-[#101357] text-center max-w-[343px] md:max-w-[unset] mx-auto"><?php the_field('titel');?></h2>
    <?php if (get_field('tekst')): ?>   
    <p class="max-w-[343px] md:max-w-[660px] mx-auto text-center text-[#121212] pt-1 text-14 leading-18 md:text-14 md:leading-20"><?php the_field('tekst');?></p>
    <?php endif; ?>
</div>
<?php endif; ?>