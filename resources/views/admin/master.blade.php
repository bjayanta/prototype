<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- include meta and title --}}
        @include('admin.layouts.head')
    </head>

    <body>
        <div id="app">
            {{-- include header --}}
            @include('admin.layouts.header')

            <main>
                <div class="container">
                    <div class="row">
                        {{-- include confirmation message --}}
                        @include('admin.layouts.partials.alert')

                        {{-- include main content --}}
                        @section('content')
                            @show
                    </div>
                </div>
            </main>
        </div>

        {{-- include footer --}}
        @include('admin.layouts.footer')
    </body>
</html>

