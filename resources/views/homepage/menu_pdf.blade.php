<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant | Author's Cuisine</title>
    <!--css links-->
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/font/stylesheet.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/font/flaticon.css">
    <link rel="stylesheet" href="/css/aos.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="/css/responsive.css" type="text/css">

    {{-- Trix Editor --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
  
 </head>
 <body>
        <!--Inner banner start here-->
        <!--Menu order start here-->
        <section class="order-menu  pb-0" id="order-menu">
            <div class="container p-4">
                <div class="tabs-bar text-center">
                    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                aria-selected="true">All Menu</button>
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
                    </div>
                </div>
            </div>
        </section>
        <!--Menu order ends here-->

        
    </main>
    <script>
        window.print();
    </script>
    <script src="/js/aos.js"></script>
    <script> AOS.init();</script>
    <script src="/js/jquery.min.js"></script>
    <script src="../../../cdn.jsdelivr.net/npm/%40popperjs/core%402.10.2/dist/umd/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/backtotop.js"></script>
</body>
<!-- Mirrored from euclidesoftwaresolutions.com/themeforest/ess-restaurant/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 04:38:30 GMT -->
</html>
