<?php settings_errors(); ?>

<form method="post" action="options.php">

  <?php settings_fields( 'altitude-child-options-group' ); ?>
  <?php do_settings_sections( 'altitude-child' ); ?>

  <?php submit_button(); ?>

</form>