<?= $this->extend('layouts/index'); ?>
<?= $this->section('content'); ?>

<!-- Main content dashboard -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">

    <!-- Header page start-->
    <nav class="navbar navbar-main navbar-expand-lg blur position-sticky mt-4 top-1 px-0 mx-4 border-radius-xl z-index-sticky shadow-none" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="/">
                            <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">Halaman</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                        <a class="opacity-5 text-dark" href="/asset">Daftar Aset</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                        Tambah Aset
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Tambahkan Aset</h6>
            </nav>
        </div>
    </nav>

    <div class="container-fluid py-4">

        <form action="<?= url_to('asset.store'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row px-3">
                <div class="col-lg-6">
                    <h3>Tambah Aset</h3>
                    <p class="text-secondary text-sm">Isi form tambah aset untuk menambah data inventaris aset pada Laboratorium Radiologi dan Kedokteran Nuklir</p>
                </div>

                <div class="form-group col-lg-6 text-right d-flex flex-column justify-content-center">
                    <button type="submit" class="btn bg-gradient-primary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">Tambah</button>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Foto Aset</h5>
                            <!-- <form action="/file-upload" class="form-control" id="tool-img1" name="tool-img1"> -->
                            <div class="form-group">
                                <label for="tool-img1" class="form-label"> Jatuhkan atau Pilih File Disini</label>
                                <input class="form-control" type="file" id="tool-img1" multiple name="tool-img">
                            </div>
                            <!-- </form> -->

                            <h5 class="font-weight-bolder mt-4">Spesifikasi</h5>
                            <!-- <form action="/file-upload" class="form-control" id="spec" name="spec"> -->
                            <div class="form-group">
                                <label for="spec" class="form-label"> Jatuhkan atau Pilih File Disini</label>
                                <input class="form-control" type="file" id="spec" multiple name="spec">
                            </div>
                            <!-- </form> -->

                            <h5 class="font-weight-bolder mt-4">Buku Manual</h5>
                            <!-- <form action="/file-upload" class="form-control" id="manual" name="manual"> -->
                            <div class="form-group">
                                <label for="manual" class="form-label"> Jatuhkan atau Pilih File Disini</label>
                                <input class="form-control" type="file" id="manual" multiple name="manual">
                            </div>
                            <!-- </form> -->


                            <h5 class="font-weight-bolder mt-4">Lisensi</h5>
                            <form action="/file-upload" class="form-control" id="aset-photos" name="lisence">
                                <div class="form-group">
                                    <label for="lisence" class="form-label"> Jatuhkan atau Pilih File Disini</label>
                                    <input class="form-control" type="file" id="lisence" multiple name="lisence">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-lg-0 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Informasi Aset</h5>

                            <?php if (session()->has('errors')) : ?>
                                <div class="alert alert-danger text-white">
                                    <ul class="mb-0">
                                        <?php foreach (session('errors') as $error) : ?>
                                            <li><?= $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>


                            <div class="form-group row">
                                <div class="col-12 col-sm-6">
                                    <label for="name">Nama</label>
                                    <input class="form-control <?= isset(session('errors')['name']) ? 'is-invalid' : ''; ?>" type="text" id="name" name="name" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= old('name'); ?>">
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label for="merk">Merk</label>
                                    <input class="form-control <?= isset(session('errors')['merk']) ? 'is-invalid' : ''; ?>" type="text" id="merk" name="merk" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= old('merk'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-sm-6">
                                    <label for="series">Seri</label>
                                    <input class="form-control <?= isset(session('errors')['series']) ? 'is-invalid' : ''; ?>" type="text" id="series" name="series" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= old('series'); ?>">
                                </div>
                                <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label for="price">Harga</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" id="price" name="price" class="form-control <?= isset(session('errors')['price']) ? 'is-invalid' : ''; ?>" aria-label="Amount (to the nearest rupiah)" value="<?= old('price'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-sm-6">
                                    <label for="count">Jumlah</label>
                                    <input class="form-control <?= isset(session('errors')['count']) ? 'is-invalid' : ''; ?>" type="int" id="count" name="count" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= old('count'); ?>">
                                </div>
                                <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label class="form-control-label" for="purchase_date">Tanggal Pembelian</label>
                                    <input class="form-control <?= isset(session('errors')['purchase_date']) ? 'is-invalid' : ''; ?>" type="date" id="purchase_date" name="purchase_date" value="<?= old('purchase_date'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-sm-6">
                                    <label for="condition">Kondisi</label>
                                    <input class="form-control <?= isset(session('errors')['condition']) ? 'is-invalid' : ''; ?>" type="text" id="condition" name="condition" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= old('condition'); ?>">
                                </div>
                                <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label class="form-control-label" for="status">Status</label>
                                    <input class="form-control <?= isset(session('errors')['status']) ? 'is-invalid' : ''; ?>" type="text" id="status" name="status" value="<?= old('status'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-sm-6">
                                    <label for="location">Lokasi</label>
                                    <input class="form-control <?= isset(session('errors')['location']) ? 'is-invalid' : ''; ?>" type="text" id="location" name="location" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= old('location'); ?>">
                                </div>
                                <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label class="form-control-label" for="inventory_number">Nomor Inventaris</label>
                                    <input class="form-control <?= isset(session('errors')['inventory_number']) ? 'is-invalid' : ''; ?>" type="text" id="inventory_number" name="inventory_number" value="<?= old('inventory_number'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm">
                                    <label class="mt-4" for="description">Deksripsi</label>
                                    <div class="form-group">
                                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>2023,
                            made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://www.creative-tim.com/" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script src="../../assets/js/plugins/dropzone.min.js"></script>
        </footer>
    </div>



</main>
<?= $this->endSection(); ?>