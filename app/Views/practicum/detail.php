<?= $this->extend('layouts/index'); ?>
<?= $this->section('content'); ?>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-8">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="https://images.unsplash.com/photo-1593642634402-b0eb5e2eebc9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-0 pt-4">
                        <p class="text-gradient text-primary text-gradient font-weight-bold text-sm text-uppercase">Praktikum Instrumentasi Radiologi dan Kedokteran Nuklir</p>

                        <h4>
                            <?= $practicum['title']; ?>
                        </h4>

                        <p>
                            <?= $practicum['description']; ?>
                        </p>
                        <p>Aset yang digunakan : <?= $practicum['asset_id']; ?></p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="col-lg-12 mt-4 mb-4 mt-lg-0">
                    <div class="card mb-3">
                        <div class="card text-center">
                            <div class="card-header bg-primary pb-0 pt-4">
                                <p class="text-smt text-primary text-center text-white"><strong>JADWAL TERDEKAT</strong></p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    <strong>
                                        Kelompok <?= $practicum['team']; ?>
                                    </strong>
                                </h5>
                                <p class="card-text text-sm mb-0">Tanggal <?= $practicum['schedule']; ?></p>
                                <p class="card-text text-sm mb-0">Pukul <?= $practicum['time']; ?></p>
                                <p class="card-text text-sm mb-0"><?= $practicum['prac_location']; ?></p>
                            </div>
                            <div class="card-footer text-white bg-primary pb-2 pt-2">
                                <strong>
                                    2 Hari Lagi
                                </strong>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-transparent pb-0">
                            <p class="text-smt text-primary text-center"><strong>DOKUMEN PENDUKUNG</strong></p>
                        </div>
                        <div class="card-body bg-bg-transparent p-3 rounded rounded-8">
                            <div class="col">
                                <blockquote class="text-white mb-3">
                                    <p class="text-dark ms-3 mb-0">Kontrak Perkuliahan</p>
                                    <footer class="text-gradient text-info text-xs ms-3">Lihat Pratinjau
                                        <a href="##" class="text-secondary font-weight-bold text-xs ms-9" data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fas fa-light fa-eye"></i>
                                        </a>
                                    </footer>
                                </blockquote>

                                <blockquote class="text-white mb-3">
                                    <p class="text-dark ms-3 mb-0">Modul Praktikum</p>
                                    <footer class="text-gradient text-info text-xs ms-3">Lihat Pratinjau
                                        <a href="##" class="text-primary font-weight-bold text-xs ms-9" data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fas fa-light fa-eye"></i>
                                        </a>
                                    </footer>
                                </blockquote>

                                <blockquote class="text-white mb-3">
                                    <p class="text-dark ms-3 mb-0">Penulisan Laporan Praktikum</p>
                                    <footer class="text-gradient text-info text-xs ms-3">Lihat Pratinjau
                                        <a href="##" class="text-secondary font-weight-bold text-xs ms-9" data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fas fa-light fa-eye"></i>
                                        </a>
                                    </footer>
                                </blockquote>

                                <blockquote class="text-white mb-3">
                                    <p class="text-dark ms-3 mb-0">Pengumpulan Laporan Praktikum</p>
                                    <form action="/file-upload" class="form-control bg-transparent mt-2" id="tool-img1" name="tool-img1">
                                        <input class="form-control" type="file" id="tool-img1" multiple name="tool-img1">
                                        <button type="submit" class="btn btn-sm bg-gradient-primary mb-0 mt-2 btn-lg w-100">Kumpulkan</button>
                                    </form>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="../../assets/js/plugins/threejs.js"></script>
<script src="../../assets/js/plugins/orbit-controls.js"></script>
<?= $this->endSection(); ?>