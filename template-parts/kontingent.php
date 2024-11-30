<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <div class="nytmedlem-container">

            <?php
$priser = get_field('priser');
$gruppe = get_field('gruppe');
$gruppe1 = get_field('gruppe1');
$efterar = get_field('efterar');
$forar = get_field('forar');
$lektion = get_field('lektion');
$skojteleje1 = get_field('skojteleje');

$hold_navn1 = get_field('hold_navn');
$hold_navn2 = get_field('hold_navn2');
$hold_navn3 = get_field('hold_navn3');
$hold_navn4 = get_field('hold_navn4');
$hold_navn5 = get_field('hold_navn5');
$hold_navn6 = get_field('hold_navn6');
$hold_navn11 = get_field('hold_navn1');
$hold_navn21 = get_field('hold_navn21');
$hold_navn31 = get_field('hold_navn31');
$hold_navn41 = get_field('hold_navn41');
$hold_navn51 = get_field('hold_navn51');
$hold_navn61 = get_field('hold_navn61');
$hold_navn12 = get_field('hold_navn12');
$hold_navn22 = get_field('hold_navn22');
$hold_navn32 = get_field('hold_navn32');
$hold_navn42 = get_field('hold_navn42');
$hold_navn52 = get_field('hold_navn52');
$hold_navn62 = get_field('hold_navn62');
$hold_navn13 = get_field('hold_navn13');
$hold_navn23 = get_field('hold_navn23');
$hold_navn33 = get_field('hold_navn33');
$hold_navn43 = get_field('hold_navn43');
$hold_navn53 = get_field('hold_navn53');
$hold_navn63 = get_field('hold_navn63');
$hold_navn14 = get_field('hold_navn14');
$hold_navn24 = get_field('hold_navn24');
$hold_navn34 = get_field('hold_navn34');
$hold_navn44 = get_field('hold_navn44');
$hold_navn54 = get_field('hold_navn54');

$istraening1 = get_field('istraening1');
$istraening2 = get_field('istraening2');
$istraening3 = get_field('istraening3');
$istraening4 = get_field('istraening4');
$istraening5 = get_field('istraening5');
$istraening6 = get_field('istraening6');
$istraening11 = get_field('istraening11');
$istraening21 = get_field('istraening21');
$istraening31 = get_field('istraening31');
$istraening41 = get_field('istraening41');
$istraening51 = get_field('istraening51');
$istraening61 = get_field('istraening61');
$istraening12 = get_field('istraening12');
$istraening22 = get_field('istraening22');
$istraening32 = get_field('istraening32');
$istraening42 = get_field('istraening42');
$istraening52 = get_field('istraening52');
$istraening62 = get_field('istraening62');
$istraening13 = get_field('istraening13');
$istraening23 = get_field('istraening23');
$istraening33 = get_field('istraening33');
$istraening43 = get_field('istraening43');
$istraening53 = get_field('istraening53');
$istraening63 = get_field('istraening63');
$istraening14 = get_field('istraening14');
$istraening24 = get_field('istraening24');
$istraening34 = get_field('istraening34');
$istraening44 = get_field('istraening44');
$istraening54 = get_field('istraening54');

$off_ice1 = get_field('off-ice');
$off_ice2 = get_field('off-ice2');
$off_ice3 = get_field('off-ice3');
$off_ice4 = get_field('off-ice4');
$off_ice5 = get_field('off-ice5');
$off_ice6 = get_field('off-ice6');
$off_ice11 = get_field('off-ice11');
$off_ice0 = get_field('off-ice42');
$off_ice34 = get_field('off-ice34');
$off_ice63 = get_field('off-ice63');

$kontingent1 = get_field('kontingent');
$kontingent2 = get_field('kontingent2');
$kontingent3 = get_field('kontingent3');
$kontingent4 = get_field('kontingent4');
$kontingent5 = get_field('kontingent5');
$kontingent6 = get_field('kontingent6');
$kontingent11 = get_field('kontingent11');
$kontingent21 = get_field('kontingent21');
$kontingent31 = get_field('kontingent31');
$kontingent41 = get_field('kontingent41');
$kontingent51 = get_field('kontingent51');
$kontingent61 = get_field('kontingent61');
$kontingent12 = get_field('kontingent12');
$kontingent22 = get_field('kontingent22');
$kontingent32 = get_field('kontingent32');
$kontingent42 = get_field('kontingent42');
$kontingent52 = get_field('kontingent52');
$kontingent62 = get_field('kontingent62');
$kontingent13 = get_field('kontingent13');
$kontingent23 = get_field('kontingent23');
$kontingent33 = get_field('kontingent33');
$kontingent43 = get_field('kontingent43');
$kontingent53 = get_field('kontingent53');
$kontingent63 = get_field('kontingent63');
$kontingent14 = get_field('kontingent14');
$kontingent24 = get_field('kontingent24');
$kontingent34 = get_field('kontingent34');

