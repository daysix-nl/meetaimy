<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<!-- HEADER 2 -->
    <div class="container pt-6 md:pt-8 pb-6 md:pb-8">
        <h1 class="text-40 leading-48 md:text-54 md:leading-62 xl:text-64 xl:leading-72 font-bold text-[#101357] text-center max-w-[343px] md:max-w-[unset] mx-auto"><?php the_field('titel');?></h1>
        <?php if (get_field('tekst')): ?>   
        <p class="max-w-[343px] md:max-w-[660px] mx-auto text-center text-[#8789AB] font-bold pt-[16px] text-14 leading-20 md:text-16 md:leading-22"><?php the_field('tekst');?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>