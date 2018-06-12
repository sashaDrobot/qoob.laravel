@extends('layouts.main')

@section('content')
    <section class='landing container-fluid'>
        <video id="bg-video" class="hidden-video" autoplay='true' loop='true' muted='true' poster='' type="video/mp4"></video>
        <div class="container-fluid video-cont">
            <div class="row main">
                <div class="col-lg-2">
                    <h5>Beyond the possible</h5>
                </div>
            </div>
            <div class="row main-header text-center justify-content-center">
                <div class="col-lg-12 align-self-center">
                    <h1 class="main-header-text">
                        Web
                    </h1>
                    <h2 class="main-header-text">
                        production
                    </h2>
                    <h2 class="main-header-text">
                        studio
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid header-mob">
        <div class="row">
            <div class="col-lg-10 d-flex justify-content-center flex-column align-items-center">
                <h1>QOOB</h1>
                <h2>web</h2>
                <h2>production</h2>
                <h2>studio</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid services-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="container-header">services</h3>
                </div>
                <div class="col-lg-3">
                    <div class="services-block">
                        <div class="col-lg-12 services-front text-center">
                            <h3>Website <br> development</h3>
                            <p>
                                lorem ipsum
                                dolor sit emmet
                                lorem ipsum dolor sit emmet
                                lorem ipsum dolor sit emmet
                                lorem ipsum dolor sit emmet
                            </p>
                        </div>
                        <div class="col-lg-12 services-back">
                            <h1>W</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-block">
                        <div class="col-lg-12 services-front text-center">
                            <h3>Seo <br> promotion</h3>
                            <p>
                                lorem ipsum
                                dolor sit emmet
                                lorem ipsum dolor sit emmet
                                lorem ipsum dolor sit emmet
                                lorem ipsum dolor sit emmet
                            </p>
                        </div>
                        <div class="col-lg-12 services-back">
                            <h1>S</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-block">
                        <div class="col-lg-12 services-front text-center branding">
                            <h3>Branding</h3>
                            <p>
                                lorem ipsum
                                dolor sit emmet
                                lorem ipsum dolor sit emmet
                                lorem ipsum dolor sit emmet
                                lorem ipsum dolor sit emmet
                            </p>
                        </div>
                        <div class="col-lg-12 services-back">
                            <h1>B</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-block">
                        <div class="col-lg-12 services-front video-prod text-center">
                            <h3>Video <br> production <br> & 3d</h3>
                            <p>
                                lorem ipsum
                                dolor sit emmet
                                lorem ipsum dolor sit emmet
                                lorem ipsum dolor sit emmet
                                lorem ipsum dolor sit emmet
                            </p>
                        </div>
                        <div class="col-lg-12 services-back">
                            <h1>V</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid advantages-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="container-header">advantages</h3>
                </div>
            </div>
            <div class="row d-flex advantages-elem justify-content-center">
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/unique_style.png') }}">
                    <h3 class="text-center">Unique style</h3>
                    <p>
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                    </p>
                </div>
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/qualified.png') }}">
                    <h3>Qualified team</h3>
                    <p>
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                    </p>
                </div>
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/quarant.png') }}">
                    <h3>100% guarantee</h3>
                    <p>
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                    </p>
                </div>
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/high.png') }}">
                    <h3>High quality standards</h3>
                    <p>
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                    </p>
                </div>
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/attentiv.png') }}">
                    <h3>Unique style</h3>
                    <p>
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                        lorem ipsum dolor sit emmet
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container portfolio-main-container ">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="container-header">portfolio</h3>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="row portfolio-element">
                <div class="col-lg-6 portfolio-preview">
                    <img class="img-fluid" src="{{ asset('img/prom.png') }}">
                    <div class="portfolio-preview-colored-wrapper text-center d-flex flex-column  justify-content-center align-items-center">
                        <h2 class="align-self-center">Prominvest plastic</h2>
                        <hr>
                        <a href="/portfolio" class="qoob-button portfolio-button align-self-center draw">
                            More
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 portfolio-preview">
                    <img class="img-fluid" src="{{ asset('img/tiers.png') }}">
                    <div class="portfolio-preview-colored-wrapper text-center d-flex flex-column  justify-content-center align-items-center">
                        <h2 class="align-self-center">Tiers & disks</h2>
                        <hr>
                        <a href="/portfolio" class="qoob-button portfolio-button align-self-center draw">
                            More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid contacts-container ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="container-header">contacts</h3>
                </div>
            </div>
            <div class="row contacts-main-row">
                <div class="col-lg-6">
                    <div class="submit-block text-center">
                        <h1>Let`s make a cool<br> project together!</h1>
                        <h5>submit your application</h5>
                        <div class="text-center">
                            <a href="/feedback" class="qoob-button gradient-button">
                                <span>submit</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="contacts-inform">
                        <ul>
                            <li class="header-contact-inform">Mail:</li>
                            <li><a href="mailto:qoobstudio@gmail.com">qoobstudio@gmail.com</a></li>
                            <li class="header-contact-inform">Phone:</li>
                            <li>(068) 009 00 99</li>
                            <li>(066) 009 00 99</li>
                            <li class="header-contact-inform">Address:</li>
                            <li>Kharkiv, Ukraine</li>
                            <li>Plekhanovkaya Str. 126/1</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row copyright-qoob">
                <div class="col-12 text-center">
                    <h6>qoob 2018</h6>
                </div>
            </div>
        </div>
    </div>
@endsection