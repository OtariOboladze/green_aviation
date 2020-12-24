<!DOCTYPE html>
<html lang="en">


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
    <div class="container">
      <div class="navbar-inner nav">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button" area-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="Image Alternative text" title="Image Title" />
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="active dropdown">
              <a class="dropdown-toggle" href="flight-index-1.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Flights</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="car-index-1.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="_desk-h">Currency</span>
                <b>USD</b>
              </a>
              <div class="dropdown-menu dropdown-menu-l">
                <div class="row" data-gutter="10">
                  <div class="col-md-12">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#"> <span>₾</span>ლარი </a>
                      </li>
                      <li>
                        <a href="#"> <span>€</span>Euro </a>
                      </li>
                      <li>
                        <a href="#"> <span>$</span>US Dollar </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="_desk-h">Language</span>
                <img class="navbar-flag" src="img/flags/USA.png" alt="Image Alternative text" title="Image Title" />
              </a>
              <div class="dropdown-menu dropdown-menu-l">
                <div class="row" data-gutter="10">
                  <div class="col-md">
                    <ul class="dropdown-meganav-select-list-lang">
                      <li>
                        <a href="#">
                          <img src="img/flag_codes/ENG.png" alt="Image Alternative text" title="Image Title" />English
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="img/flag_codes/GEO.png" alt="Image Alternative text" title="Image Title" />ქართული
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
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
                    აირჩიეთ სასურველი ფრენა
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
                                  <option> sdgsdf </option>
                                  <option> sifusdfgsfgsdfghaspf </option>
                                  <option> sdfgsfgsf </option>
                                  <option> sifusfgsdfgsfgsdfhaspf </option>
                                  <option> sifuhsdfgsdfgsgsdfgsdfgsdgfsfaspf </option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="theme-search-area-section theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                <select class="theme-search-area-section-input typeahead" type="text" placeholder="ჩასვლა" data-provide="typeahead" name="arrival" />
                                <option value="" disabled selected>ჩასვლა</option>
                                <option> sdgsdf </option>
                                <option> sifusdfgsfgsdfghaspf </option>
                                <option> sdfgsfgsf </option>
                                <option> sifusfgsdfgsfgsdfhaspf </option>
                                <option> sifuhsdfgsdfgsgsdfgsdfgsdgfsfaspf </option>
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
                          Start to discrover. We will help you to visit any
                          place you can imagine
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="feature">
                      <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                      <div class="feature-caption _c-w">
                        <h5 class="feature-title">იმოგზაურე და დააგროვე ქულები</h5>
                        <p class="feature-subtitle _op-04">
                          Get even more from our service. Spend less and
                          travel more
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="feature">
                      <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                      <div class="feature-caption _c-w">
                        <h5 class="feature-title">საუკეთესო ფასები</h5>
                        <p class="feature-subtitle _op-04">
                          We are comparing hundreds travel websites to find
                          best price for you
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
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul class="theme-footer-abs-nav">
              <li>
                <a href="about-us.html">About Us</a>
              </li>
              <li>
                <a href="contact.html">Terms and conditions</a>
              </li>
            </ul>
            <p class="theme-footer-abs-copyright">
              Copyright &copy; 2020 Green Aviation. All rights reserved.
            </p>
          </div>
          <div class="col-md-6">
            <ul class="theme-social-list theme-footer-abs-social">
              <li>
                <a class="fa fa-facebook" href="#"></a>
              </li>
              <li>
                <a class="fa fa-twitter" href="#"></a>
              </li>
              <!-- <li>
                  <a class="fa fa-google" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-instagram" href="#"></a>
                </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
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