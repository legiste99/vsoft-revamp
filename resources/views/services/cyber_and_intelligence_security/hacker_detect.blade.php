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
                    <a class="nav-link" href="#home">Home</a>
                </li>{{--
                <li class="nav-item">
                    <a class="nav-link" href="#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#client">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#articles">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#price">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>--}}
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
                            <h2 class="home-title mb-4">Hacker Detect, Isolate & Trace</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="#read-more" class="btn btn-custom"><i class="mdi mdi-arrow-down ml-2">Read More</i></a>
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
            <div class="col-lg-10">
                <div class="text-center">
                    <h4 class="title-heading">Hacker Detect, Isolate & Trace</h4>
                    <p class="title-desc text-muted mt-3">Vsoft Systems. (VSOFT) is a high end IT technology company established in 2004. VSOFT has developed a broad business service area in its consulting practices and in-house software and web development. VSOFT service area covers all software development life cycle with today's languages on multiple platforms. VSOFT has developed cutting-edge technical capabilities and has been providing advanced solutions to its customer’s business problem with today's latest technology.</p>
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