$kont11 = get_field('kontingentsamlet11');
$kont21 = get_field('kontingentsamlet21');
$kont31 = get_field('kontingentsamlet31');
$kont41 = get_field('kontingentsamlet41');
$kont51 = get_field('kontingentsamlet51');
$kont61 = get_field('kontingentsamlet61');
$kont12 = get_field('kontingentsamlet12');
$kont22 = get_field('kontingentsamlet22');
$kont32 = get_field('kontingentsamlet32');
$kont42 = get_field('kontingentsamlet42');
$kont52 = get_field('kontingentsamlet52');
$kont62 = get_field('kontingentsamlet62');
$kont13 = get_field('kontingentsamlet13');
$kont23 = get_field('kontingentsamlet23');
$kont33 = get_field('kontingentsamlet33');
$kont43 = get_field('kontingentsamlet43');
$kont53 = get_field('kontingentsamlet53');
$kont63 = get_field('kontingentsamlet63');
$kont14 = get_field('kontingentsamlet14');
$kont24 = get_field('kontingentsamlet24');
$kont34 = get_field('kontingentsamlet34');

$titel0 = get_field ('titel0');
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

if ($info6) {
  $info6 = nl2br($info6);
}

if ($info7) {
  $info7 = nl2br($info7);
}
            ?>

<div class="mainsection row g-0 text-wrap d-flex justify-content-center">

<div class='col'>
  <div class = 'texti'>
  <h1 class="fs-3 fw-semibold"><?php echo $priser ?></h1>
  <p class="nam fs-5 fw-semibold"><?php echo $gruppe ?></p>
  <table class="table">
  <thead>
    <tr>
      <th><?php pll_e("Hold")?></th>
      <th><?php pll_e("Istræning pr. uge")?></th>
      <th><?php pll_e("Off-ice pr. uge") ?></th>
      <th><?php pll_e("Leje af skøjter pr. måned") ?></th>
      <th><?php pll_e("Kontingent pr. periode (Efterår/Forår)") ?></th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td><?php echo $hold_navn1; ?></td>
      <td><?php echo $istraening1; ?></td>
      <td><?php echo $off_ice1; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent1; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn2; ?></td>
      <td><?php echo $istraening2; ?></td>
      <td><?php echo $off_ice2; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent2; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn3; ?></td>
      <td><?php echo $istraening3; ?></td>
      <td><?php echo $off_ice3; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent3; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn4; ?></td>
      <td><?php echo $istraening4; ?></td>
      <td><?php echo $off_ice4; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent4; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn5; ?></td>
      <td><?php echo $istraening5; ?></td>
      <td><?php echo $off_ice5; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent5; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn6; ?></td>
      <td><?php echo $istraening6; ?></td>
      <td><?php echo $off_ice6; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent6; ?></td>
    </tr>
  </tbody>
</table>

