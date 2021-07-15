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
        {!!
            Menu::renderMenuLocation('main-menu', [
                'options' => [],
                'theme' => true,
                'view' => 'navbar',
            ])
        !!}

        <div class="box-sub">
            <span> CSKH24/7: </span>  <b> 19004696 </b>
        </div>
    </header>

    <div id="sidebar-main" class="d-md-block d-none">
        <div class="box box-center">
            <button class="box__item">
                <span class="box__item__text">
                    <b> Zalo</b>
                    <b> Code</b>
                </span>
            </button>
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
