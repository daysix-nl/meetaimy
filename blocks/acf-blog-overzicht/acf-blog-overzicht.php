<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<!-- BLOG OVERZICHT -->
<div class="<?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
        <div class="max-w-[884px] mx-auto">
            <?php
            $args = array(
                'post_type' => 'blog', // Specificeer het post type
                'posts_per_page' => 1, // Toon slechts één post
                'order' => 'DESC',    // Toon de nieuwste post
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                $image_id = get_post_thumbnail_id();
                $image_data = wp_get_attachment_image_src( $image_id, 'full' );
                $image_url = $image_data[0] ?? '';
                $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ?? '';
                $post_id = get_the_ID();
                ?>
                    <div class="boxshadow bg-white w-full overflow-hidden">
                        <?php if (get_field('teaser_video', $post_id)): ?>   
                            <div class="relative">
                                <video id="desktop-video" playsinline controls loop preload="auto" class="h-[200px] md:h-[400px] w-full object-cover">
                                <source src="<?php the_field('teaser_video', $post_id);?>" type="video/mp4" />
                            </video>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-[200px] md:h-[400px] w-full object-cover">
                        <?php endif; ?>
                        <div class="p-[25px]">
                            <h2 class="text-16 leading-22 md:text-22 md:leading-30 font-bold text-[#101357]"><?php the_title();?></h2>
                            <div class="flex flex-col md:flex-row md:items-end md:justify-between pt-1">
                                <p class="text-16 leading-22 md:text-16 md:leading-22 font-normal text-[#121212] line-clamp-3 max-w-[634px] mb-2 md:pb-[unset]"><?php the_field('teaser_tekst', $post_id);?></p>
                                <a id="#" class="text-14 leading-18 text-[#8789AB] font-bold h-5 rounded-full border-2 border-[#8789AB] hover:bg-[#8789AB] hover:text-white duration-300 px-3 flex justify-center items-center w-fit min-w-[151px]" href="<?php the_permalink();?>">Lees meer</a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata(); // Reset de query
            else :
                // Geen berichten gevonden
            endif;
            ?>
        </div>
    </div>
    <div class="container pb-6 md:pb-8">
        <div class="max-w-[884px] mx-auto">
            <?php
            $args = array(
                'post_type' => 'blog', // Specificeer het post type
                'posts_per_page' => -1, // Toon slechts één post
                'order' => 'DESC',    // Toon de nieuwste post
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                            $image_id = get_post_thumbnail_id();
                            $image_data = wp_get_attachment_image_src( $image_id, 'full' );
                            $image_url = $image_data[0] ?? '';
                            $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ?? '';
                            $post_id = get_the_ID();
                            ?>
                        <div class="boxshadow bg-white w-full overflow-hidden flex flex-col md:flex-row mt-[25px] first-of-type:hidden">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-[160px] md:h-[226px] md:w-[318px] w-full object-cover overflow-hidden">
                            <div class="p-[25px]">
                                <h2 class="text-16 leading-22 md:text-22 md:leading-30 font-bold text-[#101357]"><?php the_title();?></h2>
                                <div class="pt-1">
                                    <p class="text-16 leading-22 md:text-16 md:leading-22 font-normal text-[#121212] line-clamp-3 max-w-[634px] mb-2"><?php the_field('teaser_tekst', $post_id);?></p>
                                    <a id="#" class="text-14 leading-18 text-[#8789AB] font-bold h-5 rounded-full border-2 border-[#8789AB] hover:bg-[#8789AB] hover:text-white duration-300 px-3 flex justify-center items-center w-fit min-w-[151px]" href="<?php the_permalink();?>">Lees meer</a>
                                </div>
                            </div>
                        </div>
                    <?php
                endwhile;
                wp_reset_postdata(); // Reset de query
            else :
                // Geen berichten gevonden
            endif;
            ?>
        </div>
    </div>
</div>
</main>
<?php endif; ?>