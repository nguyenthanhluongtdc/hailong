<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
    <!-- CSS Library-->

    <style>
        :root {
            --primary-color: {
                    {
                    theme_option('primary_color', '#ff2b4a')
                }
            }

            ;
            --primary-font: '{{ theme_option('primary_font', 'Roboto') }}',
            sans-serif;
        }

    </style>

    {!! Theme::header() !!}
</head>
<body @if (BaseHelper::siteLanguageDirection()=='rtl' ) dir="rtl" @endif>
    {!! apply_filters(THEME_FRONT_BODY, null) !!}

    <header>
        <nav class="navbar navbar-expand-lg pb-0 px-0 navbar-light">
            <div class="container-customize important container align-items-end">
                <a class="link-theme-customize text-decoration-none col-lg-3 col-9 pb-3 pl-0" href="/" title="Logo">
                    <img class="mw-100" src="{{Theme::asset()->url('images/hailong/logo.png')}}" alt="Logo" />
                </a>
                <button class="navbar-toggler py-sm-1 px-sm-2 p-0 mb-3" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-items-end mb-lg-0 mb-3" id="navbarToggler">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 align-items-lg-end">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="introduce">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/news">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dự án</a>
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

    <div id="sidebar-main" class="d-md-block d-none">
        <div class="box box-center">
            <button class="box__item">
                <span class="box__item__icon"> <i class="fas fa-phone-alt"></i> </span>
                <div class="box__item__content">
                    <a href="#" title=""> 0989.22.23.222 </a>
                    <a href="#" title=""> | 0989.22.23.222 </a>
                </div>
            </button>

            <button class="box__item">
                <span class="box__item__icon"> <i class="fas fa-envelope"></i> </span>

            </button>

            <button class="box__item">
                <span class="box__item__icon"> <i class="fas fa-comment-alt-lines"></i> </span>

            </button>

            <button class="box__item back-top">
                <span class="box__item__icon"><i class="fal fa-arrow-up"></i> </span>

                 <div class="box__item__content d-block">
                    <span class="text-top"> TOP </span>
                </div>
            </button>
        </div>
    </div>
