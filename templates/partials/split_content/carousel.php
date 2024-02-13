<div class="col col-12 col-lg-6 carousel <?= $location;?>">
    <div class="block-wrapper">
        <div class="split-content-carousel">
            <?php foreach ($fields as $field) { ?>
                <div class="carousel-item">
                    <div class="content">
                        <?= $field['content']; ?>
                    </div>
                    <div class="block-buttons">
                        <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockButtons($field['buttons']); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>