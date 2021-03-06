<!DOCTYPE HTML>
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
  <div class="theme-hero-area">
    <div class="theme-hero-area-bg-wrap">
      <div class="theme-hero-area-bg" style="background-image:url(img/architecture-bridge-buildings-calm-waters-427679_1500x800.jpg);" id="hero-banner"></div>
      <div class="theme-hero-area-mask theme-hero-area-mask-strong"></div>
      <div class="blur-area" data-bg-area="#hero-banner" data-blur-area="#hero-search-form" data-blur="20"></div>
    </div>
    <div class="theme-hero-area-body">
      <div class="container">
        <div class="row _pb-50 _pt-100 _pv-mob-50">
          <div class="col-md-10 col-md-offset-1">
            <div class="theme-search-area _mob-h theme-search-area-white theme-search-area-stacked">
              <div class="theme-search-area-header _ta-c">
                <h1 class="theme-search-area-title theme-search-area-title-sm">10 ფრენა <?php echo $_POST['departure'] ?>სკენ</h1>
                <p class="theme-search-area-subtitle">შეგიძლია შეცვალო ან აირჩიო ახალი ფრენა</p>
              </div>
              <div class="theme-search-area-form" id="hero-search-form">
                <div class="row" data-gutter="none">
                  <div class="col-md-5 ">
                    <div class="row" data-gutter="none">
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm">
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                            <select class="theme-search-area-section-input typeahead" type="text" data-provide="typeahead" name="departure">
                              <option value="" selected><?php echo $_POST['departure'] ?></option>
                              <?php
                              $qalaqebis_result = mysqli_query($con, "SELECT DISTINCT departure_city FROM flights");
                              $qalaqebis_array = mysqli_fetch_all($qalaqebis_result);
                              foreach ($qalaqebis_array as $qalaqi) {
                                if ($qalaqi[key($qalaqebis_array)] != $_POST['departure']) {
                                  echo '<option>' . $qalaqi[key($qalaqebis_array)] . '</option>';
                                }
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm">
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                            <select class="theme-search-area-section-input typeahead" type="text" data-provide="typeahead" name="arrival">
                              <option value="" selected><?php echo $_POST['arrival'] ?></option>
                              <?php
                              $qalaqebis_result = mysqli_query($con, "SELECT DISTINCT arrival_city FROM flights");
                              $qalaqebis_array = mysqli_fetch_all($qalaqebis_result);
                              foreach ($qalaqebis_array as $qalaqi) {
                                if ($qalaqi[key($qalaqebis_array)] != $_POST['arrival']) {
                                  echo '<option>' . $qalaqi[key($qalaqebis_array)] . '</option>';
                                }
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="row" data-gutter="none">
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm">
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in" />
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm">
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out" />
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm quantity-selector" data-increment="Passengers">
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-people"></i>
                            <input class="theme-search-area-section-input" value="1 Passenger" type="text" />
                            <div class="quantity-selector-box" id="FlySearchPassengers">
                              <div class="quantity-selector-inner">
                                <p class="quantity-selector-title">Passengers</p>
                                <ul class="quantity-selector-controls">
                                  <li class="quantity-selector-decrement">
                                    <a href="#">&#45;</a>
                                  </li>
                                  <li class="quantity-selector-current">1</li>
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
                  <div class="col-md-1 ">
                    <button class="theme-search-area-submit _tt-uc _mt-0 theme-search-area-submit-curved theme-search-area-submit-sm">Edit</button>
                  </div>
                </div>
              </div>
              <div class="theme-search-area-options theme-search-area-options-center theme-search-area-options-dot-primary-inverse clearfix">
              </div>
            </div>
            <div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
              <h4 class="theme-search-area-inline-title"><?php echo $_POST['departure'] ?></h4>
              <p class="theme-search-area-inline-details">June 27 &rarr; July 02, 1 მგზავრი</p>
              <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
                <i class="fa fa-pencil"></i>შეცვლა
              </a>
              <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
                <div class="theme-search-area theme-search-area-vert">
                  <div class="theme-search-area-header">
                    <h1 class="theme-search-area-title theme-search-area-title-sm">შეცვალე ფრენის დეტალები</h1>
                    <p class="theme-search-area-subtitle">აირჩიე ახალი მონაცემები</p>
                  </div>
                  <div class="theme-search-area-form">
                    <div class="theme-search-area-section first theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">From</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <select class="theme-search-area-section-input typeahead" type="text" data-provide="typeahead" name="departure">
                          <option value="" selected><?php echo $_POST['departure'] ?></option>
                          <?php
                          $qalaqebis_result = mysqli_query($con, "SELECT DISTINCT departure_city FROM flights");
                          $qalaqebis_array = mysqli_fetch_all($qalaqebis_result);
                          foreach ($qalaqebis_array as $qalaqi) {
                            if ($qalaqi[key($qalaqebis_array)] != $_POST['departure']) {
                              echo '<option>' . $qalaqi[key($qalaqebis_array)] . '</option>';
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">To</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <select class="theme-search-area-section-input typeahead" type="text" data-provide="typeahead" name="arrival">
                          <option value="" selected><?php echo $_POST['arrival'] ?></option>
                          <?php
                          $qalaqebis_result = mysqli_query($con, "SELECT DISTINCT arrival_city FROM flights");
                          $qalaqebis_array = mysqli_fetch_all($qalaqebis_result);
                          foreach ($qalaqebis_array as $qalaqi) {
                            if ($qalaqi[key($qalaqebis_array)] != $_POST['arrival']) {
                              echo '<option>' . $qalaqi[key($qalaqebis_array)] . '</option>';
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="row" data-gutter="10">
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved">
                          <label class="theme-search-area-section-label">Depart</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in" />
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved">
                          <label class="theme-search-area-section-label">Arrival</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out" />
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-area-section theme-search-area-section-curved quantity-selector" data-increment="Passengers">
                      <label class="theme-search-area-section-label">Passengers</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-people"></i>
                        <input class="theme-search-area-section-input" value="1 Passenger" type="text" />
                        <div class="quantity-selector-box" id="mobile-FlySearchPassengers">
                          <div class="quantity-selector-inner">
                            <p class="quantity-selector-title">Passengers</p>
                            <ul class="quantity-selector-controls">
                              <li class="quantity-selector-decrement">
                                <a href="#">&#45;</a>
                              </li>
                              <li class="quantity-selector-current">1</li>
                              <li class="quantity-selector-increment">
                                <a href="#">&#43;</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved">Change</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="theme-page-section theme-page-section-dark">
    <div class="container">
      <div class="row row-col-static" id="sticky-parent" data-gutter="20">
        <div class="col-md-1"></div>
        <div class="col-md-10 ">
          <div class="theme-search-results">
            <div class="theme-search-results-item _mb-10 _b-n theme-search-results-item-rounded theme-search-results-item-">
              <div class="theme-search-results-item-preview">
                <a class="theme-search-results-item-mask-link" href="#searchResultsItem-3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-3"></a>
                <div class="row" data-gutter="20">
                  <div class="col-md-10 ">
                    <div class="theme-search-results-item-flight-sections">
                      <div class="theme-search-results-item-flight-section">
                        <div class="row row-no-gutter row-eq-height">
                          <div class="col-md-2 ">
                            <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                              <img class="theme-search-results-item-flight-section-airline-logo" src="img/airline-logo/virgin.jpg" alt="Image Alternative text" title="Image Title" />
                            </div>
                          </div>
                          <div class="col-md-10 ">
                            <div class="theme-search-results-item-flight-section-item">
                              <div class="row">
                                <div class="col-md-3 ">
                                  <div class="theme-search-results-item-flight-section-meta">
                                    <p class="theme-search-results-item-flight-section-meta-time">01:40
                                      <span>pm</span>
                                    </p>
                                    <p class="theme-search-results-item-flight-section-meta-city"><?php echo $_POST['departure'] ?></p>
                                    <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                  </div>
                                </div>
                                <div class="col-md-6 ">
                                  <div class="theme-search-results-item-flight-section-path">
                                    <div class="theme-search-results-item-flight-section-path-fly-time">
                                      <p>23h 10m</p>
                                    </div>
                                    <div class="theme-search-results-item-flight-section-path-line"></div>
                                    <div class="theme-search-results-item-flight-section-path-line-start">
                                      <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                      <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-title">LTN</div>
                                    </div>
                                    <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                      <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                      <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-title">BOS</div>
                                    </div>
                                    <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                      <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                      <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-title">AMS</div>
                                    </div>
                                    <div class="theme-search-results-item-flight-section-path-line-end">
                                      <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                      <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3 ">
                                  <div class="theme-search-results-item-flight-section-meta">
                                    <p class="theme-search-results-item-flight-section-meta-time">12:50
                                      <span>am</span>
                                    </p>
                                    <p class="theme-search-results-item-flight-section-meta-city"><?php echo $_POST['arrival'] ?></p>
                                    <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h5 class="theme-search-results-item-flight-section-airline-title">ფრენას ასრულებს კომპანია: <?php echo $operated_by_company ?></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 ">
                    <div class="theme-search-results-item-book">
                      <div class="theme-search-results-item-price">
                        <p class="theme-search-results-item-price-tag">$341</p>
                        <p class="theme-search-results-item-price-sign">economy</p>
                      </div>
                      <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-3">
                <div class="theme-search-results-item-extend">
                  <a class="theme-search-results-item-extend-close" href="#searchResultsItem-3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-3">&#10005;</a>
                  <div class="theme-search-results-item-extend-inner">
                    <div class="theme-search-results-item-flight-detail-items">
                      <div class="theme-search-results-item-flight-details">
                        <div class="row">
                          <div class="col-md-3 ">
                            <div class="theme-search-results-item-flight-details-info">
                              <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                              <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                              <p class="theme-search-results-item-flight-details-info-cities"><?php echo $_POST['departure'] ?> &rarr; New York</p>
                              <p class="theme-search-results-item-flight-details-info-fly-time">23h 10m</p>
                              <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                            </div>
                          </div>
                          <div class="col-md-9 ">
                            <div class="theme-search-results-item-flight-details-schedule">
                              <ul class="theme-search-results-item-flight-details-schedule-list">
                                <li>
                                  <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                  <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                  <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                  <div class="theme-search-results-item-flight-details-schedule-time">
                                    <span class="theme-search-results-item-flight-details-schedule-time-item">01:40
                                      <span>pm</span>
                                    </span>
                                    <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                    <span class="theme-search-results-item-flight-details-schedule-time-item">07:50
                                      <span>pm</span>
                                    </span>
                                  </div>
                                  <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 10m</p>
                                  <div class="theme-search-results-item-flight-details-schedule-destination">
                                    <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                      <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                        <b>LTN</b>Luton
                                      </p>
                                      <p class="theme-search-results-item-flight-details-schedule-destination-city"><?php echo $_POST['departure'] ?></p>
                                    </div>
                                    <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                      <span>&rarr;</span>
                                    </div>
                                    <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                      <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                        <b>BOS</b>Logan
                                      </p>
                                      <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                    </div>
                                  </div>
                                  <ul class="theme-search-results-item-flight-details-schedule-features">
                                    <li>4565 Virgin</li>
                                    <li>Narrow-body jet</li>
                                    <li>Airbus A321-100/200</li>
                                  </ul>
                                </li>
                                <?php echo readfile('change_plane.php') ?>
                              </ul>
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
        </div>
      </div>
    </div>
  </div>
  <div class="theme-copyright">
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