<?php
if ($antrian1 > 11 && $antrian1 < 20) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } elseif ($antrian2 > 11 && $antrian2 < 20) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 20) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 20) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 20 && $antrian1 < 100) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?= base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 20 && $antrian2 < 100) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?= base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 100 && $antrian1 < 110) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 100 && $antrian2 < 110) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 111 && $antrian1 < 120) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 111 && $antrian2 < 120) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 119 && $antrian1 < 210) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?= base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 119 && $antrian2 < 210) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?= base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 == 210) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 210) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 211) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 211) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 211 && $antrian1 < 220) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?= base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 211 && $antrian2 < 220) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?= base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 219 && $antrian1 < 1000) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 219 && $antrian2 < 1000) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
}  ?>

<?php
if ($antrian1 > 0 && $antrian1 < 10) { ?>
    <audio id="antrian" src="<?= base_url('assets/audio/' . $antrian1 . '.m4a'); ?>"></audio>
<?php } elseif ($antrian2 > 0 && $antrian2 < 10) { ?>
    <audio id="antrianracik" src="<?= base_url('assets/audio/' . $antrian2 . '.m4a'); ?>"></audio>
<?php } ?>