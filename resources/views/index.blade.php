@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
			<script type="text/javascript" src="{{ asset('app/script3.js') }}"></script>
			<script type="text/javascript" src="{{ asset('app/scripts2.js') }}"></script>


			<div class="container" align="center">
  			<div class="jumbotron" align="center">
    			<h1 align="center">Welcome {{ Auth::user()->name }}</h1>
					<h3>Live Matches</h3>
						<p align="center" id="allData2"></p>
					<br>
					<h3>Upcoming Matches</h3>
						<p align="center" id="allData"></p>
  			</div>
		 </div>
		</div>
	</div>
</div>
@endsection
