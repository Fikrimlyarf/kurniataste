<!DOCTYPE html>

<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<x-head></x-head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <x-sidebar></x-sidebar>

            <div class="layout-page">

                <x-navbar></x-navbar>

                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="row">

                            <div class="col-xl-12">
                                <!-- HTML5 Inputs -->

                                <form action="{{ route('user.store') }}" method="post">
                                    @csrf
                                    <div class="card mb-4">
                                        <div class="demo-inline-spacing d-flex justify-content-between">
                                            <h5 class="card-header">Tambah User</h5>
                                            <div class="demo-inline-spacing">
                                                <button onclick="location.href=`{{ '/user' }}`" type="button" class="btn btn-back">
                                                    <span class="tf-icons bx bx-arrow-back"></span>&nbsp; Kembali ke list
                                                </button>
                                                &nbsp;
                                                <button type="submit" class="btn btn-info">
                                                    <span class="tf-icons bx bx-save"></span>&nbsp; Simpan User
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="nama" id="nama" required/>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="html5-email-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" name="email" id="email" required/>
                                                </div>
                                            </div>
                                            <div class="mb-3 row form-password-toggle">
                                                <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
                                                <div class="col-md-10">
                                                    <div class="input-group input-group-merge">
                                                        <input class="form-control" type="password" name="password" id="password" required/>
                                                        <span class="input-group-text cursor-pointer" id="basic-default-password"><i class="bx bx-hide"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="exampleFormControlSelect1" class="col-md-2 col-form-label">Role</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="role" id="role" required>
                                                        <option value="" selected>-- Pilih Role --</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="karyawan">Karyawan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="exampleFormControlSelect1" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                                <div class="col-md-10">
                                                    <div class="form-check mt-1">
                                                        <input
                                                            name="jk"
                                                            class="form-check-input"
                                                            type="radio"
                                                            value="L"
                                                            id="L" 
                                                            required />
                                                        <label class="form-check-label" for="defaultRadio1"> Laki - laki </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input
                                                            name="jk"
                                                            class="form-check-input"
                                                            type="radio"
                                                            value="P"
                                                            id="P" 
                                                            required />
                                                        <label class="form-check-label" for="defaultRadio2"> Perempuan </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="exampleFormControlSelect1" class="col-md-2 col-form-label">Status Akun</label>
                                                <div class="form-check form-switch mt-2 col-md-10">
                                                    <input class="form-check-input" type="checkbox" name="status" id="status" checked />
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Aktif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- / Content -->

                    <x-footer></x-footer>

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <x-script></x-script>

</body>

</html>