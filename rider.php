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
      <h1 class="x_title">Rider</h1>
    </div>
  </div>

  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Rider</h2>
          <div class="nav navbar-right ">
            <ul class="nav navbar-right panel_toolbox">
              <li style="margin-right: 20px">                
                <button type='submit' name ='submit' class='btn btn-success' data-toggle='modal' data-target='#mAdd'>
                  <strong>Add</strong>
                  <i class='fa fa-plus' style='margin-left: 2px;'></i>
                </button>
              </li>
            </ul>           
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <br>
          <table id="datatable" class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr id="1">
                <td>1</td>
                <td>Stephanie Liem</td>
                <td>08785411990</td>
                <td>stephie_liem@yahoo.co.id</td>
              </tr> 
              <tr>
                <td>2</td>
                <td>Sanitya Purnomo</td>
                <td>08154329756</td>
                <td>sanitya@gmail.com</td>
              </tr> 
              <tr>
                <td>3</td>
                <td>Martina Marcelline</td>
                <td>08952246843</td>
                <td>martina@ymail.com</td>
              </tr> 
              <tr>
                <td>4</td>
                <td>Satria Damai</td>
                <td>08213596427</td>
                <td>s4tr1a@gmail.com</td>
              </tr> 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade mt7" id="mAdd">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add Rider</h4>
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
                <label class="col-sm-4 control-label" style="text-align:left;">Phone Number</label>
                <div class="col-sm-8">
                  <input type='email' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Username</label>
                <!-- <div class="col-sm-10" id="user"></div> -->
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Bank Account</label>
                <!-- <div class="col-sm-10" id="bank"></div> -->
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Rating</label>
                <!-- <div class="col-sm-10" id="rating"></div> -->
                <div class="col-sm-8">
                  <input type='text' class='form-control'>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Join Date</label>
                <!-- <div class="col-sm-10" id="hire"></div> -->
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
</div>

<div class="modal fade mt2" id="mDriver">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Rider Details</h4>
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
                <!-- <div class="col-sm-10" id="nama"></div> -->
                <div class="col-sm-8">
                  <div class id="nama" style="width:100%;"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Phone Number</label>
                <!-- <div class="col-sm-10" id="email"></div> -->
                <div class="col-sm-8">
                  <div class id="telp"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Email</label>
                <!-- <div class="col-sm-10" id="telp"></div> -->
                <div class="col-sm-8">
                  <div class id="email"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Username</label>
                <!-- <div class="col-sm-10" id="user"></div> -->
                <div class="col-sm-8">
                  <div class id="user"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Bank Account</label>
                <!-- <div class="col-sm-10" id="bank"></div> -->
                <div class="col-sm-8">
                  <div class id="bank"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Rating</label>
                <!-- <div class="col-sm-10" id="rating"></div> -->
                <div class="col-sm-8">
                  <div class id="rating"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Join Date</label>
                <!-- <div class="col-sm-10" id="hire"></div> -->
                <div class="col-sm-8">
                  <div class id="join"></div>
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
</div>

<script src="vendors/jquery/dist/jquery.min.js"></script> 
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/moment/moment.min.js"></script>
<script type="text/javascript">
  $("#1").dblclick(function() {
    $("#id").html("<label class='control-label label-data'>MS023</label>");
    $("#nama").html("<label class='control-label label-data'>Stephanie Liem</label>");
    $("#email").html("<label class='control-label label-data'>stephie_liem@yahoo.co.id</label>");
    $('#telp').html("<label class=' control-label label-data'>08785411990</label>");
    $('#user').html("<label class='control-label label-data'>stephanieliem</label>");
    $('#bank').html("<label class='control-label label-data'>0885642566</label>");
    $('#rating').html("<label class='control-label label-data'>4.67</label>");
    $('#join').html("<label class='control-label label-data'>02-May-2016</label>");
    $("#mDriver").modal('show');
  });

  $(function() {

  });
  function show() {
    $( "#datepicker" ).datepicker();
  }
  
  function edit()
  {
    $("#id").html("<input type='text' class='form-control'  value='MS023'>");   
    $("#nama").html("<input type='text' class='form-control'  value='Stephanie Liem'>");
    $("#email").html("<input type='text' class='form-control'  value='stephie_liem@yahoo.co.id'>");   
    $("#telp").html("<input type='text' class='form-control'  value='08785411990'>");
    $("#user").html("<input type='text' class='form-control'  value='stephanieliem'>");   
    $("#bank").html("<input type='text' class='form-control'  value='0885642566'>");
    $("#rating").html("<input type='text' class='form-control'  value='4.67'>");
    $("#join").html("<input type='text' class='form-control'  value='02-May-2016'>");   
  }
</script>
<?php include "footer.php"; ?>
</body>
</html>