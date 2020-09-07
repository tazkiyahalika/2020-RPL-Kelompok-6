<!DOCTYPE html>
<html>
<head>
@include('layouts.head')
</head>
<body class="hold-transition skin-blue sedebar-mini">
<div class="wrapper"> 

<header class="main-header">
  @include('layouts.header')
</header>
<aside class="main-sidebar">
  @include('layouts.sidebar')
</aside>

<div class="content-wrapper">
<section class="content">
  <div class="row">
    <div class="col-md-12">
<div class="pull-right"> 
</div> 
</div> 
</div> 

@yield('content')


</section> 
</div>
</div>

@include('layouts.script')

@yield('scripts')
</body>
</html>