<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
        <!-- CSS Library-->

        <style>
            :root {
                --primary-color: {{ theme_option('primary_color', '#ff2b4a') }};
                --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
            }
        </style>

        {!! Theme::header() !!}
    </head>
    <body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
        {!! apply_filters(THEME_FRONT_BODY, null) !!}

        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container align-items-end">
                    <a class="link-hailongglass" href="#" title="HAILONGGLASS">
                        <div class="box-symbol">
                            <span class="box-symbol__one"> <span class="__one__box"> </span> HAILON GLASS </span>
                            <span class="box-symbol__two"> <span class="__two__box"> </span> VSGLASS </span>
                        </div>
                        <h1> KÍNH AN TOÀN HẢI LONG - VIỆT NHẬT </h1>
                    </a>

                    <div class="collapse navbar-collapse align-items-end" id="navbarTogglerDemo01">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Công trình</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Liên hệ</a>
                            </li>
                            <li class="bilingual">
                                <a class="en active" href="#"> EN </a>
                                <a class="vn" href="#"> VN </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
