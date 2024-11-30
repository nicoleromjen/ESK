<?php get_header(); ?>
    </div>
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <?php
        $titel = get_field('titel');
        $info = get_field('info');
        $video = get_field('video');
        $img = get_field('img');
        $link1 = get_field('link_1');
        $link2 = get_field('link_2');
        $link3 = get_field('link_3');
        $link4 = get_field('link_4');

        $titel1 = get_field('titel_1');
        $titel2 = get_field('titel_2');
        $titel3 = get_field('titel_3');
        $titel4 = get_field('titel_4');

        if ($info) {
            $info = nl2br($info);
        }
        ?>
<div class='hello'>
<div class="hero-content text-center text-light">
                <p class="fs-2 fw-light"><?php echo $info; ?></p>
                <h1 class="display-3 fw-bold"><?php echo esc_html($titel); ?></h1>
            </div>
       
  <img src="<?php echo esc_url($img['url']); ?>" class="img-fluid" alt="...">

  <section class="site-links">
    <div class="front">
        <div class="links-grid">
            <?php 

            $links = [
                ['url' => $link1, 'title' => $titel1],
                ['url' => $link2, 'title' => $titel2],
                ['url' => $link3, 'title' => $titel3],
                ['url' => $link4, 'title' => $titel4],
            ];

            foreach ($links as $link):
                if (!empty($link['url']) && !empty($link['title'])):
            ?>
                <a href="<?php echo esc_url($link['url']); ?>" rel="noopener noreferrer" class="link-card">
                    <div class="card-content">
                        <h1 class="fs-4 fw-bold"><?php echo esc_html($link['title']); ?></h1>
                    </div>
                </a>
            <?php 
                endif;
            endforeach;
            ?>
            
        </div>
    </div>
</section>


 </div>
 
 
        <div class='container'>  
        <?php if ($video): ?>
            <div class="video-section text-center my-4">
                <video class="rounded shadow" controls autoplay loop muted style="max-width: 80%; height: auto;">
                    <source src="<?php echo esc_url($video); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>



            </div>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>