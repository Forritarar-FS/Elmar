@extends('app2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
			<script type="text/javascript" src="{{ asset('app/csgo/csgoscript3.js') }}"></script>
			<script type="text/javascript" src="{{ asset('app/csgo/csgoscript2.js') }}"></script>
			<script type="text/javascript" src="{{ asset('app/csgo/csgoscript1.js') }}"></script>


			<div class="container" align="center">
  			<div class="jumbotron" align="center">
    			<h1 align="center">CS:GO</h1>
					<h3 align="center">Welcome {{ Auth::user()->name }}</h3>
					<br>

<hr>

					<a href="#" role="button" aria-expanded="false" data-toggle="collapse" data-target="#demo2">
						<h3><img src="img/live.png" width="25" height="25"> Live Matches <span class="caret"></span></h3>
					</a>
					<div class="container">
						<div id="demo2" class="collapse">
							<p align="center" id="allData3"></p>
						</div>
					</div>

<hr>

					<a href="#" role="button" aria-expanded="false" data-toggle="collapse" data-target="#demo">
						<h3><img src="img/upcoming.png" width="20" height="20"> Upcoming Matches <span class="caret"></span></h3>
					</a>
					<div class="container">
						<div id="demo" class="collapse">
							<p align="center" id="allData2"></p>
						</div>
					</div>

<hr>

					<a href="#" role="button" aria-expanded="false" data-toggle="collapse" data-target="#demo3">
						<h3><img src="img/finshed.png" width="20" height="20"> Finished Matches <span class="caret"></span></h3>
					</a>
					<div class="container">
						<div id="demo3" class="collapse">
							<p align="center" id="allData"></p>
						</div>
					</div>

<hr>
<br>
<h5 align="center">Updated Every 15 mins!</h5>

  			</div>
		 </div>
		</div>
	</div>
</div>
@endsection
