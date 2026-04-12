<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Dr.BR Ambedkar ITI</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">


   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ url ('assets/img/logo/favicon.png')}}">

   <!-- CSS Here -->
   <link rel="stylesheet" href="{{ url ('assets/css/bootstrap.min.css')}}">        
   <link rel="stylesheet" href="{{ url ('assets/css/font-awesome-pro.css')}}">     
   <link rel="stylesheet" href="{{ url ('assets/css/swiper-bundle.min.css')}}">   
   <link rel="stylesheet" href="{{ url ('assets/css/slick.css')}}">              
   <link rel="stylesheet" href="{{ url ('assets/css/magnific-popup.css')}}">      
   <link rel="stylesheet" href="{{ url ('assets/css/nice-select.css')}}">          
   <link rel="stylesheet" href="{{ url ('assets/css/custom-animation.css')}}">

   <!-- Theme / Main CSS -->
   <link rel="stylesheet" href="{{ url ('assets/css/spacing.css')}}">          
   <link rel="stylesheet" href="{{ url ('assets/css/main.css')}}">   

</head>

<body>

@include('components.navbar')
@yield('content')

@include('components.newsletter')
@include('components.footer')





 <!-- JS  Libraries -->
   <script src="{{ url ('assets/js/jquery.js')}}"></script>                     
   <script src="{{ url ('assets/js/bootstrap.bundle.min.js')}}"></script>      
   <script src="{{ url ('assets/js/purecounter.js')}}"></script>          
   <script src="{{ url ('assets/js/range-slider.js')}}"></script>          
   <script src="{{ url ('assets/js/nice-select.js')}}"></script>             
   <script src="{{ url ('assets/js/swiper-bundle.min.js')}}"></script>         
   <script src="{{ url ('assets/js/isotope-pkgd.js')}}"></script>     
   <script src="{{ url ('assets/js/slick.min.js')}}"></script>            
   <script src="{{ url ('assets/js/wow.js')}}"></script>                
   <script src="{{ url ('assets/js/countdown.js')}}"></script>                
   <script src="{{ url ('assets/js/magnific-popup.js')}}"></script>                
   <script src="{{ url ('assets/js/imagesloaded-pkgd.js')}}"></script>                
   <script src="{{ url ('assets/js/parallax.js')}}"></script>                

   <!-- Custom JS -->
   <script src="{{ url ('assets/js/slider.js')}}"></script>                
   <script src="{{ url ('assets/js/main.js')}}"></script>  


</body>

</html>

