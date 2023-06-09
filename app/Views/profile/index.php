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
                        Penunjang Akun
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Profil Saya</h6>
            </nav>


            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                <!-- search bar -->
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <!-- <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)" onfocusout="defocused(this)" />
                    </div> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Header Page end-->



    <div class="container-fluid">
        <div class="page-header min-height-200 border-radius-xl mt-4" style="
            background-image: url(&#39;../../../assets/img/curved-images/curved0.jpg&#39;);
            background-position-y: 50%;
          ">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="<?= base_url("assets/img/" . (user()->user_image ?? 'default-pic.png')); ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1"><?= user()->fullname; ?></h5>
                        <p class="mb-0 font-weight-bold text-sm"><?= user()->username; ?> / <?= user()->email; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row mt-2">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Aktivitas Anda</h6>
                    </div>
                    <div class="card-body p-3 overflow-y-scroll" style="height: 200px;">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder ms-2">
                            Satu Pekan Terakhir
                        </h6>
                        <div class="card card-frame mb-2">
                            <div class="card-body">
                                <p class="card-title text-info text-gradient text-ms font-weight-bolder">Kunjungan Laboratorium</p>
                                <?php foreach ($attendances as $attend) : ?>
                                    <blockquote class="blockquote text-white mb-0">
                                        <p class="text-dark ms-3 mb-3 text-sm">Melakukan kunjungan laboratorium pada waktu <?= $attend->created_at; ?> dengan kegiatan <?= $attend->activity; ?>.</p>
                                    </blockquote>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="card card-frame mb-2">
                            <div class="card-body">
                                <p class="card-title text-info text-gradient text-ms font-weight-bolder">Pemakaian Aset</p>
                                <?php foreach ($logs as $log) : ?>
                                    <blockquote class="blockquote text-white mb-0">
                                        <p class="text-dark ms-3 mb-3 text-sm">Menggunakan aset <?= $log->name; ?> pada kegiatan <?= $log->purpose; ?>, tanggal <?= $log->logscreated; ?> mulai pukul <?= $log->start_time; ?> sampai pukul <?= $log->end_time; ?>.</p>
                                    </blockquote>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mt-md-0 mt-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Informasi Profil</h6>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="<?= url_to('myprofile.edit', user()->id); ?>">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-hidden="true" aria-label="Edit Profile" data-bs-original-title="Edit Profile"></i><span class="sr-only">Edit Profile</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            <?= (user()->description ?? 'Kosong'); ?>
                        </p>
                        <hr class="horizontal gray-light my-1" />
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                <strong class="text-dark">Nama Lengkap :</strong> &nbsp; <?= user()->fullname; ?>
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm">
                                <strong class="text-dark">Nama Pengguna :</strong> &nbsp; <?= user()->username; ?>
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm">
                                <strong class="text-dark">Alamat Surel :</strong> &nbsp;
                                <?= user()->email; ?>
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm">
                                <strong class="text-dark">Jenis Identitas/Nomor :</strong> &nbsp; <?= user()->identifier; ?>/<?= user()->identity_number; ?>
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm">
                                <strong class="text-dark">Jurusan/Profesi :</strong> &nbsp; <?= user()->major; ?>
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm">
                                <strong class="text-dark">Status :</strong> &nbsp; Aktif
                            </li>

                            <li class="list-group-item border-0 ps-0 text-sm">
                                <strong class="text-dark">Peran :</strong>
                                <?php if ($accounts[0]->name == "admin") : ?>
                                    <span class="badge badge-sm bg-gradient-primary">Admin</span>
                                <?php else : ?>
                                    <span class="badge badge-sm bg-gradient-secondary">Pengguna</span>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 mt-xl-0 mt-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Pinjaman dan Praktikum</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="card card-frame ">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
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


</main>
<?= $this->endSection(); ?>