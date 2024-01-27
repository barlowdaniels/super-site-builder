<div class="container-fluid wysiwyg_block <?= SDSS\Block::blockClasses();?>">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content <?= SDSS\Block::blockLayout(); ?>">
            <div class="block-wrapper">

                <?php the_sub_field('wysiwyg'); ?>

                <?php if(get_sub_field('buttons')) {
                    echo '<div class="block-buttons">' . SDSS\Block::blockButtons(get_sub_field('buttons')) . '</div>';
                } ?>

            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>