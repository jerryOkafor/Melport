<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
     <!-- Favicon Icon -->

    <!-- BOOTSTRAP CORE CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- ION ICONS STYLES -->
    <link href="{{asset('css/ionicons.css')}}" rel="stylesheet" />
    
    <!--ADDING BOOTBOX CUSTUM STYLE-->
     <link href="{{asset('css/bootbox.css')}}" rel="stylesheet" />
     
     <!-- FONT AWESOME ICONS STYLES -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    
    <!--FORM VALIDATOR CSS-->
     <link href="{{asset('css/formValidation.min.css')}}" rel="stylesheet" />
     <!-- IE10 viewport hack  -->
    <script src="{{asset('js/ie-10-view-port.js')}}"></script>
    <!-- HTML5 Shiv and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js')}}/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    @yield('head')
</head>

<body>
  @yield('content')
    
<!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  SCRIPTS -->
    <script src="{{asset('js/jquery-1.11.1.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    
    <!--ADDING THE DIALOG-->
    <script src="{{asset('js/bootbox.js')}}"></script>
    
    <!-- CUSTOM SCRIPTS   -->
    <script src="{{asset('js/main.js')}}"></script>
    
    @yield('end')
</body>
</html>
