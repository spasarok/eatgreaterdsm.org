<?php

function egdm_create_menu() {
    add_menu_page('Theme Options', 'Theme Options', 'administrator', __FILE__, 'egdm_options_page' , plugins_url('/images/icon.png', __FILE__) );
    add_action( 'admin_init', 'egdm_register_options' );
}
add_action('admin_menu', 'egdm_create_menu');

function egdm_register_options() {
    register_setting( 'egdm_options_group', 'egdm_address' );
    register_setting( 'egdm_options_group', 'egdm_phone' );
    register_setting( 'egdm_options_group', 'egdm_mission_headline' );
    register_setting( 'egdm_options_group', 'egdm_mission_statement' );
    register_setting( 'egdm_options_group', 'egdm_donate_button' );
}

function egdm_options_page() {
    ?>
    <div class="wrap">
        <h2>EGDM Settings</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'egdm_options_group' ); ?>
            <?php do_settings_sections( 'egdm_options_group' ); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Address</th>
                    <td><input type="text" class="large-text" name="egdm_address" value="<?php echo esc_attr( get_option('egdm_address') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Phone</th>
                    <td><input type="text" class="large-text" name="egdm_phone" value="<?php echo esc_attr( get_option('egdm_phone') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Mission Headline</th>
                    <td><input type="text" class="large-text" name="egdm_mission_headline" value="<?php echo esc_attr( get_option('egdm_mission_headline') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Mission Statement</th>
                    <td>
                        <textarea class="large-text" name="egdm_mission_statement" id="egdm_mission_statement" ><?php echo get_option('egdm_mission_statement'); ?></textarea>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Donate Button Code</th>
                    <td>
                        <textarea class="large-text" name="egdm_donate_button" id="egdm_donate_button" ><?php echo get_option('egdm_donate_button'); ?></textarea>
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php }

// Shortcodes
function egdm_address() {
    return get_option('egdm_address');
}
add_shortcode('address', 'egdm_address');

function egdm_phone() {
    return get_option('egdm_phone');
}
add_shortcode('phone', 'egdm_phone');
