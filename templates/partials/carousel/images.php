<?php
$uniqueId = 'section-' . $sectionIndex . '-row-' . get_row_index(); ?>
<script>
    $('.carousel.images#<?= $uniqueId; ?>').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        dots: false,
        arrows: true,
    });
</script>

<?php $images = get_sub_field('carousel_images'); ?>
<div class="block-wrapper carousel images" id="<?= $uniqueId; ?>">
    <?php foreach($images as $image) { ?>

        <div class="image" style="background-image: url('<?= $image['sizes']['medium_large'];?>')"></div>

    <?php } ?>
</div>        
