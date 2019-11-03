@extends('layouts.app1')

@section('content')

<div class="container"> 




<div style="margin-bottom: 300px;margin-left: 350px; margin-top: 160px;">

	 <a class="btn btn-default waves" href="{{ route ('confirm',[$app->id,$fee]) }}">Confirm Appointment</a>

	  <a class="btn btn-danger" href="{{ url ('cancel',$app->id) }}">Cancel Appointment</a>

	  


</div>

</div>

@endsection