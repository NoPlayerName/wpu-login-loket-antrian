<?php
$antrian1 = $antrian_non_racikan['no_antrian'];
$antrian2 = $antrian_racikan['no_antrian'];

?>

<audio id="suarabel" src="<?= base_url('assets/audio/Airport_Bell.mp3'); ?>"></audio>
<audio id="obatnonracik" src="<?= base_url('assets/audio/non_racikan.m4a'); ?>"></audio>
<audio id="obatracik" src="<?= base_url('assets/audio/racikan.m4a'); ?>"></audio>
<audio id="no_antrian" src="<?= base_url('assets/audio/no_antrian.m4a'); ?>"></audio>
<audio id="antrian_a" src="<?= base_url('assets/audio/A.m4a'); ?>"></audio>
<audio id="antrian_b" src="<?= base_url('assets/audio/B.m4a'); ?>"></audio>


<!-- non raacikan -->
<?php
if ($antrian1 > 11 && $antrian1 < 20) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 20) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 20 && $antrian1 < 100) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 100 && $antrian1 < 110) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php
} else if ($antrian1 > 111 && $antrian1 < 120) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 119 && $antrian1 < 200) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 1, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 199 && $antrian1 < 210) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 == 210) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 211) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 211 && $antrian1 < 220) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php
} else if ($antrian1 > 219 && $antrian1 < 300) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian1 > 299 && $antrian1 < 310) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 319 && $antrian1 < 400) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian1 > 419 && $antrian1 < 500) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian1 > 519 && $antrian1 < 600) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian1 > 619 && $antrian1 < 700) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian1 > 719 && $antrian1 < 800) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian1 > 819 && $antrian1 < 900) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian1 > 919 && $antrian1 < 1000) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian1, 1, 1);
    $b = substr($antrian1, -1, 1);
    echo "<audio id='antrian1' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian2' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian1 > 399 && $antrian1 < 410) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 499 && $antrian1 < 510) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 599 && $antrian1 < 610) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 699 && $antrian1 < 710) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 799 && $antrian1 < 810) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 899 && $antrian1 < 910) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 > 999 && $antrian1 < 1010) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian1, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian1" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian1 == 310) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 311) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 311 && $antrian1 < 320) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 410) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 411) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 411 && $antrian1 < 420) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 510) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 511) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 511 && $antrian1 < 520) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 610) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 611) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 611 && $antrian1 < 620) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 710) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 711) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 711 && $antrian1 < 720) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 810) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 811) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 811 && $antrian1 < 820) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 910) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 == 911) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian1 > 911 && $antrian1 < 920) { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . substr($antrian1, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian1" src="<?php echo base_url('assets/audio/' . substr($antrian1, -1, 1) . '.m4a'); ?>"></audio>
<?php } else { ?>
    <audio id="antrian" src="<?php echo base_url('assets/audio/' . $antrian1 . '.m4a'); ?>"></audio>
<?php } ?>

<!-- racikan -->

<?php
if ($antrian2 > 11 && $antrian2 < 20) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 20) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 20 && $antrian2 < 100) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 100 && $antrian2 < 110) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php
} else if ($antrian2 > 111 && $antrian2 < 120) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 119 && $antrian2 < 200) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 1, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 199 && $antrian2 < 210) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 == 210) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 211) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 211 && $antrian2 < 220) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian3" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php
} else if ($antrian2 > 219 && $antrian2 < 300) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian3' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian4' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 299 && $antrian2 < 310) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 319 && $antrian2 < 400) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian3' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian4' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 419 && $antrian2 < 500) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian3' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian4' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 519 && $antrian2 < 600) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian3' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian4' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 619 && $antrian2 < 700) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian3' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian4' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 719 && $antrian2 < 800) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian3' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian4' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 819 && $antrian2 < 900) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian3' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian4' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 919 && $antrian2 < 1000) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php
    $a = substr($antrian2, 1, 1);
    $b = substr($antrian2, -1, 1);
    echo "<audio id='antrian3' src='" . base_url('assets/audio/' . $a) . ".m4a'></audio>";
    echo "<audio id='antrian4' src='" . base_url('assets/audio/' . $b) . ".m4a'></audio>";
} else if ($antrian2 > 399 && $antrian2 < 410) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 499 && $antrian2 < 510) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 599 && $antrian2 < 610) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 699 && $antrian2 < 710) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 799 && $antrian2 < 810) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 899 && $antrian2 < 910) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 > 999 && $antrian2 < 1010) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <?php
    $a = substr($antrian2, -1, 1);
    if ($a == 0) {
    } else { ?>
        <audio id="antrian3" src="<?php echo base_url('assets/audio/' . $a . '.m4a'); ?>"></audio>
    <?php
    }
} else if ($antrian2 == 310) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 311) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 311 && $antrian2 < 320) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian3" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 410) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 411) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 411 && $antrian2 < 420) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian3" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 510) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 511) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 511 && $antrian2 < 520) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian3" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 610) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 611) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 611 && $antrian2 < 620) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian3" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 710) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 711) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 711 && $antrian2 < 720) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian3" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 810) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 811) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 811 && $antrian2 < 820) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian3" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 910) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 == 911) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
<?php } else if ($antrian2 > 911 && $antrian2 < 920) { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . substr($antrian2, 0, 1) . '.m4a'); ?>"></audio>
    <audio id="antrian3" src="<?php echo base_url('assets/audio/' . substr($antrian2, -1, 1) . '.m4a'); ?>"></audio>
