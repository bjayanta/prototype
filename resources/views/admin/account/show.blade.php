@extends('admin.master')

@section('title', 'All Accounts')

@section('content')
<!-- Main Content -->
<div class="container">

	@can('account-create')
		<a href="{{ route('account.create') }}">Add New</a>
	@endcan
	
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

				@can('account-update')
					<th>Edit</th>
				@endcan

				@can('account-delete')
					<th>Delete</th>
				@endcan
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

					@can('account-update')
						<td><a href="{{ route('account.edit', $user->id) }}">Edit</a></td>
					@endcan

					@can('account-delete')
						<td>
							<a href="{{ route('account.index') }}" onClick="if(confirm('Are you sure, You want to delete this?')){event.preventDefault();document.getElementById('delete-form-{{ $user->id }}').submit();} else {event.preventDefault();}">Delete</a>
							<form action="{{ route('account.destroy', $user->id) }}" method="post" id="delete-form-{{ $user->id }}" style="display: none;">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
							</form>
						</td>
					@endcan
				</tr>
			@endforeach

			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Mail</th>
				<th>Role(s)</th>
				<th>Status</th>

				@can('account-update')
					<th>Edit</th>
				@endcan

				@can('account-delete')
					<th>Delete</th>
				@endcan
			</tr>
		</tbody>
	</table>
</div>
@endsection

