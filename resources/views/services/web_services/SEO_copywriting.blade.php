<!DOCTYPE html>
<html>
<head>
    <x-head/>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
    <div class="container">
        <a class="navbar-brand logo" href="#">Vsoft Systems</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#client">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#articles">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#price">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
                            <!-- <h5 class="home-small-title text-uppercase text-white-50 mb-4">We create the web</h5> -->
                            <h2 class="home-title mb-4">SEO Copywriting service</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/services/web-services" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">Web Services</i></a>
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
            <div class="col-lg-12">
                <div class="text-center">
                    <h4 class="title-heading">SEO Copywriting service</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                        SEO Copywriting or Search Engine Optimization Copywriting is a technique that 
                        guarantees success of SEO. It is a part and parcel of the SEO process. Search 
                        Engine Content Writing will also help you to achieve higher ranking in the major 
                        search engines like GOOGLE Search YAHOO search, Bing Search Engine and MSN Search 
                        Engine.
                        <br>
                        <br>
                        As well as the viewable text, SEO Copywriting usually optimizes other on-page 
                        elements for the targeted search terms. These include the Title, Description and 
                        Keywords tags, headings and alt text. Your website design has to be user 
                        perspectiveand accessible to the most of the browsers and your linking strategy 
                        has to be strong to increase the success of your website increasing in search 
                        engine ranking. An additional feature is that your website’s content keyword 
                        density must be uniform but it must not make the mistake of using repetition 
                        of your targeting keywords in your content, ie text . Your content has to be 
                        meaningful that will ensure you can attract your customer via search engines. 
                        This is important because how most of major search engine work and rank your 
                        page is according to LSI (latent semantic indexing) algorithm based on LSA 
                        (latent semantic analysis).so well constructed SEO content writing always puts 
                        your ranking high on search engines.
                  </p>
                </div>
            </div>
        </div>

<!-- SERVICES START -->
<section class="section bg-light" id="service">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4">
                <a href="/services/web-services">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="monitor"></i>
                        </div>
                        <div class="service-head">
                            <h4>Search Engine Marketing</h4>
                            <p class="text-muted mb-0">
                                Now you say: "Whether you're a small business or a high profile corporation, 
                                we can offer cutting-edge and strategic marketing services that will promote 
                                your business on the Internet."
                            </p>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="text-center mt-5">
                                    <a href="/services" class="btn btn-custom btn-round">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/services">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="smartphone"></i>
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Mobile Application Development</h4>
                            <p class="text-muted mb-0">
                                Mobile applications can help individuals with quicker information access, 
                                maximum productivity, and timely responsiveness, there helping him reduce 
                                operating cost and risks.
                            </p>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="text-center mt-5">
                                    <a href="/services" class="btn btn-custom btn-round">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/services">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="smartphone"></i>
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Game Development</h4>
                            <p class="text-muted mb-0">Game development is one of the most intricate parts 
                                of software development. Unlike ordinary applications, game development 
                                requires completely updated resources.</p>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="text-center mt-5">
                                    <a href="/services" class="btn btn-custom btn-round">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- SERVICES END -->


    </div>
</section>
<!-- WELCOME END -->

<!-- SERVICES START -->

<!-- SERVICES END -->

<!-- PORTFOLIO START-->


        <!-- portfolio menu -->

        <!-- End portfolio  -->

    <!-- Gallary -->

<!-- PORTFOLIO END-->

<!-- CLIENT START -->

<!-- CLIENT END -->

<!-- TEAM START -->

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

<!-- BLOG END -->

<!-- CONTACT START -->

<!-- CONTACT END -->

<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
