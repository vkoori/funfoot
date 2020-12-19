<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
{{-- <link rel="shortcut icon" href="{{ asset('public/images/favicon.ico') }}" type="image/x-icon"> --}}
{{-- <link rel="icon" href="icon.svg" sizes="any" type="image/svg+xml"> --}}

<link rel="icon" href="" sizes="16x16" type="image/png">
<link rel="icon" href="" sizes="32x32" type="image/png">
<link rel="icon" href="" sizes="48x48" type="image/png">
<link rel="icon" href="" sizes="62x62" type="image/png">

    <!-- Open Graph data -->
<meta property="og:locale" content="fa_IR">
<meta property="og:type" content="website">
<meta property="og:image" content="https://artifacts.bbcomcdn.com/@bbcom/bb-wrapper/41.5.1/images/logo-white.svg" />
<meta property="og:url" content="{{ Request::url('') }}">
<meta property="og:site_name" content="فروشگاه اینترنتی دکوراسیون داخلی توکامارت">
<meta property="fb:admins" content="100026023324031" />
    <!-- Schema.org markup for Google+ -->
<meta itemprop="image" content="{{ asset('public/assets/images/items/logo.svg') }}">
    <!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@tookamart">
<meta name="twitter:image" content="{{ asset('public/assets/images/items/logo.svg') }}">
    <!-- Dublin Core Metadata Set -->
<meta name="dc.language" CONTENT="fa">
<meta name="DC.Type" content="physical object">
<!-- <meta name="DC.Type" content="text"> mag -->
<meta name="dc.source" CONTENT="{{ URL::to('/') }}">
<meta name="dc.subject" CONTENT="فروشگاه اینترنتی دکوراسیون داخلی توکامارت">
<meta name="DC.publisher" content="توکامارت - tookamart">
    
<meta property="business:contact_data:country_name" content="ایران">
<meta property="business:contact_data:website" content="{{ URL::to('/') }}">
<meta property="business:contact_data:email" content="info@tookamart.com">
    
    <link rel="stylesheet" href="{{ asset('public/assets/styles/style.css') }}">
    {{-- @if (Request::is('/'))

    @endif --}}

<!-- <meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow"> -->
    
{{-- <title>{{ $title }}</title>
<meta property="og:title" content="{{ $title }}">
<meta name="dc.title" CONTENT="{{ $title }}">
<meta name="description" content="{{ $description }}" />
<meta property="og:description" content="{{ $description }}">
<meta name="dc.description" CONTENT="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta property="article:tag" content="{{ $keywords }}">
<meta name="dc.keywords" CONTENT="{{ $keywords }}">
<meta itemprop="name" content="{{ $title }}">
<meta itemprop="description" content="{{ $description }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta property="article:section" content="{{ $title }}"> --}}

</head>
<body>
    <header class="light-gray">
        <nav class="container flex">
            <ul class="grow1 flex-vertical-center">
                <li>
                    <a href="{{ url('/') }}" title="فان فوت">
                        <img alt="funfoot" src="{{ asset('public/assets/images/logo150.png') }}">
                    </a>
                </li>
                <li>
                    <a class="p-1" href="{{ url('/') }}" title="پیش بینی">پیش بینی</a>
                </li>
                <li>
                    <a class="p-1" href="{{ url('/') }}" title="لیست برندگان">لیست برندگان</a>
                </li>
            </ul>
            <ul class="flex-vertical-center">
                @if (!Session::has('userid'))
                    <li>
                        <a class="p-1" href="{{ url('ورود') }}" title="ورود">ورود</a>
                    </li>
                @else
                    @if (!Session::has('expire') OR Session::get('expire') < time())
                        <li>
                            <a class="p-1" href="{{ url('اشتراک') }}" title="خرید اشتراک برای پیش بینی">خرید اشتراک</a>
                        </li>
                    @endif
                    <li>
                        <a class="p-1" href="{{ url('خروج') }}" title="خروج">خروج</a>
                    </li>
                @endif
            </ul>
        </nav>
    </header><!-- /header -->