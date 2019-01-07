<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog 2</title>
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}"> <!-- app.css is compiled from app.scss -->
    <link rel="stylesheet" href="{{asset('public/css/custom_add/bootstrap.min.css')}}">
    <style>
        .invalid-feedback {display: block;}
    </style>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
    



    @include('inc.footer')

    <!-- Call Vue js, this type is calling from public folder -->
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <script src="{{ asset('public/js/app.js') }}"></script>  <!-- Vue.js -->

    <!-- <script src="js/app.js"></script> -->
    <script src="{{ asset('public/js/custom_js_add/bootstrap.min.js') }}"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script> -->

</body>
</html>