<?php $imageLinks = get_sub_field('image_links');?>
<div class="container-fluid icon-links">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            <div class="block-wrapper gradient-border-wrapper gradient-rotate">
                <div class="gradient-border-content">
                    <div class="row">
                        <?php foreach($imageLinks as $imageLink) { ?>
                            <div class="col col-12 col-md-6 col-xl-4">
                                <div class="block-wrapper icon-link">
                                    <img class="image" src="<?= $imageLink['image']['sizes']['medium']; ?>"/>
                                    <a href="<?= $imageLink['link'];?>" <?= SDSS\Helpers::newTabCheck($imageLink['open_in_new_tab']); ?>><?= $imageLink['display_text'];?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>