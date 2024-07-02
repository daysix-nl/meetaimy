<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

    <!-- WYSIWYG EDITOR -->
    <div class="container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="max-w-[888px] mx-auto text-14 leading-20 md:text-16 md:leading-22 text-[#121212] text-editor"><?php the_field('tekst');?></div>
    </div>
<?php endif; ?>