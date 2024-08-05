<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/node_modules/bootstrap/dist/css/bootstrap.css') }}">
    <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('assets/node_modules/aos/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/node_modules/swiper/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <title>Enernew @hasSection('title') - @endif @yield('title') </title>
</head>

<body>
    <div class="main__wrapper {{Route::currentRouteName()}}">
        <div class="d-flex flex-column">
            @isset($hero_img) <div class="hero__bg w-100 flex-fill slide-0" style="background-image: 
            @foreach ($hero_img as $item)
                url('{{ $item }}')
                @if (!$loop->last)
                    ,
                @endif
            @endforeach
            ;background-size: cover;">@endisset
                <div class="container">
                    <div class="d-flex justify-content-between mt-4 ">
                        <div class="navbar__logo">
                            <a href="/">
                                <img src="{{ asset('assets/images/logo-15.png') }}" class="logo">
                            </a>
                        </div>
                        <div class="navbar__menu">
                            <span class="menu__text">MENU</span>
                            <span class="menu_toggle">
                                <svg id="Icons" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z" />
                                </svg>
                            </span>
                            <div class="menu">
                                <div class="container">
                                    <div class="row my-4">
                                        <div class="col">
                                            <div class="navbar__logo">
                                                <a href="/">
                                                    <img src="{{ asset('assets/images/logo-white.png') }}" class="logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-5">
                                                <div class="col-md-3 col-6 col-2 py-3">
                                                    <dl>
                                                        <dt class="mb-2">
                                                            About Us
                                                        </dt>
                                                        <dd>
                                                            <a href="/about-us">About Enernew</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/about-us#history">Our History</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/about-us#founders">Our Founders/Team</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/about-us#vision">Vision, Mission & Values</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/about-us#whyus">Why Us?</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-md-3 col-6 py-3">
                                                    <dl>
                                                        <dt class="mb-2">
                                                            <a href="/careers">Careers</a>
                                                        </dt>
                                                        <dd>
                                                            <a href="#">Why Enernew?</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="#">Our Values</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/job-openings">Job Openings</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/life-at-enernew">Life@Enernew</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/employee-testimonials">Employee Testimonials</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-md-3 col-6 py-3">
                                                    <dl>
                                                        <dt class="mb-2">
                                                            <a class="bold" href="/contact-us">Contact Us</a>
                                                        </dt>
                                                        <dd>
                                                            <a href="mailto:contact@enernew">contact@enernew.in</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="tel:+91 88 00 222 600">+91 88 00 222 600</a>
                                                        </dd>

                                                    </dl>
                                                </div>
                                                <div class="col-md-3 col-6 py-3">
                                                    <dl>
                                                        <dt class="mb-2">
                                                            Solar Calculator
                                                        </dt>

                                                    </dl>
                                                </div>
                                                <div class="col-md-3 col-6 py-3">
                                                    <dl>
                                                        <dt class="mb-2">
                                                            Our Solutions
                                                        </dt>
                                                        <dd>
                                                            <a href="/utility-scale-solar-power-park-solutions">Solar Power Park Developer</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/b2b-solar-solutions">B2B Solutions</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/asset-management-services">Asset Managment</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-md-3 col-6 py-3">
                                                    <dl>
                                                        <dt class="mb-2">
                                                            Media
                                                        </dt>
                                                        <dd>
                                                            <a href="/knowledge-center">Knowledge center</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/press-release">PR</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-md-3 col-6 py-3">
                                                    <div class="column-gap-3 d-flex justify-content-start">
                                                        <a href="https://www.linkedin.com/company/enernew-pvt-ltd/"
                                                            linkedin target="_blank">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.381"
                                                                height="15.381" viewBox="0 0 15.381 15.381">
                                                                <defs>
                                                                    <linearGradient id="grad1" x1="0%" y1="0%"
                                                                        x2="0%" y2="100%">
                                                                        <stop offset="0%" stop-color="#3b9d30" />
                                                                        <stop offset="100%" stop-color="#ff9436" />
                                                                    </linearGradient>
                                                                </defs>
                                                                <g id="_x31_0.Linkedin" transform="translate(0 0)">
                                                                    <path id="Path_1" data-name="Path 1"
                                                                        d="M48.24,45.817V40.184c0-2.769-.6-4.884-3.826-4.884A3.338,3.338,0,0,0,41.4,36.953h-.038v-1.4H38.3V45.817h3.192v-5.1c0-1.346.25-2.634,1.9-2.634,1.634,0,1.653,1.519,1.653,2.711v5H48.24Z"
                                                                        transform="translate(-32.859 -30.436)"
                                                                        fill="#fff"></path>
                                                                    <path id="Path_2" data-name="Path 2"
                                                                        d="M11.3,36.6h3.192V46.867H11.3Z"
                                                                        transform="translate(-11.05 -31.486)"
                                                                        fill="#fff"></path>
                                                                    <path id="Path_3" data-name="Path 3"
                                                                        d="M11.846,10a1.855,1.855,0,1,0,1.846,1.846A1.846,1.846,0,0,0,11.846,10Z"
                                                                        transform="translate(-10 -10)"
                                                                        fill="#fff"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="https://x.com/enernewpvtltd?s=11" twitter
                                                            target="_blank">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.935"
                                                                height="14.178" viewBox="0 0 14.935 14.178">
                                                                <path id="twitter_1_" data-name="twitter (1)"
                                                                    d="M20.859,5.58,25.659,0H24.522L20.354,4.845,17.025,0h-3.84l5.034,7.326-5.034,5.851h1.138l4.4-5.116,3.516,5.116h3.84l-5.221-7.6ZM19.3,7.391l-.51-.73L14.732.856H16.48l3.275,4.685.51.73,4.257,6.09H22.775L19.3,7.391Z"
                                                                    transform="translate(-12.095 0.5)" fill="#fff"
                                                                    stroke="#fff" stroke-width="1" />
                                                            </svg>
                                                        </a>
                                                        <a href="https://www.youtube.com/@Enernew" youtube
                                                            target="_blank">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="21.53"
                                                                height="15.074" viewBox="0 0 21.53 15.074">
                                                                <path id="youtube"
                                                                    d="M21.087-3.723a2.7,2.7,0,0,0-1.9-1.9c-1.685-.461-8.424-.461-8.424-.461s-6.739,0-8.424.444a2.752,2.752,0,0,0-1.9,1.915A28.421,28.421,0,0,0,0,1.455,28.317,28.317,0,0,0,.444,6.634a2.7,2.7,0,0,0,1.9,1.9c1.7.461,8.424.461,8.424.461s6.739,0,8.424-.444a2.7,2.7,0,0,0,1.9-1.9,28.43,28.43,0,0,0,.443-5.178,26.979,26.979,0,0,0-.444-5.2ZM8.62,4.683V-1.772l5.6,3.228Zm0,0"
                                                                    transform="translate(-0.001 6.082)" fill="#fff" />
                                                            </svg>
                                                        </a>
                                                        <a href="https://www.facebook.com/people/Enernew-Pvt-Ltd/61558307954152/"
                                                            facebook target="_blank">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="7.432"
                                                                height="14.917" viewBox="0 0 7.432 14.917">
                                                                <path id="Icon"
                                                                    d="M42.97,19.427H41.261c-.276,0-.361-.115-.361-.39V16.779c0-.3.106-.413.361-.413H42.97v-1.64a4.427,4.427,0,0,1,.467-2.11,2.941,2.941,0,0,1,1.539-1.376A3.483,3.483,0,0,1,46.293,11h1.688c.244,0,.35.115.35.378V13.5c0,.264-.106.378-.35.378-.467,0-.934,0-1.4.023s-.711.241-.711.768c-.021.562,0,1.1,0,1.674h1.985c.276,0,.382.115.382.413v2.259c0,.3-.085.413-.382.413H45.89v6.065c0,.321-.106.424-.393.424H43.342c-.255,0-.361-.115-.361-.39Z"
                                                                    transform="translate(-40.9 -11)" fill="#fff" />
                                                            </svg>
                                                        </a>
                                                        <a href="https://www.instagram.com/enernewsolar/" instagram
                                                            target="_blank">
                                                            <svg viewBox="0 0 60 60" width="20" height="20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="m30 20.83c-5.06 0-9.17 4.11-9.17 9.17s4.11 9.18 9.17 9.18 9.18-4.12 9.18-9.18-4.12-9.17-9.18-9.17z" />
                                                                    <path
                                                                        d="m43.84 5h-27.68c-6.15 0-11.16 5.01-11.16 11.16v27.68c0 6.16 5.01 11.16 11.16 11.16h27.68c6.16 0 11.16-5 11.16-11.16v-27.68c0-6.15-5-11.16-11.16-11.16zm-13.84 41.2c-8.93 0-16.2-7.27-16.2-16.2s7.27-16.19 16.2-16.19 16.2 7.26 16.2 16.19-7.27 16.2-16.2 16.2zm16.54-29.45c-1.89 0-3.43-1.53-3.43-3.42s1.54-3.43 3.43-3.43 3.43 1.54 3.43 3.43-1.54 3.42-3.43 3.42z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-6 py-3">
                                                    <dl>
                                                        <dt class="mb-2">
                                                            Legal
                                                        </dt>
                                                        <dd>
                                                            <a href="/privacy">Privacy</a>
                                                        </dd>
                                                        <dd>
                                                            <a href="/terms-of-use">Terms of use</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if(!Route::is('home') )
                        @isset($hero_img)
                        <div class="d-flex flex-column hero col-md-6 col-lg-4">
                            @yield("header")
                        </div>
                        @endisset
                        @else
                        @yield("header")
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @yield("content")



        <footer class="pt-5">
            <div class="container">
                <div class="row" @if(Route::is('home') ) data-aos="fade-up" @endif>
                    <div class="col d-flex justify-content-center mb-5">
                        <h2
                            class="d-flex flex-md-row justify-content-center fs-1 align-items-center flex-column overflow-hidden">
                            Championing &nbsp;
                            <div id="footerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/images/c1.png') }}" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/c2.png') }}" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/6-min.jpeg') }}" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/c1.png') }}" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/c2.png') }}" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/6-min.jpeg') }}" class="img-fluid">
                                    </div>
                                </div>
                                's&nbsp;
                            </div>
                            Sustainable Choice
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3 justify-content-center d-flex flex-column" @if(Route::is('home') )
                        data-aos="fade-up" @endif>
                        <a href="/"><img src="{{ asset('assets/images/logo-15.png') }}" class="logo mb-3"></a>
                        <p class="mb-3 lh-lg fs-7">Enernew continues the legacy of Sriram Cables, a brand well known
                            since 45
                            years for its performance, trust and reliability.</p>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="row mb-5">
                            <div @if(Route::is('home') ) data-aos="fade-up" @endif data-aos-delay="100"
                                class="col-md-3 col-6 col-2 py-3 border border-bottom-0 border-top-0">
                                <dl>
                                    <dt class="mb-2">
                                        About Us
                                    </dt>
                                    <dd>
                                        <a href="/about-us">About Enernew</a>
                                    </dd>
                                    <dd>
                                        <a href="/about-us#history">Our History</a>
                                    </dd>
                                    <dd>
                                        <a href="/about-us#founders">Our Founders/Team</a>
                                    </dd>
                                    <dd>
                                        <a href="/about-us#vision">Vision, Mission & Values</a>
                                    </dd>
                                    <dd>
                                        <a href="/about-us#whyus">Why Us?</a>
                                    </dd>
                                </dl>
                            </div>
                            <div @if(Route::is('home') ) data-aos="fade-up" @endif data-aos-delay="200"
                                class="col-md-3 col-6 py-3 border border-bottom-0 border-top-0 border-start-0">
                                <dl>
                                    <dt class="mb-2">
                                        <a class="bold" href="/careers">Careers</a>
                                    </dt>
                                    <dd>
                                        <a href="#">Why Enernew?</a>
                                    </dd>
                                    <dd>
                                        <a href="#">Our Values</a>
                                    </dd>
                                    <dd>
                                        <a href="/job-openings">Job Openings</a>
                                    </dd>
                                    <dd>
                                        <a href="/life-at-enernew">Life@Enernew</a>
                                    </dd>
                                    <dd>
                                        <a href="/employee-testimonials">Employee Testimonials</a>
                                    </dd>
                                </dl>
                            </div>
                            <div @if(Route::is('home') ) data-aos="fade-up" @endif data-aos-delay="300"
                                class="col-md-3 col-6 py-3 border border-bottom-0 border-top-0 border-start-1">
                                <dl>
                                    <dt class="mb-2">
                                        <a class="bold" href="/contact-us">Contact Us</a>
                                    </dt>
                                    <dd>
                                        <a href="mailto:contact@enernew">contact@enernew.in</a>
                                    </dd>
                                    <dd>
                                        <a href="tel:+91 88 00 222 600">+91 88 00 222 600</a>
                                    </dd>

                                </dl>
                            </div>
                            <div @if(Route::is('home') ) data-aos="fade-up" @endif data-aos-delay="400"
                                class="col-md-3 col-6 py-3 border border-bottom-0 border-top-0 border-start-0">
                                <dl>
                                    <dt class="mb-2">
                                        Solar Calculator
                                    </dt>

                                </dl>
                            </div>
                            <div @if(Route::is('home') ) data-aos="fade-up" @endif data-aos-delay="500"
                                class="col-md-3 col-6 py-3 border border-bottom-0">
                                <dl>
                                    <dt class="mb-2">
                                        Our Solutions
                                    </dt>
                                    <dd>
                                        <a href="/utility-scale-solar-power-park-solutions">Solar Power Park Developer</a>
                                    </dd>
                                    <dd>
                                        <a href="/b2b-solar-solutions">B2B Solutions</a>
                                    </dd>
                                    <dd>
                                        <a href="/asset-management-services">Asset Managment</a>
                                    </dd>
                                </dl>
                            </div>
                            <div @if(Route::is('home') ) data-aos="fade-up" @endif data-aos-delay="600"
                                class="col-md-3 col-6 py-3 border border-bottom-0 border-start-0">
                                <dl>
                                    <dt class="mb-2">
                                        Media
                                    </dt>
                                    <dd>
                                        <a href="/knowledge-center">Knowledge center</a>
                                    </dd>
                                    <dd>
                                        <a href="/press-release">PR</a>
                                    </dd>
                                </dl>
                            </div>
                            <div @if(Route::is('home') ) data-aos="fade-up" @endif data-aos-delay="700"
                                class="col-md-3 col-6 py-3 border border-bottom-0 border-start-0">
                                <div class="d-flex justify-content-around">
                                    <a href="https://www.linkedin.com/company/enernew-pvt-ltd/" linkedin
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.381"
                                        height="15.381" viewBox="0 0 15.381 15.381">
                                        <defs>
                                            <linearGradient id="grad1" x1="0%" y1="0%"
                                                x2="0%" y2="100%">
                                                <stop offset="0%" stop-color="#3b9d30" />
                                                <stop offset="100%" stop-color="#ff9436" />
                                            </linearGradient>
                                        </defs>
                                        <g id="_x31_0.Linkedin" transform="translate(0 0)">
                                            <path id="Path_1" data-name="Path 1"
                                                d="M48.24,45.817V40.184c0-2.769-.6-4.884-3.826-4.884A3.338,3.338,0,0,0,41.4,36.953h-.038v-1.4H38.3V45.817h3.192v-5.1c0-1.346.25-2.634,1.9-2.634,1.634,0,1.653,1.519,1.653,2.711v5H48.24Z"
                                                transform="translate(-32.859 -30.436)"
                                                fill="url(#grad1)"></path>
                                            <path id="Path_2" data-name="Path 2"
                                                d="M11.3,36.6h3.192V46.867H11.3Z"
                                                transform="translate(-11.05 -31.486)"
                                                fill="url(#grad1)"></path>
                                            <path id="Path_3" data-name="Path 3"
                                                d="M11.846,10a1.855,1.855,0,1,0,1.846,1.846A1.846,1.846,0,0,0,11.846,10Z"
                                                transform="translate(-10 -10)"
                                                fill="url(#grad1)"></path>
                                        </g>
                                    </svg>
                                    </a>
                                    <a href="https://x.com/enernewpvtltd?s=11" twitter target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.935" height="14.178"
                                            viewBox="0 0 14.935 14.178">
                                            <path id="twitter_1_" data-name="twitter (1)"
                                                d="M20.859,5.58,25.659,0H24.522L20.354,4.845,17.025,0h-3.84l5.034,7.326-5.034,5.851h1.138l4.4-5.116,3.516,5.116h3.84l-5.221-7.6ZM19.3,7.391l-.51-.73L14.732.856H16.48l3.275,4.685.51.73,4.257,6.09H22.775L19.3,7.391Z"
                                                transform="translate(-12.095 0.5)" fill="url(#grad1)" stroke="url(#grad1)"
                                                stroke-width="1" />
                                        </svg>
                                    </a>
                                    <a href="https://www.youtube.com/@Enernew" youtube target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.53" height="15.074"
                                            viewBox="0 0 21.53 15.074">
                                            <path id="youtube"
                                                d="M21.087-3.723a2.7,2.7,0,0,0-1.9-1.9c-1.685-.461-8.424-.461-8.424-.461s-6.739,0-8.424.444a2.752,2.752,0,0,0-1.9,1.915A28.421,28.421,0,0,0,0,1.455,28.317,28.317,0,0,0,.444,6.634a2.7,2.7,0,0,0,1.9,1.9c1.7.461,8.424.461,8.424.461s6.739,0,8.424-.444a2.7,2.7,0,0,0,1.9-1.9,28.43,28.43,0,0,0,.443-5.178,26.979,26.979,0,0,0-.444-5.2ZM8.62,4.683V-1.772l5.6,3.228Zm0,0"
                                                transform="translate(-0.001 6.082)" fill="url(#grad1)" />
                                        </svg>
                                    </a>
                                    <a href="https://www.facebook.com/people/Enernew-Pvt-Ltd/61558307954152/" facebook
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7.432" height="14.917"
                                            viewBox="0 0 7.432 14.917">
                                            <path id="Icon"
                                                d="M42.97,19.427H41.261c-.276,0-.361-.115-.361-.39V16.779c0-.3.106-.413.361-.413H42.97v-1.64a4.427,4.427,0,0,1,.467-2.11,2.941,2.941,0,0,1,1.539-1.376A3.483,3.483,0,0,1,46.293,11h1.688c.244,0,.35.115.35.378V13.5c0,.264-.106.378-.35.378-.467,0-.934,0-1.4.023s-.711.241-.711.768c-.021.562,0,1.1,0,1.674h1.985c.276,0,.382.115.382.413v2.259c0,.3-.085.413-.382.413H45.89v6.065c0,.321-.106.424-.393.424H43.342c-.255,0-.361-.115-.361-.39Z"
                                                transform="translate(-40.9 -11)" fill="url(#grad1)" />
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/enernewsolar/" instagram target="_blank">
                                        <svg viewBox="0 0 60 60" width="20" height="20" fill="url(#grad1)"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <!--- Thanks Floyd -->
                                                <path
                                                    d="m30 20.83c-5.06 0-9.17 4.11-9.17 9.17s4.11 9.18 9.17 9.18 9.18-4.12 9.18-9.18-4.12-9.17-9.18-9.17z" />
                                                <path
                                                    d="m43.84 5h-27.68c-6.15 0-11.16 5.01-11.16 11.16v27.68c0 6.16 5.01 11.16 11.16 11.16h27.68c6.16 0 11.16-5 11.16-11.16v-27.68c0-6.15-5-11.16-11.16-11.16zm-13.84 41.2c-8.93 0-16.2-7.27-16.2-16.2s7.27-16.19 16.2-16.19 16.2 7.26 16.2 16.19-7.27 16.2-16.2 16.2zm16.54-29.45c-1.89 0-3.43-1.53-3.43-3.42s1.54-3.43 3.43-3.43 3.43 1.54 3.43 3.43-1.54 3.42-3.43 3.42z" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div @if(Route::is('home') ) data-aos="fade-up" @endif data-aos-delay="800"
                                class="col-md-3 col-6 py-3 border border-bottom-0 border-start-0">
                                <dl>
                                    <dt class="mb-2">
                                        Legal
                                    </dt>
                                    <dd>
                                        <a href="/privacy">Privacy</a>
                                    </dd>
                                    <dd>
                                        <a href="/terms-of-use">Terms of use</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gray">
                <div class="container d-flex justify-content-between py-4">
                    <span class="text-white">
                        Copyright &copy; 2024, Enernew. All rights reserved.
                    </span>
                    <span class="text-white">
                        Powered By Swasan Technologies
                    </span>
                </div>
            </div>
        </footer>
        <script>
            window.ifExists = (selector, cb) => {
                !!document.querySelector(selector) ? cb.call(this, document.querySelector(selector)) : "";
            }
            document.addEventListener("DOMContentLoaded", () => {
                AOS.init();
                ifExists('#projects', () => {


                    [...document.querySelectorAll("#projects2 .carousel-item")].map(s => {
                        let readmore = s.querySelector(".projects__read_more span:not(.projects__icon)");
                        let content = s.querySelector(".projects__content");
                        s.addEventListener('click', e => {
                            e.preventDefault();
                            if (content.classList.contains("open")) {
                                content.classList.remove("open")
                                readmore.innerText = "Explore More";
                            } else {
                                content.classList.add("open")
                                readmore.innerText = "Explore Less";
                            }
                        })
                    })

                    let projects = document.getElementById('projects')
                    let projects2 = document.getElementById('projects2')
                    projects2 = new bootstrap.Carousel(projects2)
                    projects.addEventListener('slide.bs.carousel', function (e) {
                        if (e.direction === 'left') {
                            projects2.next()
                        } else {
                            projects2.prev()
                        }
                    })
                })
                let menu_toggle = document.querySelector(".navbar__menu");
                menu_toggle.addEventListener('click', (e) => {
                    console.log(e.stopPropagation(), document.body.classList.contains('open'))
                    if (document.body.classList.contains('open')) {
                        menu_toggle.querySelector('.menu__text').innerText = "MENU"
                        document.body.classList.remove('open')
                    } else {
                        menu_toggle.querySelector('.menu__text').innerText = "CLOSE"
                        document.body.classList.add('open')
                    }
                })


                ifExists("#footerCarousel", () => {
                    var myCarousel = document.getElementById('footerCarousel')
                    myCarousel.addEventListener('slide.bs.carousel', function (event) {
                        let parent = myCarousel.querySelector(".carousel-inner");
                        parent.style.width = event.relatedTarget.querySelector('img').naturalWidth + "px";
                    })
                })

                ifExists(".lets_talk__form", (s) => {
                    s.addEventListener("submit", e => {
                        e.preventDefault();
                        $submit = s.querySelector('button[type="submit"]');
                        $submit.classList.add('submitting')
                        $submit.disabled = true;

                        let fields = [];
                        for (const pair of new FormData(s).entries()) {
                            fields.push({ [pair[0]]: pair[1] })
                        }
                        axios.get('/form_submit', {
                            params: {
                                form_name: 'Home',
                                form_fields: fields
                            }
                        })
                            .then(function (response) {
                                s.reset();
                                s.querySelector(".message_box").innerText = "Your message has been sent sucessfully";
                            })
                            .catch(function (error) {
                                s.querySelector(".message_box").innerText = "Opps something went wrong, please try again later";
                            })
                            .finally(function () {
                                $submit.classList.remove('submitting')
                                $submit.disabled = false;
                            });
                    })
                })

            })
        </script>
        @yield('scripts')
        <script src="{{ asset('assets/node_modules/aos/dist/aos.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js"
            integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>