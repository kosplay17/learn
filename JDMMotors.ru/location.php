<?php require 'header.php'; ?>
	<main>
		<h3>Наше местоположение</h3>
    <!--The div element for the map -->
   		<div id="map"></div>
	</main>
	<?php require 'footerL.php'; ?>

 <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 52.9835159, lng: 36.045607};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 13, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUBRLVgNn7JQwZgkH3dQt0uIZ0BUkLSpM&callback=initMap">
    </script>
   
	<script src="js/script.js"></script>
</body>
</html>