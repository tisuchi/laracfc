@extends('template/default')


@section('content')

<div class="row">
	
	<div class="col-sm-3"></div>
	<div class="col-sm-5">
		<h3>Login @ cFc Network</h3>
		<hr/>



		<form class="form-horizontal" method="post" action="{{ route('login') }}">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		 
		  <div class="form-group{{ $errors->has('uEmail')? ' has-error': '' }}">
		    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
		    <div class="col-sm-9">
		      <input type="text" name="uEmail" class="form-control" id="inputEmail3" placeholder="Email" value="{{ Request::old('uEmail') }}">

				@if($errors->has('uEmail'))
					 <span id="helpBlock2" class="help-block">
					 	{{ $errors->first('uEmail') }}
					 </span>
				@endif
		    </div>
		  </div>
		  <div class="form-group{{ $errors->has('password')? ' has-error': '' }}">
		    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
		    <div class="col-sm-9">
		      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">

				@if($errors->has('password'))
					 <span id="helpBlock2" class="help-block">
					 	{{ $errors->first('password') }}
					 </span>
				@endif
		    </div>
		  </div>


		  <div class="form-group">
		    <div class="col-sm-offset-3 col-sm-9">
		      <button type="submit" class="btn btn-primary">Log Me Now</button>
		    </div>
		  </div>
		</form>
	</div>
	<div class="col-sm-3"></div>

</div>



@stop
