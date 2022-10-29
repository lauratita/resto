@extends('layouts.main')
@section('container')
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i
            class="fa fa-caret-up" aria-hidden="true"></i>
    </a>
    <!--theme option color scheme
          <div class="theme-option">
             <button class="btnclick btn-change btn">
                <i class="fa fa-cog" aria-hidden="true"></i>
             </button>
             <div class="theme-color-scheme">
                <div class="tiltebar">
                   <h4 class="titlein">Theme Color Setting</h4>
                   <button class="btnclick btn-cross"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <ul class="theme-color-scheme-in">
                   <li><button class="Darkmode-btn">Darkmode</button></li>
                   <li><button class="Lightmode-btn">Lightmode</button></li>
                   <li><button class="Fortnight-btn">Fortnight</button></li>
                </ul>
                <div class="reset"><button class=" btn resetin">Reset Settings</button></div>
             </div>
          </div>theme option color scheme-->

    <main>
        <!--Inner banner start here-->
        <section class="banner-inner border-zigzag-up" style="background-image: url('images/story-bg.webp');">
            <div class="container">
                <h2 class="banner-title text-uppercase text-center text-white">Who we are</h2>
            </div>
        </section>
        <!--Inner banner start here-->
        <!--Rule-war section start here-->
        <section class="rule-war py-110 border-zigzag-up">
            <div class="container  max-880">
                <h4 class="letter-spacing-0 text-default text-center mb-0">Stars creeping one make darkness winged for open
                    set lights night likeness yielding their first above without night yielding second he. Land said life
                    subdue one. Fruit. Stars Waters, good from that great one spirit herb won't brought. Darkness made
                    brought.</h4>
            </div>
        </section>
        <!--Rule-war section ends here-->
        <!--Story-boxes start here-->
        <section class="story-boxes">
            <div class="container-fluid p-0 m-0">
                <div class="row m-0 align-items-center">
                    <div class="col-md-6 p-0">
                        <div class="story-img">
                            <img src="images/story-lft.webp" alt="story-img">
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="story-content text-center">
                            <h4 class="text-default mb-3 text-uppercase">Philosophy</h4>
                            <p>Second third air man waters which years seas midst created dominion yielding let, midst, i
                                moved open above fruit sea one light make. He let earth spirit form isn't. Stars creeping
                                one make darkness winged for open set lights night likeness yielding their first above
                                without night yielding second he.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row m-0 align-items-center flex-col-reverse">
                    <div class="col-md-6 p-0">
                        <div class="story-content text-center">
                            <h4 class="text-default mb-3 text-uppercase">Founder</h4>
                            <p>Second third air man waters which years seas midst created dominion yielding let, midst, i
                                moved open above fruit sea one light make. He let earth spirit form isn't. Stars creeping
                                one make darkness winged for open set lights night likeness yielding their first above
                                without night yielding second he.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="story-img">
                            <img src="images/story-ryt.webp" alt="story-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Story-boxes ends here-->
        <!--Testimonial start here-->
        <section class="Testimonial-block primary-bg py-110 content-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="testimonial-bar text-center">
                                        <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar text-white">The set one creepeth given air behold bring herb so
                                            thing sixth spirit moveth lesser thing air without cattle itself darkness
                                            greater. </p>
                                        <h6 class="review-name text-white font-Av">– Javed Harji</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-bar text-center">
                                        <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar text-white">The set one creepeth given air behold bring herb so
                                            thing sixth spirit moveth lesser thing air without cattle itself darkness
                                            greater. </p>
                                        <h6 class="review-name text-white font-Av">– John Deo</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-bar text-center">
                                        <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar text-white">The set one creepeth given air behold bring herb so
                                            thing sixth spirit moveth lesser thing air without cattle itself darkness
                                            greater. </p>
                                        <h6 class="review-name text-white font-Av">– Michel Richard</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial ends here-->
        <!--private dining start here-->
        <section class="private-dining booktable-bg py-180 border-zigzag-up parallex">
            <div class="container text-center">
                <h4 class="text-white mb-5">BOOK A TABLE / PRIVATE DINING</h4>
                <div class="btn-row">
                    <a href="/contact" class="btn btn-primary btn-white"><i class="fa fa-envelope"
                            aria-hidden="true"></i>
                        Enquire now</a>
                    <a href="tel:+62851-0512-0605" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i>
                        +62851-0512-0605</a>
                </div>
            </div>
        </section>
        <!--private dining ends here-->
    </main>
@endsection
