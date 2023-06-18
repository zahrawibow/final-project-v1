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
                        Peminjaman Aset
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Form Peminjaman Aset</h6>
            </nav>


            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <!-- search bar -->
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <!-- <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)" onfocusout="defocused(this)" />
                    </div> -->
                </div>

                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/authentication/signin/illustration.html" class="nav-link font-weight-bold px-0 text-body" target="_blank">
                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">Profil</span>
                        </a>
                    </li>

                    <!-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link p-0 text-body" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li> -->
                    <!-- notifikasi -->
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
            </div>
        </div>
    </nav>
    <!-- Header Page end-->


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="multisteps-form">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto mt-5 mb-sm-5 mb-3">
                            <!-- <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                    <span>1. Product Info</span>
                                </button>
                                <button class="multisteps-form__progress-btn js-active" type="button" title="Media">
                                    2. Media
                                </button>
                                <button class="multisteps-form__progress-btn js-active" type="button" title="Socials">
                                    3. Socials
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Pricing">
                                    4. Pricing
                                </button>
                            </div> -->
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" id="step1" type="button" title="Product Info">
                                    <span>Form Peminjaman</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" id="step2" title="Media">
                                    Konfirmasi Peminjaman
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" id="step3" title="Socials">
                                    Keterangan
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form mb-8" style="height: 395px" id="loan-form">
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <h4 class="font-weight-bolder text-center">Form Peminjaman</h4>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="row text-center">
                                                <div class="form-group col-12 col-sm-6">
                                                    <label for="asset_id">Aset</label>
                                                    <select class="form-control" id="asset_id" name="asset_id">
                                                        <option value="">Pilih Aset</option>
                                                        <?php foreach ($assets as $asset) : ?>
                                                            <option value="<?= $asset['id']; ?>">
                                                                <?= $asset['name']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <!-- <input type="hidden" value="<?= $asset['merk']; ?>" id="merk" name="merk"> -->
                                                </div>
                                                <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <label for="purpose">Keperluan</label>
                                                    <select class="form-control" id="purpose" name="purpose">
                                                        <option value="">Pilih Keperluan</option>
                                                        <option value="Praktikum">Praktikum</option>
                                                        <option value="Ujian Praktikum">Ujian Praktikum</option>
                                                        <option value="Penelitian">Penelitian</option>
                                                        <option value="Tugas Akhir">Tugas Akhir</option>
                                                        <option value="Magang/PKL">Magang/PKL</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row text-center">
                                                <div class="form-group col-12 col-sm-6">
                                                    <label class="form-control-label" for="loan_time">Tanggal Peminjaman</label>
                                                    <input class="form-control" type="date" id="loan_time" name="loan_time">
                                                </div>
                                                <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <label for="permission_tax" class="form-label">Surat Peminjaman Aset</label>
                                                    <input class="form-control" type="file" id="permission_tax" multiple name="permission_tax">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                Selanjutnya
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" id="step2-form" data-animation="FadeIn">
                                    <h4 class="font-weight-bolder text-center">Konfirmasi Peminjaman</h4>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-2">
                                            <div class="card-body p-3">
                                                <hr class="horizontal gray-light my-1" />
                                                <ul class="list-group">
                                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                                        <p class="text-secondary mb-1">Identitas Peminjam</p>
                                                        <p class="mb-0 font-weight-bold px-4"><strong><?= (user()->fullname); ?></strong></p>
                                                        <p class="text-sm mb-0 px-4"><?= (user()->username); ?> / <?= (user()->email); ?></p>
                                                        <p class="text-sm mb-0 px-4"><?= user()->major; ?></p>
                                                        <p class="text-sm mb-0 px-4"><?= user()->identifier; ?>. <?= user()->identity_number; ?></p>
                                                        <p class="text-sm mb-0 px-4"> Pengguna <?= user()->status; ?></p>
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="text-secondary mb-1">Detail Aset</p>

                                                            <a href="#" class="badge bg-gradient-primary" onclick="testButton()">Cek disini</a>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <p class="text-secondary mb-1">Detail Peminjaman</p>

                                                        <p class="mb-0 font-weight-bold px-4" id="asset_show"><strong>-</strong></p>
                                                        <p class="mb-0 font-weight-bold px-4" id="purpose_show"><strong>-</strong></p>
                                                        <p class="mb-0 font-weight-bold px-4" id="loan-time-show"><strong>-</strong></p>
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <p class="text-secondary mb-1">Surat Peminjaman Aset, terlampir dibawah</p>
                                                        <p><span id="permission-tax-show">-</span></p>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">
                                                Sebelumnya
                                            </button>
                                            <!-- <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next"> -->
                                            <button class="btn bg-gradient-dark ms-auto mb-0" onclick="submitLoan()" type="button" title="Next">
                                                Konfirmasi
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" id="step3-form" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder" id="loan-form-status-title">Data belum diisi</h5>
                                    <div class="multisteps-form__content">
                                        <!-- <div class="row mt-3">
                                            <div class="col-12">
                                                <label>Shoppify Handle</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="@soft" onfocus="focused(this)" onfocusout="defocused(this)" />
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>Facebook Account</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="https://..." onfocus="focused(this)" onfocusout="defocused(this)" />
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>Instagram Account</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="https://..." onfocus="focused(this)" onfocusout="defocused(this)" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">
                                                    Prev
                                                </button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                    Next
                                                </button>
                                            </div>
                                        </div> -->
                                        <p id="loan-form-report">Anda belum melakukan pengajuan dan pengisian data</p>
                                    </div>
                                </div>

                            </form>
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

<script>
    $("#asset_id").change(function(e) {
        e.preventDefault();
        $("#asset_show").html($("#asset_id option:selected").html());
    });
</script>
<script>
    $("#purpose").change(function(e) {
        e.preventDefault();
        $("#purpose_show").html($("#purpose option:selected").html());
    });

    $("#loan_time").change(function(e) {
        e.preventDefault();
        $("#loan-time-show").html($(this).val());
    });

    $("#permission_tax").change(function(e) {
        e.preventDefault();
        $("#permission-tax-show").html("Sudah diisi <i class='fas fa-check-circle'></i>");
    });

    function testButton() {
        let timerInterval
        Swal.fire({
            title: 'Auto close alert!',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
    }

    function submitLoan() {
        const data = $('#loan-form').serialize();

        $.ajax({
            type: "POST",
            url: "<?= url_to('loan.store'); ?>",
            data: data,
            dataType: "json",
            beforeSend: testButton(),
            success: function(response) {
                Swal.fire({
                    title: 'Berhasil',
                    confirmButtonText: 'OK!',
                    icon: 'success',
                    allowOutsideClick: false,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        Swal.fire('Saved!', 'Tunggu ajuan anda diverifikasi oleh pengelola', 'success');

                        $("#loan-form-status-title").html("Sukses!");
                        $("#loan-form-report").html("Ajuan kamu sudah disimpan. Silakan tunggu pengelola laboratorium melakukan verifikasi data.");
                        $("#step1").addClass('d-none');
                        $("#step2").addClass('d-none');
                        $("#step2-form").addClass('d-none');
                        $("#step1").removeClass('js-active');

                        $("#step3").addClass('js-active');
                        $("#step3-form").addClass('js-active');

                    }
                })

                console.log(response);
            },
            error: (response) => {
                Swal.fire(
                    'Gagal!',
                    'Cek kembali data - data anda',
                    'error'
                )

                console.log(response);
            }
        });
    }
</script>

<?= $this->endSection(); ?>