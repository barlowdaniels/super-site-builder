<?php
$content = get_sub_field('hero_content');
?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10 block-content <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockLayout(); ?>">
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
    <div class="col-1"></div>
</div>

<?php if($content['background_image']) { ?>
    <div class="image overlay overlay-<?= $content['image_overlay_style'] . '-' . $content['image_overlay_enabled']; ?>" style="background-image:url('<?= $content['background_image']['url']; ?>');"></div>
<?php } ?>