<?php } else { ?>
    <audio id="antrianracik" src="<?php echo base_url('assets/audio/' . $antrian2 . '.m4a'); ?>"></audio>
<?php } ?>


<audio id="sepuluh" src="<?= base_url('assets/audio/sepuluh.m4a'); ?>"></audio>
<audio id="sebelas" src="<?= base_url('assets/audio/sebelas.m4a'); ?>"></audio>
<audio id="seratus" src="<?= base_url('assets/audio/seratus.m4a'); ?>"></audio>
<audio id="belas" src="<?= base_url('assets/audio/belas.m4a'); ?>"></audio>
<audio id="puluh" src="<?= base_url('assets/audio/puluh.m4a'); ?>"></audio>
<audio id="ratus" src="<?= base_url('assets/audio/ratus.m4a'); ?>"></audio>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-900 text-center" style="font-family: sans-serif;"><?= $title; ?></h1>
    <!-- akhir Page heading -->
    <!-- ambil antrian -->
    <div class="row " style="height: 538px; margin-left: 18rem;">
        <div class="col-md  mt-3 ">
            <div class="row card-antrian text-center ">
                <div class="card border-primary mb-3 shadow-lg" style="max-width: 18rem;">
                    <div class="card-header"> <i class="fa fa-fw fa-capsules"></i>Obat Non Racikan</div>
                    <div class="card-body text-primary">
                        <input type="hidden" name="" id="non_racik" value="<?= $antrian_non_racikan['no_antrian']; ?>">
                        <h5 class="card-title" id="nomer1">A<?= $antrian_non_racikan['no_antrian']; ?></h5>
                        <button class="btn btn-primary panggilnon " style=" font-size: 11px;" onclick="panggilnon()">Panggil Antrian
                        </button>
                        <a href="<?= base_url('antrian/antrian_non_racikan/'); ?>" class="btn btn-primary " style="font-size: 11px;">Antrian Selanjutnya</a>
                    </div>

                </div>

                <div class="card border-primary mb-3 ml-5 shadow-lg" style="width: 18rem;">
                    <div class="card-header"> <i class="fa fa-fw fa-mortar-pestle"></i> Obat Racikan</div>
                    <div class="card-body text-primary">
                        <input type="hidden" name="" id="racik" value="<?= $antrian_racikan['no_antrian']; ?>">
                        <h5 class="card-title" id="nomer2">B<?= $antrian_racikan['no_antrian']; ?></h5>
                        <button class="btn btn-primary panggilracik" style=" font-size: 11px;" onclick="panggilracik()">Panggil Antrian
                        </button>
                        <a href="<?= base_url('antrian/antrian_racikan/' . $antrian_racikan['no_antrian']); ?>" class="btn btn-primary" style="font-size: 11px;">Antrian Selanjutnya</a>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- akhir ambil antrian -->

</div>
<!-- End of Main Content -->

