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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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
    .floating-btn {
    position: fixed;
    bottom: 20px; /* Jarak dari bawah */
    right: 20px;  /* Jarak dari kanan */
    z-index: 1000; /* Pastikan tombol berada di atas elemen lainnya */
    border-radius: 50%; /* Membuat tombol berbentuk bulat */
    width: 60px; /* Ukuran lebar tombol */
    height: 60px; /* Ukuran tinggi tombol */
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
    background-color: #ff7f00; /* Warna merah untuk tombol */
    color: white; /* Warna ikon */
  }

  .floating-btn i {
      font-size: 24px; /* Ukuran ikon */
  }

  </style>
  <body>
    <div class="container">
    <a href="destination.php" class="btn btn-danger clear-filter floating-btn">
      <i class="bi bi-trash"></i>
    </a>
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
              <form action="destination.php" method="GET">
                <div class="search_tour_form">
                  <div class="fields__block">
                    <div class="fields">
                      <div class="field">
                        <div class="label">Keywords</div>
                        <div class="field_wrap keywords">
                          <input type="text" class="input" name="keywords" />
                        </div>
                      </div>
                      <div class="field">
                        <div class="label">Activity</div>
                        <div class="field_wrap select_field">
                          <select name="act">
                            <option value="">Any</option>
                            <option value="1">City Tours</option>
                            <option value="2">Cultural & Thematic Tours</option>
                            <option value="3">Family Friendly Tours</option>
                            <option value="4">Holiday & Seasonal Tours</option>
                            <option value="5">Indulgence & Luxury Tours</option>
                            <option value="6">Outdoor Activities</option>
                            <option value="7">Relaxation Tours</option>
                            <option value="8">Wild & Adventure Tours</option>
                          </select>
                        </div>
                      </div>
                      <div class="field">
                        <div class="label">Destination</div>
                        <div class="field_wrap select_field">
                          <select name="destination">
                            <option value="">Any</option>
                            <option value="1">Canggu</option>
                            <option value="2">Jimbaran</option>
                            <option value="3">Kuta</option>
                            <option value="4">Nusa Dua</option>
                            <option value="5">Seminyak</option>
                            <option value="6">Tanah Lot</option>
                            <option value="7">Ubud</option>
                          </select>
                        </div>
                      </div>
                      <div class="field">
                        <div class="label">Duration</div>
                        <div class="field_wrap select_field">
                          <select name="duration">
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
                        </div>
                      </div>
                      <div class="field">
                        <div class="label">Date</div>
                        <div class="field_wrap calendar_field">
                          <input type="text" class="calendar js_calendar" name="waktu" />
                        </div>
                      </div>
                    </div>
                    
                    <button type="submit" name="search" class="submit"></button>
                    
                  </div>
                </div>
              </form>
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
                      }else {
                        echo "Koneksi berhasil"; // Pesan debug
                      }
                      
                      // Ambil data dari form pencarian
                      $keywords = isset($_GET['keywords']) ? $conn->real_escape_string($_GET['keywords']) : '';
                      $activity = isset($_GET['act']) ? $conn->real_escape_string($_GET['act']) : '';
                      $destination = isset($_GET['destination']) ? $conn->real_escape_string($_GET['destination']) : '';
                      $duration = isset($_GET['duration']) ? $conn->real_escape_string($_GET['duration']) : '';
                      $date = isset($_GET['waktu']) ? $conn->real_escape_string($_GET['waktu']) : '';

                      // Ambil halaman saat ini, jika tidak ada set ke 1
                      $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                      $limit = 10; // Jumlah data per halaman
                      $offset = ($page - 1) * $limit; // Hitung offset

                      // Query dasar untuk menghitung total jumlah destinasi
                      $total_query = "SELECT COUNT(*) as total FROM tour WHERE 1=1"; // Awal dengan kondisi 1=1
                      // Cek apakah tombol Search ditekan
                      $search = isset($_GET['search']); // Akan bernilai true jika tombol Search ditekan
                      // Tambahkan kondisi berdasarkan input pencarian
                      $conditions = []; // Array untuk menyimpan kondisi
                      if ($search){
                        if (!empty($keywords)) {
                          $conditions[] = "(names LIKE '%$keywords%' OR notes LIKE '%$keywords%')";
                        }
                        if ($activity !== '') { // Hanya filter jika bukan "Any"
                          $conditions[] = "act = '$activity'";
                        }
                        if (!empty($destination)) {
                          $conditions[] = "destination = '$destination'";
                        }
                        if ($duration !== '01') { // Hanya filter jika bukan "Any"
                          $conditions[] = "duration = '$duration'";
                        }
                        if (!empty($date)) {
                          $conditions[] = "waktu = '$date'";
                        }
                      }
                      // Tambahkan kondisi ke query total jika ada
                      if (!empty($conditions)) {
                        $total_query .= " AND " . implode(' AND ', $conditions);
                      }

                      // Hitung total data
                      $total_result = $conn->query($total_query);
                      $total_row = $total_result->fetch_assoc();
                      $total_data = $total_row['total'];
                      $total_pages = ceil($total_data / $limit); // Total halaman

                      // Query untuk mengambil data dari tabel tour dengan filter
                      $query = "SELECT * FROM tour WHERE 1=1"; // Awal dengan kondisi 1=1

                      // Tambahkan kondisi berdasarkan input pencarian
                      if (!empty($conditions)) {
                        $query .= " AND " . implode(' AND ', $conditions);
                      }

                      // Tambahkan limit dan offset untuk pagination
                      $query .= " LIMIT $limit OFFSET $offset";

                      $result = $conn->query($query);

                      // Menyimpan hasil filter dalam array
                      $tours = [];
                      if ($result && $result->num_rows > 0) {
                        while ($data = $result->fetch_assoc()) {
                            $tours[] = $data; // Simpan data ke dalam array
                        }
                      }

                      // Memeriksa apakah ada data yang diambil
                      if (!empty($tours)) {
                        foreach ($tours as $data) {
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
                            } 





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




