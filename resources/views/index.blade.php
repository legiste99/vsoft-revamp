<!DOCTYPE html>
<html>
<head>
    <x-head/>
</head>

<body>
<!-- NAVBAR -->
<x-home_nav/>
<!-- NAVBAR END-->

<!-- HOME START-->
<section class="bg-home-half" id="home">
    <div class="bg-overla"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <h5 class="home-small-title text-uppercase text-white-50 mb-4">We create the web</h5>
                            <h2 class="home-title mb-4">Create amazing designs with Vsoft Systems</h2>
                            <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p>
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="#feature" class="btn btn-custom">View More <i class="mdi mdi-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME END-->

{{-- Floating Action Button #Fab--}}
<x-fab/>

<!-- WELCOME START -->
<section class="section" id="feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h4 class="title-heading">Starting with Vsoft Systems is easier than anything!</h4>
                    <p style="color:orange">We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning and add a value.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="images/about/Mission.jpeg" class="img-fluid rounded" alt="">
                        </div>

                        <h4>Mission</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">At Vsoft Systems, our mission is to empower businesses to leverage the full potential of technology, by providing expert web and software development services that are tailored to their unique needs and goals.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="images/about/Value.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Vision</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our vision is to be a leading provider of cutting-edge web and software development services, known for our technical expertise, creativity, and commitment to delivering exceptional value to our clients.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="images/about/Vision.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Values</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">We value collaboration, innovation, and a strong work ethic. We believe in building strong partnerships with our clients, staying on the cutting edge of technological developments, and going the extra mile to deliver outstanding results.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- WELCOME END -->

<!-- SERVICES START -->
<section class="section bg-light" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h4 class="title-heading text-uppercase">Our Services</h4>
                    <p class="title-desc text-muted mt-3">Script about our services goes here</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">

            <div class="col-lg-6">
                <a class="card1" href="/services/web-services">
                    <div class="services-blog">
                        <div>
                            <img class="icons" src="{{asset('images/animations/monitor.png')}}" alt="">
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Web Services</h4>
                            <p class="text-muted mb-0">
                                From custom web development and responsive design to robust e-commerce platforms and
                                seamless integrations, VSOFT delivers tailored web services that align with your unique goals and drive growth. </p>
                        </div>
                    </div>
                    <div class="go-corner" href="/services/web-service">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6">
                <a class="card1" href="/services/enterprise-solutions">
                    <div class="services-blog">
                        <div>
                            <img class="icons" src="{{asset('images/animations/database.png')}}" alt="">
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Enterprise Solutions</h4>
                            <p class="text-muted mb-0">
                                VSOFT's enterprise solutions revolutionize the way businesses operate, streamlining
                                processes and maximizing productivity through advanced technology and automation.
                            </p>
                        </div>
                    </div>
                    <div class="go-corner" href="/services/enterprise-solutions">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row mt-2">

            <div class="col-lg-6">
                <a class="card1" href="/services/cyber-security">
                    <div class="services-blog">
                        <div>
                            <img class="icons" src="{{asset('images/animations/cyber.png')}}" alt="">
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Cyber And Intelligence Security</h4>
                            <p class="text-muted mb-0">
                                Our comprehensive suite of security services includes advanced threat detection,
                                proactive monitoring, and incident response, empowering organizations to stay one step
                                ahead of cybercriminals.
                            </p>
                        </div>
                    </div>
                    <div class="go-corner" href="/services/cyber-security">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6">
                <a class="card1" href="/services/software-dev">
                    <div class="services-blog">
                        <div>
                            <img class="icons" src="{{asset('images/animations/phone.png')}}" alt="">
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Software Development</h4>
                            <p class="text-muted mb-0">
                                VSOFT's software development services offer tailor-made solutions that align with your
                                business objectives, delivering high-performance applications that drive efficiency and
                                innovation.
                            </p>
                        </div>
                    </div>
                    <div class="go-corner" href="/services/software-dev">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <div class="row mt-2">

            <div class="col-lg-6">
                <a class="card1" href="/services/tech-expertise">
                    <div class="services-blog">
                        <div>
                            <img class="icons" src="{{asset('images/animations/phone.png')}}" alt="">
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Technology Expertise</h4>
                            <p class="text-muted mb-0">
                                VSOFT's technology expertise services encompass a comprehensive range of solutions
                                designed to empower businesses with the latest and most relevant technological
                                advancements.
                            </p>
                        </div>
                    </div>
                    <div class="go-corner" href="/services/tech-expertise">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>
<!-- SERVICES END -->

<!-- PORTFOLIO START-->
<section class="section bg-white pb-0" id="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                    <h4 class="title-heading text-uppercase">Our Portfolio</h4>
                    <p style="color:orange">Huge collection of elements, rich customization options, flexible layouts, stunning pages and instant results!</p>
                </div>
            </div>
        </div>

        <!-- portfolio menu -->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="text-center">
                    <ul class="col container-filter categories-filter list-unstyled mb-0" id="filter">
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".software">Software</a></li>
                        <li><a class="categories" data-filter=".mobile">Mobile</a></li>
                        <li><a class="categories" data-filter=".website">Website</a></li>
                        <li><a class="categories" data-filter=".logoDesign">Logo Design</a></li>
                        <li><a class="categories" data-filter=".graphics">Graphics</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End portfolio  -->

    </div>

    <!-- Gallary -->
    <div class="container-fluid">
        <div class="row container-grid mt-5 projects-wrapper">
            <div class="img-max-width software">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/Software.jpg" title="Project Name">
                        <img class="item-container profile business" src="images/portfolio/Software.jpg" alt="1" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">software</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width mobile">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/Mobile.jpg" title="Project Name">
                        <img class="item-container mfp-fade" src="images/portfolio/Mobile.jpg" alt="2" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">mobile</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width website">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/Website.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/Website.jpg" alt="3" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light"> website </h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width logoDesign">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/Logo.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/Logo.jpg" alt="4" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">logoDesign</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width graphics">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/Graphic.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/Graphic.jpg" alt="5" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">graphics</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width software">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/Software01.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/Software01.jpg" alt="6" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">software</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width mobile">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/Mobile01.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/Mobile01.jpg" alt="7" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">mobile</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width website">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/Website01.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/Website01.jpg" alt="8" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">website</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PORTFOLIO END-->

<!-- CLIENT START -->
<section class="section" id="client">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class=" text-center">
                    <h4 class="title-heading text-uppercase">Testimonial</h4>
                    <p style="color:orange">We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning and add a value.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
                <div id="owl-demo" class="owl-carousel">

                    @foreach($testimonials as $testimonial)
                    <div class="testi-box">
                        <div class="text-center +mt-4">
                            <div class="testi-content">
                                <p class="user-review text-center mb-0">"{{$testimonial->Descr}}"</p>
                            </div>
                            {{-- <div class="mt-4">
                                <img src="images/client/11.jpg" alt="" class="img-fluid rounded-circle testi-user mx-auto d-block">
                            </div> --}}
                            <div class="img-post text-center">
                                <p class="testi-patients text-muted mb-1 mt-3">Client</p>
                                <h5 class="testi-client-name">{{$testimonial->Name}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{--<div class="testi-box">
                        <div class="text-center mt-4">
                            <div class="testi-content">
                                <p class="user-review text-center mb-0">" It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a normal of letters, as opposed to using making it look like readable English."</p>
                            </div>
                            <div class="mt-4">
                                <img src="images/client/12.jpg" alt="" class="img-fluid rounded-circle testi-user mx-auto d-block">
                            </div>
                            <div class="img-post text-center">
                                <p class="testi-patients text-muted mb-1 mt-3">Ceo</p>
                                <h5 class="testi-client-name">Charley Brown</h5>
                            </div>
                        </div>
                    </div>

                    <div class="testi-box">
                        <div class="text-center mt-4">
                            <div class="testi-content">
                                <p class="user-review text-center mb-0">" Looking for an event WordPress theme? Look no further—we’ve got pre-built websites for over 20 different types of events: birthday party, wedding, course launch, marketing event, conference, seasonal event."</p>
                            </div>
                            <div class="mt-4">
                                <img src="images/client/13.jpg" alt="" class="img-fluid rounded-circle testi-user mx-auto d-block">
                            </div>
                            <div class="img-post text-center">
                                <p class="testi-patients text-muted mb-1 mt-3">Manager</p>
                                <h5 class="testi-client-name">Norden Sophie</h5>
                            </div>
                        </div>
                    </div>--}}

                </div>
            </div>
        </div>
    </div>
</section>
<!-- CLIENT END -->

<!-- TEAM START -->
<section class="section" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                    <h4 class="title-heading text-uppercase">OUR AMAZING TEAM</h4>
                    <p style="color:orange">Conversion rates open a beautiful store, increase your conversion rates and boost your sales.

                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-3">
                <div class="team-member mt-4 text-center">
                    <img src="images/team/rusty.jpg" class="img-fluid" alt="">
                    <div>
                        <h4 class="mt-3">Rusty M. Adecel</h4>
                        <p style="color:orange">Developper</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="team-member mt-4 text-center">
                    <img src="images/team/michael.jpg" class="img-fluid" alt="">
                    <div>
                        <h4 class="mt-3">Marcelle Gant</h4>
                        <p style="color:orange">Designer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="team-member mt-4 text-center">
                    <img src="images/team/prince.jpg" class="img-fluid" alt="">
                    <div>
                        <h4 class="mt-3">Aude Boyd</h4>
                        <p style="color:orange">Manager</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="team-member mt-4 text-center">
                    <img src="images/team/joseph.jpg" class="img-fluid" alt="">
                    <div>
                        <h4 class="mt-3">Carlos A. Kilgore</h4>
                        <p style="color:orange">Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TEAM END -->

<!-- START CTA -->
<!-- <section class="section bg-cta">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="text-white text-center">Ready to start your next
                    web project now?</h3>
                <p class="cta-desc text-white text-center mt-3">When a good idea comes, you know, part of my job is to move it around, just see what people think, get people talking about it.</p>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-custom-white">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END CTA -->

<!-- BLOG START -->
<section class="section bg-light" id="articles">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h4 class="title-heading text-uppercase">Latest News</h4>
                    <p style="color:orange">Huge collection of elements, rich customization options, flexible layouts, stunning pages and instant results.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">

            @foreach($articles as $article)

                <a href="/articles/news/{{$article->TextNo}}">
                    <div class="col-lg-4">
                        <div class="blog-menu mt-4">
                            {{--<img src="{{asset('images/blog/allNews01.jpg')}}" class="img-fluid" alt="">--}}
                            <img src="{{asset($article->PicBigURL)}}" class="img-fluid" alt="">
                            <div>
                                <h4><a href="/articles/news/{{$article->TextNo}}" class="blog-title">{{$article->Hdr}}</a></h4>
                                <p class="mt-2 text-muted">{{$article->IntroText}}</p>
                                <div class="mt-3">
                                    <a href="/articles/news/{{$article->TextNo}}" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            @endforeach

        </div>
        <div class="text-left pt-4 navbar-nav" style="width: 250px">
            <a href="/articles" class="btn btn-custom">View Articles <i class="mdi mdi-arrow-right ml-2"></i></a>
        </div>
    </div>
</section>
<!-- BLOG END -->

<!-- CONTACT START -->
<section class="section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="contact-head text-center">
                    <h4 class="title-heading text-uppercase">Contact us</h4>
                    <p style="color:orange">Thank you for your interest in VsoftSystem. Please use this form to contact us. <br>
                                                            We will get back to you as soon as we can.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4 vertical-content">
            <div class="col-lg-12">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="contact-info">
                            <div class="mt-3">
                                <div class="float-left">
                                    <i data-feather="mail"></i>
                                </div>
                                <div class="ml-5">
                                    <h6 class="text-muted">Email Address</h6>
                                    <p>info@vsoftsystems.co.za</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="float-left">
                                    <i data-feather="phone-call"></i>
                                </div>
                                <div class="ml-5">
                                    <h6 class="text-muted">Phone number</h6>
                                    <p>(+27)084 249 6846 , (+27)086 579 0155</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="float-left">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <div class="ml-5">
                                    <h6 class="text-muted">Office Address</h6>
                                    <p>56 Barrack Street, Cape Town, Western Cape, South Africa, ZA-8001</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="custom-form">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="text" id="sub" type="text" class="form-control" placeholder="Your subject...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT END -->

<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
