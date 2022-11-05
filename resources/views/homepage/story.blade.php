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
        <section class="story-boxes mb-4">
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
        
       
    </main>
@endsection
