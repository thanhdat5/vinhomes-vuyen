<?php
/**
 * Explain what CCSS is (visible if no API key is stored).
 */

/**
 * Actual function that explains.
 */
function ao_ccss_render_explain() {
    ?>
    <style>
        .ao_settings_div {background: white;border: 1px solid #ccc;padding: 1px 15px;margin: 15px 10px 10px 0;}
        .ao_settings_div .form-table th {font-weight: normal;}
    </style>
    <script>document.title = "Autoptimize: <?php esc_html_e( 'Critical CSS', 'autoptimize' ); ?> " + document.title;</script>
    <ul id="explain-panel">
        <div class="ao_settings_div">
            <?php
            $ccss_explanation = '';

            if ( apply_filters( 'autoptimize_filter_ccss_rules_without_api', true ) ) {
                $_transient    = 'ao3_ccss_explain';
                $_explain_html = 'https://misc.optimizingmatters.com/autoptimize_ccss_explain_ao30_i18n.html?ao_ver=';
            } else {
                $_transient    = 'ao_ccss_explain';
                $_explain_html = 'https://misc.optimizingmatters.com/autoptimize_ccss_explain_i18n.html?ao_ver=';
            }

            // get the HTML with the explanation of what critical CSS is.
            if ( apply_filters( 'autoptimize_settingsscreen_remotehttp', true ) ) {
                $ccss_explanation = get_transient( $_transient );
                if ( empty( $ccss_explanation ) ) {
                    $ccss_expl_resp = wp_remote_get( $_explain_html . AUTOPTIMIZE_PLUGIN_VERSION );
                    if ( ! is_wp_error( $ccss_expl_resp ) ) {
                        if ( '200' == wp_remote_retrieve_response_code( $ccss_expl_resp ) ) {
                            $ccss_explanation = wp_kses_post( wp_remote_retrieve_body( $ccss_expl_resp ) );
                            set_transient( $_transient, $ccss_explanation, WEEK_IN_SECONDS );
                        }
                    }
                }
            }

            // placeholder text in case HTML is empty.
            if ( empty( $ccss_explanation ) ) {
                $ccss_explanation = sprintf( esc_html__( '%1$sFix render-blocking CSS!%2$s%3$sSignificantly improve your first-paint times by making CSS non-render-blocking.%4$s%3$sThe %5$snext step is to sign up at %7$shttps://criticalcss.com%8$s%6$s (this is a premium service, priced 2 GBP/month for membership and 5 GBP/month per domain) %5$sand get the API key%6$s, which you can copy from %7$sthe API-keys page%8$s and paste below.%4$s%3$sIf you have any questions or need support, head on over to %9$sour support forum%10$s and we\'ll help you get up and running in no time!%4$s', 'autoptimize' ), '<h2>', '</h2>', '<p>', '</p>', '<strong>', '</strong>', '<a href="https://criticalcss.com/?aff=1" target="_blank">', '</a>', '<a href="https://wordpress.org/support/plugin/autoptimize" target="_blank">', '</a>' );
            } else {
                // we were able to fetch the explenation, so add the JS to show correct language.
                $ccss_explanation .= "<script>jQuery('.ao_i18n').hide();d=document;lang=d.getElementsByTagName('html')[0].getAttribute('lang').substring(0,2);if(d.getElementById(lang)!= null){jQuery('#'+lang).show();}else{jQuery('#default').show();}</script>";
            }

            // and echo it.
            echo $ccss_explanation;
            ?>
        </div>
        </ul>
    <?php
}
