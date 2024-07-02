<?php
/**
 * Template name: Homepage
 */


 get_header(); ?>
  <main>

<!-- HERO -->
<section class="overflow-hidden bg-white md:h-[calc(100vh_-_80px)] relative min-h-[520px] max-h-[750px]">
    <div class="md:w-[55vw] overflow-hidden relative  md:absolute top-0 right-0 -z-1 h-[270px] w-full md:h-full">
        <img class="object-cover md:w-[55vw] w-full h-full md:absolute top-0 pb-[17px] md:pb-0 right-0 -z-1 inner-hero" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/DSC00029-1.jpg" alt="">
        <div class="absolute md:hidden bottom-0 right-0 w-full">
            <?php include get_template_directory() . '/img/icons/background-hero-mobile.php'; ?>
        </div>
        <div class="absolute w-full bottom-0  right-0  hidden md:block">
            <?php include get_template_directory() . '/img/icons/overlay-hero.php'; ?>
        </div>
    </div>
    <!-- DESKTOP -->
    <div class="container grid-cols-5 h-full items-end md:items-center hidden md:grid relative">
        <div class="col-span-5 md:col-span-2 md:bg-white h-full flex relative z-[5]">
            <div class=" mt-auto md:my-auto w-full pr-3">
                <h1 class="md:text-54 md:leading-62 xl:text-64 xl:leading-72 font-bold text-[#101357] animation-hero">Alle tools om jouw salon te runnen</h1>
                <p class="text-16 leading-22 mt-2 mb-4 animation-hero text-[#121212] font-normal">Aimy is jouw virtuele assistent. Sociaal en loyaal. Aimy helpt je bij het inplannen en het bijhouden van je agenda tot het updaten van je administratie; Aimy neemt je veel werk uit handen. Zo heb jij minder afleiding en méér trouwe klanten.</p>
                <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green button-green px-[32px] flex hover-remove justify-center items-center w-fit animation-hero" href="#">Vraag een gratis demo aan</a>
            </div>
        </div>
    </div>
    <!-- MOBILE -->
    <div class="container mt-2 relative z-10 md:hidden ">
        <div class="mt-auto md:my-auto w-full">
            <h1 class="text-40 leading-48 font-bold text-[#101357] text-center max-w-[350px] mx-auto">Alle tools om jouw salon te runnen</h1>
            <p class="text-16 leading-22 mt-2 mb-3 text-center text-[#121212]">Aimy is jouw virtuele assistent. Sociaal en loyaal. Aimy helpt je bij het inplannen en het bijhouden van je agenda tot het updaten van je administratie; Aimy neemt je veel werk uit handen. Zo heb jij minder afleiding en méér trouwe klanten.</p>
            <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full bg-green px-[32px] flex hover-remove justify-center items-center button-green w-fit mx-auto" href="#">Vraag een gratis demo aan</a>
        </div>
    </div>
</section>

