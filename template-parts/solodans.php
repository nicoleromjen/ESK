<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <div class="nytmedlem-container">

            <?php
$titel = get_field ('titel');
$info = get_field('info');
$titel2 = get_field ('titel_2');
$info2 = get_field('info_2');

if ($info) {
  $info = nl2br($info);
}

if ($info2) {
  $info2 = nl2br($info2);
}
        ?>

<div class="mainsection row g-0 text-wrap d-flex justify-content-center">

<div class='col'>
  <div class = 'texti'>
    <h1 class="fs-3 fw-semibold"><?php echo $titel ?></h1>
    <p class=" fs-6 lh-sm"><?php echo $info ?></p>
    <p class="nam fs-5 fw-semibold"><?php echo $titel2 ?></p>
    <p class="fs-6 fw-semibold lh-sm"><?php echo $info2 ?></p>
</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>