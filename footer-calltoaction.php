<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<!-- CALL TO ACTION -->
<section class="bg-[#E7E7EE] relative overflow-hidden">
    <div class="container py-6 z-[2] relative">
        <div class="max-w-[303px] md:max-w-[1074px] mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <h2 class="text-22 leading-28 md:text-40 md:leading-48 text-[#101357] font-bold text-center md:text-left max-w-[774px] pb-3 md:pb-0">Aimy is de snelst groeiende salon software. Start gratis en ontdek zelf waarom</h2>
                <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-3 flex hover-remove justify-center items-center button-green w-fit animation-hero md:min-w-[220px]" href="https://app2.meetaimy.com/create-account" target="_blank">Start gratis met Aimy</a>
            </div>
        </div>
    </div>
    <!-- SWOOSH -->
    <div class="absolute left-0 right-0 bottom-0 z-[1]">
        <svg width="100%" height="auto" viewBox="0 0 373 114" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="md:hidden">
            <defs>
                <rect id="path-4e887e0yh9-1" x="0" y="0" width="373" height="114"></rect>
                <linearGradient x1="9.68752319%" y1="51.7179696%" x2="148.46846%" y2="46.1003341%" id="linearGradient-4e887e0yh9-3">
                    <stop stop-color="#E7E7EE" offset="0%"></stop>
                    <stop stop-color="#8789AB" stop-opacity="0.06" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Rectangle-2">
                    <mask id="mask-4e887e0yh9-2" fill="white">
                        <use xlink:href="#path-4e887e0yh9-1"></use>
                    </mask>
                    <g id="Rectangle"></g>
                    <g id="Group" mask="url(#mask-4e887e0yh9-2)" fill="url(#linearGradient-4e887e0yh9-3)" fill-rule="nonzero" opacity="0.3">
                        <g transform="translate(-151, 0)" id="Path">
                            <path d="M817.498,53.236 C927.543,77.8609 1037.018,68.0379 1078,60.0482 L1078,114 L0,114 L0,40.3686 C0,40.3686 109.0473,61.0575 175.6873,53.236 C275.824,41.4832 362.422,0 496.058,0 C629.695,0 679.942,22.455 817.498,53.236 Z"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
        <svg width="100%" height="auto" viewBox="0 0 1440 152" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden md:block">
            <path opacity="0.3" d="M1092.02 70.9814C1239.02 103.814 1385.26 90.7171 1440 80.0643V152H0V53.8248C0 53.8248 145.666 81.4099 234.684 70.9814C368.447 55.311 484.126 0 662.638 0C841.15 0 908.271 29.94 1092.02 70.9814Z" fill="url(#paint0_linear_349_1164)"/>
            <defs>
            <linearGradient id="paint0_linear_349_1164" x1="139.5" y1="309.501" x2="2137" y2="-456.5" gradientUnits="userSpaceOnUse">
            <stop stop-color="#E7E7EE"/>
            <stop offset="1" stop-color="#8789AB" stop-opacity="0.06"/>
            </linearGradient>
            </defs>
        </svg>
    </div>
</section>

<?php
$image1 = get_field('logo_1', 'option');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$image2 = get_field('logo_2', 'option');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>
<?php
$image3 = get_field('logo_3', 'option');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>
<?php
$image4 = get_field('logo_4', 'option');
$image4_url = isset($image4['url']) ? esc_url($image4['url']) : '';
$image4_alt = isset($image4['alt']) ? esc_attr($image4['alt']) : '';
?>
<?php
$image5 = get_field('logo_5', 'option');
$image5_url = isset($image5['url']) ? esc_url($image5['url']) : '';
$image5_alt = isset($image5['alt']) ? esc_attr($image5['alt']) : '';
?>
<?php
$image6 = get_field('logo_6', 'option');
$image6_url = isset($image6['url']) ? esc_url($image6['url']) : '';
$image6_alt = isset($image6['alt']) ? esc_attr($image6['alt']) : '';
?>

<!-- KLANTEN -->
<section class="container grid grid-cols-6 gap-5 mt-6 md:mt-8 mb-4 md:mb-6">
            <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image5_url; ?>" alt="<?php echo $image5_alt; ?>">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo $image6_url; ?>" alt="<?php echo $image6_alt; ?>">
            </div>
</section>



<!-- SWOOSH -->
<section>
    <svg width="100%" height="auto" viewBox="0 0 375 83.2027648" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="md:hidden">
        <defs>
            <linearGradient x1="50%" y1="2.86765%" x2="50%" y2="80.7354178%" id="linearGradient-h7422qk5wj-1">
                <stop stop-color="#F5F5F5" offset="41.6463%"></stop>
                <stop stop-color="#FFFFFF" offset="100%"></stop>
            </linearGradient>
        </defs>
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Group" fill="url(#linearGradient-h7422qk5wj-1)" fill-rule="nonzero">
                <path d="M207.134,48.6589305 C278.047,71.1665305 348.592,62.1881305 375,54.8854305 L375,83.2027648 L0,83.2027648 L0,0 C86.1145,0 118.494,20.5244305 207.134,48.6589305 Z" id="Path"></path>
            </g>
        </g>
    </svg>
    <svg width="100%" height="auto" viewBox="0 0 1440 152" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden md:block">
        <path opacity="0.9" d="M1092.02 70.9814C1239.02 103.814 1385.26 90.7171 1440 80.0643V152H0V53.8248C0 53.8248 145.666 81.4099 234.684 70.9814C368.447 55.311 484.126 0 662.638 0C841.15 0 908.271 29.94 1092.02 70.9814Z" fill="url(#paint0_linear_349_751)"/>
        <defs>
        <linearGradient id="paint0_linear_349_751" x1="720" y1="152" x2="720" y2="14.0741" gradientUnits="userSpaceOnUse">
        <stop offset="0.168196" stop-color="white"/>
        <stop offset="0.826254" stop-color="#F5F5F5"/>
        </linearGradient>
        </defs>
    </svg>
</section>

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