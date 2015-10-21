@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
				<script>
				  $.ajax({
				  url:"https://www.kimonolabs.com/api/9j7lotp6?apikey=GuzWad3GJVgnt2TfuJMJmeANHfL7BOj0",
				  crossDomain: true,
				  dataType: "jsonp",
				  success: function (response) {
				    console.log("it worked")
						console.log(response)
				  },
				  error: function (xhr, status) {
				    console.log("it didn't worked")
				  }
				});</script>
				<div class="panel-body">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
