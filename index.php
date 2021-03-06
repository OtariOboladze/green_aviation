<!DOCTYPE html>
<html lang="en">

<?php
require 'db.php';
?>

<head>
  <title>Green Aviation</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" />
  <link rel="stylesheet" href="css/font-awesome.css" />
  <link rel="stylesheet" href="css/lineicons.css" />
  <link rel="stylesheet" href="css/weather-icons.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <nav class="navbar navbar-default navbar-inverse navbar-theme navbar-theme-abs navbar-theme-transparent navbar-theme-border" id="main-nav">
    <?php echo readfile('header_menu.php') ?>
  </nav>
  <div class="_pos-r">
    <div class="theme-hero-area _h-desk-100vh">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg" style="
              background-image: url(img/plate-flight-sky-sunset_1500x801.jpg);
            " id="hero-banner"></div>
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
        <div class="theme-hero-area-inner-shadow"></div>
        <div class="blur-area" data-bg-area="#hero-banner" data-blur-area="#hero-search-form" data-blur="20"></div>
      </div>
      <div class="theme-hero-area-body _pos-desk-v-c _w-f _pv-mob-60">
        <div class="container">
          <div class="row">
            <div class="col-md-11">
              <div class="theme-search-area theme-search-area-stacked theme-search-area-white">
                <div class="theme-search-area-header _mb-20">
                  <h1 class="theme-search-area-title">Green Aviation</h1>
                  <p class="theme-search-area-subtitle">
                    აირჩიე სასურველი ფრენა
                  </p>
                </div>
                <form action="results.php" method="post">
                  <div class="theme-search-area-form" id="hero-search-form">
                    <div class="row" data-gutter="none">
                      <div class="col-md-5">
                        <div class="row" data-gutter="none">
                          <div class="col-md-6">
                            <div class="theme-search-area-section first theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                <select class="theme-search-area-section-input typeahead" type="text" placeholder="გამგზავრება" data-provide="typeahead" name="departure">
                                  <option value="" disabled selected>გამგზავრება</option>
                                  <?php
                                  $qalaqebis_result = mysqli_query($con, "SELECT DISTINCT departure_city FROM flights");
                                  $qalaqebis_array = mysqli_fetch_all($qalaqebis_result);
                                  foreach ($qalaqebis_array as $qalaqi) {
                                    echo '<option>' . $qalaqi[key($qalaqebis_array)] . '</option>';
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="theme-search-area-section theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                <select class="theme-search-area-section-input typeahead" type="text" placeholder="ჩასვლა" data-provide="typeahead" name="arrival">
                                  <option value="" disabled selected>ჩასვლა</option>
                                  <?php
                                  $qalaqebis_result = mysqli_query($con, "SELECT DISTINCT arrival_city FROM flights");
                                  $qalaqebis_array = mysqli_fetch_all($qalaqebis_result);
                                  foreach ($qalaqebis_array as $qalaqi) {
                                    echo '<option>' . $qalaqi[key($qalaqebis_array)] . '</option>';
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row" data-gutter="none">
                          <div class="col-md-6">
                            <div class="theme-search-area-section theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 01/01" type="text" placeholder="Check-out" />
                                <input class="theme-search-area-section-input _desk-h mobile-picker" value="2021-01-01" type="date" name="date" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="theme-search-area-section theme-search-area-section-curved quantity-selector" data-increment="მგზავრი">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-people"></i>
                                <input class="theme-search-area-section-input" value="1 მგზავრი" type="text" name="passenger" />
                                <div class="quantity-selector-box" id="FlySearchPassengers">
                                  <div class="quantity-selector-inner">
                                    <p class="quantity-selector-title">
                                      მგზავრი
                                    </p>
                                    <ul class="quantity-selector-controls">
                                      <li class="quantity-selector-decrement">
                                        <a href="#">&#45;</a>
                                      </li>
                                      <li class="quantity-selector-current">
                                        1
                                      </li>
                                      <li class="quantity-selector-increment">
                                        <a href="#">&#43;</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-1">
                        <button class="theme-search-area-submit _mt-0 theme-search-area-submit-glow theme-search-area-submit-curved">
                          <i class="theme-search-area-submit-icon fa fa-angle-right"></i>
                          <span class="_desk-h" onclick="myfunction()">ძებნა</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="_pt-60">
                <div class="row row-col-mob-gap">
                  <div class="col-md-4">
                    <div class="feature">
                      <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                      <div class="feature-caption _c-w">
                        <h5 class="feature-title">აღმოაჩინე მსოფლიო</h5>
                        <p class="feature-subtitle _op-04">
                          ფრენები ასზე მეტი დანიშნულების ადგილისკენ
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="feature">
                      <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                      <div class="feature-caption _c-w">
                        <h5 class="feature-title">დააგროვე ქულები</h5>
                        <p class="feature-subtitle _op-04">
                          თითოეული ფრენა დაამატებს ახალ ქულებს მომხმარებლის პროფილზე
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="feature">
                      <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                      <div class="feature-caption _c-w">
                        <h5 class="feature-title">დაზოგე თანხა</h5>
                        <p class="feature-subtitle _op-04">
                          გამოიყენე ბაზარზე არსებული საუკეთესო ფასების შემოთავაზება
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-footer-abs">
      <?php echo readfile('footer_menu.php') ?> 
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/owl-carousel.js"></script>
  <script src="js/blur-area.js"></script>
  <script src="js/icheck.js"></script>
  <script src="js/gmap.js"></script>
  <script src="js/magnific-popup.js"></script>
  <script src="js/ion-range-slider.js"></script>
  <script src="js/sticky-kit.js"></script>
  <script src="js/smooth-scroll.js"></script>
  <script src="js/fotorama.js"></script>
  <script src="js/bs-datepicker.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/quantity-selector.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/window-scroll-action.js"></script>
  <script src="js/fitvid.js"></script>
  <script src="js/youtube-bg.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>