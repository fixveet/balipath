<?php
include './php/koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Transaction</title>
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

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <script src="./assets/ckeditor/ckeditor.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
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
              <li class="nav-item active">
                <a href="index.php">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="base.php" class="nav-link" aria-expanded="false">
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
              <a href="index.html" class="logo">
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
                <h3 class="fw-bold mb-3">Transaction</h3>
              </div>
            </div>
            <div class="row">
              <form method="post" enctype="multipart/form-data">
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table table-bordered">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" style="width: 30%">Information</th>
                          <th scope="col" style="width: 70%">Details</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Name</td>
                          <td><input class="form-control" type="text" name="names" value="<?= isset($detail['names']) ? $detail['names'] : '' ?>" />
                          </td>
                        </tr>
                        <tr>
                          <td>pic</td>
                          <td><input type="file" name="pic" value="<?= $detail['pic'] ?>"  /></td>
                        </tr>
                        <tr>
                          <td>notes</td>
                          <td><input class="form-control" type="text" name="notes" value="<?= isset($detail['notes']) ? $detail['notes'] : ' '?>" /></td>
                        </tr>
                        <tr>
                          <td>Date</td>
                          <td>
                            <input class="form-control" type="date" name="waktu" value="<?= $detail['waktu'] ?>" />
                          </td>
                        </tr>
                        <tr>
                          <td>prices</td>
                          <td><input class="form-control" type="number" name="prices" value="<?= $detail['prices'] ?>" /></td>
                        </tr>
                        <tr>
                            <td>Destination</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Destinations
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest1" value="1" <?= isset($detail['destination']) && in_array('1', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest1">Canggu</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest2" value="2" <?= isset($detail['destination']) && in_array('2', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest2">Jimbaran</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest3" value="3" <?= isset($detail['destination']) && in_array('3', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest3">Kuta</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest4" value="4" <?= isset($detail['destination']) && in_array('4', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest4">Nusa Dua</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest5" value="5" <?= isset($detail['destination']) && in_array('5', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest5">Seminyak</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest6" value="6" <?= isset($detail['destination']) && in_array('6', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest6">Tanah Lot</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest7" value="7" <?= isset($detail['destination']) && in_array('7', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest7">Ubud</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Activity</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Activities
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act1" value="1" <?= isset($detail['act']) && in_array('1', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act1">Any</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act2" value="2" <?= isset($detail['act']) && in_array('2', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act2">City Activity</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act3" value="3" <?= isset($detail['act']) && in_array('3', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act3">Cultural</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act4" value="4" <?= isset($detail['act']) && in_array('4', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act4">Thematic Acts</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act5" value="5" <?= isset($detail['act']) && in_array('5', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act5">Family Friendly</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act6" value="6" <?= isset($detail['act']) && in_array('6', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act6">Outdoors Activity</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act7" value="7" <?= isset($detail['act']) && in_array('7', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act7">Adventure Acts</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Duration</td>
                            <td>
                                <select name="duration" class="form-select">
                                    <option value="01">Any</option>
                                    <option value="1">0-1 Hours</option>
                                    <option value="2">3-5 Hours</option>
                                    <option value="3">5-7 Hours</option>
                                    <option value="4">1 Day (7+ Hours)</option>
                                    <option value="5">2 Days</option>
                                    <option value="6">3 Days</option>
                                    <option value="8">4 Days</option>
                                    <option value="9">5+ Days</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                          <td>description</td>
                          <td>
                            <textarea class="form-control ckeditor" name="description" value="<?= $detail['description'] ?>"></textarea>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" style="border: none;">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </form>
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
    <script>
      ClassicEditor.create(document.querySelector(".ckeditor")).catch((error) => {
        console.error(error);
      });
    </script>
  </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil data dari formulir
  $names = mysqli_real_escape_string($conn, $_POST['names']);
  $waktu = mysqli_real_escape_string($conn, $_POST['waktu']);
  $prices = mysqli_real_escape_string($conn, $_POST['prices']);
  $notes = mysqli_real_escape_string($conn, $_POST['notes']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $pic = $_FILES['pic']['name'];
  $duration = $_POST['duration']; // Menangkap nilai duration dari dropdown

  // Proses upload file gambar
  $lokasifoto = $_FILES['pic']['tmp_name'];
  if (!empty($lokasifoto)) {
    move_uploaded_file($lokasifoto, "uploads/" . $pic);
  }

  // Mengambil data destination yang dipilih (dalam bentuk array ID)
  $destination = isset($_POST['destination']) ? implode(',', $_POST['destination']) : '';
  // Mengambil data destination yang dipilih (dalam bentuk array ID)
  $act = isset($_POST['act']) ? implode(',', $_POST['act']) : '';

  // Menambahkan data ke tabel 'tour'
  $insert_query = "INSERT INTO tour (names, waktu, prices, notes, pic, description, destination, act, duration) 
                  VALUES ('$names', '$waktu', '$prices', '$notes', '$pic', '$description', '$destination', '$act', '$duration')";

  if ($conn->query($insert_query) === TRUE) {
    // Jika data berhasil ditambahkan, tampilkan alert dan redirect
    echo "<script>
            alert('Data berhasil ditambahkan!');
            window.location.href = 'index.php'; // Redirect ke index.php
          </script>";
  } else {
    // Jika ada error, tampilkan pesan error
    echo "<script>alert('Error: " . $conn->error . "');</script>";
  }
}
?>

