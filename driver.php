<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<?php include "top_nav.php"; ?>
<html><head></head><body>
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row">
    <div class="col-sm-12">
      <h1 class="x_title">Driver</h1>
    </div>
  </div>
  
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tabel Driver</h2>
          <div class="nav navbar-right ">
            <ul class="nav navbar-right panel_toolbox" ">
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
                <th>Address</th>
                <th>Phone</th>
                <th>Hire Date</th>
                <th>Rating</th>
              </tr>
            </thead>
            <tbody>
              <tr id="1">
                <td>1</td>
                <td>Albert</td>
                <td>Ngagel Indah 23</td>
                <td>082231763853</td>
                <td>23-01-2017</td>
                <td>1.5</td>
              </tr> 
              <tr>
                <td>2</td>
                <td>Andi</td>
                <td>Siwalankerto 8</td>
                <td>082231663853</td>
                <td>25-06-2017</td>
                <td>4.4</td>
              </tr> 
              <tr>
                <td>3</td>
                <td>Elbert</td>
                <td>Kupang Indah 42</td>
                <td>082231763851</td>
                <td>04-09-2011</td>
                <td>4.7</td>
              </tr> 
              <tr>
                <td>4</td>
                <td>Steph Curry</td>
                <td>Ketintang Widya 21</td>
                <td>082231160852</td>
                <td>02-05-2017</td>
                <td>4.3</td>
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
                <!-- <div class="col-sm-10" id="gender"></div> -->
                <div class="col-sm-8">
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
                  <label class="radio-inline" style="margin-left:11%;"><input type="radio" name="optradio" style="margin-bottom:1%;">Female</label> -->

                  <label class="radio-inline"><input type="radio" class="flat" name="optradio"> Male</label>
                  <label class="radio-inline"><input type="radio" name="optradio" class="flat"> Female</label>

                 <!--  <p>
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" required /> Male
                        <input type="radio" class="flat" name="gender" id="genderF" value="F"/>
                        Female
                      </p> -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label" style="text-align:left;">Phone</label>
                    <!-- <div class="col-sm-10" id="telp"></div> -->
                    <div class="col-sm-8">
                      <input type='text' class='form-control'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label" style="text-align:left;">Address</label>
                    <!-- <div class="col-sm-10" id="address"></div> -->
                    <div class="col-sm-8">
                      <input type='text' class='form-control'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label" style="text-align:left;">Hire Date</label>
                    <!-- <div class="col-sm-10" id="hire"></div> -->
                    <div class="col-sm-8">
                      <!-- <div class="filter"> -->
                <!-- <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                </div> -->
                <!-- <input type="text" id="datepicker"> -->
               
                
                <fieldset>
                         
                             
                                <input type="text" class="form-control has-feedback-left" id="single_cal4" aria-describedby="inputSuccess2Status4">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                             
                            
                        </fieldset>
              </div>
              <!-- <input type='text' class='form-control' id='datepicker' onclick='show()'> -->
           <!--  </div> -->
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
                <!-- <div class="col-sm-10" id="nama"></div> -->
                <div class="col-sm-8">
                  <div class id="nama" style="width:100%;"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Email</label>
                <!-- <div class="col-sm-10" id="email"></div> -->
                <div class="col-sm-8">
                  <div class id="email"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Gender</label>
                <!-- <div class="col-sm-10" id="gender"></div> -->
                <div class="col-sm-8" id="gender">
                  <!-- <div class id="gender"></div> -->
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Phone</label>
                <!-- <div class="col-sm-10" id="telp"></div> -->
                <div class="col-sm-8">
                  <div class id="telp"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Address</label>
                <!-- <div class="col-sm-10" id="address"></div> -->
                <div class="col-sm-8">
                  <div class id="address"></div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;">Hire Date</label>
                <!-- <div class="col-sm-10" id="hire"></div> -->
                <div class="col-sm-8">
                  <div class id="hire"></div>
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
  // $(document).ready(function() {

  //   var cb = function(start, end, label) {
  //     console.log(start.toISOString(), end.toISOString(), label);
  //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  //   };

  //   function time(start, end, label) {
  //     console.log(start.toISOString(), end.toISOString(), label);
  //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

  //   var optionSet1 = {
  //     startDate: moment().subtract(30, 'days'),
  //     endDate: moment(),
  //     minDate: '01/01/2012',
  //     maxDate: '12/31/2018',
  //     dateLimit: {
  //         days: 60
  //     },
  //     showDropdowns: true,
  //     showWeekNumbers: true,
  //     timePicker: false,
  //     timePickerIncrement: 1,
  //     timePicker12Hour: true,
  //     ranges: {
  //       'Today': [moment(), moment()],
  //       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
  //       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
  //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
  //       'This Month': [moment().startOf('month'), moment().endOf('month')],
  //       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
  //     },
  //     opens: 'left',
  //     buttonClasses: ['btn btn-default'],
  //     applyClass: 'btn-small btn-primary',
  //     cancelClass: 'btn-small',
  //     format: 'MM/DD/YYYY',
  //     separator: ' to ',
  //     locale: {
  //       applyLabel: 'Submit',
  //       cancelLabel: 'Clear',
  //       fromLabel: 'From',
  //       toLabel: 'To',
  //       customRangeLabel: 'Custom',
  //       daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
  //       monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
  //       firstDay: 1
  //     }
  //   };
  //   $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
  //   $('#reportrange').daterangepicker(optionSet1, cb);
  //   $('#reportrange').on('show.daterangepicker', function() {
  //     console.log("show event fired");
  //   });
  //   $('#reportrange').on('hide.daterangepicker', function() {
  //     console.log("hide event fired");
  //   });
  //   $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
  //     console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
  //   });
  //   $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
  //     console.log("cancel event fired");
  //   });
  //   $('#options1').click(function() {
  //     $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
  //   });
  //   $('#options2').click(function() {
  //     $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
  //   });
  //   $('#destroy').click(function() {
  //     $('#reportrange').data('daterangepicker').remove();
  //   });
  // });

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

  
  function edit()
  {
    $("#id").html("<input type='text' class='form-control'  value='AH071'>");   
    $("#nama").html("<input type='text' class='form-control'  value='Albert Pratomo'>");
    $("#email").html("<input type='text' class='form-control'  value='albert.pratomo@yahoo.co.id'>");
    // $("#gender").html("<input type='text' class='form-control'  value='Male'>");  
    $("#gender").html('<label class="radio-inline"><div class="iradio_flat-green checked" style="position: relative;"><input type="radio" name="optradio1" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Male</label><label class="radio-inline"><div class="iradio_flat-green" style="position: relative;"><input type="radio" name="optradio1" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Female</label>');  
    $("#telp").html("<input type='text' class='form-control'  value='087824132977'>");
    $("#address").html("<input type='text' class='form-control'  value='Babatan Pratama 83/2, Surabaya'>");
    $("#user").html("<input type='text' class='form-control'  value='albertpratomo'>");   
    $("#bank").html("<input type='text' class='form-control'  value='0884869752'>");
    $("#rating").html("<input type='text' class='form-control'  value='2.57'>");
    $("#hire").html("<input type='text' class='form-control'  value='09-May-2016'>");   
  }
  
</script>
<script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
<?php include "footer.php"; ?>

</body>
</html>