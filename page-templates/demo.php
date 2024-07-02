<?php
/**
 * Template name: Demo aanvragen
 */


 get_header(); ?>
 <main>
<section>
    <div class="container pt-6 md:pt-8 pb-4 md:pb-6">
        <h1 class="text-40 leading-48 md:text-54 md:leading-62 xl:text-64 xl:leading-72 font-bold text-[#101357] text-center max-w-[343px] md:max-w-[unset] mx-auto">Demo aanvragen</h1>
        <p class="max-w-[343px] md:max-w-[660px] mx-auto text-center text-[#8789AB] font-bold pt-[16px] text-14 leading-20 md:text-16 md:leading-22">Je ontvangt de demo video direct in jouw mailbox na het verzenden van onderstaand formulier. Zo kun je de demo video bekijken wanneer het jou uitkomt!</p>
    </div>
</section>


<section>
    <div class="container pb-6 md:pb-8">
        <div class="max-w-[546px] mx-auto">
            <div class="boxshadowsmall md:p-[25px] rounded-[8px] contact">
                <!-- <h2 class="text-16 leading-22 md:text-22 md:leading-30 font-bold text-[#101357] text-center pb-[15px]">Stuur ons een bericht</h2> -->
                <?php echo do_shortcode( '[gravityform id="2"]' ); ?>
            </div>
        </div>
    </div>
</section>
</main>


<?php get_footer('contact'); ?>