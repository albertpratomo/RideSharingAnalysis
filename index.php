<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<?php include "top_nav.php"; ?>
<html>
<head>
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

  <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<body>
  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="x_title">Dashboard</h1>
      </div>
    </div>

    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Drivers</span>
        <div class="count">2.586</div>
        <span class="count_bottom"><i class="green">4% </i> From last month</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-users"></i> Total Riders</span>
        <div class="count">12.359</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last month</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-car"></i> Total Rides</span>
        <div class="count green">45.712</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last month</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-credit-card"></i> PMU-pay Top Ups</span>
        <div class="count">37.525K</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last month</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-download"></i> App Downloads</span>
        <div class="count">2.598</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>14% </i> From last month</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-line-chart"></i> Monthly Revenue</span>
        <div class="count">97.325</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>25% </i> From last month</span>
      </div>
    </div>
    <!-- /top tiles -->

<!--     <div class="row tile_count" style="margin: 0;">
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user" style="margin-top:15px;"></i> Total Drivers </span>
        <div class="count">15537</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-users" style="margin-top:15px;"></i> Total Riders </span>
        <div class="count">12456</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user" style="margin-left:-5px;margin-top:15px;"></i> Cancelled Trip</span>
        <div class="count" style="margin-left:25px;">15</div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-credit-card" style="margin-left:8px;margin-top:15px;"></i> Today's Transaction </span>
        <div class="count" style="margin-left:45px;">589</div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-money" style="margin-left:7px;margin-top:15px;"></i> Today's Revenue</span>
        <div class="count">3.789.145</div>
      </div>
    </div -->

    <div class="row" style="margin-top: 0;">
      <div class="row col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Monthly Revenue</h2>
            <div class="filter">
              <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <div class="col-md-9 col-sm-12 col-xs-12" style="padding-top: 10px">
              <div class="demo-container" style="height:280px">
                <div id="placeholder33x" class="demo-placeholder"></div>
              </div>
            <!-- <div class="tiles">
              <div class="col-md-4 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline11 graph" style="height: 160px;">
                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                </span>
              </div>
              <div class="col-md-4 tile">
                <span>Total Revenue</span>
                <h2>$231,809</h2>
                <span class="sparkline22 graph" style="height: 160px;">
                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                </span>
              </div>
              <div class="col-md-4 tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline11 graph" style="height: 160px;">
                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                </span>
              </div>
            </div> -->
          </div>

          <div class="col-md-3 col-sm-12 col-xs-12">
            <div>
              <div class="x_title" style="padding-bottom: 0">
                <h2 style="margin-top: 0">Top Driver</h2>
                <!-- <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a> 
                  </li>
                </ul> -->
                <div class="clearfix"></div>
              </div>

              <ul class="list-unstyled top_profiles scroll-view">
                <li class="media event">
                  <a class="pull-left border-aero profile_thumb">
                    <i class="fa fa-user blue"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Mr. Albert Pratomo</a>
                    <p><strong>IDR 750.235</strong></p>
                    <p> <small>12 Transactions Today</small>
                    </p>
                  </div>
                </li>
                <li class="media event">
                  <a class="pull-left border-green profile_thumb">
                    <i class="fa fa-user green"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Mr. Kevin Nyoto</a>
                    <p><strong>IDR 721.588</strong></p>
                    <p> <small>15 Transactions Today</small>
                    </p>
                  </div>
                </li>
                <li class="media event">
                  <a class="pull-left border-blue profile_thumb">
                    <i class="fa fa-user blue"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Mr. Satria Damai</a>
                    <p><strong>IDR 658.968</strong></p>
                    <p> <small>10 Transactions Today</small>
                    </p>
                  </div>
                </li>
                <li class="media event">
                  <a class="pull-left border-blue profile_thumb">
                    <i class="fa fa-user green"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Ms. Sanitya Purnomo</a>
                    <p><strong>IDR 328.199</strong></p>
                    <p> <small>9 Transactions Today</small>
                    </p>
                  </div>
                </li>
                <!-- <li class="media event">
                  <a class="pull-left border-aero profile_thumb">
                    <i class="fa fa-user aero"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Ms. Mary Jane</a>
                    <p><strong>$2300. </strong> Agent Avarage Sales </p>
                    <p> <small>12 Sales Today</small>
                    </p>
                  </div>
                </li>
                <li class="media event">
                  <a class="pull-left border-green profile_thumb">
                    <i class="fa fa-user green"></i>
                  </a>
                  <div class="media-body">
                    <a class="title" href="#">Ms. Mary Jane</a>
                    <p><strong>$2300. </strong> Agent Avarage Sales </p>
                    <p> <small>12 Sales Today</small>
                    </p>
                  </div>
                </li> -->
              </ul>       
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>

