<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from euclidesoftwaresolutions.com/themeforest/ess-restaurant/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 04:38:05 GMT -->

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
    <link rel="stylesheet" href="/css/payment.css" type="text/css">
    <link rel="stylesheet" href="/css/responsive.css" type="text/css">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

</head>
<!-- <body style="background-color: salmon;"> -->
@include('partials.navbar')
@yield('container')
@include('partials.footer')


<script src="/js/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="/js/jquery.min.js"></script>
<script src="../../../cdn.jsdelivr.net/npm/%40popperjs/core%402.10.2/dist/umd/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/backtotop.js"></script>

@if (session('failed'))
    <script>
        $(document).ready(function() {
            $("#ModalSearchCode").modal('show');
        });
    </script>
@endif
</body>
<!-- Mirrored from euclidesoftwaresolutions.com/themeforest/ess-restaurant/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 04:38:30 GMT -->

</html>
