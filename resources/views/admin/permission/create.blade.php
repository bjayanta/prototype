@extends('admin.master')

@section('title', 'New Permission')

@section('content')
<!-- Main Content -->
<div class="container">
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('permission.store') }}" method="POST">
    	@csrf

    	<div>
    		<label for="name">
    			<span>Permission name</span>
    			<input type="text" name="name">
    		</label>
    	</div>

        <div>
            <label for="menu">
                <span>Menu</span>
                <select name="menu">
                    <option value="" selected disabled>&nbsp;</option>
                    <option value="tag">Tag</option>
                    <option value="post">Post</option>
                    <option value="account">Account</option>
                    <option value="settings">Settings</option>
                </select>
            </label>
        </div>

        <div>
            <label for="description">
                <span>Description</span>
                <textarea name="description" cols="50" rows="5"></textarea>
            </label>
        </div>

    	<div>
    		<input type="submit" name="Save">
    		<a href="{{ route('permission.index') }}">Back</a>
    	</div>
    </form>
</div>
@endsection

