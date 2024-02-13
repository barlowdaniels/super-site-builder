<?php $content = get_sub_field('card_image_content'); ?>

<div class="cta_block <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockClasses(); ?>">
    <?php \SuperBuilder\Frontend\FlexibleContentBlock::blockPartial(); ?>
</div>

<?php if($content['image']['bottom_spacer'] == true) { ?>
    <div class="cta-spacer block_bg_<?= $content['image']['spacer_colour'];?>"></div>
<?php }