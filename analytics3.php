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
        Depos Area
        <small id="subtitle">8 Juni 2017 - 18:30:00</small>
        
        <button class="btn btn-success pull-right" onclick="nextTime()">Next</button>
        <button class="btn btn-success pull-right" onclick="prevTime()">Prev</button>
        <div class="col-xs-2 pull-right" style="margin-top: -10px;">
          <div class="input-group">
          <input type="number" class="form-control" placeholder="Radius" id="rad" min="100">
            <span class="input-group-btn">
              <button class="btn btn-primary" onclick="updateRadius()">Update</button>
            </span>
          </div>
        </div>
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
  var carea=[];
  var cdemand = [];
  var demands = [];
  var i=1;

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
      echo $row[0].": {center: {lat:".$row[1].", lng: ".$row[2]."},color:'".$row[3]."'},";
    }
    ?>
  };


  function initMap(){
   var map = new google.maps.Map(document.getElementById('map'),
   {
    zoom: 14,
    center : {lat: -7.272491, lng: 112.75785},
    mapTypeId: 'terrain'
  });

   for (var demand in demands[i])
   {

    cdemand[demand] = new google.maps.Circle({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FF0000',
      fillOpacity: 0.35,
      map: map,
      center: demands[i][demand].center,
      radius: 50
    });
  }

  for (var dep in depo)
  {

    var cdep = new google.maps.Circle
    ({
      strokeColor: '#FF9A00',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FFFF00',
      fillOpacity: 0.6,
      map: map,
      center: depo[dep].center,
      radius: 100,
      clickable: true
    });

    carea[dep] = new google.maps.Circle
    ({
      strokeOpacity: 0,
      fillColor: '#16ff60',
      fillOpacity: 0.3,
      map: map,
      center: depo[dep].center,
      radius: 1000
    }); 
  }
}

function updateRadius(){
  var rad = parseInt($("#rad").val());
  if($("#rad").val() == '' || rad < 100){rad=100;}
  for (var dep in depo)
  {
    carea[dep].setRadius(rad);
  }
}

function changeTime(t){
  for (var demand in demands[t])
  {
    cdemand[demand].setCenter(demands[t][demand].center);
  }
  if(t==1){$("#subtitle").html("8 Juni 2017 - 18:30:00");}
  else if(t==2){$("#subtitle").html("8 Juni 2017 - 18:40:00");}
  else if(t==3){$("#subtitle").html("8 Juni 2017 - 18:50:00");}
  else if(t==4){$("#subtitle").html("8 Juni 2017 - 19:00:00");}
  else if(t==5){$("#subtitle").html("8 Juni 2017 - 19:10:00");}
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
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnexwt0jVgRYQxZBS_JJW5LfYOxqFp2-M&callback=initMap">
</script>
<?php include "footer.php"; ?>