$.ajax({
url:"https://www.kimonolabs.com/api/93qn50ok?apikey=GuzWad3GJVgnt2TfuJMJmeANHfL7BOj0",
crossDomain: true,
dataType: "jsonp",
success: function (response) {
  console.log("it worked")
  console.log(response)
  var coll = response.results.collection1;
  for (var i = 0; i < coll.length; i++) {
    var what1 = coll[i].Time.text;
    var what2 = what1.substring(0, 5);
    $("#allData2").append("<div class='panel panel-default'><div class='panel-heading'><div class='panel-body'><div id='container'>" +"<div id='left'><img src='"+coll[i].Team_1_Picture.src+"' width='25' height='25'></img> " + coll[i].Team_1.text + "</div><div id='right'>" + coll[i].Team_2.text + " <img src='"+coll[i].Team_2_Picture.src+"' width='25' height='25'></img></div><div id='center'><h4>"+ what2 +"</h4></div></div></div><span class='' aria-hidden='true'></span></div></div>");

  }

},
error: function (xhr, status) {
  console.log("it didn't worked")
}

});