<!-- VIDEO -->
<section class="my-10 flex flex-col section-hero ">
    <!-- MOBILE -->
    <div class="container md:w-full md:max-w-[845px] mx-auto md:hidden video-w">
        <h2 class="text-[#101357] text-22 leading-28 text-center font-bold">Meet Aimy</h2>
        <p class="text-[#121212] text-14 leading-18 text-center my-2 font-normal">Aimy wil technologie toegankelijk maken voor elke saloneigenaar, zodat de digitale klantervaring een verlengstuk wordt van de ervaring in de salon.</p>
    </div>
    <!-- DESKTOP -->
    <div class="md:container md:w-full md:max-w-[885px] mx-auto video-w">
        <h2 class="text-[#101357] md:text-40 md:leading-48 text-center font-bold hidden md:block ">Meet Aimy</h2>
        <p class="text-[#121212] text-16 leading-22 text-center my-2 hidden md:block font-normal">Aimy wil technologie toegankelijk maken voor elke saloneigenaar, zodat de digitale klantervaring een verlengstuk wordt van de ervaring in de salon.</p>
        <!-- DESKTOP -->
        <div class="hidden xl:block relative">
            <video id="desktop-video" playsinline loop preload="auto" class="hidden xl:block w-full md:rounded-3xl md:mt-5">
                <source src="https://digitalfc.site/video/Commercial_compr.mp4" type="video/mp4" />
            </video>
            <button id="desktop-play-button" class="hidden xl:block opacity-[0.9] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" width="119" height="120" viewBox="0 0 119 120" fill="none">
                    <g opacity="0.9">
                        <path d="M59.1315 9.99375C31.9125 9.99375 9.84912 32.3813 9.84912 60C9.84912 87.6188 31.9125 110.006 59.1315 110.006C86.3504 110.006 108.414 87.6188 108.414 60C108.414 32.3813 86.3504 9.99375 59.1315 9.99375ZM59.1315 104.363C35.0169 104.363 15.3927 84.45 15.3927 59.9813C15.3927 35.5125 35.0169 15.6188 59.1315 15.6188C83.246 15.6188 102.87 35.5313 102.87 60C102.87 84.4688 83.246 104.381 59.1315 104.381V104.363Z" fill="white"/>
                        <path d="M80.622 56.7563L48.8019 37.9688C48.2106 37.6125 47.5638 37.4625 46.954 37.4625C45.0322 37.4625 43.2583 39.0375 43.2583 41.2125V78.7875C43.2583 80.9813 45.0322 82.5375 46.954 82.5375C47.5823 82.5375 48.2106 82.3688 48.8019 82.0313L80.622 63.2438C83.0796 61.8 83.0796 58.2 80.622 56.7563ZM48.7834 75.525V44.475L75.0784 60L48.7834 75.525Z" fill="white"/>
                    </g>
                </svg>
            </button>
        </div>

        <!-- MOBILE -->
        <div class="block xl:hidden relative">
            <video id="mobile-video" playsinline loop preload="auto" class=" w-full md:rounded-3xl mt-1" style="background-image: url('https://digitalfc.site/video/videoteaser.jpg');background-size: cover;">
                <source src="https://digitalfc.site/video/Commercial_compr.mp4" type="video/mp4" />
            </video>
            <button id="mobile-play-button" class="opacity-[0.9] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="231" height="202" viewBox="0 0 231 202" fill="none">
                  <rect x="0.653473" y="-10" width="229.693" height="228" rx="114" fill="url(#paint0_radial_241_3543)"/>
                    <g opacity="0.9">
                        <path d="M115.292 75.7787C99.9308 75.7787 87.4792 88.4132 87.4792 104C87.4792 119.587 99.9308 132.221 115.292 132.221C130.653 132.221 143.105 119.587 143.105 104C143.105 88.4132 130.653 75.7787 115.292 75.7787ZM115.292 129.036C101.683 129.036 90.6077 117.799 90.6077 103.989C90.6077 90.1803 101.683 78.9532 115.292 78.9532C128.901 78.9532 139.976 90.1909 139.976 104C139.976 117.809 128.901 129.047 115.292 129.047V129.036Z" fill="white"/>
                        <path d="M127.42 102.169L109.462 91.5665C109.129 91.3655 108.764 91.2808 108.42 91.2808C107.335 91.2808 106.334 92.1697 106.334 93.3972V114.603C106.334 115.841 107.335 116.719 108.42 116.719C108.774 116.719 109.129 116.624 109.462 116.433L127.42 105.831C128.807 105.016 128.807 102.984 127.42 102.169ZM109.452 112.762V95.2384L124.292 104L109.452 112.762Z" fill="white"/>
                    </g>
                </svg>
            </button>
        </div

		
    </div>
</section>


