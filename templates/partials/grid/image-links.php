<?php $imageLinks = get_sub_field('image_links');?>
<div class="container-fluid image-links">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            <div class="row">
                <?php foreach($imageLinks as $imageLink) { ?>
                    <div class="col col-12 col-md-6 col-xl-3">
                        <div class="block-wrapper">
                            <a href="<?= $imageLink['link'];?>" class="image-link" <?= SDSS\Helpers::newTabCheck($imageLink['open_in_new_tab']); ?>>
                                <img class="image" src="<?= $imageLink['image']['sizes']['medium_large']; ?>"/>
                                <div class="text"><?= $imageLink['display_text'];?></div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>