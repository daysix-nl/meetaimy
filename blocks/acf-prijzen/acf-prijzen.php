<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

<?php
    $items = array(
        array('name' => 'Kassa', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Agenda', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Online boekingen', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Afspraak bevestigingen', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Spaarpunten systeem', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Voorraadbeheer', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Urenregistratie', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Review systeem', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Aimy betalingen', 'strikethrough' => true, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Whatsapp boekingen', 'strikethrough' => true, 'background' => false, 'hiddenOnMobile' => false)
    );
?>

<?php
    $itemsPro = array(
        array('name' => 'Kassa', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Agenda', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Online boekingen', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Afspraak bevestigingen', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Spaarpunten systeem', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Voorraadbeheer', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Urenregistratie', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Review systeem', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Aimy betalingen', 'strikethrough' => false, 'background' => true, 'hiddenOnMobile' => false),
        array('name' => 'Whatsapp boekingen', 'strikethrough' => true, 'background' => false, 'hiddenOnMobile' => false)
    );
?>
<?php
    $itemsAllIn = array(
        array('name' => 'Kassa', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Agenda', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Online boekingen', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Afspraak bevestigingen', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Spaarpunten systeem', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Voorraadbeheer', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Urenregistratie', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => true),
        array('name' => 'Review systeem', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Aimy betalingen', 'strikethrough' => false, 'background' => false, 'hiddenOnMobile' => false),
        array('name' => 'Whatsapp boekingen', 'strikethrough' => false, 'background' => true, 'hiddenOnMobile' => false)
    );
?>

<?php
$link1 = get_field('starter_button');
$link1_url = isset($link1['url']) ? esc_url($link1['url']) : '';
$link1_text = isset($link1['title']) ? esc_html($link1['title']) : '';
$link1_target = isset($link1['target']) ? esc_attr($link1['target']) : '';
?>
<?php
$link2 = get_field('pro_button');
$link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
$link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
$link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
?>
<?php
$link3 = get_field('allin_button');
$link3_url = isset($link3['url']) ? esc_url($link3['url']) : '';
$link3_text = isset($link3['title']) ? esc_html($link3['title']) : '';
$link3_target = isset($link3['target']) ? esc_attr($link3['target']) : '';
?>

<?php
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>



    <div class="px-2 md:px-4 xl:container mx-auto flex flex-col items-center <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="p-[24px] md:px-[28px] py-[16px] space-y-[12px] md:space-y-0 bg-[#E7E7EE] rounded-[12px] md:rounded-[8px] flex flex-col md:flex-row md:space-x-[20px] items-center justify-center  md:max-w-[720px] w-full md:w-[670px]">
            <p class="text-center text-20 md:text-[25px] font-bold text-[#101357]"><?php the_field('tekst_voor_dropdown');?></p>
            <div class="flex justify-center space-x-[12px] md:space-x-[20px]">
                <div>
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class="inline-flex items-center w-max min-w-[160px] justify-center gap-x-1.5 h-[42px] bg-[#F2F2F2] text-sm font-bold text-[#8789AB] pl-[12px] pr-[8px] shadow-sm ring-1 ring-inset ring-[#E7E7EE] rounded-[4px]" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <span>1 tot 2</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none" class="ml-1 pointer-events-none">
                                <path d="M25.9938 10.4866C25.667 10.1745 25.2294 10 24.7739 10C24.3183 10 23.8807 10.1745 23.5539 10.4866L16 17.9109L8.44608 10.4866C8.11934 10.1745 7.68171 10 7.22615 10C6.77058 10 6.33296 10.1745 6.00622 10.4866C5.84575 10.6439 5.71844 10.8308 5.63158 11.0365C5.54471 11.2422 5.5 11.4628 5.5 11.6856C5.5 11.9083 5.54471 12.1289 5.63158 12.3346C5.71844 12.5404 5.84575 12.7273 6.00622 12.8846L14.787 21.5147C15.1114 21.8258 15.5467 22 16 22C16.4533 22 16.8886 21.8258 17.213 21.5147L25.9938 12.8846C26.1542 12.7273 26.2816 12.5404 26.3684 12.3346C26.4553 12.1289 26.5 11.9083 26.5 11.6856C26.5 11.4628 26.4553 11.2422 26.3684 11.0365C26.2816 10.8308 26.1542 10.6439 25.9938 10.4866Z" fill="#8789AB"/>
                            </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-1 w-[200px] origin-top-right rounded-md bg-[#F2F2F2] ring-1 ring-[#E7E7EE] ring-opacity-5 focus:outline-none menu-item" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" hidden>
                            <div class="py-1" role="none">
                                <ul>
                                    <li class="text-[#101357] block px-2 py-1 text-14 cursor-pointer" role="menuitem" tabindex="-1" id="menu-item-0">1 tot 2</li>
                                    <li class="text-[#101357] block px-2 py-1 text-14 cursor-pointer" role="menuitem" tabindex="-1" id="menu-item-1">3 tot 5</li>
                                    <li class="text-[#101357] block px-2 py-1 text-14 cursor-pointer" role="menuitem" tabindex="-1" id="menu-item-2">5 tot 15</li>
                                    <li class="text-[#101357] block px-2 py-1 text-14 cursor-pointer" role="menuitem" tabindex="-1" id="menu-item-3">Meer dan 15</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center text-20 md:text-[25px] font-bold text-[#101357] ml-[12px] md:ml-0 flex items-center"><?php the_field('tekst_achter_dropdown');?></p>
            </div>
        </div>


        <!-- 1 TOT 3 -->
        <div id="filter-1tot2" class="hidden grid-cols-3 gap-[16px] md:gap-[24px] mt-[16px] md:mt-4 w-full filter">
            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('starter_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('starter_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('starter_prijs_1_tot_3');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('starter_prijs_informatie');?></p>
                    </div>
                    <?php if (get_field('starter_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link1_url; ?>" target="<?php echo $link1_target; ?>"><?php echo $link1_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69]">Dit pakket bevat</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($items as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
            
            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('pro_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('pro_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('pro_prijs_1_tot_3');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('pro_prijs_informatie');?></p>
                    </div>
                    <?php if (get_field('pro_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link2_url; ?>" target="<?php echo $link2_target; ?>"><?php echo $link2_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] hidden md:block">Dit pakket bevat</h4>
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] md:hidden">Alles van Aimy Starter +</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsPro as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?> <?= $item['hiddenOnMobile'] ? 'hidden md:flex' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>

            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('allin_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('allin_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('allin_prijs_1_tot_3');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('allin_prijs_informatie');?></p>
                    </div>
                    <?php if (get_field('allin_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link3_url; ?>" target="<?php echo $link3_target; ?>"><?php echo $link3_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] hidden md:block">Dit pakket bevat</h4>
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] md:hidden">Alles van Aimy Starter +</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsAllIn as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?> <?= $item['hiddenOnMobile'] ? 'hidden md:flex' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
        </div>
        
        <!-- 3 TOT 5 -->
        <div id="filter-3tot5" class="hidden grid-cols-3 gap-[16px] md:gap-[24px] mt-[16px] md:mt-4 w-full filter">
            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                  <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('starter_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('starter_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('starter_prijs_3_tot_5');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('starter_prijs_informatie_2');?></p>
                    </div>
                    <?php if (get_field('starter_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link1_url; ?>" target="<?php echo $link1_target; ?>"><?php echo $link1_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($items as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?> <?php $item['hiddenOnMobile'] ? 'hidden md:flex' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>

            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                 <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('pro_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('pro_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('pro_prijs_3_tot_5');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('pro_prijs_informatie_2');?></p>
                    </div>
                    <?php if (get_field('pro_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link2_url; ?>" target="<?php echo $link2_target; ?>"><?php echo $link2_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] hidden md:block">Dit pakket bevat</h4>
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] md:hidden">Alles van Aimy Starter +</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsPro as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?> <?= $item['hiddenOnMobile'] ? 'hidden md:flex' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>

            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('allin_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('allin_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('allin_prijs_3_tot_5');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('allin_prijs_informatie_3');?></p>
                    </div>
                    <?php if (get_field('allin_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link3_url; ?>" target="<?php echo $link3_target; ?>"><?php echo $link3_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] hidden md:block">Dit pakket bevat</h4>
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] md:hidden">Alles van Aimy Starter +</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsAllIn as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?> <?= $item['hiddenOnMobile'] ? 'hidden md:flex' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
        </div>
        
        <!-- 5 TOT 15 -->
        <div id="filter-5tot15" class="hidden grid-cols-3 gap-[16px] md:gap-[24px] mt-[16px] md:mt-4 w-full filter">
           <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                 <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('starter_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('starter_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('starter_prijs_5_tot_15');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('starter_prijs_informatie_3');?></p>
                    </div>
                    <?php if (get_field('starter_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link1_url; ?>" target="<?php echo $link1_target; ?>"><?php echo $link1_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($items as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?> <?= $item['hiddenOnMobile'] ? 'hidden md:flex' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>

            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                 <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('pro_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('pro_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('pro_prijs_5_tot_15');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('pro_prijs_informatie_3');?></p>
                    </div>
                    <?php if (get_field('pro_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link2_url; ?>" target="<?php echo $link2_target; ?>"><?php echo $link2_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] hidden md:block">Dit pakket bevat</h4>
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] md:hidden">Alles van Aimy Starter +</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsPro as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?> <?= $item['hiddenOnMobile'] ? 'hidden md:flex' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>

            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]"><?php the_field('allin_titel');?></h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]"><?php the_field('allin_subtitel');?></p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€<?php the_field('allin_prijs_5_tot_15');?></p>
                        <p class="text-14 md:text-[12px] leading-[18px] md:leading-[18px] font-normal text-[#101357]/[0.4]"><?php the_field('allin_prijs_informatie');?></p>
                    </div>
                    <?php if (get_field('allin_button')): ?>   
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="<?php echo $link3_url; ?>" target="<?php echo $link3_target; ?>"><?php echo $link3_text; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] hidden md:block">Dit pakket bevat</h4>
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] md:hidden">Alles van Aimy Starter +</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsAllIn as $item) : ?>
                            <li class="text-[16px] leading-[22px] font-normal text-[#101357] flex flex-row items-center space-x-[16px] md:space-x-[18px]<?= $item['strikethrough'] ? ' line-through opacity-[0.3]' : '' ?> <?= $item['background'] ? 'bg-[#E7E7EE] rounded-[4px] w-fit pr-[8px]' : '' ?> <?= $item['hiddenOnMobile'] ? 'hidden md:flex' : '' ?>">
                                <?php if ($item['strikethrough']) : ?>
                                    <?php include get_template_directory() . '/img/icons/cross.php'; ?>
                                <?php else : ?>
                                    <?php include get_template_directory() . '/img/icons/check.php'; ?>
                                <?php endif; ?>
                                <span class="flex"><?= $item['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
        </div>
        
        <!-- MEER DAN 15 -->
        <div id="filter-meerdan15" class="hidden grid-cols-3 gap-[16px] md:gap-[24px] mt-[16px] w-full filter py-4">
            <article class="col-span-3 max-w-[888px] flex justify-center items-center flex-col container">
                <p class="text-[#101357]/[0.6000000238418579] text-18 leading-28 md:text-22 md:leading-30 font-bold text-center"><?php the_field('meer_dan_15_tekst');?></p>
                <?php if (get_field('button')): ?>   
                <div class="mt-[30px] md:mt-[32px]">
                    <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-fit text-center" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                </div>
                <?php endif; ?>
            </article>
        </div>
    </section>
<?php endif; ?>