<!-- USP -->
<!-- DESKTOP -->
<section class="hidden md:block">
    <div class="container grid grid-cols-2 gap-5 items-center">
        <div class="col-span-1 relative flex items-center">

            <div class="swiper-container overflow-hidden">
                <div class="swiper-wrapper">
              
                            <div class="swiper-slide relative sm:px-5">
                                <img class="w-full h-auto" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/aimy-boekingen-widget.webp" alt="">
                            </div>

                            <div class="swiper-slide relative sm:px-5">
                                <img class="w-full h-auto" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/Whatsapp-Chat_auto_x2.png" alt="">
                            </div>

                            <div class="swiper-slide relative sm:px-5">
                                <img class="w-full h-auto" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/Group-1166.png" alt="">
                            </div>

                            <div class="swiper-slide relative sm:px-5">
                                <img class="w-full h-auto" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/Group-1176-1.png" alt="">
                            </div>
               
                </div>
            </div>
            <div class="pagination_container h-5">
                <div class="swiper-pagination_simple"></div>
                <div class="swiper-pagination2"></div>
            </div>
        </div>
        <div class="col-span-1 max-w-[546px]">
            <p class="text-22 leading-30 font-bold text-[#8789AB]">Slimme tools voor saloneigenaren</p>
            <h3 class="text-[#101357] text-24 leading-32 md:text-40 md:leading-48 font-bold mb-3">Waarom Aimy?</h3>
        
                    <div class="flex flex-row items-center mb-4 last-of-type:mb-0 animation-fade-in usp-item">
                        <span class="block w-full max-w-[80px]">
                            <img class="w-8 h-auto" src="https://meetaimy.com/lp/wp-content/themes/day-six/img/icons-acf/widget.svg">
                        </span>
                        <div class="grid gap-1 ml-2">
                            <p class="text-[#101357] text-16 leading-22 font-bold">Handige afsprakenwidget</p>
                            <p class="text-[#121212] text-16 leading-22">Via de superhandige widget maken klanten afspraken online via je website.</p>
                            <a id="#" class=" text-14 leading-18 text-[#00A0A0] underline" href="#">Lees meer</a>
                        </div>
                    </div>
                    
                    <div class="flex flex-row items-center mb-4 last-of-type:mb-0 animation-fade-in usp-item">
                        <span class="block w-full max-w-[80px]">
                            <img class="w-8 h-auto" src="https://meetaimy.com/lp/wp-content/themes/day-six/img/icons-acf/whatsapp.svg">
                        </span>
                        <div class="grid gap-1 ml-2">
                            <p class="text-[#101357] text-16 leading-22 font-bold">Reserveren via Whatsapp</p>
                            <p class="text-[#121212] text-16 leading-22">Steeds meer klanten maken anno 2023 afspraken via Whatsapp. Aimy staat hen 24/7 te woord, zodat jij hier geen omkijken naar hebt.</p>
                            <a id="#" class=" text-14 leading-18 text-[#00A0A0] underline" href="#">Lees meer</a>
                        </div>
                    </div>  

                    <div class="flex flex-row items-center mb-4 last-of-type:mb-0 animation-fade-in usp-item">
                        <span class="block w-full max-w-[80px]">
                            <img class="w-8 h-auto" src="https://meetaimy.com/lp/wp-content/themes/day-six/img/icons-acf/agenda.svg">
                        </span>
                        <div class="grid gap-1 ml-2">
                            <p class="text-[#101357] text-16 leading-22 font-bold">Online agenda</p>
                            <p class="text-[#121212] text-16 leading-22">In de online agenda voegt Aimy al jouw afspraken automatisch toe.</p>
                            <a id="#" class=" text-14 leading-18 text-[#00A0A0] underline" href="#">Lees meer</a>
                        </div>
                    </div>  
             
                    <div class="flex flex-row items-center mb-4 last-of-type:mb-0 animation-fade-in">
                        <span class="block w-full max-w-[80px]"></span>
                        <div class="grid gap-1 ml-2">
                            <p class="text-[#8789AB] text-16 leading-22 font-bold">+ nog vele andere handige features</p>
                        </div>
                    </div>  
        </div>
    </div>
</section>

