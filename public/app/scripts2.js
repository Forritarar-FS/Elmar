$.ajax({
url:"https://www.kimonolabs.com/api/9j7lotp6?apikey=GuzWad3GJVgnt2TfuJMJmeANHfL7BOj0",
crossDomain: true,
dataType: "jsonp",
success: function (response) {
  console.log("it worked")
  console.log(response)
  var coll = response.results.collection1;
  for (var i = 0; i < coll.length; i++) {
    var what1 = coll[i].time.text;
    var what2 = what1.substring(0, 5);
    $("#allData").append("<div class='panel panel-default'><div class='panel-heading'><div class='panel-body'><h5 id='center'>"+ what2 +"</h5><h5 id='center'>"+ coll[i].date +"</h5><div id='container'>" + "<div id='left'>" + coll[i].team1.text + "</div><div id='right' '>" + coll[i].team2.text + "</div><div id='center'>VS</div></div></div></div></div>");

  }

},
error: function (xhr, status) {
  console.log("it didn't worked")
}
});
