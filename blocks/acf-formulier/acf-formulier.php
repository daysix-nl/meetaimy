<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
<?php
$formid = get_field('formulier_id'); ?>

    <!-- FORMULIER -->
 <div class="container <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="max-w-[546px] mx-auto">
            <div class="boxshadowsmall md:p-[25px] rounded-[8px] contact">
                <?php if (get_field('titel')): ?>   
                <h2 class="text-16 leading-22 md:text-22 md:leading-30 font-bold text-[#101357] text-center pb-[15px]"><?php the_field('titel');?></h2>
                <?php endif; ?>
                <?php echo do_shortcode( '[gravityform id="' . esc_attr($formid) . '"]' ); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ($formid === "3"): ?>
    <script>
        try {
        document.body.addEventListener(
            "click",
            () => {
            const input = document.querySelectorAll(".gfb-selected-capacity");
            if (input) {
                input.forEach((element) => {
                element.value = 1;
                element.setAttribute("style", "display:none !important");
                });
            }
            },
            true
        );
        } catch (error) {}
    </script>
<?php endif; ?>