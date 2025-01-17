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
                        <h4 class="mb-3"><span class="text-muted fw-light"></span> Daftar Topping</h4>

                        <x-notifikasi></x-notifikasi>

                        <div class="card">
                            <div class="demo-inline-spacing d-flex justify-content-between" style="padding: 10px;">
                                <!-- Searching -->
                                <form action="">
                                    <div class="input-group">
                                        <input
                                            type="search"
                                            class="form-control border-1 search-input"
                                            placeholder="Cari Topping..."
                                            name="search"
                                            id="search" />

                                        <button type="submit" class="search-button">
                                            <span class="tf-icons bx bx-search"></span>&nbsp; Cari
                                        </button>
                                    </div>

                                </form>
                                <!-- / Searching -->
                                <button type="button" id="tambahTopping" class="btn btn-primary">
                                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Topping
                                </button>
                            </div>
                            <form action="{{ route('topping.store') }}" method="post">
                                @csrf
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>No</th>
                                                <th>Nama Topping</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                            </form>
                            <tbody id="listTopping">                    
                                @foreach($topping as $no=>$topping)
                                <tr >
                                    <th scope="row">{{ $no+1 }}</th>
                                    <td>{{ $topping->nama_topping }}</td>
                                    <td>
                                        <div class="demo-spacing d-flex">
                                            <button class="btn btn-sm btn-info">
                                                <span class="tf-icons bx bx-edit bx-18px"></span>
                                            </button>
                                            &nbsp;
                                            <form action="{{ route('topping.destroy', $topping->id) }}" method="post">
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
                                    <a class="page-link" href=""><i class="tf-icon bx bx-chevrons-left bx-sm"></i></a>
                                    </li>
                                    <li class="page-item next">
                                        <a class="page-link" href=""><i class="tf-icon bx bx-chevrons-right bx-sm"></i></a>
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

    // JavaScript to handle inline form addition
    document.getElementById('tambahTopping').addEventListener('click', function() {
        const tableBody = document.getElementById('listTopping');

        if (count == 1) {
            return
        }

        // Create a new row with an inline form
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
       
            <th scope="row">#</th>
            <tr id="inlineform">
                <td>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="nama_topping"
                        id="namaTopping" />
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

        // Append the new row to the table body
        tableBody.appendChild(newRow);


        count += 1
        // Handle batal action
        document.getElementById('batal').addEventListener('click', function() {
            tableBody.removeChild(newRow);

            count = 0
        });

    });
</script>

<!-- /script untuk menampilkan form inline  -->

</html>