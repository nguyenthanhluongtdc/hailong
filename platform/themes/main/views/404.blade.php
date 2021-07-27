{{-- @php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fire('beforeRenderTheme', app(\Platform\Theme\Contracts\Theme::class));
@endphp

{!! Theme::partial('header') !!}

<div class="container error-page">
    <div class="error-code">
        404
    </div>

    <div class="error-border"></div>
        <h4>{{ __('This may have occurred because of several reasons') }}:</h4>
<ul>
    <li>{{ __('The page you requested does not exist.') }}</li>
    <li>{{ __('The link you clicked is no longer.') }}</li>
    <li>{{ __('The page may have moved to a new location.') }}</li>
    <li>{{ __('An error may have occurred.') }}</li>
    <li>{{ __('You are not authorized to view the requested resource.') }}</li>
</ul>
<br>
<strong>{!! clean(__('Please try again in a few minutes, or alternatively return to the homepage by <a href=":link">clicking here</a>.', ['link' => route('public.single')])) !!}</strong>
</div>
</div>
{!! Theme::partial('footer') !!} --}}

<div id="main">
    <div class="fof">
        <h1>Error 404</h1>
        <div class="back" >
            <a href="{{route('public.single')}}" style="color: green;">
                {!! __('Home') !!}
            </a>
        </div>
    </div>

    
</div>

<style>
    * {
        transition: all 0.6s;
    }

    html {
        height: 100%;
    }

    body {
        font-family: 'Lato', sans-serif;
        color: #888;
        margin: 0;
    }

    #main {
        display: table;
        width: 100%;
        height: 100vh;
        text-align: center;
    }

    .fof {
        display: table-cell;
        vertical-align: middle;
    }

    .fof h1 {
        font-size: 50px;
        display: inline-block;
        padding-right: 12px;
        animation: type .5s alternate infinite;
    }

    @keyframes type {
        from {
            box-shadow: inset -3px 0px 0px #888;
        }

        to {
            box-shadow: inset -3px 0px 0px transparent;
        }
    }

</style>
