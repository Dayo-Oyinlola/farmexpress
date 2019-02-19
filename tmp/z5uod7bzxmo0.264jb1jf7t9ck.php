<!DOCTYPE html>
<html lang="en">

<body>
<div id="map" style="height: 500px; width: 100%; margin: 0; padding: 0;">
</div>
<script>
    function initMap(){
        var location = {lat: 7.531407, lng: 4.531640};

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script async defer src="https://maps.google.com/maps/api/js?key=AIzaSyAqkIXlp_ll0D9iLuMF-Kjenp6TsMtWR5w&callback=initMap">

</script>

<p>Return to the <a href="<?= ($BASE) ?>/">Home</a> page</p>
</body>
</html>
