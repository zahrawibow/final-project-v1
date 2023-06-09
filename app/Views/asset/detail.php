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
                        Detail Aset
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Detail <?= $assets['name']; ?></h6>
            </nav>


            <!-- <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">

                    </div>
                </div>

                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/authentication/signin/illustration.html" class="nav-link font-weight-bold px-0 text-body" target="_blank">
                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">Profil</span>
                        </a>
                    </li>

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link p-0 text-body" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link p-0 text-body">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link p-0 text-body" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="./dashboard_files/team-2.jpg" class="avatar avatar-sm me-3" alt="user image" />
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span>
                                                from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="./dashboard_files/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3" alt="logo spotify" />
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by
                                                Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php if (in_groups('admin')) : ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-dark pb-0" role="alert">
                                        <div class="d-lg-flex">
                                            <div>
                                                <h6 class="text-white mb-0">Perbarui Detail <?= $assets['name']; ?></h6>
                                                <p class="text-xs text-white text-secondary mb-0">
                                                    <em>
                                                        Hanya admin yang dapat menambahkan, merubah, serta menghapus data
                                                    </em>
                                                </p>
                                            </div>
                                            <div class="ms-auto my-auto mt-lg-0">
                                                <div class="ms-auto my-auto">
                                                    <a href="/asset/edit/<?= $assets['slug']; ?>" class="btn bg-gradient-primary btn-sm mb-4" target="_blank">Perbarui Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-xl-5 col-lg-5 text-center">
                                <img class="w-100 border-radius-lg shadow-lg mx-auto" src="<?= base_url('img/' . $assets['asset_images']); ?>" alt="chair" />

                                <!-- <div class="my-gallery d-flex justify-content-md-between mt-4" itemscope="" itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
                                    <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                        <a href="./productdetail_files/chair-pink.jpg" itemprop="contentUrl" data-size="500x600">
                                            <img class="w-85 min-height-100 max-height-100 border-radius-lg shadow" src="<?= base_url(); ?>../assets/productdetail_files/chair-pink.jpg" alt="Image description" />
                                        </a>
                                    </figure>
                                    <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                        <a href="./productdetail_files/black-chair.jpg" itemprop="contentUrl" data-size="500x600">
                                            <img class="w-80 min-height-100 max-height-100 border-radius-lg shadow" src="<?= base_url(); ?>../assets/productdetail_files/black-chair.jpg" itemprop="thumbnail" alt="Image description" />
                                        </a>
                                    </figure>
                                    <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                        <a href="./productdetail_files/chair-steel.jpg" itemprop="contentUrl" data-size="500x600">
                                            <img class="w-75 min-height-100 max-height-100 border-radius-lg shadow" src="<?= base_url(); ?>../assets/productdetail_files/chair-steel.jpg" itemprop="thumbnail" alt="Image description" />
                                        </a>
                                    </figure>
                                    <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
                                        <a href="./productdetail_files/chair-wood.jpg" itemprop="contentUrl" data-size="500x600">
                                            <img class="w-90 min-height-100 max-height-100 border-radius-lg shadow" src="<?= base_url(); ?>../assets/productdetail_files/chair-wood.jpg" itemprop="thumbnail" alt="Image description" />
                                        </a>
                                    </figure>
                                </div> -->

                                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="pswp__bg"></div>
                                    <div class="pswp__scroll-wrap">
                                        <div class="pswp__container">
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-grid d-md-flex justify-content-center mt-2">
                                    <form action="<?= url_to('asset.download'); ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#import" name="spec">
                                            SPEC
                                    </button> -->

                                        <button class="btn btn-outline-primary btn-sm mb-0 mt-sm-0 mt-1" type="submit" name="manual" value="<?= $assets['manual']; ?>">
                                            Manual
                                        </button>

                                        <!-- <button class="btn btn-outline-primary btn-sm mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="license">
                                        License
                                    </button> -->
                                    </form>

                                </div>
                            </div>


                            <div class="col-lg-7 mx-auto">
                                <!-- <div class="nav-wrapper position-relative end-0 mb-3">
                                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                        <li class="nav-item active" type="button">
                                            <a class="nav-link mb-0 px-0 py-1 active text-sm" data-bs-toggle="tab" data-bs-target="#detail" role="tab" aria-controls="tab" aria-selected="true" id="detail-tab"> Detail
                                            </a>
                                        </li>

                                        <li class="nav-item" type="button">
                                            <a class="nav-link mb-0 px-0 py-1 text-xs" data-bs-toggle="tab" data-bs-target="#maintenance" role="tab" aria-controls="tab" aria-selected="false" id="maintenance-tab">
                                                Perawatan
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->

                                <div class="tab-content tab-content-basic">

                                    <div id="detail" class="tab-pane fade show active" role="tabpanel" aria-labelledby="detail-tab">
                                        <h3 class="mt-lg-0 mt-3 px-1">
                                            <?= $assets['name']; ?>
                                        </h3>

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <label class="mt-0 mb-0">Merk</label>
                                                <p class="text-sm text-secondary px-1"><?= $assets['merk']; ?></p>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label class="mt-0 mb-0">Seri</label>
                                                <p class="text-sm text-secondary px-1"><?= $assets['series']; ?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <label class="mt-0 mb-0">Harga</label>
                                                <p class="text-sm text-secondary px-1">Rp <?= $assets['price']; ?></p>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label class="mt-0 mb-0">Tanggal Pembelian</label>
                                                <p class="text-sm text-secondary px-1"><?= $assets['purchase_date']; ?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <label class="mt-0 mb-0">Nomor Inventaris</label>
                                                <p class="text-sm text-secondary px-1"><?= $assets['inventory_number']; ?></p>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label class="mt-0 mb-0">Lokasi</label>
                                                <p class="text-sm text-secondary px-1"><?= $assets['location']; ?></p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <label class="mt-0 mb-0">Kondisi</label>
                                                <p class="text-sm text-secondary px-1"><?= $assets['condition']; ?></p>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label class="mt-0 mb-0">Ketersediaan</label>
                                                <p class="text-sm text-secondary px-1"><?= $assets['status']; ?></p>
                                            </div>
                                        </div>

                                        <label class="mt-0 mb-0">Deskripsi</label>
                                        <p class="text-sm text-secondary px-1"><?= $assets['description']; ?></p>
                                    </div>


                                    <!-- 
                                    <div id="maintenance" class="tab pane fade" role="tabpanel" aria-labelledby="maintenance-tab">

                                        <h3 class="mt-lg-0 mt-3 px-1">Perawatan <?= $assets['name']; ?></h3>

                                    </div> -->
                                </div>

                                <div class="tab-content">

                                </div>
                            </div>



                            <!-- other product row -->
                            <!-- <div class="row mt-5">
                            <div class="col-12">
                                <h5 class="ms-3">Other Products</h5>
                                <div class="table table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Product
                                                </th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Price
                                                </th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Review
                                                </th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Availability
                                                </th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Id
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./productdetail_files/black-chair.jpg" class="avatar avatar-md me-3" alt="table image" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                Christopher Knight Home
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-secondary mb-0">$89.53</p>
                                                </td>
                                                <td>
                                                    <div class="rating ms-lg-n4">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="progress mx-auto">
                                                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-sm">230019</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./productdetail_files/chair-pink.jpg" class="avatar avatar-md me-3" alt="table image" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                Bar Height Swivel Barstool
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-secondary mb-0">$99.99</p>
                                                </td>
                                                <td>
                                                    <div class="rating ms-lg-n4">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="progress mx-auto">
                                                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-sm">87120</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./productdetail_files/chair-steel.jpg" class="avatar avatar-md me-3" alt="table image" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                Signature Design by Ashley
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-secondary mb-0">$129.00</p>
                                                </td>
                                                <td>
                                                    <div class="rating ms-lg-n4">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="progress mx-auto">
                                                        <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-sm">412301</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="./productdetail_files/chair-wood.jpg" class="avatar avatar-md me-3" alt="table image" />
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Modern Square</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-secondary mb-0">$59.99</p>
                                                </td>
                                                <td>
                                                    <div class="rating ms-lg-n4">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="progress mx-auto">
                                                        <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-sm">001992</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->

                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer pt-3">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                2023, made with
                                <i class="fa fa-heart" aria-hidden="true"></i> by
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
            </footer>
        </div>



        <div class="ps__rail-x" style="left: 0px; bottom: 0px">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 610px; right: 0px">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 285px"></div>
        </div>
</main>
<?= $this->endSection(); ?>