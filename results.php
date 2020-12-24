<!DOCTYPE HTML>
<html lang="en">
  
<head>
    <title>Green Aviation</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/lineicons.css"/>
    <link rel="stylesheet" href="css/weather-icons.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
  </head>
<body>
    <nav
    class="navbar navbar-default navbar-inverse navbar-theme navbar-theme-abs navbar-theme-transparent navbar-theme-border"
    id="main-nav">
    <div class="container">
      <div class="navbar-inner nav">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button"
            area-expanded="false">
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
              <a class="dropdown-toggle" href="flight-index-1.html" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Flights</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="car-index-1.html" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Contact Us</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">
                <span class="_desk-h">Currency</span>
                <b>USD</b>
              </a>
              <div class="dropdown-menu dropdown-menu-l">
                <div class="row" data-gutter="10">
                  <div class="col-md-12">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#"> <span>€</span>Euro </a>
                      </li>
                      <li>
                        <a href="#"> <span>£</span>Pound sterling </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">
                <span class="_desk-h">Language</span>
                <img class="navbar-flag" src="img/flags/USA.png" alt="Image Alternative text" title="Image Title" />
              </a>
              <div class="dropdown-menu dropdown-menu-l">
                <div class="row" data-gutter="10">
                  <div class="col-md">
                    <ul class="dropdown-meganav-select-list-lang">
                      <li>
                        <a href="#">
                          <img src="img/flag_codes/FIN.png" alt="Image Alternative text" title="Image Title" />Suomi
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="img/flag_codes/SW.png" alt="Image Alternative text" title="Image Title" />Svenska
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
                  <h1 class="theme-search-area-title theme-search-area-title-sm">175 Flights to Lodon</h1>
                  <p class="theme-search-area-subtitle">Dignissim massa a tellus habitasse lacus rhoncus nunc</p>
                </div>
                <div class="theme-search-area-form" id="hero-search-form">
                  <div class="row" data-gutter="none">
                    <div class="col-md-5 ">
                      <div class="row" data-gutter="none">
                        <div class="col-md-6 ">
                          <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                              <input class="theme-search-area-section-input typeahead" value="New York, United States" type="text" placeholder="Departure" data-provide="typeahead"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 ">
                          <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                              <input class="theme-search-area-section-input typeahead" value="London, United Kindom" type="text" placeholder="Arrival" data-provide="typeahead"/>
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
                              <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                              <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 ">
                          <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-calendar"></i>
                              <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                              <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 ">
                          <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm quantity-selector" data-increment="Passengers">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-people"></i>
                              <input class="theme-search-area-section-input" value="1 Passenger" type="text"/>
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
                  <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                    <label class="btn btn-primary active">
                      <input type="radio" name="flight-options" id="flight-option-1" checked/>Round Trip
                    </label>
                    <label class="btn btn-primary">
                      <input type="radio" name="flight-options" id="flight-option-2"/>One Way
                    </label>
                  </div>
                </div>
              </div>
              <div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
                <h4 class="theme-search-area-inline-title">Lodon Flights</h4>
                <p class="theme-search-area-inline-details">June 27 &rarr; July 02, 1 Passnger</p>
                <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
                  <i class="fa fa-pencil"></i>Edit
                </a>
                <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
                  <div class="theme-search-area theme-search-area-vert">
                    <div class="theme-search-area-header">
                      <h1 class="theme-search-area-title theme-search-area-title-sm">Edit your Search</h1>
                      <p class="theme-search-area-subtitle">Prices might be different from current results</p>
                    </div>
                    <div class="theme-search-area-form">
                      <div class="theme-search-area-section first theme-search-area-section-curved">
                        <label class="theme-search-area-section-label">From</label>
                        <div class="theme-search-area-section-inner">
                          <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                          <input class="theme-search-area-section-input typeahead" value="New York" type="text" placeholder="Departure" data-provide="typeahead"/>
                        </div>
                      </div>
                      <div class="theme-search-area-section theme-search-area-section-curved">
                        <label class="theme-search-area-section-label">To</label>
                        <div class="theme-search-area-section-inner">
                          <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                          <input class="theme-search-area-section-input typeahead" type="text" placeholder="Arrival" data-provide="typeahead"/>
                        </div>
                      </div>
                      <div class="row" data-gutter="10">
                        <div class="col-md-6 ">
                          <div class="theme-search-area-section theme-search-area-section-curved">
                            <label class="theme-search-area-section-label">Depart</label>
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-calendar"></i>
                              <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                              <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 ">
                          <div class="theme-search-area-section theme-search-area-section-curved">
                            <label class="theme-search-area-section-label">Arrival</label>
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-calendar"></i>
                              <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                              <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-area-section theme-search-area-section-curved quantity-selector" data-increment="Passengers">
                        <label class="theme-search-area-section-label">Passengers</label>
                        <div class="theme-search-area-section-inner">
                          <i class="theme-search-area-section-icon lin lin-people"></i>
                          <input class="theme-search-area-section-input" value="1 Passenger" type="text"/>
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
          <div class="col-md-2-5 ">
            <div class="sticky-col _mob-h">
              <div class="theme-search-results-sidebar">
                <div class="theme-search-results-sidebar-sections _mb-20 _br-2 theme-search-results-sidebar-sections-white">
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">London Airport</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">CLY: City</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$377</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LHR: Heathrow</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$150</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LCW: Gatwich</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$419</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">STN: Stansed</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$163</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">SEN: Southend</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$196</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">New York Airport</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">JFK: John F. Kennedy</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$451</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LGA: LaGuardia</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$207</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">EWR: Newark Liberty</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$239</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Airlines</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">KLM Royal Dutch...</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$423</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LOT Polish Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$144</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 ">
            <div class="theme-search-results">
              <div class="theme-search-results-item _mb-10 _b-n theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-1"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="img/airline-logo/delta.jpg" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">03:30
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>20h 0m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">CLY</div>
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
                                      <p class="theme-search-results-item-flight-section-meta-time">11:30
                                        <span>am</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Delta Airlines</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$270</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-1">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-1">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">20h 0m</p>
                                <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
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
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:30
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">20h 0m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>CLY</b>City
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9253 Delta</li>
                                      <li>Wide-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
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
              <div class="theme-search-results-item _mb-10 _b-n theme-search-results-item-rounded theme-search-results-item-">
                <div class="theme-search-results-item-preview">
                  <a class="theme-search-results-item-mask-link" href="#searchResultsItem-2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-2"></a>
                  <div class="row" data-gutter="20">
                    <div class="col-md-10 ">
                      <div class="theme-search-results-item-flight-sections">
                        <div class="theme-search-results-item-flight-section">
                          <div class="row row-no-gutter row-eq-height">
                            <div class="col-md-2 ">
                              <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                <img class="theme-search-results-item-flight-section-airline-logo" src="img/airline-logo/virgin.jpg" alt="Image Alternative text" title="Image Title"/>
                              </div>
                            </div>
                            <div class="col-md-10 ">
                              <div class="theme-search-results-item-flight-section-item">
                                <div class="row">
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">10:30
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="theme-search-results-item-flight-section-path">
                                      <div class="theme-search-results-item-flight-section-path-fly-time">
                                        <p>22h 50m</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line"></div>
                                      <div class="theme-search-results-item-flight-section-path-line-start">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">LHR</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">PHL</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">AMS</div>
                                      </div>
                                      <div class="theme-search-results-item-flight-section-path-line-end">
                                        <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                        <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 ">
                                    <div class="theme-search-results-item-flight-section-meta">
                                      <p class="theme-search-results-item-flight-section-meta-time">09:20
                                        <span>pm</span>
                                      </p>
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Virgin Atlantic Airways</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <div class="theme-search-results-item-book">
                        <div class="theme-search-results-item-price">
                          <p class="theme-search-results-item-price-tag">$368</p>
                          <p class="theme-search-results-item-price-sign">economy</p>
                        </div>
                        <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-2">
                  <div class="theme-search-results-item-extend">
                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-2">&#10005;</a>
                    <div class="theme-search-results-item-extend-inner">
                      <div class="theme-search-results-item-flight-detail-items">
                        <div class="theme-search-results-item-flight-details">
                          <div class="row">
                            <div class="col-md-3 ">
                              <div class="theme-search-results-item-flight-details-info">
                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                <p class="theme-search-results-item-flight-details-info-fly-time">22h 50m</p>
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
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">10:30
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:40
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">7h 10m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LHR</b>Heathrow
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>4395 Virgin</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">05:40
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">08:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Philadelphia(PHL)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">08:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:20
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 20m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>PHL</b>Philadelphia Airport
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Philadelphia</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>AMS</b>Schiphol
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Amsterdam</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>1567 Virgin</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 747-400</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:20
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">02:60
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 40m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Amsterdam(AMS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">02:60
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 20m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>AMS</b>Schiphol
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Amsterdam</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>EWR</b>Newark Liberty
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>8639 Virgin</li>
                                      <li>Wide-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
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
                                <img class="theme-search-results-item-flight-section-airline-logo" src="img/airline-logo/virgin.jpg" alt="Image Alternative text" title="Image Title"/>
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
                                      <p class="theme-search-results-item-flight-section-meta-city">London</p>
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
                                      <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                      <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="theme-search-results-item-flight-section-airline-title">Operated by Virgin Atlantic Airways</h5>
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
                                <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
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
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
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
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">07:50
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:10
                                        <span>pm</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">3h 20m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Boston(BOS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">11:10
                                        <span>pm</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:60
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 50m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>BOS</b>Logan
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>AMS</b>Schiphol
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Amsterdam</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>7588 Virgin</li>
                                      <li>Wide-body jet</li>
                                      <li>Embraer 175</li>
                                    </ul>
                                  </li>
                                  <li>
                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">03:60
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:10
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 10m</p>
                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Amsterdam(AMS)</p>
                                  </li>
                                  <li>
                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">06:10
                                        <span>am</span>
                                      </span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:50
                                        <span>am</span>
                                      </span>
                                    </div>
                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 40m</p>
                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>AMS</b>Schiphol
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">Amsterdam</p>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                        <span>&rarr;</span>
                                      </div>
                                      <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                        <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                          <b>LGA</b>LaGuardia
                                        </p>
                                        <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                      </div>
                                    </div>
                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                      <li>9416 Virgin</li>
                                      <li>Narrow-body jet</li>
                                      <li>Boeing 777-300ER</li>
                                    </ul>
                                  </li>
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
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="theme-copyright-text">Copyright &copy; 2018
              <a href="#">Bookify</a>. All rights reserved.
            </p>
          </div>
          <div class="col-md-6">
            <ul class="theme-copyright-social">
              <li>
                <a class="fa fa-facebook" href="#"></a>
              </li>
              <li>
                <a class="fa fa-google" href="#"></a>
              </li>
              <li>
                <a class="fa fa-twitter" href="#"></a>
              </li>
              <li>
                <a class="fa fa-youtube-play" href="#"></a>
              </li>
              <li>
                <a class="fa fa-instagram" href="#"></a>
              </li>
            </ul>
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