<!--header start from here-->
<header class="header-area sticky">
    <div class="container">
        <div class="row">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand p-0" href="index.html"><img src="/images/logo.webp" alt="logo" title="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item me-5">
                            <a class="nav-link p-0 text-white {{ $active === 'home' ? 'active' : '' }}"
                                aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link p-0 text-white {{ $active === 'menu' ? 'active' : '' }}"
                                href="/menu">Menu</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link p-0 text-white {{ $active === 'gallery' ? 'active' : '' }}"
                                href="/gallery">Gallery</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link p-0 text-white {{ $active === 'story' ? 'active' : '' }}"
                                href="/story">Story</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link p-0 text-white {{ $active === 'news' ? 'active' : '' }}"
                                href="/news">News</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link p-0 text-white {{ $active === 'contact' ? 'active' : '' }}"
                                href="/contact">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalSearchCode"
                            type="button">Code Payment</button>
                        
                        <div class="modal fade" id="ModalSearchCode" tabindex="-1"
                            aria-labelledby="ModalSearchCodeLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalSearchCodeLabel">Search Order</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="/showOrder" method="POST"
                                            class="">
                                            @csrf
                                            @if (session()->has('failed'))
                                                <div class="alert alert-warning text-center" role="alert">
                                                    {{ session('failed') }}
                                                    <br>
                                                    Please Contact Admin!
                                                </div>
                                            @endif
                                            <div class="row ">
                                                <div class="col-lg-12 formrow input-group-lg mb-3">
                                                    {{-- <input type="text" class="form-control w-100"
                                                        placeholder="Code Here" name="code" required> --}}
                                                    <input type="text" class="form-control w-100" placeholder="Code Here" name="code" required>
                                                </div>
                                                <div class="col-lg-12 formrow mb-3">
                                                    <div class="col-lg-12 formrow formbtn">
                                                        <button type="submit" class="btn btn-primary w-100">Search Order</button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Book a Table Modal -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--header ends from here-->
