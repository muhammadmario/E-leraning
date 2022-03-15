<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <title>Admin Dasbord</title>
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="font-inter relative min-h-screen md:flex"> 
    @include('dashboard.components.sidebar')
    <div class="flex-1 px-2 mt-14 md:mt-0 text-2xl bg-indigo-50 min-h-screen ">
        @yield('content')
    </div>

    <script>
        const btn= document.querySelector(".mobile-menu-button");
        const sidebar = document.querySelector(".sidebar");

        btn.addEventListener("click",()=>{
            sidebar.classList.toggle("-translate-x-full")
        })
    </script>
</body>
</html>

