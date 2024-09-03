<!DOCTYPE html>
<html lang="en">

@include('Front2.page.head')

<body>  

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    @include('Front2.page.header')
    <!-- End Header -->

        @yield('content')

    <!-- Start Footer
    ============================================= -->
    @include('Front2.page.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('Front2.page.js')
</body>
</html>
