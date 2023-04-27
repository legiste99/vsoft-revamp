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
    <div class="bg-overlay"></div>
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
                    <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning and add a value.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="images/about/2.jpg" class="img-fluid rounded" alt="">
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
                            <img src="images/about/2.jpg" class="img-fluid rounded" alt="">
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
                            <img src="images/about/3.jpg" class="img-fluid rounded" alt="">
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
                <a href="/services/web-services">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="monitor"></i>
                        </div>
                        <div class="service-head">
                            <h4>Web Service</h4>
                            <p class="text-muted mb-0">Script about web services goes here</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="/services">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="smartphone"></i>
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Enterprise Solutions</h4>
                            <p class="text-muted mb-0">Script about Enterprise Solutions goes here</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-6">
                <a href="/services/cyber-security">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="database"></i>
                        </div>
                        <div class="service-head">
                            <h4>Cyber / Intelligence Security</h4>
                            <p class="text-muted mb-0">Script about ---Cyber / Intelligence Security--- goes here</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="/services/software-dev">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="command"></i>
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Software Development</h4>
                            <p class="text-muted mb-0">Script about ---Software Development--- goes here</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-6">
                <a href="/services/tech-expertise">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="eye"></i>
                        </div>
                        <div class="service-head">
                            <h4>Technology Expertise</h4>
                            <p class="text-muted mb-0">Script about ---Technology Expertise--- goes here</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- <div class="col-lg-6">
                <div class="services-blog mt-4">
                    <div>
                        <i data-feather="cpu"></i>
                    </div>
                    <div class="service-head">
                        <h4>Technology Expertise</h4>
                        <p class="text-muted mb-0">Documentation is not only a guide for Ave, it is a comprehensive kit fully   guide for Ave integrated with the community.</p>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- <div class="row mt-4">

            <div class="col-lg-12">
                <div class="text-center mt-5">
                    <a href="/services" class="btn btn-custom btn-round">See all Services</a>
                </div>
            </div>
        </div> -->
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
                    <p class="title-desc text-muted mt-3">Huge collection of elements, rich customization options, flexible layouts, stunning pages and instant results!</p>
                </div>
            </div>
        </div>

        <!-- portfolio menu -->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="text-center">
                    <ul class="col container-filter categories-filter list-unstyled mb-0" id="filter">
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".profile">Profile</a></li>
                        <li><a class="categories" data-filter=".business">Business</a></li>
                        <li><a class="categories" data-filter=".finance">Finance</a></li>
                        <li><a class="categories" data-filter=".marketing">Marketing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End portfolio  -->

    </div>

    <!-- Gallary -->
    <div class="container-fluid">
        <div class="row container-grid mt-5 projects-wrapper">
            <div class="img-max-width">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-1.jpg" title="Project Name">
                        <img class="item-container profile business" src="images/portfolio/work-1.jpg" alt="1" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">Centerd Gallary</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width business finance">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-8.jpg" title="Project Name">
                        <img class="item-container mfp-fade" src="images/portfolio/work-8.jpg" alt="2" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">Sidebar Stack</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width profile business">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-3.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/work-3.jpg" alt="3" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">Grid – Overlay </h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width marketing">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-2.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/work-2.jpg" alt="4" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">Distinctive</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width finance marketing">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-6.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/work-6.jpg" alt="5" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">Sustainable</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width profile marketing">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-5.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/work-5.jpg" alt="6" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">Popup Hover</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width business">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-7.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/work-7.jpg" alt="7" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">Vendor</h5>
                                <p class="text-light">client: Kay Garland</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="img-max-width marketing">
                <div class="item-box">
                    <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-4.jpg" title="Project Name">
                        <img class="item-container" src="images/portfolio/work-4.jpg" alt="8" />
                        <div class="item-mask">
                            <div class="item-caption">
                                <h5 class="text-light">Slider Cover</h5>
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
                    <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning and add a value.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
                <div id="owl-demo" class="owl-carousel">

                    <div class="testi-box">
                        <div class="text-center mt-4">
                            <div class="testi-content">
                                <p class="user-review text-center mb-0">" Their separate existence is a myth. For science music sport etc Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language "</p>
                            </div>
                            <div class="mt-4">
                                <img src="images/client/11.jpg" alt="" class="img-fluid rounded-circle testi-user mx-auto d-block">
                            </div>
                            <div class="img-post text-center">
                                <p class="testi-patients text-muted mb-1 mt-3">Founder</p>
                                <h5 class="testi-client-name">Willimore Wilson</h5>
                            </div>
                        </div>
                    </div>

                    <div class="testi-box">
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
                    </div>

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
                    <p class="title-desc text-muted">Conversion rates open a beautiful store, increase your conversion rates and boost your sales.

                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-3">
                <div class="team-member mt-4 text-center">
                    <img src="images/team/11.jpg" class="img-fluid" alt="">
                    <div>
                        <h4 class="mt-3">William A. Smith</h4>
                        <p>CEO</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="team-member mt-4 text-center">
                    <img src="images/team/12.jpg" class="img-fluid" alt="">
                    <div>
                        <h4 class="mt-3">Marc R. Gant</h4>
                        <p>Designer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="team-member mt-4 text-center">
                    <img src="images/team/13.jpg" class="img-fluid" alt="">
                    <div>
                        <h4 class="mt-3">Edmund M. Boyd</h4>
                        <p>Manager</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="team-member mt-4 text-center">
                    <img src="images/team/14.jpg" class="img-fluid" alt="">
                    <div>
                        <h4 class="mt-3">Carlos A. Kilgore</h4>
                        <p>Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TEAM END -->

