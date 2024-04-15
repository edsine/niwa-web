@extends('layouts.app')

@section('content')

        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/img/background/niwa-cards-16.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner text-center">
                    <h2>Our Services</h2>
                    <ul class="thm-breadcrumb">
                    <li><a href="{{route('/')}}">Home</a></li>
                        <li><span class="icon-right-arrow-5"></span></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Services Three-->
        <section class="services-three services-three--services">
            <div class="container">
                <div class="services-three--services__top">
                    <div class="title-box">
                    <h2>We Provide all Kinds of <br>Services Related to Transportation by Water</h2>
                    </div>

                    <div class="text-box">
                       
                    </div>
                </div>

                <div class="row">
                    <!--Start Services Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
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
                                        <a href="road-transport.html">Read More <i class="icon-right-arrow-5"></i></a>

                                        <div class="number-box">
                                            01
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Three Single-->

                    <!--Start Services Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
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
                                        <a href="road-transport.html">Read More <i class="icon-right-arrow-5"></i></a>

                                        <div class="number-box">
                                            02
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Three Single-->

                    <!--Start Services Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
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
                                        <a href="road-transport.html">Read More <i class="icon-right-arrow-5"></i></a>

                                        <div class="number-box">
                                            03
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Three Single-->

                    <!--Start Services Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-three__single">
                            <div class="services-three__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-8.jpg" alt="">
                                    <div class="icon-box">
                                        <span class="icon-air-transport"></span>
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
                                        <a href="road-transport.html">Read More <i class="icon-right-arrow-5"></i></a>

                                        <div class="number-box">
                                            04
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Three Single-->

                    <!--Start Services Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-three__single">
                            <div class="services-three__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-5.jpg" alt="">
                                    <div class="icon-box">
                                        <span class="icon-airplane"></span>
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
                                        <a href="road-transport.html">Read More <i class="icon-right-arrow-5"></i></a>

                                        <div class="number-box">
                                            05
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Three Single-->

                    <!--Start Services Three Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-three__single">
                            <div class="services-three__single-img">
                                <div class="inner">
                                    <img src="assets/img/service/niwa-cards-7.jpg" alt="">
                                    <div class="icon-box">
                                        <span class="icon-warehousing"></span>
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
                                        <a href="road-transport.html">Read More <i class="icon-right-arrow-5"></i></a>

                                        <div class="number-box">
                                            06
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Three Single-->
                </div>
            </div>
        </section>
        <!--End Services Three-->

        <!--Start Work process Two-->
        <section class="work-process-two">
            <div class="work-process-two__bg"
                style="background-image: url(assets/img/background/niwa-cards-18.jpg);"></div>
            <div class="container">
                <div class="sec-title-style3 text-center">
                    <div class="sub-title center">
                        <div class="icon">
                            <img src="assets/img/icon/title-marker.png" alt="">
                        </div>
                        <h5>work process</h5>
                    </div>
                    <h2>Features of the ERIS </h2>
                </div>
                <div class="row">
                    <!--Start Work process Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
                            <div class="shape1"><img src="assets/img/shape/work-process-v2-shape1.png" alt=""></div>
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-enter-product-details"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 1 </h3>
                                <h2><a href="#">For Login </a></h2>
                                <p>Application now simplified in four easy steps. Also allows multiple vessel registration with one user account. 4 easy steps that are most important components and features.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->

                    <!--Start Work process Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
                            <div class="shape1"><img src="assets/img/shape/work-process-v2-shape1.png" alt=""></div>
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-pay-your-service-tag"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 2 </h3>
                                <h2><a href="#">For new registration</a></h2>
                                <p> goto "applications" in your account and start a new application. Note that you will be charge an application fee. This fee does not include your license, inspection and/or certificate fee.
.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->

                     <!--Start Work process Two Single-->
                     <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
           +
                            <div class="shape1"><img src="assets/img/shape/work-process-v2-shape1.png" alt=""></div>
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-pay-your-service-tag"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 3 </h3>
                                <h2><a href="#">Payment</a></h2>
                                <p>
Make payment via available options. On succcesful payment, logon to your account to see regenerated application form.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->

                     <!--Start Work process Two Single-->
                     <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
                            <div class="shape1"><img src="assets/img/shape/work-process-v2-shape1.png" alt=""></div>
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-pay-your-service-tag"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 4 </h3>
                                <h2><a href="#">Pay Your Service Tag</a></h2>
                                <p>
Complete the application and submit. You will receive an acknowledgement email/sms. Another email/sms notification stating inspection date and venue. This may take up to 2 working days.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->
                     <!--Start Work process Two Single-->
                     <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
                            <div class="shape1"><img src="assets/img/shape/work-process-v2-shape1.png" alt=""></div>
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-pay-your-service-tag"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 5 </h3>
                                <h2><a href="#">Pay Your Service Tag</a></h2>
                                <p>Once you place your order via mail or fax our field staff will collect the documents
                                    and consignments from.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->

                    <!--Start Work process Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-road-transport t5"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 6 </h3>
                                <h2><a href="#">Ready To Go Your Goods</a></h2>
                                <p>Once you place your order via mail or fax our field staff will collect the documents
                                    and consignments from.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->
                </div>
            </div>
        </section>
        <!--End Work process Two-->

       
        

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