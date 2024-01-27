<?php $content = get_sub_field('card_image_content'); ?>

<div class="container-fluid card-image">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            <div class="row">
                <div class="col col-12 col-lg-5 card">
                    <div class="block-wrapper gradient-border-wrapper">
                        <div class="gradient-border-content">
                            <?php SDSS\Helpers::echoIfExists($content['card']['title'], 'h4'); ?>
                            <?php SDSS\Helpers::echoIfExists($content['card']['sub_text'], 'p'); ?>
                            <?= SDSS\Block::blockButton($content['card']['button']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="image">
        <img src="<?= $content['image']['image']['url'];?>" alt="<?= $content['image']['image']['alt'];?>"/>
        <div class="dot"></div>
    </div>
</div>