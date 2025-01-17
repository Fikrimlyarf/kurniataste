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

                                        <tbody id="listJenis">
                                            @foreach($jenisMakanan as $no=>$jm)
                                            <tr id="row-{{ $jm->id }}">
                                                <th scope="row">{{ $no+1 }}</th>
                                                <td>{{ $jm->nama_jenis_makanan }}</td>
                                                <td>
                                                    <div class="demo-spacing d-flex">
                                                        <button class="btn btn-sm btn-info" onclick="editRow('{{ $jm->id }}', '{{ $jm->nama_jenis_makanan }}')">
                                                            <span class="tf-icons bx bx-edit bx-18px"></span>
                                                        </button>
                                                        &nbsp;
                                                        <!-- <form action="{{ route('jenis-makanan.destroy', $jm->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger">
                                                                <span class="tf-icons bx bx-trash bx-18px"></span>
                                                            </button>
                                                        </form> -->
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </form>

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
                        <!-- / Content -->
                    </div>

                    <x-footer></x-footer>

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <x-script></x-script>

    <!-- <form action="" method="post"></form> -->

</body>


<!-- script untuk menampilkan tambah form inline -->
<script>
    let add = 0

    // JavaScript to handle inline form addition
    document.getElementById('tambahJenisMakanan').addEventListener('click', function() {
        const tableBody = document.getElementById('listJenis');

        if (add == 1) {
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

        // Append the new row to the table body
        tableBody.appendChild(newRow);


        add += 1
        // Handle batal action
        document.getElementById('batal').addEventListener('click', function() {
            tableBody.removeChild(newRow);

            add = 0
        });


    });
</script>
<!-- /end script untuk menampilkan tambah form inline  -->

<!-- script untuk menampilkan ubah form inline -->
<script>
    let currentEdit = null; // Variable to track the currently editing row

    function editRow(id, namaJenisMakanan) {
        // Close any row currently in edit mode
        if (currentEdit !== null) {
            cancelEdit(currentEdit, document.getElementById(`namaJenisMakanan-${currentEdit}`).getAttribute('data-original'));
        }

        // Update the currently editing row ID
        currentEdit = id;

        const row = document.getElementById(`row-${id}`);

        // Clear the existing row content and insert an inline form
        row.innerHTML = `
            <th scope="row">${id}</th>
            <td>
                <input 
                    type="text" 
                    class="form-control" 
                    name="nama_jenis_makanan"
                    id="namaJenisMakanan-${id}" 
                    value="${namaJenisMakanan}" 
                    data-original="${namaJenisMakanan}" />
            </td>
            <td>
                <button class="btn btn-success btn-sm" type="button" onclick="saveRow(${id})">
                    Simpan
                </button>
                <button class="btn btn-danger btn-sm" type="button" onclick="cancelEdit(${id}, '${namaJenisMakanan}')">
                    Batal
                </button>
            </td>
        `;
    }

    function saveRow(id) {
        const inputField = document.getElementById(`namaJenisMakanan-${id}`);
        const updatedName = inputField.value;

        // Add your logic to send the updated data to the server (e.g., AJAX)
        console.log('Updated name for ID', id, ':', updatedName);

        // Replace the inline form with the updated data
        const row = document.getElementById(`row-${id}`);
        row.innerHTML = `
            <th scope="row">${id}</th>
            <td>${updatedName}</td>
            <td>
                <div class="demo-spacing d-flex">
                    <button class="btn btn-sm btn-info" onclick="editRow(${id}, '${updatedName}')">
                        <span class="tf-icons bx bx-edit bx-18px"></span>
                    </button>
                    &nbsp;
                </div>
            </td>
        `;

        // Clear the currently editing row ID
        currentEdit = null;
    }

    function cancelEdit(id, originalName) {
        // Restore the original row content
        const row = document.getElementById(`row-${id}`);
        row.innerHTML = `
            <th scope="row">${id}</th>
            <td>${originalName}</td>
            <td>
                <div class="demo-spacing d-flex">
                    <button class="btn btn-sm btn-info" onclick="editRow(${id}, '${originalName}')">
                        <span class="tf-icons bx bx-edit bx-18px"></span>
                    </button>
                    &nbsp;
                </div>
            </td>
        `;

        // Clear the currently editing row ID
        currentEdit = null;
    }
</script>

<!-- /end script untuk menampilkan ubah form inline -->



</html>