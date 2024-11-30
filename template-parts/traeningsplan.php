<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <div class="nytmedlem-container">

            <?php

$traening = get_field ('traeningsplan');
$plan = get_field('plan');
            ?>

<div class="mainsection row g-0 text-wrap d-flex justify-content-center">

<div class='col'>
  <div class = 'texti'>
  <h1 class="fs-3 fw-semibold"><?php echo $traening ?></h1>
  <img src="<?php echo esc_url($plan['url']); ?>" class="img-fluid" alt="...">
  
</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>