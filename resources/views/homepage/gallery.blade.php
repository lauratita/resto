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
                    <div class="col-md-4 ">
                        <div class="gallery-img mb-4">
                            <img src="images/1.webp" alt="gallery-img">
                            <div class="gallery-overlay " onclick="openModal();currentSlide(1)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/2.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(2)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/3.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(3)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/3-2.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(4)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/3-1.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(5)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-img mb-4">
                            <img src="images/4.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(6)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/5.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(7)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/6.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(8)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/4-2.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(9)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/4-1.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(10)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-img mb-4">
                            <img src="images/7.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(11)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/8.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(12)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/9.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(13)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/5-2.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(14)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                        <div class="gallery-img mb-4">
                            <img src="images/5-1.webp" alt="gallery-img">
                            <div class="gallery-overlay" onclick="openModal();currentSlide(15)">
                                <h4>Loream Ipsum</h4>
                                <p>loream ipsum is a dummy content</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModal" class="gallerymodal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">
                        <div class="mySlides">
                            <div class="numbertext">1 / 15</div>
                            <img src="images/1.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">2 / 15</div>
                            <img src="images/2.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">3 / 15</div>
                            <img src="images/3.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">4 / 15</div>
                            <img src="images/3-2.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 15</div>
                            <img src="images/3-1.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 15</div>
                            <img src="images/4.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 15</div>
                            <img src="images/5.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 15</div>
                            <img src="images/6.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">9 / 15</div>
                            <img src="images/4-2.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">10 / 15</div>
                            <img src="images/4-1.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">11 / 15</div>
                            <img src="images/7.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">12 / 15</div>
                            <img src="images/8.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">13 / 15</div>
                            <img src="images/9.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">14 / 15</div>
                            <img src="images/5-2.webp" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">15 / 15</div>
                            <img src="images/5-1.webp" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Gallery ends here-->
        <!--Instagram-new section start here-->
        <section class="Instagram-new py-110 pt-0">
            <div class="container">
                <hr>
                <div class="text-center pt-5">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <p class=" mb-0"><a href="#" class="text-default">More? follow us on Instagram.</a></p>
                </div>
            </div>
        </section>
        <!--Instagram-new section ends here-->
    </main>
@endsection
