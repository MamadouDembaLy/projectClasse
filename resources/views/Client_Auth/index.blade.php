<!DOCTYPE html>
<html lang="en">

@include('Admin.pages.head');

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        @include('Admin.pages.header');
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
        @include('Admin.pages.side_bar')
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
        @include('Admin.pages.right_sidebar')
            <!-- Right sidebar Ends-->

            <div class="page-body">

                <!-- Container-fluid starts-->
                @yield('container')
                <!-- Container-fluid Ends-->

            </div>

            <!-- footer start-->
            @include('Admin.pages.footer')
            <!-- footer end-->
        </div>

    </div>

    @include('Admin.pages.js')

</body>

</html>