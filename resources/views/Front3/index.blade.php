<!DOCTYPE html>
<html lang="en">
@include('Front3.pages.head')

<body>
    <!-- Preloader start -->
    @include('Front3.pages.preloader')
    <!-- Preloader end -->

    <!-- Header Area Start -->
    @include('Front3.pages.header')
    <!-- Header Area End -->

    @yield('content')

    <!-- Footer Area Start -->
    @include('Front3.pages.footer')
    <!-- Footer Bottom Area End -->

    @include('Front3.pages.js')
</body>

</html>
