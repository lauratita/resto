@extends('layouts.main')
@section('container')
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i
            class="fa fa-caret-up" aria-hidden="true"></i>
    </a>

    <!--Inner banner start here-->
    <section class="banner-inner border-zigzag-up" style="background-image: url('/images/slide2.webp');">
        <div class="container">
            <h2 class="banner-title text-uppercase text-center text-white">Payment</h2>
        </div>
    </section>
    <!--Inner banner start here-->

    @if ($payment)
        <div class="kontainer">
            <form action="image" method="POST" id="formUploadPayment" enctype="multipart/form-data">
                @csrf
                @method('put')
                @foreach ($payment as $order)
                    <div class="row">
                        <h4 class="text-center">Payment</h4>
                        @if (session('createOrder'))
                            <div class="alert alert-secondary" role="alert">
                                The code has been sent to your email.
                            </div>
                        @elseif ($order->status == 2)
                            <div class="alert alert-info" role="alert">
                                <h6 class="alert-heading">Upload payment is successful !!</h6>
                                <p class="p-0 m-0">Please wait for confirmation from admin. If there is a problem, you can
                                    contact us.</p>
                            </div>
                        @elseif ($order->status == 3)
                            <div class="alert alert-success" role="alert">
                                <h6 class="alert-heading">Payment has been verified !!</h6>
                                <p class="p-0 m-0">Thank you for order.</p>
                            </div>
                        @endif
                        <div class="col" style="margin-left: 100px">
                            <div class="labelBox">
                                <span>Code :</span>
                                <span> <b>{{ $order->code }}</b> </span>
                            </div>
                            <div class="labelBox">
                                <span>Name :</span>
                                <span> {{ $order->name }} </span>
                            </div>
                            <div class="labelBox">
                                <span>Email :</span>
                                <span> {{ $order->email }} </span>
                            </div>
                            <div class="labelBox">
                                <span>No Hp :</span>
                                <span> {{ $order->no_hp }} </span>
                            </div>
                            <div class="labelBox">
                                <span>Price :</span>
                                <span>Rp. {{ $order->price }} </span>
                            </div>
                        </div>
                        <div class="col" style="margin-right: 100px">
                            <div class="labelBox">
                                <span>Card Accepted :</span>
                                <img src="/images/card_img.png">
                            </div>
                            <div class="labelBox">
                                <span>Date :</span>
                                <span> {{ $order->date }} </span>
                            </div>
                            <div class="labelBox">
                                <span>Time :</span>
                                <span> {{ $order->time }} </span>
                            </div>
                            <div class="labelBox">
                                <span>People :</span>
                                <span> {{ $order->people }} </span>
                            </div>

                        </div>

                    </div>
                    @if ($order->status == 1)
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-md-6 ">
                                    <img class="img-preview img-fluid mb-2">
                                </div>
                            </div>
                            <div class="buton text-center">
                                Upload Payment
                                <input class="form-control" type="file" id="image" name="image" accept="image/*"
                                onchange="previewImage()">
                            </div>
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            <input type="hidden" name="code" value="{{ $order->code }}">
                        </div>
                        <input type="button" value="Submit" id="btn" onclick="paymentUpload()" class="submit-btn">
                    @endif
        </div>
    @endforeach

    </form>
    </div>
@else
    <div class="container bg-info rounded-pill p-4 mb-3">
        <div class="row">
            <div class="col-md-12 justify-content-center ">
                <p class="text-center fw-bold">The Code Has Been Sent on Your Email !!!</p>
            </div>
        </div>
    </div>
    @endif
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/blogs/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        var comboBox = document.getElementById('image');
        var btnSubmit = document.getElementById('btn');
        // btnSubmit.disabled = !comboBox.value;
        btnSubmit.disabled = true


        function paymentUpload() {
            if (document.getElementById('image').files.length) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Make sure the photo evidence sent is correct!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Sure'
                }).then((result) => {
                    if (result.isConfirmed) {

                        document.getElementById('formUploadPayment').submit()

                    }
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "You haven't uploaded proof of payment yet",
                    
                })
            }
        }
    </script>
@endsection
