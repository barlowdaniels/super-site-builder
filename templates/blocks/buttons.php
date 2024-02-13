<div class="container-fluid buttons_block <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockClasses();?>">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockLayout();?>">
            <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockButtons(get_sub_field('buttons'));?>
        </div>
        <div class="col-1"></div>
    </div>
</div>