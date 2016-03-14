@extends('template/default')


@section('content')

<div class="row">
	
	<div class="col-sm-3"></div>
	<div class="col-sm-5">
		<h3>Join @ cFc Network</h3>
		<hr/>



		<form class="form-horizontal" method="post" action="{{ route('join') }}">
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group{{ $errors->has('uName')? ' has-error': '' }}">
		    <label for="inputEmail3" class="col-sm-3 control-label">Full Name </label>
		    <div class="col-sm-9">
		      <input type="text" name="uName" class="form-control" id="inputEmail3" placeholder="Full Name " value="{{ Request::old('uName') }}">
				
				@if($errors->has('uName'))
					 <span id="helpBlock2" class="help-block">
					 	{{ $errors->first('uName') }}
					 </span>
				@endif
		    </div>
		  </div>

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
		  <div class="form-group{{ $errors->has('uPassword')? ' has-error': '' }}">
		    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
		    <div class="col-sm-9">
		      <input type="password" name="uPassword" class="form-control" id="inputPassword3" placeholder="Password">

				@if($errors->has('uPassword'))
					 <span id="helpBlock2" class="help-block">
					 	{{ $errors->first('uPassword') }}
					 </span>
				@endif
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-3 col-sm-9">
		      <button type="submit" class="btn btn-primary">Sign in</button>
		    </div>
		  </div>
		</form>
	</div>
	<div class="col-sm-3"></div>

</div>



@stop
