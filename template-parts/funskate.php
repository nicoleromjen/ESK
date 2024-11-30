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
$titel3 = get_field ('titel_3');
$info3 = get_field('info_3');
$titel4 = get_field ('titel_4');
$info4 = get_field('info_4');
$titel5 = get_field ('titel_5');
$info5 = get_field('info_5');
$titel6 = get_field ('titel_6');
$info6 = get_field('info_6');
$titel7 = get_field ('titel_7');
$info7 = get_field('info_7');
$img = get_field('img');

if ($info) {
  $info = nl2br($info);
}

if ($info2) {
  $info2 = nl2br($info2);
}

if ($info3) {
  $info3 = nl2br($info3);
}

if ($info4) {
  $info4 = nl2br($info4);
}

if ($info5) {
  $info5 = nl2br($info5);
}

            ?>

<div class="mainsection row g-0 text-wrap d-flex justify-content-center">

<div class='col'>
  <div class = 'texti'>
    <h1 class="  fs-3 fw-semibold"><?php echo $titel ?></h1>
    <img src="<?php echo esc_url($img['url']); ?>" class="img-fluid" alt="...">
    <p class="nam fs-6 lh-sm"><?php echo $info ?></p>
    <p class="nam fs-5 fw-semibold"><?php echo $titel2 ?></p>
    <p class="fs-6 lh-sm"><?php echo $info2 ?></p>
    <h1 class="nam fs-5 fw-semibold"><?php echo $titel3 ?></h1>
    <p class="fs-6 lh-sm"><?php echo $info3 ?></p>
    <h1 class="nam fs-5 fw-semibold"><?php echo $titel4 ?></h1>
    <p class="fs-6 lh-sm"><?php echo $info4 ?></p>
    <h1 class="nam fs-5 fw-semibold"><?php echo $titel5 ?></h1>
    <p class="fs-6 lh-sm"><?php echo $info5 ?></p>

</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>