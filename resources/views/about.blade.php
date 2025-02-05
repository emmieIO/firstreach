<x-guest-layout>
    <section class="page-title"
        style="background-image: url({{ asset("dist/front/images/background/page-title.jpg") }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">About Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route("home") }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!-- About Section -->
    <section class="about-section-five">
        <div class="float-image wow zoomInLeft animated animated animated">
            <img alt="Image" data-cfsrc="{{ asset('dist/front/images/resource/float-4.png') }}"
                style="display:none;visibility:hidden;">
            <img src="{{ asset('dist/front/images/resource/float-4.png') }}" alt="Image">
        </div>
        <div class="auto-container">
            <div class="outer-box">
                <div class="float-text">Transport</div>
                <div class="pattern-7 bounce-y"></div>
                <div class="row">

                    <!-- image Column -->
                    <div class="image-column col-lg-5">
                        <div class="inner-column">
                            <div class="image-box">
                                <figure class="image overlay-anim"><img alt="Image"
                                        data-cfsrc="{{asset('dist/front/images/resource/about5-2.jpg')}}"
                                        style="display:none;visibility:hidden;"><img
                                        src="{{asset('dist/front/images/resource/about5-2.jpg')}}" alt="Image"></figure>
                                <figure class="image-2 overlay-anim"><img alt="Image"
                                        data-cfsrc="{{asset("dist/front/images/resource/about5-1.jpg")}}"
                                        style="display:none;visibility:hidden;"><img
                                        src="{{asset("dist/front/images/resource/about5-1.jpg")}}" alt="Image"></figure>
                                <div class="exp-box bounce-y">
                                    <div class="inner">
                                        <figure class="image"><img alt=""
                                                data-cfsrc="{{asset("dist/front/images/resource/exp-1.png")}}"
                                                style="display:none;visibility:hidden;"><img
                                                src="{{asset("dist/front/images/resource/exp-1.png")}}" alt=""></figure>
                                        <i class="icon flaticon-business-030-settings"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 wow fadeInRight">
                        <div class="inner-column">
                            <div class="sec-title style-two">
                                <span class="sub-title">Who we are</span>
                                <h2>Leading global logistic <br />and transport agency</h2>
                                <div class="text">With proven expertise, FirstReach Logistics delivers end-to-end
                                    logistics solutions globally, tailored to
                                    specific industries for seamless and efficient supply chain management.</div>
                            </div>
                            <div class="row">
                                <div class="info-box col-md-5">
                                    <i class="icon flaticon-delivery-man-2"></i>
                                    <h5 class="title">Trusted & Industry-Recognized</h5>
                                </div>
                                <div class="info-box col-md-7">
                                    <i class="icon flaticon-delivery-box-4"></i>
                                    <h5 class="title">Specializing in Medium to Large-Scale Logistics</h5>
                                </div>
                            </div>

                            <ul class="list-style-one">
                                <li><i class="fa fa-solid fa-check"></i> We prioritize the safety and well-being of our
                                    people.</li>
                                <li><i class="fa fa-solid fa-check"></i> Delivering innovative and scalable logistics
                                    solutions worldwide.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About-Section -->
</x-guest-layout>
