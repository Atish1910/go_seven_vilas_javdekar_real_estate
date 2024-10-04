<?php
  include 'link.php';
  ob_start('ob_gzhandler');
  date_default_timezone_set('Asia/Kolkata');
  setcookie("utm_medium", isset($_GET['utm_medium']) ? $_GET['utm_medium'] : 'Direct', strtotime(date('Y-m-d H:i:s'))+1200);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- header file -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/img/favicon.ico" type="image/x-icon">
    <title>VJ Palladio | 3, 4 & 4XL BHK APARTMENTS | At Balewadi Central, Pune</title>
    <meta name="description" content="" content="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl.theme.default.min.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Fontawsome kit -->
    <script src="https://kit.fontawesome.com/12b03fea70.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <script>
        function getParameterByName(name) {
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(window.location.href);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        window.onload = function () {
            var utmSource = getParameterByName('utm_source');
            var utmMedium = getParameterByName('utm_medium');
            var utmCampaign = getParameterByName('utm_campaign');
            var utmTerm = getParameterByName('utm_term');
            var utmContent = getParameterByName('utm_content');

            if (utmSource) document.querySelector('input[name="utm_source"]').value = utmSource;
            if (utmMedium) document.querySelector('input[name="utm_medium"]').value = utmMedium;
            if (utmCampaign) document.querySelector('input[name="utm_campaign"]').value = utmCampaign;
            if (utmTerm) document.querySelector('input[name="utm_term"]').value = utmTerm;
            if (utmContent) document.querySelector('input[name="utm_content"]').value = utmContent;
        }
        /// END
    </script>

    
  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M3CLGPTL');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body class="">
    <?php include 'header.php';?>
    <!-- navbar end ====================================================================== -->

    <!-- carousel start ====================================================================== -->
    <section class="banner-setion position-relative bg-off_white">
        <div class="banner">
            <div class="container-fluid banner-container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/img/banner/1.png" class="d-view">
                        </div>
                        <div class="carousel-item">
                            <img src="images/img/banner/1.png" class="d-view">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev" fdprocessedid="y53q3a">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next" fdprocessedid="zlfa2">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="project-details-ban py-5 py-md-0">
            <p class="project-loc">At Balewadi Central, Pune</p>

            <h1 class="animate-charcter">VJ Palladio</h1>
            <!-- <h1> Pride World City  </h1> -->
            <div class="project-key-highlights">
                <div class="key-high">
                    <img src="images/img/hero/1.png" alt="">
                    <p>Status - Under Construction</p>
                </div>
                <div class="key-high">
                    <img src="images/img/hero/1.png" alt="">
                    <p>7.76 Acre of total project area</p>
                </div>
                <div class="key-high">
                    <img src="images/img/hero/1.png" alt="">
                    <p>
                        05 towers including all phases</p>
                </div>
            </div>
            <div class="banner-price-typo">
                <div class="banner-typology">
                    <h3>3, 4 &amp; 4XL BHK APARTMENTS</h3>
                </div>
                <div class="banner-typology">
                    <h3>Starting Price : ₹ 1.70 Cr* Onwards</h3>
                </div>
            </div>
        </div>


        <div class="banner-form-section mb-5">
            <div class="form-section">
                <div class="banner-form">
                    <div class="form-bottom">
                        <h4 class="form_title"> Get in Touch with Us: </h4>
                        <!-- <p class="sub_text">Your email address will not be published.</p> -->
                    </div>
                    <div class="form lower-form-part">
                        <?php include 'form_01.php' ;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card 1st section end ====================================================================== -->

    <section id="nir_featre" data-bs-toggle="modal" data-bs-target="#exampleModal_y"
        class="header_all_pages advertise wow fadeInUp" data-wow-delay="01s"
        data-bgimg="images/img/advertise/VJ-Palladio.jpg">
    </section>

    <!-- ============================================================================================================================     -->
    <section class="overview-section bg-off_white py-5" id="overview">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8">
                    <div class="overview-left-section mb-4 mb-md-0">
                        <h4>Overview</h4>
                        <h2>Makes your self at home and enjoy a unique experience</h2>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="overview-right-section">
                                <img class="overview-img" src="images/img/overview/1.webp" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="overview-mid-section">
                                <p>When every day is a new beginning, we wish to accomplish more and live to the
                                    fullest. In doing so, all one needs is a home where one can make the most of
                                    everything. Palladio, brings you a space that is carefully crafted for every member
                                    of the family without compromising on the luxuries. From being located in one of the
                                    most happening suburbs - Wakad, to being at the hub of connectivity, Palladio is a
                                    future-ready offering. It is where you feel you have really stepped-up and elevated
                                    to the next level! Welcome to Palladio, where you live next.</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="overview-right-section position-relative text-center">
                        <img class="overview-img" src="images/img/overview/1.webp" alt="">
                        <div class="text-center">
                            <a class="overview-btn btn btn_01 " href="" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Downlaod Brochure </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================================================================================     -->
    <section class=" wow fadeInUp py-5" id="gallery"  data-wow-delay="01s" id="gallery">
        <div class="container">
            <h2 class="fs-2  mb-4 text-center">Gallery</h2>
            <h6 class="fs-1 mb-4 text-center">An Unforgettable Once-in-a-Lifetime Experience</h6>
            <div class="h_gallrey owl-carousel align-items-center">
                <?php
                $a = array('1','2','3','4','5','6');
                    for ($i=1; $i < count($a); $i++) { 
                ?>
                <div class="mb-4 gallery_div">
                    <img src="images/img/gallery/g<?= $a[$i]; ?>.webp" class="w-100 rounded" alt="..."
                        data-bs-toggle="modal" data-bs-target="#exampleModal_q<?= $a[$i]; ?>">
                </div>
                <?php
                    }
                ?>
            </div>
            <!-- Modal -->
            <?php
            for ($i=6; $i > 1; $i--) { 
            ?>
            <div class="modal fade" id="exampleModal_q<?= $i-1; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  form_02">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body p-0">
                            <?php
                            ?>
                            <div class=" text-center">
                                <div class="p-0 text-center">
                                    <img src="images/img/gallery/g<?= $i-1; ?>.webp" class="w-100 " alt="...">
                                </div>
                            </div>
                            <?php
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- ============================================================================================================================     -->

    <section class="price-section bg-off_white" id="price">
        <div class="container">
            <div class="row justify-content-center text-center">
                <h4 class=" mb-3">Price </h4>
                <h2 class="mb-5">Unlock the Door to Affordable Luxury</h2>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-4 mt-3">
                    <div class="price-details">
                        <div class="price-floor-plan">
                            <img class="img-fluid" src="images/img/floor-plan/3bhk.png" alt="">
                        </div>
                        <div class="price-content">
                            <h3 class="typology">3 BHK Apartments</h3>
                            <div class="pricing">
                                <h4>Starting Price</h4>
                                <h3>₹ 1.70 Cr* <span>Onwards</span></h3>
                            </div>

                            <div class="border-btm"></div>
                            <div class="sizing">
                                <h4>Size </h4>
                                <h4>1122 - 1255 Sq.Ft.</h4>
                            </div>


                            <div class="price-query-btn">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Query Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                    <div class="price-details">
                        <div class="price-floor-plan">
                            <img class="img-fluid" src="images/img/floor-plan/3bhk.png" alt="">
                        </div>
                        <div class="price-content">
                            <h3 class="typology">4 BHK Apartments</h3>
                            <div class="pricing">
                                <h4>Starting Price</h4>
                                <h3>₹ 2.10 Cr* <span>Onwards</span></h3>
                            </div>
                            <div class="border-btm"></div>
                            <div class="sizing">
                                <h4>Size </h4>
                                <h4>1479 - 1487 Sq.Ft.</h4>
                            </div>
                            <div class="price-query-btn">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Query Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="price-details">
                        <div class="price-floor-plan">
                            <img class="img-fluid" src="images/img/floor-plan/3bhk.png" alt="">
                        </div>
                        <div class="price-content">
                            <h3 class="typology">4 BHK XL Apartments</h3>
                            <div class="pricing">
                                <h4>Starting Price</h4>
                                <h3>On Request</h3>
                            </div>
                            <div class="border-btm"></div>
                            <div class="sizing">
                                <h4>Size </h4>
                                <h4>On Request</h4>
                            </div>
                            <div class="price-query-btn">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Query Now</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ===================================================================================================================================== -->


    <section class="price-section bg-white" id="amenities">
        <div class="container">
            <div class="row justify-content-center text-center">
                <h4 class=" mb-3">Our Amenities</h4>
                <h2 class="mb-5">Amenities that Define Excellence</h2>
            </div>
            <div class="row">
                <?php 
                $a = array('1','8','5','4','6','2','7','3');
                $b = array( 'Infinity Pool', 'Gymnasium', 'Pool Deck', 'Senior Citizen Area', 'Walking Track', 'Yoga', 'Designer Gazebo', 'Acupressure Path');
                for ($i=0; $i < count($a) ; $i++) { 
                ?>
                <div class="col-md-3 mb-3">
                    <div class="bg-off_white rounded-3 border p-3">
                        <img src="images/img/aminities/a<?= $a[$i];?>.webp" class="img-fluid" alt="">
                        <div class="text-center pt-3">
                            <h6 class="fw-bold fs-5"><?= $b[$i];?></h6>
                        </div>
                    </div>
                </div>
                <?php 
                }
            ?>
            </div>
        </div>
    </section>

    <!-- ===================================================================================================================================== -->
    <!-- ===================================================================================================================================== -->
    <!-- ===================================================================================================================================== -->






    <?php  include 'footer.php'; ?>
    <!-- -------------------------------------------footer------------------------------------------------->
    <!-- -------------------------------------------footer------------------------------------------------->

    <button class="btn sil_d_gradient open_othbtn oth_modal enquir_right_btn" data-bs-toggle="modal"
        data-bs-target="#exampleModal_y">Query Now</button>
    <div class="modal fade open_othbtn oth_modal modal_bg header_all_pages_01" + id="exampleModal_y" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content position-relative">
                <button type="button" class="btn-close btn_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-3 border">
                    <h5 class="modal-title text-center" id="exampleModalLabel">VJ Palladio</h5>
                    <p class=" pb-4 text-center">At Balewadi Central, Pune</p>
                    <?php include 'form_01.php';?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content position-relative">
                <button type="button" class="btn-close btn_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-3 border">
                    <h5 class="modal-title text-center" id="exampleModalLabel">VJ Palladio</h5>
                    <p class=" pb-4 text-center">At Balewadi Central, Pune</p>
                    <?php include 'form_01.php';?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <!-- Footer -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="assets/owl.carousel.js"></script>
    <script>
        // for baground image
        $('[data-bgimg]').each(function () {
            $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')')
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="lib/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="assets/contact.js"></script>
    <script>
        $('[data-bgimg]').each(function () {
            $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')');
        })
        $("a.nav-link").on('click', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $("a.nav-link").removeClass('active')
            $(this).addClass('active');
            $('html, body').animate({
                scrollTop: ($(target).offset().top - 80)
            }, 5);
        });


        ///// load the page and pop up
        // $(".open_othbtn").trigger("click");
    </script>
</body>