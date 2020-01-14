<?php
  $countries = WC()->countries;
  $base_address = $countries->get_base_address();
  $base_city = $countries->get_base_city();
  $base_state = $countries->get_base_state();
  $complete_address = "$base_address, $base_city, $base_state";
?>
<small class="footer-copy">Aleixo Estampas &copy; <?= date('Y'); ?> - <?= $complete_address; ?></small>



<?php wp_footer(); ?>

</body>
</html>