<!-- MOBILE -->
<section class="md:hidden container">
    <div class="">
        <h3 class="text-[#121212] text-24 leading-32 md:text-40 md:leading-48 font-bold text-center">Waarom Aimy?</h3>
        <p class="text-16 leading-24 font-bold text-[#8789AB] text-center mb-3">Slimme tools voor saloneigenaren</p>
    </div>
    <div class="swiper-mobile relative md:pb-5 overflow-hidden overflow-y-visible">
        <div class="swiper-wrapper">
      
                    <div class="swiper-slide relative">
                        <h3 class="text-black text-16 leading-22 font-bold text-center">Handige afsprakenwidget</h3>
                        <p class="text-black text-16 leading-22 text-center mt-1 mb-2">Via de superhandige widget maken klanten afspraken online via je website.</p>
                        <div class="relative">
                            <span class="absolute top-0 left-5">
                                <img src="https://meetaimy.com/lp/wp-content/themes/day-six/img/icons-acf/widget.svg">
                            </span>
                            <img class="w-full h-full pb-5" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/aimy-boekingen-widget.webp" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide relative">
                        <h3 class="text-black text-16 leading-22 font-bold text-center">Reserveren via Whatsapp</h3>
                        <p class="text-black text-16 leading-22 text-center mt-1 mb-2">Steeds meer klanten maken anno 2023 afspraken via Whatsapp. Aimy staat hen 24/7 te woord, zodat jij hier geen omkijken naar hebt.</p>
                        <div class="relative">
                            <span class="absolute top-0 left-5">
                                <img src="https://meetaimy.com/lp/wp-content/themes/day-six/img/icons-acf/whatsapp.svg">
                            </span>
                            <img class="w-full h-full pb-5" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/Whatsapp-Chat_auto_x2.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide relative">
                        <h3 class="text-black text-16 leading-22 font-bold text-center">Online agenda</h3>
                        <p class="text-black text-16 leading-22 text-center mt-1 mb-2">In de online agenda voegt Aimy al jouw afspraken automatisch toe.</p>
                        <div class="relative">
                            <span class="absolute top-0 left-5">
                                <img src="https://meetaimy.com/lp/wp-content/themes/day-six/img/icons-acf/agenda.svg">
                            </span>
                            <img class="w-full h-full pb-5" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/Group-1166.png" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide relative">
                        <h3 class="text-black text-16 leading-22 font-bold text-center">Digitale kassa</h3>
                        <p class="text-black text-16 leading-22 text-center mt-1 mb-2">Factureren en betalingen ontvangen kan niet eenvoudiger: op basis van afspraakgegevens draai je automatisch de bon uit.</p>
                        <div class="relative">
                            <span class="absolute top-0 left-5">
                                <img src="https://meetaimy.com/lp/wp-content/themes/day-six/img/icons-acf/kassa.svg">
                            </span>
                            <img class="w-full h-full pb-5" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/Group-1176-1.png" alt="#">
                        </div>
                    </div>
     
        </div>
        
    </div>
    <div class="relative w-full">
        <div class="absolute flex justify-between w-full">
            <div class="swiper-button-prev w-[25px] after:content-[''] flex flex-col items-start h-fit"> 
                <?php include get_template_directory() . '/img/icons/arrow-swiper-left.php'; ?>
                <p class="pushHtml-prev mt-1 text-14 leading-18 font-bold text-[#AEAEAE] text-start"></p>
            </div>
            <div class="swiper-button-next after:content-[''] w-[25px] flex flex-col items-end h-fit"> <?php include get_template_directory() . '/img/icons/arrow-swiper-right.php'; ?>
                <p class="pushHtml-next mt-1 text-14 leading-18 font-bold text-[#AEAEAE] text-end"></p>
            </div>
        </div>
    </div>
    <!-- <a id="<?php the_field("link_id_usp"); ?>" class=" text-14 leading-18 font-bold text-[#00A0A0] underline mt-7 block text-center " href="<?php the_field("link_url_usp"); ?>"><?php the_field("link_text_usp"); ?></a> -->
</section>


