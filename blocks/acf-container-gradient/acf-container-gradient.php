<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<!-- CONTAINER GRADIENT -->
<section class="bg-gradient-to-b from-<?php the_field('achtergrond_kleur_begin');?> to-<?php the_field('achtergrond_kleur_eind');?> min-h-[200px] relative">
   <?php $allowed_blocks_text = ['acf/acf-case-overzicht', 'acf/acf-blog-overzicht', 'acf/acf-vacature-overzicht', 'acf/acf-quote', 'acf/acf-counter', 'acf/acf-c2a-1', 'acf/acf-c2a-2', 'acf/acf-c2a-3', 'acf/acf-c2a-4', 'acf/acf-cards-1', 'acf/acf-cards-2', 'acf/acf-contact', 'acf/acf-faq', 'acf/acf-formulier', 'acf/acf-foto-blok-1', 'acf/acf-foto-blok-2', 'acf/acf-header-1', 'acf/acf-header-2', 'acf/acf-header-3', 'acf/acf-klanten-logos', 'acf/acf-mockup', 'acf/acf-prijzen', 'acf/acf-slider-functionaliteiten', 'acf/acf-slider-testimonials', 'acf/acf-subtitel', 'acf/acf-swoosh-1', 'acf/acf-swoosh-2', 'acf/acf-swoosh-3', 'acf/acf-team', 'acf/acf-video', 'acf/acf-wysiwyg-editor',]; ?> <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_text ) ); ?>" />
</section>
<?php endif; ?>