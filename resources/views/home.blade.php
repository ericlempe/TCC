<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
      <script src="https://cdn-webgl.wrld3d.com/wrldjs/dist/latest/wrld.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.1/leaflet.css" rel="stylesheet" />

      <link href="https://cdn-webgl.wrld3d.com/wrldjs/addons/resources/latest/css/wrld.css" rel="stylesheet"/>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
      <script src="https://cdn-webgl.wrld3d.com/wrldjs/addons/indoor_control/latest/indoor_control.js"></script>



    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- DevExtreme themes -->
   <!--  <link rel="stylesheet" type="text/css" href="css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="css/dx.light.css" /> -->
    <!-- DevExtreme library -->
    <!-- <script type="text/javascript" src="js/dx.all.js"></script> -->
  
   <!--  <link rel="stylesheet" href="https://api.mazemap.com/js/v1.1.0/mazemap.min.css">
    <script type='text/javascript' src='https://api.mazemap.com/js/v1.1.0/mazemap.min.js'></script> -->

    <!-- <style type="text/css">
      #vector-map {
        width: 100%;
        height: 400px;
        display: block;
      }
    </style> -->

  </head>
  <body>

    <!-- <div id="mapid" style="height: 300px"></div> -->

    <!-- <div class="demo-container">
        <div id="vector-map"></div>
    </div> -->

    <div style="position: relative">
      <div id="widget-container" class="wrld-widget-container"></div>
      <div id="map" style="height: 600px; width: 100%"></div>
      <script>
        var map = L.Wrld.map("map", "c97740d11b807e4d5fdcba8f8ec83250", {
          center: [37.782276519634706, -122.40476157895424],
          zoom: 17,
          indoorsEnabled: true
        });

        var indoorControl = new WrldIndoorControl("widget-container", map);

        var layerOptions = {
          indoorMapId: "intercontinental_hotel_8628",
          indoorMapFloorId: 1
        };

        var marker = L.marker([37.781941, -122.404752], layerOptions).addTo(map);

        var leafletPolygonPoints = [
          [37.782279, -122.404588],
          [37.782262, -122.404359],
          [37.782149, -122.404454],
          [37.782207, -122.404541]
        ];
        var leafletPolygon = L.polygon(leafletPolygonPoints, layerOptions).addTo(map);

        var wrldPolygonPoints = [
          [37.782084, -122.404578],
          [37.782126, -122.404530],
          [37.782057, -122.404440],
          [37.782012, -122.404491]
        ];
        var wrldPolygon = L.Wrld.polygon(wrldPolygonPoints, layerOptions).addTo(map);
      </script>
    </div>
  	
    <script type="text/javascript">



      // $(function(){ 
      //   var buildingData = {
      //     type: "FeatureCollection",
      //     features: [
      //         {
      //             type: "Feature",
      //             geometry: {
      //                 type: "Polygon",
      //                 coordinates: [[
      //                     [10, -80],
      //                     [-80, -80],
      //                     [-80, 80],
      //                     [40, 80],
      //                     [40, -20],
      //                     [100, -20],
      //                     [100, -80],
      //                     [30, -80],
      //                     [30, -74],
      //                     [34, -74],
      //                     [34, -68],
      //                     [40, -68],
      //                     [40, -74],
      //                     [94, -74],
      //                     [94, -26],
      //                     [40, -26],
      //                     [40, -60],
      //                     [34, -60],
      //                     [34, 74],
      //                     [-74, 74],
      //                     [-74, 30],
      //                     [10, 30],
      //                     [10, 24],
      //                     [-74, 24],
      //                     [-74, -24],
      //                     [10, -24],
      //                     [10, -30],
      //                     [-74, -30],
      //                     [-74, -74],
      //                     [10, -74]

      //                 ]]
      //             }
      //         }
      //     ]
      //   };

      //   var roomsData = {
      //     type: "FeatureCollection",
      //     features: [
      //         {
      //             type: "Feature",
      //             properties: {
      //                 name: "Room 1",
      //                 square: 576
      //             },
      //             geometry: {
      //                 type: "Polygon",
      //                 coordinates: [[
      //                     [-74, -30],
      //                     [34, -30],
      //                     [34, -74],
      //                     [-74, -74]
      //                 ]]
      //             }
      //         }, {
      //             type: "Feature",
      //             properties: {
      //                 name: "Room 2",
      //                 square: 600
      //             },
      //             geometry: {
      //                 type: "Polygon",
      //                 coordinates: [[
      //                     [-74, 24],
      //                     [34, 24],
      //                     [34, -24],
      //                     [-74, -24]
      //                 ]]
      //             }
      //         }, {
      //             type: "Feature",
      //             properties: {
      //                 name: "Room 3",
      //                 square: 540
      //             },
      //             geometry: {
      //                 type: "Polygon",
      //                 coordinates: [[
      //                     [-74, 74],
      //                     [34, 74],
      //                     [34, 30],
      //                     [-74, 30]
      //                 ]]
      //             }
      //         }, {
      //             type: "Feature",
      //             properties: {
      //                 name: "Room 4",
      //                 square: 288
      //             },
      //             geometry: {
      //                 type: "Polygon",
      //                 coordinates: [[
      //                     [40, -26],
      //                     [94, -26],
      //                     [94, -74],
      //                     [40, -74]
      //                 ]]
      //             }
      //         }
      //     ]
      //   };

      //   $("#vector-map").dxVectorMap({
      //     maxZoomFactor: 4,
      //     projection: DevExpress.viz.map.projection({
      //         to: function (coordinates) {
      //             return [coordinates[0] / 100, coordinates[1] / 100];
      //         },
      
      //         from: function (coordinates) {
      //             return [coordinates[0] * 100, coordinates[1] * 100];
      //         }
      //     }),
      //     layers: [{
      //         hoverEnabled: false,
      //         dataSource: buildingData,
      //         name: "building"
      //     }, {
      //         color: "transparent",
      //         borderWidth: 1,
      //         label: {
      //             enabled: true,
      //             dataField: "name"
      //         },
      //         dataSource: roomsData,
      //         name: "rooms"
      //     }],
      //     tooltip: {
      //         enabled: true,
      //         customizeTooltip: function (arg) {
      //             if(arg.layer.name === "rooms")
      //                 return { text: "Square: " + arg.attribute("square") + " ft&#178" };
      //         }
      //     }
      //   });
      // });

      // var map = Maze.map('mapid', { campusloader: false });
      // map.setView([-20.310826, -40.314446], 19);
      // Maze.marker([-20.311009, -40.314567], {
      //     icon: Maze.icon.chub({colour: 'green', glyph:'bus'})
      // }).addTo(map);


      // L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
      //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      //     maxZoom: 21,
      //     id: 'mapbox.streets',
      //     accessToken: 'sk.eyJ1IjoiZXJpY2xlbXBlIiwiYSI6ImNqbmo0MjM2ZzB1YWgzcHF4Y3c1dG42cHkifQ.edsDtKK520cK6-Bg8Et2eA'
      // }).addTo(map);
      // Adicionar um ponto
      // var marker = L.marker([-20.31090116, -40.31442528]).addTo(map);




    </script>
  </body>
</html>