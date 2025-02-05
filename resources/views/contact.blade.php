<x-guest-layout>
    <!-- Start main-content -->
    <section class="page-title"
        style="background-image: url({{ asset('dist/front/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route("home") }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Contact Details Start-->
    <section class="contact-details">
        <div class="container pb-70">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Feel free to write</h2>
                        {{-- display session message --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="{{route('contact.store')}}"
                        method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name">
                                    @error("name")
                                        <small class="fs-sm text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="email" class="form-control required email" type="email"
                                        placeholder="Enter Email">
                                    @error("email")
                                        <small class="fs-sm text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="subject" class="form-control required" type="text"
                                        placeholder="Enter Subject">
                                    @error("subject")
                                        <small class="fs-sm text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                    @error("phone")
                                        <small class="fs-sm text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control required" rows="7"
                                placeholder="Enter Message"></textarea>
                            @error("message")
                                <small class="fs-sm text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <button type="submit" class="theme-btn btn-style-one"
                                data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                            <button type="reset" class="theme-btn btn-style-one ml-25"><span
                                    class="btn-title">Reset</span></button>
                        </div>
                    </form>
                    <!-- Contact Form Validation-->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">FirstReach Logistics is your trusted partner for seamless shipping
                                solutions. Contact us today for inquiries, support,
                                or partnership opportunities. Reliable delivery, always on time.</div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6 style="font-size: .8rem;" class="mb-1">Have any question?</h6>
                                    <a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Write email</h6>
                                    <a href="mailto:support@firstreachlogistics.com"><span style="font-size: .8rem;"
                                            class="__cf_email__">support@firstreachlogistics.com</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Visit anytime</h6>
                                    <span class="fs-sm" style="font-size: .8rem;">1300-1398 67th St
                                        1300-1398 67th St, Brooklyn, NY 11219</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->

    <!-- Map Section-->
    <section class="map-section py-0">
        <iframe <iframe class="w-100 map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.258947111985!2d-74.00625112256836!3d40.62417097980968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2453eb3391caf%3A0xb649e97142f5f4de!2s1300-1398%2067th%20St%2C%20Brooklyn%2C%20NY%2011219!5e0!3m2!1sen!2sus!4v1738704822859!5m2!1sen!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--End Map Section-->
</x-guest-layout>
