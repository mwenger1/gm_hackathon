<?php include('include/top.php'); ?>

  </div>

<script src="http://d3js.org/d3.v3.min.js"></script>

<style>

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

</style>

			<div data-role="content">

				<select id="mapTimeline">
					<option value='year'>This Year</option>
					<option value='alltime'>All Time</option>
				</select>
				<div style="text-align:center;">
				  
				<h1>Elevation<h1>
				
				<h2>&#916; 9,043 ft</h2>
			
			  <div id="elevationGraph"></div>
		
			

<script>
	$("#mapTimeline").change(function(){
	  $("#elevationGraph").html('');
	  var tmpValue = $(this).val();
		
		drawChart(tmpValue == "year" ? 12 : 36);
	})
	
	function add_commas( val, add_money_decimals, preserve_decimals )
{
  var v;

  if ( preserve_decimals )
  {
    v = val.toString();
  }
  else
  {
    v = parseFloat( val ).toFixed(2);
  }

  var ps = v.split('.');

  var whole = ps[0];
  var sub   = add_money_decimals ? ( ps[1] ? '.' + ps[1] : '.00' ) : ( preserve_decimals && ps[1] ? '.' + ps[1] : '' );

  var r = /(\d+)(\d{3})/;

  while (r.test(whole))
  {
    whole = whole.replace(r, '$1' + ',' + '$2');
  }
  return whole + sub;
}

</script>


<script>

function drawChart(layers) {
var n = 1, // number of layers
    m = layers, // number of samples per layer
    stack = d3.layout.stack(),
    layers = stack(d3.range(n).map(function() { return bumpLayer(m, .1); })),
    yGroupMax = d3.max(layers, function(layer) { return d3.max(layer, function(d) { return d.y; }); }),
    yStackMax = d3.max(layers, function(layer) { return d3.max(layer, function(d) { return d.y0 + d.y; }); });

    $("h2").html("&#916; " + add_commas(yGroupMax) + " ft");
    
var margin = {top: 50, right: 0, bottom: 20, left: 50},
    width = 380 - margin.left - margin.right,
    height = 350 - margin.top - margin.bottom;

var x = d3.scale.ordinal()
    .domain(d3.range(m))
    .rangeRoundBands([0, width], .08);

var y = d3.scale.linear()
    .domain([0, yStackMax])
    .range([height, 0]);

    
var color = d3.scale.linear()
    .domain([0, n - 1])
    .range(["#31A354", "#F7FCB9"]);

var xAxis = d3.svg.axis()
    .scale(x)
    .tickSize(0)
    .tickPadding(6)
    .orient("bottom");
    
var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");

var svg = d3.select("#elevationGraph").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var layer = svg.selectAll(".layer")
    .data(layers)
  .enter().append("g")
    .attr("class", "layer")
    .style("fill", function(d, i) { return color(i); });

var rect = layer.selectAll("rect")
    .data(function(d) { return d; })
  .enter().append("rect")
    .attr("x", function(d) { return x(d.x); })
    .attr("y", height)
    .attr("width", x.rangeBand())
    .attr("height", 0);

rect.transition()
    .delay(function(d, i) { return i * 10; })
    .attr("y", function(d) { return y(d.y0 + d.y); })
    .attr("height", function(d) { return y(d.y0) - y(d.y0 + d.y); });

svg.append("g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis);
    
svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("class", "title")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .text("ft");

d3.selectAll("input").on("change", change);
}

drawChart(12);

// Inspired by Lee Byron's test data generator.
function bumpLayer(n, o) {

  function bump(a) {
    var x = 1 / (.1 + Math.random()),
        y = 2 * Math.random() - .5,
        z = 10 / (.1 + Math.random());
    for (var i = 0; i < n; i++) {
      var w = (i / n - y) * z;
      a[i] += ( x * Math.exp(-w * w) ) * 1000;
    }
  }

  var a = [], i;
  for (i = 0; i < n; ++i) a[i] = o + o * Math.random();
  for (i = 0; i < 5; ++i) bump(a);
  return a.map(function(d, i) { return {x: i, y: Math.max(0, d)}; });
}

</script>

<?php include('include/bottom.php'); ?>