<?php

use SuperBuilder\Helpers\Helpers;

$content = get_sub_field('hero_content');
?>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-6 content">
                <div class="block-wrapper">
                    <?php
                    // Title
                    \SuperBuilder\Frontend\FlexibleContentBlock::blockTitle($content['title'], $content['title_settings']);
                    // Sub Text
                    \SuperBuilder\Helpers\Helper::echoIfExists($content[ 'sub_text'], 'div', 'sub-text font-' . $content['sub_text_colour']);
                    // Buttons
                    if( $content['buttons'] ) {
                        echo '<div class="block-buttons">' . \SuperBuilder\Frontend\FlexibleContentBlock::blockButtons( $content['buttons'] ) . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php if($content['background_image']) { ?>
        <div class="image overlay overlay-<?= $content['image_overlay_style'] . '-' . $content['image_overlay_enabled']; ?>" style="background-image:url('<?= $content['background_image']['url']; ?>');"></div>
    <?php } ?>
    
    <div class="container-fluid arrow">
        <div class="row">
            <div class="container">
                <?= SuperBuilder\Helpers\Helper::getAsset('arrow-down.svg'); ?>
            </div>
        </div>
    </div>

</div>

