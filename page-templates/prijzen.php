<?php
/**
 * Template name: Prijzen
 */


 get_header(); ?>

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

<main>

   <section>
        <div class="container pt-6 md:pt-8 pb-6 md:pb-8">
            <h1 class="text-40 leading-48 md:text-54 md:leading-62 xl:text-64 xl:leading-72 font-bold text-[#101357] text-center max-w-[343px] md:max-w-[unset] mx-auto">Prijzen</h1>
            <p class="max-w-[343px] md:max-w-[660px] mx-auto text-center text-[#8789AB] font-bold pt-[16px] text-14 leading-20 md:text-16 md:leading-22">Bij Aimy zit je nergens aan vast en kun je vrijblijvend proberen</p>
        </div>
    </section>

    <section class="px-2 md:px-4 xl:container mx-auto flex flex-col items-center">
        <div class="p-[24px] md:px-[28px] py-[16px] space-y-[12px] md:space-y-0 bg-[#E7E7EE] rounded-[12px] md:rounded-[8px] flex flex-col md:flex-row md:space-x-[20px] items-center justify-center  md:max-w-[720px] w-full md:w-[670px]">
            <p class="text-center text-20 md:text-[25px] font-bold text-[#101357]">Mijn salon heeft</p>
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
                <p class="text-center text-20 md:text-[25px] font-bold text-[#101357] ml-[12px] md:ml-0 flex items-center">Medewerkers</p>
            </div>
        </div>

        <div id="filter-1tot2" class="hidden grid-cols-3 gap-[16px] md:gap-[24px] mt-[16px] md:mt-4 w-full filter">
            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy Starter</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Precies wat een professionele salon dagelijks nodig heeft</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€42,50</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4]">/ maand (excl. btw)</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
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
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy Pro</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Ook je betalingen simpel en goed geregeld één systeem</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€21,25</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4] mb-[-14px]">/ maand (excl. btw) </br>+ €0,31 per betaling</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
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
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy All-in</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Laat je klanten nu gemakkelijk boeken via Whatsapp</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€70,75</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4] mb-[-14px]">/ maand (excl. btw) </br>+ €0,31 per betaling</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
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

        <div id="filter-3tot5" class="hidden grid-cols-3 gap-[16px] md:gap-[24px] mt-[16px] md:mt-4 w-full filter">
            <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy Starter</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Precies wat een professionele salon dagelijks nodig heeft</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€47,50</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4]">/ maand (excl. btw)</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

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
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy Pro</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Ook je betalingen simpel en goed geregeld één systeem</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€26,25</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4] mb-[-14px]">/ maand (excl. btw) </br>+ €0,31 per betaling</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsPro as $item) : ?>
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
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy All-in</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Laat je klanten nu gemakkelijk boeken via Whatsapp</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€75,75</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4] mb-[-14px]">/ maand (excl. btw) </br>+ €0,31 per betaling</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsAllIn as $item) : ?>
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
        </div>

        <div id="filter-5tot15" class="hidden grid-cols-3 gap-[16px] md:gap-[24px] mt-[16px] md:mt-4 w-full filter">
           <article class="shadow-[0px_2px_10px_0px_rgba(0,0,0,0.15)] bg-white rounded-[16px] md:rouded-[12px] col-span-3 md:col-span-1">
                <div>
                    <div class="space-y-[8px] pt-[32px] px-[24px] md:px-[32px]">
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy Starter</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Precies wat een professionele salon dagelijks nodig heeft</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€52,50</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4]">/ maand (excl. btw)</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
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
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy Pro</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Ook je betalingen simpel en goed geregeld één systeem</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€31,25</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4] mb-[-14px]">/ maand (excl. btw) </br>+ €0,31 per betaling</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsPro as $item) : ?>
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
                        <h3 class="text-22 md:text-[30px] leading-[28px] font-bold text-[#101357]/[0.699999988079071]">Aimy All-in</h3>
                        <p class="text-16 md:text-[18px] leading-[22px] font-normal text-[#101357]/[0.5]">Laat je klanten nu gemakkelijk boeken via Whatsapp</p>
                    </div>
                    <div class="pt-[44px] md:pt-[32px] flex md:px-[32.5px] px-[24px] space-x-[12px] items-end flex-row flex-wrap xl:flex-nowrap">
                        <p class="text-40 md:text-[48px] leading-[40px] md:leading-[55px] font-bold text-[#101357]/[0.699999988079071]">€80,75</p>
                        <p class="text-14 md:text-[14px] leading-[18px] md:leading-[20px] font-normal text-[#101357]/[0.4] mb-[-14px]">/ maand (excl. btw) </br>+ €0,31 per betaling</p>
                    </div>
                    <div class="mx-[24px] md:mx-[32px] mt-[30px] md:mt-[38px]">
                        <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-full text-center" href="#">Probeer nu gratis</a>
                    </div>

                </div>

                <div class="w-full h-[1px] bg-[#101357] mb-[32px] mt-[24px] md:mt-[20px] opacity-[0.09]"></div>

                <div class="mx-[24px] md:mx-[32px] pb-[37px] md:pb-[38px]">
                    <h4 class="mb-[17px] md:mb-[12px] text-14 md:text-[20px] leading-20 md:leading-[25px] font-bold md:font-normal text-[#101357]/[0.69] ">Dit pakket bevat</h4>
                    <ul class="space-y-[4px]">
                        <?php foreach ($itemsAllIn as $item) : ?>
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
        </div>

        <div id="filter-meerdan15" class="hidden grid-cols-3 gap-[16px] md:gap-[24px] mt-[16px] w-full filter py-4">
            <article class="col-span-3 max-w-[888px] flex justify-center items-center flex-col container">
                <p class="text-[#101357]/[0.6000000238418579] text-18 leading-28 md:text-22 md:leading-30 font-bold text-center">Voor grotere salons leveren we graag maatwerk. Graag gaan we met je in gesprek over een passende samenwerking.</p>
                <div class="mt-[30px] md:mt-[32px]">
                    <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-fit text-center" href="#">Contact opnemen</a>
                </div>
            </article>
        </div>
    </section>

    <section class="bg-[#E7E7EE] py-[24px] md:py-[65px] mt-[80px] relative">
        <div class="container z-[2] relative grid grid-cols-1 md:grid-cols-2 gap-[24px] items-center">
            <div class="col-span-1 max-w-[660px] flex flex-col order-last md:order-first">
                <h3 class="text-40 leading-48 font-bold text-[#101357] text-center md:text-left">Zorgeloos overstappen</h3>
                <p class="text-22 leading-30 opacity-60 font-bold text-[#101357] my-[8px] text-center md:text-left">We helpen je gratis op weg met onze uitgebreide overstapservice</p>
                <p class="text-16 leading-22 opacity-[0.7] font-normal text-[#101357] text-center md:text-left">Hier komt een korte uitleg over de overstapservice en waarom dat zo fijn is voor een salon. Het geeft een samenvatting van de werking van deze service.</p>
                <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-3 flex hover-remove justify-center items-center button-green w-fit animation-hero md:min-w-[220px] mt-[16px] md:mt-[24px] mx-auto md:mx-[unset]" href="#">Vraag een demo aan</a>
            </div>
            <div class="col-span-1">
                <img class="object-cover w-full h-[372px] rounded-2xl" src="/wp-content/themes/meetaimy/img/local/image-1.png" alt="">
            </div>

        </div>
        <div class="absolute bottom-0 left-0 right-[-228px] md:right-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 152" fill="none">
                <path opacity="0.3" d="M1092.02 70.9814C1239.02 103.814 1385.26 90.7171 1440 80.0643V152H0V53.8248C0 53.8248 145.666 81.4099 234.684 70.9814C368.447 55.311 484.126 0 662.638 0C841.15 0 908.271 29.94 1092.02 70.9814Z" fill="url(#paint0_linear_425_831)"/>
                <defs>
                <linearGradient id="paint0_linear_425_831" x1="139.5" y1="309.501" x2="2137" y2="-456.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E7E7EE"/>
                <stop offset="1" stop-color="#8789AB" stop-opacity="0.06"/>
                </linearGradient>
                </defs>
            </svg>
        </div>
    </section>

    <section class="mt-[65px]">
        <div class="container">
            <h3 class="text-[#101357] text-22 leading-28 md:text-40 md:leading-48 font-bold">Veelgestelde vragen</h3>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-2 mt-[24px] md:gap-[24px]">
            <div class="col-span-1">
                <div class="accordion-item prijzen border-[#8789ab] border-t-[1px]"> 
                    <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]">What makes Gapstars different from other offshore companies?</button>
                    <div class="panel p-0">
                        <p class="text-16 leading-22 pb-[24px]">Vraag over Aimy en de prijzen die hierboven staan?</p>
                    </div>
                </div>
                <div class="accordion-item prijzen"> 
                    <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]">What makes Gapstars different from other offshore companies?</button>
                    <div class="panel p-0">
                        <p class="text-16 leading-22 pb-[24px]">Vraag over Aimy en de prijzen die hierboven staan?</p>
                    </div>
                </div>

                <div class="accordion-item prijzen "> 
                    <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]">What makes Gapstars different from other offshore companies?</button>
                    <div class="panel p-0">
                        <p class="text-16 leading-22 pb-[24px]">Vraag over Aimy en de prijzen die hierboven staan?</p>
                    </div>
                </div>

                <div class="accordion-item prijzen"> 
                    <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]">What makes Gapstars different from other offshore companies?</button>
                    <div class="panel p-0">
                        <p class="text-16 leading-22 pb-[24px]">Vraag over Aimy en de prijzen die hierboven staan?</p>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="accordion-item prijzen border-[#8789ab] md:border-t-[1px]"> 
                    <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]">What makes Gapstars different from other offshore companies?</button>
                    <div class="panel p-0">
                        <p class="text-16 leading-22 pb-[24px]">Vraag over Aimy en de prijzen die hierboven staan?</p>
                    </div>
                </div>
                <div class="accordion-item prijzen"> 
                    <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]">What makes Gapstars different from other offshore companies?</button>
                    <div class="panel p-0">
                        <p class="text-16 leading-22  pb-[24px]">Vraag over Aimy en de prijzen die hierboven staan?</p>
                    </div>
                </div>

                <div class="accordion-item prijzen"> 
                    <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]">What makes Gapstars different from other offshore companies?</button>
                    <div class="panel p-0">
                        <p class="text-16 leading-22 pb-[24px]">Vraag over Aimy en de prijzen die hierboven staan?</p>
                    </div>
                </div>

                <div class="accordion-item prijzen"> 
                    <button class="accordion text-16 leading-22 font-bold flex items-center opacity-[0.7] text-[#101357] h-[80px]">What makes Gapstars different from other offshore companies?</button>
                    <div class="panel p-0">
                        <p class="text-16 leading-22 pb-[24px]">Vraag over Aimy en de prijzen die hierboven staan?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-[24px] flex justify-end">
            <a class="text-16 leading-26 underline font-medium text-right text-[#8789AB] text-opacity-[0.5]" href="/">Meer veelgestelde vragen</a>
        </div>
    </section>

</main>
 
<?php get_footer('contact'); ?>