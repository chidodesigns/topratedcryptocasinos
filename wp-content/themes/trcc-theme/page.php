<?php
get_header();
?>

<div class="container" id="page">

    <h2 class="text-center mt-5">
        <?php echo the_title(); ?>
        <span class="bottom-line"></span>
    </h2>
    <section class="my-4">
        <?php echo the_content(); ?>
    </section>

</div>


<?php get_footer(); ?>