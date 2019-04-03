@extends('admin.master')

@section('title', 'Update Permission')

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

    <form action="{{ route('permission.update', $permission->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div>
            <label for="name">
                <span>Permission name</span>
                <input type="text" name="name" value="{{ $permission->name }}">
            </label>
        </div>

        <div>
            <label for="menu">
                <span>Menu</span>
                <select name="menu">
                    <option value="tag" {{ ($permission->menu == 'tag') ? 'selected' : '' }}>Tag</option>
                    <option value="post" {{ ($permission->menu == 'post') ? 'selected' : '' }}>Post</option>
                    <option value="account" {{ ($permission->menu == 'account') ? 'selected' : '' }}>Account</option>
                    <option value="settings" {{ ($permission->menu == 'settings') ? 'selected' : '' }}>Settings</option>
                </select>
            </label>
        </div>

        <div>
            <label for="description">
                <span>Description</span>
                <textarea name="description" cols="50" rows="5">{{ $permission->name }}</textarea>
            </label>
        </div>

        <div>
            <input type="submit" name="Update">
            <a href="{{ route('permission.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection

