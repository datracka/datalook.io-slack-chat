<?php

// =============================================================================
// FOOTER.PHP
// -----------------------------------------------------------------------------
// The site footer. Consists of the top footer area for widgets and the bottom
// footer area for secondary information. Includes wp_footer() hook as well.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "wp-footer.php," where you'll be able to find the
// appropriate output.
// =============================================================================

?>

<?php /* hot fix added slack button */ ?>

    <div class="message-box" data-toggle="tooltip" title="" style="display: block;" data-original-title="Need help?">
        <a href="javascript:void(0);" class="message-box-icon">
            <i class="x-icon-question" data-x-icon="&#xf059;"></i>
            <div class="badge badge-danger slack-message-count"></div>
        </a>
    </div>

<?php x_get_view( x_get_stack(), 'wp', 'footer' ); ?>