<!-- /page content -->
<?php include "footer.php"; ?>
<!-- Flot -->
<script>
  $(document).ready(function() {
    //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
    var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

    //generate random number for charts
    randNum = function() {
      return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
    };

    var d1 = [];
    //var d2 = [];

    //here we generate data for chart
    for (var i = 0; i < 30; i++) {
      d1.push([new Date(new Date(15,9,1).add(i).months()).getTime(), randNum() + i + i + 10]);
      //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
    }

    var chartMinDate = d1[0][0]; //first day
    var chartMaxDate = d1[20][0]; //last day

    var tickSize = [1, "day"];
    var tformat = "%d/%m/%y";

    //graph options
    var options = {
      grid: {
        show: true,
        aboveData: true,
        color: "#3f3f3f",
        labelMargin: 10,
        axisMargin: 0,
        borderWidth: 0,
        borderColor: null,
        minBorderMargin: 5,
        clickable: true,
        hoverable: true,
        autoHighlight: true,
        mouseActiveRadius: 100
      },
      series: {
        lines: {
          show: true,
          fill: true,
          lineWidth: 2,
          steps: false
        },
        points: {
          show: true,
          radius: 4.5,
          symbol: "circle",
          lineWidth: 3.0
        }
      },
      legend: {
        position: "ne",
        margin: [0, -25],
        noColumns: 0,
        labelBoxBorderColor: null,
        labelFormatter: function(label, series) {
          // just add some space to labes
          return label + '&nbsp;&nbsp;';
        },
        width: 40,
        height: 1
      },
      colors: chartColours,
      shadowSize: 0,
      tooltip: true, //activate tooltip
      tooltipOpts: {
        content: "%s: %y.0",
        xDateFormat: "%d/%m",
        shifts: {
          x: -30,
          y: -50
        },
        defaultTheme: false
      },
      yaxis: {
        min: 0
      },
      xaxis: {
        mode: "time",
        minTickSize: tickSize,
        timeformat: tformat,
        min: chartMinDate,
        max: chartMaxDate
      }
    };
    var plot = $.plot($("#placeholder33x"), [{
      label: " Revenue",
      data: d1,
      lines: {
        fillColor: "rgba(150, 202, 89, 0.12)"
      }, //#96CA59 rgba(150, 202, 89, 0.42)
      points: {
        fillColor: "#fff"
      }
    }], options);
  });
</script>
<!-- /Flot -->
<!-- bootstrap-daterangepicker -->
<script type="text/javascript">
  $(document).ready(function() {

    var cb = function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
      startDate: moment().subtract(30, 'days'),
      endDate: moment(),
      minDate: '01/01/2012',
      maxDate: '12/31/2018',
      dateLimit: {
        days: 60
      },
      showDropdowns: true,
      showWeekNumbers: true,
      timePicker: false,
      timePickerIncrement: 1,
      timePicker12Hour: true,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      opens: 'left',
      buttonClasses: ['btn btn-default'],
      applyClass: 'btn-small btn-primary',
      cancelClass: 'btn-small',
      format: 'MM/DD/YYYY',
      separator: ' to ',
      locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Clear',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
      }
    };
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker(optionSet1, cb);
    $('#reportrange').on('show.daterangepicker', function() {
      console.log("show event fired");
    });
    $('#reportrange').on('hide.daterangepicker', function() {
      console.log("hide event fired");
    });
    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
      console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
      console.log("cancel event fired");
    });
    $('#options1').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
    });
    $('#options2').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
    });
    $('#destroy').click(function() {
      $('#reportrange').data('daterangepicker').remove();
    });
  });
</script>

<!-- /bootstrap-daterangepicker -->
</body>
</html>