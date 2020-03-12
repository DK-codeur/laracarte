<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('/css/bootstrap/mdb.min.css')}}">
   <link rel="stylesheet" href="{{asset('/css/fontawesome/all.min.css')}}">
   <title>{{page_title($title ?? '')}}</title>
   {{-- <title>Laracarte {{isset($title) ? '|' . $title : ''}}</title> --}}

   <style>
      footer {
         margin: 4em 0;
      }
   </style>

</head>
<body>
   @include('layouts/partials/_nav')
   
   @yield('content')

   @include('layouts/partials/_footer')

   <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
   <script src="{{asset('/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('/js/mdb.min.js')}}"></script>
   <script src="{{asset('/js/all.min.js')}}"></script>

   @include('flashy::message')
   
</body>
</html>