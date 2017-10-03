<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<?php include "top_nav.php"; ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
<!--   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <script>
  function show() {
    $( "#datepicker" ).datepicker();
  }
  </script>
</head>
<body>
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row">
    <div class="col-sm-12">
      <h1 class="x_title">Rides</h1>
    </div>
  </div>
<div class="row tile_count">
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count text-center">
              <span class="count_top"><i class="fa fa-car" aria-hidden="true"></i> Today's Total Rides</span>
              <div class="count">150</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-caret-up" aria-hidden="true"></i>5% </i> From last Week</span>
            </div>
      
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count text-center">
              <span class="count_top"><i class="fa fa-car"></i> This Week's Total Rides</span>
              <div class="count green">143</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-caret-up" aria-hidden="true"></i>10% </i> From last Week</span>
            </div>
             <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count text-center">
              <span class="count_top"><i class="fa fa-times" aria-hidden="true"></i> Today's Cancellations</span>
              <div class="count">12</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-caret-down" aria-hidden="true"></i>5% </i> From yesterday</span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count text-center">
              <span class="count_top"><i class="fa fa-times" aria-hidden="true"></i> This Week's Cancellations</span>
              <div class="count red">57</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-caret-up" aria-hidden="true"></i>8% </i> From last week</span>
            </div>
          </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Rides</h2>
          <!-- <div class="nav navbar-right ">
            <ul class="nav navbar-right panel_toolbox" ">
              <li style="margin-right: 20px">                
                <button type='submit' name ='submit' class='btn btn-success' data-toggle='modal' data-target='#mAdd'>
                  <strong>Add</strong>
                  <i class='fa fa-plus' style='margin-left: 2px;'></i>
                </button>
              </li>
            </ul>           
          </div> -->

          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <br>
          <table id="datatable" class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Driver's Name</th>
                <th>User's Name</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr id="1">
                <td>1</td>
                <td>Albert</td>
                <td>Stephanie Liem</td>
                <td>IDR 59.600</td>
              </tr> 
              <tr>
                <td>2</td>
                <td>Albert</td>
                <td>Satria</td>
                <td>IDR 128.965</td>
              </tr> 
              <tr>
                <td>3</td>
                <td>Elbert</td>
                <td>Stephanie Liem</td>
                <td>IDR 14.500</td>
              </tr> 
              <tr>
                <td>4</td>
                <td>Steph Curry</td>
                <td>Sanitya Purnomo</td>
                <td>IDR 37.500</td>
              </tr> 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="modal fade mt7" id="mAdd">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add Driver</h4>
      </div>
      <div class="modal-body">
        <div class="row"> 
          <div class="col-sm-3">
            <img src='images/img.jpg' class="img img-rounded img-responsive">
          </div>
          <div class="col-sm-9">
            <form class="form-horizontal">
              
              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">ID</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Name</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Email</label>
                <div class="col-sm-8">
                  <input type='email' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Gender</label>
                <div class="col-sm-10" id="gender"></div> -->
                <!-- <div class="col-sm-8">
                  <table>
                  <tr>
                  <td>
                  <label class="radio-inline"><input type="radio" name="optradio" style="margin-left:5%;">Male</label>
                  </td>
                  <td>
                  <label class="radio-inline"><input type="radio" name="optradio" style="margin-left:5%;">Female</label>
                  </td>
                  </tr>
                  </table>
                  <label class="radio-inline" style="margin-left:8%;"><input type="radio" name="optradio">Male</label>
                  <label class="radio-inline" style="margin-left:11%;"><input type="radio" name="optradio" style="margin-bottom:1%;">Female</label>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Phone</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Address</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Username</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Bank Account</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Rating</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Hire Date</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control' id='datepicker' onclick='show()'>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div> -->

<div class="modal fade mt2" id="mDriver">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Rides Details</h4>
      </div>
      <div class="modal-body" style="margin-left:40px;">
        <div class="row"> 
          <div class="col-sm-3">
            <img src='images/img.jpg' class="img img-rounded img-responsive">
          </div>
          <div class="col-sm-9">
            <form class="form-horizontal">
              
              <div class="form-group">
                <label class="col-sm-5 control-label" style="text-align:left;">ID</label>
                <div class="col-sm-7">
                  <div class id="id"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label" style="text-align:left;">Driver's Name</label>
                <!-- <div class="col-sm-10" id="nama"></div> -->
                <div class="col-sm-7">
                  <div class id="drivernama" style="width:100%;"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label" style="text-align:left;">User's Name</label>
                <!-- <div class="col-sm-10" id="email"></div> -->
                <div class="col-sm-7">
                  <div class id="usernama"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label" style="text-align:left;">Price</label>
                <!-- <div class="col-sm-10" id="gender"></div> -->
                <div class="col-sm-7">
                  <div class id="price"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label" style="text-align:left;">Pick Up - Drop Off</label>
                <!-- <div class="col-sm-10" id="telp"></div> -->
                <div class="col-sm-7">
                  <div class id="fromto"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label" style="text-align:left;">Driver's Trip Rating</label>
                <!-- <div class="col-sm-10" id="address"></div> -->
                <div class="col-sm-7">
                  <div class id="ratdriver"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-5 control-label" style="text-align:left;">User's Trip Rating</label>
                <!-- <div class="col-sm-10" id="user"></div> -->
                <div class="col-sm-7">
                  <div class id="ratuser"></div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="edit()">Edit</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>

<script src="vendors/jquery/dist/jquery.min.js"></script> 
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/moment/moment.min.js"></script>
<script type="text/javascript">
  $("#1").dblclick(function() {
    $("#id").html("<label class='control-label label-data'>TR081</label>");
    $("#drivernama").html("<label class='control-label label-data'>Albert Pratomo</label>");
    $("#usernama").html("<label class='control-label label-data'>Stephanie Liem</label>");
    $("#price").html("<label class='control-label label-data'>IDR 59.600</label>");
    $("#fromto").html("<label class='control-label label-data'>Ciputra World to Penjaringan</label>");
    $("#ratdriver").html("<label class='control-label label-data'>3.69</label>");
    $('#ratuser').html("<label class='control-label label-data'>4.14</label>");
    $("#mDriver").modal('show');
  });

  $(function() {

  });
  function show() {
    $( "#datepicker" ).datepicker();
  }
  
  // function edit()
  // {
  //   $("#id").html("<input type='text' class='form-control'  value='AH071'>");   
  //   $("#nama").html("<input type='text' class='form-control'  value='Albert Pratomo'>");
  //   $("#email").html("<input type='text' class='form-control'  value='albert.pratomo@yahoo.co.id'>");
  //   // $("#gender").html("<input type='text' class='form-control'  value='Male'>");  
  //   $("#gender").html("<label class='radio-inline' style='margin-left:8%;'><input type='radio' checked='checked'>Male</label><label class='radio-inline' style='margin-left:11%;'><input type='radio' style='margin-bottom:1%;''>Female</label>");  
  //   $("#telp").html("<input type='text' class='form-control'  value='087824132977'>");
  //   $("#address").html("<input type='text' class='form-control'  value='Babatan Pratama 83/2, Surabaya'>");
  //   $("#user").html("<input type='text' class='form-control'  value='albertpratomo'>");   
  //   $("#bank").html("<input type='text' class='form-control'  value='0884869752'>");
  //   $("#rating").html("<input type='text' class='form-control'  value='2.57'>");
  //   $("#hire").html("<input type='text' class='form-control'  value='09-May-2016'>");   
  // }
  
</script>
<?php include "footer.php"; ?>
</body>
</html>