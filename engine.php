<!DOCTYPE html>
<meta charset="utf-8">
<style>

.links line {
  stroke-width : 3px;
  /* stroke: #aaa; */
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

.nodes circle {
  stroke: #FFFFFF;
  stroke-width: 4px;
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
                      <form autocomplete="off" action="addnode.php" method="post" style="margin-left:20px">
                          Nama:<br>
                          <input type="text" name="name" value="">
                          <br>
                          Jabatan:<br>
                          <input type="text" name="jabatan" value="">
                          <br>
                          No Telepon:<br>
                          <input type="text" name="telp" value="">
                          <br>
                          Email:<br>
                          <input type="text" name="email" value="">
                          <br>
                          Linked In:<br>
                          <input type="text" name="linkedin" value="">
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
                      <form autocomplete="off" action="addrelationship.php" method="post" style="margin-left:20px">
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
                    <form autocomplete="off" action="deletenode.php" method="post" style="margin-left:20px">
                          Nama:<br>
                          <input type="text" name="name" value="">
                          <br>
                          <input type="submit" value="Submit">
                      </form>
                    </div>
                </li>
                <li class="has-subnav">
                    <a class="collapsible" href="#">
                       <i class="fa fa-minus fa-2x"></i>
                        <span class="nav-text">
                            Delete Relationship
                        </span>
                    </a>
                    <div class="collapsing" style="display:none; font-family: 'Titillium Web', sans-serif; color:white;">
                      <form autocomplete="off" action="deleterelationship.php" method="post" style="margin-left:20px">
                          Nama 1:<br>
                          <input type="text" name="name1" value="">
                          <br>
                          Nama 2:<br>
                          <input type="text" name="name2" value="">
                          <br>
                          Issue:<br>
                          <input type="text" name="issue" value="">
                          <br>
                          <input type="submit" value="Submit">
                      </form>
                    </div>
                </li>
                <li class="has-subnav">
                    <a class="collapsible" href="#">
                       <i class="fa fa-circle fa-2x"></i>
                        <span class="nav-text">
                            Isolate Issues
                        </span>
                    </a>
                    <div class="collapsing" style="display:none; font-family: 'Titillium Web', sans-serif; color:white;">
                      <form style="margin-left:20px">
                          Issues (separate with a comma):<br>
                          <input id="issuesinp" type="text" name="issue" value="">
                          <br>
                          <script type="module">

                            import {hostname} from './config.js';

                            var issueString


                            window.issueClick =  function issueClick() {
                              console.log("ISSUE KURIKU")

                              issueString = document.getElementById("issuesinp").value.replace(", ", ",").split(",")

                              console.log(issueString)
                              
                              var redirectURL = hostname + "/engine.php?"

                              issueString.forEach(element => {
                                redirectURL += ("issue=" + element +"&")
                              });

                              window.location.replace(redirectURL);                              

                              return false
                            }

                          </script>
                          <button id="pepegebutton" type="button" onClick="issueClick()"> Submit </button>
                      </form>
                    </div>
                </li>
                <li class="has-subnav">
                    <a class="collapsible" href="#">
                       <i class="fa fa-search fa-2x"></i>
                        <span class="nav-text">
                            Search
                        </span>
                    </a>
                    <div class="collapsing" style="display:none; font-family: 'Titillium Web', sans-serif; color:white;">
                      <form autocomplete="off" action="searchinfo.php" method="post" style="margin-left:20px">
                          Search for subject:<br>
                          <input id="searchinp" type="text" name="search" value="">
                          <br>
                          <input type="submit" value="Submit">
                      </form>
                    </div>
                </li>
                
            </ul>
        </nav>
    <svg width="1060" height="720"></svg>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="module">

// TAMPILAN

import {hostname} from './config.js';

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

// SCRIPT AJAX
console.log("WOW")

$("svg").attr("width", $(window).width());
$("svg").attr("height", $(window).height());

var svg = d3.select("svg"),
    width = +svg.attr("width"),
    height = +svg.attr("height");

var simulation = d3.forceSimulation()
    .force("link", d3.forceLink().id(function(d) { return d.id; }).strength(0.5))
    .force("charge", d3.forceManyBody().strength(function(d) { return [forcecircle(d.id)]; }))
    .force("center", d3.forceCenter(width / 2, height / 2));

// var simulation = d3.forceSimulation()
//     .force("link", d3.forceLink().id(function(d) { return d.id; }).strength(0.5))
//     .force("charge", d3.forceManyBody())
//     .force("center", d3.forceCenter(width / 2, height / 2))

var datallink

$.ajax({
  type: "GET",
  url: "http://localhost:8888/api/entity/getraw?",
  async: false,
  success: function (response) {
    datallink = response['links']
    console.log("DATALINK", datallink)
  }
});

var colorord = d3.scaleOrdinal(d3.schemeCategory20);

function color(inp) {
  if (inp == 1) {
    return "#1ed918"
  }
  if (inp == -1) {
    return "#d14141"
  }
  return "#52a3d9"
} 

// http://localhost:8888/api/entity/getraw?issue[]=Anime&issue[]=pepeg
var url_string = window.location.href;
var url = new URL(url_string);
var issues = url.searchParams.getAll("issue");

console.log("ISSSUES", issues)

var getrawurl = "http://localhost:8888/api/entity/getraw?"
issues.forEach(element => {
  getrawurl = getrawurl + "issue[]=" + element + "&";
});

console.log(getrawurl)

d3.json(getrawurl, function(error, graph) {
  if (error) throw error;

  console.log(graph)

  var ppg = svg.append("g")
      .attr("class", "links")
    .selectAll("line")
    .data(graph.links)

  var link = ppg.enter().append("line").attr("stroke", function(d) { console.log(color(d.value)); return color(d.value); });

  var node = svg.append("g")
      .attr("class", "nodes")
    .selectAll("g")
    .data(graph.nodes)
    .enter().append("g")

  var circles = node.append("circle")
      .attr("r", function(d) { return sizecircle(d.id) })
      .on("click", nodeclicked)
      .attr("fill", function(d) { return colorord(d.description); })
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
  
  node.append("text")
      .text(function(d) {
        return d.name;
      })
      .attr('fill', '#4ba5d6')
      .attr('font-family', "Raleway")
      .attr('font-weight', "bold")
      .attr('font-size', "10px")
      .attr('x', 6)
      .attr('y', 3);

  simulation
      .nodes(graph.nodes)
      .on("tick", ticked);

  simulation.force("link")
      .links(graph.links)
      .strength(function(link)  {
        if (link.value == -1)  {
          console.log(link.target,"RED")
          console.log(link.source,"RED")
          return 0.1
        };
        return 0.65;
      })  

  function ticked() {
    link
        .attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node
        .attr("transform", function(d) {
          return "translate(" + d.x + "," + d.y + ")";
        })
        // .attr("cx", function(d) { return d.x; })
        // .attr("cy", function(d) { return d.y; });
  }
});

function sizecircle(did) {
  // console.log(typeof(issues))  
  var initsize = 5; 
  datallink.forEach(element => {
    if (issues.includes(element.issue)){
      if ((element.source == did) || (element.target == did)) {
        initsize = initsize + 2;
      }
    }
  });
  return initsize
}

function forcecircle(did) {
  var initsize = -10; 
  datallink.forEach(element => {
    if (element.value == 1){
      if ((element.source == did) || (element.target == did)) {
        initsize = initsize - 15;
      }
    }else{
      if ((element.source == did) || (element.target == did)) {
        initsize = initsize - 20;
      }
    }
  });
  // console.log("FORCES", initsize)
  return initsize
}

// 1/(1 + e^(-x))



// function forcelink(did) {
//   var licounter = 0;
//   console.log(did, "DID PEPEG")
//   datallink.forEach(element => {
//     if (element.value == 1){
//       if ((element.source == did) || (element.target == did)) {
//         licounter = licounter + 1;
//         console.log("INCREMENET")
//       }
//     }else{
//       if ((element.source == did) || (element.target == did)) {
//         licounter = licounter - 1;
//         console.log("DECREMENET")
//       }
//     }
//   });
//   var newforce = 1 / (1 + Math.exp(-licounter));
//   console.log("NEWlink", newforce)
//   return newforce
// }

function nodeclicked(d) {
    console.log("PPG")
    console.log(d)

    var url = hostname + "/info.php/?name=" + d.name;
    console.log(url)    
    $(location).attr('href',url); 
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