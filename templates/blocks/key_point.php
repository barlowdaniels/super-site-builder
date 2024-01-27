<?php
$circle = get_sub_field('circle');
$stats = get_sub_field('stats');
?>
<div class="container-fluid key_point_block <?= SDSS\Block::blockClasses();?>">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            <div class="row">
                <div class="col col-12 col-lg-6 circle">
                    <div class="block-wrapper">
                        <h2 class="key-point"><?= $circle['key_point'];?></h2>
                        <?= SDSS\Block::blockButton($circle['button']); ?>
                    </div>
                    <div class="circle-bg"></div>
                </div>
                <div class="col col-12 col-lg-6 stats">
                    <div class="block-wrapper">
                        <?php foreach($stats as $stat) { ?> 
                            <div class="stat">
                                <div class="main"><?= $stat['main_text'];?></div>
                                <div class="sub <?= $stat['sub_text_size']; ?>"><?= $stat['sub_text'];?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>