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

</style>
    <svg width="960" height="600"></svg>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
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

d3.json("http://localhost:8888/entity/getraw", function(error, graph) {
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
      .text(function(d) { return d.id; });

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
      var url = data.hostname + "/Argus/info.php/?name=" + d.id;
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