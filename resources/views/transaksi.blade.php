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
                        <h4 class="py-3 mb-3"><span class="text-muted fw-light">Transaksi /</span> Daftar Transaksi</h4>
                        <div class="card">
                            <div class="demo-inline-spacing d-flex justify-content-between">
                                <h5 class="title-table">Daftar Transaksi</h5>
                                <button type="button" class="btn btn-primary">
                                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Transaksi
                                </button>
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr class="text-nowrap">
                                            <th>No</th>
                                            <th>Invoice</th>
                                            <th>Nama</th>
                                            <th>Jumlah Item</th>
                                            <th>Nominal Bayar</th>
                                            <th>Pembayaran</th>
                                            <th>Aksi</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>                                            
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>
                                            <td>Table cell</td>                                            
                                        </tr>
                                    </tbody>
                                </table>
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