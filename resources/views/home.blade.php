@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
			<script>
				$.ajax({
				url:"https://www.kimonolabs.com/api/5f30ts1o?apikey=GuzWad3GJVgnt2TfuJMJmeANHfL7BOj0",
				crossDomain: true,
				dataType: "jsonp",
				success: function (response) {
					console.log("it worked")
					console.log(response)
					var coll = response.results.collection1;
					for (var i = 0; i < coll.length; i++) {
						$("#allData").append("<div class='panel panel-default'><div class='panel-heading'><div class='panel-body'>" + coll[i].team1.text + " " + coll[i].team1score + " - " + coll[i].team2score + " " + coll[i].team2.text + "<br></div> </div></div>");
					}

				},
				error: function (xhr, status) {
					console.log("it didn't worked")
				}
			});

			</script>
					<h2 id="allData" align="center"></h2>
		</div>
	</div>
</div>
@endsection
