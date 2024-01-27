<?php $logos = get_sub_field('logos');?>
<div class="container-fluid logos">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            <div class="row">
                <?php foreach($logos as $logo) { ?>
                    <div class="col">
                        <img class="image" src="<?= $logo['sizes']['medium_large']; ?>"/>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>