<div class="col col-12 col-lg-6 text <?= $location;?>">

    <div class="block-wrapper">

        <?php SDSS\Block::blockTitle($fields['title'], $fields['title_settings']); ?>
        
        <?= $fields['content']; ?>
        
        <?php if(get_sub_field('buttons')) {
            echo '<div class="block-buttons">' . SDSS\Block::blockButtons(get_sub_field('buttons')) . '</div>';
        } ?>
        
    </div>
    
</div>