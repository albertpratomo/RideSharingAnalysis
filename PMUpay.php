<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<?php include "top_nav.php"; ?>
<html>
<head>
</head>
<body>
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row">
    <div class="col-sm-12">
      <h1 class="x_title">PMU-pay</h1>
    </div>
  </div>
  <div class="row tile_count">
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count text-center">
              <span class="count_top"><i class="fa fa-money"></i> Today's Total Purchases</span>
              <div class="count">IDR 52.000</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-caret-up" aria-hidden="true"></i>5% </i> From yesterday</span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count text-center">
              <span class="count_top"><i class="fa fa-credit-card-alt"></i> This Week's Total Purchases</span>
              <div class="count green">IDR 987.000</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-caret-up" aria-hidden="true"></i>15% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count text-center">
              <span class="count_top"><i class="fa fa-user"></i> Today's Puchasers</span>
              <div class="count">57</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-caret-down" aria-hidden="true"></i>3% </i> From yesterday</span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count text-center">
              <span class="count_top"><i class="fa fa-user"></i> This Week's Puchasers</span>
              <div class="count green">114</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-caret-down" aria-hidden="true"></i>3% </i> From yesterday</span>
            </div>
            
          </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel PMU-pay</h2>
         <!--  <div class="nav navbar-right ">
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
                <th>Nominal</th>
                <th>Purchaser</th>
                <th>Transaction Time</th>
              </tr>
            </thead>
            <tbody>
              <tr id="1">
                <td>1</td>
                <td>IDR 50.000</td>
                <td>Stephanie Liem</td>
                <td>05-04-2017 11:54 AM</td>
              </tr> 
              <tr>
                <td>2</td>
                <td>IDR 100.000</td>
                <td>Martina Marcelline</td>
                <td>09-05-2017 10:18 AM</td>
              </tr> 
              <tr>
                <td>3</td>
                <td>IDR 50.000</td>
                <td>Stephanie Liem</td>
                <td>09-05-2017 12:15 PM</td>
              </tr> 
              <tr>
                <td>4</td>
                <td>IDR 50.000</td>
                <td>Sanitya Purnomo</td>
                <td>22-05-2017 09:13 AM</td>
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
                <label class="col-sm-4 control-label" style="text-align:left;">Nominal</label>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Puchaser</label>
                <div class="col-sm-8">
                  <input type='email' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Purchase Time</label>
                <!-- <div class="col-sm-10" id="gender"></div> -->
                <!-- <!-- <div class="col-sm-8">
                 <!--  <table>
                  <tr>
                  <td>
                  <label class="radio-inline"><input type="radio" name="optradio" style="margin-left:5%;">Male</label>
                  </td>
                  <td>
                  <label class="radio-inline"><input type="radio" name="optradio" style="margin-left:5%;">Female</label>
                  </td>
                  </tr>
                  </table> -->
                  <!-- <label class="radio-inline" style="margin-left:8%;"><input type="radio" name="optradio">Male</label>
                  <label class="radio-inline" style="margin-left:11%;"><input type="radio" name="optradio" style="margin-bottom:1%;">Female</label>
                </div>
              </div> -->

              <!-- <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Purchase Time</label>
                <div class="col-sm-10" id="telp"></div>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>
 -->
             <!--  <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Address</label>
                <div class="col-sm-10" id="address"></div>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>
 -->
              <!-- <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Username</label>
                <div class="col-sm-10" id="user"></div>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div> -->

              <!-- <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Bank Account</label>
                <div class="col-sm-10" id="bank"></div>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>
 -->
              <!-- <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Rating</label>
                <div class="col-sm-10" id="rating"></div>
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div> -->

              <!-- <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Hire Date</label>
                <div class="col-sm-10" id="hire"></div>
                <div class="col-sm-8">
                  <input type='text' class='form-control' id='datepicker' onclick='show()'>
                </div>
              </div> -->

            <!-- </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade mt2" id="mDriver">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Driver Details</h4>
      </div>
      <div class="modal-body" style="margin-left:40px;">
        <div class="row"> 
          <div class="col-sm-3">
            <img src='images/img.jpg' class="img img-rounded img-responsive">
          </div>
          <div class="col-sm-9">
            <form class="form-horizontal">
              
              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">ID</label>
                <div class="col-sm-8">
                  <div class id="id"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Name</label>
                <!-- <div class="col-sm-10" id="nama"></div> 
                <div class="col-sm-8">
                  <div class id="nama" style="width:100%;"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Email</label>
                <!-- <div class="col-sm-10" id="email"></div> 
                <div class="col-sm-8">
                  <div class id="email"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Gender</label>
                <!-- <div class="col-sm-10" id="gender"></div> 
                <div class="col-sm-8">
                  <div class id="gender"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Phone</label>
                <!-- <div class="col-sm-10" id="telp"></div> 
                <div class="col-sm-8">
                  <div class id="telp"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Address</label>
                <!-- <div class="col-sm-10" id="address"></div> 
                <div class="col-sm-8">
                  <div class id="address"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Username</label>
                <!-- <div class="col-sm-10" id="user"></div> 
                <div class="col-sm-8">
                  <div class id="user"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Bank Account</label>
                <!-- <div class="col-sm-10" id="bank"></div> 
                <div class="col-sm-8">
                  <div class id="bank"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Rating</label>
                <!-- <div class="col-sm-10" id="rating"></div> 
                <div class="col-sm-8">
                  <div class id="rating"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Hire Date</label>
                <!-- <div class="col-sm-10" id="hire"></div> 
                <div class="col-sm-8">
                  <div class id="hire"></div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="edit()">Edit</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>-->

