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
        <section class="banner-inner border-zigzag-up" style="background-image: url('images/news-bg.webp');">
            <div class="container">
                <h2 class="banner-title text-uppercase text-center text-white">Press + News</h2>
            </div>
        </section>
        <!--Inner banner start here-->
        <!--News bar start here-->
        <section class="newsbar py-50 pb-0">
            <div class="container">
                @foreach ($blogs as $blog)
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <div class="new-img">
                            @if ($blog->image)
                                
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="newsimg">
                            @else
                            <img src="https://source.unsplash.com/600x400?food" alt="newsimg">

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="news-content">
                            <h4 class="news-title text-uppercase"><a href="news_detail/{{ $blog->slug }}">{{ $blog->title }}</a></h4>
                            <h6 class="primary author text-uppercase">By: {{ $blog->creator }}</h6>
                            <p class="text-gray date"><small>{{ $blog->created_at->diffForHumans() }}</small></p>
                            <p class="news-description">{{ $blog->excerpt }}</p>
                            <div class="readmore"><a class="primary" href="news_detail/{{ $blog->slug }}">read more</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="numeric-bar">
                    <ul class="listing">
                        <li><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
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
