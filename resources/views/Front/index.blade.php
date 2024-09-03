<!DOCTYPE html>
<html lang="fr">

@include('Front.page.head')

<body class="bg-light">



<!--header start-->
@include('Front.page.header')
<!--header end-->

<!--main-->
@yield('content')

<!-- footer start -->
@include('Front.page.footer')
<!-- footer end -->

<!--Newsletter modal popup start-->
@include('Front.page.newsletter')
<!--Newsletter Modal popup end-->

@include('Front.page.quickView')

<!-- edit product modal start-->
@include('Front.page.editProduct')
<!-- edit product modal end-->

<!-- Add to cart bar -->
@include('Front.page.addToCart')
<!-- Add to cart bar end-->

<!-- wishlistbar bar -->
@include('Front.page.whishlist')
<!-- wishlistbar bar end-->

<!-- My account bar start-->
@include('Front.page.myAcountBar')
<!-- Add to account bar end-->

<!-- add to  setting bar  start-->
@include('Front.page.addToSetting')
<!-- add to  setting bar  end-->

<!-- cookie bar start -->
@include('Front.page.cookie')
<!-- cookie bar end -->

<!-- notification product -->
@include(('Front.page.notificationProduct'))
<!-- notification product -->

@include('Front.page.js')


</body>
</html>
