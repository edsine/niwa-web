@extends('layouts.app')
<style>
    /* Style the video: 100% width and height to cover the entire window */
    #myVideo {
        min-width: 100%;
        min-height: 100%;
    }
</style>

@section('content')
    <!--Start Main Slider Two-->
    <section class="main-slider main-slider-two">
        <div class="swiper-container thm-swiper__slider-two">

            <div class="swiper-wrapper">
                <!--Start Swiper Slide Single-->
                <div class="swiper-slide">

                    <video class="image-layer" autoplay muted loop id="myVideo" playsinline>
                        <source src="{{ asset('assets/img/slider/banner-video_3.mp4') }}" type="video/mp4">
                    </video>
                    <div class="shape1"><img src="assets/img/shape/slider-v2-shape1.png" alt=""></div>
                    <div class="shape2"><img src="assets/img/shape/slider-v2-shape2.png" alt=""></div>
                    <div class="shape3"><img src="assets/img/shape/slider-v2-shape3.png" alt=""></div>
                    <div class="shape4"><img class="float-bob-x" src="assets/img/shape/slider-v2-shape4.png" alt="">
                    </div>
                    <div class="big-title">
                        <h2>NIWA</h2>
                    </div>
                    <div class="container">
                        <div class="main-slider-two__single">
                            <div class="main-slider-two__content">
                                <div class="sub-title">
                                    <p>National Inland Waterways Authority</p>
                                </div>
                                <div class="title col-md-7">
                                    <h2>Complete Waterways Registration Process on <br> <Span class="bg-white">NIWA
                                            EXPRESS</Span> </h2>
                                    <!--<br>  <span>Provider</span> -->
                                </div>
                                <div class="text col-md-6">
                                    <p>Welcome to the Electronic Register System (NIWA EXPRESS). A platform for vessel
                                        e-registration and management</p>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="btn-box col-6">
                                            <a class="thm-btn" href="http://express.eniwa.com.ng/register" target="__blank">
                                                <span class="txt">Fresh Application</span> <i
                                                    class="icon-right-arrow"></i>
                                            </a>
                                        </div>
                                        <div class="btn-box col-6">
                                            <a class="thm-btn" href="http://express.eniwa.com.ng/login" target="__blank">
                                                <span class="txt">Continue Registration</span> <i
                                                    class="icon-right-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Swiper Slide Single-->

                <!--Start Swiper Slide Single-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/img/slider/niwa-slider-2.jpg);">
                    </div>
                    <div class="shape1"><img src="assets/img/shape/slider-v2-shape1.png" alt=""></div>
                    <div class="shape2"><img src="assets/img/shape/slider-v2-shape2.png" alt=""></div>
                    <div class="shape3"><img src="assets/img/shape/slider-v2-shape3.png" alt=""></div>
                    <div class="shape4"><img class="float-bob-x" src="assets/img/shape/slider-v2-shape4.png" alt="">
                    </div>
                    <div class="big-title">
                        <h2>NIWA</h2>
                    </div>
                    <div class="container">
                        <div class="main-slider-two__single">
                            <div class="main-slider-two__content">
                                <div class="sub-title">
                                    <p>National Inland Waterways Authority</p>
                                </div>
                                <div class="title col-md-7">
                                    <h2>Harnessing the Potentials of Nigeria's <span> Waterways</span></h2>
                                </div>
                                <div class="text col-md-6">
                                    <p>Nigeria has about 10,000 kilometers of waterways that can provide all year round
                                        navigation for transportation of bulk cargo and passengers.</p>
                                </div>
                                <!--<div class="btn-box">
                                                                        <a class="thm-btn" href="#">
                                                                            <span class="txt">Calculate Package</span> <i class="icon-right-arrow"></i>
                                                                        </a>
                                                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Swiper Slide Single-->

                <!--Start Swiper Slide Single-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/img/slider/niwa-slider-1.jpeg);">
                    </div>
                    <div class="shape1"><img src="assets/img/shape/slider-v2-shape1.png" alt=""></div>
                    <div class="shape2"><img src="assets/img/shape/slider-v2-shape2.png" alt=""></div>
                    <div class="shape3"><img src="assets/img/shape/slider-v2-shape3.png" alt=""></div>
                    <div class="shape4"><img class="float-bob-x" src="assets/img/shape/slider-v2-shape4.png" alt="">
                    </div>
                    <div class="big-title">
                        <h2>NIWA</h2>
                    </div>
                    <div class="container">
                        <div class="main-slider-two__single">
                            <div class="main-slider-two__content">
                                <div class="sub-title">
                                    <p>National Inland Waterways Authority</p>
                                </div>
                                <div class="title col-md-7">
                                    <h2>Over 3,000Km of Navigable <span>Waterways</span></h2>
                                </div>
                                <div class="text col-md-6">
                                    <p>28 of Nigeria's 36 States can be accessed through water, linked to five neighbouring
                                        countries (Benin Republic, Equitorial Guinea, Cameroon, Chad and Niger)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Swiper Slide Single-->

                <!--Start Swiper Slide Single-->
                <!--Start Swiper Slide Single-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/img/slider/niwa-slider.jpg);">
                    </div>
                    <div class="shape1"><img src="assets/img/shape/slider-v2-shape1.png" alt=""></div>
                    <div class="shape2"><img src="assets/img/shape/slider-v2-shape2.png" alt=""></div>
                    <div class="shape3"><img src="assets/img/shape/slider-v2-shape3.png" alt=""></div>
                    <div class="shape4"><img class="float-bob-x" src="assets/img/shape/slider-v2-shape4.png"
                            alt=""></div>
                    <div class="big-title">
                        <h2>NIWA</h2>
                    </div>
                    <div class="container">
                        <div class="main-slider-two__single">
                            <div class="main-slider-two__content">
                                <div class="sub-title">
                                    <p>National Inland Waterways Authority</p>
                                </div>
                                <div class="title col-md-7">
                                    <h2>Have a Boat or <span>Vessel?</span> </h2>
                                </div>
                                <div class="text col-md-6">
                                    <p>Registering a boat is required by law much like with a car and the rules and
                                        guidelines for how this process is done and what kind of watercraft must be
                                        registered are dictated by NIWA..</p>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">REGISTER NOW</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Swiper Slide Single-->

                <!--End Swiper Slide Single-->
            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-two__wrap">
                <div class="swiper-counter">
                    <div id="current">1</div>
                    <div id="total"></div>
                </div>
            </div>

            <div class="swiper-nav-style1">
                <div class="swiper-button-prev" id="main-slider-two__swiper-button-next">
                    <i class="icon-left-arrow-5" aria-hidden="true"></i>
                </div>
                <div class="swiper-button-next" id="main-slider-two__swiper-button-prev">
                    <i class="icon-right-arrow-5" aria-hidden="true"></i>
                </div>
            </div>


        </div>
    </section>
    <!--End Main Slider One-->

    <!--Start About Two -->
    <section class="about-two">
        <div class="shape1 float-bob-x"><img src="assets/img/shape/about-v2-shape1.png" alt=""></div>
        <div class="container">
            <div class="row">
                <!--Start About Two Img-->
                <div class="col-xl-6">
                    <div class="about-two__img">
                        <div class="about-two__experience-box text-center wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="about-two__experience-box-bg"
                                style="background-image: url(assets/img/background/niwa-cards.jpg);"></div>
                            <div class="inner">
                                <h2 class="count"><span class="odometer" data-count="30"></span><span
                                        class="plus">+</span>
                                </h2>
                                <div class="text col-md-6">
                                    <p>Year of <br>
                                        Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-two__img1">
                            <img src="assets/img/about/niwa-cards-1.jpg" alt="">
                        </div>

                        <div class="about-two__video wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="about-two__video-bg"
                                style="background-image: url(assets/img/background/niwa-cards-2.jpg);"></div>
                            <div class="about-two__video-box">
                                <div class="round-text">
                                    <div class="curved-circle-2 rotate-me">
                                        Award Winning Company - Since 1980 -
                                    </div>
                                </div>
                                <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI"
                                    class="about-two__video-icon video-popup">
                                    <span class="icon-play-button-arrowhead"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End About Two Img-->

                <!--Start About Two Content-->
                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="sec-title-two">
                            <div class="sub-title">
                                <h5>About Us</h5>
                            </div>
                            <h2>National Inland Waterways Authority <br>
                                NIWA</h2>
                        </div>

                        <div class="about-two__content-text">
                            <p>The National Inland Waterways Authority (NIWA), hitherto Inland Waterways Department (IWD) of
                                the Federal Ministry of Transport, metamorphosed into an Authority vide an act of the
                                National Assembly, CAP 47, Laws of the Federation of Nigeria (LFN), 2004 (Decree No. 13 of
                                1997), established with the primary responsibility to improve and develop Nigeria’s inland
                                waterways for navigation.</p>
                        </div>

                        <div class="about-two__content-list">
                            <ul>
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-check-marked-1"></span>
                                    </div>
                                    <p>Objectives</p>
                                </li>
                                <li>improve and develop inland waterways for navigation,</li>
                                <li>provide an alternative mode of transportation for the evacuation of economic goods and
                                    persons and
                                <li>
                                <li>execute the objectives of the national transport policy as they concern inland waterways
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-check-marked-1"></span>
                                    </div>
                                    <p>Our Vision</p>
                                </li>
                                <p>To make Nigeria the leader in inland water Transportation, development and management in
                                    Africa.</p>
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-check-marked-1"></span>
                                    </div>
                                    <p>Our Mission</p>
                                </li>
                                <p>To provide regulatory, economical and operational leadership in the Nation’s Inland
                                    Waterways system and develop infrastructural facilities for an efficient intermodal
                                    transportation system in line with global best practices that is safe, seamless and
                                    affordable.</p>
                            </ul>
                        </div>

                        <div class="about-two__content-bottom">
                            <div class="btn-box">
                                <a class="thm-btn" href="about.html">
                                    <span class="txt">Read More</span> <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                            <div class="author-box">
                                <div class="img-box">
                                    <img src="assets/img/about/Bola-Oyebamiji-NIWA-MD-official-Photo.jpg" alt="">
                                </div>

                                <div class="text-box">
                                    <h3>Bola Oyebamiji, FCIB</h3>
                                    <p>Managing Director/CEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End About Two Content-->
            </div>
        </div>
    </section>
    <!--End About Two -->

    <!--Start Fact Counter Two-->
    <section class="fact-counter-two">
        <div class="shape1 float-bob-y"><img style="height: 30vh" src="assets/img/about/ship-png-4.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <!--Start Fact Counter Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="fact-counter-two__single">
                        <div class="icon-box">
                            <span class="icon-special-shipments"></span>
                        </div>
                        <div class="fact-counter-two__single-inner">
                            <h2 class="count"><span class="plus">+</span><span class="odometer"
                                    data-count="9"></span>
                            </h2>
                            <div class="text col-md-6">
                                <p>Rivers</p>
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
                        </div>
                        <div class="fact-counter-two__single-inner">
                            <h2 class="count"><span class="plus">+</span><span class="odometer"
                                    data-count="13"></span>
                            </h2>
                            <div class="text col-md-6">
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
                        </div>
                        <div class="fact-counter-two__single-inner">
                            <h2 class="count"><span class="plus">+</span><span class="odometer"
                                    data-count="19"></span>
                            </h2>
                            <div class="text col-md-6">
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

    <!--Start Services Two-->
    <section class="services-two">
        <div class="services-two__bg" style="background-image: url(assets//img/background/niwa-cards-3.jpg);">
        </div>
        <div class="shape1"><img src="assets/img/shape/services-v2-shape1.png" alt=""></div>
        <div class="container">
            <div class="sec-title-two">
                <div class="sub-title">
                    <h5>Our Services</h5>
                </div>
                <h2>We Provide all Kinds of <br>Services Related to Transportation by Water</h2>
            </div>

            <div class="swiper-container services-two__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!--Start Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-1.jpg" alt="">
                                </div>
                                <div class="number-box">01</div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-inner">
                                    <h3><a href="road-transport.html">REGULATORY</a></h3>
                                    <p>We issue licenses for inland navigation, piers, jetties and dockyards; examine and
                                        survey inland watercraft and shipyard operators, grant permit and licenses for sand
                                        dredging, pipeline construction, dredging of slot and approve designs and
                                        construction of inland river crafts</p>
                                    <div class="count-box">
                                        01
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="road-transport.html">
                                        <span class="txt">Read More</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Services Two Single-->
                    </div>

                    <div class="swiper-slide">
                        <!--Start Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-2.jpg" alt="">
                                </div>
                                <div class="number-box">02</div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-inner">
                                    <h3><a href="road-transport.html">ENGINEERING</a></h3>
                                    <p>Our wide range of engineering services include construction of inland river-ports and
                                        jetties; engineering design of river ports. We also undertake in capital and
                                        maintenance dredging.</p>
                                    <div class="count-box">
                                        02
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="road-transport.html">
                                        <span class="txt">Read More</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Services Two Single-->
                    </div>

                    <div class="swiper-slide">
                        <!--Start Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-4.jpg" alt="">
                                </div>
                                <div class="number-box">03</div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-inner">
                                    <h3><a href="road-transport.html">MARINE</a></h3>
                                    <p>As part of our marine services, we remove and receive derelicts wrecks and other
                                        obstructions from inland waterways; clear hyacinth and other harmful weeds. We
                                        engage in boat construction/repair and other dockyard services.</p>
                                    <div class="count-box">
                                        03
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="road-transport.html">
                                        <span class="txt">Read More</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Services Two Single-->
                    </div>

                    <div class="swiper-slide">
                        <!--Start Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-8.jpg" alt="">
                                </div>
                                <div class="number-box">04</div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-inner">
                                    <h3><a href="road-transport.html">TRANSPORT</a></h3>
                                    <p>NIWA is equipped with a number of vessels enabling us to operate ferry services (for
                                        economic goods and passengers) and run cruise boats (for tourism and leisure).</p>
                                    <div class="count-box">
                                        04
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="road-transport.html">
                                        <span class="txt">Read More</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Services Two Single-->
                    </div>

                    <div class="swiper-slide">
                        <!--Start Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-5.jpg" alt="">
                                </div>
                                <div class="number-box">05</div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-inner">
                                    <h3><a href="road-transport.html">SURVEY</a></h3>
                                    <p>We carry out hydrological and hydrographic surveys, river chart production,
                                        cartography, river mapping and aerial survey.</p>
                                    <div class="count-box">
                                        05
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="road-transport.html">
                                        <span class="txt">Read More</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Services Two Single-->
                    </div>

                    <div class="swiper-slide">
                        <!--Start Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-7.jpg" alt="">
                                </div>
                                <div class="number-box">06</div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-inner">
                                    <h3><a href="road-transport.html">ENVIRONMENT</a></h3>
                                    <p>We carry out environmental impact assessment of navigation and other dredging
                                        activities within the inland water and its right of ways.</p>
                                    <div class="count-box">
                                        06
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="road-transport.html">
                                        <span class="txt">Read More</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Services Two Single-->
                    </div>
                </div>
            </div>


            <!-- If we need navigation buttons -->
            <div class="services-two__wrap">
                <div class="swiper-counter">
                    <div id="current2">1</div>
                    <div id="total2"></div>
                </div>
            </div>

            <div class="swiper-nav-style1">
                <div class="swiper-button-prev" id="services-two__swiper-button-next">
                    <i class="icon-left-arrow-5" aria-hidden="true"></i>
                </div>
                <div class="swiper-button-next" id="services-two__swiper-button-prev">
                    <i class="icon-right-arrow-5" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Two-->


    <!--Start Company Benefit One-->
    <section class="company-benefit-one">
        <div class="company-benefit-one__img wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
            style="background-image: url(assets/img/service/niwa-cards-6.jpg);"></div>
        <div class="container">
            <div class="row">
                <!--Start Company Benefit One Content-->
                <div class="col-xl-6">
                    <div class="company-benefit-one__content">
                        <div class="sec-title-two">
                            <div class="sub-title">
                                <h5>NEWSLETTER</h5>
                            </div>
                            <h2>Anti-Corruption and Transparency Unit (ACTU)</h2>
                        </div>

                        <div class="company-benefit-one__content-text">
                            <p>More than a supplier, we work as a true partner and accompany you with
                                recommendations, based on your mobility data, so that you can reduce your costs,</p>
                        </div>

                        <ul class="company-benefit-one__content-list">
                            <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="shape1"><img src="assets/img/shape/company-benefit-v1-shape1.png"
                                        alt=""></div>
                                <div class="icon-box">
                                    <span class="icon-right-time-delivery-1"></span>
                                </div>

                                <div class="content-box">
                                    <h3>Mandate of ACTU</h3>
                                    <p>The ACTU was created to serve as an extension of ICPC in the MDAs through an approval
                                        by government, vide the Head of the Civil Service of the Federation circular Ref.
                                        No. OHCSF/MSO/192/94 dated 2nd October 2001, and another circular Ref. No.
                                        OE/MS/MSO/196/S1/7 dated 16th April 2003. The underlying reason for the
                                        establishment of the unit was to complement and strengthen the efforts of the
                                        Commission in the areas of monitoring, reporting and preventing corruption in the
                                        MDAs.</p>
                                </div>
                            </li>

                            <li class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <div class="shape1"><img src="assets/img/shape/company-benefit-v1-shape1.png"
                                        alt=""></div>
                                <div class="icon-box">
                                    <span class="icon-online-support"></span>
                                </div>

                                <div class="content-box">
                                    <h3>Powers and Functions of ACTU</h3>
                                    <p>ACTUs derive their powers from the provisions of Section 6(a) – (t) of the corrupt
                                        practices and other Related Offences Act, 2000, which empowers them to serve as
                                        compliance and ethics officers, with the sole aim of educating and enlightening
                                        their respective MDAs on the need for adherence to rules, regulations and upholding
                                        of ethical practices in the workplace. ACTUs are also empowered to carry out
                                        preliminary and administrative investigations into cases of misconduct and refer to
                                        appropriate quarters as spelt out in the ACTU Standing Orders.</p>
                                </div>
                            </li>

                            <li class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="shape1"><img src="assets/img/shape/company-benefit-v1-shape1.png"
                                        alt=""></div>
                                <div class="icon-box">
                                    <span class="icon-safe-package"></span>
                                </div>

                                <div class="content-box">
                                    <h3>Safe Package</h3>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia
                                        deserunt.</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <!--End Company Benefit One Content-->


                <!--Start Company Benefit One Form-->
                <div class="col-xl-6">
                    <div class="company-benefit-one__form">
                        <div class="title-box">
                            <h2>Complaint Form</h2>
                        </div>

                        <form method="post" action="index.html">
                            <div class="company-benefit-one__distance-box">
                                <!-- <div class="title col-md-7">
                                                                        <h3>Distance:</h3>
                                                                    </div>

                                                                    <div class="range-slider-price" data-range-min="50" data-range-max="500"
                                                                        data-limit="500" data-start-min="50" data-start-max="300"
                                                                        id="range-slider-price"></div> -->

                                <div class="form-group">
                                    <div class="inner">
                                        <!--  <p><span id="min-value-rangeslider"></span>km</p>
                                                                            <span>-</span>
                                                                            <p><span id="max-value-rangeslider"></span>km</p> -->
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <input type="text" name="username" placeholder="Full Name" required="">
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="select-box">
                                            <select class="selectmenu wide">
                                                <option selected="selected">Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Prefer Not to Say</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="select-box">
                                            <select class="selectmenu wide">
                                                <option selected="selected">Complaint Nature</option>
                                                <option>Type 1</option>
                                                <option>Type 2</option>
                                                <option>Type 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <textarea placeholder="Write your massage"></textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">
                                                Send Complaint
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Company Benefit One Form-->
            </div>
        </div>
    </section>
    <!--End Company Benefit One-->

    <!-- Start Faq One-->
    <section class="faq-one faq-one--two">
        <div class="big-title">
            <h2>faq</h2>
        </div>
        <div class="faq-one__bg" style="background-image: url(assets/img/about/niwa-cards.jpg);"></div>
        <div class="container">
            <div class="row">
                <!-- Start Faq One Faq-->
                <div class="col-xl-6">
                    <div class="faq-one__faq">

                        <div class="sec-title-two">
                            <div class="sub-title">
                                <h5>FAQ?</h5>
                            </div>
                            <h2>Frequently Asked Questions</h2>
                        </div>

                        <ul class="accrodion-grp faq-one__accrodion" data-grp-name="faq-one-accrodion">
                            <!-- Start Faq One Single-->
                            <li class="accrodion active">
                                <div class="accrodion-title">
                                    <h2><span>01.</span> What is an inland waterway authority?</h2>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <span>Answer:</span>
                                        <p>An inland waterway authority is a government or quasi-governmental organization
                                            responsible for managing, regulating, and developing water transportation
                                            infrastructure within a specific region or jurisdiction.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h2><span>02.</span> What is the role of the inland waterway authority? </h2>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <span>Answer:</span>
                                        <p>The role of the inland waterway authority is to oversee the planning,
                                            development, maintenance, and regulation of navigable waterways to promote safe,
                                            efficient, and environmentally sustainable transportation, commerce, and
                                            recreation.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h2><span>03.</span> What types of waterways fall under the jurisdiction of the inland
                                        waterway authority?</h2>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <span>Answer:</span>
                                        <p>Inland waterway authorities typically manage rivers, canals, lakes, and other
                                            inland water bodies that are used for transportation, commerce, recreation, and
                                            environmental conservation.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->

                            <!-- Start Faq One Single-->
                            <li class="accrodion">
                                <div class="accrodion-title">
                                    <h2><span>04.</span>How does the inland waterway authority contribute to economic
                                        development?</h2>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <span>Answer:</span>
                                        <p>The inland waterway authority contributes to economic development by facilitating
                                            the movement of goods, reducing transportation costs, supporting commerce and
                                            industry along water corridors, and attracting investment to waterfront areas
                                            for commercial and recreational purposes.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Faq One Single-->
                        </ul>
                    </div>
                </div>
                <!-- End Faq One Faq-->

                <!-- Start Faq One Contact Info-->
                <div class="col-xl-6">
                    <div class="faq-one__contact-info wow fadeInRight" data-wow-delay=".3s">
                        <div class="title-box">
                            <p>Let’s Talk</p>
                            <h3>You need any help? get free consultation</h3>
                        </div>

                        <div class="faq-one__contact-info-number">
                            <div class="icon">
                                <span class="icon-call"></span>
                            </div>

                            <div class="text col-md-6">
                                <p>Have Any Questions</p>
                                <h3><a href="tel:+2349131655053">(00) 112 365 489</a></h3>
                            </div>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="#">
                                <span class="txt">Contact Us</span> <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Faq One Contact Info-->
            </div>
        </div>
    </section>
    <!-- End Faq One-->

    <!--Start Project Two-->
    {{-- <section class="project-two">
        <div class="container">
            <div class="project-two__top">
                <div class="sec-title-two">
                    <div class="sub-title">
                        <h5>Latest Project</h5>
                    </div>
                    <h2>Gallery</h2>
                </div>

                <div class="btn-box">
                    <a class="thm-btn" href="projects.html">
                        <span class="txt">View All Project</span> <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div>

            <div class="row">
                <!--Start Project Two Single-->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="project-two__single">
                        <div class="project-two__single-img">
                            <div class="inner">
                                <img src="assets/img/project/baro-port-niwa-400x350.jpg" alt="">
                                <div class="btn-box">
                                    <a href="#"><span class="icon-right-arrow-5"></span></a>
                                </div>
                                <div class="overlay-content">
                                    <p>Ports</p>
                                    <h2><a href="#">Baro Port NIWA</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Project Two Single-->
                <!--Start Project Two Single-->
                <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="project-two__single">
                        <div class="project-two__single-img">
                            <div class="inner">
                                <img src="assets/img/project/dredger-400x350.jpg" alt="">
                                <div class="btn-box">
                                    <a href="#"><span class="icon-right-arrow-5"></span></a>
                                </div>
                                <div class="overlay-content">
                                    <p>Dredging</p>
                                    <h2><a href="#">Lower River Niger</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Project Two Single-->

                <!--Start Project Two Single-->
                <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="project-two__single">
                        <div class="project-two__single-img">
                            <div class="inner">
                                <img src="assets/img/project/Lagos-Dredging-400x350.jpg" alt="">
                                <div class="btn-box">
                                    <a href="#"><span class="icon-right-arrow-5"></span></a>
                                </div>
                                <div class="overlay-content">
                                    <p>Dredging</p>
                                    <h2><a href="#">Ajaokuta</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Project Two Single-->

                <!--Start Project Two Single-->
                <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="project-two__single">
                        <div class="project-two__single-img">
                            <div class="inner">
                                <img src="assets/img/project/Onitsha-Port-Anambra-400x350.jpg" alt="">
                                <div class="btn-box">
                                    <a href="#"><span class="icon-right-arrow-5"></span></a>
                                </div>
                                <div class="overlay-content">
                                    <p>Construction, Environmental Impact Assessment</p>
                                    <h2><a href="#">Onitsha Port</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Project Two Single-->                
            </div>
        </div>
    </section> --}}
    <!--End Project Two-->

    <!--Start Team Two-->
    <section class="team-two">
        <div class="team-two__bg" style="background-image: url(assets/img/background/niwa-cards-17.jpg);"></div>
        <div class="container">
            <div class="sec-title-two">
                <div class="sub-title">
                    <h5>Our Stuff</h5>
                </div>
                <h2>The Management</h2>
            </div>

            <div class="swiper-container team-two__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!--Start Team Two Single-->
                        <div class="team-two__single">
                            <div class="team-two__single-bg"
                                style="background-image: url(assets/img/team/Bola-Oyebamiji-NIWA-MD-official-Photo-300x400.jpg);">
                            </div>
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="assets//img/team/Bola-Oyebamiji-NIWA-MD-official-Photo-300x400.jpg"
                                        alt="">
                                    <div class="social-links">
                                        <a href="#" class="fb"><span class="icon-facebook"></span></a>
                                        <a href="#" class="tw"><span class="icon-twitter"></span></a>
                                        <a href="#" class="ins"><span class="icon-instagram"></span></a>
                                        <a href="#" class="lin"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__single-content text-center">
                                <h3><a href="team-details.html">Bola Oyebamiji FCIB</a></h3>
                                <p>MD/CEO</p>
                            </div>

                            {{-- <div class="team-two__single-number">
                                <ul class="team-two__single-number-box clearfix">
                                    <li class="icon-box"><a href="#"><span class="icon-out-call"></span></a>

                                        <ul class="team-two__single-number-text">
                                            <li>
                                                <p><a href="tel:+2349131655053">+234 913 165 5053</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <!--End Team Two Single-->
                    </div>

                    <div class="swiper-slide">
                        <!--Start Team Two Single-->
                        <div class="team-two__single">
                            <div class="team-two__single-bg"
                                style="background-image: url(assets/img/team/Adetola-Olawale-James-Ag-MD-NIWA.jpg);"></div>
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="assets//img/team/Adetola-Olawale-James-Ag-MD-NIWA.jpg" alt="">
                                    <div class="social-links">
                                        <a href="#" class="fb"><span class="icon-facebook"></span></a>
                                        <a href="#" class="tw"><span class="icon-twitter"></span></a>
                                        <a href="#" class="ins"><span class="icon-instagram"></span></a>
                                        <a href="#" class="lin"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__single-content text-center">
                                <h3><a href="team-details.html">Surv. Olawale J. Adetola</a></h3>
                                <p>GM Business Development & Investment</p>
                            </div>

                            {{-- <div class="team-two__single-number">
                                <ul class="team-two__single-number-box clearfix">
                                    <li class="icon-box"><a href="#"><span class="icon-out-call"></span></a>

                                        <ul class="team-two__single-number-text">
                                            <li>
                                                <p><a href="tel:+2349131655053">+234 913 165 5053</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <!--End Team Two Single-->
                    </div>

                    <div class="swiper-slide">
                        <!--Start Team Two Single-->
                        <div class="team-two__single">
                            <div class="team-two__single-bg"
                                style="background-image: url(assets/img/team/fiberesima-tammy-gm-ports.jpeg);"></div>
                            <div class="team-two__single-img">
                                <div class="inner">
                                    <img src="assets//img/team/fiberesima-tammy-gm-ports.jpeg" alt="">
                                    <div class="social-links">
                                        <a href="#" class="fb"><span class="icon-facebook"></span></a>
                                        <a href="#" class="tw"><span class="icon-twitter"></span></a>
                                        <a href="#" class="ins"><span class="icon-instagram"></span></a>
                                        <a href="#" class="lin"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__single-content text-center">
                                <h3><a href="team-details.html">Engr. Fibersima Tamunokobie</a></h3>
                                <p>GM Area Offices Co-ordination</p>
                            </div>

                            {{-- <div class="team-two__single-number">
                                <ul class="team-two__single-number-box clearfix">
                                    <li class="icon-box"><a href="#"><span class="icon-out-call"></span></a>
                                        <ul class="team-two__single-number-text">
                                            <li>
                                                <p><a href="tel:+2349131655053">+234 913 165 5053</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <!--End Team Two Single-->
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <!-- If we need navigation buttons -->
            <div class="team-two__wrap">
                <div class="swiper-counter">
                    <div id="current4">1</div>
                    <div id="total4"></div>
                </div>
            </div>

            <div class="swiper-nav-style1">
                <div class="swiper-button-prev" id="team-two__swiper-button-next">
                    <i class="icon-left-arrow-5" aria-hidden="true"></i>
                </div>
                <div class="swiper-button-next" id="team-two__swiper-button-prev">
                    <i class="icon-right-arrow-5" aria-hidden="true"></i>
                </div>
            </div>

            {{-- <div class="team-two__bottom">
                <div class="text-box">
                    <p>We’re Experience. Become a team member!</p>
                </div>

                <div class="btn-box">
                    <a class="thm-btn" href="#">
                        <span class="txt">Join Our Team</span> <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div> --}}
        </div>
    </section>
    <!--End Team Two-->

    <!--Start Google Map One-->
    <section class="google-map-one">
        <div class="container clearfix">
            <div class="google-map-one__content clearfix">
                <div class="inner-box">
                    <div class="title-box text-center">
                        <h2>Contact Us</h2>
                    </div>
                    <ul class="accrodion-grp2 google-map__accrodion" data-grp-name="faq-one-accrodion">
                        <!-- Start Google Map Faq Single-->
                        <li class="accrodion active">
                            <div class="accrodion-title">
                                <h2>Kogi State (Area Office) </h2>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <ul class="accrodion-content-list">
                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <p>P.M.B 1022 Marine road, Naval Base, Lokoja.</p>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-paper-plane"></span>
                                            </div>
                                            <p><a href="mailto:yourmail@email.com">Info@example.com</a></p>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-out-call"></span>
                                            </div>
                                            {{-- <p><a href="tel:+2349131655053">+234 913 165 5053</a></p> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- End Google Map Faq Single-->

                        <!-- Start Google Map Faq Single-->
                        <li class="accrodion">
                            <div class="accrodion-title">
                                <h2>Abuja (Liason Office) </h2>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <ul class="accrodion-content-list">
                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <p>Shippers Plaza, off Grand Ibro Hotel Wuse, Zone 5</p>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-paper-plane"></span>
                                            </div>
                                            <p><a href="mailto:yourmail@email.com">Info@example.com</a></p>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-out-call"></span>
                                            </div>
                                            {{-- <p><a href="tel:+2349131655053">+234 913 165 5053</a></p> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- End Google Map Faq Single-->

                        <!-- Start Google Map Faq Single-->
                        <li class="accrodion">
                            <div class="accrodion-title">
                                <h2>Lagos Office</h2>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <ul class="accrodion-content-list">
                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <p>Ferry Terminal Building Outer Marina Road, CMS bus Stop</p>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-paper-plane"></span>
                                            </div>
                                            <p><a href="mailto:yourmail@email.com">Info@example.com</a></p>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-out-call"></span>
                                            </div>
                                            {{-- <p><a href="tel:+2349131655053">+234 913 165 5053</a></p> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- End Google Map Faq Single-->
                    </ul>
                </div>
            </div>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.987126213232!2d6.729090574488685!3d7.791187007136348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104f5e393154a283%3A0x83ba6889b352aacb!2sAdankolo%20Road%20%26%20New%20Layout%20Road%2C%20Lokoja%20260101%2C%20Kogi!5e0!3m2!1sen!2sng!4v1712132375251!5m2!1sen!2sng"
            class="google-map-one__map" allowfullscreen></iframe>
    </section>
    <!--End Google Map One-->

    <!--Start Blog Two-->
    <section class="blog-two">
        <div class="blog-two__pattern" style="background-image: url(assets/img/pattern/blog-v2-pattern.jpg);"></div>
        <div class="container">
            <div class="blog-two__top">
                <div class="sec-title-two">
                    <div class="sub-title">
                        <h5>LATEST POST</h5>
                    </div>
                    <h2>Get the latest news & blog</h2>
                </div>

                <div class="btn-box">
                    <a class="thm-btn" href="blog.html">
                        <span class="txt">View All Post</span> <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div>

            <div class="row">
                <!--Start Blog Two Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-content">
                            <h2><a href="blog-details.html">Advanced Service Functions <br> by Air Transport</a>
                            </h2>
                            <ul class="meta-box">
                                <li><a href="#">Air Freight</a></li>
                                <li>-</li>
                                <li>November 13, 2023</li>
                            </ul>

                            <div class="btn-box">
                                <a href="blog-details.html">Read More <span class="icon-right-arrow-5"></span></a>
                            </div>
                        </div>

                        <div class="blog-two__single-img">
                            <div class="overlay-img">
                                <img src="assets/img/blog/niwa-cards-13.jpg" alt="#">
                            </div>
                            <div class="inner">
                                <img src="assets/img/blog/niwa-cards-14.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->

                <!--Start Blog Two Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-content">
                            <h2><a href="blog-details.html">How technology can help <br> redraw the supply</a></h2>
                            <ul class="meta-box">
                                <li><a href="#">Logistics, Solution</a></li>
                                <li>-</li>
                                <li>March 17, 2023</li>
                            </ul>

                            <div class="btn-box">
                                <a href="blog-details.html">Read More <span class="icon-right-arrow-5"></span></a>
                            </div>
                        </div>

                        <div class="blog-two__single-img">
                            <div class="overlay-img">
                                <img src="assets/img/blog/niwa-cards-11.jpg" alt="#">
                            </div>
                            <div class="inner">
                                <img src="assets/img/blog/niwa-cards-12.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->

                <!--Start Blog Two Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-content">
                            <h2><a href="blog-details.html">Going forward, a new normal <br> that has evolved</a>
                            </h2>
                            <ul class="meta-box">
                                <li><a href="#">Local Shipping</a></li>
                                <li>-</li>
                                <li>April 24, 2023</li>
                            </ul>

                            <div class="btn-box">
                                <a href="blog-details.html">Read More <span class="icon-right-arrow-5"></span></a>
                            </div>
                        </div>

                        <div class="blog-two__single-img">
                            <div class="overlay-img">
                                <img src="assets/img/blog/niwa-cards-15.jpg" alt="#">
                            </div>
                            <div class="inner">
                                <img src="assets/img/blog/niwa-cards-16.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->
            </div>
        </div>
    </section>
    <!--End Blog Two-->

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
    <!--End Cta Two-->
@endsection
