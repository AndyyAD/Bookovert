<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bookovert - @yield('title') </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="background-color: #F8F6F4; font-family: 'Poppins', sans-serif;">
    <nav class="navbar navbar-expand-md bg-body-tertiary py-3 mb-3" style="background-color: #C4DFDF !important;">
        <div class="container">
            <ul class="navbar-nav fs-5 fw-semibold">
                <li class="nav-item me-4">
                    <a class="nav-link active ps-0" aria-current="page" href="/"> Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/about"> About </a>
                </li>
            </ul>
            <a class="navbar-brand fs-3 fw-bold" href="/"> Book<span style="color: orange;">o</span>vert </a>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center py-4" style="background-color: LightSlateGrey !important;">
            <p class="text-dark fw-semibold"> &copy; 2020 Copyright: Ashish Deb </p>
        </div>
    </footer>
</body>

</html>