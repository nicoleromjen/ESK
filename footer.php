
<?php wp_footer(); ?>
</div>

<footer class='footer py-5'>
  <div class='footcontainer'>
    <div class="row">

      <div class="col-md-6">
        <nav class="navbar navbar-expand">
        <h1 class="fs-5"><?php pll_e("Nyttige Links") ?></h1>
            
          <?php 
            wp_nav_menu(array(
              'menu' => 'footer',
              'container' => '',
              'theme_location' => 'footer',
              'items_wrap' => '<ul id="footer-ul" class="navbar-nav">%3$s</ul>',
            ));
          ?>
              <div class="col-md-6 text-center">
        <div class="social-media">
          <a href="mailto:Kontakt@esbjerg-skojteklub.dk" class="social-media-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z" /></svg></a>
          <a href="https://www.instagram.com/esbjerg_skojteklub/" class="social-media-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7Z" /></svg></a>
        <a href="https://www.facebook.com/esbjergskojteklub" class="social-media-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" /></svg></a>
 </div>
        </nav>
      </div>

      </div>

    </div>
  </div>
</footer>



</body>
</html>