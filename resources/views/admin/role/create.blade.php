@extends('admin.master')

@section('title', 'New Accounts')

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

    <form action="{{ route('role.store') }}" method="POST">
    	@csrf

    	<div>
    		<label for="name">
    			<span>Role name</span>
    			<input type="text" name="name">
    		</label>
    	</div>

        <div>
            <label>Tag Permissions: </label><br>
    
            <div>
                @foreach($permissions as $permission)
                    @if($permission->menu == 'tag')
                        <label>
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}">
                            <span>{{ $permission->name }}</span>
                        </label>
                    @endif
                @endforeach
            </div>
        </div>

        <div>
            <label>Post Permissions: </label><br>
    
            <div>
                @foreach($permissions as $permission)
                    @if($permission->menu == 'post')
                        <label>
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}">
                            <span>{{ $permission->name }}</span>
                        </label>
                    @endif
                @endforeach
            </div>
        </div>

        <div>
            <label>Account Permissions: </label><br>

            <div>
                @foreach($permissions as $permission)
                    @if($permission->menu == 'account')
                        <label>
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}">
                            <span>{{ $permission->name }}</span>
                        </label>
                    @endif
                @endforeach
            </div>
        </div>

        <div>
            <label>Settings Permissions: </label><br>

            <div>
                @foreach($permissions as $permission)
                    @if($permission->menu == 'settings')
                        <label>
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}">
                            <span>{{ $permission->name }}</span>
                        </label>
                    @endif
                @endforeach
            </div>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" cols="50" rows="5"></textarea>
        </div>

    	<div>
    		<input type="submit" name="Save">
    		<a href="{{ route('role.index') }}">Back</a>
    	</div>
    </form>
</div>
@endsection

