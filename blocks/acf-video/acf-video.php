<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<!-- VIDEO -->
<div class="md:container md:w-full md:max-w-[885px] mx-auto video-w <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <!-- DESKTOP -->
        <div class="hidden xl:block relative">
            <video id="desktop-video" playsinline controls loop preload="auto" class="hidden xl:block w-full md:rounded-3xl">
                <source src="<?php the_field('video_desktop');?>#t=0.001" type="video/mp4" />
            </video>
        </div>

        <!-- MOBILE -->
        <div class="block xl:hidden relative">
            <video id="mobile-video" playsinline controls loop preload="auto" class=" w-full md:rounded-3xl">
                <source src="<?php the_field('video_mobiel');?>#t=0.001" type="video/mp4" />
            </video>
</div>
</div>
		

<?php endif; ?>