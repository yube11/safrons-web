<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SAFRONS</title>
      <link rel="icon" href="{!! asset('img/ipb.png') !!}"/>
      
      <!-- CSS Files-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet"/>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron"/>
      
      <!-- ======= Leaflet ======= -->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
      integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
      crossorigin=""/>

      <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.76.1/dist/L.Control.Locate.min.css" />
   
      <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.76.1/dist/L.Control.Locate.min.js" charset="utf-8"></script>   
      <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
      integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
      crossorigin=""></script>

      <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
      <script src="js/leaflet.ajax.js"></script>
      <sricpt src="js/script-ikuh.js"></sricpt>
      <!-- ======= End Leaflet ======= -->
      
      <link href="/css/bootstrap.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="css/style-ikuh.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>

   <body>
      <!-- ======= Header ======= -->
      <header>
         <nav>
            <div class= "logo">
            <a href="/"><img src="/img/logoo.png" width = "485" height = "69"/></a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
               <i class="fas fa-bars"></i>
            </label> 
            <ul>
               <li><a href="/">Beranda</a></li>
               <li><a class="active" href="/ikuh">Informasi Kandungan Unsur Hara</a></li>
               <li><a href="/glosarium">Glosarium</a></li>
               <li><a href="/login">Masuk</a></li>
            </ul>
         </nav>
      </header>
      <!-- ======= End Header ======= -->

      <main>
         <div  class="padding" id ="map-container"><div id="map"></div>
         </div>
      </main>
   </body>
         <!--div class="primary p-5 mb-1"">
            <div class="col-md-5 mx-auto">
               <div class="small fw-light">
                  Pencarian
               </div>
               
               <div class="input-group">
                  <input class="form-control border-end-0 border rounded-pill" type="search" value="search" id="example-search-input">
                  <span class="input-group-append">
                     <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                        <i class="fa fa-search"></i>
                     </button>
                  </span>
               </div>
            </div>
         </div-->


   <script src="harabogor.js"></script>
   <script> 

   /*===================================================
                      Layer Group              
   ===================================================*/
   var map = L.map('map').setView([-6.6571101,106.9041547], 9.21);      
   var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
   });osm.addTo(map);

   googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
      maxZoom: 20,
      subdomains:['mt0','mt1','mt2','mt3']
   });
   googleStreets.addTo(map);
   
   var baseLayers = {
    "OpenStreetMap": osm,
    "Google Map":googleStreets
   };

   /*===================================================
                      Symbology            
   ===================================================*/
   function stylemap(feature) {
    return {
        weight: 1,
        opacity: 1,
        color: 'black',  //Outline color
        fillOpacity: 0
    };
   }

   L.control.layers(baseLayers).addTo(map);

   L.Control.geocoder().addTo(map);

   map.on('click', function(stylemap){
      var marker = new L.marker(e.latlng).addTo(map);
   });

   function popUp(f,l){
    var out = [];
    if (f.properties){
        for(key in f.properties){
         if (key == 'NAME') {out.push(key+": "+f.properties[key]);}
        }
        l.bindPopup(out.join("<br />"));
      }

      for(key in f.properties){
         if (key == 'K_rata2') {out.push(key+": "+f.properties[key]);}
        }
        l.bindPopup(out.join("<br />"));
        
      for(key in f.properties){
         if (key == 'pH_rata2') {out.push(key+": "+f.properties[key]);}
        }
        l.bindPopup(out.join("<br />"));

      for(key in f.properties){
         if (key == 'N_rata2') {out.push(key+": "+f.properties[key]);}
        }
        l.bindPopup(out.join("<br />"));
        
      for(key in f.properties){
         if (key == 'P_rata2') {out.push(key+": "+f.properties[key]);}
        }
        l.bindPopup(out.join("<br />"));
   }

    /*===================================================
                      GEOJSON               
   ===================================================*/
   var jsonTest = new L.GeoJSON.AJAX(["harabogor.geojson"],{onEachFeature:popUp, style:stylemap}).addTo(map);
   </script>
</html>