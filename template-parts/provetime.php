<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <div class="nytmedlem-container">

            <?php
$titel= get_field ('titel');
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

  <h1 class="nam fs-5 fw-semibold"><?php pll_e("Tilmeld dig til prøvetime"); ?></h1>
<div class="contact-form-container">
    <?php echo do_shortcode('[contact-form-7 id="d393b49" title="Tilmeld dig til prøvetime!"]'); ?>
</div>

</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>