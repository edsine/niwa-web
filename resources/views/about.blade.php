@extends('layouts.app')

@section('content')
         <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/img/background/niwa-cards-17.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner text-center">
                    <h2>About us</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="{{route('/')}}">Home</a></li>
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
                                        data-count="9"></span>
                                </h2>
                                <div class="text">
                                    <p>RIvers</p>
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
                                        data-count="90"></span>
                                </h2>
                                <div class="text">
                                    <p>Local Ports Served Nationwide</p>
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
                                        data-count="13"></span>
                                </h2>
                                <div class="text">
                                    <p>Creeks</p>
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
                                        data-count="19"></span>
                                </h2>
                                <div class="text">
                                    <p>Lakes</p>
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
            <div class="services-three__bg" style="background-image: url(assets//img/background/niwa-cards-3.jpg);">
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
                        <h2>We Provide all Kinds of <br>Services Related to Transportation by Water</h2>
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
                                        <img src="assets/img/service/niwa-cards-1.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-road-transport t5"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                    <h2><a href="road-transport.html">REGULATORY</a></h2>
                                    <p>We issue licenses for inland navigation, piers, jetties and dockyards; examine and
                                        survey inland watercraft and shipyard operators, grant permit and licenses for sand
                                        dredging, pipeline construction, dredging of slot and approve designs and
                                        construction of inland river crafts</p>
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
                                        <img src="assets/img/service/niwa-cards-2.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-ocean-freight1"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                    <h2><a href="road-transport.html">ENGINEERING</a></h2>
                                    <p>Our wide range of engineering services include construction of inland river-ports and
                                        jetties; engineering design of river ports. We also undertake in capital and
                                        maintenance dredging.</p>
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
                                        <img src="assets/img/service/niwa-cards-4.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-experience"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                    <h2><a href="road-transport.html">MARINE</a></h2>
                                    <p>As part of our marine services, we remove and receive derelicts wrecks and other
                                        obstructions from inland waterways; clear hyacinth and other harmful weeds. We
                                        engage in boat construction/repair and other dockyard services.</p>
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
        <div class="swiper-slide">
                            <!--Start Services Three Single-->
                            <div class="services-three__single">
                                <div class="services-three__single-img">
                                    <div class="inner">
                                        <img src="assets/img/service/niwa-cards-8.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-experience"></span>
                                        </div>
                                    </div>
                                </div>
                            <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                    <h2><a href="road-transport.html">TRANSPORT</a></h2>
                                    <p>NIWA is equipped with a number of vessels enabling us to operate ferry services (for
                                        economic goods and passengers) and run cruise boats (for tourism and leisure).</p>
                                        <div class="count-box">
                                            04
                                        </div>
                                        <div class="btn-box">
                                            <a href="road-transport.html">Read More <i
                                                    class="icon-right-arrow-5"></i></a>

                                            <div class="number-box">
                                                04
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
                                        <img src="assets/img/service/niwa-cards-5.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-experience"></span>
                                        </div>
                                    </div>
                                </div>
                <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                    <h2><a href="road-transport.html">SURVEY</a></h2>
                                    <p>We carry out hydrological and hydrographic surveys, river chart production,
                                        cartography, river mapping and aerial survey.</p>
                                        <div class="count-box">
                                            05
                                        </div>
                                        <div class="btn-box">
                                            <a href="road-transport.html">Read More <i
                                                    class="icon-right-arrow-5"></i></a>

                                            <div class="number-box">
                                                05
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
                                        <img src="assets/img/service/niwa-cards-7.jpg" alt="">
                                        <div class="icon-box">
                                            <span class="icon-experience"></span>
                                        </div>
                                    </div>
                                </div>
                <div class="services-three__single-content">
                                    <div class="services-three__single-content-inner">
                                    <h2><a href="road-transport.html">ENVIRONMENT</a></h2>
                                    <p>We carry out environmental impact assessment of navigation and other dredging
                                        activities within the inland water and its right of ways.</p>
                                        <div class="count-box">
                                            06
                                        </div>
                                        <div class="btn-box">
                                            <a href="road-transport.html">Read More <i
                                                    class="icon-right-arrow-5"></i></a>

                                            <div class="number-box">
                                                06
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
                                        <img src="assets\img\project\Onitsha-Port-Anambra-400x350.jpg" alt="">
                                        <div class="overlay-content">
                                            <div class="overlay-icon"><span class="icon-road-transport"></span></div>
                                            <div class="icon-box">
                                                <a href="project-details.html"><span
                                                        class="icon-right-arrow-5"></span></a>
                                            </div>
                                            <div class="text-box">
                                                <p>Construction</p>
                                                <h2><a href="project-details.html">Onitsha  <br> Port</a></h2>
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
                                        <img src="assets\img\project\baro-port-niwa-400x350.jpg" alt="">
                                        <div class="overlay-content">
                                            <div class="overlay-icon"><span class="icon-road-transport"></span></div>
                                            <div class="icon-box">
                                                <a href="project-details.html"><span
                                                        class="icon-right-arrow-5"></span></a>
                                            </div>
                                            <div class="text-box">
                                                <p>Ports</p>
                                                <h2><a href="project-details.html">Baro <br> Port</a></h2>
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
                                        <img src="assets\img\project\dredger-400x350.jpg" alt="">
                                        <div class="overlay-content">
                                            <div class="overlay-icon"><span class="icon-road-transport"></span></div>
                                            <div class="icon-box">
                                                <a href="project-details.html"><span
                                                        class="icon-right-arrow-5"></span></a>
                                            </div>
                                            <div class="text-box">
                                                <p>Dredging</p>
                                                <h2><a href="project-details.html">Lower <br> River Niger</a></h2>
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
                                        <img src="assets\img\project\Lagos-Dredging-400x350.jpg" alt="">
                                        <div class="overlay-content">
                                            <div class="overlay-icon"><span class="icon-road-transport"></span></div>
                                            <div class="icon-box">
                                                <a href="project-details.html"><span
                                                        class="icon-right-arrow-5"></span></a>
                                            </div>
                                            <div class="text-box">
                                                <p>Dredging</p>
                                                <h2><a href="project-details.html">Ajaokuta </a></h2>
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
                            <h5>Management</h5>
                        </div>
                        <h2>Meet Our Staff</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="team-details.html">
                            <span class="txt">View All</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="assets//img/team/Bola-Oyebamiji-NIWA-MD-official-Photo-300x400.jpg" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="team-details.html">Bola Oyebamiji FCIB</a></h3>
                                <p>MD/CEO</p>
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
                                <img src="assets//img/team/fiberesima-tammy-gm-ports.jpeg" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="team-details.html">Engr.Fibersima Tamunokobie</a></h3>
                                <p>GM Area Offices Co-ordination</p>
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
                                <img src= "assets/img/team/Adetola-Olawale-James-Ag-MD-NIWA.jpg" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="team-details.html">Surveyor. Olawole J. Adetola </a></h3>
                                <p>GM Business Development & Investment</p>
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
                                <img src="assets/img/team/Umar-Yusuf-Gerei-General-Manager-Finance-and-Accounts-1.jpg" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="team-details.html">Yusuf Girei</a></h3>
                                <p>GM Finance and Accounts</p>
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

      

         <!--Start Cta Two-->
    <section class="cta-two">
        <div class="container">
            <div class="cta-two__inner">
                <div class="shape1"><img src="assets/img/shape/cta-v2-shape1.png" alt=""></div>
                <div class="shape2"><img src="assets/img/shape/cta-v2-shape2.png" alt=""></div>
                <div class="shape3 float-bob-x"><img src="assets/img/shape/cta-v2-shape3.png" alt=""></div>
                <div class="cta-two__inner-box">
                    <div class="title-box">
                        <p>GEt in touch</p>
                        <h2>Have a boat or vessel? <br> Registering a boat is required by law</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="#">
                            <span class="txt">Register on NIWA Express</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--End Cta Three-->

@endsection