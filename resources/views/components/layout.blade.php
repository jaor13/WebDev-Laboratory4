<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="portfolio,homepage,james,anthony,rosales" name="keywords">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.1/icofont.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.7/css/boxicons.min.css" rel="stylesheet">

    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <header id="header" class="{{ request()->is('/') ? 'header-tops' : 'header-top' }}">
        <div class="container">
            <h1 class="{{ request()->is('/') ? '' : 'd-none' }}"><a href="{{ route('homepage') }}">RoQ Collective Portfolio</a></h1>
            <h2 class="{{ request()->is('/') ? '' : 'd-none' }}" style="color:#fff">We <span class="typing" style="color:#a2d2ad"></span></h2>

            <nav class="nav-menu d-none d-lg-block" id="{{ request()->is('/') ? 'center' : '' }}">
                <ul>
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('homepage') }}"><span>Home</span></a></li>
                    <li class="{{ request()->is('pages/education-experience') ? 'active' : '' }}"><a href="{{ route('education-experience') }}"><span>Education & Experience</span></a></li>
                    <li class="{{ request()->is('pages/project-skills') ? 'active' : '' }}"><a href="{{ route('project-skills') }}"><span>Projects & Skills</span></a></li>
                    <li class="{{ request()->is('pages/about') ? 'active' : '' }}"><a href="{{ route('about') }}"><span>About</span></a></li>
                    <li class="{{ request()->is('pages/contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
                </ul>
            </nav>

            @if(request()->is('/'))
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/james-anthony-rosales-/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="https://github.com/jaor13" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                    <a href="mailto:jaor2022-6131-98317@bicol-u.edu.ph" target="_blank" class="google"><i class="bx bxl-google"></i></a>
                </div>
            @endif
        </div>
    </header>

   
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</body>
</html>
