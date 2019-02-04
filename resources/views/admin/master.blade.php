<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('admin.layouts.head')
    </head>

    <body>
        <div id="app">
            @include('admin.layouts.header')

            @section('main-content')
                @show
        </div>

        @include('admin.layouts.footer')
    </body>
</html>

