<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <h4 class=" text-gray-900 text-center" style="font-family: sans-serif; margin-bottom: -4px;"><?= $header; ?></h4>
    <h5 class=" mb-4 text-gray-900 text-center" style="font-family: sans-serif;"><?= $title; ?></h5>
    <!-- akhir Page heading -->
    <!-- ambil antrian -->
    <div class="row " style="height: 538px;">
        <div class="col-md " style="margin-top: -10px;">
            <div class="text-center text-gray-900 ">
                <h4>Obat Non Racikan</h4>
                <h1>A<?php echo $antrian_non_racikan['no_antrian']; ?>
                    <?php if ($antrian_non_racikan['no_antrian'] < 1) {
                        $antri = 0;
                    } else {
                        $antri = $antrian_non_racikan['no_antrian'];
                    }
                    ?></h1>
                <h5>Silahkan menunggu sampai dipanggil.</h5>

            </div>

        </div>

    </div>
    <!-- akhir ambil antrian -->

</div>
<script>
    window.print();
    location = "http://localhost/wpu-login-loket-antrian/antrian/ambil_antrian/";
</script>
<!-- End of Main Content -->