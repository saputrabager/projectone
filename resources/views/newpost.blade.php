@extends('layouts.app')

@section('content')
<div class="container">
	<div class="form1">
		<form class="form-inline" action="" method="">
		{!! csrf_field() !!}
			<div class="form-group ">
				<label for="p_title" class="labelpost" >Title</label>
				<input class="form-control" type="text" name="p_title">
			</div>
			<div style="form-group ">
				<label for="p_desc" class="labelpost">Description</label>
				<textarea class="form-control" type="text" name="p_desc"></textarea>
			</div>
			<div class="form-group ">
				<label class="labelpost">Title</label>
				<input class="form-control" type="text" name="p_title">
			</div>
			<div class="form-group ">
				<label class="labelpost">Title</label>
				<input class="form-control" type="text" name="p_title">
			</div>
			<div class="form-group ">
				<label class="labelpost">Title</label>
				<input class="form-control" type="text" name="p_title">
			</div>
		</form>
	</div>
</div>
@endsection