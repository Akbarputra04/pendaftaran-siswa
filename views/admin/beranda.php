<!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container text-center">
                <h1 class="display-3">SELAMAT DATANG!</h1>
                <h4>sekolah berkualitas, berkarakter, dan berwawasan lingkungan.</h4>
            </div>
        </div>

        <div class="container text-center py-5 my-5">
        
            <div id="countdown"></div>
            
        </div>

        <hr>

        <div class="container p-3">
            <!-- Example row of columns -->
            <div class="text-center">
                <h2>Visi</h2>
                <h4>Terwujudnya sekolah berkualitas, berkarakter, dan berwawasan lingkungan.</h4>
            </div>
            <div class="text-center mt-5">
                <h2>Misi</h2>
                <h5>Menyiapkan sarana prasarana  dan SDM yang memenuhi standar SNP
                    Melaksanakan pembelajaran yang berbasis sains dan teknologi.
                    Mengimplementasikan iman, taqwa, mandiri, jujur, disiplin dan tanggung jawab dalam kehidupan sehari-hari
                    Melaksanakan pembelajaran berbasis lingkungan serta mengaplikasikannya dalam kehidupan sehari-hari
                    Menyiapkan tamatan yang mampu mengisi dan menciptakan lapangan kerja serta mengembangkan profesionalitas dibidang bisnis.
                    Mengimplementasikan pendidikan etika berlalu lintas dalam kehidupan sehari-hari.</h5>
            </div>

        </div> <!-- /container -->

        <hr>

        <div class="container p-3">
            <h2 class="text-center">Program keahlian</h2>
            <div class="row">
                <div class="col text-right">
                    <h5>Akuntansi dan Keuangan Lembaga</h5>
                    <h5>Perbankan Syariah</h5>
                    <h5>Otomatisasi dan Manajemen Perkantoran</h5>
                </div>
                <div class="col-1 text-center">
                    <h5>o</h5>
                    <h5>o</h5>
                    <h5>o</h5>
                    <h5>o</h5>
                </div>
                <div class="col">
                    <h5>Bisnis Daring dan Pemasaran</h5>
                    <h5>Teknik Komputer dan Jaringan</h5>
                    <h5>Multimedia</h5>
                    <h5>Rekayasa Perangkat Lunak</h5>
                </div>
            </div>
        </div>

        <hr>

        <div class="container p-3">
            <div class="row">
                <div class="col-8">
                    <h4>Galeri SMEA</h4>
                    <img src="../../assets/img/1.jpg" alt="" width="200">
                    <img src="../../assets/img/2.jpg" alt="" width="200">
                    <img src="../../assets/img/3.jpg" alt="" width="200">
                </div>
                <div class="col-4">
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>Pemilos SMK 1 Bantul periode 2017/2018</h6>
                        </div>
                    </div>
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>Sapu pintar pembersih sampah</h6>
                        </div>
                    </div>
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>Pelaksanaan uji kompetensi keahllian tahun ajaran 2017/2018</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
        include "../../controller/connect.php";
        $query = mysqli_query($connect, "SELECT * FROM countdown");
        $data = mysqli_fetch_array($query);
        $tgl = $data['tanggal'];
        $tgl = date("m/d/Y", strtotime($tgl));
    ?>
<script type="text/javascript">

    var target = new Date("<?= $tgl ?>").getTime();

    var hari, jam, menit, detik;

    var countdown = document.getElementById("countdown");

    setInterval(function () {

    var sekarang = new Date().getTime();
    var sisa = (target - sekarang) / 1000;

    hari = parseInt(sisa / 86400);
    sisa = sisa % 86400;
    jam = parseInt(sisa / 3600);
    sisa = sisa % 3600;
    menit = parseInt(sisa / 60);
    detik = parseInt(sisa % 60);

    countdown.innerHTML = "<h1> Ayo segera daftar</h1><h1 class='d-inline'>"+hari+" hari </h1><h1 class='d-inline'>"+jam+" jam </h1><h1 class='d-inline'>"+menit+" menit </h1><h1 class='d-inline mt-5'>"+detik+" detik</h1>";
    }, 1000);

</script>