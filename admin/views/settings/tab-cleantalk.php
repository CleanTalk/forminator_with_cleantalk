<?php

$section                  = Forminator_Core::sanitize_text_field( 'section', 'dashboard' );
$nonce                    = wp_create_nonce( 'forminator_save_popup_uninstall_settings' );
?>
<div class="sui-box" data-nav="cleantalk" style="<?php echo esc_attr( 'cleantalk' !== $section ? 'display: none;' : '' ); ?>">

    <div class="sui-box-header">
        <h2 class="sui-box-title"><?php esc_html_e( 'Anti-Spam by CleanTalk', 'forminator' ); ?></h2>
    </div>

    <div class="sui-box-body">
        <?php echo antispam_render_key_form(); ?>
    </div>

</div>