<script type="text/javascript">
    function panggilnon() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function() {
            document.getElementById("obatnonracik").pause();
            document.getElementById("obatnonracik").currentTime = 0;
            document.getElementById("obatnonracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function() {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function() {
            document.getElementById("antrian_a").pause();
            document.getElementById("antrian_a").currentTime = 0;
            document.getElementById("antrian_a").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php
        if ($antrian1 < 10) { ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
        <?php } elseif ($antrian1 == 10) { ?>
            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
        <?php } elseif ($antrian1 == 11) { ?>
            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } else if ($antrian1 > 11 && $antrian1 < 20) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } else if ($antrian1 == 20) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } else if ($antrian1 > 20 && $antrian1 < 100) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 100) { ?>

            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;


        <?php
        } else if ($antrian1 > 100 && $antrian1 < 110) { ?>
            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 110) { ?>

            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 111) { ?>

            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 111 && $antrian1 < 120) { ?>

            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 119 && $antrian1 < 200) {
        ?>
            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 199 && $antrian1 < 210) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 210) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 310) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 410) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 510) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 610) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 710) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 810) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 910) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian1 == 211) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 211 && $antrian1 < 220) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 311 && $antrian1 < 320) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian1 > 411 && $antrian1 < 420) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 511 && $antrian1 < 520) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 611 && $antrian1 < 620) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian1 > 711 && $antrian1 < 720) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 811 && $antrian1 < 820) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 911 && $antrian1 < 920) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;


        <?php
        } else if ($antrian1 == 311) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;


        <?php
        } else if ($antrian1 == 411) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 511) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 611) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 711) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 811) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 == 911) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian1 > 299 && $antrian1 < 310) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 219 && $antrian1 < 300) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 319 && $antrian1 < 400) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 419 && $antrian1 < 500) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 519 && $antrian1 < 600) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 619 && $antrian1 < 700) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 719 && $antrian1 < 800) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 819 && $antrian1 < 900) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 919 && $antrian1 < 1000) { ?>

            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian1 > 399 && $antrian1 < 410) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 499 && $antrian1 < 510) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 599 && $antrian1 < 610) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 699 && $antrian1 < 710) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 799 && $antrian1 < 810) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 899 && $antrian1 < 910) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian1 > 999 && $antrian1 < 1010) {
        ?>
            setTimeout(function() {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 900;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        }
        ?>


    };

    function panggilracik() {
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function() {
            document.getElementById("obatracik").pause();
            document.getElementById("obatracik").currentTime = 0;
            document.getElementById("obatracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function() {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function() {
            document.getElementById("antrian_b").pause();
            document.getElementById("antrian_b").currentTime = 0;
            document.getElementById("antrian_b").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        <?php
        if ($antrian2 < 10) { ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
        <?php } elseif ($antrian2 == 10) { ?>
            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
        <?php } elseif ($antrian2 == 11) { ?>
            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } else if ($antrian2 > 11 && $antrian2 < 20) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } else if ($antrian2 == 20) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        <?php } else if ($antrian2 > 20 && $antrian2 < 100) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 100) { ?>

            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;


        <?php
        } else if ($antrian2 > 100 && $antrian2 < 110) { ?>
            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 110) { ?>

            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 111) { ?>

            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 111 && $antrian2 < 120) { ?>

            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 119 && $antrian2 < 200) {
        ?>
            setTimeout(function() {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 199 && $antrian2 < 210) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 210) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 310) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 410) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 510) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 610) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 710) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 810) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 910) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian2 == 211) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 211 && $antrian2 < 220) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 311 && $antrian2 < 320) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian2 > 411 && $antrian2 < 420) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 511 && $antrian2 < 520) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 611 && $antrian2 < 620) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian2 > 711 && $antrian2 < 720) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 811 && $antrian2 < 820) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 911 && $antrian2 < 920) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;


        <?php
        } else if ($antrian2 == 311) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;


        <?php
        } else if ($antrian2 == 411) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 511) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 611) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 711) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 811) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 == 911) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian2 > 299 && $antrian2 < 310) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 219 && $antrian2 < 300) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 319 && $antrian2 < 400) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 419 && $antrian2 < 500) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 519 && $antrian2 < 600) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 619 && $antrian2 < 700) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 719 && $antrian2 < 800) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 819 && $antrian2 < 900) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 919 && $antrian2 < 1000) { ?>

            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian4").pause();
                document.getElementById("antrian4").currentTime = 0;
                document.getElementById("antrian4").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        <?php
        } else if ($antrian2 > 399 && $antrian2 < 410) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 499 && $antrian2 < 510) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 599 && $antrian2 < 610) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 699 && $antrian2 < 710) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 799 && $antrian2 < 810) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 899 && $antrian2 < 910) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        } else if ($antrian2 > 999 && $antrian2 < 1010) {
        ?>
            setTimeout(function() {
                document.getElementById("antrianracik").pause();
                document.getElementById("antrianracik").currentTime = 0;
                document.getElementById("antrianracik").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function() {
                document.getElementById("antrian3").pause();
                document.getElementById("antrian3").currentTime = 0;
                document.getElementById("antrian3").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;
        <?php
        }
        ?>


    };
</script>