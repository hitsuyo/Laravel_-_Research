<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <!-- <link rel="stylesheet" href="public/css/app.css"> -->
    <link rel="stylesheet" href="public/css/custom_add/bootstrap.min.css">
</head>
<body>
    @include('inc.navbar')

    <div class="container">
        <div class="row">
            <div>
                <div class="col-md-8 col-lg-8">
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
    </div>
</body>
</html>