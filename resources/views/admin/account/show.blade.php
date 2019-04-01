@extends('admin.master')

@section('title', 'All Accounts')

@section('content')
<!-- Main Content -->
<div class="container">
	<a href="{{ route('account.create') }}">Add New</a>
	
	<!-- deleted message -->
	<div></div>
	
    <table>
		<thead>
			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Mail</th>
				<th>Role(s)</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody>
			@foreach($users as $key => $user)
				<tr>
					<td>{{ $loop->index + 1 }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->phone }}</td>
					<td>{{ $user->email }}</td>

					<td>
						@foreach ($user->roles as $role)
							{{ $role->name }},
						@endforeach
					</td>

					<td>{{ $user->status ? 'Active' : 'Not Active' }}</td>
					<td><a href="{{ route('account.edit', $user->id) }}">Edit</a></td>
					<td>
						<a href="{{ route('account.index') }}" onClick="if(confirm('Are you sure, You want to delete this?')){event.preventDefault();document.getElementById('delete-form-{{ $user->id }}').submit();} else {event.preventDefault();}">Delete</a>
						<form action="{{ route('account.destroy', $user->id) }}" method="post" id="delete-form-{{ $user->id }}" style="display: none;">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
						</form>
					</td>
				</tr>
			@endforeach

			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Mail</th>
				<th>Role(s)</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</tbody>
	</table>
</div>
@endsection

