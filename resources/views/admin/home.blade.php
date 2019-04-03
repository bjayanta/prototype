@extends('admin.master')

@section('title', 'Dashboard')

@section('content')
<!-- Main Content -->
<div class="container">
    <h3>I am Dashboard</h3>

    <pre>{{ print_r(Auth::user()->toArray(), 1) }}</pre>

    <pre>{{ print_r(Auth::user()->roles->toArray(), 1) }}</pre>

{{--    <pre>--}}
{{--        @foreach (Auth::user()->roles as $role)--}}
{{--            {{ print_r($role->permissions->toArray(), 1) }}--}}
{{--        @endforeach--}}
{{--    </pre>--}}

    @can('account-create')
        <h4>Permission granted</h4>
    @endcan

</div>
@endsection


