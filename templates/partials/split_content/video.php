<?php 
$vimeoId = $fields['vimeo_id'];

if($vimeoId) {
    $uniqueId = $vimeoId . 'row' . get_row_index();
    ?>

    <div class="col col-12 col-lg-6 video <?= $location;?>">
        <div class="block-wrapper">
            <div class="vimeo-player" id="player<?= $uniqueId;?>"></div>
            <div class="vimeo-controls">
                <div class="play hide" onclick="player<?= $uniqueId;?>.play()">
                    <?= \SuperBuilder\Helpers\Helper::getAsset('play.svg'); ?>
                </div>
                <div class="pause" onclick="player<?= $uniqueId;?>.pause()">
                    <?= \SuperBuilder\Helpers\Helper::getAsset('pause.svg'); ?>
                </div>
                <div class="mute hide" onclick="player<?= $uniqueId;?>.setVolume(0)">
                    <?= \SuperBuilder\Helpers\Helper::getAsset('volume-mute.svg'); ?>
                </div>
                <div class="unmute" onclick="player<?= $uniqueId;?>.setVolume(1)">
                    <?= \SuperBuilder\Helpers\Helper::getAsset('volume.svg'); ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        var options = {
            id: <?= $vimeoId;?>,
            autoplay: true,
            loop: false,
            controls: false,
            muted: false,
        };
        var player<?= $uniqueId;?> = new Vimeo.Player('player<?= $uniqueId;?>', options);
        player<?= $uniqueId;?>.setVolume(0);
    </script>
<?php }