<script src="vendors/jquery/dist/jquery.min.js"></script> 
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/moment/moment.min.js"></script>
<script type="text/javascript">
  $("#1").dblclick(function() {
    $("#id").html("<label class='control-label label-data'>AH071</label>");
    $("#nama").html("<label class='control-label label-data'>Albert Pratomo</label>");
    $("#email").html("<label class='control-label label-data'>albert.pratomo@yahoo.co.id</label>");
    $('#gender').html("<label class='control-label label-data'>Male</label>");
    $('#telp').html("<label class=' control-label label-data'>087824132977</label>");
    $("#address").html("<label class='control-label label-data'>Babatan Pratama 83/2, Surabaya</label>");
    $('#user').html("<label class='control-label label-data'>albertpratomo</label>");
    $('#bank').html("<label class='control-label label-data'>0884869752</label>");
    $('#rating').html("<label class='control-label label-data'>2.57</label>");
    $('#hire').html("<label class='control-label label-data'>09-May-2016</label>");
    $("#mDriver").modal('show');
  });

  $(function() {

  });
  function show() {
    $( "#datepicker" ).datepicker();
  }
  
  function edit()
  {
    $("#id").html("<input type='text' class='form-control'  value='AH071'>");   
    $("#nama").html("<input type='text' class='form-control'  value='Albert Pratomo'>");
    $("#email").html("<input type='text' class='form-control'  value='albert.pratomo@yahoo.co.id'>");
    // $("#gender").html("<input type='text' class='form-control'  value='Male'>");  
    $("#gender").html("<label class='radio-inline' style='margin-left:8%;'><input type='radio' checked='checked'>Male</label><label class='radio-inline' style='margin-left:11%;'><input type='radio' style='margin-bottom:1%;''>Female</label>");  
    $("#telp").html("<input type='text' class='form-control'  value='087824132977'>");
    $("#address").html("<input type='text' class='form-control'  value='Babatan Pratama 83/2, Surabaya'>");
    $("#user").html("<input type='text' class='form-control'  value='albertpratomo'>");   
    $("#bank").html("<input type='text' class='form-control'  value='0884869752'>");
    $("#rating").html("<input type='text' class='form-control'  value='2.57'>");
    $("#hire").html("<input type='text' class='form-control'  value='09-May-2016'>");   
  }
  
</script>
<?php include "footer.php"; ?>
</body>
</html>