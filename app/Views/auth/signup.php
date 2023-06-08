<?= $this->extend('layouts/indexAuth'); ?>
<?= $this->section('content'); ?>

<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid pe-0">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="../pages/dashboard.html">
                        LIS Radiology and Nuclear Medicine
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/">
                                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="/signin">
                                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                    Sign In
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar -->

<!-- Content -->
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-7">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">
                                    Welcome fellas!
                                </h3>
                                <p class="mb-0">
                                    Please register to get a new account, fill these forms below
                                </p>
                            </div>

                            <div class="card-body">
                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= url_to('signup') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Full Name" aria-label="fullName" name="fullname" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Identity Number" aria-label="identity number" name="identity_number" />
                                    </div>

                                    <div class="mb-3">
                                        <small class="form-text text-muted">Choose your identity number type</small>
                                        <select class="form-control" name="identifier">
                                            <option value="1">NIM</option>
                                            <option value="2">NIP</option>
                                        </select>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="NIP" aria-label="NIP" />
                                    </div> -->
                                    <!-- <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Major" aria-label="Major" />
                                        </div> -->
                                    <div class="mb-3">
                                        <small class="form-text text-muted">Choose your major</small>
                                        <select class="form-control" name="major">
                                            <option value="Teknokimia Nuklir">Teknokimia Nuklir</option>
                                            <option value="Elektronika Instrumentasi">Elektronika Instrumentasi</option>
                                            <option value="Elektronika Mekanika">Elektronika Mekanika</option>
                                            <option value="Lecturer">Lecturer</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif; ?>" name="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon" value="<?= old('email') ?>" />
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="Username" aria-label="Username" aria-describedby="userName-addon" value="<?= old('username') ?>" />
                                    </div>

                                    <div class="form-group row">
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                        </div>

                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                                    </div> -->
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-0 mb-0">
                                            Sign up
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image: url('../assets/img/curved-images/curved6.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End content -->

<?= $this->endSection(); ?>