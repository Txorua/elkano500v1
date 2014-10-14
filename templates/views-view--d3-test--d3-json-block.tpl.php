<?php
$script = '
var tpj = jQuery;
tpj.noConflict();
var losNodos = ' . $rows . ';

tpj(document).ready(function($) {
var body = d3.select("#block-system-main");
var svg = body.append("svg")
              .attr("width", 960)
              .attr("height", 500)
var nodos = svg.selectAll("text.nodo")
               .data(losNodos.nodes)
               .enter()
               .append("text")
               .attr("x", 10)
               .attr("y", function(d, i) { return i * 25; })
               .text(function(d) { return d.node.title; });
});

var projection = d3.geo.mercator()
                       .center([-0, 38.8])
                       .scale(890);
var path = d3.geo.path()
                 .projection(projection);
var mapa = d3.json("' . base_path() . path_to_theme() . '/assets/files/oceans.json", function(json) {
  var svg = d3.select("svg")
  svg.selectAll("path")
     .data(json.features)
     .enter()
     .append("path")
     .attr("d", path)
     .style("fill", "lightblue");
  });

d3.select("#block-system-main")
  .append("div")
  .attr("id", "map");
var vector = new ol.layer.Vector({
  source: new ol.source.KML({
    extractStyles: false,
    projection: "EPSG:3857",
    url: "' . base_path() . path_to_theme() . '/assets/files/TxakoliBodegas.kml"
  }),
});
var map = new ol.Map({
  layers: [
    new ol.layer.Tile({
      source: new ol.source.Stamen({
        layer: "watercolor"
      })
    }), vector
  ],
  target: "map",
  view: new ol.View({
    center: ol.proj.transform([0, 38], "EPSG:4326", "EPSG:3857"),
    zoom: 4
  })
});
';
drupal_add_js($script, array('type' => 'inline', 'scope' => 'footer', 'weight' => 2));
?>
