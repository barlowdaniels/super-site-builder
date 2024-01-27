<?php $contentWidth = get_sub_field('content_width'); ?>

<div class="container-fluid split_content <?= SDSS\Block::blockClasses();?>">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">

            <?php if($contentWidth == 'slim') {
                echo '<div class="row justify-content-center"><div class="col-9">';
            } ?>

            <div class="row <?= get_sub_field('split_alignment');?>">
                <?php SDSS\Block::splitContent(); ?>
            </div>

            <?php if($contentWidth == 'slim') {
                echo '</div></div>';
            } ?>

        </div>
        <div class="col-1"></div>
    </div>
</div>