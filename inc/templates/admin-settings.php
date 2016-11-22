<?php settings_errors(); ?>

<p>
  Use this <strong>shortcode</strong> to activate the portfolio inside a Page or Post
</p>
<code>[display_portfolio]</code>

<form method="post" action="options.php">

  <?php settings_fields( 'altitude-child-options-group' ); ?>
  <?php do_settings_sections( 'altitude-child' ); ?>

  <?php submit_button(); ?>

</form>
