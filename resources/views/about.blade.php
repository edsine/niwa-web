@extends('layouts.app')

@section('content')
         <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/img/background/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner text-center">
                    <h2>About us</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><span class="icon-right-arrow-5"></span></li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header--> 

       

        <!--Start Fact Counter Two-->
        <section class="fact-counter-two fact-counter-two--about">
            <div class="container">
                <div class="row">
                    <!--Start Fact Counter Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="fact-counter-two__single">
                            <div class="icon-box">
                                <span class="icon-special-shipments"></span>
                                <div class="shape2"><img src="assets/img/shape/fact-counter-v2-shape1.png" alt=""></div>
                            </div>
                            <div class="fact-counter-two__single-inner">
                                <h2 class="count"><span class="plus">+</span><span class="odometer"
                                        data-count="250000"></span>
                                </h2>
                                <div class="text">
                                    <p>Parcels Shipped Safely</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter Two Single-->

                    <!--Start Fact Counter Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="fact-counter-two__single">
                            <div class="icon-box">
                                <span class="icon-global-network"></span>
                                <div class="shape2"><img src="assets/img/shape/fact-counter-v2-shape1.png" alt=""></div>
                            </div>
                            <div class="fact-counter-two__single-inner">
                                <h2 class="count"><span class="plus">+</span><span class="odometer"
                                        data-count="95000"></span>
                                </h2>
                                <div class="text">
                                    <p>Cities Served Worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter Two Single-->

                    <!--Start Fact Counter Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="fact-counter-two__single">
                            <div class="icon-box">
                                <span class="icon-satisfied3"></span>
                                <div class="shape2"><img src="assets/img/shape/fact-counter-v2-shape1.png" alt=""></div>
                            </div>
                            <div class="fact-counter-two__single-inner">
                                <h2 class="count"><span class="plus">+</span><span class="odometer"
                                        data-count="2560"></span>
                                </h2>
                                <div class="text">
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter Two Single-->

                    <!--Start Fact Counter Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="fact-counter-two__single">
                            <div class="icon-box">
                                <span class="icon-support"></span>
                                <div class="shape2"><img src="assets/img/shape/fact-counter-v2-shape1.png" alt=""></div>
                            </div>
                            <div class="fact-counter-two__single-inner">
                                <h2 class="count"><span class="plus">+</span><span class="odometer"
                                        data-count="1200"></span>
                                </h2>
                                <div class="text">
                                    <p>Company We Help</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter Two Single-->
                </div>
            </div>
        </section>
        <!--End Fact Counter Two-->

        <!--Start Services Three-->
        <section class="services-three">
            <div class="services-three__bg" style="background-image: url(assets//img/background/services-v3-bg.jpg);">
            </div>
            <div class="container">
                <div class="services-three__top">
                    <div class="sec-title-style3">
                        <div class="sub-title">
                            <div class="icon">
                                <img src="assets/img/icon/title-marker.png" alt="">
                            </div>
                            <h5>Our Services</h5>
                        </div>
                        <h2>We Provide all Kinds of <br> Logistics Service</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="road-transport.html">
                            <span class="txt">View All Services</span>
                        </a>
                    </div>
                </div>

                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50,
                "slidesPerView": 3,
                "loop": true,
                "pagination": {
                    "el": "#services-three__pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                "navigation": {
                    "nextEl": "#team-one__swiper-button-next",
                    "prevEl": "#team-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "768": {
                        "spaceBetween": 24,
                        "slidesPerView": 2
                    },
                    "992": {
                        "spaceBetween": 24,
                        "slidesPerView": 3
                    },
                    "1200": {
                        "spaceBetween": 24,
                        "slidesPerView": 3
                    }
                }
            }'>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <!--Start Services Three Single-->
                            <div class="services-three__single">
                                <div class="services-three__single-img">
                                    <div class="inner">
                                        <img src="assets/img/service/service-v3-img1.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-road-transport t5"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                        <h2><a href="road-transport.html">Road Transport</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing sed eiusmod</p>
                                        <div class="count-box">
                                            01
                                        </div>
                                        <div class="btn-box">
                                            <a href="road-transport.html">Read More <i
                                                    class="icon-right-arrow-5"></i></a>

                                            <div class="number-box">
                                                01
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Three Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Services Three Single-->
                            <div class="services-three__single">
                                <div class="services-three__single-img">
                                    <div class="inner">
                                        <img src="assets/img/service/service-v3-img2.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-ocean-freight1"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                        <h2><a href="road-transport.html">Ocean Freight</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing sed eiusmod</p>
                                        <div class="count-box">
                                            02
                                        </div>
                                        <div class="btn-box">
                                            <a href="road-transport.html">Read More <i
                                                    class="icon-right-arrow-5"></i></a>

                                            <div class="number-box">
                                                02
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Three Single-->
                        </div>


                        <div class="swiper-slide">
                            <!--Start Services Three Single-->
                            <div class="services-three__single">
                                <div class="services-three__single-img">
                                    <div class="inner">
                                        <img src="assets/img/service/service-v3-img3.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-experience"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                        <h2><a href="road-transport.html">Cargo Container</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing sed eiusmod</p>
                                        <div class="count-box">
                                            03
                                        </div>
                                        <div class="btn-box">
                                            <a href="road-transport.html">Read More <i
                                                    class="icon-right-arrow-5"></i></a>

                                            <div class="number-box">
                                                03
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Services Three Single-->
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="services-three__pagination"></div>
            </div>
        </section>
        <!--End Services Three-->

        <!--Start Project Three-->
        <section class="project-three project-three--about">
            <div class="container">
                <div class="project-three__top">
                    <div class="sec-title-style3">
                        <div class="sub-title">
                            <div class="icon">
                                <img src="assets/img/icon/title-marker-4.png" alt="">
                            </div>
                            <h5>Latest Project</h5>
                        </div>
                        <h2>Transporting Across <br> The World</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="project-details.html">
                            <span class="txt">View All Project</span>
                        </a>
                    </div>
                </div>


                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50,
                "slidesPerView": 3,
                "loop": true,
                "pagination": {
                    "el": "#project-three__pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                "navigation": {
                    "nextEl": "#team-one__swiper-button-next",
                    "prevEl": "#team-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "768": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "992": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "1200": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    }
                }
            }'>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <!--Start Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__single-img">
                                    <div class="inner">
                                        <img src="assets/img/project/project-v3-img1.jpg" alt="">
                                        <div class="overlay-content">
                                            <div class="overlay-icon"><span class="icon-road-transport"></span></div>
                                            <div class="icon-box">
                                                <a href="project-details.html"><span
                                                        class="icon-right-arrow-5"></span></a>
                                            </div>
                                            <div class="text-box">
                                                <p>Logistic</p>
                                                <h2><a href="project-details.html">Road Freight <br> Solution</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Project Three Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__single-img">
                                    <div class="inner">
                                        <img src="assets/img/project/project-v3-img2.jpg" alt="">
                                        <div class="overlay-content">
                                            <div class="overlay-icon"><span class="icon-road-transport"></span></div>
                                            <div class="icon-box">
                                                <a href="project-details.html"><span
                                                        class="icon-right-arrow-5"></span></a>
                                            </div>
                                            <div class="text-box">
                                                <p>Logistic</p>
                                                <h2><a href="project-details.html">Road Freight <br> Solution</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Project Three Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__single-img">
                                    <div class="inner">
                                        <img src="assets/img/project/project-v3-img3.jpg" alt="">
                                        <div class="overlay-content">
                                            <div class="overlay-icon"><span class="icon-road-transport"></span></div>
                                            <div class="icon-box">
                                                <a href="project-details.html"><span
                                                        class="icon-right-arrow-5"></span></a>
                                            </div>
                                            <div class="text-box">
                                                <p>Logistic</p>
                                                <h2><a href="project-details.html">Road Freight <br> Solution</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Project Three Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__single-img">
                                    <div class="inner">
                                        <img src="assets/img/project/project-v3-img4.jpg" alt="">
                                        <div class="overlay-content">
                                            <div class="overlay-icon"><span class="icon-road-transport"></span></div>
                                            <div class="icon-box">
                                                <a href="project-details.html"><span
                                                        class="icon-right-arrow-5"></span></a>
                                            </div>
                                            <div class="text-box">
                                                <p>Logistic</p>
                                                <h2><a href="project-details.html">Road Freight <br> Solution</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Project Three Single-->
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="project-three__pagination"></div>
            </div>
        </section>
        <!--End Project Three-->

        <!--Start Team Three-->
        <section class="team-three team-three--about">
            <div class="team-three__shape1">
                <img src="assets/img/shape/team-v3-shape2.png" alt="">
            </div>
            <div class="container">
                <div class="team-three__top">
                    <div class="sec-title-style3">
                        <div class="sub-title">
                            <div class="icon">
                                <img src="assets/img/icon/title-marker-4.png" alt="">
                            </div>
                            <h5>Team</h5>
                        </div>
                        <h2>Meet Our Staff</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="team-details.html">
                            <span class="txt">Become a Member</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="assets/img/team/team-v3-img1.jpg" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="team-details.html">Rebecca Tylor</a></h3>
                                <p>CEO - Founder</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="assets/img/team/team-v3-img2.jpg" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="team-details.html">Harley Russle</a></h3>
                                <p>Senior Worker</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="assets/img/team/team-v3-img3.jpg" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="team-details.html">Helen Wilmore</a></h3>
                                <p>Sr. Manager</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="assets/img/team/team-v3-img4.jpg" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="team-details.html">Jennifer Rivera</a></h3>
                                <p>Cargo Head</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->
                </div>
            </div>
        </section>
        <!--End Team Three-->

        <!--Start Blog Three-->
        <section class="blog-two blog-two--three">
            <div class="blog-two--three__bg" style="background-image: url(assets/img/background/blog-v3-bg.jpg);"></div>
            <div class="container">
                <div class="sec-title-style3 text-center">
                    <div class="sub-title center">
                        <div class="icon">
                            <img src="assets/img/icon/title-marker-2.png" alt="">
                        </div>
                        <h5>LATEST POST</h5>
                    </div>
                    <h2>Get the latest news blog</h2>
                </div>

                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50,
                "slidesPerView": 3,
                "loop": true,
                "pagination": {
                    "el": "#blog-two--three__pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                "navigation": {
                    "nextEl": "#team-one__swiper-button-next",
                    "prevEl": "#team-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "768": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "992": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "1200": {
                        "spaceBetween": 24,
                        "slidesPerView": 3
                    }
                }
            }'>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <!--Start Blog Two Single-->
                            <div class="blog-two__single">
                                <div class="blog-two__single-img">
                                    <div class="overlay-img__outer">
                                        <div class="name">
                                            <p>Harley Russle</p>
                                        </div>
                                        <div class="overlay-img">
                                            <img src="assets/img/blog/blog-v3-img4.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <img src="assets/img/blog/blog-v3-img1.jpg" alt="#">
                                    </div>
                                </div>

                                <div class="blog-two__single-content">
                                    <h2><a href="blog-details.html">How technology can help <br> redraw the supply</a>
                                    </h2>
                                    <ul class="meta-box">
                                        <li><a href="#">Air Freight</a></li>
                                        <li>-</li>
                                        <li>November 13, 2023</li>
                                    </ul>

                                    <div class="btn-box">
                                        <a href="blog-details.html">Read More <span
                                                class="icon-right-arrow-5"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Two Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Blog Two Single-->
                            <div class="blog-two__single">
                                <div class="blog-two__single-img">
                                    <div class="overlay-img__outer">
                                        <div class="name">
                                            <p>Harley Russle</p>
                                        </div>
                                        <div class="overlay-img">
                                            <img src="assets/img/blog/blog-v3-img5.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <img src="assets/img/blog/blog-v3-img2.jpg" alt="#">
                                    </div>
                                </div>

                                <div class="blog-two__single-content">
                                    <h2><a href="blog-details.html">Going forward, a new normal <br> that has
                                            evolved</a></h2>
                                    <ul class="meta-box">
                                        <li><a href="#">Air Freight</a></li>
                                        <li>-</li>
                                        <li>November 13, 2023</li>
                                    </ul>

                                    <div class="btn-box">
                                        <a href="blog-details.html">Read More <span
                                                class="icon-right-arrow-5"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Two Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Blog Two Single-->
                            <div class="blog-two__single">
                                <div class="blog-two__single-img">
                                    <div class="overlay-img__outer">
                                        <div class="name">
                                            <p>Harley Russle</p>
                                        </div>
                                        <div class="overlay-img">
                                            <img src="assets/img/blog/blog-v3-img6.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <img src="assets/img/blog/blog-v3-img3.jpg" alt="#">
                                    </div>
                                </div>

                                <div class="blog-two__single-content">
                                    <h2><a href="blog-details.html">Advanced Service Functions <br> by Air Transport</a>
                                    </h2>
                                    <ul class="meta-box">
                                        <li><a href="#">Air Freight</a></li>
                                        <li>-</li>
                                        <li>November 13, 2023</li>
                                    </ul>

                                    <div class="btn-box">
                                        <a href="blog-details.html">Read More <span
                                                class="icon-right-arrow-5"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Two Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Blog Two Single-->
                            <div class="blog-two__single">
                                <div class="blog-two__single-img">
                                    <div class="overlay-img__outer">
                                        <div class="name">
                                            <p>Harley Russle</p>
                                        </div>
                                        <div class="overlay-img">
                                            <img src="assets/img/blog/blog-v3-img5.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <img src="assets/img/blog/blog-v3-img2.jpg" alt="#">
                                    </div>
                                </div>

                                <div class="blog-two__single-content">
                                    <h2><a href="blog-details.html">Going forward, a new normal <br> that has
                                            evolved</a></h2>
                                    <ul class="meta-box">
                                        <li><a href="#">Air Freight</a></li>
                                        <li>-</li>
                                        <li>November 13, 2023</li>
                                    </ul>

                                    <div class="btn-box">
                                        <a href="blog-details.html">Read More <span
                                                class="icon-right-arrow-5"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Two Single-->
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="blog-two--three__pagination"></div>
            </div>
        </section>
        <!--End Blog Three-->

        <!--Start Brand Two-->
        <section class="brand-one brand-one--two">
            <div class="big-title-box">partnerpartner</div>
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                    "0": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "375": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "575": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 2
                                    },
                                    "767": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 3
                                    },
                                    "991": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 4
                                    },
                                    "1199": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 5
                                    }
                                }}'>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/img/brand/brand-v2-img1.png" alt="#">
                            </div>

                            <div class="img-box2">
                                <img src="assets/img/brand/brand-v2-img1.png" alt="#">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/img/brand/brand-v2-img2.png" alt="#">
                            </div>

                            <div class="img-box2">
                                <img src="assets/img/brand/brand-v2-img2.png" alt="#">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/img/brand/brand-v2-img3.png" alt="#">
                            </div>

                            <div class="img-box2">
                                <img src="assets/img/brand/brand-v2-img3.png" alt="#">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/img/brand/brand-v2-img4.png" alt="#">
                            </div>

                            <div class="img-box2">
                                <img src="assets/img/brand/brand-v2-img4.png" alt="#">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/img/brand/brand-v2-img5.png" alt="#">
                            </div>

                            <div class="img-box2">
                                <img src="assets/img/brand/brand-v2-img5.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand Two -->

        <!--Start Cta Three-->
        <section class="cta-two style3">
            <div class="container">
                <div class="cta-two__inner">
                    <div class="shape1"><img src="assets/img/shape/cta-v3-shape1.png" alt=""></div>
                    <div class="shape2"><img src="assets/img/shape/cta-v3-shape2.png" alt=""></div>
                    <div class="shape3 float-bob-x"><img src="assets/img/shape/cta-v3-shape3.png" alt=""></div>
                    <div class="cta-two__inner-box">
                        <div class="sec-title-style3">
                            <div class="sub-title">
                                <div class="icon">
                                    <img src="assets/img/icon/title-marker-3.png" alt="">
                                </div>
                                <h5>Get in touch</h5>
                            </div>
                            <h2>Looking for the best logistics <br>
                                transport services</h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="#">
                                <span class="txt">Request a Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta Three-->

@endsection