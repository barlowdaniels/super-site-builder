<div class="col col-12 col-lg-6 image <?= $location;?>">
    <?php
    if($fields['image']) {
        echo '<img src="' . $fields['image']['sizes']['large'] . '" alt="' . $fields['image']['alt'] . '"/>';
    }
    ?>
</div>