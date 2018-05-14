<?php print_r($variables['header']); ?>

<!-- Banner
================================================== -->
<div class="main-search-container dark-overlay">
    <div class="main-search-inner">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Find Nearby Attractions</h2>
                    <h4>Explore top-rated attractions, activities and more</h4>

                    <div class="main-search-input">

                        <div class="main-search-input-item location locationinput">
                            <input type="text" placeholder="Where you are looking at?" onFocus="geolocate()" id="autocomplete" value=""/>
                            <img src="app/assets/dtsimages/loading.gif" class="imgloader" id="loader" style="display: none;">
                            <a onclick="getLocation();"><i class="fa fa-dot-circle-o"></i></a>
                        </div>

                        <div class="main-search-input-item">
                            <div class="select2-wrapper">
                                <select class="input icons_select2">
                                    <option value="fa-dribbble" selected disabled>What are you looking for?</option>
                                    <option value="fa-dribbble" data-icon="fa-car">&nbsp;Cab</option>
                                    <option value="fa-dropbox" data-icon="fa-cutlery">&nbsp;Restaurant</option>
                                    <option value="fa-facebook" data-icon="fa-hotel">&nbsp;Hotels</option>
                                    <option value="fa-dribbble" data-icon="fa-user-md">&nbsp;Doctors</option>
                                    <option value="fa-dropbox" data-icon="fa-graduation-cap">&nbsp;Education</option>
                                    <option value="fa-facebook" data-icon="fa-video-camera">&nbsp;Events</option>
                                </select>
                            </div>
                        </div>
                        <a class="button searchbtn" href="user/view/listing.php"><i class="fa fa-search"></i> Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table id="address">
        <input class="field" id="street_number" disabled="true" style="display: none;">
        <input class="field" id="route" disabled="true" style="display: none;">
        <input class="field" id="locality" disabled="true" style="display: none;">
        <input class="field" id="administrative_area_level_1" disabled="true" style="display: none;">
        <input class="field" id="postal_code" disabled="true" style="display: none;">
        <input class="field" id="country" disabled="true" style="display: none;">

    </table>
    <!-- Video -->
</div>



<!-- Content
================================================== -->
<!-- <div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 class="headline centered margin-top-75">
                Browse Categories
            </h3>
        </div>

    </div>
</div> -->


<!-- Category Boxes -->
<div class="container text-center banner-tabs-container">
    <div class="row">
        <div class="col-md-12">
            <div class="categories-boxes-container banner-tabs">

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-car"></i>
                    <h4>Cab</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-cutlery"></i>
                    <h4>Restaurant</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-hotel"></i>
                    <h4>Hotels</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-user-md"></i>
                    <h4>Doctors</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-graduation-cap"></i>
                    <h4>Education</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-video-camera"></i>
                    <h4>Events</h4>
                </a>

            </div>
        </div>
    </div>
    <a class="button explorebtn" href="javascript:void(0);"><i class="fa fa-eye"></i> Explore</a>
</div>
<!-- Category Boxes / End -->

<!-- Category Boxes -->
<div class="container clickshowtabs">
    <div class="row">
        <div class="col-md-12">
            <h3 class="headline centered margin-bottom-45">
                All Categories
                <span>Discover Top Categories</span>
            </h3>
            <div class="categories-boxes-container">

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-car"></i>
                    <h4>Cab</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-cutlery"></i>
                    <h4>Restaurant</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-hotel"></i>
                    <h4>Hotels</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-user-md"></i>
                    <h4>Doctors</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-graduation-cap"></i>
                    <h4>Education</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-video-camera"></i>
                    <h4>Events</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-user"></i>
                    <h4>Gym</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-microphone"></i>
                    <h4>Go Talent</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-truck"></i>
                    <h4>Movers &amp; Packers</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-flash"></i>
                    <h4>Household</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-users"></i>
                    <h4>Matrimony</h4>
                </a>

                <!-- Box -->
                <a href="javascript:void(0);" class="category-small-box">
                    <i class="fa fa-home"></i>
                    <h4>House For Rent</h4>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- Category Boxes / End -->


<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-bottom-45">
                    Most Visited Places
                    <span>Discover top-rated local businesses</span>
                </h3>
            </div>
        </div>
    </div>

    <!-- Carousel / Start -->
    <div class="simple-fw-slick-carousel dots-nav">

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="app/assets/images/listing-item-01.jpg" alt="">

                    <div class="listing-badge now-open">Now Open</div>

                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="3.5"></div>
                        <h3>Tom's Restaurant</h3>
                        <span>964 School Street, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="app/assets/images/listing-item-02.jpg" alt="">
                    <div class="listing-item-details">
                        <ul>
                            <li>Friday, August 10</li>
                        </ul>
                    </div>
                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="5.0"></div>
                        <h3>Sticky Band</h3>
                        <span>Bishop Avenue, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->		

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="app/assets/images/listing-item-03.jpg" alt="">
                    <div class="listing-item-details">
                        <ul>
                            <li>Starting from $59 per night</li>
                        </ul>
                    </div>
                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="2.0"></div>
                        <h3>Hotel Govendor</h3>
                        <span>778 Country Street, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>

            </a>
        </div>
        <!-- Listing Item / End -->

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="app/assets/images/listing-item-04.jpg" alt="">

                    <div class="listing-badge now-open">Now Open</div>

                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="5.0"></div>
                        <h3>Burger House</h3>
                        <span>2726 Shinn Street, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="app/assets/images/listing-item-05.jpg" alt="">
                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="3.5"></div>
                        <h3>Airport</h3>
                        <span>1512 Duncan Avenue, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="app/assets/images/listing-item-06.jpg" alt="">

                    <div class="listing-badge now-closed">Now Closed</div>

                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="4.5"></div>
                        <h3>Think Coffee</h3>
                        <span>215 Terry Lane, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->

    </div>
    <!-- Carousel / End -->


</section>
<!-- Fullwidth Section / End -->


<!-- Flip banner -->
<a href="listings-half-screen-map-list.html" class="flip-banner parallax margin-top-65" data-background="<?php echo $URL; ?>images/slider-bg-02.jpg" data-color="#f91942" data-color-opacity="0.85" data-img-width="2500" data-img-height="1666">
    <div class="flip-banner-content">
        <h2 class="flip-visible">Expolore top-rated attractions nearby</h2>
        <h2 class="flip-hidden">Browse Listings <i class="sl sl-icon-arrow-right"></i></h2>
    </div>
</a>
<?php print_r($variables['scriptfiles']); ?>