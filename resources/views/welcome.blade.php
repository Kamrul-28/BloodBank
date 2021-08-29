<!DOCTYPE html>
<html>
<head>
<title>BloodBank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
<!--[if lt IE 9]>
<link href="layout/styles/ie/ie8.css" rel="stylesheet" type="text/css" media="all">
<script src="layout/scripts/ie/css3-mediaqueries.min.js"></script>
<script src="layout/scripts/ie/html5shiv.min.js"></script>
<![endif]-->
</head>
<body class="">
    {{-- Header Section   --}}
    @include('site.pertials.header')
    {{-- Navigation --}}
    @include('site.pertials.navigation')
    {{-- Jumbotron --}}
    @include('site.pertials.jumbotron')
<!-- content -->
<div class="wrapper row3">
  <div id="container">
   
    <!-- About Section -->
    @include('site.pertials.about')
    <div class="clear"></div>
  </div>
</div>

    @include('site.pertials.footer')

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js"><\/script>\
<script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
<script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script>
<script src="layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="layout/scripts/custom.js"></script>
</body>
</html>