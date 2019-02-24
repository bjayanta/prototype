<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('public/admin/js/app-admin.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('public/admin/css/app-admin.css') }}" rel="stylesheet">

{{-- add stylesheet --}}
@stack('style')
