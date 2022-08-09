<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/navbar.php'); ?>

    <main id="main">
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1>GAYAMANIA</h1>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="d-md-flex post-entry-2 half">
                        <a class="me-4 thumbnail">
                            <img src=" <?= base_url('assets/img/gambar1.png') ?>" alt="" class="img-fluid">
                        </a>
                        <div class="ps-md-5 mt-4 mt-md-0">
                            <p>GAYAMANIA merupakan penyematan untuk kami para mahasiswa KKN Reguler Multisektoral Gelombang II Universitas Islam Negeri Sayyid Ali Rahmatullah Tulungagung tahun 2022. KKN ini kami lakukan selama kurang lebih satu bulan, tepatnya mulai 21 Juli hingga 28 Agustus 2022 bertempat di desa Gayam Panggul Trenggalek, sebuah desa kecil dengan semua kekayaan alam dan beragam kearifan lokalnya.</p>
                            <p>GAYAMANIA beranggotakan 55 orang, yang kemudian dibagi ke dalam 3 kelompok kecil, yakni kelompok Gayam 1, kelompok Gayam 2, dan kelompok Gayam 3. Meski secara struktural terpisah ke dalam beberapa kelompok kecil, namun misi untuk melakukan pengabdian sepenuhnya kepada masyarakat merupakan tanggung jawab bersama kami sebagai mahasiswa.</p>
                        </div>
                    </div>

                    <div class="d-md-flex post-entry-2 half mt-5">
                        <a class="me-4 thumbnail order-2">
                            <img src=" <?= base_url('assets/img/gambar2.png') ?>" alt="" class="img-fluid">
                        </a>
                        <div class="pe-md-5 mt-4 mt-md-0">

                            <p>Kegiatan Kuliah Kerja Nyata (KKN) ini merupakan pembelajaran kami dalam mempersiapkan diri untuk nantinya terjun di masyarakat pasca menjalani proses pendidikan formal. Selain itu, program KKN juga merupakan tanggung jawab moral para mahasiswa dalam mengimplementasikan Tri Darma Perguruan Tinggi (penelitian, pendidikan, dan pengabdian). Berbekal tekad dan keyakinan belajar yang kuat, kami melakukan pengabdian kepada masyarakat khususnya desa Gayam.</p>
                            <p>Seluruh aktivitas dan kegiatan kami selama mengikuti KKN di Desa Gayam akan kami publikasikan di website ini, serta akun media sosial masing-masing kelompok. Jangan lupa untuk follow untuk tahu informasi terupdate kegiatan KKN kami, ya. Salam GAYAMANIA...! Bersinergi, bersama membangun Gayam.</p>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 text-center mb-5">
                        <img src="<?= base_url('assets/img/logo3.png') ?>" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Kelompok Gayam 1</h4>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="<?= base_url('assets/img/logo1.png') ?>" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Kelompok Gayam 2</h4>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="<?= base_url('assets/img/logo2.png') ?>" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>Kelompok Gayam 3</h4>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- <div class="container">
        <h1>Kritik & Saran</h1>
        <p>Sebagai upaya evaluasi agar terus lebih baik ke depannya, beri kritik & saran untuk kami melalui form berikut ini</p>
        <form action="" method="post" style="max-width: 600px;">
            <div>
                <label for="name">Name*</label>
                <input type="text" name="name" class="<?= form_error('name') ? 'invalid' : '' ?>" placeholder="nama kalian" value="<?= set_value('name') ?>" required maxleght="32" />
                <div class="invalid-feedback"><?= form_error('name') ?></div>
            </div>
            <div>
                <label for="email">Email*</label>
                <input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>" placeholder="email kalian" value="<?= set_value('email') ?>" required />
                <div class="invalid-feedback"><?= form_error('email') ?></div>
            </div>
            <div>
                <label for="messaage">Message*</label><br>
                <textarea name="message" cols="30" class="<?= form_error('message') ? 'invalid' : '' ?>" rows="5" placeholder="tulis pesan di sini" required><?= set_value('message') ?></textarea>
                <div class="invalid-feedback"><?= form_error('message') ?></div>
            </div>

            <div style="display: flex; gap: 1rem">
                <input type="submit" class="button button-primary" value="Kirim">
                <input type="reset" class="button" value="Hapus">
            </div>
        </form>
    </div> -->

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>