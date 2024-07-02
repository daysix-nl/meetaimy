<?php 
/**
 * Template name: Archive cases
 */



 get_header(); ?>
 <main>
     <?php the_content(); ?>
 </main>
<?php get_footer(); ?>

<script>
    const button = document.querySelector("header a.active")
window.addEventListener("load", (event) => {
    button.classList.add("active")
});
</script>