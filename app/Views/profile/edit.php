<?= $this->extend('layouts/index'); ?>
<?= $this->section('content'); ?>

<!-- Main content dashboard -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">

    <!-- Assets Table Start-->
    <div class="container-fluid">
        <div class="page-header min-height-200 border-radius-xl mt-4" style="
            background-image: url(&#39;../../../assets/img/curved-images/curved0.jpg&#39;);
            background-position-y: 50%;
          ">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>

        <?php foreach ($accounts as $account) : ?>
            <form action="/myprofile/update/<?= $account->userid; ?>" method="post">
                <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                    <?= csrf_field(); ?>
                    <div class="row gx-4">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img src="./productinput2_files/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />
                            </div>
                        </div>

                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1"><?= $account->fullname; ?></h5>
                                <p class="mb-0 font-weight-bold text-sm"><?= $account->username; ?> / <?= $account->email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 gx-4">
                    <div class="col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="font-weight-bolder">Foto Profil</h5>
                                <form action="/file-upload" class="form-control" id="user_image" name="user_image">
                                    <div class="form-group">
                                        <label for="user_image" class="form-label"> Jatuhkan atau Pilih File Disini</label>
                                        <input class="form-control" type="file" id="user_image" multiple name="user_image">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-lg-0 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bolder">Informasi Akun</h5>

                                <input type="hidden" name="status" id="status" value="<?= $account->status; ?>">
                                <input type="hidden" name="group_id" id="group_id" value="<?= $account->group_id; ?>">

                                <div class="form-group">
                                    <label for="fullname">Nama Lengkap</label>
                                    <input class="form-control" type="text" id="fullname" name="fullname" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $account->fullname; ?>">
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 col-sm-6">
                                        <label for="username">Nama Akun</label>
                                        <input class="form-control" type="text" id="username" name="username" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $account->username; ?>">
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">

                                        <label for="email">Alamat Surel</label>
                                        <input class="form-control" type="text" id="email" name="email" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $account->email; ?>">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 col-sm-4">
                                        <label for="identity_number">Nomor Identitas</label>
                                        <input class="form-control" type="text" id="identity_number" name="identity_number" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $account->identity_number; ?>">
                                    </div>
                                    <div class="form-group col-12 col-sm-4 mt-3 mt-sm-0">
                                        <label class="form-control-label" for="identifier">Jenis Identitas</label>
                                        <select class="form-control" id="identifier" name="identifier">
                                            <option value="NIM">NIM</option>
                                            <option value="NIP">NIP</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-sm-4 mt-3 mt-sm-0">
                                        <label class="form-control-label" for="major">Program Studi/Profesi</label>
                                        <select class="form-control" id="major" name="major">
                                            <option value="Teknokimia Nuklir">Teknokimia Nuklir</option>
                                            <option value="Elektronika Instrumentasi">Elektronika Instrumentasi</option>
                                            <option value="Elektronika Mekanika">Elektronika Mekanika</option>
                                            <option value="Dosen/Staf">Dosen/Staf</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group d-flex mt-4 col-12">
                                        <button class="btn bg-gradient-primary btn-lg mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2" type="submit">
                                            Ubah
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>

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
    <!-- Assets Table End -->



</main>
<?= $this->endSection(); ?>