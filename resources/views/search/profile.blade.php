@extends('template/default')


@section('content')

<h1>Search your inFluencer @cFc</h1>
<hr/>

<div class="alert alert-info" role="alert"> You are looking for {{ Request::input('query') }} </div>


<div class="row">

	@if(!$profiles->count())
		<center><h1>but Nothing Yet...! </h1>  </center>
	@else 

		@foreach( $profiles as $profile)

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <center>
		      	<img src=" {{ $profile->getAvatarURL() }} " alt="Profile Photo of {{ $profile->getUsername()}}">
			      <div class="caption">
			        <h4> {{ $profile->getUsername() }} </h4>
			        <p>member since {{ $profile->created_at->diffForHumans() }} </p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
		      </center>
		    </div>
		  </div>

		@endforeach

	@endif


</div>


@stop