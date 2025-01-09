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
                        <h4 class="mb-3"><span class="text-muted fw-light"></span> Daftar User</h4>

                        <x-notifikasi></x-notifikasi>

                        <div class="card">
                            <div class="demo-inline-spacing d-flex justify-content-between" style="padding: 10px 18px;">
                                <!-- Searching -->
                                <form action="">
                                    <div class="input-group">
                                        <input
                                            type="search"
                                            class="form-control border-1 search-input"
                                            placeholder="Cari User..."
                                            name="search"
                                            id="search" />

                                        <button type="submit" class="search-button">
                                            <span class="tf-icons bx bx-search"></span>&nbsp; Cari
                                        </button>
                                    </div>

                                </form>
                                <!-- / Searching -->
                                <button onclick="location.href=`{{ route('user.create') }}`" class="btn btn-primary">
                                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah User
                                </button>
                            </div>

                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr class="text-nowrap">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $no=>$user)
                                        <tr>
                                            <th scope="row"> {{ $no+1 }} </th>
                                            <td> {{ $user->name }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }} </td>
                                            <td> {{ ucfirst($user->role) }} </td>
                                            <td> {{ $user->status == 1 ? 'Aktif' : 'Tidak Aktif' }} </td>
                                            <td>
                                                <div class="demo-spacing d-flex">
                                                    <button onclick="location.href=`{{ '/user/'.$user->id }}`" class="btn btn-sm btn-info">
                                                        <span class="tf-icons bx bx-show bx-18px"></span>
                                                    </button>
                                                    &nbsp;
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger">
                                                            <span class="tf-icons bx bx-trash bx-18px"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="card-footer d-flex justify-content-end">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item prev">
                                            <a class="page-link" href="?page={{ $users->currentPage() -1 }} "><i class="tf-icon bx bx-chevrons-left bx-sm"></i></a>
                                        </li>
                                        <li class="page-item next">
                                            <a class="page-link" href="?page={{ $users->currentPage() +1 }}"><i class="tf-icon bx bx-chevrons-right bx-sm"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- / Pagination -->

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