<p class="fs-6"><?php echo $efterar ?></p>
<p class="fs-6"><?php echo $forar ?></p>
  <p class="nam fw-semibold fs-5"><?php echo $gruppe1 ?></p>
  <table class="table">
  <thead>
    <tr>
    <th><?php pll_e("Hold")?></th>
      <th><?php pll_e("Istræning pr. uge")?></th>
      <th><?php pll_e("Off-ice pr. uge") ?></th>
      <th><?php pll_e("Lektioner")?></th>
      <th><?php pll_e("Leje af skøjter pr. måned")?></th>
      <th><?php pll_e("Kontingent pr. måned")?></th>
      <th><?php pll_e("Kontingent samlet")?></th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td><?php echo $hold_navn11; ?></td>
      <td><?php echo $istraening1; ?></td>
      <td><?php echo $off_ice1; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent11; ?></td>
      <td><?php echo $kont11; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn21; ?></td>
      <td><?php echo $istraening2; ?></td>
      <td><?php echo $off_ice2; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent21; ?></td>
      <td><?php echo $kont21; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn31; ?></td>
      <td><?php echo $istraening3; ?></td>
      <td><?php echo $off_ice3; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent31; ?></td>
      <td><?php echo $kont31; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn41; ?></td>
      <td><?php echo $istraening4; ?></td>
      <td><?php echo $off_ice4; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent41; ?></td>
      <td><?php echo $kont41; ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn51; ?></td>
      <td><?php echo $istraening51; ?></td>
      <td><?php echo $off_ice4; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent51; ?></td>
      <td><?php echo $kont51; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn61; ?></td>
      <td><?php echo $istraening61; ?></td>
      <td><?php echo $off_ice4; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent61; ?></td>
      <td><?php echo $kont61; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn12; ?></td>
      <td><?php echo $istraening12; ?></td>
      <td><?php echo $off_ice2; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent12; ?></td>
      <td><?php echo $kont12; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn22; ?></td>
      <td><?php echo $istraening22; ?></td>
      <td><?php echo $off_ice2; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent22; ?></td>
      <td><?php echo $kont22; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn32; ?></td>
      <td><?php echo $istraening32; ?></td>
      <td><?php echo $off_ice2; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent32; ?></td>
      <td><?php echo $kont32; ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn42; ?></td>
      <td><?php echo $istraening42; ?></td>
      <td><?php echo $off_ice0; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent42; ?></td>
      <td><?php echo $kont42; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn52; ?></td>
      <td><?php echo $istraening52; ?></td>
      <td><?php echo $off_ice0; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent52; ?></td>
      <td><?php echo $kont52; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn62; ?></td>
      <td><?php echo $istraening62; ?></td>
      <td><?php echo $off_ice0; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent62; ?></td>
      <td><?php echo $kont62; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn13; ?></td>
      <td><?php echo $istraening13; ?></td>
      <td><?php echo $off_ice0; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent13; ?></td>
      <td><?php echo $kont13; ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn23; ?></td>
      <td><?php echo $istraening23; ?></td>
      <td><?php echo $off_ice1; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent23; ?></td>
      <td><?php echo $kont23; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn33; ?></td>
      <td><?php echo $istraening33; ?></td>
      <td><?php echo $off_ice1; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent33; ?></td>
      <td><?php echo $kont33; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn43; ?></td>
      <td><?php echo $istraening43; ?></td>
      <td><?php echo $off_ice1; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent43; ?></td>
      <td><?php echo $kont43; ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn53; ?></td>
      <td><?php echo $istraening53; ?></td>
      <td><?php echo $off_ice2; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent53; ?></td>
      <td><?php echo $kont53; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn63; ?></td>
      <td><?php echo $istraening63; ?></td>
      <td><?php echo $off_ice2; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent63; ?></td>
      <td><?php echo $kont63; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn14; ?></td>
      <td><?php echo $istraening14; ?></td>
      <td><?php echo $off_ice34; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent14; ?></td>
      <td><?php echo $kont14; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn24; ?></td>
      <td><?php echo $istraening24; ?></td>
      <td><?php echo $off_ice34; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent24; ?></td>
      <td><?php echo $kont24; ?></td>
    </tr>
    <tr>
      <td><?php echo $hold_navn34; ?></td>
      <td><?php echo $istraening34; ?></td>
      <td><?php echo $off_ice34; ?></td>
      <td><?php echo $lektion; ?></td>
      <td><?php echo $skojteleje1; ?></td>
      <td><?php echo $kontingent34; ?></td>
      <td><?php echo $kont34; ?></td>
    </tr>
  </tbody>

</table>
<p class="nam fw-semibold fs-5"><?php pll_e("Øvrige Priser")?></p>
<table class= 'table'>
     <tbody>
        <tr>
            <td><?php pll_e("Skøjteleje pr. måned")?></td>
            <td>100 kr.</td>
        </tr>
        <tr>
            <td><?php pll_e("Skøjteslibning pr. gang (egne skøjter)")?></td>
            <td>80 kr.</td>
        </tr>
        <tr>
            <td><?php pll_e("Lektion ved Igor/Lena")?></td>
            <td>295 kr.</td>
        </tr>
        <tr>
            <td><?php pll_e("Lektion ved Marie Louise")?></td>
            <td>200 kr.</td>
        </tr>
        <tr>
            <td><?php pll_e("Extra træning lørdage")?></td>
            <td>50 kr.</td>
        </tr>
        <tr>
            <td><?php pll_e("Klubnåleprøve udenfor normal træningstid")?></td>
            <td>50 kr.</td>
        </tr>
        <tr>
            <td><?php pll_e("Klubnåle")?></td>
            <td>60 kr.</td>
        </tr>
    </tbody>
</table>

<p class="nam fs-5 fw-semibold"><?php echo $titel ?></p>
    <p class="fs-6 lh-sm"><?php echo $info ?></p>
    <p class="nam fs-5 fw-semibold"><?php echo $titel2 ?></p>
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

</div>
</div>

</div>


</div>

<?php endwhile ?>
<?php endif ?>


<?php get_footer() ?>