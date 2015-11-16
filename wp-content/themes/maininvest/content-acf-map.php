<?php
    //$map = get_field('commercail_map');
    if( ! empty($map) ):
        ?>
        <div id="map" style="width: 100%; height: 350px;"></div>
        <script src='http://maps.googleapis.com/maps/api/js?sensor=false' type='text/javascript'></script>

        <script type="text/javascript">
            //<![CDATA[
            function load() {
                var lat = <?php echo $map['lat']; ?>;
                var lng = <?php echo $map['lng']; ?>;
// coordinates to latLng
                var latlng = new google.maps.LatLng(lat, lng);
// map Options
                var myOptions = {
                    zoom: 15,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
//draw a map
                var map = new google.maps.Map(document.getElementById("map"), myOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    map: map
                });
            }
            // call the function
            load();
            //]]>
        </script>
    <?php endif; ?>