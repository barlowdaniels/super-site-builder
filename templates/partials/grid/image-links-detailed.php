<?php $imageLinks = get_sub_field('image_links_detailed');?>
<div class="container-fluid image-links detailed">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            <div class="row">
                <div class="col-10">
                    <div class="row">

                        <?php foreach($imageLinks as $imageLink) { ?>
                            <div class="col col-12 col-xl-6">
                                <div class="block-wrapper gradient-border-wrapper gradient-rotate">
                                    <a href="<?= $imageLink['link'];?>" class="image-link gradient-border-content" <?= SDSS\Helpers::newTabCheck($imageLink['open_in_new_tab']); ?>>
                                        <div class="logo-title">
                                            <img class="image" src="<?= $imageLink['image']['sizes']['medium_large']; ?>"/>
                                            <div class="text"><?= $imageLink['display_text'];?></div>
                                        </div>
                                        <p class="description"><?= $imageLink['description']; ?></p>
                                    </a>
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