<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <div class="nytmedlem-container">

            <?php
$titel= get_field ('titel');
$titel0= get_field ('titel0');
$titel2= get_field ('titel2');
$titel3= get_field ('titel3');
$info = get_field('info');
$info2 = get_field('info2');
$info3 = get_field('info3');
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
            ?>

<div class="mainsection row g-0 text-wrap d-flex justify-content-center">

<div class='col'>
  <div class = 'texti'>
  <h1 class="fs-3 fw-semibold"><?php echo $titel ?></h1>
  <img src="<?php echo esc_url($img['url']); ?>" class="img-fluid" alt="...">
  <p class="nam fs-6 lh-sm"><?php echo $info ?></p>
  
  <table class="table">
    <thead>
        <tr>
            <th><?php pll_e('Varighed'); ?></th>
            <th><?php pll_e('Point'); ?></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>1 <?php pll_e('time'); ?></td>
        <td>0,25 <?php pll_e('Point'); ?></td>
    </tr>
    <tr>
        <td>2 <?php pll_e('timer'); ?></td>
        <td>0,50 <?php pll_e('Point'); ?></td>
    </tr>
    <tr>
        <td>3 <?php pll_e('timer'); ?></td>
        <td>0,75 <?php pll_e('Point'); ?></td>
    </tr>
    <tr>
        <td>4 <?php pll_e('timer'); ?></td>
        <td>1,00 <?php pll_e('Point'); ?></td>
    </tr>
    <tr>
        <td>5 <?php pll_e('timer'); ?></td>
        <td>1,25 <?php pll_e('Point'); ?></td>
    </tr>
    <tr>
        <td>6 <?php pll_e('timer'); ?></td>
        <td>1,50 <?php pll_e('Point'); ?></td>
    </tr>
    <tr>
        <td>7 <?php pll_e('timer'); ?></td>
        <td>1,75 <?php pll_e('Point'); ?></td>
    </tr>
    <tr>
        <td>8 <?php pll_e('timer'); ?></td>
        <td>2,00 <?php pll_e('Point'); ?></td>
    </tr>
    <tr>
        <td><?php pll_e('Over 8 '); ?><?php pll_e('timer'); ?></td>
        <td>3,00 <?php pll_e('Point'); ?></td>
    </tr>
</tbody>

</table>

<p class="nam fs-6 lh-sm"><?php echo $titel0 ?></p>

<table class="table">
    <thead>
        <tr>
            <th><?php pll_e('Opgave'); ?></th>
            <th><?php pll_e('Point'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php pll_e('Formand'); ?></td>
            <td>10 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td><?php pll_e('Kasserer'); ?></td>
            <td>10 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td><?php pll_e('Medlem bestyrelse'); ?></td>
            <td>2 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td><?php pll_e('Medlem udvalg'); ?></td>
            <td>2 <?php pll_e('Point'); ?></td>
        </tr>
    </tbody>
</table>

<h1 class="nam fs-5 fw-semibold"><?php echo $titel2 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info2 ?></p>

  <table class="table">
    <thead>
    <tr>
    <th><?php pll_e('Hold'); ?></th>
    <th><?php pll_e('Træningsgange på is'); ?></th>
    <th><?php pll_e('Point'); ?></th>
</tr>
    </thead>
    <tbody>
        <tr>
            <td>Skøjteskolen 1</td>
            <td>2</td>
            <td>2,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Skøjteskolen 2</td>
            <td>3</td>
            <td>3,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>TeenBegynder 1</td>
            <td>2</td>
            <td>2,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>TeenBegynder 2</td>
            <td>3</td>
            <td>3,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Voksenhold 1</td>
            <td>2</td>
            <td>2,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Voksenhold 2</td>
            <td>3</td>
            <td>3,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Funmini 1</td>
            <td>2</td>
            <td>2,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Funmini 2</td>
            <td>3</td>
            <td>3,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>TeenFun 1</td>
            <td>2</td>
            <td>2,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>TeenFun 2</td>
            <td>3</td>
            <td>3,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Funskate 3</td>
            <td>4</td>
            <td>4,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Funskate Teen 3</td>
            <td>4</td>
            <td>4,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Funskate 1</td>
            <td>4</td>
            <td>5,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Funskate 2</td>
            <td>5</td>
            <td>6,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Funskate Voksen</td>
            <td>4</td>
            <td>5,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Solodans 1</td>
            <td>2</td>
            <td>2,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Solodans 2</td>
            <td>3</td>
            <td>3,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Solodans 3</td>
            <td>4</td>
            <td>4,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Solodans 4</td>
            <td>5</td>
            <td>5,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Sportshold 1</td>
            <td>2</td>
            <td>2,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Sportshold 2</td>
            <td>3</td>
            <td>3,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>Sportshold 3</td>
            <td>4</td>
            <td>4,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>K-Hold</td>
            <td>5</td>
            <td>6,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>K1</td>
            <td>6</td>
            <td>7,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>K2</td>
            <td>6</td>
            <td>7,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>K3</td>
            <td>6</td>
            <td>7,00 <?php pll_e('Point'); ?></td>
        </tr>
        <tr>
            <td>M1</td>
            <td>9</td>
            <td>10,00 <?php pll_e('Point'); ?></td>
        </tr>
    </tbody>
</table>

<h1 class="nam fs-5 fw-semibold"><?php echo $titel3 ?></h1>
<p class="fs-6 lh-sm"><?php echo $info3 ?></p>


</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>