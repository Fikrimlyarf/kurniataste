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

                        <div class="card">
                            <div class="demo-inline-spacing d-flex justify-content-between">
                                <h5 class="title-table">{{ $title }}</h5>
                                <div class="demo-inline-spacing">
                                    <button onclick="location.href=`{{ '/user' }}`" class="btn btn-back">
                                        <span class="tf-icons bx bx-arrow-back"></span>&nbsp; Kembali ke list
                                    </button>
                                    <button onclick="location.href=`{{ route('user.edit', $user->id) }}`" class="btn btn-warning">
                                        <span class="tf-icons bx bx-edit"></span>&nbsp; Ubah User
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Basic Layout -->
                                <div class="col-xxl">
                                    <div class="card mb-6">

                                        <div class="card-body">

                                            <div class="row mb-6">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                                <div class="col-sm-10">
                                                    <a> {{ $user['name'] }} </a>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                                                <div class="col-sm-10">
                                                    <a> {{ $user['email'] }} </a>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-sm-2 col-form-label" for="basic-default-email">Password</label>
                                                <div class="col-sm-10">
                                                    <a> {{ $user['password'] }} </a>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <a> {{ $user['jenis_kelamin'] }} </a>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Role</label>
                                                <div class="col-sm-10">
                                                    <a> {{ $user['role'] }} </a>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Status</label>
                                                <div class="col-sm-10">
                                                    <a> {{ $user['status'] }} </a>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Create At</label>
                                                <div class="col-sm-10">
                                                    <a> {{ $user->created_at->format('j F Y') }} </a>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Update At</label>
                                                <div class="col-sm-10">
                                                    <a> {{ $user['updated_at']->format('j F Y') }} </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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