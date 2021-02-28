<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-900 text-center" style="font-family: sans-serif;"><?= $title; ?></h1>
    <!-- akhir Page heading -->
    <!-- ambil antrian -->
    <div class="row " style="height: 538px; margin-left: 20rem;">
        <div class="col-md  mt-3 ">
            <div class="row card-antrian text-center ">
                <div class="card border-primary mb-3 shadow-lg" style="max-width: 20rem;">
                    <div class="card-header"> <i class="fa fa-fw fa-capsules"></i>Obat Non Racikan</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title" id="nomer1">A<?php echo $antrian_non_racikan['no_antrian']; ?>
                            <?php if ($antrian_non_racikan['no_antrian'] < 1) {
                                $antri = 0;
                            } else {
                                $antri = $antrian_non_racikan['no_antrian'];
                            }
                            ?>
                        </h5>
                        <a href="<?= base_url('antrian/tambah_nonracik/' . $antri) ?>" class="btn btn-primary ">Print Antrian</a>
                    </div>

                </div>

                <div class="card border-primary mb-3 ml-5 shadow-lg" style="width: 20rem;">
                    <div class="card-header"> <i class="fa fa-fw fa-mortar-pestle"></i> Obat Racikan</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title" id="nomer2">B<?php echo $antrian_racikan['no_antrian']; ?>
                            <?php if ($antrian_racikan['no_antrian'] < 1) {
                                $antri = 0;
                            } else {
                                $antri = $antrian_racikan['no_antrian'];
                            }
                            ?>
                        </h5>
                        <a href="<?= base_url('antrian/tambah_racik/' . $antri) ?>" class="btn btn-primary">Print Antrian</a>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- akhir ambil antrian -->

</div>
<!-- End of Main Content -->
<script type="text/javascript">
    function nomer1() {
        var antri = parseInt(document.getElementById('nomer1').innerHTML) + 1;
        document.getElementById("nomer1").innerHTML = antri;
    }

    function nomer2() {
        var antri = parseInt(document.getElementById('nomer2').innerHTML) + 1;
        document.getElementById("nomer2").innerHTML = antri;
    }
</script>