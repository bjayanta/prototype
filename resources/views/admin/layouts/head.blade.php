<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

{{-- add bootstrap --}}
<link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">

{{-- add stylesheet --}}
@stack('style')

{{-- add vue js --}}
<script src="{{ asset('admin/js/vue.js') }}"></script>
