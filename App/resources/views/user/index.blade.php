@extends('template.admin')
@section('content')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">
		&times;
	</span>
	</button>
	{{Session::get('message')}}
</div>
@endif


	<table class="table table-responsive">
		<thead>
			<th>Identification</th>
			<th>Name</th>
			<th>Last Name</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Adress</th>
			<th>Celphone</th>
			<th>Type</th>
			<th>Operation</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->identi}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->last_name}}</td>
			<td>{{$user->user_name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->adress}}</td>
			<td>{{$user->celphone}}</td>
			<td>{{$user->type}}</td>
			<td>
				{!!link_to_route('user.edit', $title ='Edit', $parameters = $user -> id, $attributes =['class' => 'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
@stop
