@extends('admin.master')

@section('title', 'New Accounts')

@section('main-content')
<!-- Main Content -->
<div class="container">
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('account.update', $user->id) }}" method="POST">
    	@csrf
        @method('PATCH')

    	<div>
            <label for="name">
                <span>Fullname</span>
                <input type="text" name="name" value="{{ (old('name')) ? old('name') : $user->name }}">
            </label>
        </div>

        <div>
            <label for="phone">
                <span>Phone</span>
                <input type="text" name="phone" value="{{ $user->phone }}">
            </label>
        </div>

        <div>
            <label for="email">
                <span>Email</span>
                <input type="text" name="email" value="{{ $user->email }}">
            </label>
        </div>

        {{-- <div>
            <label for="password">
                <span>Password</span>
                <input type="password" name="password" value="123456">
            </label>
        </div>

        <div>
            <label for="password">
                <span>Confirm Password</span>
                <input type="password" name="password_confirmation" value="123456">
            </label>
        </div> --}}

        <div>
            <label>
                <input type="checkbox" name="status" value="1" {{ (old('status') == 1 || $user->status == 1) ? 'checked' : '' }}>
                <span>Status</span>
            </label>
        </div>
    
        <div>
            <label>Assign Roles</label>
            <br>

            <div>
                @foreach($roles as $role)
                <label>
                    <input type="checkbox" name="role[]" value="{{ $role->id }}"
                        @foreach ($user->roles as $user_role)
                            @if($user_role->id == $role->id)
                            checked
                            @endif
                        @endforeach
                    >
                    <span>{{ $role->name }}</span>
                </label>
                @endforeach
            </div>
        </div>

    	<div>
    		<input type="submit" value="Update">
    		<a href="{{ route('role.index') }}">Back</a>
    	</div>
    </form>
</div>
@endsection