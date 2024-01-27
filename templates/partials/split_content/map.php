<div class="col col-12 col-lg-6 map <?= $location;?>">
    
    <?php if( isset($fields['lat']) && isset($fields['lng']) ) { ?>
            
        <div class="acf-map" data-zoom="12">
            <div class="marker" data-lat="<?= esc_attr($fields['lat']); ?>" data-lng="<?= esc_attr($fields['lng']); ?>"></div>
        </div>

    <?php } ?>

</div>