<!-- DEMO AANVRAGEN -->
<section class="bg-white mt-[90px] md:mt-[130px] relative ">
    
        <div class="md:hidden">
            <svg width="100%" height="auto" viewBox="0 0 375 66" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <rect id="path-zb-qx6wzhs-1" x="0" y="0" width="375" height="66"></rect>
                    <linearGradient x1="50%" y1="2.86765%" x2="50%" y2="80.7354178%" id="linearGradient-zb-qx6wzhs-3">
                        <stop stop-color="#E7E7EE" stop-opacity="0.65" offset="41.6463%"></stop>
                        <stop stop-color="#D9D9D9" stop-opacity="0" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rectangle-3">
                        <mask id="mask-zb-qx6wzhs-2" fill="white">
                            <use xlink:href="#path-zb-qx6wzhs-1"></use>
                        </mask>
                        <g id="Rectangle"></g>
                        <g id="Group" mask="url(#mask-zb-qx6wzhs-2)" fill="url(#linearGradient-zb-qx6wzhs-3)" fill-rule="nonzero">
                            <path d="M167.866,48.6589305 C96.9535,71.1665305 26.4085,62.1881305 0,54.8854305 L0,328.032031 L375,328.032031 L375,9.71626073e-15 C288.885,9.71626073e-15 256.506,20.5244305 167.866,48.6589305 Z" id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    <div class="bg-[#efeff3] md:bg-transparent pt-6 md:pt-[unset]">
        <div class="overflow-hidden relative">
            <div class="container flex justify-between items-center relative overflow-hidden">
                <div class="h-full flex flex-col justify-center pb-5 z-[2] mx-auto">
                    <h3 class="text-[#101357] text-24 leading-32 md:text-40 md:leading-48 font-bold text-center md:text-start max-w-[340px] md:max-w-[450px] mx-auto md:mx-[unset]">Al 1000+ salons vertrouwen op Aimy</h3>
                    <p class="text-16 leading-22 my-2 text-center md:text-start text-[#121212] max-w-[450px] xl:max-w-[550px] mx-auto md:mx-[unset]">Aimy is de snelst groeiende salon software. Niet alleen in Nederland, maar ook in het buitenland helpt Aimy steeds meer saloneigenaren. Ben je ook benieuwd hoe Aimy werkt? Vraag een gratis (digitale) demo aan!</p>
                    <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full mt-2 bg-green px-3 flex hover-remove justify-center items-center button-green w-fit animation-hero mx-auto md:mr-auto md:ml-[unset]" href="#">Vraag een demo aan</a>
                </div>
                <div class="hidden md:block relative rounded-t-3xl overflow-hidden h-[546px] w-[546px]">
                    <img class="w-full h-full object-cover rounded-t-3xl min-h-[550px] pb-[1px] md:pb-0 inner-img" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/DSC00119-2-1.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 hidden md:block">
            <svg width="100%" height="auto" viewBox="0 0 1404 133" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rectangle-2" fill-rule="nonzero">
                        <g id="Group" transform="translate(0, 0)" fill="#FFFFFF" fill-opacity="0.4">
                            <path d="M1063.498,69.3269742 C1209.834,103.927774 1350.65,75.1252742 1402.766,56.3991742 L1408.786,136.341774 L8.75,241.768774 L0,125.573774 C0,125.573774 144.494,153.020774 229.956,132.095774 C358.376,100.651774 465.09,15.7641742 638.648,2.6946442 C812.2063,-10.3749258 880.579,26.0764742 1063.498,69.3269742 Z" id="Path"></path>
                        </g>
                        <g id="Group" transform="translate(0, 0)" fill="#EFEFF4">
                            <path d="M1064.719,98.346606 C1208.043,143.838006 1350.625,125.691006 1404,110.931006 L1404,191.100006 L0,191.100006 L0,74.575606 C0,74.575606 142.025,112.796006 228.817,98.346606 C359.236,76.634806 472.023,0 646.072,0 C820.1217,0 885.564,41.482706 1064.719,98.346606 Z" id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        </div>
</section>

<section class="bg-gradient-to-b from-[#efeff3] to-white relative section-stop-img">
<div class="container grid grid-cols-6 gap-5 pt-6 mb-8 md:mb-0">

            <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="https://meetaimy.com/lp/wp-content/uploads/2023/02/hair-plaza.png" alt="">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="https://meetaimy.com/lp/wp-content/uploads/2023/02/beichies.png" alt="">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="https://meetaimy.com/lp/wp-content/uploads/2023/02/pro-solo-professional-haircoaches.png" alt="">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="https://meetaimy.com/lp/wp-content/uploads/2023/02/delete-waxing.png" alt="">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="https://meetaimy.com/lp/wp-content/uploads/2023/02/ami-kappers.png" alt="">
            </div>

             <div class="col-span-2 md:col-span-1 flex justify-center">
                <img class="w-full h-auto aspect-[3/2] object-contain " src="https://meetaimy.com/lp/wp-content/uploads/2023/02/the-finest-hair-solutions.png" alt="">
            </div>

</div>




<!-- CASES  -->

