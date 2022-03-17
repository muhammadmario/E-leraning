<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/trix.css')}}">
    <title>Admin Dashbord</title>
</head>
<body class="font-inter relative min-h-screen md:flex"> 
    @include('dashboard.components.sidebar')
    
    @yield('content')
    

    <script src="js/custom.js"></script>
    <script type="text/javascript" src="{{asset('js/trix.js')}}"></script>
</body>
</html>

