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

    <form action="{{ route('role.update', $role->id) }}" method="POST">
    	@csrf
        @method('PATCH')

    	<div>
    		<label for="name">
    			<span>Role name</span>
    			<input type="text" name="name" value="{{ $role->name }}">
    		</label>
    	</div>

        <div>
            <label>Tag Permissions: </label><br>
    
            <div>
                @foreach($permissions as $permission)
                    @if($permission->menu == 'tag')
                        <label>
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}" 
                            @foreach($role->permissions as $role_permission)
                                @if($role_permission->id == $permission->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            
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
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}" 
                            @foreach($role->permissions as $role_permission)
                                @if($role_permission->id == $permission->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            
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
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}" 
                            @foreach($role->permissions as $role_permission)
                                @if($role_permission->id == $permission->id)
                                    checked
                                @endif
                            @endforeach
                            >

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
                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}" 
                            @foreach($role->permissions as $role_permission)
                                @if($role_permission->id == $permission->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            <span>{{ $permission->name }}</span>
                        </label>
                    @endif
                @endforeach
            </div>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" cols="50" rows="5">{{ $role->description }}</textarea>
        </div>

    	<div>
    		<input type="submit" name="Update">
    		<a href="{{ route('role.index') }}">Back</a>
    	</div>
    </form>
</div>
@endsection

