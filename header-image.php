<?php
/**
 * DOC KAWASH
 * Ajout height 470px pour les headers type image
 */

global $header_image,$header_title,$header_element;

if ( !empty($header_image) || !empty($header_title) || $header_element=='none') { ?>

    <div class="header header_thin" <?php if ( !empty($header_image) ){ ?>style="background-image:url(<?php echo $header_image; ?>); height:470px;" <?php } ?>>
        <?php if(!empty($header_title)){ ?>

            <div class="header_title">
                <h1><?php echo $header_title; ?></h1>
            </div>

        <?php } ?>
    </div>

<?php } ?>