@extends('layouts.main')
@section('container')
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i
            class="fa fa-caret-up" aria-hidden="true"></i>
    </a>

    <main>
        <!--banner start here-->
        <section class="home-banner border-zigzag-up">
            <div id="banner-slide" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <img src="images/slide1.webp" alt="Los Angeles" class="img-fluid w-100">
                        <div class="carousel-caption my-auto">
                            <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                            <h2 class="text-white">Restauran mahal</h2>
                            <div class="address mb-5">
                                <p class="text-uppercase">1243th Avenue, London</p>
                                <p class="text-uppercase">Tel: 1 (234) 5555</p>
                            </div>
                            <div class="banner-btn">
                                <a href="/menu" class="btn btn-outline">View Our Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item ">
                        <img src="images/slide2.webp" alt="Los Angeles" class="img-fluid w-100">
                        <div class="carousel-caption my-auto">
                            <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                            <h2 class="text-white">Loved by people</h2>
                            <div class="address mb-5">
                                <p class="text-uppercase">1243th Avenue, London</p>
                                <p class="text-uppercase">Tel: 1 (234) 5555</p>
                            </div>
                            <div class="banner-btn">
                                <a href="/menu" class="btn btn-outline">View Our Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item ">
                        <img src="images/slide3.webp" alt="Los Angeles" class="img-fluid w-100">
                        <div class="carousel-caption my-auto">
                            <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                            <h2 class="text-white">Loved by people</h2>
                            <div class="address mb-5">
                                <p class="text-uppercase">1243th Avenue, London</p>
                                <p class="text-uppercase">Tel: 1 (234) 5555</p>
                            </div>
                            <div class="banner-btn">
                                <a href="/menu" class="btn btn-outline">View Our Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner-slide" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#banner-slide" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </section>
        <!--banner ends here-->
        <!--our story start here-->
        <section class="py-110 story-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="story-img-bar">
                                    <img src="images/story-img-1.webp" alt="story-img-1">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="story-img-bar mt-5">
                                    <img src="images/story-img-2.webp" alt="story-img-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="story-detail ps-lg-4">
                            <h5 class="font-cursive mb-0 text-start primary">Discover</h5>
                            <h2 class="text-uppercase">Our Story</h2>
                            <p class="font-Av mb-5">Multiply isn't night sixth under second second open he darkness said
                                beast, without whales every herb sea place light life from divide isn't. Deep give greater.
                                Darkness have fifth third open over itself. Third great make form is waters were. Midst
                                green very. </p>
                            <div class="story-btn"><a href="/story" class="btn btn-primary">Read our full Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our story ends here-->
        <!--gallery start here-->
        <section class="gallery-block py-60 primary-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="gallery-bar border border-5">
                            <img src="images/gallery-left-img.webp" alt="img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <a href="/gallery" class="gallery-content border border-5">
                            <h5 class="font-cursive mb-0">View our</h5>
                            <h2 class="text-white text-uppercase">Gallery</h2>
                            <p>food & Venue</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="gallery-bar border border-5">
                            <img src="images/gallery-ryt-img.webp" alt="img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--gallery ends here-->
        <!--Testimonial start here-->
        <section class="Testimonial-block py-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="testimonial-bar text-center">
                                        <i class="primary fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar">The set one creepeth given air behold bring herb so thing
                                            sixth spirit moveth lesser thing air without cattle itself darkness greater.
                                        </p>
                                        <h6 class="review-name primary font-Av">– Javed Harji</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-bar text-center">
                                        <i class="primary fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar">The set one creepeth given air behold bring herb so thing
                                            sixth spirit moveth lesser thing air without cattle itself darkness greater.
                                        </p>
                                        <h6 class="review-name primary font-Av">– John Deo</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-bar text-center">
                                        <i class="primary fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="reviewbar">The set one creepeth given air behold bring herb so thing
                                            sixth spirit moveth lesser thing air without cattle itself darkness greater.
                                        </p>
                                        <h6 class="review-name primary font-Av">– Michel Richard</h6>
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
        <section class="private-dining py-180 border-zigzag-up parallex">
            <div class="container text-center">
                <h4 class="text-white">PRIVATE DINING</h4>
                <p class="text-white mb-5">YOUR EVENT, YOUR WAY</p>
                <div class="btn-row">
                    <a href="contact.html" class="btn btn-primary btn-white"><i class="fa fa-envelope"
                            aria-hidden="true"></i>
                        Enquire now</a>
                    <a href="tel:0123-456-789" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i>
                        0123-456-789</a>
                </div>
            </div>
        </section>
        <!--private dining ends here-->
        <!--Menu order start here-->
        <section class="order-menu py-110 ">
            <div class="container">
                <h4 class="primary text-center mb-lg-5">our Menu</h4>
                
                <div class="tabs-bar text-center">
                    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                aria-selected="true">All Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Food-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Food" type="button" role="tab" aria-controls="pills-Food"
                                aria-selected="false">Food Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Drink-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Drink" type="button" role="tab" aria-controls="pills-Drink"
                                aria-selected="false">Drink Menu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Dessert-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Dessert" type="button" role="tab" aria-controls="pills-Dessert"
                                aria-selected="false">Desserts</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Packages-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Packages" type="button" role="tab"
                                aria-controls="pills-Packages" aria-selected="false">Packages</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                            aria-labelledby="pills-all-tab">
                            <!--All menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Food Menu</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_food as $menu_food)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_food->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
                                                            </div>
                                                            <h5>{{ $menu_food->title }}</h5>
                                                            <p>{{ $menu_food->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_food->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Desserts</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_dessert as $menu_dessert)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_dessert->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
                                                            </div>
                                                            <h5>{{ $menu_dessert->title }}</h5>
                                                            <p>{{ $menu_dessert->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_dessert->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Drink Menu</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_drink as $menu_drink)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_drink->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
                                                            </div>
                                                            <h5>{{ $menu_drink->title }}</h5>
                                                            <p>{{ $menu_drink->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_drink->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Packages</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_package as $menu_package)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_package->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
                                                            </div>
                                                            <h5>{{ $menu_package->title }}</h5>
                                                            <p>{{ $menu_package->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_package->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--All menu-->
                        </div>
                        <div class="tab-pane fade show" id="pills-Food" role="tabpanel"
                            aria-labelledby="pills-Food-tab">
                            <!--Food menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Food Menu</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_food as $menu_food)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_food->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
                                                            </div>
                                                            <h5>{{ $menu_food->title }}</h5>
                                                            <p>{{ $menu_food->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_food->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Food menu-->
                        </div>

                        <div class="tab-pane fade" id="pills-Drink" role="tabpanel" aria-labelledby="pills-Drink-tab">
                            <!--Drink menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div
                                            class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                            <h5 class="mb-4 cursive-title primary">Drink Menu</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_drink as $menu_drink)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_drink->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
                                                            </div>
                                                            <h5>{{ $menu_drink->title }}</h5>
                                                            <p>{{ $menu_drink->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_drink->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Drink menu-->
                        </div>

                        <div class="tab-pane fade" id="pills-Packages" role="tabpanel"
                            aria-labelledby="pills-Packages-tab">
                            <!--Package menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Packages</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_package as $menu_package)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_package->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
                                                            </div>
                                                            <h5>{{ $menu_package->title }}</h5>
                                                            <p>{{ $menu_package->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_package->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Package menu-->
                        </div>

                        <div class="tab-pane fade" id="pills-Dessert" role="tabpanel"
                            aria-labelledby="pills-Dessert-tab">
                            <!--Dessert menu-->
                            <div class="menubar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div
                                            class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                            <h5 class="mb-4 cursive-title primary">Desserts</h5>
                                            <ul class="menu-listing">
                                                @foreach ($menus_dessert as $menu_dessert)
                                                    <li class="d-flex align-items-start">
                                                        <div class="leftbar">
                                                            <div style="width: 50px">
                                                                <img src="{{ asset('storage/' . $menu_dessert->image) }}"
                                                                    alt="" class="img-fluid mt-3 d-block">
                                                            </div>
                                                            <h5>{{ $menu_dessert->title }}</h5>
                                                            <p>{{ $menu_dessert->description }}</p>
                                                        </div>
                                                        <div class="rightbar d-flex align-items-center">
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                            <h5>Rp. {{ $menu_dessert->price }}</h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Dessert menu-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Menu order ends here-->
        <!--Book order primary section start here-->
        <section class="book-order-bar pb-5">
            <div class="container">
                <div class="titlebar">
                    <h4 class="text-default text-center font-Av"><Span class="primary">KITCHEN OPEN</Span>: MON-SAT
                        12-10PM / SUN 12PM-9:30PM</h4>
                </div>
                <div class="btn-row mt-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-primary btn-white">
                        Book a Table</a>
                    <a href="tel:0123-456-789" class="btn btn-black">
                        Order Online</a>
                </div>
            </div>
        </section>
        <!--Book order primary section ends here-->
        <!--Instagram Gallery start here-->
        <section class="instagram-gallery-bar pt-5">
            <div class="container">
                <h4 class="primary-title text-uppercase">instagram gallery</h4>
                <h6 class="text-center"><a href="#" class="text-gray">@ ess-restaurant </a></h6>
            </div>
            <div class="container-fluid mt-5 p-0">
                <div class="row m-0">
                    <div class="col-lg-3 p-0 col-md-6">
                        <div class="insta-box">
                            <img src="images/insta-1.webp" alt="instagram-img">
                            <div class="overlay">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 col-md-6">
                        <div class="insta-box">
                            <img src="images/insta-2.webp" alt="instagram-img">
                            <div class="overlay">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 col-md-6">
                        <div class="insta-box">
                            <img src="images/insta-3.webp" alt="instagram-img">
                            <div class="overlay">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 col-md-6">
                        <div class="insta-box">
                            <img src="images/insta-4.webp" alt="instagram-img">
                            <div class="overlay">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Instagram Gallery ends here-->
        <!--Rule-war section start here-->
        <section class="rule-war py-130 primary-bg border-zigzag-up">
            <div class="container">
                <h4 class="text-white text-center mb-0">Rule were their evening in lesser so good said they're fowl
                    greater.<br> Sixth their above kind male there also likeness great there own.</h4>
            </div>
        </section>
        <!--Rule-war section ends here-->
        <!--Press-News start here-->
        <section class="Press-news py-110">
            <div class="container">
                <h4 class="text-default text-center mb-lg-4">Press + News</h4>
                <div class="row mt-5">
                    <div class="col-lg-4 press-news-box border-end text-center">
                        <h6 class="primary text-uppercase">Fish Waters Heaven Day</h6>
                        <h5 class="text-uppercase">Whales Fruitful Us Them Wherein Dominion Green Lesser Male Whales the
                            Beginning Him</h5>
                        <p>His evening first, place gathered. Over sixth subdue living seasons deep deep tree great darkness
                            likeness herb shall evening night moved bearing. Divide appear have the you're doesn't form
                            yielding two. Air shall saying above have won't whose moved you're. Made stars female every
                            multiply he third give. Male, you own brought there can't face female it and him, signs face
                            evening good morning they're. </p>
                        <div class="readmore">
                            <a href="news-detail.html" class="primary">read more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 press-news-box text-center">
                        <h6 class="primary text-uppercase">Third Evening Likeness Herb</h6>
                        <h5 class="text-uppercase">You Of Fruitful Wherein Was Fifth Abundantly Greater</h5>
                        <p>Whales light darkness they're fill life isn't. Divide. Morning yielding won't thing you creeping
                            life grass He seas after. So winged created heaven great he hath. Green us over behold.</p>
                        <p>The replenish second open female there. Night and them years, dominion brought land appear him
                            signs brought let for give. Make morning abundantly don't. Seed green divide very fifth. Over.
                        </p>
                        <div class="readmore">
                            <a href="news-detail.html" class="primary">read more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 press-news-box border-start text-center">
                        <h6 class="primary text-uppercase">Upon Light Dry</h6>
                        <h5 class="text-uppercase">So Called Moveth Blessed Good Bearing Created Cattle Land Days Place
                        </h5>
                        <p>Fruit firmament To great moved seas spirit fly doesn't his. Fourth void great void waters spirit
                            two set gathering also lights so i herb. </p>
                        <p>Place the morning male called living winged there called beginning man brought. Itself gathering
                            moveth great. She'd is blessed yielding seas place them stars creeping, bearing you'll replenish
                            firmament. Won't blessed.</p>
                        <div class="readmore">
                            <a href="news-detail.html" class="primary">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Press-News ends here-->
        <!--Reservation start here-->
        <section class="Reservation-bar private-dining py-210 border-zigzag-up parallex">
            <div class="container">
                <h4 class="text-white text-center mb-5 text-uppercase">Make a Reservation</h4>
                <form class="reservation-form needs-validation" novalidate>
                    <div class="row">
                        <div class="col-lg-3 formrow">
                            <input type="date" class="form-control w-100" placeholder="mm/dd/yyyy" required
                                id="date">
                            <!-- <div class="input-group-prepend">
                               <img src="images/calender.png" alt="icon">
                            </div> -->
                        </div>
                        <div class="col-lg-3 formrow">
                            <!-- <input type="time" value="13:00" class="form-control w-100" required placeholder="../../.." id="time" > -->
                            <div class="arrowadd">
                                <select type="text" value="13:00" class="form-control" placeholder="../../.."
                                    required>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                    <option>12:30</option>
                                    <option>01:00</option>
                                    <option>01:30</option>
                                    <option>02:00</option>
                                    <option>02:30</option>
                                    <option>03:00</option>
                                    <option>03:30</option>
                                    <option>04:00</option>
                                    <option>04:30</option>
                                    <option>05:00</option>
                                    <option>05:30</option>
                                    <option>06:00</option>
                                    <option>06:30</option>
                                    <option>07:00</option>
                                    <option>07:30</option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                    <option>10:00</option>
                                </select>
                            </div>
                            <div class="input-group-prepend">
                                <img src="images/clock.png" alt="icon">
                            </div>
                        </div>
                        <div class="col-lg-3 formrow">
                            <div class="arrowadd">
                                <select type="text" class="form-control" required>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="input-group-prepend">
                                <img src="images/user.png" alt="icon">
                            </div>
                        </div>
                        <div class="col-lg-3 formrow formbtn">
                            <button type="submit" class="btn btn-primary w-100">Book a Table</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--Reservation ends here-->
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