<div class="md:container mb-10 mt-5 md:mt-10 section-stop-img-mobile">
    <h3 class="text-[#101357] text-24 leading-32 md:text-40 md:leading-48 font-bold mb-1 md:mb-1 text-center">Klantcases</h3>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
      
                    <div class="swiper-slide h-auto pb-5 pt-4 px-1">
                        <img class="w-8 h-8 object-cover rounded-xl mx-auto mb-[-40px]" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/2021_THEHAIRBOUTIQUE_181_web-e1644397651553-1196x1536-1.webp" alt="">
                        <div class="pt-4 px-2 card-cases flex flex-col h-full">
                            <p class="mt-2 text-16 leading-22  md:text-14 md:leading-18 font-normal text-[#121212] pb-2 md:pb-0">"Aimy is voor ons een goede match, omdat zij net als wij een jong bedrijf zijn, dat altijd up-to-date is en meegaat met de laatste ontwikkelingen.”</p>
                            <p class="mt-2 text-14 leading-18 font-bold text-[#101357] hidden md:block">- Lindy & Marielle, eigenaressen The Hair Boutique</p>
                        </div>
                    </div>

                    <div class="swiper-slide h-auto pb-5 pt-4 px-1">
                        <img class="w-8 h-8 object-cover rounded-xl mx-auto mb-[-40px]" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/Hair-Plaza_0018-1405x1536-1.webp" alt="">
                        <div class="pt-4 px-2 card-cases flex flex-col h-full">
                            <p class="mt-2 text-16 leading-22  md:text-14 md:leading-18 font-normal text-[#121212] pb-2 md:pb-0">“Wat leuk is aan het werken met Aimy, is dat je nu ook een sparringpartner hebt om de digitale klantervaring te verbeteren."</p>
                            <p class="mt-2 text-14 leading-18 font-bold text-[#101357] hidden md:block">– Huub Eysink, eigenaar Hair Plaza</p>
                        </div>
                    </div>

                    <div class="swiper-slide h-auto pb-5 pt-4 px-1">
                        <img class="w-8 h-8 object-cover rounded-xl mx-auto mb-[-40px]" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/Schermafbeelding-2021-09-08-om-13.34.31.webp" alt="">
                        <div class="pt-4 px-2 card-cases flex flex-col h-full">
                            <p class="mt-2 text-16 leading-22  md:text-14 md:leading-18 font-normal text-[#121212] pb-2 md:pb-0">“Mijn voornaamste reden om met Aimy te gaan samenwerken was hun visie en digitale ervaring, die echt aansluiten bij onze plannen en toekomst."</p>
                            <p class="mt-2 text-14 leading-18 font-bold text-[#101357] hidden md:block">– Riklis Karto</p>
                        </div>
                    </div>
         
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <a id="#" class=" text-14 leading-18 font-bold text-[#00A0A0] mt-4 underline block text-center " href="#">Bijk alle klantcases</a>
</div>
</section>



<!-- CALL TO ACTION -->
<section class=" mt-10 relative overflow-hidden">
    <div class="absolute bottom-0 right-0 left-0 w-full h-auto -z-0 hidden md:block">
        <?php include get_template_directory() . '/img/icons/background-svg.php'; ?>
    </div>
    <div class="absolute bottom-0 right-0 left-0 w-full h-auto -z-0 md:hidden">
        <?php include get_template_directory() . '/img/icons/footer-overlay.php'; ?>
    </div>
    <div class="container grid grid-cols-5 gap-5 relative">
        <div class="col-span-5 md:col-span-3 h-full flex flex-col justify-center md:pb-5 md:pr-5">
            <h3 class="text-[#101357] text-24 leading-32 md:text-40 md:leading-48 font-bold md:pr-10 text-center md:text-start">Starten of overstappen</h3>
            <p class="text-16 leading-22 my-2 text-center md:text-start text-[#121212]">Als kapsalon wil je dat de keuze voor salonsoftware tijd bespaart en geen gedoe oplevert. <br><br>Daarom krijg je als nieuwe klant automatisch Zorgeloze Start Service. En opstartkosten? Die nemen wij tijdelijk voor onze rekening. <br><br>Wacht dus niet langer en probeer Aimy gratis!</p>
            <a id="#" class="text-14 leading-18 text-white font-bold h-5 rounded-full mt-2 bg-green px-3 flex hover-remove justify-center items-center button-green w-fit animation-hero mx-auto md:mr-auto md:ml-[unset]" href="#">Probeer Aimy 21 dagen gratis</a>
        </div>
        <div class="col-span-5 md:col-span-2  md:pl-5">
            <img class="w-full h-auto px-5 md:px-0" src="https://meetaimy.com/lp/wp-content/uploads/2023/02/aimy-boekingen-widget.webp" alt="">
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>