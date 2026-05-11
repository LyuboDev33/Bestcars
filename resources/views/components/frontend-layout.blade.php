<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    
    <meta property="og:url" content="https://bestcars-rentals.com/images/seo.png">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon-test.png?v=<?php echo time(); ?>">

    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen">

    <!-- SlickNav Css -->
    <link href="/css/slicknav.min.css?v=<?php echo time(); ?>" rel="stylesheet">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css?v=<?php echo time(); ?>">

    <!-- Font Awesome Icon Css-->
    <link href="/css/all.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen">

    <!-- Animated Css -->
    <link href="/css/animate.css?v=<?php echo time(); ?>" rel="stylesheet">

    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="/css/magnific-popup.css?v=<?php echo time(); ?>">

    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="/css/mousecursor.css?v=<?php echo time(); ?>">

    <!-- Main Custom Css -->
    <link href="/css/custom.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://cdn.tiny.cloud/1/rc8zovuz8vd2yamyj9j4ih70iucbq4purwf6hy3cj54hna4y/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>


    @yield('seo')

</head>

<body>

    @include('components.frontend.header')


    <main>
        {{ $slot }}
    </main>


    @include('components.frontend.footer')

    @if (session('success'))
        <script>
            alert('Успешно прикачихте кола')
        </script>
    @endif

    @if (session('successUpdate'))
        <script>
            alert('Успешно обновихте кола')
        </script>
    @endif


    @if (session('successCarDeletion'))
        <script>
            alert('Изтрихте успешно тази кола')
        </script>
    @endif

    @if (session('noSuchCar'))
        <script>
            alert('Няма такъв автомобил')
        </script>
    @endif




</body>

</html>
