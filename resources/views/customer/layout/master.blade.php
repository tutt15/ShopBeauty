<!DOCTYPE html>
<html lang="en">
<head>
  <title>Beauty Cosmetic</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="{{asset('')}}"> 
  <link href="code/css/bootstrap.min.css" rel="stylesheet">
    <link href="code/css/font-awesome.min.css" rel="stylesheet">
    <link href="code/css/prettyPhoto.css" rel="stylesheet">
    <link href="code/css/price-range.css" rel="stylesheet">
    <link href="code/css/animate.css" rel="stylesheet">
  <link href="code/css/main.css" rel="stylesheet">
  <link href="code/css/responsive.css" rel="stylesheet">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="code/images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/vendor/slick/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="code/css/util.css">
  <link rel="stylesheet" type="text/css" href="code/css/main.css">
  <link rel="stylesheet" type="text/css" href="code/css/login.css" >
<!--===============================================================================================-->
</head>
<body class="animsition">
@include('customer.layout.header')
@yield('content')
@include('customer.layout.footer')
  <!-- Container Selection1 -->
  <div id="dropDownSelect1"></div>


<script src="code/js/jquery.js"></script>
  <script src="code/js/bootstrap.min.js"></script>
  <script src="code/js/jquery.scrollUp.min.js"></script>
  <script src="code/js/price-range.js"></script>
    <script src="code/js/jquery.prettyPhoto.js"></script>
    <script src="code/js/main.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="code/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="code/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="code/vendor/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="code/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="code/vendor/select2/select2.min.js"></script>
  <script type="text/javascript">
    $(".selection-1").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script type="text/javascript" src="code/vendor/slick/slick.min.js"></script>
  <script type="text/javascript" src="code/js/slick-custom.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="code/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="code/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="code/vendor/sweetalert/sweetalert.min.js"></script>
  <script type="text/javascript" src="code/js/login.js"></script>
  <script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
      // var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
      $(this).on('click', function(){
        var pro_id = $(this).find('button').attr('role');
        $.ajax
        ({
            url: '/addcartaj',
            // type: 'POST',              
            data: {
                "pro_id": pro_id,
            },
            success: function(result)
            {
              $('.cart-product').html(result);
            },
            error: function(data)
            {
                console.log(data);
            }
        });
        // swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
      $(this).on('click', function(){
        alert();
        swal(nameProduct, "is added to wishlist !", "success");
      });
    });
  </script>

<!--===============================================================================================-->
  <script src="code/js/main.js"></script>

</body>
</html>
