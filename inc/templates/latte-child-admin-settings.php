<?php settings_errors(); ?>

<form method="post" action="options.php">

  <?php settings_fields( 'latte-child-options-group' ); ?>
  <?php do_settings_sections( 'latte-child' ); ?>

  <?php submit_button(); ?>

</form>
