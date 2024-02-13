<?php $content = get_sub_field('circle_images_content'); ?>

<div class="row">

    <div class="col-6 text">
        <div class="row">
            <div class="col-6 offset-4 wysiwyg">
                <?= $content['wysiwyg']; ?>
                <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockButton($content['button']); ?>
            </div>
        </div>
    </div>

    <?php
    $i = 0;
    foreach($content['images'] as $image) { $i++; ?>

        <div class="col-6 image image-<?= $i;?>">
            <div class="img" style="background-image: url('<?= $image['url']; ?>');"></div>
        </div>

    <?php } ?>

</div>
