<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://sst.meetaimy.com/npabwmhn.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MLTB3S82');</script>
<!-- End Google Tag Manager -->
</head>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<body <?php body_class( 'page-block ' ); ?> id="up">
   <!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://sst.meetaimy.com/ns.html?id=GTM-MLTB3S82" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
    <header class="h-6 xl:h-8 sticky top-0 bg-white z-[60] menushadow">
        <div class="xl:container relative">
            <div class="hidden xl:flex flex-row relative z-3 h-8">
            <a href="/" class="ml-[-25px] hover-remove h-8 flex items-center">
                <?php include get_template_directory() . '/img/icons/logo.php'; ?>
            </a>
            <div class="xl:ml-4 flex flex-row items-center">
                <div>
                    <button class="text-14 leading-18 text-[#101357] opacity-[0.6] font-bold mr-1 flex items-center button-dropdown py-[8px] px-1.5 hover:bg-[#F9F9F9] rounded-full"><?php the_field('dropdown_titel', 'option');?></button>
                   
                    <div class="nav-dropDown flex flex-col justify-around">
                         <?php
                        if( have_rows('dropdown_repeater', 'option') ):
                            while( have_rows('dropdown_repeater', 'option') ) : the_row(); ?>
                            <?php
                            $link = get_sub_field('menu_item', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <a id="#" class="text-14 leading-18 text-black font-normal p-2 hover:bg-gray" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            <?php
                            endwhile;
                        else :
                        endif; ?>
                    </div>
                </div>
                 <?php
                        if( have_rows('menu_repeater', 'option') ):
                            while( have_rows('menu_repeater', 'option') ) : the_row(); ?>
                            <?php
                            $link = get_sub_field('menu_item', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <a id="#" class="text-14 leading-18 text-[#101357] opacity-[0.6] font-bold mr-1 flex items-center py-[8px] px-1.5 hover-remove hover:bg-[#F9F9F9] rounded-full" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            <?php
                            endwhile;
                        else :
                        endif; ?>
                        <?php
                        $link = get_field('button', 'option');
                        $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                        $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                        $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                        ?>
                        <?php if (get_field('button', 'option')): ?>   
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-3 flex hover-remove justify-center items-center button-green" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php endif; ?>
                    </div>
            <div class="ml-auto flex space-x-[10px] items-center justify-items-end">

                   
                
                <?php if( have_rows('submenu_repeater', 'option') ): ?>
                <?php while( have_rows('submenu_repeater', 'option') ): the_row(); ?>
                 <?php
                            $link = get_sub_field('menu_item', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                    <a id="#" class="col-span-1 w-fit text-14 leading-18 text-[#101357] button-nav-link py-[8px] px-1.5 hover-remove flex justify-end" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php endwhile; ?>
            <?php endif; ?>
                <div class="w-[41px]"></div>
            </div>
         
      </div>
  



        <div class="w-full flex xl:hidden h-[60px] relative z-30">
            <a href="/"  class="absolute top-1/2  transform -translate-y-1/2 left-1 z-[2]"><?php include get_template_directory() . '/img/icons/logo-mobile.php'; ?></a>
            <button class="my-auto mx-auto flex flex-row items-center font-bold button-mobile-navbar">menu <span class="block ml-1"><?php include get_template_directory() . '/img/icons/arrow-mobile.php'; ?></span></button>
            
        </div>
        <div class="absolute top-0 right-2 xl:right-0 h-full flex items-center">
            <div id="weglot_here"></div>
            </div>
         </div>
        </div>
    </header>

    <?php include get_template_directory() . '/componenten/navbar.php'; ?>
  


