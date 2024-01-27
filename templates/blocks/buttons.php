<div class="container-fluid buttons_block <?= SDSS\Block::blockClasses();?>">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content <?= SDSS\Block::blockLayout();?>">
            <?= SDSS\Block::blockButtons(get_sub_field('buttons'));?>
        </div>
        <div class="col-1"></div>
    </div>
</div>