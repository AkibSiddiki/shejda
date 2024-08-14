<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | Shejda Development & Holdings ltd::সেজদা ডেভেলপমেন্ট এন্ড হোল্ডিংস লিঃ</title>
    <meta name="author" content="Shajda.com">
    <meta name="resource-type" content="document">
    <meta name="contact" content="info@shejda.com">
    <meta name="copyright" content="Copyright (c) 2024. All Rights &reg; Reserved by https://www.shejda.com/">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta name="description"
        content="Shejda Development & Holdings Ltd. specializes in innovative real estate development, property management, and investment services, offering tailored solutions for residential, commercial, and industrial projects. Trusted for quality and excellence">
    <meta name="keywords"
        content="real estate development, property management, investment services, commercial projects, residential projects, industrial development, real estate solutions, Shejda Holdings, property investment, construction services, রিয়েল এস্টেট ডেভেলপমেন্ট, প্রপার্টি ম্যানেজমেন্ট, বিনিয়োগ পরিষেবা, বাণিজ্যিক প্রকল্প, আবাসিক প্রকল্প, শিল্প উন্নয়ন, রিয়েল এস্টেট সমাধান, সেজদা ডেভেলপমেন্ট, সেজদা হোল্ডিংস, প্রপার্টি বিনিয়োগ, নির্মাণ পরিষেবা, জমি ক্রয়, বাড়ি বিক্রয়, রিয়েল এস্টেট বিনিয়োগ">
    <meta property="og:site_name" content="Shejda Development | সেজদা ডেভেলপমেন্ট এন্ড হোল্ডিংস লিঃ">
    <meta property="og:title"
        content="Shejda Development & Holdings Ltd. | Excellence in Real Estate & Property Management">
    <meta property="og:description"
        content="Shejda Development & Holdings Ltd. | Excellence in Real Estate & Property Management">
    <meta property="og:url" content="https://www.shejda.com/">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="{{ asset('assets/web/image/bg/logo-fb.png') }}">
    <link rel="image_src" href="{{ asset('assets/web/image/bg/logo-fb.png') }}">
    <link rel="canonical" href="https://www.shejda.com/">
    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('assets/web/image/bg/favicon.png') }}">
    <link type="image/x-icon" rel="icon" href="{{ asset('assets/web/image/bg/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700&display=swap" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    @yield('css')

</head>

<body>
    <!-- header-area-start -->
    @include('shared.header')
    <!-- header-area-end -->

    <!-- Back to top button -->
    <a id="button"><i class="fa-solid fa-arrow-up"></i></a>

    <main>
        @yield('main')
    </main>

    @include('shared.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
		new WOW().init();
	</script>
	<script>
	Fancybox.bind('[data-fancybox="gallery"]', {});
	</script>
    @yield('js')

</body>

</html>
