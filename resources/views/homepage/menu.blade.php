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
                <h2 class="banner-title text-uppercase text-center text-white">Our Menu</h2>
            </div>
        </section>
        <!--Inner banner start here-->
        <!--Menu order start here-->
        <section class="order-menu py-110 pb-0" id="order-menu">
            <div class="container">
                <div class="btn-row mb-5">
                    <a href="contact.html" class="btn btn-primary btn-white">
                        planning a party? - book now
                    </a>
                    <a href="/menu/cetak_pdf" class="btn btn-primary" target="_blank">
                        download our full menu
                    </a>
                </div>
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
        <section class="book-order-bar pt-5 py-110">
            <div class="container">
                <div class="titlebar">
                    <h4 class="text-default text-center"><Span class="primary">KITCHEN OPEN</Span>: MON-SAT 12-10PM / SUN
                        12PM-9:30PM</h4>
                </div>
            </div>
        </section>
        <!--Book order primary section ends here-->
        
        <!--Reservation start here-->
        <section class="Reservation-bar private-dining py-210 parallex">
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
                            <select type="text" value="13:00" class="form-control" placeholder="../../.." required>
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
        <!--Testimonial start here-->
        <section class="Testimonial-block border-zigzag-up primary-bg py-110 content-white">
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
