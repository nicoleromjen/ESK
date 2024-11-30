<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <div class="nytmedlem-container">

            <?php

$titel = get_field ('titel');
$info = get_field('info');
$hold = get_field('hold');
$titel1 = get_field ('titel_1');
$info1 = get_field('info_1');
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
$titel8 = get_field ('titel_8');
$info8 = get_field('info_8');
$titel9 = get_field ('titel_9');
$info9 = get_field('info_9');
$titel10 = get_field ('titel_10');
$info10 = get_field('info_10');
$titel11 = get_field ('titel_11');
$info11 = get_field('info_11');
$titel12 = get_field ('titel_12');
$info12 = get_field('info_12');
$titel13 = get_field ('titel_13');
$info13 = get_field('info_13');
$titel14 = get_field ('titel_14');
$info14 = get_field('info_14');
$titel15 = get_field ('titel_15');
$info15 = get_field('info_15');
$titel16 = get_field ('titel_16');
$info16 = get_field('info_16');
$titel17 = get_field ('titel_17');
$info17 = get_field('info_17');

if ($info) {
    $info = nl2br($info);
  }
  
  if ($info1) {
    $info1 = nl2br($info1);
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
  
  if ($info6) {
    $info6 = nl2br($info6);
  }
  
  if ($info7) {
    $info7 = nl2br($info7);
  }
  
  if ($info8) {
    $info8 = nl2br($info8);
  }
  
  if ($info9) {
    $info9 = nl2br($info9);
  }
  
  if ($info10) {
    $info10 = nl2br($info10);
  }
  
  if ($info11) {
    $info11 = nl2br($info11);
  }
  
  if ($info12) {
    $info12 = nl2br($info12);
  }
  
  if ($info13) {
    $info13 = nl2br($info13);
  }
  
  if ($info14) {
    $info14 = nl2br($info14);
  }
  
  if ($info15) {
    $info15 = nl2br($info15);
  }
  
  if ($info16) {
    $info16 = nl2br($info16);
  }
  
  if ($info17) {
    $info17 = nl2br($info17);
  }
 
            ?>

<div class="mainsection row g-0 text-wrap d-flex justify-content-center">
<div class='col'>
  <div class = 'texti'>
    <h1 class="fs-3 fw-semibold"><?php echo $titel ?></h1>
    <p class="fs-6 lh-sm"><?php echo $info ?></p>
    <img src="<?php echo esc_url($hold['url']); ?>" class="img-fluid" alt="...">
<h1 class="nam fs-5 fw-semibold"><?php echo $titel1 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info1 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel2 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info2 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel3 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info3 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel4 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info4 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel5 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info5 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel6 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info6 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel7 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info7 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel8 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info8 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel9 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info9 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel10 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info10 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel11 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info11 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel12 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info12 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel13 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info13 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel14 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info14 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel15 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info15 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel16 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info16 ?></p>
<h1 class="nam fs-5 fw-semibold"><?php echo $titel17 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info17 ?></p>

</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>