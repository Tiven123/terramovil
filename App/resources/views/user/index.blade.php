@extends('template.principalUser')
@section('content')

<?php $message=Session::get('message')?>
@if($message == 'ok')
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">
		&times;
	</span>
	</button>
	register of user successful
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
		</tbody>
		@endforeach
	</table>
@stop
