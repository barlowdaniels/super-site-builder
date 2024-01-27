<?php
use SDSS\Block;
use SDSS\Helpers;

foreach( get_sub_field('carousel_slides') as $slide ) {
    $content = $slide['hero_content'];
?>
    <div class="carousel-item <?= 'block_bg_' . $content['background'] . ' ' . SDSS\Block::getBlockPadding();?>">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 block-content <?= SDSS\Block::blockLayout(); ?>">
                <div class="block-wrapper">
                    <?php 
                    // Title
                    SDSS\Block::blockTitle($content['title'], $content['title_settings']);
                    // Sub Text
                    SDSS\Helpers::echoIfExists($content[ 'sub_text'], 'div', 'sub-text font-' . $content['sub_text_colour']);
                    // Buttons
                    if( $content['buttons'] ) {
                        echo '<div class="block-buttons">' . SDSS\Block::blockButtons( $content['buttons'] ) . '</div>';
                    }
                    ?>

                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <?php if($content['background_image']) { ?>
            <div class="image" style="background-image:url('<?= $content['background_image']['url']; ?>');"></div>
        <?php } ?>
    </div>
    
<?php }