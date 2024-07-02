<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header(); ?>
 <main>
     <?php the_content(); ?>
 </main>
<?php get_footer(); ?>

<script>
    const button = document.querySelector(".diensten-dropdown-button")
window.addEventListener("load", (event) => {
    button.classList.add("active")
});
</script>