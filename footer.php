<?php b4st_footer_before(); ?>

<footer id="site-footer " class="py-2 post-box">

  <div class="container ">
    <div class="row pt-3">
      <div class="col-sm">
        <p class="text-center text-sm-left">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
      </div>
      <div class="col-sm">
        <p class="text-center text-sm-right">Vă așteptăm pe <a href="https://discord.gg/YppBrJDDta" target="_blank">Discord</a> !</p>
      </div>
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