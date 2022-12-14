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
                
                <div class="numeric-bar d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </section>
        <!--News bar ends here-->
    </main>
@endsection
