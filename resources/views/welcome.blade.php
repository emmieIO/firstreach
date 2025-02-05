<x-guest-layout>
    <!--Banner Section-->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="bg-image"
                    style="background-image: url({{ asset('dist/front/images/main-slider/s1-1.jpg') }});">
                </div>
                <div class="shape-1 animate-2"></div>
                <div class="shape-2"></div>
                <div class="shape-3 animate-3"></div>
                <div class="shape-4 animate-4"></div>
                <div class="pattern-5 bounce-y"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="inner-content">
                            <span class="sub-title animate-2">
                                <span class="inner">Reliable & Innovative Logistics Solutions</span>
                            </span>
                            <h1 class="title animate-3">
                                Global Delivery<br />
                                Simplified & Efficient
                            </h1>
                            <div class="btn-box animate-4">
                                <a href="{{ route("shipment.tracking") }}" class="theme-btn btn-style-two">
                                    <span class="btn-title">Track Shipment<i
                                            class="icon fa fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="bg-image"
                    style="background-image: url({{ asset('dist/front/images/main-slider/s1-1.jpg') }});">
                </div>
                <div class="shape-1 animate-2"></div>
                <div class="shape-2 wow fadeInRight" data-wow-delay="300ms"></div>
                <div class="shape-3 wow fadeInLeft" data-wow-delay="600ms"></div>
                <div class="shape-4 wow fadeInLeft" data-wow-delay="900ms"></div>
                <div class="pattern-5 bounce-y"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="inner-content">
                            <span class="sub-title animate-1">
                                <span class="inner">Delivering Your Promises, Worldwide</span>
                            </span>
                            <h1 class="title animate-2">
                                Precision in Motion<br />
                                Your Logistics, Our Priority
                            </h1>
                            <div class="btn-box animate-3">
                                <a href="{{ route("shipment.tracking") }}" class="theme-btn btn-style-two">
                                    <span class="btn-title">Track Shipment<i
                                            class="icon fa fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="bg-image"
                    style="background-image: url({{ asset('dist/front/images/main-slider/s1-1.jpg') }});">
                </div>
                <div class="shape-1 animate-2"></div>
                <div class="shape-2 wow fadeInRight" data-wow-delay="300ms"></div>
                <div class="shape-3 wow fadeInLeft" data-wow-delay="600ms"></div>
                <div class="shape-4 wow fadeInLeft" data-wow-delay="900ms"></div>
                <div class="pattern-5 bounce-y"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="inner-content">
                            <span class="sub-title animate-1">
                                <span class="inner">Connecting Continents with Care</span>
                            </span>
                            <h1 class="title animate-2">
                                Seamless Shipping<br />
                                Empowering Your Business
                            </h1>
                            <div class="btn-box animate-3">
                                <a href="{{ route("shipment.tracking") }}" class="theme-btn btn-style-two">
                                    <span class="btn-title">Track Shipment<i
                                            class="icon fa fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Banner Section --><!-- Services Section -->
    <section class="services-section" id="service">
        <div class="float-text">Services</div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">What We Do</span>
                <h2 class="words-slide-up text-split">
                    Your Trusted Logistics Partner<br /> Delivering Excellence Worldwide
                </h2>
            </div>

            <div class="carousel-outer">
                <!-- Services Carousel -->
                <div class="services-carousel-three owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('services') }}">
                                        <img alt="" data-cfsrc="{{ asset('dist/front/images/resource/service-1.jpg') }}"
                                            style="display:none;visibility:hidden;">
                                        <img src="{{ asset('dist/front/images/resource/service-1.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="icon-box"><i class="icon flaticon-delivery-truck-4"></i></div>
                            </div>
                            <div class="content-box">
                                <h4 class="title"><a href="{{ route('services') }}">Road Freight</a></h4>
                                <div class="inner">
                                    <div class="text">
                                        Efficient, reliable ground transportation tailored for your business needs.
                                    </div>
                                </div>
                                <a href="{{ route('services') }}" class="read-more">
                                    <i class="icon fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="page-service-details.html">
                                        <img alt="" data-cfsrc="{{ asset('dist/front/images/resource/service-2.jpg') }}"
                                            style="display:none;visibility:hidden;">
                                        <img src="{{ asset('dist/front/images/resource/service-2.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="icon-box"><i class="icon flaticon-airplane-2"></i></div>
                            </div>
                            <div class="content-box">
                                <h4 class="title"><a href="{{ route('services') }}">Air Freight</a></h4>
                                <div class="inner">
                                    <div class="text">
                                        Fast and secure air shipments connecting global markets seamlessly.
                                    </div>
                                </div>
                                <a href="{{ route('services') }}" class="read-more">
                                    <i class="icon fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Block -->
                    <div class="service-block wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('services') }}">
                                        <img alt="" data-cfsrc="{{ asset('dist/front/images/resource/service-3.jpg') }}"
                                            style="display:none;visibility:hidden;">
                                        <img src="{{ asset('dist/front/images/resource/service-3.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="icon-box"><i class="icon flaticon-cargo-boat"></i></div>
                            </div>
                            <div class="content-box">
                                <h4 class="title"><a href="{{ route('services') }}">Sea Freight</a></h4>
                                <div class="inner">
                                    <div class="text">
                                        Comprehensive maritime logistics to ensure safe and timely deliveries.
                                    </div>
                                </div>
                                <a href="{{ route('services') }}" class="read-more">
                                    <i class="icon fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Services Section-->
    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="icon-plane bounce-y"></div>
        <div class="auto-container">
            <div class="row">

                <!-- Image Column -->
                <div class="image-column col-lg-5">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim">
                                <a href="#">
                                    <img alt="About Image"
                                        data-cfsrc="{{ asset('dist/front/images/resource/about1-1.jpg') }}"
                                        style="display:none;visibility:hidden;">
                                    <img src="{{ asset('dist/front/images/resource/about1-1.jpg') }}" alt="About Image">
                                </a>
                            </figure>
                            <figure class="image-2 overlay-anim">
                                <a href="#">
                                    <img alt="About Image 2"
                                        data-cfsrc="{{ asset('dist/front/images/resource/about1-2.jpg') }}"
                                        style="display:none;visibility:hidden;">
                                    <img src="{{ asset('dist/front/images/resource/about1-2.jpg') }}"
                                        alt="About Image 2">
                                </a>
                            </figure>
                            <div class="exp-box">
                                <div class="inner">
                                    <i class="icon flaticon-delivery-box-4"></i>
                                    <div class="content">
                                        <span class="count">25+</span>
                                        <span class="title">Years of Experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 offset-xl-1 wow fadeInRight">
                    <div class="inner-column">
                        <div class="sec-title style-two">
                            <span class="sub-title">Who We Are</span>
                            <h2>Empowering Businesses with Reliable<br/> Global Logistics Solutions</h2>
                            <div class="text">
                                With over two decades of industry expertise, we deliver end-to-end logistics and
                                transport
                                solutions tailored to meet the unique challenges of today’s global market. Our
                                commitment to
                                excellence ensures every shipment is handled with precision and care.
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-md-7">
                                <div class="info-box">
                                    <i class="icon flaticon-delivery-man-2"></i>
                                    <h5 class="title">
                                        Specialized in serving<br />medium to large-scale enterprises
                                    </h5>
                                </div>
                                <div class="info-box">
                                    <i class="icon flaticon-delivery-box-4"></i>
                                    <h5 class="title">
                                        Delivering Excellence for<br />Industry Leaders Worldwide
                                    </h5>
                                </div>
                            </div>
                            <div class="author-box col-md-5">
                                <div class="inner-box">
                                    <div class="author-img">
                                        <img alt="CEO Image"
                                            data-cfsrc="{{ asset('dist/front/images/resource/about1-thumb1.jpg') }}"
                                            style="display:none;visibility:hidden;">
                                        <img src="{{ asset('dist/front/images/resource/about1-thumb1.jpg') }}"
                                            alt="CEO Image">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="name">Brandon Aaron</h6>
                                        <span class="designation">CEO, FirstReach Logistics</span>
                                        <img alt="Signature"
                                            data-cfsrc="{{ asset('dist/front/images/resource/sign.png') }}"
                                            style="display:none;visibility:hidden;">
                                        <img src="{{ asset('dist/front/images/resource/sign.png') }}" alt="Signature">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-style-one">
                            <li><i class="fa fa-solid fa-check"></i> Safety and efficiency are at the core of our
                                operations.</li>
                            <li><i class="fa fa-solid fa-check"></i> Leveraging decades of expertise to drive
                                innovative
                                solutions.</li>
                            <li><i class="fa fa-solid fa-check"></i> We see projects through and proactively develop
                                tailored strategies.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End About Section -->
    <!-- Fun Fact Section -->
    <section class="fun-fact-section"
        style="background-image: url({{ asset('dist/front/images/background/bg-fun-fact-1.jpg') }})">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">

                    <!-- Counter Block -->
                    <div class="counter-block col-lg-4 col-sm-6 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon flaticon-logistics"></i></div>
                            <div class="content-box">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="25">0</span>+
                                </div>
                                <div class="counter-title">Years of Experience</div>
                            </div>
                        </div>
                    </div>

                    <!-- Counter Block -->
                    <div class="counter-block col-lg-4 col-sm-6 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon flaticon-cargo"></i></div>
                            <div class="content-box">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="80">0</span>+
                                </div>
                                <div class="counter-title">Countries Covered</div>
                            </div>
                        </div>
                    </div>

                    <!-- Counter Block -->
                    <div class="counter-block col-lg-4 col-sm-6 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon flaticon-logistics-1"></i></div>
                            <div class="content-box">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="7">0</span>k+
                                </div>
                                <div class="counter-title">Skilled Professionals</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Fact Section --><!-- Fun Fact Section -->
    <section class="features-section">
        <div class="bg bg-image"
            style="background-image: url({{ asset('dist/front/images/background/bg-feature-2.jpg') }});"></div>
        <div class="bg bg-image-2"
            style="background-image: url({{ asset('dist/front/images/background/bg-feature-1.jpg') }});"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-9 col-lg-12">
                    <div class="outer-box">
                        <div class="sec-title style-two light">
                            <span class="sub-title">Our Commitments</span>
                            <h2>Delivering Excellence <br /> With Every Shipment</h2>
                        </div>
                        <div class="row g-0">

                            <!-- Feature Block -->
                            <div class="feature-block col-sm-6">
                                <div class="inner-box">
                                    <div class="bg-pattern-1"></div>
                                    <div class="icon-box"><i class="icon flaticon-maps"></i></div>
                                    <h4 class="title"><a href="page-about.html">Streamlined Order Management</a>
                                    </h4>
                                    <div class="text">
                                        Our dedicated systems ensure every order is processed seamlessly and
                                        efficiently.
                                    </div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-sm-6">
                                <div class="inner-box">
                                    <div class="bg-pattern-1"></div>
                                    <div class="icon-box"><i class="icon flaticon-logistics-9"></i></div>
                                    <h4 class="title"><a href="page-about.html">On-Time Delivery</a></h4>
                                    <div class="text">
                                        Leveraging cutting-edge tracking and routing technology to guarantee
                                        punctual
                                        deliveries.
                                    </div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-sm-6">
                                <div class="inner-box">
                                    <div class="bg-pattern-1"></div>
                                    <div class="icon-box"><i class="icon flaticon-delivery-8"></i></div>
                                    <h4 class="title"><a href="page-about.html">Distribution & Fulfillment</a></h4>
                                    <div class="text">
                                        Integrated logistics solutions that optimize distribution and ensure prompt
                                        fulfillment.
                                    </div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-sm-6">
                                <div class="inner-box">
                                    <div class="bg-pattern-1"></div>
                                    <div class="icon-box"><i class="icon flaticon-24-hours-3"></i></div>
                                    <h4 class="title"><a href="page-about.html">Custom Brokerage</a></h4>
                                    <div class="text">
                                        Expert handling of customs clearance for smooth and hassle-free
                                        international
                                        shipments.
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-box col-lg-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image mb-0">
                                            <img alt="Feature Image 1"
                                                data-cfsrc="{{ asset('dist/front/images/resource/feature1-1.jpg') }}"
                                                style="display:none;visibility:hidden;">
                                            <img src="{{ asset('dist/front/images/resource/feature1-1.jpg') }}"
                                                alt="Feature Image 1">
                                        </figure>
                                        <figure class="image mb-0">
                                            <img alt="Feature Image 2"
                                                data-cfsrc="{{ asset('dist/front/images/resource/feature1-2.jpg') }}"
                                                style="display:none;visibility:hidden;">
                                            <img src="{{ asset('dist/front/images/resource/feature1-2.jpg') }}"
                                                alt="Feature Image 2">
                                        </figure>
                                        <figure class="image mb-0">
                                            <img alt="Feature Image 3"
                                                data-cfsrc="{{ asset('dist/front/images/resource/feature1-3.jpg') }}"
                                                style="display:none;visibility:hidden;">
                                            <img src="{{ asset('dist/front/images/resource/feature1-3.jpg') }}"
                                                alt="Feature Image 3">
                                        </figure>
                                    </div>
                                    <div class="text"><span>29,000+</span> satisfied customers trust our services
                                    </div>
                                    <a href="page-about.html" class="btn-feature-style">Learn More <i
                                            class="fa fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fun Fact Section --><!-- About Section Two -->
    <section class="about-section-two">
        <div class="pattern-1"></div>
        <div class="auto-container">
            <div class="outer-box">
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                        <div class="inner-column">
                            <div class="sec-title style-two">
                                <span class="sub-title">Our Legacy</span>
                                <h2>Every Decision Matters <br />Every Mile Counts</h2>
                            </div>
                            <div class="row g-0">
                                <!-- About Block -->
                                <div class="about-block col-md-6">
                                    <div class="inner-box">
                                        <i class="icon flaticon-delivery-truck-4"></i>
                                        <div class="content">
                                            <h5 class="title">
                                                <a href="page-about.html">Safe & Secure Delivery</a>
                                            </h5>
                                            <div class="text">
                                                With decades of expertise, we ensure your cargo reaches its
                                                destination
                                                securely.
                                            </div>
                                        </div>
                                        <div class="image-box">
                                            <figure class="image mb-0">
                                                <a href="page-about.html">
                                                    <img alt="Safe Delivery"
                                                        data-cfsrc="{{ asset('dist/front/images/resource/about2-1.jpg') }}"
                                                        style="display:none;visibility:hidden;">
                                                    <img src="{{ asset('dist/front/images/resource/about2-1.jpg') }}"
                                                        alt="Safe Delivery">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <!-- About Block -->
                                <div class="about-block style-two col-md-6">
                                    <div class="inner-box mb-0">
                                        <i class="icon flaticon-global-2"></i>
                                        <div class="content">
                                            <h5 class="title">
                                                <a href="page-about.html">Global Expertise</a>
                                            </h5>
                                            <div class="text">
                                                Our extensive international network guarantees efficient
                                                cross-border
                                                logistics.
                                            </div>
                                        </div>
                                        <div class="image-box">
                                            <figure class="image mb-0">
                                                <a href="page-about.html">
                                                    <img alt="Global Expertise"
                                                        data-cfsrc="{{ asset('dist/front/images/resource/about2-2.jpg') }}"
                                                        style="display:none;visibility:hidden;">
                                                    <img src="{{ asset('dist/front/images/resource/about2-2.jpg') }}"
                                                        alt="Global Expertise">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skills Column -->
                    <div class="skills-column col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1 wow fadeInRight"
                        data-wow-delay="300ms">
                        <div class="inner-column">
                            <ul class="list-style-one">
                                <li>
                                    <i class="fa fa-solid fa-arrow-right"></i>
                                    Visionary approach to modern shipping solutions.
                                </li>
                                <li>
                                    <i class="fa fa-solid fa-arrow-right"></i>
                                    Proven expertise built on decades of excellence.
                                </li>
                                <li>
                                    <i class="fa fa-solid fa-arrow-right"></i>
                                    Innovative strategies driving tomorrow’s logistics.
                                </li>
                            </ul>
                            <!-- Skills -->
                            <div class="skills">
                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <div class="skill-title">Shipping Efficiency</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="80">
                                                <div class="skill-percentage">
                                                    <div class="count-box">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="80">0</span>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <div class="skill-title">Management Excellence</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="90">
                                                <div class="skill-percentage">
                                                    <div class="count-box">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="90">0</span>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Call Information -->
                            <div class="call-info-box">
                                <a href="tel:+1234567890" class="info-btn">
                                    <i class="icon fa fa-phone"></i>
                                    <small>Call for Free</small><br />
                                    +1 (234) 567-890
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End About Section --><!-- Project Section -->
    <section class="project-section" id="project">
        <div class="bg bg-image"
            style="background-image: url({{ asset('dist/front/images/background/bg-project-2.jpg') }});"></div>
        <div class="auto-container">
            <div class="sec-title style-two">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="sub-title">Our Commitment to Excellence</span>
                        <h2>Delivering Seamless Logistics <br />With Unmatched Expertise</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="text">
                            With a proven track record in global logistics, we provide tailored, end-to-end shipping
                            solutions
                            that ensure reliability, speed, and precision. From small parcels to large-scale
                            freight, our
                            expertise guarantees smooth and secure deliveries, keeping businesses connected
                            worldwide.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Project Section --><!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonial">
        <div class="pattern-2 bounce-y"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Testimonials</span>
                <h2>What Our Clients Say<br />About Us</h2>
            </div>
            <div class="carousel-outer">
                <!-- Testimonial Carousel -->
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon icon-quote"></span>
                            </div>
                            <h5 class="name">Outstanding Service</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text">
                                "FirstReach Logistics has transformed our supply chain with their efficient, timely, and
                                reliable delivery solutions. Their dedication to excellence is truly unmatched."
                            </div>
                        </div>
                        <div class="founder-info">

                            <div class="content">
                                <h5 class="name"><a href="#">Sarah Thompson</a></h5>
                                <span class="designation">COO, TransGlobal Inc.</span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon icon-quote"></span>
                            </div>
                            <h5 class="name">Reliable & Efficient</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text">
                                "Their team is proactive and solution-driven. We trust FirstReach Logistics to manage
                                our
                                shipments from start to finish, every time."
                            </div>
                        </div>
                        <div class="founder-info">
                            <div class="content">
                                <h5 class="name"><a href="#">Michael Reed</a></h5>
                                <span class="designation">Logistics Manager, FreightCorp</span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon icon-quote"></span>
                            </div>
                            <h5 class="name">Exceptional Quality</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="text">
                                "Our international shipping has never been smoother. The expert guidance and timely
                                updates
                                provided by FirstReach Logistics gives us peace of mind with every delivery."
                            </div>
                        </div>
                        <div class="founder-info">

                            <div class="content">
                                <h5 class="name"><a href="#">Jonathan Kyrian</a></h5>
                                <span class="designation">Founder, E-Com Solutions</span>
                            </div>
                        </div>
                    </div>
                    <!-- Additional Testimonial Blocks can be added similarly -->
                </div>
            </div>
        </div>
    </section>

    <!-- End Testimonials Section--><!-- Contact Section-->
    <section class="contact-section" id="contact">
        <div class="float-image bounce-x"><img alt="Image" src="images/background/bg-contact1.png"></div>
        <div class="pattern-3 bounce-y"></div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-5 wow fadeInRight animated">
                    <div class="inner-column">
                        <div class="sec-title style-two light">
                            <span class="sub-title">Our Vision & Core Values</span>
                            <h2>Redefining Logistics <br />Through Innovation & Trust</h2>
                        </div>

                        <div class="info-box">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="icon flaticon-global"></i>
                                </div>
                                <h6 class="title"><a href="page-service-details.html">Global Reach, Local
                                        Expertise</a></h6>

                                <div class="icon-box-arrow">
                                    <a href="page-service-details.html"><i class="icon fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="icon flaticon-box-1"></i>
                                </div>
                                <h6 class="title"><a href="page-service-details.html">Reliable & Timely
                                        Deliveries</a></h6>
                                <div class="icon-box-arrow">
                                    <a href="page-service-details.html"><i class="icon fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="inner-box mb-0">
                                <div class="icon-box">
                                    <i class="icon flaticon-boxes"></i>
                                </div>
                                <h6 class="title"><a href="page-service-details.html">Customer-First Approach</a>
                                </h6>
                                <div class="icon-box-arrow">
                                    <a href="page-service-details.html"><i class="icon fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-xl-6 col-lg-7 offset-xl-1">
                    <div class="inner-column">
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <h4 class="title">Request a Quote</h4>
                            {{-- session message --}}
                            @if (session('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form method="post" action="{{route('contact.store')}}" id="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                        @error("name")
                                            <small class="fs-sm text-white">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                        @error("phone")
                                            <small class="fs-sm text-white">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="email" placeholder="Email" required>
                                        @error("email")
                                            <small class="fs-sm text-white">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" class="form-control required" rows="7"
                                            placeholder="Describe Shipment here"></textarea>
                                        @error("message")
                                            <small class="fs-sm text-danger">{{$message}}</small>
                                        @enderror
                                        <small class="fs-sm text-light"><strong>Note:</strong> Please provide a detailed
                                            description of your shipment to help us
                                            serve you better.</small>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one hvr-light" type="submit"
                                            name="submit-form">
                                            <span class="btn-title">Submit Request <i
                                                    class="icon fa fa-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Contact Section-->
    <!-- News Section -->
    <section class="news-section pb-0" id="news">
        <div class="pattern-4 bounce-y"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Blog Posts</span>
                <h2>Latest Updates from Our Blog</h2>
            </div>
            <div class="row">

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="news-details.html">
                                    <img alt="Industry News"
                                        data-cfsrc="{{ asset('dist/front/images/resource/news-1.jpg') }}"
                                        style="display:none;visibility:hidden;">
                                    <img src="{{ asset('dist/front/images/resource/news-1.jpg') }}" alt="Industry News">
                                </a>
                            </figure>
                            <span class="date"> <strong>25 <span>Jun</span> </strong> </span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fas fa-user"></i>Admin</li>
                                <li><i class="fas fa-comments"></i>0 Comments</li>
                            </ul>
                            <h4 class="title"><a href="">Pioneering a Greener Future in
                                    Logistics</a></h4>
                            <a class="read-more" href="">Read More <i class="icon fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="">
                                    <img alt="Shipping Insights"
                                        data-cfsrc="{{ asset('dist/front/images/resource/news-2.jpg') }}"
                                        style="display:none;visibility:hidden;">
                                    <img src="{{ asset('dist/front/images/resource/news-2.jpg') }}"
                                        alt="Shipping Insights">
                                </a>
                            </figure>
                            <span class="date"> <strong>25 <span>Jun</span> </strong> </span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fas fa-user"></i>Admin</li>
                                <li><i class="fas fa-comments"></i>0 Comments</li>
                            </ul>
                            <h4 class="title"><a href="">Advancing Efficiency in Global
                                    Shipping</a></h4>
                            <a class="read-more" href="">Read More <i class="icon fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box mb-0">
                        <div class="image-box">
                            <figure class="image">
                                <a href="news-details.html">
                                    <img alt="Freight Updates"
                                        data-cfsrc="{{ asset('dist/front/images/resource/news-3.jpg') }}"
                                        style="display:none;visibility:hidden;">
                                    <img src="{{ asset('dist/front/images/resource/news-3.jpg') }}"
                                        alt="Freight Updates">
                                </a>
                            </figure>
                            <span class="date"> <strong>25 <span>Jun</span> </strong> </span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fas fa-user"></i>Admin</li>
                                <li><i class="fas fa-comments"></i>0 Comments</li>
                            </ul>
                            <h4 class="title"><a href="">Transforming Logistics with Innovation</a>
                            </h4>
                            <a class="read-more" href="">Read More <i class="icon fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-guest-layout>
