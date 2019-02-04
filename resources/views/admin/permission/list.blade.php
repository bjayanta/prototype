@extends('admin.master')

@section('title', 'All Permissions')

@section('main-content')
<!-- Main Content -->
<div class="container">
	<a href="{{ route('permission.create') }}">Add New</a>
	
    <table>
		<thead>
			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Slug</th>
				<th>Menu</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody>
			@foreach($permissions as $key => $permission)
			<tr>
				<td>{{ $loop->index + 1 }}</td>
				<td>{{ $permission->name }}</td>
				<td>{{ $permission->slug }}</td>
				<td>{{ $permission->menu }}</td>
				<td>{{ $permission->description }}</td>
				<td><a href="{{ route('permission.edit', $permission->id) }}">Edit</a></td>
				<td>
					<a href="{{ route('permission.index') }}" onClick="if(confirm('Are you sure, You want to delete this?')){event.preventDefault();document.getElementById('delete-form-{{ $permission->id }}').submit();} else {event.preventDefault();}">Delete</a>

					<form action="{{ route('permission.destroy', $permission->id) }}" method="post" id="delete-form-{{ $permission->id }}" style="display: none;">
                    	{{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
				</td>
			</tr>
			@endforeach

			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Slug</th>
				<th>Menu</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</tbody>
	</table>
</div>
@endsection

