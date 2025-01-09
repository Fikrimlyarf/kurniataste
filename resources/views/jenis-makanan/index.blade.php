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
                    <div class="container-xxl flex-grow-1 container-p-y col-md-8">
                        <h4 class="mb-3"><span class="text-muted fw-light"></span> Jenis Makanan</h4>

                        <x-notifikasi></x-notifikasi>

                        <div class="card">
                            <div class="demo-inline-spacing d-flex justify-content-between" style="padding: 10px;">
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
                                <button type="button" id="tambahJenisMakanan" class="btn btn-primary">
                                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Jenis Makanan
                                </button>
                            </div>
                            <form action="{{ route('jenis-makanan.store') }}" method="post">
                                @csrf
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>No</th>
                                                <th>Nama Jenis Makanan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                            </form>
                            <tbody id="listJenis">
                                @foreach($jenisMakanan as $no=>$jm)
                                <tr>
                                    <th scope="row">{{ $no+1 }}</th>
                                    <td>{{ $jm->nama_jenis_makanan }}</td>
                                    <td>
                                        <div class="demo-spacing d-flex">
                                            <button onclick="location.href=``" class="btn btn-sm btn-info">
                                                <span class="tf-icons bx bx-show bx-18px"></span>
                                            </button>
                                            &nbsp;
                                            <form action="{{ route('jenis-makanan.destroy', $jm->id) }}" method="post">
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
                                        <a class="page-link" href="?page={{ $jenisMakanan->currentPage() -1 }} "><i class="tf-icon bx bx-chevrons-left bx-sm"></i></a>
                                    </li>
                                    <li class="page-item next">
                                        <a class="page-link" href="?page={{ $jenisMakanan->currentPage() +1 }}"><i class="tf-icon bx bx-chevrons-right bx-sm"></i></a>
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

    <form action="" method="post"></form>

</body>


<!-- script untuk menampilkan form inline -->
<script>
    let count = 0
    document.getElementById('tambahJenisMakanan').addEventListener('click', function() {
        const tableBody = document.getElementById('listJenis');

        if (count == 1) {
            return
        }

        const newRow = document.createElement('tr');
        newRow.innerHTML = `
       
            <th scope="row">#</th>
            <tr id="inlineform">
                <td>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="nama_jenis_makanan"
                        id="namaJenisMakanan" />
                </td>
                <td>
                    <button class="btn btn-success btn-sm" type="submit" id="simpan">
                        Simpan
                    </button>
                    <button class="btn btn-danger btn-sm" id="batal">
                        Batal
                    </button>
                </td>
                </tr>
        
        `;

        tableBody.appendChild(newRow);


        count += 1

        document.getElementById('batal').addEventListener('click', function() {
            tableBody.removeChild(newRow);

            count = 0
        });


    });
</script>

<!-- /script untuk menampilkan form inline  -->

</html>