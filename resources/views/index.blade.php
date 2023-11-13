@extends('includes.main')

@section('content')

    <header class="main-header header-style-one">
        <!-- Header Top -->
        <div class="header-top">
            <div class="inner-container">

                <div class="top-left">
                    <!-- Info List -->
                    <ul class="list-style-one">
                        <li><i class="fa fa-envelope"></i> <a
                                href="mailto:{{config('app.emails.info')}}">{{config('app.emails.info')}}</a></li>
                        <li><i class="fa fa-map-marker"></i> Achrafieh, Beirut, Lebanon</li>
                    </ul>
                </div>

                <div class="top-right">
                    <ul class="useful-links">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                        <li><a href="{{config('app.links.insta')}}"><span
                                    class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top -->

        <div class="header-lower">
            <!-- Main box -->
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="{{route('index')}}">
                            <img src="{{asset('frontend/images/Tagit-logo.png')}}" alt="tagit" title="tagit"></a>
                    </div>
                </div>


                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation">
                            <li><a href="#slider-header">Home Page</a></li>
                            <li><a href="#services-section">Our Services</a></li>
                            <li><a href="#about-section">About Us</a></li>
                            <li><a href="#why-choose-us">Why Choose Us</a></li>
                            <li><a href="#projects-section">Our Projects</a></li>
                            <li><a href="#contact-section">Contact Us</a></li>
                        </ul>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="outer-box">
                    <!-- Header Search -->
{{--                    <button class="ui-btn ui-btn search-btn">--}}
{{--                        <span class="icon lnr lnr-icon-search"></span>--}}
{{--                    </button>--}}

                    <a href="tel:{{config('app.phones.main')}}" class="info-btn">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <small>Call Anytime</small>
                        {{config('app.phones.main')}}
                    </a>
                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="{{route('index')}}"><img src="{{asset('frontend/images/logo-loading.png')}}"
                                                                    alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>

                <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
                <ul class="contact-list-one">
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Call Now</span>
                            <a href="tel:{{config('app.phones.main')}}">{{config('app.phones.main')}}</a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title">Send Email</span>
                            <a href="mailto:{{config('app.emails.info')}}">info@tagit-global.com</a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-clock"></span>
                            <span class="title">Working Hours</span>
                            Sun - Thu 8:00 - 5:00, Saturday/Friday - CLOSED
                        </div>
                    </li>
                </ul>


                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://instagram.com/tagit_sa?igshid=MzRlODBiNWFlZA=="><i
                                class="fab fa-instagram"></i></a></li>
                </ul>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            <button class="close-search"><span class="fa fa-times"></span></button>

            <div class="search-inner">
                <form method="post" action="{{route('index')}}">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo">
                        <a href="{{route('index')}}" title=""><img src="{{asset('frontend/images/Tagit-logo.png')}}" alt=""
                                                           title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!--Main Slider-->
    <section id="slider-header" class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-index="rs-1" data-transition="zoomout">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('frontend/images/main-slider/cover photo.webp')}}" alt="" class="rev-slidebg">
                        <img src="{{asset('frontend/images/main-slider/cover photo.webp')}}" alt="" class="rev-slidebg">


                        <div class="tp-caption"
                             data-paddingbottom="[15,15,15,15]"
                             data-paddingleft="[15,15,15,15]"
                             data-paddingright="[15,15,15,15]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text" data-height="none"
                             data-width="['900','900','750','450']"
                             data-whitespace="normal"
                             data-hoffset="['0','0','0','0']"
                             data-voffset="['5','20','20','0']"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
{{--                            <h1>Digital <span class="selected">agency</span> <br>for your business</h1>--}}
                            <h1>Digital <span >agency</span> <br>for your business</h1>
                        </div>

                        <!--Discover More Button Commented Out--
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text" data-height="none"
                            data-width="['700','750','700','450']"
                            data-whitespace="normal"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['180','180','180','120']"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <a href="page-about.html" class="theme-btn btn-style-one hover-light"><span class="btn-title">Discover More</span></a>
                        </div>
                        !---->
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Main Slider-->

    <!-- Services Section -->
    <section id="services-section" class="services-section">
        <div class="bg-shape"></div>
        <div class="bg bg-pattern-1"></div>

        <div class="auto-container">
            <div class="sec-title light">
                <div class="row">
                    <div class="col-lg-7">
                        <span class="sub-title">our services</span>
                        <h2>Explore what services <br>we’re offering</h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="text">
                            Expertise Meets Excellence. Elevating Your Brand with Precision Web Development, Strategic Digital Marketing, SEO Mastery, and Engaging Content Crafting – Your Success, Our Priority.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/web-services.webp')}}"
                                                       alt=""></figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-web-development"></i>
                            <h5 class="title">Website <br>development</h5>
                        </div>
                        <div class="hover-content">
                            <i class="icon flaticon-web-development"></i>
                            <h5 class="title"><a href="#">Website <br>Development</a></h5>
                            <div class="text">Expert web development services for stunning websites tailored to your needs.</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/graphic-design.webp')}}"
                                                       alt=""></figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-design"></i>
                            <h5 class="title">Graphic <br>Designing</h5>
                        </div>
                        <div class="hover-content">
                            <i class="icon flaticon-design"></i>
                            <h5 class="title"><a href="#">Graphic <br>Designing</a></h5>
                            <div class="text">
                                Professional graphic design services for your business.</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/digital-marketing.webp')}}"
                                                       alt=""></figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-megaphone"></i>
                            <h5 class="title">Digital <br>marketing</h5>
                        </div>
                        <div class="hover-content">
                            <i class="icon flaticon-megaphone"></i>
                            <h5 class="title"><a href="#">Digital <br>marketing</a></h5>
                            <div class="text">Strategic digital marketing solutions drive growth and visibility for your brand.</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend/images/resource/content.webp')}}"
                                                       alt=""></figure>
                        </div>
                        <div class="content-box">
                            <i class="icon flaticon-visitor"></i>
                            <h5 class="title">SEO & Content <br>Writing</h5>
                        </div>
                        <div class="hover-content">
                            <i class="icon flaticon-visitor"></i>
                            <h5 class="title"><a href="#">SEO & Content <br>Writing</a></h5>
                            <div class="text">SEO and content writing for improved online visibility and engagement.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End services-section -->

    <!-- About Section -->
    <section id="about-section" class="about-section pt-0 mb-4">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">get to know us</span>
                            <h2>The best digital marketing solutions</h2>
                            <div class="text">We are ahead of our times, floating on the
                                surface of your dreams and making you exceed
                                your expectation in terms of creativity. Our
                                marketing tools drive you forward and develop
                                your approach according to an upscaled
                                strategy straight from 2030.
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="info-box">
                            <div class="inner">
                                <i class="icon fa-solid fa-eye"></i>
                                <h5 class="title">VISION</h5>
                                <div class="text">
                                    Elevating Saudi Arabia through cutting-edge advertising, creative marketing, and sophisticated design with innovative digital techniques and rapid execution.
                                </div>
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="inner">
                                <i class="icon fa-solid fa-wand-magic-sparkles"></i>
                                <h5 class="title">VALUES</h5>
                                <div class="text">
                                    Our passion inspires excellence, innovation, and success for projects and entrepreneurs, generating excitement and nurturing ideas.
                                </div>
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="inner">
                                <i class="icon fa-solid fa-bullseye"></i>
                                <h5 class="title">MISSION</h5>
                                <div class="text">
                                    Powering creativity and global impact through memorable Saudi campaigns and innovative solutions with ideas and technology.
                                </div>
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="info-box">
                            <div class="inner">
                                <i class="icon fa-solid fa-lightbulb-on"></i>
                                <h5 class="title">OURGOAL</h5>
                                <div class="text">
                                    Uplifting marketing and design standards, fostering partner success, and pioneering new digital techniques for continuous excellence.
                                </div>
                            </div>
                        </div>

