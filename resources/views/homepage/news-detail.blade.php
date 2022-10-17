@extends('layouts.main')
@section('container')
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i
            class="fa fa-caret-up" aria-hidden="true"></i>
    </a>
    <main>

        <!--Inner banner start here-->
        <section class="banner-inner border-zigzag-up" style="background-image: url('images/news-bg.webp');">
            <div class="container">
                <h2 class="banner-title text-uppercase text-center text-white"></h2>
            </div>
        </section>
        <!--Inner banner start here-->
        <!--News bar start here-->
        <section class="newsbar news-detail py-80 pb-0">
            <div class="container">
                <div class="row mb-5">
                    {{-- @foreach ($blogs as $blog) --}}
                    <div class="col-lg-8">
                        <div class="news-content">
                            <p class="text-gray date">{{ $blog->created_at->diffForHumans() }}</p>
                            <h6 class="primary author text-uppercase">By: {{ $blog->creator }}</h6>
                            <h4 class="news-title text-uppercase">{{ $blog->title }}</h4>
                            <div class="new-img">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="newsimg">
                            </div>
                            <p class="news-description">{{ $blog->description }}</p>
                            <p class="news-description">Li Europan lingues es membres del sam familie. Lor separat
                                existentie ee form un myth. Por scientie, musica, sport etc, litot Europa usa li sam
                                vocabular. Li lingues differe solmen in li grammat from tje pronunciation e li plu commun
                                vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar
                                payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation
                                e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu
                                simplic e regulari quam ti del coalescent lingues. </p>
                            <h5>implificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.Li Europan
                                lingues </h5>
                            <p class="news-description">Omnicos directe al desirabilite de un nov lingua franca: On refusa
                                continuar payar custosi on the traductores. At solmen va esser necessi far uniform
                                grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica
                                del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua
                                franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam
                                simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un
                                simplificat Angles, quam un skeptic Cambridge amico dit me que theOccidental es.Li Europan
                                lingues es membres del sam familie. Lor separat existentie es myth. Poear scientie, musica,
                                sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li
                                pronunciation e li plu commun vocabules. </p>
                            
                        </div>
                    </div>
                    {{-- @endforeach --}}
                    <div class="col-lg-4">
                        <div class="blogs-sidebar">
                            <h4 class="sidebar-title text-uppercase mb-5">recent post</h4>
                            <div class="sidebar-blogs-listing">
                                @foreach ($blogs as $blog)   
                                <ul>
                                    <li>
                                        <a href="{{ $blog->slug }}">
                                            <h5 class="text-default">{{ $blog->title }}
                                            </h5>
                                            <p class="date text-gray">{{ $blog->created_at->diffForHumans() }}</p>
                                        </a>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            {{-- <div class="numeric-bar blogs-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="blogsprev blogbarin ">
                                <a href="#">
                                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                    <div class="blogdetail">
                                        <h4>Read Previous</h4>
                                        <h5>You Of Fruitful Wherein Was Fifth Abundantly Greater</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blogsnext blogbarin">
                                <a href="#">
                                    <div class="blogdetail">
                                        <h4>Read Next</h4>
                                        <h5>So Called Moveth Blessed Good Bearing Created Cattle Land Days </h5>
                                    </div>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
        <!--News bar ends here-->
        <!--Keepup-date start here-->
        <section class="Keepup-date py-130">
            <div class="container">
                <h4 class="text-default text-center mb-lg-3">KEEP UP TO DATE WITH Us!</h4>
                <p class="text-gray text-center">Sign up to be the first to receive special news and event updates from
                    Restaurant. </p>
                <form class="keepup-form needs-validation" novalidate>
                    <div class="formrow">
                        <input type="email" class="form-control" required placeholder="Enter Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <img src="images/next.png" alt="next">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--Keepup-date ends here-->
    </main>
@endsection
