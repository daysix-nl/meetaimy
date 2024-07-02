
<div class="xl:hidden">
    <div class="mobile-navbar z-20">
    <div class="overlay">
        <div class="bg-[#F9F9F9] h-6 w-full grid grid-cols-3">
            <?php if( have_rows('submenu_repeater', 'option') ): ?>
                <?php while( have_rows('submenu_repeater', 'option') ): the_row(); ?>
                 <?php
                            $link = get_sub_field('menu_item', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                    <a id="#" class="text-blue text-14 leading-18 col-span-1 flex justify-center items-center" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="flex flex-col">
            <button id="#" class="border-[#E9E9E9] border-b-2 p-2 text-blue font-bold text-16 leading-22 text-left w-full cursor-pointer functionaliteiten-navbar-button flex">
                <?php the_field('dropdown_titel', 'option');?>
                <svg xmlns="http://www.w3.org/2000/svg" class="rotate-[270deg] ml-1" width="24" height="24" viewBox="0 0 24 24" fill="#101357">
                    <path d="M16.7015 9.24039C16.5429 9.08623 16.3304 9 16.1091 9C15.8879 9 15.6754 9.08623 15.5168 9.24039L11.8487 12.9085L8.18058 9.24039C8.02192 9.08623 7.80941 9 7.58819 9C7.36698 9 7.15447 9.08623 6.99581 9.24039C6.91789 9.31811 6.85607 9.41044 6.81389 9.51209C6.77171 9.61374 6.75 9.72272 6.75 9.83277C6.75 9.94283 6.77171 10.0518 6.81389 10.1535C6.85607 10.2551 6.91789 10.3474 6.99581 10.4252L11.2596 14.689C11.4172 14.8427 11.6286 14.9288 11.8487 14.9288C12.0688 14.9288 12.2802 14.8427 12.4377 14.689L16.7015 10.4252C16.7794 10.3474 16.8413 10.2551 16.8834 10.1535C16.9256 10.0518 16.9473 9.94283 16.9473 9.83277C16.9473 9.72272 16.9256 9.61374 16.8834 9.51209C16.8413 9.41044 16.7794 9.31811 16.7015 9.24039Z" fill="black"/>
                </svg>    
            </button>

              <?php
                        if( have_rows('menu_repeater', 'option') ):
                            while( have_rows('menu_repeater', 'option') ) : the_row(); ?>
                            <?php
                            $link = get_sub_field('menu_item', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <a id="#" class="border-[#E9E9E9]  border-b-2 p-2 text-blue font-bold text-16 leading-22" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            <?php
                            endwhile;
                        else :
                        endif; ?>
        </div>
                        <?php
                        $link = get_field('button', 'option');
                        $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                        $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                        $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                        ?>
                        <?php if (get_field('button')): ?>   
                        <a id="#" class="text-14 leading-18 mx-2 text-white font-bold h-5 mt-2 rounded-full bg-green px-3 flex justify-center items-center button-green" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php endif; ?>
                        	
        
       
    </div>
    <div class="functionaliteiten-navbar">
        <div class="flex flex-col">
            <button id="#" class="border-[#E9E9E9]  border-b-2 p-2 text-blue font-bold text-16 leading-22 text-left flex terug-navbar-mobile-button ml-[-10px]">
                <svg xmlns="http://www.w3.org/2000/svg" class="rotate-[90deg] mr-1" width="24" height="24" viewBox="0 0 24 24" fill="#101357">
                    <path d="M16.7015 9.24039C16.5429 9.08623 16.3304 9 16.1091 9C15.8879 9 15.6754 9.08623 15.5168 9.24039L11.8487 12.9085L8.18058 9.24039C8.02192 9.08623 7.80941 9 7.58819 9C7.36698 9 7.15447 9.08623 6.99581 9.24039C6.91789 9.31811 6.85607 9.41044 6.81389 9.51209C6.77171 9.61374 6.75 9.72272 6.75 9.83277C6.75 9.94283 6.77171 10.0518 6.81389 10.1535C6.85607 10.2551 6.91789 10.3474 6.99581 10.4252L11.2596 14.689C11.4172 14.8427 11.6286 14.9288 11.8487 14.9288C12.0688 14.9288 12.2802 14.8427 12.4377 14.689L16.7015 10.4252C16.7794 10.3474 16.8413 10.2551 16.8834 10.1535C16.9256 10.0518 16.9473 9.94283 16.9473 9.83277C16.9473 9.72272 16.9256 9.61374 16.8834 9.51209C16.8413 9.41044 16.7794 9.31811 16.7015 9.24039Z" fill="black"/>
                </svg>    
                Terug
            </button>
            <?php
                        if( have_rows('dropdown_repeater', 'option') ):
                            while( have_rows('dropdown_repeater', 'option') ) : the_row(); ?>
                            <?php
                            $link = get_sub_field('menu_item', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <a id="#" class="border-[#E9E9E9]  border-b-2 p-2 text-blue font-bold text-16 leading-22" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            <?php
                            endwhile;
                        else :
                        endif; ?>
        </div>
    </div>
</div>
</div>
