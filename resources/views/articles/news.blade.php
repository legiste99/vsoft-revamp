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
<section class="bg-home-half-two" class="bg-home-half" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <h2 class="home-title mb-4">Article Main Page</h2>
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/#articles" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">LATEST NEWS</i></a>
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
        <div class="text-center">
            <h4 class="title-heading">Home Affairs rejects almost 9 000 ‘refugees’ in 12 months</h4>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-left">
                    <!-- <h5>Home Affairs rejects almost 9 000 ‘refugees’ in 12 months</h5> -->
                    <!-- <h6 class="title-heading">24. Apr. 2024 Cape Argus</h6> -->
                    <p class="title-desc text-muted mt-3">24. Apr. 2024 Cape Argus</p>
                    <p>
                        Cape Town - The Department of Home Affairs (DHA) processed 10 643 newcomer asylum applications in five refugee reception centres during the 2022/23 financial year, and rejected 8 948 of them, Minister Aaron Motsoaledi revealed in Parliament.
                        Although lobby groups are pushing against what they deem to be anti-foreigner sentiment from the DHA, a city activist grouping says Motsoaledi’s figures were slightly down from last year.
                        The term “refugees” refers to people who have fled wars or persecution, while “asylum seekers” describes people who claim to be refugees but whose claim has not been reviewed.
                        DA MP Adrian Roos asked Motsoaledi for the number of newcomer asylum applications processed for each refugee reception centre in the previous financial year, and how many were rejected as “unfounded”, “manifestly unfounded”, and those granted.
                        Roos also sought the number of asylum applications processed through the backlog project funded by the United Nations High Commissioner for Refugees; the number granted refugee status; and the number of final rejections, and whether any of the final rejections were appealed through a judicial appeal at the high court.
                        Motsoaledi said the DHA received 10 643 newcomers nationally in the 2022 calendar year, with the city-based refugee offices receiving 471 newcomers, which is the least compared with the centres in Durban, Musina, Gqeberha and the Pretoria-based Desmond Tutu Centre.
                        He said that out of the 10 643 newcomers’ applications, only 870 were granted asylum status.
                        The centres rejected 11 applications as “abusive”, 1 023 as “fraudulent”, 3 598 as “manifestly unfounded”, and 4 316 as “unfounded”.
                        Motsoaledi said 6 552 application files were processed, reviewed and profiled.
                        He said 876 applicants received final rejection and 3 705 appeals that were lodged were cancelled by asylum applicants.
                  </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <!-- <h4 class="title-heading">Development Process</h4> -->
                    <div class="mb-4">
                        <img src="{{asset('images/blog/allNews02.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- WELCOME END -->

<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
