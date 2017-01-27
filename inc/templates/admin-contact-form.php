<?php settings_errors(); ?>
<h1>Contact Form</h1>

<form method="post" action="options.php">

  <?php settings_fields( 'altitude-child-contact-options' ); ?>
  <?php do_settings_sections( 'altitude_child_contact' ); ?>

  <?php submit_button(); ?>

</form>