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
  <style>
    .pagination .page-link {
      color: white; /* Ubah warna teks menjadi putih */
    }
    
    .pagination .page-item.active .page-link {
      background-color: 758694; /* Ubah warna latar belakang untuk item aktif */
      color: white; /* Ubah warna teks item aktif menjadi putih */
    }

    .pagination .page-link:hover {
      background-color: #0056b3; /* Warna saat hover */
      color: white; /* Warna teks saat hover */
    }
  </style>
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
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="#" class="active">Destinations</a></li>
                      <li><a href="contact.php">Contacts</a></li>
                      <li><a href="./travel/index.php">login</a></li>
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
            <a href="#" class="current">Destinations</a>
          </div>
        </div>
      </div>
      <div class="page_head" style="background-image: url(img/header5.jpg)">
        <div class="wrap">
          <div class="wrap_float">
            <div class="title">Search Tours</div>
            <div class="search_tour">
            <div class="container">
                <form action="destination.php" method="GET">
                    <div class="search_tour_form">
                        <div class="fields__block">
                            <div class="fields">
                                <div class="field">
                                    <div class="label">Keywords</div>
                                    <div class="field_wrap keywords">
                                        <input type="text" class="input" name="keywords" value="<?php echo htmlspecialchars($_GET['keywords'] ?? ''); ?>" />
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Activity</div>
                                    <div class="field_wrap select_field">
                                        <select name="act">
                                            <option value="">Any</option>
                                            <option value="city-tours" <?php if ($_GET['act'] ?? '' == 'city-tours') echo 'selected'; ?>>City Tours</option>
                                            <option value="cultural-thematic-tours" <?php if ($_GET['act'] ?? '' == 'cultural-thematic-tours') echo 'selected'; ?>>Cultural & Thematic Tours</option>
                                            <option value="family-friendly-tours" <?php if ($_GET['act'] ?? '' == 'family-friendly-tours') echo 'selected'; ?>>Family Friendly Tours</option>
                                            <option value="holiday-seasonal-tours" <?php if ($_GET['act'] ?? '' == 'holiday-seasonal-tours') echo 'selected'; ?>>Holiday & Seasonal Tours</option>
                                            <option value="indulgence-luxury-tours" <?php if ($_GET['act'] ?? '' == 'indulgence-luxury-tours') echo 'selected'; ?>>Indulgence & Luxury Tours</option>
                                            <option value="outdoor-activites" <?php if ($_GET['act'] ?? '' == 'outdoor-activites') echo 'selected'; ?>>Outdoor Activities</option>
                                            <option value="relaxation-tours" <?php if ($_GET['act'] ?? '' == 'relaxation-tours') echo 'selected'; ?>>Relaxation Tours</option>
                                            <option value="wild-adventure-tours" <?php if ($_GET['act'] ?? '' == 'wild-adventure-tours') echo 'selected'; ?>>Wild & Adventure Tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Destination</div>
                                    <div class="field_wrap select_field">
                                        <select name="destination">
                                            <option value="">Any</option>
                                            <option value="canggu" <?php if ($_GET['destination'] ?? '' == 'canggu') echo 'selected'; ?>>Canggu</option>
                                            <option value="jimbaran" <?php if ($_GET['destination'] ?? '' == 'jimbaran') echo 'selected'; ?>>Jimbaran</option>
                                            <option value="kuta" <?php if ($_GET['destination'] ?? '' == 'kuta') echo 'selected'; ?>>Kuta</option>
                                            <option value="nusa-Dua" <?php if ($_GET['destination'] ?? '' == 'nusa-Dua') echo 'selected'; ?>>Nusa Dua</option>
                                            <option value="seminyak" <?php if ($_GET['destination'] ?? '' == 'seminyak') echo 'selected'; ?>>Seminyak</option>
                                            <option value="tanah-lot" <?php if ($_GET['destination'] ?? '' == 'tanah-lot') echo 'selected'; ?>>Tanah Lot</option>
                                            <option value="ubud" <?php if ($_GET['destination'] ?? '' == 'ubud') echo 'selected'; ?>>Ubud</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Duration</div>
                                    <div class="field_wrap select_field">
                                        <select name="duration">
                                            <option value="01">Any</option>
                                            <option value="1" <?php if ($_GET['duration'] ?? '' == '1') echo 'selected'; ?>>0-1 Hours</option>
                                            <option value="2" <?php if ($_GET['duration'] ?? '' == '2') echo 'selected'; ?>>3-5 Hours</option>
                                            <option value="3" <?php if ($_GET['duration'] ?? '' == '3') echo 'selected'; ?>>5-7 Hours</option>
                                            <option value="4" <?php if ($_GET['duration'] ?? '' == '4') echo 'selected'; ?>>1 Day (7+ Hours)</option>
                                            <option value="5" <?php if ($_GET['duration'] ?? '' == '5') echo 'selected'; ?>>2 Days</option>
                                            <option value="6" <?php if ($_GET['duration'] ?? '' == '6') echo 'selected'; ?>>3 Days</option>
                                            <option value="8" <?php if ($_GET['duration'] ?? '' == '8') echo 'selected'; ?>>4 Days</option>
                                            <option value="9" <?php if ($_GET['duration'] ?? '' == '9') echo 'selected'; ?>>5+ Days</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="label">Date</div>
                                    <div class="field_wrap calendar_field">
                                        <input type="text" class="calendar js_calendar" name="waktu" value="<?php echo htmlspecialchars($_GET['waktu'] ?? ''); ?>" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="submit">Search</button>
                        </div>
                    </div>
                </form>

                <div class="results">
                    <?php
                    
                    // Mengambil parameter dari URL
                    $keywords = '%' . ($_GET['keywords'] ?? '') . '%';
                    $act = $_GET['act'] ?? '';
                    $destination = $_GET['destination'] ?? '';
                    $duration = $_GET['duration'] ?? '';
                    $waktu = $_GET['waktu'] ?? '';

                    // Menyiapkan query
                    $query = "SELECT * FROM tour WHERE 
                        (names LIKE ? OR description LIKE ? OR notes LIKE ? OR destination LIKE ?) AND 
                        (act = ? OR ? = '') AND 
                        (destination = ? OR ? = '') AND 
                        (duration = ? OR ? = '') AND 
                        (waktu = ? OR ? = '') 
                        ORDER BY id DESC";

                    // Mempersiapkan statement
                    $stmt = $conn->prepare($query);

                    // Menggunakan bind_param dengan jumlah yang sesuai
                    $stmt->bind_param('ssssssssss', $keywords, $keywords, $keywords, $keywords, $act, $act, $destination, $destination, $duration, $duration, $waktu, $waktu);

                    $stmt->execute();
                    $res = $stmt->get_result();

                    if ($res->num_rows > 0) {
                        while ($data = $res->fetch_assoc()) {
                            $duration_display = ''; // Tambahkan logika untuk menampilkan durasi sesuai kebutuhan
                            ?>
                            <a href="tour.php?id=<?= $data['id'] ?>" class="slider_item" style="background-image: url(./travel/uploads/<?= $data['pic'] ?>)">
                                <div class="slider_item__content">
                                    <h3 class="title"><?= htmlspecialchars($data['names']) ?> | from $<?= htmlspecialchars($data['prices']) ?></h3>
                                    <p class="description"><?= htmlspecialchars($data['notes']) ?></p>
                                    <div class="days">
                                        <span><?= htmlspecialchars($duration_display) ?> </span>
                                    </div>
                                </div>
                            </a>
                            <?php 
                        }
                    } else { 
                        echo "<p>Tidak ada data ditemukan.</p>";
                    } 
                    ?>
                </div>
            </div>

            </div>
          </div>
        </div>
        <div class="top_destination">
          <div class="section_content popular_destination__content">
            <div class="wrap">
              <div class="wrap_float">
                <a href="tour.html" class="item">
                  <div class="sq_parent">
                    <div class="sq_wrap">
                      <div class="sq_content image" style="background-image: url(img/bali/canggu.jpeg)"></div>
                      <span>Canggu</span>
                    </div>
                  </div>
                </a>
                <a href="tour.html" class="item">
                  <div class="sq_parent">
                    <div class="sq_wrap">
                      <div class="sq_content image" style="background-image: url(img/bali/jimbaran.jpeg)"></div>
                      <span>Jimbaran</span>
                    </div>
                  </div>
                </a>
                <a href="tour.html" class="item">
                  <div class="sq_parent">
                    <div class="sq_wrap">
                      <div class="sq_content image" style="background-image: url(img/bali/kuta.jpeg)"></div>
                      <span>Kuta</span>
                    </div>
                  </div>
                </a>
                <a href="tour.html" class="item">
                  <div class="sq_parent">
                    <div class="sq_wrap">
                      <div class="sq_content image" style="background-image: url(img/bali/nusadua.jpeg)"></div>
                      <span>Nusa Dua</span>
                    </div>
                  </div>
                </a>
                <a href="tour.html" class="item">
                  <div class="sq_parent">
                    <div class="sq_wrap">
                      <div class="sq_content image" style="background-image: url(img/bali/seminyak.jpeg)"></div>
                      <span>Seminyak</span>
                    </div>
                  </div>
                </a>
                <a href="tour.html" class="item">
                  <div class="sq_parent">
                    <div class="sq_wrap">
                      <div class="sq_content image" style="background-image: url(img/bali/tanahlot.jpeg)"></div>
                      <span>Tanah Lot</span>
                    </div>
                  </div>
                </a>
                <a href="tour.html" class="item">
                  <div class="sq_parent">
                    <div class="sq_wrap">
                      <div class="sq_content image" style="background-image: url(img/bali/ubud.jpeg)"></div>
                      <span>Ubud</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page_content">
        <div class="wrap">
          <div class="wrap_float">
            <div class="main">
              <div class="most_popular__section">
                    <?php
                      // Memeriksa koneksi
                      if ($conn->connect_error) {
                          die("Koneksi gagal: " . $conn->connect_error);
                      }
                      // Ambil halaman saat ini, jika tidak ada set ke 1
                      $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                      $limit = 10; // Jumlah data per halaman
                      $offset = ($page - 1) * $limit; // Hitung offset

                      // Query untuk menghitung total jumlah destinasi
                      $total_query = $conn->query("SELECT COUNT(*) as total FROM tour");
                      $total_row = $total_query->fetch_assoc();
                      $total_data = $total_row['total'];
                      $total_pages = ceil($total_data / $limit); // Total halaman

                      // Query untuk mengambil data dari tabel tour
                      $query = "SELECT * FROM tour"; // Sesuaikan dengan nama kolom di tabel Anda
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
                                      $duration_display = 'Unknown Duration'; // Atau bisa diatur sesuai kebutuhan
                              }
                              
                              ?>
                              
                              <a href="tour.php?id=<?= $data['id'] ?>" class="slider_item" style="background-image: url(./travel/uploads/<?= $data['pic'] ?>)">
                                  <div class="slider_item__content">
                                      <h3 class="title"><?= htmlspecialchars($data['names']) ?> | from $<?= htmlspecialchars($data['prices']) ?></h3>
                                      <p class="description"><?= htmlspecialchars($data['notes']) ?></p>
                                      <div class="days">
                                          <span><?= htmlspecialchars($duration_display) ?> </span>
                                      </div>
                                  </div>
                              </a>
                              <?php
                          }
                      } else {
                          echo "<p>Tidak ada data tour.</p>";
                      }

                      // Menutup koneksi
                      
                    ?>

                    <div class="pagination">
                        <ul>
                            <?php if ($page > 1): ?>
                                <li class="prev"><a href="?page=<?= $page - 1 ?>"></a></li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="<?= $i === $page ? 'current' : '' ?>"><a href="?page=<?= $i ?>"><?= $i ?></a></li>
                            <?php endfor; ?>

                            <?php if ($page < $total_pages): ?>
                                <li class="next"><a href="?page=<?= $page + 1 ?>"></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
              </div>
            </div>
            <div class="sidebar">
              <div class="latest_tours">
                <div class="block-title">Latest Tours</div>
                <?php
                
                // Asumsi $conn adalah koneksi ke database yang sudah dibuat sebelumnya
                if (!$conn) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Query untuk mengambil data tour
                $tour = $conn->query("SELECT * FROM tour ORDER BY id DESC LIMIT 2");

                // Memeriksa apakah ada data yang diambil
                if ($tour && $tour->num_rows > 0) {
                    while ($data = $tour->fetch_assoc()) {
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
                                $duration_display = 'Unknown Duration'; // Atau bisa diatur sesuai kebutuhan
                        }

                        // Tampilkan elemen tour dengan gaya yang diinginkan
                        ?>
                        <a href="tour.php?id=<?= $data['id'] ?>" class="_item">
                            <div class="left">
                                <div class="img" style="background-image: url('./travel/uploads/<?= htmlspecialchars($data['pic']) ?>');"></div>
                            </div>
                            <div class="right">
                                <div class="_title"><?= htmlspecialchars($data['names']) ?></div>
                                <div class="cost">
                                    <b>$<?= htmlspecialchars($data['prices']) ?></b>
                                </div>
                                <div class="time"><?= htmlspecialchars($duration_display) ?></div>
                            </div>
                        </a>
                        <?php
                    }
                } else {
                    echo "<p>Tidak ada data tour.</p>";
                }

                // Menutup koneksi
                $conn->close();
                ?>
              </div>
              <div class="tour_category">
                <div class="block-title">Tour Category</div>
                <ul>
                  <li><a href="#">Outdoor Activites</a></li>
                  <li><a href="#">City Tours</a></li>
                  <li><a href="#">Cultural & Thematic Tours</a></li>
                  <li><a href="#">Indulgence & Luxury Tours</a></li>
                  <li><a href="#">Family Friendly Tours</a></li>
                  <li><a href="#">Holiday & Seasonal Tours</a></li>
                </ul>
              </div>
              <div class="question-block">
                <div class="_title">Get a Question?</div>
                <div class="_text">Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.</div>
                <div class="tel">
                  <a href="#">+1 1235 6789 10</a>
                </div>
                <div class="email">
                  <a href="#">info@phi.ta</a>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="/" class="active">Destinations</a></li>
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
    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/jquery-ui.min.js"></script>
    <script defer src="js/slick.min.js"></script>
    <script defer src="js/jquery.arcticmodal.min.js"></script>
    <script defer src="js/lightgallery.js"></script>
    <script defer src="js/spincrement.min.js"></script>
    <script defer src="js/scripts.min.js"></script>
  </body>
</html>




