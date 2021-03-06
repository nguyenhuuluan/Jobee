<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Post a job position or create your online resume by TheJobs!">
  <meta name="keywords" content="">

  <title>{{$title}}</title>

  <!-- Styles -->
  <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/thejobs.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/alpha.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="{{ asset('/apple-touch-icon.png') }}">
  <link rel="icon" href="{{ asset('assets/img/favicon.ico') }} ">
</head>
{{-- @extends('layouts.masterlayout')
@section('content') --}}
<body class="nav-on-header smart-nav">

 <!-- Navigation bar -->
 @include('layouts2.header')
 <!-- END Navigation bar -->


 <!-- Site header -->
 @include('layouts2.search-header')
 <!-- END Site header -->


 <!-- Main container -->
 <main>

  <!-- Recent jobs -->
  @yield('content')
  <!-- <section></section> -->
  <!-- END Recent jobs -->
  <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url({{ asset('assets/img/bg-pattern.png') }} )">
    @include('layouts2.general-value')
  </section>
  <!-- END Facts -->


  <!-- How it works -->
  <section>
    @include('layouts2.higlight-companies')
  </section>
  <!-- END How it works -->


  <!-- Categories -->
  <section class="bg-alt">
   @include('layouts2.blog')
    <!-- /blog -->
  </section>
  <!-- END Categories -->

  <!-- START TESTIMONIAL -->
  @include('layouts2.testimonial')
  <!-- END TESTIMONIAL -->
</main>
<!-- END Main container -->


<!-- Site footer -->
@include('layouts2.footer')

<!-- Facts -->



<!-- Back to top button -->
<a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
<!-- END Back to top button -->

<!-- Scripts -->
<script src="{{ asset('assets/js/app.min.js') }} "></script>
<script src="{{ asset('assets/js/thejobs.js') }} "></script>
<script src="{{ asset('assets/js/custom.js') }} "></script>
<script type="text/javascript" src="{{ asset('assets/js/alpha.js') }} "></script>

@if(Session::has('resigter-success') || Session::has('email-invalid') || Session::has('email-exist'))

<script type="text/javascript" charset="utf-8">
  $("#id02").modal("show");

  $('.nav-tabs li:first-child').removeClass('active');
  $('.nav-tabs li:last-child').addClass('active');
  modalSignInOut('dangky');


  // $('.nav-tabs li:last-child a').attr("aria-expanded", true);
  //$('.login-block').css( "display", "none");
  

</script>
@endif

<script type="text/javascript">
  
    $('#testimonials').alpha({
      layout: 'alt',
      delay : 5300
    });
  
</script>

@yield('scripts')

</body>
</html>
