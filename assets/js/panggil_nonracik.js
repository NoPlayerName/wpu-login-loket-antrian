$(function () {



    $('#panggil_nonracik').on('click', function () {
        var antrian = document.getElementById("non_racik").innerHTML;
        document.getElementById("suarabel").pause();
        document.getElementById("suarabel").currentTime = 0;
        document.getElementById("suarabel").play();

        //set delay
        totalWaktu = document.getElementById("suarabel").duration * 700;

        //playnomerurutnya
        setTimeout(function () {
            document.getElementById("obatnonracik").pause();
            document.getElementById("obatnonracik").currentTime = 0;
            document.getElementById("obatnonracik").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 2000;

        setTimeout(function () {
            document.getElementById("no_antrian").pause();
            document.getElementById("no_antrian").currentTime = 0;
            document.getElementById("no_antrian").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 1700;

        setTimeout(function () {
            document.getElementById("antrian_a").pause();
            document.getElementById("antrian_a").currentTime = 0;
            document.getElementById("antrian_a").play();
        }, totalWaktu);
        totalWaktu = totalWaktu + 700;

        if (antrian < 10) {
            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
        }
        else if (antrian == 10) {
            setTimeout(function () {

                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;
        }

        else if (antrian == 11) {
            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        }

        else if (antrian > 11 && antrian < 20) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        }

        else if (antrian == 20) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

        }
        else if (antrian > 20 && antrian < 100) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 1000;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian == 100) {

            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;



        }
        else if (antrian > 100 && antrian < 110) {
            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian == 110) {

            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian == 111) {

            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian > 111 && antrian < 120) {

            setTimeout(function () {
                document.getElementById("seratus").pause();
                document.getElementById("seratus").currentTime = 0;
                document.getElementById("seratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian > 119 && antrian < 200) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian > 199 && antrian < 210) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian == 210) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sepuluh").pause();
                document.getElementById("sepuluh").currentTime = 0;
                document.getElementById("sepuluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian == 211) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("sebelas").pause();
                document.getElementById("sebelas").currentTime = 0;
                document.getElementById("sebelas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian > 211 && antrian < 220) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("belas").pause();
                document.getElementById("belas").currentTime = 0;
                document.getElementById("belas").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }
        else if (antrian > 219 && antrian < 1000) {

            setTimeout(function () {
                document.getElementById("antrian").pause();
                document.getElementById("antrian").currentTime = 0;
                document.getElementById("antrian").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("ratus").pause();
                document.getElementById("ratus").currentTime = 0;
                document.getElementById("ratus").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian1").pause();
                document.getElementById("antrian1").currentTime = 0;
                document.getElementById("antrian1").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("puluh").pause();
                document.getElementById("puluh").currentTime = 0;
                document.getElementById("puluh").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

            setTimeout(function () {
                document.getElementById("antrian2").pause();
                document.getElementById("antrian2").currentTime = 0;
                document.getElementById("antrian2").play();
            }, totalWaktu);
            totalWaktu = totalWaktu + 800;

        }





    });



});