<?php
include './php/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
  </head>
  <style>
    .pagination .page-link {
      color: white; /* Ubah warna teks menjadi putih */
    }
    
    .pagination .page-item.active .page-link {
      background-color: #007bff; /* Ubah warna latar belakang untuk item aktif */
      color: white; /* Ubah warna teks item aktif menjadi putih */
    }

    .pagination .page-link:hover {
      background-color: #0056b3; /* Warna saat hover */
      color: white; /* Warna teks saat hover */
    }
  </style>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img src="assets/img/balipath.png" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a href="index.php">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item active">
                <a data-bs-toggle="collapse" href="#base" class="collapsed" aria-expanded="false">
                  <i class="fas fa-layer-group"></i>
                  <p>Base</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.php" class="logo">
                <img src="assets/img/balipath.png" alt="navbar brand" class="navbar-brand" height="20" />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                      <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Admin</span>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div>
                <h3 class="fw-bold mb-3">Data</h3>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="edit-tour.php" class="btn btn-label-info btn-round me-2">Manage</a>
              </div>
            </div>
            <div class="row">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table table-bordered text-start">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" style="width: 8%">No</th>
                                <th scope="col" style="width: 60%">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Cek koneksi
                            if (!$conn) {
                                die("Koneksi gagal: " . $conn->connect_error);
                            }

                            // Ambil halaman saat ini, jika tidak ada set ke 1
                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $limit = 10; // Jumlah data per halaman
                            $offset = ($page - 1) * $limit; // Hitung offset

                            // Query untuk menghitung total jumlah tour
                            $total_query = $conn->query("SELECT COUNT(*) as total FROM tour");
                            if (!$total_query) {
                                die("Query error: " . $conn->error);
                            }

                            $total_row = $total_query->fetch_assoc();
                            $total_data = $total_row['total'];
                            $total_pages = ceil($total_data / $limit); // Total halaman

                            // Query untuk mengambil data tour dengan limit dan offset
                            $tour_query = "SELECT * FROM tour LIMIT $limit OFFSET $offset";
                            $tour = $conn->query($tour_query);

                            if ($tour && $tour->num_rows > 0) {
                                $no = $offset + 1; // Set nomor urut berdasarkan offset
                                while ($data = $tour->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= htmlspecialchars($data['names']) ?></td>
                                        <td>
                                            <a href="edit-tour.php?id=<?= $data['id'] ?>" class="btn btn-warning m-1"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger m-1" href="./php/hapus-data.php?id=<?= $data['id'] ?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                            } else {
                                echo "<tr><td colspan='3'>Tidak ada data tour.</td></tr>"; // Perbaiki colspan menjadi 3
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- Navigasi Paginasi -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php if ($page > 1): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>

                            <?php if ($page < $total_pages): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>

          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-center">
            <div class="copyright">
              2024, made with <i class="fa fa-heart heart text-danger"></i> by
              <a href="http://www.themekita.com">phi</a>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>
  </body>
</html>
