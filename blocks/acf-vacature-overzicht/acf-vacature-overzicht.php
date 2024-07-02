<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

    <!-- VACATURE OVERZICHT -->
    <div class="container">
        <div class="grid max-w-[888px] mx-auto gap-[25px]">
                <?php
                $args = array(
                    'post_type' => 'vacature', // Specificeer het post type
                    'posts_per_page' => -1, // Toon slechts één post
                    'order' => 'DESC',    // Toon de nieuwste post
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); 
                    $post_id = get_the_ID();?>
                    <div class="col-span-1 boxshadow bg-white w-full overflow-hidden ">
                        <div class="p-[25px] flex items-center justify-between">
                            <a href="<?php the_permalink();?>" class="">
                                <h2 class="text-16 leading-22 md:text-22 md:leading-30 font-bold text-[#101357]"><?php the_title();?></h2>
                                <p class="text-16 leading-22 md:text-16 md:leading-22 font-bold text-[#8789AB] max-w-[634px] line-clamp-1"><?php the_field('tekst', $post_id);?></p>
                            </a>
                            <a id="#" class="text-14 leading-18 text-[#8789AB] font-bold h-5 rounded-full border-2 border-[#8789AB] hover:bg-[#8789AB] hover:text-white duration-300 px-3 hidden md:flex justify-center items-center w-fit min-w-[151px]" href="<?php the_permalink();?>">Lees meer</a>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_postdata(); // Reset de query
                else :
                    // Geen berichten gevonden
                endif;
                ?>
                <?php endif; ?>
        </div>
    </div>
