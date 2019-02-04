@extends('admin.master')

@section('title', 'All Roles')

@section('main-content')
<!-- Main Content -->
<div class="container">
	<a href="{{ route('role.create') }}">Add New</a>
	
    <table>
		<thead>
			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Slug</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody>
			@foreach($roles as $key => $role)
			<tr>
				<td>{{ $loop->index + 1 }}</td>
				<td>{{ $role->name }}</td>
				<td>{{ $role->slug }}</td>
				<td><a href="{{ route('role.edit', $role->id) }}">Edit</a></td>
				<td>
					<a href="{{ route('role.index') }}" onClick="if(confirm('Are you sure, You want to delete this?')){event.preventDefault();document.getElementById('delete-form-{{ $role->id }}').submit();} else {event.preventDefault();}">Delete</a>

					<form action="{{ route('role.destroy', $role->id) }}" method="post" id="delete-form-{{ $role->id }}" style="display: none;">
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
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</tbody>
	</table>
</div>
@endsection

