@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Hello World</h3>

            <passport-clients></passport-clients> <br>
            <passport-authorized-clients></passport-authorized-clients> <br>
            <passport-personal-access-tokens></passport-personal-access-tokens>

        </div>
    </div>
</div>
@endsection
