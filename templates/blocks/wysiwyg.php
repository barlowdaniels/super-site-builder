<div class="container-fluid wysiwyg_block <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockClasses();?>">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockLayout(); ?>">
            <div class="block-wrapper">

                <?php the_sub_field('wysiwyg'); ?>

                <?php if(get_sub_field('buttons')) {
                    echo '<div class="block-buttons">' . \SuperBuilder\Frontend\FlexibleContentBlock::blockButtons(get_sub_field('buttons')) . '</div>';
                } ?>

            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>