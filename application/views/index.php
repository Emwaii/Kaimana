<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lpse Kabupaten Kaimana</title>
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/main/app.css">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/main/app-dark.css">
    <link rel="shortcut icon" href="<?= base_url('assets/dashboard') ?>/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/dashboard') ?>/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/shared/iconly.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#!"><img src="<?= base_url('assets') ?>/image/instansi-logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="logo">
                            <a href="#!"><img src="<?= base_url('assets') ?>/image/lpse-logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="logo">
                            <a href="#!"><img src="<?= base_url('assets') ?>/image/lpse-nama.png" alt="Logo" srcset=""></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Pemilihan</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-badge.html">Badge</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-button.html">Button</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-card.html">Card</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-carousel.html">Carousel</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-collapse.html">Collapse</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-dropdown.html">Dropdown</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-list-group.html">List Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-modal.html">Modal</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-navs.html">Navs</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-pagination.html">Pagination</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-progress.html">Progress</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-spinner.html">Spinner</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-tooltip.html">Tooltip</a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Paket Pemilihan</h3>
            </div>
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar Alat</h4>
                                    <hr>
                                    <h6 class="card-subtitle">
                                        <div class="btn-list">
                                            <a href="#" id="refresh_tabel" class="btn btn-outline-primary float-right"><i class="fas fa-redo-alt" data-toggle="tooltip" data-placement="bottom" title="refresh"></i> </a>
                                            <button class="btn btn-outline-success float-right" data-toggle="modal" data-target="#success-header-modal"><i class="fas fa-user-plus" data-toggle="tooltip" data-placement="bottom" title="Add"></i></button>
                                        </div>
                                    </h6>
                                    <div class="table-responsive">
                                        <table id="pemilihan" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kode RUP</th>
                                                    <th>Kode Tender</th>
                                                    <th>Nama Tender</th>
                                                    <th>Satuan Kerja</th>
                                                    <th>Jenis Pengadaan</th>
                                                    <th>Metode Pengadaan</th>
                                                    <th>Nilai Pagu</th>
                                                    <th>Nilai HPS</th>
                                                    <th>Tanggal</th>
                                                    <th>Tahapan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($all as $data) : ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?php echo $data->kode_rup ?></td>
                                                        <td><?php echo $data->kode_tender ?></td>
                                                        <td><?php echo $data->nama_tender ?></td>
                                                        <td><?php echo $data->satuan_kerja ?></td>
                                                        <td><?php echo $data->jenis_pengadaan ?></td>
                                                        <td><?php echo $data->metode_pengadaan ?></td>
                                                        <td><?php echo $data->nilai_pagu ?></td>
                                                        <td><?php echo $data->nilai_hps ?></td>
                                                        <td><?php echo $data->tanggal ?></td>
                                                        <td><?php echo $data->tahapan ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Row -->
                    <!-- End Location and Earnings Charts Section -->

                    <!-- Start Top Leader Table -->
                    <!-- <?php //$this->load->view('component/_table') 
                            ?> -->
                    <!-- End Top Leader Table -->
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; LPSE Kaimana</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="">HammaCreative</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url('assets/dashboard') ?>/js/bootstrap.js"></script>
    <script src="<?= base_url('assets/dashboard') ?>/js/app.js"></script>

    <!-- Need: Apexcharts -->//
    <script src="<?= base_url('assets/dashboard') ?>/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets/dashboard') ?>/js/pages/dashboard.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#pemilihan').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');


            $('#pemeliharaan').DataTable();
            $('#kalibrasi').DataTable();

        });
    </script>
</body>

</html>