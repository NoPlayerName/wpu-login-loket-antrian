<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <h1 class=" mb-4 text-gray-900 text-center" style="font-family: sans-serif;"><?= $title; ?></h1>

    <div class="row" style="height: 538px;">
        <!-- slide -->
        <div class="col-md-6 mt-3">
            <div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">

                    <?php
                    $i = 0;
                    for ($i = 0; $i < $slide_count; $i++) :
                    ?>
                        <?php if ($i == 0) {
                            $active = "active";
                        } ?>
                        <li data-target="#myCarousel" data-slide-to=" <?= $i ?>" class="<?= $active ?>"></li>
                    <?php endfor; ?>

                </ol>
                <div class="carousel-inner ">
                    <?php foreach ($slide_image as $sld_img) : ?>

                        <?php if ($sld_img['active'] == 1) {
                            $active = "active";
                        } else {
                            $active = " ";
                        }
                        if ($sld_img['title'] == null) {
                            $sld = " ";
                        } else {
                            $sld = $sld_img['title'];
                        }

                        if ($sld_img['content'] == null) {
                            $sld2 = " ";
                        } else {
                            $sld2 = $sld_img['content'];
                        }
                        ?>

                        <div class="carousel-item <?= $active; ?>  ">
                            <img src="<?= base_url('/assets/img/slide/' . $sld_img['img_slide'] . ''); ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block" id="content">
                                <h5><?= $sld; ?></h5>
                                <p><?= $sld2; ?></p>
                            </div>
                        </div>
                        < <?php endforeach; ?> </div>

                            <!-- membuat panah next dan previous -->
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                </div>

            </div>
            <!-- akhir slide -->
            <div class="col-md mt-3 ">
                <div class="row card-antrian text-center  ">




                    <div class="card border-primary mb-3 shadow-lg" style="max-width: 18rem;">
                        <div class="card-header"> <i class="fa fa-fw fa-capsules"></i>Obat Non Racikan</div>
                        <div class="card-body text-primary">

                            <h5 class="card-title" id="antrian_nonracik"></h5>
                            <script type="text/javascript">
                                setInterval(function() {

                                    $.ajax({
                                        url: 'http://localhost/wpu-login-loket-antrian/antrian/get_antri_nonracik/',
                                        method: "post",
                                        dataType: 'json',
                                        success: function(data) {

                                            if (data.no_antrian == null) {

                                                document.getElementById("antrian_nonracik").innerHTML = "&nbsp";
                                            } else {
                                                document.getElementById("antrian_nonracik").innerHTML = "A" + data.no_antrian;

                                            }

                                        }
                                    })
                                }, 1000);
                            </script>

                        </div>
                    </div>




                    <div class="card border-primary mb-3 ml-5 shadow-lg" style="width: 18rem;">
                        <div class="card-header"> <i class="fa fa-fw fa-mortar-pestle"></i> Obat Racikan</div>
                        <div class="card-body text-primary">

                            <h5 class="card-title" id="antrian_racik"></h5>
                            <script type="text/javascript">
                                setInterval(function() {

                                    $.ajax({
                                        url: 'http://localhost/wpu-login-loket-antrian/antrian/get_antri_racik/',
                                        method: "post",
                                        dataType: 'json',
                                        success: function(data) {


                                            if (data.no_antrian == null) {

                                                document.getElementById("antrian_racik").innerHTML = "&nbsp";

                                            } else {

                                                document.getElementById("antrian_racik").innerHTML = "B" + data.no_antrian;

                                            }


                                        }
                                    });
                                }, 1000);
                            </script>


                        </div>

                    </div>

                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->