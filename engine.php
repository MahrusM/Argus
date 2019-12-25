<!DOCTYPE html>
<meta charset="utf-8">
<style>

.links lines {
  stroke: #aaa;
}

.nodes circle {
  pointer-events: all;
  stroke: none;
  stroke-width: 1px;
}

@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
}
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
font-size: 2em;
}
.fa {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size:20px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow-x:visible;
overflow-y:hidden;
}

.main-menu {
background:#212121;
border-right:1px solid #e5e5e5;
position:absolute;
top:0;
bottom:0;
height:100%;
left:0;
width:60px;
overflow-y:hidden;
overflow-x:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#999;
 font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}

input[type=submit] {
  background-color: #808080;
  color: white;
  margin: 4px;
  border-radius: 1px;
  cursor: pointer;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:0;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}
nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#5fa2db;
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}


</style>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <div id="areabb" class="area"></div><nav class="main-menu">
            <ul style="font-family: Raleway;">
                <li id="Arguslogo" class="has-subnav">
                    <a class="collapsible" href="#">
                      <i class="fa fa-eye fa-2x"></i>
                        <span class="nav-text" style="text-align:center; font-size:30px; font-weight:bold; font-family: Raleway; color:white;">
                            Argus
                        </span>
                      <i class="fa fa-eye fa-2x"></i>
                    </a>
                    <div class="collapsing" style="display:none; font-family: Raleway; color:white;">
                      
                    </div>
                </li>
                <li>
                    <a onClick="window.location.reload();">
                        <i class="fa fa-refresh fa-2x"></i>
                        <span class="nav-text">
                            Refresh
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                      <a class="collapsible" href="#">
                          <i class="fa fa-plus fa-2x"></i>
                          <span class="nav-text">
                              Add Node
                          </span>
                      </a>
                    </div>
                    <div class="collapsing" style="display:none; font-family: 'Titillium Web', sans-serif; color:white;">
                      <form action="addnode.php" method="post" style="margin-left:20px">
                          Nama:<br>
                          <input type="text" name="name" value="">
                          <br>
                          Jabatan:<br>
                          <input type="text" name="jabatan" value="">
                          <br>
                          No Telepon:<br>
                          <input type="text" name="telp" value="">
                          <br>
                          <br>
                          <input type="submit" value="Submit">
                      </form>
                    </div>
                </li>
                <li class="has-subnav">
                      <a class="collapsible" href="#">
                          <i class="fa fa-plus fa-2x"></i>
                          <span class="nav-text">
                          Add Relationship
                          </span>
                      </a>
                    </div>
                    <div class="collapsing" style="display:none; font-family: 'Titillium Web', sans-serif; color:white;">
                      <form action="addrelationship.php" method="post" style="margin-left:20px">
                          Initial Node:<br>
                          <input type="text" name="name1" value="">
                          <br>
                          Target Node:<br>
                          <input type="text" name="name2" value="">
                          <br>
                          Issue:<br>
                          <input type="text" name="issue" value="">
                          <br>
                          Stance:<br>
                          <input type="radio" name="score" value="1" checked><span style="color:#228B22"> With</span> <br>
                          <input type="radio" name="score" value="0"> Neutral<br>
                          <input type="radio" name="score" value="-1"><span style="color:#FF3333"> Against</span> <br>
                          
                          <input type="submit" value="Submit">
                      </form>
                    </div>
                </li>
                <li class="has-subnav">
                    <a class="collapsible" href="#">
                       <i class="fa fa-minus fa-2x"></i>
                        <span class="nav-text">
                            Delete Component
                        </span>
                    </a>
                    <div class="collapsing" style="display:none; font-family: 'Titillium Web', sans-serif; color:white;">
                    <form action="deletenode.php" method="post" style="margin-left:20px">
                          Nama:<br>
                          <input type="text" name="name" value="">
                          <br>
                          <input type="submit" value="Submit">
                      </form>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graphs and Statistics
                        </span>
                    </a>
                </li>
                
            </ul>
        </nav>
    <svg width="960" height="600"></svg>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
// TAMPILAN
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  })
}

document.getElementById("areabb").addEventListener("mouseleave", function(){
  document.getElementsByClassName("collapsing").style.display = "none";
})

// for (i = 0; i < coll.length; i++) {
//   coll[i].addEventListener("mouseleave", function() {
//     this.classList.toggle("active");
//     var content = this.nextElementSibling;
//     content.style.display = "none";
//   });
// }

// var coll = document.getElementsByClassName("collapsing");
// var i;

// for (i = 0; i < coll.length; i++) {
//   coll[i].addEventListener("mouseleave", function() {
//     this.classList.toggle("active");
//     var content = this;
//     content.style.display = "none";
//   });
// }

// SCRIPT AJAX
console.log("WOW")
// $.ajax({
//   type: "GET",
//   url: "http://localhost:8888/entity/getraw",
//   data: "",
//   dataType: "application/json",
//   success: function (response) {

//   }
//   // console.log("WOW4")
// });

$("svg").attr("width", $(window).width());
$("svg").attr("height", $(window).height());

var svg = d3.select("svg"),
    width = +svg.attr("width"),
    height = +svg.attr("height");

var simulation = d3.forceSimulation()
    .force("link", d3.forceLink().id(function(d) { return d.id; }))
    .force("charge", d3.forceManyBody())
    .force("center", d3.forceCenter(width / 2, height / 2));
// http://localhost:8888/entity/getraw
d3.json("http://localhost:8888/api/entity/getraw?", function(error, graph) {
  if (error) throw error;

  console.log(graph)

  var ppg = svg.append("g")
      .attr("class", "links")
    .selectAll("line")
    .data(graph.links)

  var link = ppg.enter().append("line").attr("stroke", "#faa");



  var ppge = svg.append("g")
      .attr("class", "nodes")
    .selectAll("circle")
    .data(graph.nodes)
  
  var node = ppge.enter().append("circle")
      .attr("r", 5)
      .on("click", nodeclicked)
      .call(d3.drag()
          .on("start", dragstarted)
          .on("drag", dragged)
          .on("end", dragended))

  console.log("node")
  console.log(node)
  console.log("link")
  console.log(link)
  

  node.append("title")
      .text(function(d) { return d.name; });

  simulation
      .nodes(graph.nodes)
      .on("tick", ticked);

  simulation.force("link")
      .links(graph.links);

  function ticked() {
    link
        .attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node
        .attr("cx", function(d) { return d.x; })
        .attr("cy", function(d) { return d.y; });
  }
});

function nodeclicked(d) {
    console.log("PPG")
    console.log(d)
  $.getJSON("config.json", function (data) {
      console.log("INFO LOAD")
      var url = data.hostname + "/info.php/?name=" + d.name;
      console.log(url)    
      $(location).attr('href',url);
    }
  );
}

function dragstarted(d) {
  if (!d3.event.active) simulation.alphaTarget(0.3).restart();
  d.fx = d.x;
  d.fy = d.y;
}

function dragged(d) {
  d.fx = d3.event.x;
  d.fy = d3.event.y;
}

function dragended(d) {
  if (!d3.event.active) simulation.alphaTarget(0);
  d.fx = null;
  d.fy = null;
}

</script>