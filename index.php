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
                      <li><a href="#" class="active">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="destination.php">Destinations</a></li>
                      <li><a href="contact.php">Contacts</a></li>
                      <li><a href="./login/index.php">login</a></li>
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
      <div class="homepage_slider">
        <div class="slider-container">
          <div class="slider-control left inactive"></div>
          <div class="slider-control right"></div>
          <ul class="slider-pagi"></ul>
          <div class="slider">
            <div class="slide slide-0 active">
              <div class="slide__bg" style="background-image: url(img/bali/jimbaran.jpeg)"></div>
              <div class="slide__content">
                <div class="slide__text">
                  <h2 class="slide__text-heading">Jimbaran</h2>
                  <p class="slide__text-desc">Experience the Best of Jimbaran Bali with Comfort and Ease</p>
                  <div class="slide__controls">
                    <a href="#" class="btn">Travel</a>
                    <a href="#" class="btn btn__choose_tour">Rentals</a>
                    <a class="arrow next"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide slide-1">
              <div class="slide__bg" style="background-image: url(img/bali/bali-pura.jpg)"></div>
              <div class="slide__content">
                <div class="slide__text">
                  <h2 class="slide__text-heading">Pura Ulun Danu Bratan</h2>
                  <p class="slide__text-desc">Unveil the Mystical Beauty of Pura Ulun Danu Bratan in Bedugul</p>
                  <div class="slide__controls">
                    <a href="#" class="btn">Travel</a>
                    <a href="#" class="btn btn__choose_tour">Rentals</a>
                    <a class="arrow next"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="most_popular">
          <span> Discover Bali: The Top Destination of the Year</span>
        </div>
        <div class="categories" id="header_categories">
          <div class="wrap">
            <div class="wrap_float">
              <div class="items">
                <div class="scroll">
                  <?php
                    // Memeriksa koneksi
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }
                    // Query untuk mengambil data dari tabel tour
                    $query = "SELECT * FROM tour";
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
                      <!-- Menampilkan data destinasi -->
                        <a href="tour.php?id=<?= $data['id'] ?>" class="categories_item" >
                          <div class="icon">
                              <div class="icon-wrap">
                                <img src="./travel/uploads/<?= htmlspecialchars($data['pic']) ?>" class="image-cover" alt="Tour Image" />
                              </div>
                              <div class="_title">
                                <h3 class="title"><?= htmlspecialchars($data['names']) ?></h3>
                              </div>
                          </div>
                        </a>
                    <?php
                          }
                        } else {
                          echo "<p>Tidak ada data tour.</p>";
                      }
                    ?>
                </div>
              </div>
              <div class="other_items" id="header_other_items">
                <div class="categories_item item">
                  <div class="icon">
                    <div class="arrow"></div>
                  </div>
                  <div class="_title">See more 4 destinations</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="most_popular__section mainpage-slider">
        <div class="wrap">
          <div class="wrap_float">
            <div class="top_part">
              <div class="top_part_left">
                <p class="section_subtitle">POPULARLY</p>
                <h2 class="section_title">
                  Most popular <br />
                  holiday destinations
                </h2>
              </div>
              <div class="top_part_right">
                <a href="#" class="btn">
                  <span>View all tours</span>
                </a>
                <div class="controls" id="most_popular__arrows">
                  <div class="arrow prev"></div>
                  <div class="arrow next"></div>
                </div>
              </div>
            </div>
            <div class="most_popular__section__slider" id="most_popular__slider">
              <?php
                    // Memeriksa koneksi
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }
                    // Query untuk mengambil data dari tabel tour
                    $query = "SELECT * FROM tour";
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
                      <!-- Menampilkan data destinasi -->
                      <a href="tour.php?id=<?= $data['id'] ?>" class="slider_item" style="background-image: url(./travel/uploads/<?= htmlspecialchars($data['pic']) ?>)">
                          <div class="slider_item__content">
                              <h3 class="title"><?= htmlspecialchars($data['names']) ?> | $<?= htmlspecialchars($data['prices']) ?></h3>
                              <p class="description"><?= htmlspecialchars($data['notes']) ?></p>
                          </div>
                      </a>
                    <?php
                          }
                        } else {
                          echo "<p>Tidak ada data tour.</p>";
                      }
                    ?>
            </div>
          </div>
        </div>
      </div>
      <div class="popular_destination__section mainpage-slider">
        <div class="wrap">
          <div class="wrap_float">
            <div class="top_part">
              <div class="top_part_left">
                <div class="section_subtitle">TRUSTED</div>
                <h2 class="section_title">Our Clients</h2>
              </div>
              <div class="top_part_right">
                <div class="controls" id="popular_destination__arrows">
                  <div class="arrow prev"></div>
                  <div class="arrow next"></div>
                </div>
              </div>
            </div>
            <div class="section_content">
              <div class="popular_destination__slider" id="popular_destination__slider">
                <div class="slide_item">
                  <a href="#" class="slide_item_img">
                    <div class="sq_parent">
                      <div class="sq_wrap">
                        <div class="sq_content" style="background-image: url(img/bali/tourist-1.jpeg)"></div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="slide_item_content">
                    <div class="flag">
                      <img src="img/turkey.svg" alt="" />
                    </div>
                    <h3 class="slide_title">Turkey</h3>
                  </a>
                </div>
                <div class="slide_item">
                  <a href="#" class="slide_item_img">
                    <div class="sq_parent">
                      <div class="sq_wrap">
                        <div class="sq_content" style="background-image: url(img/bali/tourist-1.jpeg)"></div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="slide_item_content">
                    <div class="flag">
                      <img src="img/egypt-3.svg" alt="" />
                    </div>
                    <h3 class="slide_title">Egypt</h3>
                  </a>
                </div>
                <div class="slide_item">
                  <a href="#" class="slide_item_img">
                    <div class="sq_parent">
                      <div class="sq_wrap">
                        <div class="sq_content" style="background-image: url(img/bali/tourist-1.jpeg)"></div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="slide_item_content">
                    <div class="flag">
                      <img src="img/brazil-3.svg" alt="" />
                    </div>
                    <h3 class="slide_title">Brazil</h3>
                  </a>
                </div>
                <div class="slide_item">
                  <a href="#" class="slide_item_img">
                    <div class="sq_parent">
                      <div class="sq_wrap">
                        <div class="sq_content" style="background-image: url(img/bali/tourist-1.jpeg)"></div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="slide_item_content">
                    <div class="flag">
                      <img src="img/cyprus-3.svg" alt="" />
                    </div>
                    <h3 class="slide_title">Cyprus</h3>
                  </a>
                </div>
                <div class="slide_item">
                  <a href="#" class="slide_item_img">
                    <div class="sq_parent">
                      <div class="sq_wrap">
                        <div class="sq_content" style="background-image: url(img/bali/tourist-1.jpeg)"></div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="slide_item_content">
                    <div class="flag">
                      <img src="img/usa.svg" alt="" />
                    </div>
                    <h3 class="slide_title">America</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="top_destination mainpage-slider">
        <div class="section_heading">
          <div class="wrap">
            <div class="wrap_float">
              <div class="section_subtitle">TOP DESTINATIONS</div>
              <h2 class="section_title">BaliPath - Travel Operator</h2>
              <div class="description">
                <div class="left">
                  <p class="text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                </div>
                <div class="right">
                  <p class="text">Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
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
