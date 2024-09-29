<?php
include './travel/php/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BaliPath – Travel & Rental Agency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/bali/balipath.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/bali/balipath.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/bali/balipath.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/bali/balipath.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/bali/balipath.png" />
    <link rel="icon" type="image/png" href="img/bali/balipath.png" sizes="32x32" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/bali/balipath.png" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="#000" name="msapplication-TileColor" />
    <meta content="#000" name="theme-color" />
  </head>

  <body>
    <div class="container">
      <div class="header">
            <div class="wrap">
              <div class="wrap_float">
                <div class="header__bottom">
                  <a href="#" class="logo">BaliPath</a>
                  <div class="menu" id="js-menu">
                    <div class="close"></div>
                    <div class="scroll">
                      <a class="current">Home</a>
                      <div class="scroll_wrap">
                        <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="about.html" class="active">About</a></li>
                          <li><a href="#">Destinations</a></li>
                          <li><a href="contact.html">Contacts</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mobile_btn" id="mobile_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="breadcrumbs">
        <div class="wrap">
          <div class="wrap_float">
            <a href="#">Home</a>
            <span class="separator">/</span>
            <a href="#" class="current">Tour</a>
          </div>
        </div>
      </div>
      
      <div class="page_content single-page tour-single">
        
        <div class="content-body">
          <div class="wrap">
            <div class="wrap_float">
              <div class="single-left">
                <div class="single-content page--content details">
                  <h2>Tour details</h2>
                  <?php
                  // Memeriksa koneksi
                  if ($conn->connect_error) {
                      die("Koneksi gagal: " . $conn->connect_error);
                  }

                  // Mendapatkan id dari URL
                  $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

                  // Query untuk mengambil data berdasarkan id
                  $query = "SELECT * FROM tour WHERE id = $id";
                  $result = $conn->query($query);

                  // Memeriksa apakah ada data yang diambil
                  if ($result && $result->num_rows > 0) {
                      while ($data = $result->fetch_assoc()) {
                          $description_clean = str_replace(['<p>', '</p>'], '', $data['description']);
                          ?>
                          <p>
                            <?= htmlspecialchars($description_clean) ?>
                          </p>
                          <?php
                      }
                  } else {
                      echo "<p>Tour not found.</p>";
                  }


                  ?>
                </div>
              </div>
              <div class="single-right">
                <div class="single-sidebar">
                  <div class="tour--info">
                    
                  <?php
                    // Memeriksa koneksi
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }

                    // Mendapatkan id dari URL
                    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

                    // Query untuk mengambil data berdasarkan id
                    $query = "SELECT * FROM tour WHERE id = $id";
                    $result = $conn->query($query);

                    // Memeriksa apakah ada data yang diambil
                    if ($result && $result->num_rows > 0) {
                        while ($data = $result->fetch_assoc()) {
                            // Konversi durasi numerik ke deskripsi yang sesuai
                            switch ($data['duration']) {
                                case '01':
                                    $duration_display = 'Any';
                                    break;
                                case '1':
                                    $duration_display = '0-1 Hours';
                                    break;
                                case '2':
                                    $duration_display = '3-5 Hours';
                                    break;
                                case '3':
                                    $duration_display = '5-7 Hours';
                                    break;
                                case '4':
                                    $duration_display = '1 Day (7+ Hours)';
                                    break;
                                case '5':
                                    $duration_display = '2 Days';
                                    break;
                                case '6':
                                    $duration_display = '3 Days';
                                    break;
                                case '8':
                                    $duration_display = '4 Days';
                                    break;
                                case '9':
                                    $duration_display = '5+ Days';
                                    break;
                                default:
                                    $duration_display = 'Unknown Duration'; // Atur sesuai kebutuhan
                            }
                            ?>

                            <!-- Tampilkan data yang diambil -->
                            <div class="tour-item">
                                <div class="top" style="background-image: url(./travel/uploads/<?= htmlspecialchars($data['pic']) ?>)">
                                    <div class="flex-bottom">
                                        <h3 class="_title"><?= htmlspecialchars($data['names']) ?> | $<?= htmlspecialchars($data['prices']) ?></h3>
                                        <div class="time"><?= htmlspecialchars($duration_display) ?></div>  
                                    </div>
                                </div>

                            </div>

                            <?php
                        }
                    } else {
                        echo "<p>Tour not found.</p>";
                    }

                  ?>

                    <div class="bottom">
                      <div class="cost">
                      </div>
                      <button class="btn getModal" data-href="#book-now">Book now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-fixed-bottom getModal" data-href="#book-now">Book now</div>
      </div>

      <div class="footer">
        <div class="footer_top">
          <div class="wrap">
            <div class="wrap_float">
              <div class="footer_head_mobile">
                <div class="logo">BaliPath</div>
                <div class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui?</div>
              </div>
              <div class="footer_top_menu">
                <ul>
                  <li><a href="/" class="active">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Destinations</a></li>
                  <li><a href="#">Contacts</a></li>
                </ul>
              </div>
              <div class="socials">
                <a href="#" class="a facebook"></a>
                <a href="#" class="a instagram"></a>
                <a href="#" class="a pinterest"></a>
                <a href="#" class="a twitter"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_center">
          <div class="wrap">
            <div class="wrap_float">
              <div class="footer_center_left">
                <a href="/" class="logo">BaliPath</a>
                <div class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium.</div>
              </div>
              <div class="footer_center_menu">
                <ul>
                  <li><a href="#">Destinations</a></li>
                  <li><a href="#">Family Friendly Tours</a></li>
                  <li><a href="#">Outdoor Activites</a></li>
                  <li><a href="#">City Tours</a></li>
                  <li><a href="#">Holiday & Seasonal Tours</a></li>
                  <li><a href="#">Cultural & Thematic Tours</a></li>
                  <li><a href="#">Wild & Adventure Tours</a></li>
                </ul>
              </div>
              <div class="footer_center_right">
                <div class="_title">CONTACTS</div>
                <div class="text">
                  <p>Address: <b>12 Main Street . Bali</b></p>
                  <p>Phone: <a href="#">+1 1235 6789 10</a></p>
                  <p><a href="#">info@phi.ta</a></p>
                </div>
              </div>
              <div class="mobile_socials">
                <a href="#" class="a facebook"></a>
                <a href="#" class="a instagram"></a>
                <a href="#" class="a pinterest"></a>
                <a href="#" class="a twitter"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_bottom">Copyright 2024 <a href="#">info@phi.ta</a> | All Right Reserved</div>
      </div>
    </div>

    <script defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_HERE&callback=initMap"></script>
    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/jquery-ui.min.js"></script>
    <script defer src="js/slick.min.js"></script>
    <script defer src="js/jquery.arcticmodal.min.js"></script>
    <script defer src="js/lightgallery.js"></script>
    <script defer src="js/spincrement.min.js"></script>
    <script defer src="js/scripts.min.js"></script>
  </body>
</html>