<!-- START CTA -->
<section class="section bg-cta">
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
</section>
<!-- END CTA -->

<!-- BLOG START -->
<section class="section bg-light" id="articles">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h4 class="title-heading text-uppercase">Latest News</h4>
                    <p class="title-desc text-muted mt-3">Huge collection of elements, rich customization options, flexible layouts, stunning pages and instant results.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="blog-menu mt-4">
                    <img src="images/blog/1.jpg" class="img-fluid" alt="">
                    <div>
                        <h4><a href="" class="blog-title">Want to know how Deep Learning works?</a></h4>
                        <p class="mt-2 text-muted">fugiat! Quia, provident vitae! Magni tempora perferendis eum non provident.</p>
                        <div class="mt-3">
                            <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-menu mt-4">
                    <img src="images/blog/2.jpg" class="img-fluid" alt="">
                    <div>
                        <h4><a href="" class="blog-title">How to become a skilled Developer</a></h4>
                        <p class="mt-2 text-muted">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                        <div class="mt-3">
                            <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-menu mt-4">
                    <img src="images/blog/3.jpg" class="img-fluid" alt="">
                    <div>
                        <h4><a href="" class="blog-title">The best front hacking cheatsheets</a></h4>
                        <p class="mt-2 text-muted">Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus.</p>
                        <div class="mt-3">
                            <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-left pt-4 navbar-nav" style="width: 250px">
            <a href="#feature" class="btn btn-custom">View Articles <i class="mdi mdi-arrow-right ml-2"></i></a>
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
                    <p class="title-desc text-muted mt-3">Find the perfect business template for any type of business size. Browse be websites created for small businesses, such as online service providers.</p>
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
                                    <p>Example@abc.com</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="float-left">
                                    <i data-feather="phone-call"></i>
                                </div>
                                <div class="ml-5">
                                    <h6 class="text-muted">Phone number</h6>
                                    <p>+1-903-929-5705 , +1-631-705-0194</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="float-left">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <div class="ml-5">
                                    <h6 class="text-muted">Office Address</h6>
                                    <p>3961 Melville Street <br/>
                                        Bruceton, TN 38317</p>
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
