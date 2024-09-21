<?php
  include 'link.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- header file -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/img/fevicon.svg" type="image/x-icon">
    <title>Luxury Flats and Homes in Pune | Supreme Towers</title>
    <meta name="description"
        content="Your gateway to luxury flats and homes in Pune. Unmatched elegance, prime locations, and modern amenities await you. Find your dream home today!">
    <meta name="keywords"
        content="luxury flats Pune, premium homes, real estate Pune, residential properties, modern apartments, prime locations, spacious living, Pune housing, dream homes">
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
</head>

<body class="bg-lblack">
    <?php include 'header.php';?>
    <!-- navbar end ====================================================================== -->

    <!-- carousel start ====================================================================== -->
    <div id="carouselExample" class="carousel slide pt-5 mt-4">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row position-relative">
                        <div class="col-md-6"></div>
                        <div class="col-md-6  form_01 d-none d-md-block  wow fadeInUp" data-wow-delay="0.15s">
                            <div class="p-5 bg-dark">
                                <h2 class="text-white text-center pb-3">Enquire Now</h2>
                                <?php include 'form_01.php';?>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="images/img/banner/1.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <section>
        <div class="container d-block d-md-none">
            <div class="row pt-3 position-relative">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="p-2 bg-dark">
                        <h2 class="text-white text-center pb-3">Enquire Now</h2>
                        <?php include 'form_01.php';?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card 1st section end ====================================================================== -->

    <section id="nir_about" class="">
        <div class="container py-md-5 pb-5 pt-2">
            <div class="row">
                <div class="col-md-6 text-center mt-5 mt-md-0  order-2 h_01   wow  fadeInRight" data-wow-delay="01s"
                    data-bgimg="images/img/1.png">
                </div>
                <div class="col-md-6 pt-md-4 pt-4 order-1 wow fadeInLeft" data-wow-delay="01s">
                    <h2 class="pb-2 text-white">THE FINER HEART OF PUNE</h2>
                    <p class="text-justify pe-3 lh-lg text-white">
                        <b>A MILE OF MILESTONES</b> <br><br>
                        A sprawling agrarian landscape of the early 20th century, Koregaon Park - Mundhwa Neighborhood
                        has evolved to the city's refined living. With its distinct blend of serene greens, and
                        avant-garde lifestyle, the neighbourhood offers an unrivalled tapestry of elegance and vivacity.
                        <br>Skyline-defining architecture, artfully curated interiors, and meticulously crafted
                        indulgences converge seamlessly to create The Supreme Towers a true pinnacle of luxury. <br>The
                        project personifies benchmark-defining standards with world-class residences, captivating sky
                        experiences, and breath-taking views of the shimmering gold skyline and azure river, creating a
                        truly enchanting sight to behold.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="nir_featre" class="header_all_pages   wow fadeInUp" data-wow-delay="01s"
        data-bgimg="images/img/banner/2.png">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 wow fadeInDown" data-wow-delay="01s">
                    <h2 class="text-white">HIGHLIGHTS</h2>
                    <div class="row ">
                        <div class="col-md-6">
                            <?php
                            $a = array("1","2","3","1");
                            $b = array("Soaring above the sky","3, 4, 5 BHK Palatial Residences","Panoramic river and green views","World-class specifications");
                                for ($i=0; $i < count($a); $i++) {
                            ?>
                            <div class="d-flex align-items-center pt-4">
                                <img src="images/img/highlights/<?= $a[$i]; ?>.svg" width="40" height="40"
                                    alt="" /><span class="ps-4 text-white"><?= $b[$i]; ?></span>
                            </div>
                            <?php
                            };
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                            $a = array("5","1","7","8");
                            $b = array("Expansive sundeck in every apartment","Cloud walk - sky bridge","Seamless connectivity","Handpicked indulgences across 4 levels");
                                for ($i=0; $i < count($a); $i++) {
                            ?>
                            <div class="d-flex align-items-center pt-4">
                                <img src="images/img/highlights/<?= $a[$i]; ?>.svg" width="40" height="40"
                                    alt="" /><span class="ps-4 text-white"><?= $b[$i]; ?></span>
                            </div>
                            <?php
                            };
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nir_gallery" class=" wow fadeInUp" data-wow-delay="01s">
        <div class="container pt-4">
            <h2 class="fs-2 text-white mb-4">Gallery</h2>
            <div class="h_gallrey owl-carousel">
                <?php
                    for ($i=1; $i < 16; $i++) { 
                ?>
                <div class="mb-4">
                    <img src="images/img/gallery/<?= $i+1; ?>.webp" class="w-100 rounded"
                    onclick="z_openModal();z_currentSlide(<?= $i+1; ?>)" alt="">
                </div>
                <?php
                    }
                ?>
            </div>
            <div id="z_myModaly" class="z_modaly">
                <span class="close cursor" onclick="z_closeModal()">&times;</span>
                <div class="z_modaly-content">
                    <?php
                        for ($i=1; $i < 16; $i++) { 
                    ?>
                    <div class="z_mySlides text-center">
                        <div class="numbertext"><?= $i+1; ?> / 16</div>
                        <img src="images/img/gallery/<?= $i+1; ?>.webp">
                    </div>
                    <?php
                        }
                    ?>
                    <a class="prev" onclick="z_plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="z_plusSlides(1)">&#10095;</a>
                </div>
            </div>
            <script>
                function z_openModal() {
                    document.getElementById("z_myModaly").style.display = "block";
                }

                function z_closeModal() {
                    document.getElementById("z_myModaly").style.display = "none";
                }

                var z_slideIndex = 1;
                z_showSlides(z_slideIndex);

                function z_plusSlides(n) {
                    z_showSlides(z_slideIndex += n);
                }

                function z_currentSlide(n) {
                    z_showSlides(z_slideIndex = n);
                }

                function z_showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("z_mySlides");
                    var dots = document.getElementsByClassName("demo");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {
                        z_slideIndex = 1
                    }
                    if (n < 1) {
                        z_slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[z_slideIndex - 1].style.display = "block";
                    dots[z_slideIndex - 1].className += " active";
                    captionText.innerHTML = dots[z_slideIndex - 1].alt;
                }
            </script>
        </div>
    </section>



    <section id="section-location " class="p-0 wow fadeInUp" data-wow-delay="1s">
        <div class="container position-relative">
            <div class="row ps-md-5 top_01  pt-md-5 text-white ">
                <div class=" pos_top_01 pt-3 ">
                    <div class="pe-3">
                        <h2>Location</h2>
                    </div>
                    <div class="ps-md-4 b_01">
                        <span class="title-tagline mt-0 mb-5">The Finest Live Here. Welcome To The Billionaire’s
                            Borough.</span>
                        <p>Originally favored by influential families, Koregaon Park Mundhwa Neighborhood's allure
                            quickly captivated the business elites. Today, this prestigious neighborhood continues
                            to draw in prominent businessmen and more, cementing its reputation as 'Pune's Finest
                            Address'.</p>
                        <p>Lined by gated communities and residences draped in quietude, Koregoan Park has evolved
                            to be the epicentre of power and wealth in Pune.</p>
                        <p>In the heart of high life.</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="images/img/map_02.jpg" class="w-100 " alt="" />
    </section>

    <section class="" id="">
        <div class="container py-md-5 py-5">
            <div class="row text-white">
                <div class="col-md-7   wow fadeInLeft" data-wow-delay="01s">
                    <h2 class="fs-2 mb-4">about supreme universal</h2>
                    <p>
                        At Supreme Universal, we believe in creating spaces, community, and experiences that are built
                        with trust, integrity, and innovation. With a passion for delivering excellence, we redefine new
                        standards of living. Our tryst for perfection reflects in every creation and smiles of our
                        customers. <br><br>Driven by an unwavering commitment to time-bound delivery and time-tested
                        innovations, we have created enduring landmarks that have lived up to global benchmarks.
                        Redefining the skylines across Mumbai and Pune, our vision of shaping a future where people
                        thrive in inspiring and sustainable environments is coming alive – one square feet at a time.
                        Fulfilled dreams, Fuller hearts.
                    </p>
                </div>
                <div class="col-md-5 text-center   wow fadeInRight " data-wow-delay="01s">
                    <img src="images/img/logo_02.png" alt="" class="h_02">
                </div>
            </div>
        </div>
    </section>

    <!-- why chooose us section starts -->
    <div id="nir_specs" class="nir_specs header_all_pages_01  wow fadeInUp " data-wow-delay="01s"
        data-bgimg="images/img/banner/3.webp">
        <div class="container py-5  ">
            <div class="row px-md-0 px-3  wow fadeInDown " data-wow-delay="01s">
                <p class="t-orange">WHY ARE WE PEOPLE’S CHOICE?</p>
                <div class="col-md-3 pb-5 pb-md-0">
                    <h5 class="pb-3 text-white">Perfect 6/6 Professionalism, <br> Consistently Surpassing <br>
                        Expectations.</h5>
                    <button class="btn px-4 py-2 mt-2 mb-3 btn_01" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Enquire Now</button>
                </div>
                <div class="col-md-9">
                    <div class="row ">
                        <?php
                       $a = array("1","2","3","4","5","6"); 
                       $b = array("40+ Years of Excellence","Presence : Mumbai & Pune","75+ Icons Delivered","Track-Record of Timely Delivery","10 mn + sq ft delivered & ongoing","Superior Construction & Design"); 
                       
                       for ($i=0; $i < count($a) ; $i++) { 
                        ?>
                        <div class="col-md-6 why_choose_01 pb-2 pb-md-0">
                            <div class="pt-md-<?= $i!=0 && $i!=1 ?'3':'0'; ?> pt-3 d-flex align-items-center ">
                                <img src="images/img/icons/<?= $a[$i];?>.svg" alt="" width="60px" height="60px">
                                <div class="ps-3 text-white">
                                    <span><?= $b[$i];?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                      };
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why chooose us section End -->

    <section id="mir_floor" class="py-5  wow fadeInUp " data-wow-delay="01s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-white mb-4">PROJECTS</h2>
                </div>

            </div>
            <div class="row h_owl_alumni owl-carousel">
                <?php
                $a = array("6","2","5","3","4","1");
                $b = array("Supreme Pallacio ","Supreme Amadore ","Supreme Headquarters ","Supreme Artveda ","Supreme Esteban","Supreme Adimaa ");
                $c = array("Completed","Completed","Completed","Completed","Completed","Completed");
                $d = array("Residential","Residential","Residential","Residential","Residential","Residential");
                $e = array("Baner - Pune","Baner - Pune","Bandra - Mumbai","Pali Hill - Mumbai"," Koregaon Park - Pune","Boat Club Road - Pune");
                    for ($i=1; $i < count($a); $i++) {
                ?>
                <div class="col-md-12 position-relative height_01 header_all_pages_02"
                    data-bgimg="images/img/projects/<?= $a[$i]; ?>.jpg">
                    <div class="row">
                        <div class="col-md-12 pt-4 ps-5">
                            <span class="h6 text-white"><?= $b[$i]; ?></span>
                        </div>
                    </div>
                    <div class="row position_01 text-white text-center">
                        <div class="col-4 border-end"><span>Status</span><br><span><?= $c[$i]; ?></span></div>
                        <div class="col-4 border-end"><span>Project</span><br><span><?= $d[$i]; ?></span></div>
                        <div class="col-4"><span>Location</span><br><span><?= $e[$i]; ?></span></div>
                    </div>
                </div>
                <?php
                  }
                ?>
            </div>
            <div class="text-center">
                <button class="btn px-4 py-2 mt-2 mb-3 border-3 btn_01" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Enquire Now</button>
            </div>
        </div>
    </section>


    <section id="nir_location">
        <div class="container-fluid">
            <div class="row d-md-block d-md-flex d-none ">
                <div class="col-md-6 ">
                    <h2 class="fs-2 t-ogrey text-center mb-4">Location</h2>
                </div>
                <div class="col-md-6 ">
                    <h2 class="fs-2 t-ogrey text-center mb-4">Enquire Now</h2>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-md-6 px-0   wow  fadeInLeft" data-wow-delay="01s">
                    <h2 class="text-center text-white mb-4 d-block d-md-none">Location</h2>
                    <a href="https://maps.app.goo.gl/mXn99jTvwwFWyaqQA" target="_blank">
                        <img src="images/img/map_01.webp" class="w-100" alt="">
                    </a>
                </div>
                <div class="col-md-6 px-md-5 wow py-5 py-md-0  fadeInRight" data-wow-delay="01s">
                    <?php  include 'form_01.php'; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------footer------------------------------------------------->
    <!-- -------------------------------------------footer------------------------------------------------->

    <?php  include 'footer.php'; ?>
    <!-- -------------------------------------------footer------------------------------------------------->
    <!-- -------------------------------------------footer------------------------------------------------->

    <button class="btn sil_d_gradient open_othbtn oth_modal enquir_right_btn" data-bs-toggle="modal" data-bs-target="#exampleModal_y">Enquire
        Now</button>
    <div class="modal fade open_othbtn oth_modal modal_bg header_all_pages_01" data-bgimg="images/img/banner/1.png"
        id="exampleModal_y" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-5 position-relative bg-dark">
                <button type="button" class="btn-close btn_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-3 border">
                    <h5 class="modal-title pb-4 text-center text-white" id="exampleModalLabel">Enquire Now</h5>
                    <?php
                      include 'form_01.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade  header_all_pages_01" data-bgimg="images/img/banner/1.png" id="exampleModal"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-5 position-relative bg-dark">
                <button type="button" class="btn-close btn_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-3 border">
                    <h5 class="modal-title pb-4 text-center text-white" id="exampleModalLabel">Download Brochure Now
                    </h5>
                    <?php
                      include 'form_02.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <!-- Footer -->

    <!-- <a href="https://wa.me/91XXXXXXXX" target="_blank" class="m_whats px-3 py-3 border-radius-15 position-fixed">
        <i class="fa fa-whatsapp fs-3 text-white"></i>
        <i class="fa fa-whatsapp fs-3 text-white"></i>
    </a> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="assets/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.h_gallrey').owlCarousel({
                margin: 10,
                nav: true,
                autoplay: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            $('.h_owl_alumni').owlCarousel({
                margin: 10,
                nav: true,
                autoplay: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3.1
                    }
                }
            })
        })


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