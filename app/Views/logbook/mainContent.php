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
                        Log Kegiatan
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Form Log Kegiatan Laboratorium</h6>
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
    <!-- Header Page end-->

    <div class="container-fluid py-4">

        <?php if (session()->has('errors')) : ?>
            <div class="alert alert-danger text-white">
                <ul class="mb-0">
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card move-on-hover card bg-cover">
                    <div class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative">
                        <div class="z-index-1 position-relative">
                            <h4 class="text-white text-bold">P A K A I</h4>
                            <h6 class="text-white mt-2 mb-0 text-sm">
                                <small>Form Pemakaian Aset Laboratorium</small>
                            </h6>
                            <h6 class="text-white"> </h6>
                        </div>
                    </div>

                    <div class="position-relative mt-n5" style="height: 50px;">
                        <div class="position-absolute w-100">
                            <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                    <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="card-body text-center">
                        <ul class="list-unstyled max-width-200 mx-auto">
                            <li>
                                <!-- <b>10</b> Projects
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>1</b> Team Members
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>5</b> Personal Contacts
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>500</b> Messages -->
                            </li>
                        </ul>
                        <a href="javascript:;" class="btn bg-gradient-dark w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#use">
                            Get started
                        </a>
                    </div>
                </div>

                <form action="<?= url_to('log.store') ?>" method="post">
                    <div class="form group modal fade" id="use" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card card-plain">
                                        <div class="card-header pb-0 text-left">
                                            <h4 class="font-weight-bolder text-info text-gradient text-center">Form Pemakaian Aset</h4>
                                            <p class="mb-0 text-center text-secondary">Isi form dibawah sesuai dengan aset yang digunakan serta keterangan yang diperlukan</p>
                                        </div>
                                        <div class="card-body">
                                            <form role="form text-left">
                                                <div class="form-group">
                                                    <label for="asset_id">Aset</label>
                                                    <select class="form-control" id="asset_id" name="asset_id">
                                                        <?php foreach ($assets as $asset) : ?>
                                                            <option value="<?= $asset['id']; ?>"><?= $asset['name']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="purpose">Keperluan</label>
                                                    <select class="form-control" id="purpose" name="purpose">
                                                        <option value="Kunjungan Biasa">Kunjungan biasa</option>
                                                        <option value="Kuliah Praktikum">Kuliah/Praktikum</option>
                                                        <option value="Ujian Praktikum">Ujian Praktikum</option>
                                                        <option value="Penelitian">Penelitian</option>
                                                        <option value="Tugas Akhir">Tugas Akhir</option>
                                                        <option value="Magang/PKL">Magang/PKL</option>
                                                        <option value="Sosialisasi/Kunjungan">Sosialisasi/Kunjungan</option>
                                                        <option value="Pengabdian Masyarakat">Pengabdian Masyarakat</option>
                                                    </select>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 col-sm-6">
                                                        <label class="form-control-label" for="start_time">Waktu Mulai</label>
                                                        <input class="form-control" type="time" id="start_time" name="start_time">
                                                    </div>
                                                    <div class="form-group col-12 col-sm-6">
                                                        <label class="form-control-label" for="end_time">Waktu Akhir</label>
                                                        <input class="form-control" type="time" id="end_time" name="end_time">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="currant_condition">Kondisi Aset Sebelum Pemakaian</label>
                                                    <textarea class="form-control" id="currant_condition" name="currant_condition" rows="2"></textarea>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-2 mb-0">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card move-on-hover">
                    <div class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative">
                        <div class="z-index-1 position-relative">
                            <h4 class="text-white">P I N J A M</h4>
                            <h6 class="text-white mt-2 mb-0 text-sm">
                                <small>Form Peminjaman Aset Laboratorium</small>
                            </h6>
                            <h6 class="text-white"> </h6>
                        </div>
                    </div>

                    <div class="position-relative mt-n5" style="height: 50px;">
                        <div class="position-absolute w-100">
                            <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                    <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="card-body text-center">
                        <ul class="list-unstyled max-width-200 mx-auto">
                            <li>
                                <!-- <b>10</b> Projects
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>1</b> Team Members
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>5</b> Personal Contacts
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>500</b> Messages -->
                            </li>
                        </ul>
                        <a class="btn bg-gradient-dark w-100 mt-4 mb-0" href="/asset-loans">
                            Get started
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card move-on-hover">
                    <div class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative">
                        <div class="z-index-1 position-relative">
                            <h4 class="text-white">R A D I A S I</h4>
                            <h6 class="text-white mt-2 mb-0 text-sm">
                                <small>Form Pelaporan Dosis Radiasi</small>
                            </h6>
                            <h6 class="text-white"> </h6>
                        </div>
                    </div>

                    <div class="position-relative mt-n5" style="height: 50px;">
                        <div class="position-absolute w-100">
                            <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                    <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="card-body text-center">
                        <ul class="list-unstyled max-width-200 mx-auto">
                            <li>
                                <!-- <b>10</b> Projects
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>1</b> Team Members
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>5</b> Personal Contacts
                                <hr class="horizontal dark"> -->
                            </li>
                            <li>
                                <!-- <b>500</b> Messages -->
                            </li>
                        </ul>
                        <a class="btn bg-gradient-dark w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#return">
                            Get started
                        </a>
                    </div>
                </div>

                <form action="<?= url_to('radiation.store') ?>" method="post">
                    <div class="form group modal fade" id="return" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card card-plain">
                                        <div class="card-header pb-0 text-left">
                                            <h4 class="font-weight-bolder text-info text-gradient text-center">Form Dosis Radiasi</h4>
                                            <p class="mb-0 text-center text-secondary">Isi form dibawah sesuai dengan dosis radiasi yang diperoleh selama berkegiatan menggunakan sumber radioisotop di Laboratorium Radiologi dan Kedokteran Nuklir</p>
                                        </div>
                                        <div class="card-body">
                                            <form role="form text-left">
                                                <div class="form-group">
                                                    <label for="asset_id">Aset</label>
                                                    <select class="form-control" id="asset_id" name="asset_id">
                                                        <?php foreach ($assets as $asset) : ?>
                                                            <option value="<?= $asset['id']; ?>"><?= $asset['name']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-control-label" for="radioisotope">Radioisotop</label>
                                                    <input class="form-control" type="text" id="radioisotope" name="radioisotope">
                                                </div>

                                                <div class="form-group">
                                                    <label for="activity">Keperluan</label>
                                                    <select class="form-control" id="activity" name="activity">
                                                        <option value="Praktikum">Praktikum</option>
                                                        <option value="Ujian Praktikum">Ujian Praktikum</option>
                                                        <option value="Penelitian">Penelitian</option>
                                                        <option value="Tugas Akhir">Tugas Akhir</option>
                                                        <option value="Magang/PKL">Magang/PKL</option>
                                                    </select>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <label for="laboratorian_id">Laboran Pengampu</label>
                                                    <select class="form-control" id="laboratorian_id" name="laboratorian_id">
                                                        <?php foreach ($laboratorians as $laboratorian) : ?>
                                                            <option value="<?= $laboratorian['id']; ?>"><?= $laboratorian['fullname']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div> -->

                                                <div class="row">
                                                    <div class="form-group col-12 col-sm-6">
                                                        <label class="form-control-label" for="start_time">Waktu Mulai</label>
                                                        <input class="form-control" type="time" id="start_time" name="start_time">
                                                    </div>
                                                    <div class="form-group col-12 col-sm-6">
                                                        <label class="form-control-label" for="end_time">Waktu Akhir</label>
                                                        <input class="form-control" type="time" id="end_time" name="end_time">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-control-label" for="radiation">Radiasi</label>
                                                    <input class="form-control" type="text" id="radiation" name="radiation">
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-2 mb-0">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card card-background move-on-hover">
                    <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
                    <div class="card-body pt-12">
                        <h4 class="text-white">Search and Discovery</h4>
                        <p>Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.</p>
                    </div>


                </div>
            </div>
        </div> -->

        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
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
</main>
<?= $this->endSection(); ?>