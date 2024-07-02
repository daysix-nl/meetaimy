<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer class="py-6 md:py-8">
    <div class="px-2 md:px-4 xl:container grid grid-cols-4 gap-3 mx-auto">
        <div class="col-span-4 md:col-span-2 xl:col-span-1 gap-1 h-fit hidden md:grid">
            <div class="ml-[-25px]">
                <?php include get_template_directory() . '/img/icons/logo.php'; ?>
            </div>
            <a id="#" class="flex text-blue button-nav-link-footer underline flex-row" href="tel:<?php the_field('telefoon', 'option');?>"><span class="block mr-2"><?php include get_template_directory() . '/img/icons/phone.php'; ?></span><?php the_field('telefoon', 'option');?></a>
            <a id="#" class="flex text-blue button-nav-link-footer underline flex-row" href="mailto:<?php the_field('emailadres', 'option');?>"><span class="block mr-2"><?php include get_template_directory() . '/img/icons/mail.php'; ?></span><?php the_field('emailadres', 'option');?></a>
            <a id="#" class="flex text-blue button-nav-link-footer underline flex-row" href="mailto:<?php the_field('support_emailadres', 'option');?>"><span class="block mr-2"><?php include get_template_directory() . '/img/icons/mail.php'; ?></span><?php the_field('support_emailadres', 'option');?></a>
        </div>
        <div class="col-span-4 md:col-span-2 xl:col-span-1 gap-1 h-fit hidden md:grid pb-2 md:pb-0">
            <?php if (get_field('kolom_1_titel', 'option')): ?>   
            <p class="text-16 text-blue  font-bold"><?php the_field('kolom_1_titel', 'option');?></p>
            <?php endif; ?>
            <?php
            if( have_rows('kolom_1_repeater', 'option') ):
                while( have_rows('kolom_1_repeater', 'option') ) : the_row(); ?>
                <?php
                $link = get_sub_field('menu_item', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <a id="#" class="text-16 text-blue button-nav-link-footer underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="md:col-span-2 xl:col-span-1 gap-1 h-fit hidden md:grid">
            <?php if (get_field('kolom_2_titel', 'option')): ?>   
            <p class="text-16 text-blue  font-bold"><?php the_field('kolom_2_titel', 'option');?></p>
            <?php endif; ?>
            <?php
            if( have_rows('kolom_2_repeater', 'option') ):
                while( have_rows('kolom_2_repeater', 'option') ) : the_row(); ?>
                <?php
                $link = get_sub_field('menu_item', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <a id="#" class="text-16 text-blue button-nav-link-footer underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="md:col-span-2 xl:col-span-1 gap-1 h-fit hidden md:grid">
            <?php if (get_field('kolom_2_titel', 'option')): ?>   
            <p class="text-16 text-blue  font-bold"><?php the_field('kolom_2_titel', 'option');?></p>
            <?php endif; ?>
            <?php
            if( have_rows('kolom_3_repeater', 'option') ):
                while( have_rows('kolom_3_repeater', 'option') ) : the_row(); ?>
                <?php
                $link = get_sub_field('menu_item', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <a id="#" class="text-16 text-blue button-nav-link-footer underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php
                endwhile;
            else :
            endif;
            ?>




                    <div class="md:grid pt-3">
                         <?php
                        if( have_rows('kolom_4_repeater', 'option') ):
                            while( have_rows('kolom_4_repeater', 'option') ) : the_row(); ?>
                            <?php
                            $link = get_sub_field('menu_item', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <a id="#" class="text-16 text-blue font-bold underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
        
        </div>

    </div>

    <div class="flex flex-col md:hidden">
                <div class="md:col-span-2 xl:col-span-1 gap-1 h-fit grid px-2 md:px-4">
         <?php
            if( have_rows('kolom_3_repeater', 'option') ):
                while( have_rows('kolom_3_repeater', 'option') ) : the_row(); ?>
                <?php
                $link = get_sub_field('menu_item', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <a id="#" class="text-16 text-blue button-nav-link-footer underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php
                endwhile;
            else :
            endif;
            ?>
                    <div class="grid pt-3">
                         <?php
                        if( have_rows('kolom_4_repeater', 'option') ):
                            while( have_rows('kolom_4_repeater', 'option') ) : the_row(); ?>
                            <?php
                            $link = get_sub_field('menu_item', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <a id="#" class="text-16 text-blue font-bold underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
        
        </div>
        <div class="accordion-item"> 
            <button class="accordion text-16 leading-22 text-blue  font-bold py-2 px-2 md:px-2 flex items-center">Contact</button>
            <div class="panel px-2 md:px-4 grid gap-1">
                <a id="#" class="flex text-blue button-nav-link-footer underline flex-row" href="tel:<?php the_field('telefoon', 'option');?>"><span class="block mr-2"><?php include get_template_directory() . '/img/icons/phone.php'; ?></span><?php the_field('telefoon', 'option');?></a>
                <a id="#" class="flex text-blue button-nav-link-footer underline flex-row" href="mailto:<?php the_field('emailadres', 'option');?>"><span class="block mr-2"><?php include get_template_directory() . '/img/icons/mail.php'; ?></span><?php the_field('emailadres', 'option');?></a>
                <a id="#" class="flex text-blue button-nav-link-footer underline flex-row" href="mailto:<?php the_field('support_emailadres', 'option');?>"><span class="block mr-2"><?php include get_template_directory() . '/img/icons/mail.php'; ?></span><?php the_field('support_emailadres', 'option');?></a>
                <div class="pt-[15px]"></div>
            </div>
        </div>
        <div class="accordion-item"> 
            <button class="accordion text-16 leading-22 text-blue  font-bold py-2 px-2 md:px-2 flex items-center"><?php the_field('kolom_1_titel', 'option');?></button>
            <div class="panel px-2 md:px-4 grid gap-1">
                <?php
                if( have_rows('kolom_1_repeater', 'option') ):
                    while( have_rows('kolom_1_repeater', 'option') ) : the_row(); ?>
                    <?php
                    $link = get_sub_field('menu_item', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                    <a id="#" class="text-16 text-blue button-nav-link-footer underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <div class="pt-[15px]"></div>
            </div>
        </div>
        <div class="accordion-item"> 
            <button class="accordion text-16 leading-22 text-blue  font-bold py-2 px-2 md:px-2 flex items-center">Menu</button>
            <div class="panel px-2 md:px-4 grid gap-1">
                    <?php
                    if( have_rows('kolom_2_repeater', 'option') ):
                        while( have_rows('kolom_2_repeater', 'option') ) : the_row(); ?>
                        <?php
                        $link = get_sub_field('menu_item', 'option');
                        $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                        $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                        $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                        ?>
                        <a id="#" class="text-16 text-blue button-nav-link-footer underline" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                    <div class="pt-[15px]"></div>
            </div>
        </div>
        <div class="mx-auto pt-6 md:hidden">
            <?php include get_template_directory() . '/img/icons/logo.php'; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>