<?php include "connect.php"; ?>
<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<?php include "top_nav.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
	<!-- top tiles -->
	<div class="row">
		<div class="col-sm-12">
			<h1 class="x_title">
				Depos Nearby
				<small id="subtitle">8 Juni 2017 - 18:30:00</small>
				<button class="btn btn-success pull-right" onclick="nextTime()">Next</button>
				<button class="btn btn-success pull-right" onclick="prevTime()">Prev</button>
			</h1>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div id="map"></div>
		</div>
	</div>
</div>


<script src="vendors/jquery/dist/jquery.min.js"></script> 
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/moment/moment.min.js"></script>
<script>
	var demands = [];
	var cdemand = [];
	var infos = [];
	var i=1;
	var freq = [0,0,0,0,0,0,0,0,0,0];

	<?php $i=1;
	for ($i = 1; $i <= 5; $i++) {
		$query = mysqli_query($con, "select * from imk_demand where time = '$i'");
		echo "demands[".$i."] = {"; 

		while($row = mysqli_fetch_row($query)){
			echo $row[0].": {center: {lat:".$row[1].", lng: ".$row[2]."}},";
		}
		echo "};

		";
	}
	?>

	var depo = {
		<?php 
		$dep = mysqli_query($con, "select * from imk_depo");

		while($row = mysqli_fetch_row($dep)){
			echo $row[0].": {center: {lat:".$row[1].", lng: ".$row[2]."},color:'".$row[3]."',name:'".$row[4]."'},";
		}
		?>
	};

	Number.prototype.toRad = function(coor1, coor2) {
		return this * Math.PI / 180;
	};

	function distance(coor1, coor2){
		var lat1 = coor1.lat; 
		var lon1 = coor1.lng; 
		var lat2 = coor2.lat; 
		var lon2 = coor2.lng; 

		var R = 6371; 

		var x1 = lat2-lat1;
		var dLat = x1.toRad();  
		var x2 = lon2-lon1;
		var dLon = x2.toRad();  

		var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
		Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
		Math.sin(dLon/2) * Math.sin(dLon/2);  

		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
		var d = R * c; 

		return d*1000;   
	};

	var map;
	var cdep = [];
	function initMap(){
		map = new google.maps.Map(document.getElementById('map'),
		{
			zoom: 14,
			center : {lat: -7.272491, lng: 112.75785},
			mapTypeId: 'terrain'
		});


		for (var demand in demands[i]){
			var min = 999999;
			var color; 
			var depno;

			for (var dep in depo){
				var dist = distance(demands[i][demand].center,depo[dep].center);

				if(dist < min){
					min = dist;
					color = depo[dep].color;
					depno = dep-1;  
				}
			}
			cdemand[demand] = new google.maps.Circle
			({
				strokeOpacity:0,
				fillColor: color,
				fillOpacity: 0.9,
				map: map,
				center: demands[i][demand].center,
				radius: 50
			});
			freq[depno]++;
		}

		for (var dep in depo){
			cdep[dep] = new google.maps.Circle({
				strokeWeight:2,
				strokeOpacity: 0.8,
				fillColor: depo[dep].color,
				fillOpacity: 0.8,
				map: map,
				center: depo[dep].center,
				position: depo[dep].center,
				radius: 100
			});

			var content = "<h2 style='margin-bottom:4px;'><b>"+depo[dep].name+"</b></h2>"+
			"<h5 style='margin-top:0;'>"+freq[dep-1] +" demands</h5>";      
      infos[dep] = new google.maps.InfoWindow();

      google.maps.event.addListener(cdep[dep],'click', (function(circle,content,infowindow){ 
        return function() {
          infos[dep].setContent(content);
          infos[dep].open(map,this);
        };
      })(cdep[dep],content,infos[dep])); 
		}
	}

	function changeTime(i){

		freq = [];
		freq = [0,0,0,0,0,0,0,0,0,0];

		for (var demand in demands[i]){
			var min = 999999;
			var color; 
			var depno;

			for (var dep in depo){
				var dist = distance(demands[i][demand].center,depo[dep].center);

				if(dist < min){
					min = dist;
					color = depo[dep].color;
					depno = dep-1;  
				}
			}
			cdemand[demand].setMap(null);
			cdemand[demand] = new google.maps.Circle
			({
				strokeOpacity:0,
				fillColor: color,
				fillOpacity: 0.9,
				map: map,
				center: demands[i][demand].center,
				radius: 50
			});
			freq[depno]++;
		}

		for (var dep in depo){

			var content = "<h2 style='margin-bottom:4px;'><b>"+depo[dep].name+"</b></h2>"+
			"<h5 style='margin-top:0;'>"+freq[dep-1] +" demands</h5>";
      infos[dep] = new google.maps.InfoWindow();

      google.maps.event.addListener(cdep[dep],'click', (function(circle,content,infowindow){ 
      	return function() {
      		infos[dep].setContent(content);
      		infos[dep].open(map,this);
      	};
      })(cdep[dep],content,infos[dep]));
  }

  if(i==1){$("#subtitle").html("8 Juni 2017 - 18:30:00");}
  else if(i==2){$("#subtitle").html("8 Juni 2017 - 18:40:00");}
  else if(i==3){$("#subtitle").html("8 Juni 2017 - 18:50:00");}
  else if(i==4){$("#subtitle").html("8 Juni 2017 - 19:00:00");}
  else if(i==5){$("#subtitle").html("8 Juni 2017 - 19:10:00");}
}

function nextTime(){
	if(i == 5){i = 1;}
	else{i++;}
	changeTime(i);  
}

function prevTime(){
	if(i == 1){i = 5;}
	else{i--;}
	changeTime(i);  
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnexwt0jVgRYQxZBS_JJW5LfYOxqFp2-M&callback=initMap">
</script>
<?php include "footer.php"; ?>