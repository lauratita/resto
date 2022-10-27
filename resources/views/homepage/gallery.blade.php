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
                <h2 class="banner-title text-uppercase text-center text-white">Gallery</h2>
            </div>
        </section>
        <!--Inner banner start here-->
        <!--Gallery start here-->
        <div class="gallery-bar py-110">
            <div class="container">
                <div class="row ">
                    @foreach ($galleries as $gallery)
                    <div class="col-md-4 ">
                            
                        <div class="gallery-img mb-4">
                            @if ($gallery->image)
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="gallery-img">
                            @else
                            <img src="https://source.unsplash.com/600x400?food" alt="gallery-img">
                            @endif
                            <div class="gallery-overlay" onclick="openModal();currentSlide({{ $loop->iteration }})">
                                <h4>{{ $gallery->title }}</h4>
                                <p>{{ $gallery->description }}</p>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
                <div id="myModal" class="gallerymodal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">
                        @foreach ($galleries as $gallery)
                            
                        <div class="mySlides">
                            <div class="numbertext">{{ $loop->iteration }} / {{ $loop->count }}</div>
                            @if ($gallery->image)
                            <img src="{{ asset('storage/' . $gallery->image) }}" style="width:100%">
                            {{-- <img src="{{ asset('storage/' . $gallery->image) }}" alt="gallery-img"> --}}
                            @else
                            <img src="https://source.unsplash.com/600x400?food" style="width:100%">
                            @endif
                            
                        </div>
                        @endforeach
                        
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Gallery ends here-->
    </main>
@endsection
