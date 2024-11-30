<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <div class="nytmedlem-container">

            <?php
$titel = get_field ('titel');
$info = get_field('info');
$img = get_field('img');

if ($info) {
  $info = nl2br($info);
}

            ?>

<div class="mainsection row g-0 text-wrap d-flex justify-content-center">

<div class='col'>
  <div class = 'texti'>
    <h1 class="fs-3 fw-semibold"><?php echo $titel ?></h1>
    <img src="<?php echo esc_url($img['url']); ?>" class="img-fluid" alt="...">
    <p class="nam fs-6 lh-sm"><?php echo $info ?></p>
    <div class="contact-form-container">
    <?php echo do_shortcode('[contact-form-7 id="e6c792b" title="Lej et skab"]'); ?>
</div>
</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>