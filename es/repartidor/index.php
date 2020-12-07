<!doctype html>
<html lang="en">
  <head>
		<!-- estilos de ccs de la pagina -->
	  <title>admin</title>
	<!-- <img src="../../index.html" alt="">-->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">
    


    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

 <style>
  #map { 
  widh: 50px;
  height: 600px; }
 </style>
 
		<!-- css necesario de la plantilla-->
	<?php
		include '../../public/inc/template/header.php';
	?>
<body>
	<div class="wrapper d-flex align-items-stretch">
	<?php
 		// carga del menu
		include '../../public/inc/template/menu_r.php';
	?>
        <!--Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<!-- Inico del contenido de la seccion -->
				<h1>contenido del repartidor</h1>
                <div id="content" class="p-4 p-md-5 pt-5">

                    <div id="map" class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0" style="position: relative; outline: none;"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="./leaflet_files/6102.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(335px, 99px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6102(1).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(591px, 99px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6101.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(335px, -157px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6101(1).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(591px, -157px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6103.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(335px, 355px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6103(1).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(591px, 355px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6102(2).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(79px, 99px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6102(3).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(847px, 99px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6101(2).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(79px, -157px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6101(3).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(847px, -157px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6103(2).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(79px, 355px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6103(3).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(847px, 355px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6102(4).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-177px, 99px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6102(5).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1103px, 99px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6101(4).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-177px, -157px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6101(5).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1103px, -157px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6103(4).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-177px, 355px, 0px); opacity: 1;"><img alt="" role="presentation" src="./leaflet_files/6103(5).png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1103px, 355px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="./leaflet_files/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(756px, 300px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="./leaflet_files/marker-icon.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive leaflet-marker-draggable" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(756px, 300px, 0px); z-index: 300;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(2.04216e+06px, 1.56231e+06px, 0px) scale(8192);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="https://mappinggis.com/visores_webmapping/leaflet.html#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="https://mappinggis.com/visores_webmapping/leaflet.html#" title="Zoom out" role="button" aria-label="Zoom out">-</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"><div class="leaflet-control-scale leaflet-control"><div class="leaflet-control-scale-line" style="width: 70px;">500 m</div><div class="leaflet-control-scale-line" style="width: 85px;">2000 ft</div></div></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com/" title="A JS library for interactive maps">Leaflet</a> | Map data © <a href="http://openstreetmap.org/">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com/">CloudMade</a></div></div></div></div>
            <script>
            
           var map = L.map('map').
           setView([20.501088020653008, -86.95219635547727], 
           17);
           L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
               attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
               maxZoom: 50
           }).addTo(map);
           
           L.control.scale().addTo(map);
           L.marker([20.50199245775702, -86.95122003141954], {draggable: false}).addTo(map);
           L.marker([20.502263787847237, -86.95653080514023], {draggable: false}).addTo(map);
           L.marker([20.49899774556115, -86.95516824299112], {draggable: false}).addTo(map);
           L.marker([20.499924561498727, -86.95076890802608], {draggable: false}).addTo(map);
            </script>	
           <!-- final del mapa-->	
           <div class="container">
               <div class="row">
                   <div class="col-sm-6"> 
                       <div class=".text-content">hola mundo</div> 
               </div>
                   <div class="col-sm-6">
                       <div class="bg-dange">hola mundo</div>
                   </div>
               </div>
           </div>
           </div>
			<!-- Fin del contenido de la seccion -->
		</div>
	</div>
</body>
  <?php
  //archivos necesario del template
include '../../public/inc/template/footer.php';
?>
</html>