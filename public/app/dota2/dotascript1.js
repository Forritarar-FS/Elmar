$.ajax({
url:"https://www.kimonolabs.com/api/903b5duy?apikey=GuzWad3GJVgnt2TfuJMJmeANHfL7BOj0",
crossDomain: true,
dataType: "jsonp",
success: function (response) {
  console.log("it worked")
  console.log(response)
  var coll = response.results.collection1;
  for (var i = 0; i < coll.length; i++) {
    $("#allData").append("<div class='panel panel-default'><div class='panel-heading'><div class='panel-body'><div id='container'>" + "<div id='left'>" + coll[i].Team_1.text + "</div><div id='right' '>" + coll[i].Team_2.text + "</div><div id='center'> " + coll[i].Team_1_Score + " - " + coll[i].Team_2_Score + "</div></div></div></div></div>");
  }

},
error: function (xhr, status) {
  console.log("it didn't worked")
}
});
