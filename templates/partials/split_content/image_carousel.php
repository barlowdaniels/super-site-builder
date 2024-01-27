<div class="col col-12 col-lg-6 carousel <?= $location;?>">
    <div class="block-wrapper">
        <div class="split-content-carousel">
                <?php  
                if($fields['image_gallery']) {
                    foreach($fields['image_gallery'] as $img) { ?>

                        <div class="image">
                            <img src="<?= $img['sizes']['large']; ?>" alt="<?= $img['alt']; ?>"/>
                        </div>

                    <?php }
                } ?>
        </div>
    </div>
</div>