<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <div class="nytmedlem-container">

            <?php
$titel= get_field ('titel');
$info = get_field('info');
$img = get_field('img');
  $plan= get_field ('tidsplan');
$liste = get_field('deltagerliste');
$result = get_field('resultater');
$stream= get_field ('livestream');
$cafe = get_field('cafe_meny');

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

  <a href="<?php echo esc_url($plan['url']); ?>" target="_blank" rel="noopener noreferrer">
  <h3 class="nam fs-5 fw-bold"><?php echo esc_html($plan['title']); ?></h3>
  </a>

  <a href="<?php echo esc_url($liste['url']); ?>" target="_blank" rel="noopener noreferrer">
  <h3 class="nam fs-5 fw-bold"><?php echo esc_html($liste['title']); ?></h3>
  </a>

  <a href="<?php echo esc_url($result); ?>" target="_blank" rel="noopener noreferrer">
        <h3 class="nam fs-5 fw-bold"><?php pll_e("Resultater") ?></h3>
    </a>

    <a href="<?php echo esc_url($stream); ?>" target="_blank" rel="noopener noreferrer">
        <h3 class="nam fs-5 fw-bold"><?php pll_e("Livestream") ?></h3>
    </a>

  <a href="<?php echo esc_url($cafe['url']); ?>" target="_blank" rel="noopener noreferrer">
  <h3 class="nam fs-5 fw-bold"><?php echo esc_html($cafe['title']); ?></h3>
  </a>

</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>