{{--                        <div class="other-info">--}}
{{--                            <div class="author-info">--}}
{{--                                <div class="inner">--}}
{{--                                    --}}{{--                                        <figure class="thumb"><img src="{{asset('frontend/images/resource/avatar.jp')}}" alt=""></figure>--}}
{{--                                    <h5 class="name">Hadeel Al Essa</h5>--}}
{{--                                    <span class="designation">CEO & CO Founder</span> <br>--}}
{{--                                    <span class="designation">6 Years of Experience</span>--}}
{{--                                </div>--}}
{{--                                <div class="inner">--}}
{{--                                    --}}{{--                                        <figure class="thumb"><img src="{{asset('frontend/images/resource/avatar.jp')}}" alt=""></figure>--}}
{{--                                    <h5 class="name">Hadeel Al Essa</h5>--}}
{{--                                    <span class="designation">CEO & CO Founder</span> <br>--}}
{{--                                    <span class="designation">6 Years of Experience</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            --}}
{{--                            --}}{{--                                <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                    <div class="image-box">
                        <span class="icon-dots bounce-y"></span>
                        <span class="icon-circle zoom-one"></span>
                        <figure class="image-1 wow fadeIn"><img src="{{asset('frontend/images/resource/about-1.webp')}}"
                                                                alt=""></figure>
                        <figure class="image-2 wow fadeIn" data-wow-delay="600ms"><img
                                src="{{asset('frontend/images/resource/about-2.webp')}}" alt=""></figure>
                        <div class="exp-box">
                            <div class="inner">
                                <i class="icon flaticon-promotion"></i>
                                <span class="count">9+</span>
                                <div class="text">Work Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Marquee Section -->
    <div id="marquee-section" class="marquee-section">
        <div class="marquee">
            <div class="marquee-group">
                <div class="text">*Transofrm ideas into reality</div>
                <div class="text">*INSPIRED WITH CREATIVITY</div>
                <div class="text">*Design & development craft</div>
                <div class="text">*unlock the potential</div>
                <div class="text">*Transofrm ideas into reality</div>
            </div>

            <div aria-hidden="true" class="marquee-group">
                <div class="text">*Transofrm ideas into reality</div>
                <div class="text">*INSPIRED WITH CREATIVITY</div>
                <div class="text">*Design & development craft</div>
                <div class="text">*unlock the potential</div>
                <div class="text">*Transofrm ideas into reality</div>
            </div>
        </div>
    </div>
    <!-- End Marquee Section -->

    <!-- Call To Action -->
    <section id="call-to-action" class="call-to-action">
        {{-- here --}}
        <div class="bg bg-image" style="background-image: url(frontend/images/background/bg.webp)"></div>
        <div class="auto-container">
            <div class="outer-box wow fadeIn">
                <!--<figure class="small-image"><img src="{{asset('frontend/images/resource/img.jp')}}" alt=""></figure>!-->
                <h2 class="title">Better digital marketing <span class="selected">solution</span> <br>and services at
                    your <br>fingertips</h2>
                <a href="#contact-section" class="theme-btn btn-style-one light"><span
                        class="btn-title">Contact Us</span></a>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- FAQ Section -->
{{--    <section class="faqs-section">--}}
{{--        <div class="auto-container">--}}
{{--            <div class="sec-title text-center">--}}
{{--                <span class="sub-title">frequently asked questions</span>--}}
{{--                <h2>Agency is building a top<br> business sectors</h2>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <!-- Content Column -->--}}
{{--                <div class="content-column col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="inner-column">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="image-box">--}}
{{--                                    <figure class="image overlay-anim"><img--}}
{{--                                            src="{{asset('frontend/images/resource/faq.jpg')}}" alt=""></figure>--}}
{{--                                    <div class="exp-box">--}}
{{--                                        <span class="count">26</span>--}}
{{--                                        <h4 class="title">Years <br>Experience</h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <!-- Faq Block -->--}}
{{--                                <div class="faq-block">--}}
{{--                                    <div class="inner-box">--}}
{{--                                        <div class="title-box">--}}
{{--                                            <i class="icon fa fa-long-arrow-alt-right"></i>--}}
{{--                                            <h6 class="title">High Quality Services</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="text">Lorem ipsum is simply free text dol sit amet, passage of.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- Faq Block -->--}}
{{--                                <div class="faq-block">--}}
{{--                                    <div class="inner-box">--}}
{{--                                        <div class="title-box">--}}
{{--                                            <i class="icon fa fa-long-arrow-alt-right"></i>--}}
{{--                                            <h6 class="title">Perfect Business Solution</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="text">Lorem ipsum is simply free text dol sit amet, passage of.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- Faq Block -->--}}
{{--                                <div class="faq-block">--}}
{{--                                    <div class="inner-box">--}}
{{--                                        <div class="title-box">--}}
{{--                                            <i class="icon fa fa-long-arrow-alt-right"></i>--}}
{{--                                            <h6 class="title">Commited to Deliver</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="text">Lorem ipsum is simply free text dol sit amet, passage of.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- FAQ Column -->--}}
{{--                <div class="faq-column col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="inner-column">--}}

{{--                        <ul class="accordion-box wow fadeInRight">--}}
{{--                            <!--Block-->--}}
{{--                            <li class="accordion block">--}}
{{--                                <div class="acc-btn">What does your process look like?--}}
{{--                                    <div class="icon fa fa-plus"></div>--}}
{{--                                </div>--}}
{{--                                <div class="acc-content">--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="text">There are many variations of passages the majority have--}}
{{--                                            suffered alteration in some fo injected humour, or randomised words--}}
{{--                                            believable.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!--Block-->--}}
{{--                            <li class="accordion block active-block">--}}
{{--                                <div class="acc-btn active">Learn how we create unmatched solutions--}}
{{--                                    <div class="icon fa fa-plus"></div>--}}
{{--                                </div>--}}
{{--                                <div class="acc-content current">--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="text">There are many variations of passages the majority have--}}
{{--                                            suffered alteration in some fo injected humour, or randomised words--}}
{{--                                            believable.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!--Block-->--}}
{{--                            <li class="accordion block">--}}
{{--                                <div class="acc-btn">How long do services take to complete?--}}
{{--                                    <div class="icon fa fa-plus"></div>--}}
{{--                                </div>--}}
{{--                                <div class="acc-content">--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="text">There are many variations of passages the majority have--}}
{{--                                            suffered alteration in some fo injected humour, or randomised words--}}
{{--                                            believable.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!--Block-->--}}
{{--                            <li class="accordion block">--}}
{{--                                <div class="acc-btn">How can i find my financial record?--}}
{{--                                    <div class="icon fa fa-plus"></div>--}}
{{--                                </div>--}}
{{--                                <div class="acc-content">--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="text">There are many variations of passages the majority have--}}
{{--                                            suffered alteration in some fo injected humour, or randomised words--}}
{{--                                            believable.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--End FAQ Section -->

    <!-- Testimonial Section --
        <section class="testimonial-section">
            <div class="bg bg-pattern-7"></div>
            <div class="auto-container">
                <div class="row">
                    !-- Title Column --
                    <div class="title-column col-lg-6 col-md-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">our testimonials</span>
                                <h2>What they’re talking about agency?</h2>
                            </div>
                            <div class="info-box">
                                <i class="icon flaticon-recommend"></i>
                                <div class="text">We’re trusted by more then<br> 3800 satisfied & happy customers</div>
                            </div>
                        </div>
                    </div>

                    !-- Testimonial Column --
                    <div class="testimonial-column col-lg-6 col-md-12">
                        <div class="inner-column">
                            <div class="testimonial-carousel owl-carousel default-navs">
                                !-- Testimonial Block --
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.</div>
                                        </div>
                                        <div class="info-box">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Donald hardson</h5>
                                            <span class="designation">Co Founder</span>
                                        </div>
                                    </div>
                                </div>

                                !-- Testimonial Block --
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.</div>
                                        </div>
                                        <div class="info-box">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Donald hardson</h5>
                                            <span class="designation">Co Founder</span>
                                        </div>
                                    </div>
                                </div>

                                !-- Testimonial Block --
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.</div>
                                        </div>
                                        <div class="info-box">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <figure class="thumb"><img src="{{asset('frontend/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Donald hardson</h5>
                                            <span class="designation">Co Founder</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        !-- End Testimonial Section -->

    <!-- Why Choose Us -->
    <section id="why-choose-us" class="why-choose-us">
        <div class="anim-icons">
            <span class="icon icon-arrow1"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12">
                    <div class="inner-column wow fadeInRight">
                        <div class="sec-title">
                            <i class="sub-title">company benefits</i>
                            <h2>Why should choose our agency?</h2>
                            <h4 class="other-title">We operate on transparency and you are our priority.
                                Through the insights we collect, your brand will be uplifted to the top.</h4>
                            <div class="text">We will use current trends and upscale them
                                according to your needs! This way your brand
                                will stand out among competitors and
                                become a leading name in the market.
                            </div>
                            <span class="icon icon-arrow3"></span>
                        </div>

                        <div class="info-outer">
                            <div class="row">
                                <div class="info-box col-lg-4 col-md-4">
                                    <div class="inner">
                                        <i class="icon flaticon-success"></i>
                                        <h5 class="title">Leader in digital marketing</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-4 col-md-4">
                                    <div class="inner">
                                        <i class="icon flaticon-job-promotion"></i>
                                        <h5 class="title">Highest success rates</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-4 col-md-4">
                                    <div class="inner">
                                        <i class="icon flaticon-marketing"></i>
                                        <h5 class="title">Quality marketing solutions</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image anim-overlay"><img
                                    src="{{asset('frontend/images/resource/why-us-k.webp')}}" alt=""></figure>
                            <div class="rounded-text">
                                <img src="{{asset('frontend/images/resource/round-text.webp')}}" alt="">
                                <span class="letter">D</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!-- Projects Section -->
    <section id="projects-section" class="projects-section p-0">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">our portfolio</span>
                <h2>Explore our new recently <br>completed projects.</h2>
            </div>

            <div class="outer-box">
                <div class="row">
                    <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{asset('frontend/images/resource/project-1-test.webp')}}" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <a href="#" class="icon"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <span class="cat">Development</span>
                                <h4 class="title"><a href="#" title="">Marketing webdesign</a>
                                </h4>
                            </div>
                        </div>
                    </div>


                    <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{asset('frontend/images/resource/project-3-test.webp')}}" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <a href="#" class="icon"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <span class="cat">Development</span>
                                <h4 class="title"><a href="#" title="">Marketing web design</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{asset('frontend/images/resource/project-2-test.webp')}}" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <a href="#" class="icon"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <span class="cat">Development</span>
                                <h4 class="title"><a href="#" title="">Marketing webdesign</a>
                                </h4>
                            </div>
                        </div>
                    </div>


                    <div class=" project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{asset('frontend/images/resource/project-4-test.webp')}}" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <a href="#" class="icon"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <span class="cat">Development</span>
                                <h4 class="title"><a href="#" title="">Marketing webdesign</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End projects-section-->
    <section id="contact-section" class="contact-section">
        <div class="anim-icons">
            <span class="icon icon-line3"></span>
            <span class="icon icon-arrow1"></span>
            <span class="icon icon-arrow2"></span>
        </div>
        <div class="auto-container">
            <div class="outer-box">
                <div class="bg bg-pattern-5"></div>

                <div class="sec-title">
                    <span class="sub-title">Get in touch</span>
                    <h2>Let’s work together</h2>
                </div>

                <!-- Contact Form -->
                <div class="contact-form wow fadeInLeft">
                    <!--Contact Form-->
                    <form method="post" action="get" id="contact-form">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="full_name" placeholder="Your name" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <input type="email" name="Email" placeholder="Email Address" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea name="message" placeholder="Write a message" required></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                        class="btn-title">Send a message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Contact Form -->
                <figure class="image"><img src="{{asset('frontend/images/resource/girl.webp')}}" alt=""></figure>
            </div>
        </div>
    </section>


    <!-- Statistics Counter Comment Out --
    <!- Fun Fact Section --
    <section class="fun-fact-section pull-up">
        <div class="bg bg-pattern-3"></div>
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!- Counter block--
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner">
                            <div class="icon-box"><i class="flaticon-completed-task"></i></div>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="990">0</span></div>
                            <h4 class="counter-title">Projects Completed</h4>
                        </div>
                    </div>

                    <!- Counter block--
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <div class="icon-box"><i class="flaticon-settings"></i></div>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="370">0</span></div>
                            <h4 class="counter-title">Repeat Customers</h4>
                        </div>
                    </div>

                    <!- Counter block--
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner">
                            <div class="icon-box"><i class="flaticon-rating"></i></div>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="860">0</span></div>
                            <h4 class="counter-title">Satisfied Customers</h4>
                        </div>
                    </div>

                    <!- Counter block--
                    <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                        <div class="inner">
                            <div class="icon-box"><i class="flaticon-group"></i></div>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="88">0</span></div>
                            <h4 class="counter-title">Team Members</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    !-- End Fun Fact Section -->
    <!-- Statistics Counter Comment Out -->

    <!-- News Section Two --
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <span class="sub-title">From the Blog</span>
                    <h2>Checkout latest news <br> updates & articles</h2>
                </div>

                <div class="row">
                    !-- News Block --
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="{{asset('frontend/images/resource/news-1.jpg')}}" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <span class="date">20 April</span>
                                <ul class="post-info">
                                    <li><i class="fa fa-user-circle"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">Five ways that can develop your business website</a></h4>
                                <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    !-- News Block --
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="{{asset('frontend/images/resource/news-2.jpg')}}" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <span class="date">20 April</span>
                                <ul class="post-info">
                                    <li><i class="fa fa-user-circle"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">Five ways that can develop your business website</a></h4>
                                <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    !-- News Block --
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="news-details.html"><img src="{{asset('frontend/images/resource/news-3.jpg')}}" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <span class="date">20 April</span>
                                <ul class="post-info">
                                    <li><i class="fa fa-user-circle"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">Five ways that can develop your business website</a></h4>
                                <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        !--End News Section -->

    <!-- Contact Section -->
    <!-- End Contact Section -->

    <!-- Sister Companies Comment Out --
        !-- Clients Section --
        <section class="clients-section pull-up">
            <div class="auto-container">
                <!- Sponsors Outer --
                <div class="sponsors-outer">
                    <!=clients carousel--
                    <ul class="clients-carousel owl-carousel owl-theme">
                        <li class="client-block"> <a href="#"><img src="{{asset('frontend/images/clients/1.png')}}" alt=""></a> </li>
                        <li class="client-block"> <a href="#"><img src="{{asset('frontend/images/clients/1.png')}}" alt=""></a> </li>
                        <li class="client-block"> <a href="#"><img src="{{asset('frontend/images/clients/1.png')}}" alt=""></a> </li>
                        <li class="client-block"> <a href="#"><img src="{{asset('frontend/images/clients/1.png')}}" alt=""></a> </li>
                        <li class="client-block"> <a href="#"><img src="{{asset('frontend/images/clients/1.png')}}" alt=""></a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-End Clients Section -->
    <!-- Sister Companies Comment Out -->

    <br>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="bg bg-pattern-6"></div>
        <!-- Footer Uppper -->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row">
                    <!-- Contact info Block -->
                    <div class="contact-info-block col-lg-4 col-md-6">
                        <div class="inner">
                            <i class="icon fa fa-phone-square"></i>
                            <span class="sub-title">Call Anytime</span>
                            <div class="text"><a href="{{config('app.phones.main')}}">{{config('app.phones.main')}}</a></div>
                        </div>
                    </div>
                    <!-- Contact info Block -->
                    <div class="contact-info-block col-lg-4 col-md-6">
                        <div class="inner">
                            <i class="icon fa fa-envelope"></i>
                            <span class="sub-title">Send Email</span>
                            <div class="text"><a href="mailto:{{config('app.emails.info')}}">{{config('app.emails.info')}}</a></div>
                        </div>
                    </div>
                    <!-- Contact info Block -->
                    <div class="contact-info-block col-lg-4 col-md-6">
                        <div class="inner">
                            <i class="icon fa fa-map-marker"></i>
                            <span class="sub-title">Address</span>
                            <div class="text">Achrafieh, Beirut, Lebanon</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Footer COlumn -->
                    <div class="footer-column col-xl-5 col-lg-4 col-md-12">
                        <div class="footer-widget about-widget">
                            <div class="widget-content">
                                <div class="logo"><a href="#"> <img src="{{asset('frontend/images/Tagit-logo.png')}}"
                                                                    alt=""></a></div>
                                <div class="text">
                                    Pushing Boundaries, Fueling Creativity, and Leading with 2030 Vision in Marketing. Explore the Future with Us.
                                </div>
                                <ul class="social-icon-two">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://instagram.com/tagit_sa?igshid=MzRlODBiNWFlZA=="><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer COlumn -->
                    <div class="footer-column col-xl-4 col-lg-4 col-md-6">
                        <div class="widget links-widget">
                            <h5 class="widget-title">Explore</h5>
                            <div class="widget-content">
                                <ul class="user-links two-column">
                                    <li><a href="#slider-header">Home Page</a></li>
                                    <li><a href="#services-section">Our Services</a></li>
                                    <li><a href="#about-section">About Us</a></li>
                                    <li><a href="#why-choose-us">Why Choose Us</a></li>
                                    <li><a href="#projects-section">Our Projects</a></li>
                                    <li><a href="#contact-section">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Subscribe Commented Out --
                    !-- Footer COlumn --
                    <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="widget newsletter-widget">
                            <h5 class="widget-title">Newsletter</h5>
                            <div class="widget-content">
                                <div class="text">Subsrcibe for our latest resources</div>
                                <div class="subscribe-form">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="theme-btn btn-style-one hover-light"><span class="btn-title">Subscribe</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    !-- Subscribe Commented Out -->
                </div>
            </div>
        </div>

        <!--  Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">© Copyright {{today()->year}} by <a href="#">Tagit-Global.com</a></div>
            </div>
        </div>
    </footer>
    <!--End Main Footer -->

@endsection
