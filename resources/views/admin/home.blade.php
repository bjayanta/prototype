@extends('admin.master')

@section('title', 'Dashboard')

@section('content')
<!-- Main Content -->
<div class="container">
    <h3>I am Dashboard</h3>

    <pre>{{ print_r(Auth::user()->toArray(), 1) }}</pre>
    <pre>{{ print_r(Auth::user()->roles->toArray(), 1) }}</pre>

    {{-- <pre>
        @foreach (Auth::user()->roles as $role)
            {{ print_r($role->permissions->toArray(), 1) }}
        @endforeach
    </pre> --}}

    @can('account-create')
        <h4>Permission granted</h4>
    @endcan

    <hr>

    <hr>

    <div class="form-group">
        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>

            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>

</div>
@endsection


