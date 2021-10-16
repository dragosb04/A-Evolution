<?php b4st_footer_before(); ?>

<footer id="site-footer " class="post-box">
  <div class="post-box-acc">
    <div class="container py-3">
      <div class="row">
        <div class="col-12 col-xl-4 col-lg-4">
          <div class="text-center text-sm-left"><b><a href="<?php echo home_url('/'); ?>"><i class="fas fa-home"></i> <?php bloginfo('name'); ?></a></b></div>
        </div>
        <div class="col-12 col-xl-8 col-lg-8 text-center text-sm-right font-weight-bold">
          <span class="d-inline-block"><i class="fas fa-grip-lines-vertical px-1"></i><a href="https://a-evolution.ro/contactadmin" target="_blank"><i class="fas fa-envelope"></i> Contact </a><i class="fas fa-grip-lines-vertical px-1"></i></span>
          <span class="d-inline-block"><a href="https://a-evolution.ro/memberlist.php?mode=team" target="_blank"><i class="fas fa-users"></i> Echipă </a><i class="fas fa-grip-lines-vertical px-1"></i></span>
          <span class="d-inline-block"><a href="https://a-evolution.ro/ucp.php?mode=terms" target="_blank"><i class="fas fa-check"></i> Termeni Forum </a><i class="fas fa-grip-lines-vertical px-1"></i></span>
          <span class="d-inline-block"><a href="https://a-evolution.ro/index.php" target="_blank"><i class="fas fa-file-alt"></i> Forum </a><i class="fas fa-grip-lines-vertical px-1"></i></span>
        </div>
      </div>
    </div>
  </div>

  <div class="post-box-acc-2 py-4 text-center text-evo" style="font-size: 1.25rem;">
    <div class="container">
        <b>Powered by Wordpress &copy; <?php echo date('Y'); ?> Copyright <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> - All rights reserved.</b>
    </div>
  </div>
  <div class="post-box-acc-2 pb-4 text-center footer-disclaimer" style="font-size: 0.9rem; color: white;">
  <div class="container">
  The author is not responsible for any contents linked or referred to from his pages. If any damage occurs by the use of information presented there, only the author of the respective pages might be liable, not the one who has linked to these pages. <?php bloginfo('name'); ?> doesn’t host any content All <?php bloginfo('name'); ?> does is link or embed content that was uploaded to popular Online Video Sharing sites like Veoh.com / Megavideo.com / Youtube.com / Google Video. All youtube / megavideo / googlevideo users signed a contract with the sites when they set up their accounts which forces them not to upload illegal content. By clicking on any Links to videos while surfing on <?php bloginfo('name'); ?> you watch content hosted on third parties and <?php bloginfo('name'); ?> can’t take the responsibility for any content hosted on other sites. We do not upload any videos nor do we know who and where videos are coming from. We do not promote any illegal conduct of any kind. Links to the videos are submitted by users and managed by users.
  </div>
  </div>
</footer>

<?php b4st_footer_after(); ?>

<!--
Viewport width indicator
========================
Just delete this if or when you don't need it.
-->

<div id="vp" style="position: fixed; bottom: 0.5rem; right: 0.5rem; z-index: 999; display: inline-block; background: #555; color: #ffffff; padding: 0 0.5rem 0.125rem; border-radius: 0.25rem;"></div>

<script>
  var vp = document.body.querySelector('#vp');
  var viewportWidth = window.innerWidth + 'px';
  vp.innerHTML = viewportWidth;
  window.addEventListener('resize', function() {
    viewportWidth = window.innerWidth + 'px';
    vp.innerHTML = viewportWidth;
  });
</script>
<?php wp_footer(); ?>
</body>

</html>