<?php $items = get_sub_field('items');?>
<div class="container-fluid default">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            <div class="row">
                <?php foreach($items as $item) { ?>
                    <div class="col col-12 col-md-6 col-xl-4">
                        <div class="block-wrapper <?= ($item['button']['link']) ? 'link' : ''; ?>">
                            <?php 
                            if($item['button']['link']) {
                                echo '<a class="grid-link" href="' . $item['button']['link'] . '" ' . SDSS\Helpers::newTabCheck($item['button']['open_in_new_tab']) . '>';
                            } 
                            
                            if($item['image']) {
                                echo '<div class="image" style="background-image: url(' . $item['image']['sizes']['medium_large'] . ')"><div class="overlay"></div></div>';
                            }
                            SDSS\Helpers::echoIfExists($item['title'], 'h4', 'title');
                            SDSS\Helpers::echoIfExists($item['text'], 'p');
                            echo SDSS\Block::blockButton($item['button']);

                            if($item['button']['link']) {
                                echo '</a>';
                            }

                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>