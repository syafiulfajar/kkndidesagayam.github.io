<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .row .column {
            flex: 33.3%;
            width: auto;
            overflow: hidden;
            padding: 0 4px;
            height: 100%;
        }

        .row .column img {
            margin-top: 2%;
            width: 100%;
            height: 100%;
            cursor: pointer;
            filter: grayscale(1) brightness(0.5);
            border-radius: 5px;
            transition: 0.3s linear;
        }

        .row .column img:hover {
            filter: grayscale(0) brightness(1);
        }

        /* responsive */
        @media only screen and (max-widt: 600px) {}
    </style>
</head>

<body>
    <?php $this->load->view('_partials/navbar.php'); ?>
    <main>
        <!-- Konten foto -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <center>
            <h1>Dokumentasi KKN</h1>
        </center>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="column">
                    <a href=" <?= base_url('assets/img/gambar1.png') ?>"><img src="<?= base_url('assets/img/gambar1.png') ?>"></a>
                    <a href="assets/img/gambar17.jpg"><img src="<?= base_url('assets/img/gambar17.jpg') ?>"></a>
                    <a href="assets/img/gambar3.png"><img src="<?= base_url('assets/img/gambar3.png') ?>"></a>
                    <a href="assets/img/gambar8.jpg"><img src="<?= base_url('assets/img/gambar8.jpg') ?>"></a>
                    <a href="assets/img/gambar9.jpg"><img src="<?= base_url('assets/img/gambar9.jpg') ?>"></a>
                    <a href="assets/img/gambar10.jpg"><img src="<?= base_url('assets/img/gambar10.jpg') ?>"></a>
                    <!-- <a href="assets/img/gambar8.jpg"><img src="<?= base_url('assets/img/gambar8.jpg') ?>"></a> -->
                </div>
                <div class="column">
                    <a href="assets/img/gambar11.jpg"><img src="<?= base_url('assets/img/gambar11.jpg') ?>"></a>
                    <a href="assets/img/gambar12.jpg"><img src="<?= base_url('assets/img/gambar12.jpg') ?>"></a>
                    <a href="assets/img/gambar13.jpg"><img src="<?= base_url('assets/img/gambar13.jpg') ?>"></a>
                    <a href="assets/img/gambar14.jpg"><img src="<?= base_url('assets/img/gambar13.jpg') ?>"></a>
                    <a href="assets/img/gambar2.png"><img src="<?= base_url('assets/img/gambar2.png') ?>"></a>
                    <a href="assets/img/gambar5.jpg"><img src="<?= base_url('assets/img/gambar5.jpg') ?>"></a>
                    <a href="assets/img/gambar8.jpg"><img src="<?= base_url('assets/img/gambar8.jpg') ?>"></a>
                    <a href="assets/img/gambar6.jpg"><img src="<?= base_url('assets/img/gambar6.jpg') ?>"></a>
                </div>
                <div class="column">
                    <a href="assets/img/gambar15.jpg"><img src="<?= base_url('assets/img/gambar15.jpg') ?>"></a>
                    <a href="assets/img/gambar16.jpg"><img src="<?= base_url('assets/img/gambar16.jpg') ?>"></a>
                    <a href="assets/img/gambar17.jpg"><img src="<?= base_url('assets/img/gambar17.jpg') ?>"></a>
                    <a href="assets/img/gambar7.jpg"><img src="<?= base_url('assets/img/gambar7.jpg') ?>"></a>
                    <a href="assets/img/gambar4.jpg"><img src="<?= base_url('assets/img/gambar4.jpg') ?>"></a>
                    <a href="assets/img/gambar5.jpg"><img src="<?= base_url('assets/img/gambar5.jpg') ?>"></a>
                    <a href="assets/img/gambar8.jpg"><img src="<?= base_url('assets/img/gambar8.jpg') ?>"></a>
                    <!-- <a href="assets/img/gambar6.jpg"><img src="<?= base_url('assets/img/gambar6.jpg') ?>"></a> -->
                </div>
            </div>
        </div>
        <br><br><br><br><br>
    </main>
    <!-- Akhir main -->

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>